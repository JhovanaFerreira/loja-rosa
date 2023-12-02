<?php
$host = 'localhost';
$dbname = 'loja_rosa';
$username = 'root';
$password = ''; // Sem senha

class Connection {
    private static $conn;

    public static function getConnection() {
        if (!isset(self::$conn)) {
            self::$conn = new PDO('mysql:host=localhost;dbname=loja-rosa', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }

        return self::$conn;
    }
}

?>