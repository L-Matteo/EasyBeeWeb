<?php

require_once "View/v_header.php";
require_once "Model/connexionBdd.php";
require_once "Controller/c_accueil.php";
require_once "Controller/c_stagiaire.php";
require_once "Controller/c_formation.php";

$database = new Database();
$db = $database->getBdd();
session_start();

$action = $_GET["action"] ?? "accueil"; 

$ca = new ControllerAccueil($db);
$cs = new ControllerStagiaire($db);
$cf = new ControllerFormation($db);

switch($action){
    case "accueil":
        $cs->c_connexion();
        $ca->c_showFormations(); 
        break;
    case "createAccount":
        $cs->c_createAccount();
        break;
    case "formation":
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $cf->c_filtrerFormation();
        } else {
            $ca->c_accueilConnecte();
        }
        break;
    case "inscription":
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            echo "Vous êtes inscri"; // TODO remplacer pour une fonction
        } else {
            $cf->c_selectFormationById();
        }
        break;
}

require_once "View/v_footer.php";
 
?>