<link rel="stylesheet" href="style.css">
<?php
session_start();
require_once("class/utilisateur.php");
require_once("class/joueur.php");
require_once("class/partie.php");

if(isset($_GET['noah'])){
    if($_GET['noah'] == 'chiffrer'){
        require_once('view/chiffrer.php');
    }
}


if(isset($_GET['code'])){
    if($_GET['code'] == "4AGERB26"){
        require_once("view/expli.php");
        require_once("view/indice.php");
        require_once("view/def2.php");
    }
    if($_GET['code'] == "FN2FK2"){
        require_once("view/expli.php");
        require_once("view/indice.php");
        require_once("view/def3.php");
    }
    if($_GET['code'] == "B16BF20C"){
        require_once("view/expli.php");
        require_once("view/indice.php");
        require_once("view/def4.php");
    }
    if($_GET['code'] != "B16BF20C" && $_GET['code'] != "FN2FK2" && $_GET['code'] != "4AGERB26" && $_GET['code'] != "4U-GSEFA20" && $_GET['code'] != 'B18C12JZ' && $_GET['code'] != 'def1'){
        require_once("view/false.php");
    }
    if($_GET['code'] == '4U-GSEFA20'){
        require_once("view/win.php");
    }
    if($_GET['code'] == 'B18C12JZ'){
        require_once("view/lose.php");
    }
    if($_GET['code'] == 'def1'){
        require_once("view/expli.php");
        require_once("view/indice.php"); 
        require_once("view/def1.php");
    }
}
else{
    require_once("view/accueil.php"); 
}