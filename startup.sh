#!/bin/bash

echo "Copiando config do Nginx..."
cp /home/site/wwwroot/nginx/default /etc/nginx/sites-available/default

echo "Recarregando Nginx..."
service nginx reload

echo "Iniciando PHP-FPM..."
service php8.2-fpm start 2>/dev/null || service php8.3-fpm start 2>/dev/null || true

echo "Aguardando serviços subirem..."
sleep 5

echo "Rodando setup do Laravel..."

# Garante permissões
chmod -R 775 storage bootstrap/cache

# Limpa caches antigos
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Executa migrations
php artisan migrate --force

# Gera caches para produção
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Laravel pronto para produção!"