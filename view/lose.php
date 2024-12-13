<?php
$partie = new ManagerPartie();
$joueur = new ManagerJoueur();
echo"<h1>Mauvaise Réponse</h1>";
echo"<p>L'IA à attaquée le système</p>";
echo"<p style='font-size: 100px '> 💀  💻 </p>";
$partie->AddPartie($_SESSION['score']);
echo"<strong><p>votre score : ". $_SESSION['score'] . "</p></strong>";
echo"<br><br>";



$tableau =$joueur->return3Joueur();
if($tableau != NULL){
    for ($i = 0; $i < count($tableau); $i++) {
        echo $tableau[$i]->getPseudo() . "</br>";
        echo $tableau[$i]->getScore() . "</br>";

    }
}