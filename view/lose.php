<?php
$partie = new ManagerPartie();
echo"<h1>Mauvaise Réponse</h1>";
echo"<p>L'IA à attaquée le système</p>";
echo"<p style='font-size: 100px '> 💀  💻 </p>";
$partie->AddPartie($_SESSION['score']);
echo"<strong><p>votre score : ". $_SESSION['score'] . "</p></strong>";