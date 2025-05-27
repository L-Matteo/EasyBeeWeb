<?php

require_once "View/v_header.php";
require_once "Model/connexionBdd.php";
require_once "Controller/c_accueil.php";
require_once "Controller/c_stagiaire.php";

$database = new Database();
$db = $database->getBdd();
session_start();

$action = $_GET["action"] ?? "accueil"; 

$ca = new ControllerAccueil($db);
$cs = new ControllerStagiaire($db);

switch($action){
    case "accueil":
        $cs->c_connexion();
        $ca->c_showFormations(); 
        break;
    case "createAccount":
        $cs->c_createAccount();
        break;
    case "formation":
        $ca->c_accueilConnecte();
        break;
    case "inscription":
        require_once "View/inscriptionFormation.php";
        break;
}

require_once "View/v_footer.php";
 
?>