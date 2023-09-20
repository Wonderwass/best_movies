<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/best_movies/models/database.php";
class Actor
{
    // methode pour enregistrer une livre
    public static function addActor($name, $email)
    {

        // se connecter a la data base
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("INSERT INTO actor (name, email) VALUES (?, ?) ");

        // executer la requete
        try {
            $request->execute(array($name, $email));
            header("Location: http://localhost/best_movies/views/list_actor.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // methode pour recuperer la liste des livres
    public static function listActor()
    {
        // se connecter a la data base
        $db = Database::dbConnect();

        // preparer la requete
        $request = $db->prepare("SELECT * FROM actor");

        // executer la requete
        try {
            $request->execute();

            // recuperer le resultat de la requete dans un tableau "listActor"
            $listActor = $request->fetchAll();
            return $listActor;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}