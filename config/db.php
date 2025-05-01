<?php 

class db {
    private static $conn;

    public static function connect() {
        if (!isset(self::$conn)) {
            try {
                self::$conn = new PDO("mysql:host=localhost;dbname=qa-apps", "root", "");
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        return self::$conn;
    }
}

?>