<?php

namespace Config;

use PDO;
use PDOException;

class Database
{
    private static $instance = null;

    public static function getConnection()
    {
        if (self::$instance === null) {
            $host = getenv('DB_HOST') ?: 'db';
            $db   = getenv('DB_NAME') ?: 'renubiome';
            $user = getenv('DB_USER') ?: 'renubiome_user';
            $pass = getenv('DB_PASS') ?: 'secure_password';
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            try {
                self::$instance = new PDO($dsn, $user, $pass, $options);
            } catch (PDOException $e) {
                // In production, log this error, don't echo
                die("Database connection failed: " . $e->getMessage());
            }
        }

        return self::$instance;
    }
}
