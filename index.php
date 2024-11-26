<?php

require_once("class/utilisateur.php");

if(isset($_GET['code'])){
    if($_GET['code'] == "4AGERB26"){
        require_once("view/def2.php");
    }
    if($_GET['code'] == "FN2FK2"){
        require_once("view/def3.php");
    }
}
else{
    require_once("view/accueil.php");
    require_once("view/def1.php"); 
}