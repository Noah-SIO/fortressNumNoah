<link rel="stylesheet" href="style.css">
<?php

require_once("class/utilisateur.php");

if(isset($_GET['code'])){
    if($_GET['code'] == "4AGERB26"){
        require_once("view/expli.php");
        require_once("view/def2.php");
    }
    if($_GET['code'] == "FN2FK2"){
        require_once("view/expli.php");
        require_once("view/def3.php");
    }
    if($_GET['code'] == "B16BF20C"){
        require_once("view/expli.php");
        require_once("view/def4.php");
    }
    if($_GET['code'] != "B16BF20C" && $_GET['code'] != "FN2FK2" && $_GET['code'] != "4AGERB26"){
        require_once("view/false.php");
    }
}
else{
    require_once("view/accueil.php");
    require_once("view/expli.php");
    require_once("view/def1.php"); 
}