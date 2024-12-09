<?php 
$test = new ManagerUtilisateur();
echo "<h2>Énigme N°1 :</h2><br>";
echo"<p>Récuperer le code de ce coffre pour pouvoir pousuivre l'IA<p><p>trouvez le login et le mot de passe</p><br>";

//formulaire


echo"<form method='post'>";
        echo"<label for='login'>login  </label>";
        echo"<input type='text' id='login' name='login'>";
        echo"<br>";
        echo"<label for='mdp'>mdp  </label>";
        echo"<input type='password' id='mdp' name='mdp'>";
        echo"<br>";
        echo"<input type='submit' value='Connexion'>";
echo"</form></br>";
                                                ////////solution utilisateur1';--

if(isset($_POST['login'])&isset($_POST['mdp'])){
    $resultat = $test->connexion($_POST['mdp'],$_POST['login']);
    if($resultat != 1){
        echo "Bonjour " . $resultat[0]->getLogin() . "<br>";
        echo $resultat[0]->getMdp();
    }
    else{
        echo"problème de connexion";
    }    
}