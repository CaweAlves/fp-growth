<?php

namespace app\database;

use PDO;

class Connection
{
    private static $connection = null;
    public readonly string $database;
    public readonly string $host;
    public readonly string $username;
    public readonly string $password;
    public readonly int $port;

    public function __construct()
    {
        $config = require_once __DIR__ . '/../../config/DatabaseConfig.php';
        $this->database = $config['database'];
        $this->host = $config['host'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->port = $config['port'];

    }

    public function connect(): PDO
    {
        if (!self::$connection) {
            self::$connection = new PDO("mysql:dbname=$this->database;host=$this->host;port=$this->port", $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        }

        return self::$connection;
    }

}