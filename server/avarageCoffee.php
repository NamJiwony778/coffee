<?php
    define ("FILE", "../data/programmeurs.txt");
    if(!$prog=fopen(FILE, "r")){
        echo "Problème pour ouvrir le fichier";
        exit;
    }
    $reponse = "<table border =1";
    $reponse.="<caption> RESULTAT DE CONSOMMATION</caption>";
    $reponse.="<tr><th>Jour</th><th>NbTAsses</th><tr>";
    $row=fgets($prog);
    $coffeeMonday = array();
    $coffeeTuesday = array();
    $coffeeWednesday = array();
    $coffeeThursday = array();
    $coffeeFriday = array();

    while (!feof($prog)) {
        $tablePr = explode(";", $row);
        if ($tablePr[1] == "Lundi") {
            array_push($coffeeMonday, $tablePr[2]);  
        } else if ($tablePr[1] == "Mardi") {
            array_push($coffeeTuesday, $tablePr[2]);      
        }else if ($tablePr[1] == "Mercredi") {
            array_push($coffeeWednesday, $tablePr[2]);    
        }else if ($tablePr[1] == "Jeudi") {
            array_push($coffeeThursday, $tablePr[2]);    
        }else if ($tablePr[1] == "Vendredi") {
            array_push($coffeeFriday, $tablePr[2]);    
        }
        $row=fgets($prog);
    }
    echo $reponse;
    printAvarage("Lundi", $coffeeMonday);
    printAvarage("Mardi", $coffeeTuesday);
    printAvarage("Mercredi", $coffeeWednesday);
    printAvarage("Jeudi", $coffeeThursday);
    printAvarage("Vendredi", $coffeeFriday);

    fclose($prog);

    function printAvarage($day, $dayArray) {
        if (!empty($dayArray)) {
            $avarage = round((array_sum($dayArray))/sizeof($dayArray)); 
            $newRow = "<tr><td>".$day."</td><td>".$avarage."</td></tr>";
            echo $newRow;
        }
    }
?>

<a href="../operations.html">Page d"accueil</a>