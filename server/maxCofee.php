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
$maxCoffeeTable = array();


while (!feof($prog)) {
    $tablePr = explode(";", $row);
    if ($maxCoffeeTable) {
        if($maxCoffeeTable[2] < $tablePr[2]){
            $maxCoffeeTable = $tablePr;        
        }
    } else {
        $maxCoffeeTable = $tablePr;
    }
    $row=fgets($prog);
}

$reponse.="<tr><td>".$maxCoffeeTable[0]."</td><td>".$maxCoffeeTable[1]."</td><td>".$maxCoffeeTable[2]."</td></tr>";
$reponse.="</table>";
fclose($prog);
echo $reponse;
?>

<a href="../operations.html">Page d"accueil</a>
