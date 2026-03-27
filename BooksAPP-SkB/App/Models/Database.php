<?php
namespace App\Models;

use PDO;
use PDOException;

class Database {
    private static $connection = null;

    public static function getConnection() {
        if (self::$connection === null) {
            try {
                // Sestavení DSN pomocí definovaných konstant
                $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
                
                self::$connection = new PDO($dsn, DB_USER, DB_PASS);
                
                // Nastavení hlášení chyb pro okamžitou diagnostiku
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                
            } catch (PDOException $e) {
                // Zastavení systému při selhání komunikace s olovem
                die("Kritická chyba spojení: " . $e->getMessage());
            }
        }
        return self::$connection;
    }
}