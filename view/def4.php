<?php
echo "<h2>Énigme N°4 :</h2><br>";
echo "<p>C'est la dernière ligne droite pour arrêter l'IA</p>";
echo "<p>Expliquer comment corriger ce code afin d'arrêter les malveillances de cette Intelligence Artificielle</p></br></br>";


echo"<form method='post'>";
echo"<fieldset style='background-color:#8ace00;'>";
echo "<h2 style='color:black;'>Problème N°1 : </h2>";
echo "<img src='img/code1.png' alt='Code 1' /></br></br>";
echo"<label for='rep1' style='color:black;'>Votre Réponse : </label></br>";


echo "<select name='reponse' id='reponse'>";
echo"<option value=''>--Sélectionne ta Réponse--</option>";
echo"<option value='Hash'>Hasher les données</option>";
echo"<option value='base'>Modifier la base</option>";
echo"<option value='prepare'>Faire des requêtes preparer</option>";
echo"<option value='js'>Ajouter du javascript</option>";
echo"</select>";
echo"</fieldset></br>";

echo"<fieldset style='background-color:lightblue;'>";
echo "<h2 style='color:black;'>Problème N°2 : </h2>";
echo "<img src='img/code2.png' alt='Code 2' /></br></br>";
echo"<label for='rep1' style='color:black;'>Votre Réponse : </label></br></br>";
echo"<label for='echap' style='color:black;'>Échapée les données </label>";
echo "<input type='checkbox' id='echap' name='echap' /></br>";
echo"<label for='regex' style='color:black;'>Utilisé des expression régulière(REGEX) </label>";
echo "<input type='checkbox' id='regex' name='regex' /></br>";
echo"<label for='prepare2' style='color:black;'>Faire des requête preparer </label>";
echo "<input type='checkbox' id='prepare2' name='prepare2' /></br>";
echo"<label for='hash' style='color:black;'>Hasher les données </label>";
echo "<input type='checkbox' id='hash' name='hash' /></br></br>";
echo"</fieldset>";


echo"</br><fieldset style='background-color:#9683ec;'>";
echo "<h2 style='color:black;'>Problème N°3 : </h2>";
echo "<img src='img/code3.png' alt='Code 2' /></br></br>";
echo"<p style='color:black;'>Cocher les types de chiffrage existants</p>";
echo"<label for='aes' style='color:black;'>1. AES </label>";
echo "<input type='checkbox' id='aes' name='aes' /></br>";
echo"<label for='des' style='color:black;'>2. DES </label>";
echo "<input type='checkbox' id='des' name='des' /></br>";
echo"<label for='sf' style='color:black;'>3. SF  </label>";
echo "<input type='checkbox' id='sf' name='sf' /></br>";
echo"<label for='rsa' style='color:black;'>4. RSA </label>";
echo "<input type='checkbox' id='rsa' name='rsa' /></br>";
echo"<label for='ggst' style='color:black;'>5. GGST </label>";
echo "<input type='checkbox' id='ggst' name='ggst' /></br>";
echo"</fieldset>";


echo "</br></br><input type='submit' value='Envoyé'>";
echo"</form>";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reponse'])){
    if($_POST['reponse'] == 'prepare'){
        $_SESSION['score'] = $_SESSION['score'] + 50;
    } 
    if(isset($_POST['regex']) && isset($_POST['echap'])){
        $_SESSION['score'] = $_SESSION['score'] + 100;
    }
    if(isset($_POST['aes']) && isset($_POST['rsa']) && isset($_POST['des'])){
        $_SESSION['score'] = $_SESSION['score'] + 100;
    }
    if($_POST['reponse'] == 'prepare' && isset($_POST['regex']) && isset($_POST['echap']) && isset($_POST['aes']) && isset($_POST['rsa']) && isset($_POST['des'])){
        echo"<script>alert('code=4U-GSEFA20')</script>";
    }
    else{
    echo"<script>alert('code=B18C12JZ')</script>";
}
}

