# Guia de implantação do projeto

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

# Telas do Funcionamento 

## Login:

<a href="https://ibb.co/Kpx762Nc"><img src="https://i.ibb.co/C3KvBbJp/ad.png" alt="ad" border="0" /></a>

<a href="https://ibb.co/MxM2gxxP"><img src="https://i.ibb.co/21gnF11c/lo.png" alt="lo" border="0" /></a>

<a href="https://ibb.co/RThwfSq7"><img src="https://i.ibb.co/zV8vp5zN/image.png" alt="image" border="0" /></a>

## Cadastrar Itens:

### Categoria

<a href="https://ibb.co/MxwFWhzW"><img src="https://i.ibb.co/7dMs8z38/image.png" alt="image" border="0" /></a>

<a href="https://ibb.co/sp5czQN5"><img src="https://i.ibb.co/j9VqsGQV/image.png" alt="image" border="0" /></a>

### Modelo

<a href="https://ibb.co/S4H0pkby"><img src="https://i.ibb.co/21RPBzxh/image.png" alt="image" border="0" /></a>

<a href="https://ibb.co/sp5czQN5"><img src="https://i.ibb.co/j9VqsGQV/image.png" alt="image" border="0" /></a>

### Cor

<a href="https://ibb.co/Ngv3QLKj"><img src="https://i.ibb.co/j9N5BLDM/image.png" alt="image" border="0" /></a>

<a href="https://ibb.co/vvD6H1Ht"><img src="https://i.ibb.co/JFCwKnKh/image.png" alt="image" border="0" /></a>

### Marca

<a href="https://ibb.co/zTNZTkys"><img src="https://i.ibb.co/1tbTtSDZ/image.png" alt="image" border="0" /></a>

<a href="https://ibb.co/Hpb3kZvc"><img src="https://i.ibb.co/fGyLPJR3/image.png" alt="image" border="0" /></a>

## Adicionar Carro:

<a href="https://ibb.co/tM52J8yg"><img src="https://i.ibb.co/BVR6Cq8b/image.png" alt="image" border="0" /></a>

<a href="https://ibb.co/j9QM2HXn"><img src="https://i.ibb.co/qLcsfxQT/image.png" alt="image" border="0" /></a>

<a href="https://ibb.co/C5JnT8FS"><img src="https://i.ibb.co/Z6HhkXCb/image.png" alt="image" border="0" /></a>

## Ver Carros:

<a href="https://ibb.co/ZzdN06cX"><img src="https://i.ibb.co/YB2bx7fQ/image.png" alt="image" border="0" /></a>

## Detalhes:

<a href="https://ibb.co/zkVn5zv"><img src="https://i.ibb.co/R5TvSqw/image.png" alt="image" border="0" /></a>

<a href="https://ibb.co/JDqX3rg"><img src="https://i.ibb.co/QyksDYt/image.png" alt="image" border="0" /></a>

## Editar:

<a href="https://ibb.co/jkJdCCbC"><img src="https://i.ibb.co/5hKdQQGQ/image.png" alt="image" border="0" /></a>

<a href="https://ibb.co/SwqcSd7y"><img src="https://i.ibb.co/VYXx6Qp9/image.png" alt="image" border="0" /></a>

## Excluir:

<a href="https://ibb.co/jkJdCCbC"><img src="https://i.ibb.co/5hKdQQGQ/image.png" alt="image" border="0" /></a>

<a href="https://ibb.co/SwqcSd7y"><img src="https://i.ibb.co/VYXx6Qp9/image.png" alt="image" border="0" /></a>


## Alterar senha:

<a href="https://ibb.co/SwqcSd7y"><img src="https://i.ibb.co/nqDZF3SL/image.png" alt="image" border="0" /></a>

<a href="https://ibb.co/SwqcSd7y"><img src="https://i.ibb.co/C3TKtx7Z/image.png" alt="image" border="0" /></a>
