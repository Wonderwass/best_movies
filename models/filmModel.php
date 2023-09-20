<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/best_movies/models/database.php";
class Film
{
    // methode pour enregistrer une livre
    public static function addFilm($title, $number_main_actors, $number_total_actors)
    {

        // se connecter a la data base
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("INSERT INTO actor (title, number_main_actors, number_total_actors) VALUES (?, ?, ?) ");

        // executer la requete
        try {
            $request->execute(array($title, $number_main_actors, $number_total_actors));
            header("Location: http://localhost/best_movies/views/list_film.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // methode pour recuperer la liste des livres
    public static function listFilm()
    {
        // se connecter a la data base
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("SELECT * FROM film");

        // executer la requete
        try {
            $request->execute();

         
            $listFilm = $request->fetchAll();
            return $listFilm;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}