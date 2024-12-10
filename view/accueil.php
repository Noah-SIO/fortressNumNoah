<?php

    echo"<h1>Bienvenue Sur le Site de La Forteresse Numérique</h1><br>";
    echo"<p>Vous êtes pris au piège par une IA qui maîtrise chaque recoin de ce système,</p>
     <p>résolvez vite les énigmes pour pouvoir l'arrêter !!!</p><br>";

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
    
}
