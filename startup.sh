#!/bin/bash

echo "Copiando config do Nginx..."
cp /home/site/wwwroot/nginx/default /etc/nginx/sites-available/default

echo "Recarregando Nginx..."
service nginx reload

echo "Iniciando PHP-FPM..."
service php8.2-fpm start 2>/dev/null || service php8.3-fpm start 2>/dev/null || true