<?php
// echo "EXO 1.6 <br>"; 
// $A=2;
// $B=5;
// $Temp=0;

// $Temp = $A;
// $A = $B;
// $B = $Temp;

// echo "A = ".$A." et B = ".$B ;
?>

<?php
// echo "<br> <br>";
// echo "EXO 1.7 <br>";

// $A=3;
// $B=7;
// $C=10;
// $Temp=0;

// $Temp = $B;
// $B = $A;
// $A = $C;
// $C = $Temp;

// echo "A = ".$A.", B = ".$B." et C = ".$C;
?>

<?php
// echo "<br> <br>";
// echo "EXO 2.2 <br>";

// $nbre=6;

// function carre($nbre) {
//     $resultat=$nbre*$nbre;
//     return $resultat;
// }

// echo "Le carré de ".$nbre." est égal à ".carre($nbre);
?>

<?php
// REMPLIR UN TABLEAU DE X COLONNES AVEC LA MEME VALEUR
// echo "<br> <br>";
// echo "EXO 6.1 <br>";
// $tab = array();

// for ($i=1; $i<=7 ; $i++) { 
//     $tab[$i] = 0;
// }
// print_r($tab);
?>

<?php
// REMPLIR UN TABLEAU 
// echo "<br> <br>";
// echo "EXO 6.2 <br>";
// // $tab = array();
// $voyelles = array('a', 'e', 'i', 'o', 'u', 'y');

// for ($i=1; $i<=6 ; $i++) { 
//     // $tab[$i] = 0;
// }
// print_r($voyelles);
?>

<?php
// REMPLIR UN TABLEAU EN UTILISANT DES VALEURS EXTERNES
// echo "\n \n";
// echo "EXO 6.3 \n";

// function remplirTableau(){
//     $val = readline("Rentrez une valeur : ");
//     return $val;
// }

// for ($i=1; $i<=9 ; $i++) { 
//     $result = remplirTableau();  
//     $note [$i]=$result;
// }

// print_r($note);
?>

<?php
// echo "<br> <br>";
// echo "EXO 5.1 <br>";

// $nbre = readline("Saisir un nombre compris entre 1 et 3 : ");
// $Condition = $nbre < 1 || $nbre > 3;

// $Condition;
// // while (!$Condition) {
//     if ($Condition) {
//         echo "Recommencez";
//         $nbre = readline("Saisir un nombre compris entre 1 et 3 : ");
//         // $Condition;
//     }
//     else {
//         echo "Good job";
// }

//     !$Condition;

?>

<?php
// echo "<br> <br>";
// echo "EXO 2.3 <br>";

// $PHT=35;
// $Qte=4;

// function MontantHT($PHT,$Qte) {
//     $MHT=$PHT*$Qte;
//     return $MHT;
// }

// function MontantTTC(MontantHT($PHT,$Qte),1.2 {
//     $MTTC = MontantHT($PHT,$Qte)*1.2;
//     return $MTTC;
// }

// echo "Le montant Hors Taxe est égal à ".MontantHT($PHT,$Qte)." et le montant TTC est égal à ".MontantTTC(MontantHT($PHT,$Qte),1.2);
?>

<?php
// echo "<br> <br>";
// echo "exo 6.12 Alexie <br>";

// $a = array('4','8','7');
// $b= array();

// for ($i=0;$i<3;$i++){
// $b[$i] = $a[$i]+1;
// }
// print_r($b);
?>

<?php
// echo "<br> <br>";
// echo "exo 6.12 <br>";

// $Tab1 = array();
// $Tab2 = array();

// $n = readline("Saisir le nombre de valeur du tableau : ");

// function saisirValeurs(){
//     $val = readline("Saisir : ");
//     return $val;
// }

// for ($i=1; $i <= $n ; $i++) { 
//     $a = saisirValeurs();
//     $Tab2[$i]=$a+1;
// }
// print_r($Tab2);
?>

<?php
// echo "</br> </br>";
// echo "exo 6.13 <br>";

// $Tab1 = array();

// $n = readline("Saisir le nombre de valeur du tableau : ");

// function saisirValeurs(){
//     $val = readline("Saisir : ");
//     return $val;
// }

// for ($i=1; $i <= $n ; $i++) { 
//     $a = saisirValeurs();
//     $Tab1[$i]=$a;
//     $position = key($Tab1);
// }
// print_r($Tab1);

// $max = array_search(max($Tab1), $Tab1);

// print_r("la position de la valeur maximum est : ".$max." et cette valeur est : ".$Tab1[$max]);
?>

<?php
// echo "</br> </br>";
// echo "exo 6.14 <br>";

// $Tab1 = array();

// $n = readline("Saisir le nombre de valeur du tableau : ");

// function saisirNotes(){
//     $val = readline("Saisir : ");
//     return $val;
// }

// for ($i=1; $i <= $n ; $i++) { 
//     $a = saisirNotes();
//     $Tab1[$i]=$a;
// }
// print_r($Tab1);

// $total = array_sum($Tab1);
// $MoyenneClasse = $total/$n;

// print_r("la moyenne de la classe est de : ".($MoyenneClasse));

// $Tab2 = array();

// foreach ($Tab1 as $note) {
//     if ($note > $total/$n) {
//         $Tab2[]=$note;
//     }
// }
// print_r($Tab2);

// print_r('le nombre de notes supérieures à la moyenne de la classe est de : '.Count($Tab2));
?>

<?php
// echo "</br> </br>";
// echo "exo 7.1 <br>";

// $Tab1 = array();

// $n = readline("Saisir le nombre de valeur du tableau : ");

// function saisirValeurs(){
//     $val = readline("Saisir : ");
//     return $val;
// }

// for ($i=1; $i <= $n ; $i++) { 
//     $a = saisirValeurs();
//     $Tab1[$i]=$a;
// }
// print_r($Tab1);

// $flag = true;

// for ($i=1; $i <= $n; $i++) { 

//     $flag = !false;

//     if ($Tab1[$i] = $Tab1[$i+1]-1) {
//         $flag = true;
//         print_r('Les éléments sont consécutifs');
//     } else {
//         $flag = false;
//         print_r('Les éléments ne sont pas consécutifs');
//     }
// }

// foreach ($Tab1 as $valeur) {
//     if ($valeur = ($valeur-1)+1) {
//         print_r('Les éléments sont consécutifs');
//     } else {
//         print_r('Les éléments ne sont pas consécutifs');
//     }
// }
?>

<?php
// echo 'TABLEAUX ASSOCIATIFS';
// echo "EXO 1";
// echo "QUESTION 1";
// echo "<br>";

// //-----------------------

// $prenom = array();
// $note = array();


// $n = readline("Saisir le nombre de valeur du tableau : ");

// function saisirPrenom(){
//     $P = readline("Saisir prenom: ");
//     return $P;
// }

// for ($i=1; $i <= $n ; $i++) { 
//     $a = saisirPrenom();
//     $prenom[$i]=$a;
// }

// function saisirNote(){
//     $N = readline("Saisir note: ");
//     return $N;
// }

// for ($i=1; $i <= $n ; $i++) { 
//     $b = saisirNote();
//     $note[$i]=$b;
// }

// $couple = array_combine($prenom, $note);

// print_r($couple);

// $max = array_search(max($note), $note);
// print_r("l'étudiant qui a eu la meilleure note est : ".$prenom[$max]." et sa note est de : ".$note[$max]);
?>

<?php
// echo 'TABLEAUX ASSOCIATIFS';
// echo "EXO 1";
// echo "QUESTION 1";
// echo "<br>";

// //-----------------------

// $notes = array();


// $n = readline("Saisir le nombre de valeur du tableau : ");

// function saisirPrenom(){
//     $P = readline("Saisir prenom: ");
//     return $P;
// }

// function saisirNote(){
//     $N = readline("Saisir note: ");
//     return $N;
// }

// for ($i=1; $i <= $n ; $i++) { 
//     $a = saisirPrenom();
//     $b = saisirNote();
//     $notes[$a]=$b;
// }

// // $couple = array_combine($prenom, $note);

// print_r($notes);

// $max = 0;
// $prenom;

// foreach ($notes as $key => $value) {
//     if ($value>$max) {
//        $max = $value;
//        $prenom=$key;
//     }
// } 

// // echo $max."".$key;

// // echo $temp;

// print_r("l'étudiant qui a eu la meilleure note est : ".$prenom." et sa note est de : ".$max);
?>

<?php
echo 'TABLEAUX ASSOCIATIFS';
echo "EXO 1";
echo "QUESTION 2";
echo "<br>";

//-----------------------

$notes = array();


$n = readline("Saisir le nombre de valeur du tableau : ");

function saisirPrenom(){
    $P = readline("Saisir prenom: ");
    return $P;
}

function saisirNote(){
    $N = readline("Saisir note: ");
    return $N;
}

for ($i=1; $i <= $n ; $i++) { 
    $a = saisirPrenom();
    $b = saisirNote();
    $notes[$a]=$b;
}

print_r($notes);

$min = $notes[1];
$prenom;

foreach ($notes as $key => $value) {
    if ($value<$min) {
       $min = $value;
       $prenom=$key;
    }
} 

print_r("l'étudiant qui a eu la note la plus basse est : ".$prenom." et sa note est de : ".$min);
?>