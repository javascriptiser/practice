<?php
declare(strict_types=1);

use Practice\Practice\Database\DatabaseConnection;
use Practice\Practice\Helpers\EnvParser;

$env = new EnvParser("./.env");
list($host, $db, $user, $password) = array_values($env->getAllValues());

$dbConnection = DatabaseConnection::getInstance($host, $db, $user, $password);
$pdo = $dbConnection->getConnection();

try {
    // Выполнение SELECT-запроса
    $query = "SELECT * FROM crust";
    $stmt = $pdo->query($query);

    // Обработка результатов запроса
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Доступ к значениям столбцов таблицы
        $id = $row['id'];
        $name = $row['name'];

        // Дальнейшая обработка данных
        echo "ID: $id, Name: $name<br>";
    }
} catch (PDOException $e) {
    // Обработка ошибок подключения к базе данных
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
}




