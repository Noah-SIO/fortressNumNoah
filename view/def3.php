<?php 
$test = new ManagerUtilisateur();
echo "<h2>Énigme N°3 :</h2><br>";
echo "<p>"."<strong style='color:green;'>S</strong>"."ur cette troisième énigme vous devez dechiffrer ce mot de passe</p><p>Le chiffrement est symétrique</p>";
echo"<h2>Mot de passe chiffrer : WWkzck5QNG80bXBsTTVpSnFZMVhhQT09</h2>"; //ajouter le mdp dans le string

 //1991-03-07

echo"<p>Champ test de déchiffrag"."<strong style='color:red;'>e</strong>"." :</p>";
echo "<form method='post'>";
echo"<label for='mdp'>Mot de passe</label></br>";
echo"<input type='text' id='mdp' name='mdp' required></br></br>";
echo"<label for='key'>Clé de chiffrement</label></br>";
echo"<input type='text' id='key' name='key' required></br></br>";
echo"<label for='type'>Type de Chiffrement</label></br>";
echo"<input type='text' id='type' name='type' required></br></br>";
echo "<input type='submit' value='Envoyé'>";
echo "</form></br>";
if(isset($_POST['mdp'], $_POST['type'] , $_POST['key'])){
    $dechiffre = $test->dechiffrer($_POST['mdp'],$_POST['key'],$_POST['type']);
    echo "<p>code déchiffrer : ".$dechiffre."</p>";
}
echo"<p>Entrer résultat dans ce ch"."<strong style='color:blue;'>a</strong>"."mps :</p>";
echo "<form method='post'>";
echo"<input type='text' id='mdpn' name='mdpn'>";
echo "<input type='submit' value='Envoyé'>";
echo "</form></br></br>";
if(isset($_POST['mdpn'])){
    $code='B16BF20C';
    if($_POST['mdpn'] == "B16BF20C"){
        echo"<script>alert('code=$code')</script>";
    }
    else{
        echo "<p>Erreur Résultat</p>";
    }
}
echo"<p>(p-ɯ-⅄) ʇɐɯɹoɟ nɐ ᘔ ɹǝʇɥƃᴉɟ ʇǝǝɹʇs xnǝɾ np ǝᴉʇɹos ǝp ǝʇɐp</p>";


