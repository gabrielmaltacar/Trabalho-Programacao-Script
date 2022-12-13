# CRUD`s com PHP orientado a objetos, PDO e MySQL
Sistema de cadastro de empresas e vagas de emprego.

## Banco de dados
Crie um banco de dados e execute as instruções SQLs abaixo para criar a tabela `vagas`:
```sql
  	CREATE TABLE `vagas` (
		`id` int NOT NULL AUTO_INCREMENT,
		`empresa_id` int NOT NULL,
		`titulo` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
		`descricao` mediumtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
		`ativo` enum('s','n') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
		`data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		PRIMARY KEY (`id`) USING BTREE,
		KEY `vagas_empresa_id_fk_idx` (`empresa_id`),
		CONSTRAINT `vagas_empresa_id_fk` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

	CREATE TABLE `empresas` (
		`id` int NOT NULL AUTO_INCREMENT,
		`cnpj` varchar(45) NOT NULL,
		`razao_social` varchar(100) NOT NULL,
		`nome_fantasia` varchar(100) NOT NULL,
		`ramo` varchar(255) NOT NULL,
		`num_fun` int NOT NULL,
		`descricao` mediumtext NOT NULL,
		PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

## Configuração
As credenciais do banco de dados estão no arquivo `./app/Db/Database.php` e você deve alterar para as configurações do seu ambiente (HOST, NAME, USER e PASS).

## Composer
Para a aplicação funcionar, é necessário rodar o Composer para que sejam criados os arquivos responsáveis pelo autoload das classes.

Caso não tenha o Composer instalado, baixe pelo site oficial: [https://getcomposer.org/download](https://getcomposer.org/download/)

Para rodar o composer, basta acessar a pasta do projeto e executar o comando abaixo em seu terminal:
```shell
 composer install
```