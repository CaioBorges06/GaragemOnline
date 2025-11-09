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
