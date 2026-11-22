<?php
require_once __DIR__ . "/fonctions.php";
$a= 10.5;
$b = 5.5;
$c = 7.5;

echo "$a + $b = ".additionner($a,$b)."\n";
echo  "$a - $b = ".soustraire($a,$b)."\n";
echo "$a x $b = ".multiplier($a,$b)."\n";
try{
    echo "$a / $b = ".diviser($a,$b)."\n";
    echo "0 / $b = ".diviser(0,$b)."\n";
    echo "$a / 0 = ".diviser($a,0)."\n";
}catch(Exception $e){
    echo $e->getMessage();
}
echo estPair(12)."\n";
echo estPair(9)."\n";
echo estPositif(9.5)."\n";
echo estPositif(7.5)."\n";
echo maxinum($a,$b,$c)."\n";
echo maxnombre($a,$b,$c)."\n";
echo estPremier(9)."\n";
echo calTTC(60000.0,20.0)."\n";
$montant = calculerFacture(100, 10, 10, 20);

echo number_format($montant, 2, ",", " ") . " MAD";
echo moyenne(4.0,3.5,7.5)."\n";
echo aireCercle(4.0)."\n";
echo perimetreCercle(4.0)."\n";
echo celsiusVersFahrenheit(4.0)."\n";
echo fahrenheitVersCelsius(12.0)."\n";
echo convertirDevise(4.0)."\n";

try{
    echo factorielle(4)."\n";
    echo factorielle(-4);
}catch(Exception $e){
    echo $e->getMessage()."\n";
}



print_r( fibonacci(4))."\n";
echo pgcd(25,5)."\n";
echo puissance(4.0,5)."\n";

verifier("Addition", 20, additionner(12.0, 8.0))."\n";
verifier("Soustraction", 5, soustraire(10.0, 5.0))."\n";
verifier("Multiplication", 30, multiplier(5.0, 6.0))."\n";
