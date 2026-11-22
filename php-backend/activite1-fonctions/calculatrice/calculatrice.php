<?php
require_once __DIR__ . "/../fonctions.php";
$num1= $argv[1];
$op= $argv[2];
$num2= $argv[3];
if($argc!=4) die("error");
if(!is_numeric($num1) || !is_numeric($num2)) die("donner des valeurs numeriques");
try {
    $resultat = ($op == '+') ? additionner($num1, $num2) :
                (($op == '-') ? soustraire($num1, $num2) :
                (($op == 'x') ? multiplier($num1, $num2) :
                (($op == '/') ? diviser($num1, $num2) : throw new Exception ("Opération invalide") )));

    echo "$num1 $op $num2 = $resultat";

} catch (Exception $e) {
    echo "error : " . $e->getMessage();
}