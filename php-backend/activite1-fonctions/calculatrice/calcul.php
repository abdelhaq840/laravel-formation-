<?php
require_once __DIR__ . "/../fonctions.php";
$num1= $_POST["num1"];
$op=$_POST["op"];
$num2= $_POST["num2"];
if(!is_numeric($num1) || !is_numeric($num2)) die("donner des valeurs numeriques");
try {
    $resultat = ($op == '+') ? additionner($num1, $num2) :
                (($op == '-') ? soustraire($num1, $num2) :
                (($op == 'x') ? multiplier($num1, $num2) :
                (($op == '/') ? diviser($num1, $num2) : throw new Exception ("Opération invalide") )));

    echo htmlspecialchars("$num1 $op $num2 = $resultat");

} catch (Exception $e) {
    echo "error : " . $e->getMessage();
}