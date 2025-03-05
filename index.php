<?php

require_once "View/v_header.php";
require_once "Model/connexionBdd.php";

$database = new Database();
$db = $database->getBdd();

$action = $_GET["action"] ?? "accueil";

switch($action){
    case "accueil":
        require_once "View/v_accueil.php";
        break;
    case "signIn": 
        require_once "View/v_signIn.php";
        break;
    case "createAccount":
        require_once "View/v_createAccount.php";
        break;
}

require_once "View/v_footer.php";

?>