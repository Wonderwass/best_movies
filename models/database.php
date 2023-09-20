<?php
class Database
{
    //une methode static est une methode qu'on peut executer sans instancier la class dans laquel elle est implementée
    public static function dbConnect()
    {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=localhost;dbname=best_movies", "root", "");
        } catch (PDOException $e) {
            $conn = $e->getMessage();
        }
        return $conn;
    }
}