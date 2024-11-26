<?php
echo "<h2>Énigme N°2 :</h2><br>";

echo"<p>Sur cette page vous pouvez ajouter un commentaire<p><p>Trouvez le moyen de récuperer le code secret</p><br>";
echo"<hr></hr>";
echo"<p>Je n'ai pas aimer mon experience sur se site internet</p><p>je ne le recommande pas</p><p> note : 2/5</p><br>";

echo "<form method='post'>";
echo "<textarea id='message' name='message' rows='5' cols='33' placeholder='Entrer votre commentaire'></textarea>";
echo "<input type='submit' value='Envoyé'>";
echo "</form>";

if(isset($_POST['message'])){
    if (strpos($_POST['message'], '<script>') !== false){
        echo "<script>alert('code = FN2FK2')</script>";
    }else{
        echo"<p>votre message : </p>" . $_POST['message'];
        echo"<p>À bien été envoyé</p>";
    }
}