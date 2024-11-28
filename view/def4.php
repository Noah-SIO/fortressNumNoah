<?php
echo "<h2>Énigme N°4 :</h2><br>";
echo "<p>C'est la dernière ligne droite pour arrêter l'IA</p>";
echo "<p>Expliquer comment corriger ce code afin d'arrêter les malveillances de cette Intelligence Artificielle</p></br></br>";


echo"<form method='post'>";
echo "<p>Problème N°1 : </p>";
echo "<img src='img/code1.png' alt='Code 1' /></br></br>";
echo"<label for='rep1'>Votre Réponse : </label></br>";
echo "<select name='rep1' id='rep1'>";
echo"<option value=''>--Sélectionne ta Réponse--</option>";
echo"<option value='Hash'>Hasher les données</option>";
echo"<option value='base'>Modifier la base</option>";
echo"<option value='prepare'>Faire des requêtes preparer</option>";
echo"<option value='js'>Ajouter du javascript</option>";
echo"</select>";
echo "<p>Problème N°2 : </p>";
echo "<img src='img/code2.png' alt='Code 2' /></br></br>";
echo"<label for='rep1'>Votre Réponse : </label></br>";
echo "<input type='checkbox' id='' name='' />"; //mettre 3/4 checkbox regex, echappée entrée utilisateurs htmlspecialchars
echo"</form>";
