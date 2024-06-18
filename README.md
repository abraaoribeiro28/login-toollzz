<p align="center">
    <img src="public/assets/images/logo-light.svg" width="400" alt="Toolzz Logo">
</p>

## Sobre
O projeto consiste em uma página web de login e cadastro, oferecendo uma interface
intuitiva para acesso e registro de usuários. O design é moderno e responsivo,
adaptando-se a diferentes dispositivos. A página de login inclui campos para e-mail de
usuário e senha. A seção de cadastro solicita informações básicas como nome, e-mail e
senha, com segurança através de criptografia de dados e validações.


# Instalação

## Pré requisitos
- PHP >= 8.2
- Composer
- Nginx ou Apaxe
- Node.js e NPM (necessário para compilar assets front-end)
- Banco de dados (MySQL, PostgreSQL, Sqlite...)

### Clone do projeto
<p>
    Comece clonando o projeto para o seu local
</p>

```bash
git clone https://github.com/abraaoribeiro28/login-toollzz.git
```

### Configurações do projeto
Após clonar o projeto, copie o arquivo `.env.example` nomeando-o para `.env.` <br>
Modifique as informações de conexão do seu banco de dados no arquivo `.env`:

```bash
DB_CONNECTION=sqlite
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=laravel
#DB_USERNAME=root
#DB_PASSWORD=
```

Caso você queira continuar com o sqlite, crie um arquivo `databse.sqlite` dentro da pasta `database`.

### Execução
Instale as dependencias do composer com:

```bash
composer install
```
Em seguida execute as migrations

```bash
php artisan migrate --seed
```
Agora faça o build dos assets

```bash
npm run build
```
Execute o comando para simular um servidor

```bash
php artisan serve
```
Agora em seu navegador acesse

```bash
localhost:8000
```

Agora o projeto deve estar funcionando.

# API
Esta API permite a autenticação e criação de usuários e o acesso a recursos protegidos.
A autenticação é realizada utilizando Laravel Sanctum.

# API Documentation

## Introduction

Esta API permite a autenticação de usuários e o acesso a recursos protegidos. A autenticação é realizada utilizando Laravel Sanctum.

## Endpoints

## Entrar (login)

| Método | Url                          |
|:-------|:-----------------------------|
| POST   | http://\<dominio\>/api/login |

**Header**
- Content-Type `application/json`
- Accept `application/json`

**Body**
```bash
{
    "email": "test@example.com",
    "password": "password"
}
```

**Exemplo de retorno**
```bash
{
    "access_token": "1|ycVE4nH7J9NqxRGejgOi3bH18fmZQwMjcZlmVZCm7358746c",
    "token_type": "Bearer"
}
```

## Registro (register)

| Método | Url                             |
|:-------|:--------------------------------|
| POST   | http://\<dominio\>/api/register |

**Header**
- Content-Type `application/json`
- Accept `application/json`

**Body**
```bash
{
    "name": "Root",
    "email": "root@example.com",
    "password": "password"
}
```

**Exemplo de retorno**
```bash
{
    "message": "Usuário criado com sucesso!"
}
```


## Sair (logout)

| Método | Url                             |
|:-------|:--------------------------------|
| POST   | http://\<dominio\>/api/logout |

**Header**
- Authorization `Bearer TOKEN`
- Content-Type `application/json`
- Accept `application/json`

**Exemplo de retorno**
```bash
{
    "message": "Usuário criado com sucesso!"
}
```

