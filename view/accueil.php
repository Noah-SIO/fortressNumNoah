<?php
$joueur = new ManagerJoueur();
    echo"<h1>Bienvenue Sur le Site de La Forteresse Numérique</h1>";
    echo"<p>Vous êtes pris au piège par une IA qui maîtrise chaque recoin de ce système,</p>
     <p>résolvez vite les énigmes pour pouvoir l'arrêter !!!</p>";
     echo"<p>Entrer votre pseudo et Adress mail pour commencer</p>";

     echo"<form method='post'>";
     echo"<label for='pseudo'>Pseudo  </label>";
     echo"<input type='text' id='pseudo' name='pseudo'>";
     echo"<br>";
     echo"<label for='mail'>Adresse mail  </label>";
     echo"<input type='mail' id='mail' name='mail'>";
     echo"<br>";
     echo"<input type='submit' value='Connexion'>";
echo"</form></br></br>";

if(isset($_POST['mail']) && isset($_POST['pseudo'])){
    $success = $joueur->AddJoueur($_POST['pseudo'], $_POST['mail']);
    if($success==true){
        header("Location: index.php?code=def1");
    }
}
