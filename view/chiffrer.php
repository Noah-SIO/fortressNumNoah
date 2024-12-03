<?php
$test = new ManagerUtilisateur();
echo "<form method='post'>";
echo"<label for='mdp'>Mot de passe</label></br>";
echo"<input type='text' id='mdp' name='mdp' required></br></br>";
echo"<label for='key'>Clé de chiffrement</label></br>";
echo"<input type='text' id='key' name='key' required></br></br>";
echo "<input type='submit' value='Envoyé'>";
echo "</form></br>";

if(isset($_POST['mdp']) && isset($_POST['key'])){
    $chiffre = $test->chiffrer($_POST['mdp'],$_POST['key']);
    echo "<p>code chiffrer : ".$chiffre."</p>";
}