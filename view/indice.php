<?php
echo "<form method='post'>";
echo "<input type='submit' style='float:left;font-size:25px;' value='💡'>";
echo "</form></br>";

if($_SERVER["REQUEST_METHOD"] == "POST"){
if($_GET['code'] == '4AGERB26'){
    echo"<strong><p style='color:powderblue'>Utiliser du code javascript</p></strong>";
}
if($_GET['code'] == 'FN2FK2'){
    echo"<strong><p style='color:powderblue'>Regarder les couleurs et les mots(recherche internet autoriser)</p></strong>";
}
if($_GET['code'] == 'B16BF20C'){
    echo"<strong><p style='color:powderblue'>Utilise tes cours et google(recherche internet autoriser)</p></strong>";
}
else{
    echo"<strong><p style='color:powderblue'>Faille XSS</p></strong>";
}
}