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
            //echo"test";
            $sqlid = "SELECT * FROM user WHERE login = '$login' AND mdp = '$mdp'";
            //echo $sqlid;
            $requeteid = $this -> bd -> query ($sqlid);
            //$requeteid ->execute();
            $donneesid= $requeteid->fetch(PDO::FETCH_ASSOC); 
            $tableauSearchByID= array();
            if($donneesid != NULL){      
                $tableauSearchByID[]= new Utilisateur($donneesid['id'],$donneesid['login'],$donneesid['mdp']);
            //var_dump($tableauSearchByID);
            return $tableauSearchByID; 
            }
            else{
                return 1;
            }
        
        }
        function chiffrer($motDePasse, $cle) {
            return base64_encode(openssl_encrypt($motDePasse, 'AES-256-ECB', $cle, 0)); // Pas d'IV en mode ECB
        }
        
            function dechiffrer($motDePasseChiffre, $cle, $type) {
                $typedechi = ''.$type.'-256-ECB'; 
                return openssl_decrypt(base64_decode($motDePasseChiffre), $typedechi, $cle, 0); // Pas d'IV
            }    
    }


