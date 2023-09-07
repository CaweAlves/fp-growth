<?php

$pathEnv = dirname(__FILE__, 2);
$dotenv = Dotenv\Dotenv::createImmutable($pathEnv);
$dotenv->load();

return [
    'host' => getenv('DB_HOST') ?: 'localhost',
    'port' => getenv('DB_PORT') ?: '3306',
    'database' => getenv('DB_DATABASE') ?: 'fpGrowth',
    'username' => getenv('DB_USERNAME') ?: 'root',
    'password' => getenv('DB_PASSWORD') ?: '',
];