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
// echo "Exercice 1 :
// Ecrire un programme qui lit le prix HT d’un article, le
// nombre d’articles et le taux de TVA, et qui fournit le prix 
// total TTC correspondant. Faire en sorte que des libellés
// de champs de  saisie apparaissent clairement. 
// Rappel :(TTC=NA*HT*(1+TVA))";

// ttc();

// function ttc(){

//     if (isset($_POST['nbr_article']) && isset($_POST['prix_ht']) && isset($_POST['TVA'])) {
//         $nbr = $_POST['nbr_article'];
//         $ht = $_POST['prix_ht'];
//         $tva = $_POST['TVA'];

//         $tva = ($nbr * $ht) * $tva / 100;
//         $total = ($nbr * $ht) + $tva;


//             echo "Le prix total est de : ".$total;

//     }else {
//         echo "remplir formulaire et cliquez sur 'valider'";
//         }

// }
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
// echo "Exercice 3 EMILIE:
// Ecrire un programme qui demande l’âge d’un enfant à 
// l’utilisateur. Ensuite, il l’informe de sa catégorie :
// • 'Poussin' de 6 à 7 ans
// • 'Pupille' de 8 à 9 ans
// • 'Minime' de 10 à 11 ans
// • 'Cadet' après 12 ans";


//     categorieAge();

//     function categorieAge(){
//        if (!empty($_POST['age'])){
//            $age= $_POST['age'];
//            if (($age >=6)&&($age<=7)) {
//                echo "Catégorie Poussin";
//            } elseif (($age >=8)&&($age<=9)){
//                echo "Catégorie Pupille";
//            } elseif (($age >=10)&&($age<=11)){
//                echo "Catégorie Minime";
//            } elseif ($age >=12){
//                echo "Catégorie Cadet";
//            } else{
//                echo "Hors Catégorie";
//            }
//            }
//        }
?>

<?php
// echo "Exercice 11 ANGELA :
// Ecrivez un programme permettant, toujours sur le même principe,
// à l’utilisateur de saisir un nombre déterminé de valeurs. Le
// programme, une fois la saisie terminée, renvoie la plus grande
// valeur en précisant quelle position elle occupe dans le tableau.
// On prendra soin d’effectuer la saisie dans un premier temps, 
// et la recherche de la plus grande valeur du tableau dans une
// deuxiéme temps";

// $n = readline("enter numbers of element: ");
// $tab=saisirTableau($n);
// afficherTableau($tab);
// rechercheMax($tab);


// function saisirTableau($taille){
//     $tab = [];
//     for($i = 1; $i <= $taille; $i++){
//         $tab[$i] = readline("value: ");
//     }
//     return $tab;
// }

// function rechercheMax($tab){
//     $grand = $tab[1];//for negtive
//     $position = 0;
//     for($i = 1; $i <= $count($tab); $i++){
//         if($tab[$i]> $grand){
//             $grand = $tab[$i];
//             $postition = $i;
//         }
//     }
//     echo " la plus valeux est : $grande et sa position est: $position"; 
// }

// function afficherTableau($t){
//     foreach($t as $value){
//         echo $value;
//     }
// }

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
// echo 'TABLEAUX ASSOCIATIFS';
// echo "EXO 1";
// echo "QUESTION 2";
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

// print_r($notes);

// $min;
// $prenom;

// foreach ($notes as $key => $value) {
//     if ($notes[$key]<$notes[$key + 1]) {
//        $min = $notes[$key];
//        $prenom=$key;
//     }
//     else {
//         $min = $notes[$key + 1];
//         $prenom=$key;
//     }
// } 

// print_r("l'étudiant qui a eu la note la plus basse est : ".$prenom." et sa note est de : ".$min);
?>

<?php​
    // $tab = array();

    // for($i=1;$i<=$_POST["nbr"];$i++){
    //     $tab[$i]=$_POST["Variable$i"];
    // }
    //     ​
    // var_dump($tab);
    // ​
    // $positif=0;
    // $negatif=0;
    // $null=0;
    // ​
    // for ($i=1;$i<=count($tab);$i++){
    
    //     if ($tab[$i]>0){
    //         $positif++;
    //     } else if ($tab[$i]<0){
    //         $negatif++;
    //     } else {
    //         $null++;
    //     }​
    // }
    // ​
    // echo "<br>le nombre des variables positives est : ".$positif;
    // echo "<br>le nombre des variables négatives est : ".$negatif."<br>";
    
    // if ($null<>0) {
    //     echo"<br>vous avez aussi ".$null." valeurs null";
    // }
 ?>

<?php
    // //Inversement des ordres des éléments d'1 tableau
    // ​
    // $taille=readline("saisir le nombre d'élements");
    // ​
    // $tableau=saisirTableau($taille);

    // $tableau=inverserTableau($tableau);

    // print_r($tableau);
    // ​
    // function saisirTableau($taille){
    //     $tab=[];
    //     for($i=1;$i<=$taille;$i++){
    //         $tab[$i]=readline("Valeur");
    //     }        
    //     return $tab;
    // }
    // ​
    // function inverserTableau($arrayA){        
    //     for ($i=0;$i<=intdiv(count($arrayA),2);$i++){
    //         $j=count($arrayA)-$i;
    //         swap($arrayA,$i,$j);
    //         return $arrayA;
    //     }    
    // }
        
    // function swap(&$array,$index1,$index2)
    // {
    // $temp = $array[$index1];
    // $array[$index1] = $array[$index2];
    // $array[$index2] = $temp;
    
    // }    ​
?>

<?php
    echo "EXERCICES PHP.TXT";

    echo "<br>";
    echo "<br>";
    // include_once ('form-Ced.php');
    echo "<br>";

    echo "EXERCICE 7 : Ecrire un programme permettant de saisir deux nombres et 
    ensuite calculer le résultat de leur multiplication en ne
    faisant que des additions.";
    echo "<br>";

    if (!empty($_GET['nbre1']) && !empty($_GET['nbre2'])){
        // $nbre1 = $_GET['nbre1'];
        // $nbre2 = $_GET['nbre2'];
    }

        function multiplication($nbre1,$nbre2){
            for ($i=1; $i <= $nbre2; $i++) {
                $tab[$i]=$nbre1;
                // echo "$nbre1+$nbre1";
                // echo $nbre1+$nbre1;
                // return $tab[$i];
                
            }
            // foreach ($tab as $key => $value) {
            //    echo $tab[$key] + $tab[$key+1];
            // }
            // echo $tab[$i]."+".$tab[$i+1];
            // var_dump($tab);

            for ($i=1; $i < $nbre2-1; $i++) { 
                echo $multiplication = $tab[$i]."+".$tab[$i+1];
            }
        // echo $multiplication;
        }

    multiplication(5,10);
?>