<?php
$partie = new ManagerPartie();
$joueur = new ManagerJoueur();
echo"<h1>Mauvaise Réponse</h1>";
echo"<p>L'IA à attaquée le système</p>";
echo"<p style='font-size: 100px '> 💀  💻 </p>";
$partie->AddPartie($_SESSION['score']);
echo"<strong><p style='margin-top: -50px;'>votre score : ". $_SESSION['score'] . "</p></strong>";
echo"<h2>Les Derniers Joueurs</h2>";


$nbjoueur = 1;
$tableau =$joueur->return3Joueur();
if($tableau != NULL){
    echo"<table style='text-align : center; margin-left: auto; margin-right: auto; margin-top: -150px; border-collapse: collapse; width: 13%;'>";
    for ($i = 0; $i < count($tableau); $i++) {
        echo"<tr><th>" . $nbjoueur . "</th>";
        echo "<th>" . $tableau[$i]->getPseudo() . "</th></br>";
        echo "<th>" .$tableau[$i]->getScore() . "</th></br>";
        echo "</tr>";
        $nbjoueur++;

    }
    echo"</table>";
}