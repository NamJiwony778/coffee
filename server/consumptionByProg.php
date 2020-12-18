<?php
define ("FILE", "../data/programmeurs.txt");
if(!$prog=fopen(FILE, "r")){
    echo "Problème pour ouvrir le fichier";
    exit;
}

//get chosen value from options
if(isset($_POST['submit'])) {
  $idProg = $_POST["CoffeeProg"]; 
}

$reponse = "<table border =1";
$reponse.="<caption> RESULTAT DE CONSOMMATION</caption>";
$reponse.="<tr><th>Programmeur</th><th>NbTAsses</th><tr>";
$row=fgets($prog);
$GilbertArray = array();
$WallyArray = array();
$EdgarArray = array();
$EugeneArray = array();
$ClarenceArray = array();
$JosephineArray = array();

while (!feof($prog)) {
    $tablePr = explode(";", $row);
        if ($idProg == "Gilbert" && $tablePr[0] == "Gilbert") {
            array_push($GilbertArray, $tablePr[2]);  
        } else if ($idProg == "Wally" && $tablePr[0] == "Wally") {
            array_push($WallyArray, $tablePr[2]);      
        }else if ($idProg == "Edgar" && $tablePr[0] == "Edgar") {
            array_push($EdgarArray, $tablePr[2]);    
        }else if ($idProg == "Eugene" && $tablePr[0] == "Eugene") {
            array_push($EugeneArray, $tablePr[2]);    
        }else if ($idProg == "Clarence" && $tablePr[0] == "Clarence") {
            array_push($ClarenceArray, $tablePr[2]);    
        }else if ($idProg == "Josephine" && $tablePr[0] == "Josephine") {
            array_push($JosephineArray, $tablePr[2]);    
        }     
        $row=fgets($prog);
  }
    


echo $reponse;
printProg($idProg, $GilbertArray);
printProg($idProg, $WallyArray);
printProg($idProg, $EdgarArray);
printProg($idProg, $EugeneArray);
printProg($idProg, $ClarenceArray);
printProg($idProg, $JosephineArray);

fclose($prog);

    function printProg($idProg, $coffeeProgrammer) {
        if (!empty($coffeeProgrammer)) {
            $intArrayCoffee = array_map('intval', $coffeeProgrammer); 
            $sumCoffee = array_sum($intArrayCoffee);
            $newRow = "<tr><td>".$idProg."</td><td>".$sumCoffee."</td></tr>";
            echo $newRow;
           
        }   
    }
?>

<a href="../operations.html">Page d"accueil</a>
