<?php
define ("FILE", "../data/programmeurs.txt");
if(!$prog=fopen(FILE, "r")){
    echo "Problème pour ouvrir le fichier";
    exit;
}
$reponse = "<table border =1";
$reponse.="<caption> RESULTAT DE CONSOMMATION</caption>";
$reponse.="<tr><th>Programmeur</th><th>Jour</th><th>NbTAsses</th><tr>";
$row=fgets($prog);
while (!feof($prog)) {
    $tablePr = explode(";", $row);
    $reponse.="<tr><td>".$tablePr[0]."</td><td>".$tablePr[1]."</td><td>".$tablePr[2]."</td></tr>";
    $row=fgets($prog);
}
$reponse.="</table>";
fclose($prog);
echo $reponse;
?>

<a href="../operations.html">Page d"accueil</a>