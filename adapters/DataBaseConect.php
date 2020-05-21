<?php

declare(strict_types=1);

include_once 'MySQLAdapter.php';

class DataBaseConect
{

    private static $connection = null;

    public static function getConnection()
    {
        if (self::$connection == null) {
            self::$connection = new MySQLAdapter("127.0.0.1", 3306, "userdaw1", "M3phpdaw@", "demophp");
            if (strcmp(self::$connection->connect(), "done") != 0) {
                self::$connection = null;
            }
        }
        return self::$connection;
    }

    public static function closeConnection()
    {
        self::$connection->closeConnection();
        self::$connection = null;
    }

}
