<?php
require ("Alunno.php");
$Alunno1 = new Alunno("Dario", "Tino", 18);
$Alunno2 = new Alunno("Pino", "Rosso", 20);
$Alunno3 = new Alunno("Clio", "Nero", 12);
$Alunno4 = new Alunno("Giallo", "Spino", 32);

$alunni = array($Alunno1, $Alunno2, $Alunno3, $Alunno4);
foreach($alunni as $Alunno){
    echo $Alunno . "<br>";
}

?>