<?php

require_once "Model/formations.php";
require_once "Model/stagiaire.php";

class ControllerAccueil
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function c_showFormations()
    {
        $formation = new Formation($this->db);
        $stmt = $formation->showFormations();
        $lesFormations = $stmt->fetchAll(PDO::FETCH_ASSOC);
        require_once "View/v_accueil.php";
    }

    public function c_connexion()
    {

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $stagiaire = new Stagiaire($this->db);

            $stagiaire->setLogin($_POST["connexionLogin"]);
            $stagiaire->setPassword($_POST["connexionPassword"]);

            if($stagiaire->connexion()){ ?>
                <h2>Vous êtes connecté !</h2> <!-- TODO : afficher la suite de l'application à la place du h2 !-->
            <?php
            }
            
        } 
    }
}
?>