<?php
session_start();
require_once "../../models/actorModel.php";
require_once "../../models/filmModel.php";





if (isset($_POST['connexion'])) {
    $name = htmlspecialchars($_POST['actor']);
    $email = htmlspecialchars($_POST['email']);


    Actor::addActor($name, $email);
}
// //pou
if (isset($_POST['add'])) {
    $title = htmlspecialchars($_POST['title']);
    $number_main_actors = htmlspecialchars($_POST['number_main_actors']);
    $number_total_actors = htmlspecialchars($_POST['number_total_actors']);

    Film::addFilm($title, $number_main_actors, $number_total_actors);
}