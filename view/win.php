<?php
$partie = new ManagerPartie();
echo"<h1>Vous avez Réussi !!!</h1>";
echo"<p>L'IA à été arrêtée</p>";
echo"<p style='font-size: 100px '> 🎉  🎉 </p>";
$_SESSION['score'] = $_SESSION['score'] + 500; 
$partie->AddPartie($_SESSION['score']);
echo"<strong><p>votre score : ". $_SESSION['score'] . "</p></strong>";