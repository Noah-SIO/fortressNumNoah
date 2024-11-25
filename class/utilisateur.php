<?php
Class Utilisateur{

private $id;
private $login;
private $mdp;

public function __construct($id,$login,$mdp){
    $this->id=$id;
    $this->login= $login;
    $this->mdp= $mdp;
}


//  id
public function getId() {
    return $this->id;

}
public function setId($Id) {
    $this->id = $id;
}
//  login
public function getLogin() {
    return $this->login;

}

public function setLogin($login) {
    $this->login = $login;
}
//  mdp
    public function getMdp() {
        return $this->mdp;

    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }
}
class ManagerUtilisateur {
    private $bd;

    public function __construct() {
        $this->bd = new PDO("mysql:host=localhost;dbname=fortress", 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public function connexion($mdp,$login){
        $result = $this->bd->prepare("SELECT COUNT(*) as Nb FROM user WHERE login = :login AND mdp =:mdp");
        $result ->bindParam(':login',$login);
        $result ->bindParam(':mdp',$mdp);
        $result->execute();
        $total = $result->fetch(PDO::FETCH_ASSOC);
        if($total['Nb'] != 0){
            //echo"test";
            $requeteid = $this -> bd -> prepare("SELECT * FROM user WHERE login = :login AND mdp = :mdp");
            $requeteid ->bindParam(':login',$login);
            $requeteid ->bindParam(':mdp',$mdp);
            $requeteid ->execute();
            $donneesid= $requeteid->fetch(PDO::FETCH_ASSOC); 
            $tableauSearchByID= array();      
                $tableauSearchByID[]= new Utilisateur($donneesid['id'],$donneesid['login'],$donneesid['mdp']);
            //var_dump($tableauSearchByID);
            return $tableauSearchByID;
        }
        else{
            return $total['Nb'];
        }
    }
}