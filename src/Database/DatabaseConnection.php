<?php
declare(strict_types=1);

namespace Practice\Database;

use PDO;
use PDOException;

class DatabaseConnection
{
    private static ?DatabaseConnection $instance = null;
    private PDO $pdo;

    private function __construct($host, $db, $user, $password)
    {
        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

        try {
            $this->pdo = new PDO($dsn, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Ошибка подключения к базе данных: ' . $e->getMessage());
        }
    }

    public static function getInstance($host, $db, $user, $password): DatabaseConnection
    {
        if (self::$instance === null) {
            self::$instance = new self($host, $db, $user, $password);
        }

        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
