## 1 - Clonar o repositório ou baixar ele como zip e descompactar na pasta que for usar

## 1.5 - Para clonar o repositório ustilize os seguintes passos:

### Entrar na pasta destinada para o projeto e executar o comando:

```bash 
git clone https://github.com/CaioBorges06/GaragemOnline.git
```

## 2 - Entrar na pasta do projeto

## 3 - Instalar o composer com o comando: 

```bash 
composer install
```

## 4 - renomear o arquivo .env.exemple para .env com o comando:

```bash 
mv .env.example .env
```

## 5 - Gerar a chave da aplicação com o comando: 

```bash 
php artisan key:generate
```

## 6 - (Apenas se caso o ) Configurar o .env substituindo esse bloco:

```bash 
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

## Por este:

```bash 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Automotivos
DB_USERNAME=root
DB_PASSWORD=
```

## 7 - Ligar o Apache e o MySQL no Xampp

## 8 - Legitimar a criação do banco Laravel com o comando:

```bash 
php artisan migrate
```

## Crie a tabela 'categorias':

```bash 
CREATE TABLE categorias ( id int(11) NOT NULL AUTO_INCREMENT, categoria varchar(30) COLLATE utf8mb4_general_ci NOT NULL, created_at timestamp NULL DEFAULT NULL, updated_at timestamp NULL DEFAULT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

## Crie a tabela 'cores'

```bash 
CREATE TABLE cores ( id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, cor VARCHAR(30) NOT NULL, created_at TIMESTAMP NULL DEFAULT NULL, updated_at TIMESTAMP NULL DEFAULT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

## Crie a tabela 'modelos'

```bash 
CREATE TABLE modelos ( id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, modelo VARCHAR(40) NOT NULL, created_at TIMESTAMP NULL DEFAULT NULL, updated_at TIMESTAMP NULL DEFAULT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

## Crie a tabela 'marcas'

```bash 
CREATE TABLE marcas ( id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, marca VARCHAR(30) NOT NULL, created_at TIMESTAMP NULL DEFAULT NULL, updated_at TIMESTAMP NULL DEFAULT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

Tabela 'carros'

```bash 
CREATE TABLE carros ( id int(11) NOT NULL AUTO_INCREMENT, categoria varchar(30) COLLATE utf8mb4_general_ci NOT NULL, modelo varchar(40) COLLATE utf8mb4_general_ci NOT NULL, marca varchar(30) COLLATE utf8mb4_general_ci NOT NULL, cor varchar(30) COLLATE utf8mb4_general_ci NOT NULL, ano year(4) NOT NULL, km int(11) NOT NULL, valor decimal(10,2) NOT NULL, detalhes text COLLATE utf8mb4_general_ci NOT NULL, fotoUm varchar(255) COLLATE utf8mb4_general_ci NOT NULL, fotoDois varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL, fotoTres varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL, created_at timestamp NULL DEFAULT NULL, updated_at timestamp NULL DEFAULT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```


## Faça este INSERT na tabela 'users'

```bash 
INSERT INTO users(id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES (1,'caio123','caio123@gmail.com',NULL,'$2y$12$4uBe/MgxxRi1n8W8iDoXxOcQB3iuBk9XLPaaQsnP1Lx0TyA1NXjc.',NULL,NOW(),NOW())
```

## 9 - Subir o projeto com o comando: php artisan serve


## Usuário: caio123 
## senha: caio123