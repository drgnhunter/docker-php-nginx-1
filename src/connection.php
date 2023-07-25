<?php

class Database
{

    public static $connection;

    public static function setUpConnection()
    {

        // if (!isset(Database::$connection)) {
        //     Database::$connection = new mysqli("10.52.33.2", "admin", "%APg-XRn2&N':)|X", "ngator_learning_1", "3306");
        // }

           if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", "Irony@aHunter123@", "ngator_learning_1", "3306");
        }
    }
    public static function getConnection()
    {
        
        Database::setUpConnection();
        if (isset(Database::$connection)) {
            return Database::$connection;
        }
    }


    public static function iud($q)
    {

        Database::setUpConnection();
        Database::$connection->query($q);
    }

    public static function search($q)
    {

        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }
}
