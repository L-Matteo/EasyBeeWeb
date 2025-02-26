<?php

require_once "View/v_header.php";
require_once "Model/connexionBdd.php";

$database = new Database();
$db = $database->getBdd();

$action = $_GET["action"] ?? "accueil";

switch($action){
    case "accueil":
        require_once "";
        break;
    case "seConnecter": 
        break;
}

?>