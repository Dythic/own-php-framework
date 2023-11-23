<?php

class Database
{
    private static $instance = null;

    /**
     * Return database connexion
     * 
     * @return PDO
     */

    public static function getPdo(): PDO
    {
        if (self::$instance === null) {
            self::$instance = new PDO('mysql:host=localhost;port=3307;dbname=dev;charset=utf8', 'dev', 'dev', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }

        return self::$instance;
    }
}