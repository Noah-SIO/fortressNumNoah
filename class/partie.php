<?php
class Partie{
    // Déclaration des propriétés
    private $id_partie;
    private $id_joueur;
    private $date_partie;
    private $score;

    // Constructeur pour initialiser les propriétés
    public function __construct($id_partie, $id_joueur, $date_partie, $score) {
        $this->id_partie = $id_partie;
        $this->id_joueur = $id_joueur;
        $this->date_partie = $date_partie;
        $this->score = $score;
    }

    // Méthodes 'get' et 'set' pour id_partie
    public function getIdPartie() {
        return $this->id_partie;
    }

    public function setIdPartie($id_partie) {
        $this->id_partie = $id_partie;
    }

    // Méthodes 'get' et 'set' pour id_joueur
    public function getIdJoueur() {
        return $this->id_joueur;
    }

    public function setIdJoueur($id_joueur) {
        $this->id_joueur = $id_joueur;
    }

    // Méthodes 'get' et 'set' pour date_partie
    public function getDatePartie() {
        return $this->date_partie;
    }

    public function setDatePartie($date_partie) {
        $this->date_partie = $date_partie;
    }

    // Méthodes 'get' et 'set' pour score
    public function getScore() {
        return $this->score;
    }

    public function setScore($score) {
        $this->score = $score;
    }  
}
class ManagerPartie {
    private $bd;

    public function __construct() {
        $this->bd = new PDO("mysql:host=localhost;dbname=fortress", 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    //public function AddPartie()

    

}