<?php
class Joueur {
// Déclaration des propriétés
private $id_joueur;
private $pseudo;
private $email;
private $date_inscription;
private $score;

// Constructeur pour initialiser les propriétés
public function __construct($id_joueur, $pseudo, $email, $date_inscription, $score) {
    $this->id_joueur = $id_joueur;
    $this->pseudo = $pseudo;
    $this->email = $email;
    $this->date_inscription = $date_inscription;
    $this->score = $score;
}

// Méthodes 'get' et 'set' pour id_joueur
public function getIdJoueur() {
    return $this->id_joueur;
}

public function setIdJoueur($id_joueur) {
    $this->id_joueur = $id_joueur;
}

// Méthodes 'get' et 'set' pour pseudo
public function getPseudo() {
    return $this->pseudo;
}

public function setPseudo($pseudo) {
    $this->pseudo = $pseudo;
}

// Méthodes 'get' et 'set' pour email
public function getEmail() {
    return $this->email;
}

public function setEmail($email) {
    $this->email = $email;
}

// Méthodes 'get' et 'set' pour date_inscription
public function getDateInscription() {
    return $this->date_inscription;
}

public function setDateInscription($date_inscription) {
    $this->date_inscription = $date_inscription;
}

// Méthodes 'get' et 'set' pour score
public function getScore() {
    return $this->score;
}

public function setScore($score) {
    $this->score = $score;
}
}
class ManagerJoueur {
    private $bd;

    public function __construct() {
        $this->bd = new PDO("mysql:host=localhost;dbname=fortress", 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public function AddJoueur($pseudo,$email){
        $sql = "INSERT INTO joueur (pseudo, email, date_inscription, score) VALUES (:pseudo, :email, :date_inscription, :score)";
        $stmt = $this->bd->prepare($sql);            
        date_default_timezone_set('Europe/Paris');
        $date = date("Y-m-d");
        $stmt->bindParam(':pseudo',    $pseudo);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':date_inscription', $date);
        $score=0;
        $stmt->bindParam(':score', $score);
        $stmt->execute();   
        return true;
    }

    public function JoueurByPseudo($pseudo){
        $sql = "SELECT id_joueur FROM joueur WHERE pseudo = :pseudo"; 
        $stmt = $this->bd->prepare($sql); 
        $stmt->bindParam(':pseudo', $pseudo); 
        $stmt->execute(); 
        $result = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $result['id_joueur']; 
    }


}