<?php

require_once "Model/formations.php";

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
}
