<?php

require_once("class/utilisateur.php");

if(isset($_GET['code'])){
    if($_GET['code'] == "4AGERB26"){
        require_once("view/def2.php");
    }
}
else{
    require_once("view/accueil.php");
    require_once("view/def1.php"); 
}