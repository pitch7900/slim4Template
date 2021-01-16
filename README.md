# slim4Template

Features :

- Template for Slim 4.
- Authentication with basic database attributes
- Use of Bootstrap 5 (beta)
- Use of FontAwesome
- Darktheme managemnt possible per user
- Basic user management

## Databases queries

```sql
-- Create Database user
CREATE USER 'slim4template'@'%' IDENTIFIED WITH mysql_native_password AS '***';
GRANT USAGE ON *.* TO 'slim4template'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
-- Create Database
CREATE DATABASE IF NOT EXISTS `slim4template`;
--Grant priviledges
GRANT ALL PRIVILEGES ON `slim4template`.* TO 'slim4template'@'%';
GRANT ALL PRIVILEGES ON `slim4template\_%`.* TO 'slim4template'@'%'; 
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(256) DEFAULT NULL,
  `lastname` varchar(256) DEFAULT NULL,
  `darktheme` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Create a user admin with password admin
INSERT INTO `users` (`id`, `login`, `password`, `firstname`, `lastname`,`darktheme`) VALUES
(1,'admin', '$2y$10$kLGGK48AaBCrIHlIiDpqfuv/WPD3rOxC4Bnxw2xMKXOz7rzlGDPbq', 'Admin', 'Admin', 1);
COMMIT;
```

## Configuration file

/config/.env

```ini
DB_DRIVER=mysql
DB_HOST=127.0.0.1
DB_DATABASE=slim4template
DB_USERNAME=slim4template
DB_PASSWORD=slim4template
DB_PORT=3306
OPTIMISTICSESSIONSHANDLER=1
```

## Composer installation

```bash
composer install
```

## gulp installation

```bash
npm install gulp --save-dev
npm install -g gulp-cli
npm install gulp-connect-php
npm install browser-sync
```
