# 🍽️ Quase Tudo Gostoso

O **Quase Tudo Gostoso** é uma aplicação desenvolvida para a **publicação de receitas culinárias**, oferecendo uma experiência simples e intuitiva para quem deseja compartilhar ou consultar receitas.  
Atualmente, o sistema conta com as seguintes funcionalidades:

- ✍️ **Inscrição de usuários**
- 🔐 **Login e Logout**
- 🗂️ **Cadastro de categorias**
- 🍛 **Cadastro de refeições**
- 🧩 **Cadastro de dificuldades**
- 🍽️ **Cadastro de receitas completas com imagem**
- 🏠 **Página inicial com destaques de receitas**

---

## 🚀 Pré-requisitos

Antes de rodar o projeto, certifique-se de ter instalado:

- **PHP 8.3.x**  
- **Composer**  
- **Laravel 12.x**

Além disso, é necessário **configurar o arquivo `php.ini`** habilitando as extensões necessárias para o Laravel e para uploads de arquivos, como:

- `pdo_mysql`
- `fileinfo`

---

## 🛠️ Como rodar a aplicação

Siga o passo a passo abaixo:

### 1. Clone o repositório
```bash
git clone https://seu-repositorio-aqui.git
cd nome-da-pasta-do-projeto
```

### 2. Instale as dependências
```bash
composer install
```

### 3. Configure o arquivo `.env`
Crie o arquivo `.env` com base no `.env.example`:
```bash
cp .env.example .env
```

Atualize nele as credenciais do seu banco de dados.

### 4. Gere a key da aplicação
```bash
php artisan key:generate
```

### 5. Execute as migrações
```bash
php artisan migrate
```

### 6. Gere um link simbólico para acessar as imagens
```bash
php artisan storage:link
```

### 7. Inicie o servidor local
```bash
php artisan serve
```

Agora a aplicação estará disponível em:  
👉 **http://localhost:8000**

---