<?php
echo "<form method='post'>";
echo"<button name='indice' style='float:left;font-size:40px; background-color:white;' value='test'>💡</button>";
echo "</form></br>";

if(isset($_POST['indice'])){
if(isset($_GET['code'])){    
if($_GET['code'] == '4AGERB26'){
    echo"<strong><p style='color:powderblue'>Utiliser du code javascript</p></strong>";
}
if($_GET['code'] == 'FN2FK2'){
    echo"<strong><p style='color:powderblue'>Regarder les couleurs et les mots(recherche internet autoriser)</p></strong>";
}
if($_GET['code'] == 'B16BF20C'){
    echo"<strong><p style='color:powderblue'>Utilise tes cours et google(recherche internet autoriser)</p></strong>";
}
}
else{
    echo"<strong><p style='color:powderblue'>Faille XSS</p></strong>";
}
}