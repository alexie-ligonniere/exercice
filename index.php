<?php
echo "exo 1.6 <br>";
$a=2;
$b=6;
$c=0;
?> 

<?php
$c=$a;
$a=$b;
$b=$c;
?>

<?php
echo "a = ".$a." et b =".$b;
?>

<?php
echo "<br> <br>";
echo "exo 1.7 <br>";
$a=2;
$b=6;
$c=10;

$d=$b;
$b=$a;
$a=$c;
$c=$d;
echo "a = " .$a." et b = " .$b." et c = ". $c;
?>

<?php
echo "<br> <br>";
echo "exo 2.2 <br>";
$a=6;
$a *= $a;
echo " a² = ".$a ;
?>

<?php
echo "<br><br>";
echo "exo 2.3 <br>";
$prix=35;
$nombre=4;
$taux=0.20;

$prixtotal= $prix * $nombre;
$taux=$prixtotal* $taux;
$prixht=$prixtotal + $taux;

echo " afficher prix sans tva " .$prixtotal;
echo " afficher prix total avec tva " .$prixht; 
?>

<?php
echo " <br> <br>";
echo "exo 2.4 <br>";
$a= ' belle marquise';
$b= ' vos beau yeux';
$c= ' mourir d\'amour';
$d= ' me font';
echo $a.$b.$c.$d ;
echo "<br>";
echo $b.$c.$d.$a ;
echo"<br>";
echo $c.$d.$a.$b ;
echo"<br>";
echo $d.$a.$b.$c ;
?>

<?php
echo "<br> <br>";
echo "exo 3.3 <br>";
$a= 'alexie';
$b= 'cédric';
$c= 'thomas';
if ($a<$b && $b<$c)
echo "ordre alpha";
else
echo "nimp";
?>

<?php
echo "<br> <br>";
echo "exo 3.4 <br>";
$a= -1;
if ($a>=0)
echo "nombre positif";
else
echo "nombre négatif";
?>

<?php
echo "<br> <br>";
echo "exo 3.5 <br>";
$a= 12;
$b= -6;
if ($a>=0 )
echo "nombre 1 positif <br>";
else 
echo "nombre 1 negatif <br>" ;
if ( $b>=0)
echo "nombre 2 positif <br>";
else
echo "nombre 2 negatif <br>";
?>

<?php
echo "<br><br>";
echo "exo 3.6 <br>";
$a= 10;
if( $a >12 )
echo "categorie cadet";
else 
    if($a>=10 || $a<=11 ){
    echo "categorie minime";}
    else if( $a >=8 || $a<=9){
    echo "categorie pupille";}
    else if ( $a >=6 || $a<=7){
    echo "categorie poussin";}
?>

<?php
echo "<br> <br>";
echo "exo 4.2 <br>";
$heur= date ('H');
$minute= date ('i');
$minute= date ('i') +1;
echo $heur ."h".$minute."minute";
?>

<?php
echo "<br> <br>";
echo "exo 4.3 <br>";
$heur = date('H');
$minute= date ('i');
$seconde= date ('s')+1;
echo $heur . "h". $minute. "minute". $seconde."seconde";
?>


<?php
echo "<br> <br>";
echo "exo 4.6 <br>";
$bernard= 10;
$didier= 20;
$germaine= 15;
$george= 20;
if ($bernard + $didier + $germaine + $george >100){
echo "tes gentil tes mignon mais c'est pas possible";}
else if ($bernard>=50){
    echo "beber tes le meilleur";}
else if ($didier>=50 || $germaine >=50 || $george >=50 || $bernard <12.5){
    echo " ta couler beber !";}
else if ($bernard>$didier && $bernard>$germaine && $bernard>$george){
    echo "c'est reparti pour un tour !!";}
else echo "c'est l'heur de rentrer à la maison !";
?>

<?php
echo "<br> <br>";
echo " exo 5.1 <br>";
$a =2;
while (($a<1)|| ($a>3)){
    echo"recommencez ";}
    echo "ok ";
?>

<?php
echo "<br><br>";
echo "exo 5.2 <br>";
echo "écrire un chiffre entre 10 et 20<br>";
$a=16;
while (( $a>20)||($a<10)){
    if ($a>20){
    echo "plus petit!";}
    else if ($a<10){
    echo "plus grand!";}
}
echo "ok";
?>

<?php
echo "<br> <br>";
echo "exo 5.3 <br>";
echo "affichez un chiffre";
$a= 7;
$b=$a ;
while (( $a + 10) <> $b){
$b = $b+1;
echo $b."--";}
?>

<?php
echo "<br> <br>";
echo "exo 5.4 <br>";
echo "écrire un nombre de départ <br>";
$a= 7;
$b= 0;
for ($b=1; $b < 11; $b++){
    echo $a."x".$b."=". ($a*$b)."<br>";
}
?>

<?php
echo "<br> <br>";
echo "exo 5.5 <br>";
echo "ecrire un chiffre";
$a= 5;
$b= 1;
$c= 0;
for ($b=1; $b<=$a; $b++){
    $c+=$b;
}
echo "la somme est".$c."<br>";
?>

<?php
echo "<br> <br>";
echo "exo 5.6 <br>";
echo "ecrire un chriffre <br>";
$a= 8;
$b= 1;
$c= 1;
for ( $b=1; $b<= $a; $b++){
    $c=($c*$b);
} 
echo "la somme est ".$c."<br>";
?>



<?php
echo "bonjour <br>";
$a = readline("saisir:");
echo "le nombre saisie est:$a";
?>

<?php
echo "<br> <br>";
echo "exo 6.1 <br>";
$array=[
    "key"=>"0",
    "key2"=>"0",
    "key3"=>"0",
    "key4"=>"0",
    "key5"=>"0",
];
print_r($array);
?>

<?php
echo "<br><br>";
echo "tableau c'est le meme <br>";
$array1=array(1=>'0','0','0','0','0','0','0');
print_r($array1);
?>

<?php
echo "<br> <br>";
echo "EXO 6.1 <br>";
$tab = array();
for ($i=1; $i<=7 ; $i++) {
   $tab[$i] = 0;
}
print_r($tab);
?>

<?php
echo "<br><br>";
echo "exo 6.2 <br>";
$array1=array(1=>'a','e','u','i','o','y');
print_r($array1);
?>

<?php
echo "<br> <br>";
echo "exo 6.3 <br>";
$array1= array(1=>'15','12','10','16','13','17');
print_r($array1);
?>

<?php
echo "<br><br>";
echo "exo 6.7<br>";
$a= array(1=>'15','12','10','16','13','17');
echo "sum(a) = " .array_sum($a)."<br>";
echo "count(a)= ". count($a)."<br>";
echo array_sum($a)/count($a)."<br>";
?>



<?php
echo "<br><br>";
echo "exo 6.10<br>";
$a=array(1=>'4','8','7','9','1','5','4','6');
print_r($a);
echo"<br>";
$b=array(1=>'7','6','5','2','1','3','7','4');
print_r($b);
echo"<br>";
$c=array();

foreach ($a as $k=> $v)
$c[$k]=$v+$b[$k];
print_r($c);
echo "<br><br>";
?>

<?php 
echo"exo nawell<br>";
$array1 = array(1 => '4', '8', '7' , '9' , '1' , '5' , '4', '6');
print_r($array1);
echo "<br>";
$array2 = array(1 => '7', '6', '5' , '2' , '1' , '3' , '7', '4');
print_r($array2);
echo "<br>";
$newTab = array();

foreach( $array1 as $k => $v )
  $newTab[$k] = $v + $array2[$k];

print_r($newTab);
?>

<?php
echo "<br> <br>";
echo "exo 6.9 <br>";
$array1 = array(1 => '4', '8', '7' , '9' , '1' , '5' , '4', '6');
print_r($array1);
echo "<br>";
echo "totale est :".array_sum($array1);
?>

<?php
echo "<br> <br>";
echo "exo 6.11 <br>";
$a = array('4','8','7','12');
$b = array( '3','6');
$c= 0;
for($i=0;$i<4;$i++){
    for($j=0;$j<2;$j++){
$c = $c + ($b [$j] * $a [$i]);
    }
}
echo $c;
?>

<?php
echo "<br> <br>";
echo "exo 6.12 <br>";
$a = array('4','8','7');
print_r($a);
echo"<br>";
$b= array();
print_r($b);
echo"<br>";
for ($i=0;$i<3;$i++){
$b[$i]=$a[$i]+1;
}
print_r($b);
?>

<?php
// echo "<br><br>";
// echo "exo 6.13 <br>";
// $tab1 = array ();
// $nc = readline("saisir le nombre de valeur du tableau: ");

// function saisirValeurs(){
//     $nv = readline("Saisir : ");
//     return $nv;
// }
// for ( $i=1; $i<=$nc; $i++){
//     $a = saisirValeurs();
//     $tab1[$i] = $a;
//     $position = key($tab1);
// }
// print_r($tab1);
// $max = array_search(max($tab1), $tab1);
// print_r("la position de la valeur max est : ".$max."est cette valeur est : " .$tab1[$max]);
?>

 <?php
echo "<br><br>";
echo "exo 6.14 <br>";
$tab1 = array();
$n= readline("saisir le nombre de notes à renter ");
$nbnote = 0;
function saisirValeurs(){
    $nv = readline("saisir : ");
    return $nv;
}
 for ($i=1; $i<=$n; $i++) {
     $a= saisirValeurs();
     $tab1 [$i] = $a;
 }
 $totalnote = array_sum($tab1);
 $totaldenote = count($tab1);
 $moyenne = array_sum($tab1)/count($tab1);
     echo "somme total ". $totalnote ."<br>";
     echo "nombre de note " . $totaldenote ."<br>";
     echo "la moyenne est " . $moyenne ."<br>";

 for($i=1; $i<=$n; $i++) {
     if ($tab1[$i]> $moyenne) {
        $nbnote= $nbnote +1;
     }
 }

 echo "le nom de note au dessus de ".$moyenne. " est de ".$nbnote;
?>

<?php
echo "<br><br>";
echo "tableau associatif exo.1 <br>";
$note = [ 'thomas'=>15, 'cedric'=>18, 'emi'=>12, 'nawell'=>14, 'alexie'=>16, 'stephan'=>13 ];
print_r($note);
$max = array_search(max($note),$note);
//foreach($note as $clef => $note[$max]);
print_r("la position de la meilleur note est: ".$note[$max]);
echo "afficher le nom";
echo "afficher le nom";
echo "afficher le nom ";
?>
