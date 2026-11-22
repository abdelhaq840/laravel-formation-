<?php 
declare(strict_types=1); 
function additionner(float $a,float $b):float{
    return $a+$b;
}
function soustraire(float $a,float $b):float{
    return $a-$b;
}
function multiplier(float $a,float $b):float{
    return $a*$b;
}
function diviser(float $a,float $b){
    if($b==0){
        throw new Exception ("Divition par Zero");
}
    return $a/$b;
}
function estPair(int $n):bool{
    return $n%2==0;
}
function estPositif(float $n):bool{
    return $n>=0;
}
function maxinum(float $a,float $b,float $c):float{
    $nums=[$a,$b,$c];
    $max=0;
    foreach($nums as $v){
        if ($max<$v){
            $max=$v;
        }
    }
    return $max;
}
function maxnombre(float $a,float $b,float $c){
    $num=[$a,$b,$c];
    return max($num);
}
function estPremier(int $n):bool{
    $x=true;
    if ($n === 1){
        $x=false;
    }
    for($i=2;$i<$n;$i++){
        if($n%$i===0){
            $x=false;
            break;
        }
    }
    return $x;
}
function calTTC(float $ht, float $tva=20.0):float{
    return $ht+$ht*($tva/100) ;
}
function remise(float $prix,float $pourcentage){
    return $prix-$prix*($pourcentage/100);
    }
function calculerFacture(float $pUt,int $quantite,float $remise = 0,float $tva = 20.0): float{
    $total = remise( $pUt * $quantite, $remise);
    return calTTC($total, $tva);
}
function moyenne(float ...$notes){
    $s=0;
    if(count($notes)<0)return 0;
    foreach($notes as $v){
        $s+=$v;
    }
    return $s/count($notes);
}
function aireCercle(float $rayon): float{
    return round($rayon*$rayon*M_PI,2);
}
function perimetreCercle(float $rayon): float{
    return round(($rayon+$rayon)*M_PI,2);
}
function celsiusVersFahrenheit(float $c): float{
    return $c*9/5+32 ;
}
function fahrenheitVersCelsius(float $f): float{
    return ($f-32)*5/9 ;
}
function convertirDevise(float $montant, float $taux=0.092): float{
    return round($montant*$taux,2) ;
}
function factorielle(int $n): int{
    $s=1;
     if($n<0){
        throw new Exception ("saisir un nombre positive");}
    for($i=1;$i<=$n;$i++){
        $s*=$i ;
    }return $s;
}
function fibonacci(int $n): array{
    $t=[];
    $x=1;
    $y=0;
    for($i=0;$i<$n;$i++){
        array_push($t,$y);
        $s=$x+$y ;
        $y=$x;
        $x=$s;
    }return $t;
}
function pgcd(int $a, int $b): int {
    while ($b !== 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }return $a;
}
function puissance(float $x, int $n): float{
    $c=1;
    for($i=0;$i<$n;$i++){
        $c*=$x;
    }return $c;
}
function verifier(string $nom, mixed $attendu, mixed $obtenu): void {

    if ($attendu == $obtenu) {
        echo "$nom : OK ";
    }
    else {
        echo "$nom : ECHEC ";
    }

}


