************************** PASSO A PASSO PARA IMPLEMENTAR O PROJETO **************************

1 - Clonar o repositório ou baixar ele como zip e descompactar na pasta que for usar

2 - Entrar na pasta do projeto pelo Terminal

3 - Instalar o composer com o comando: composer install

4 - Criar uma cópia do arquivo .env com o comando: cp .env.example .env

5 - Gerar a chave da aplicação com o comando: php artisan key:generate

6 - Veja se o bloco responsável pela conexão de dados está assim, se não substitua por isso:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

7 - Ligar o Apache e o MySQL no Xampp

8 - Legitimar a criação do banco Laravel com o comando: php artisan migrate

9 - Subir o projeto com o comando: php artisan serve

Scripts das tabelas:

Tabela 'categorias':

CREATE TABLE categorias ( id int(11) NOT NULL AUTO_INCREMENT, categoria varchar(30) COLLATE utf8mb4_general_ci NOT NULL, created_at timestamp NULL DEFAULT NULL, updated_at timestamp NULL DEFAULT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

Tabela 'cores'

CREATE TABLE cores ( id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, cor VARCHAR(30) NOT NULL, created_at TIMESTAMP NULL DEFAULT NULL, updated_at TIMESTAMP NULL DEFAULT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

Tabela 'modelos'

CREATE TABLE modelos ( id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, modelo VARCHAR(40) NOT NULL, created_at TIMESTAMP NULL DEFAULT NULL, updated_at TIMESTAMP NULL DEFAULT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

Tabela 'marcas'

CREATE TABLE marcas ( id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, marca VARCHAR(30) NOT NULL, created_at TIMESTAMP NULL DEFAULT NULL, updated_at TIMESTAMP NULL DEFAULT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

Tabela 'carros'

CREATE TABLE carros ( id int(11) NOT NULL AUTO_INCREMENT, categoria varchar(30) COLLATE utf8mb4_general_ci NOT NULL, modelo varchar(40) COLLATE utf8mb4_general_ci NOT NULL, marca varchar(30) COLLATE utf8mb4_general_ci NOT NULL, cor varchar(30) COLLATE utf8mb4_general_ci NOT NULL, ano year(4) NOT NULL, km int(11) NOT NULL, valor decimal(10,2) NOT NULL, detalhes text COLLATE utf8mb4_general_ci NOT NULL, fotoUm varchar(255) COLLATE utf8mb4_general_ci NOT NULL, fotoDois varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL, fotoTres varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL, created_at timestamp NULL DEFAULT NULL, updated_at timestamp NULL DEFAULT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

FAÇA ESSE INSERT NA TABELA 'users'

INSERT INTO users(id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES (1,'caio123','caio123@gmail.com',NULL,'$2y$12$4uBe/MgxxRi1n8W8iDoXxOcQB3iuBk9XLPaaQsnP1Lx0TyA1NXjc.',NULL,NOW(),NOW())

Usuário: caio123 senha: caio123

Para subir o site use o comando: php artisan serve
