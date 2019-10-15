<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXERCICES PHP.TXT</title>
</head>
<body>
    <!-- <form action="index-Ced.php" method="get">
        <label for="nbre1">Saisir nombre 1</label>
        <input type="number" name="nbre1" id=""> <br>

        <label for="nbre2">Saisir nombre 2</label>
        <input type="number" name="nbre2" id=""> <br>
        
        <input type="submit" value="valider">
    </form>     -->

    <!-- <form action="exercicephp.php" method="POST">
        <!- Exercice 1 EMILIE :
        Ecrire un programme qui lit le prix HT d’un article, le
        nombre d’articles et le taux de TVA, et qui fournit le prix 
        total TTC correspondant. Faire en sorte que des libellés
        de champs de  saisie apparaissent clairement. 
        Rappel :(TTC=NA*HT*(1+TVA)) ->
        <label for="nbr_article">Nombre d'articles : </label>
        <input type="number" name="nbr_article" value="1">
        <label for="prix_ht">Prix HT :</label>
        <input type="number" name="prix_ht" value="1">
        <label for="TVA">tva :</label>
        <input type="number" name="TVA">
        <input type="submit">
    </form> -->

    
    <!-- <form action="exercicephp.php" method="POST">
        <!- "Exercice 3 EMILIE:
        Ecrire un programme qui demande l’âge d’un enfant à 
        l’utilisateur. Ensuite, il l’informe de sa catégorie :
        • 'Poussin' de 6 à 7 ans
        • 'Pupille' de 8 à 9 ans
        • 'Minime' de 10 à 11 ans
        • 'Cadet' après 12 ans" ->
        
    <label for="age">Age enfant : </label>
    <input type="number" name="age" />
    <input type="submit" value="Valider" />
    </form> -->

    <form method='POST' action='#saisie'>
        <!- Exercice 8 ASMA:
        Ecrivez un programme permettant à l’utilisateur de saisir un
        nombre quelconque de nombres, qui devront être stockées dans un
        tableau. L’utilisateur doit donc commencer par entrer le nombre 
        de valeurs qu’il compte saisir. Il effectuera ensuite cette 
        saisie. Enfin, une fois la saisie terminée, le programme 
        affichera le nombre de valeurs négatives et le nombre de
        valeurs positives. ->


        <label>Nombre Elements : </label>
        <input type="TEXT" name="nbrElem"><br>
        <br>
        <input class="btn btn-success" type='submit' value='valider'> <br>​
    </form>
​
    <?php
    if (!empty($_POST["nbrElem"])){
        echo"<div id='saisie'>";
            echo"<br><br>";
            echo" <form method='POST' action='test8.php'> ";
                echo"<input type='text' name='nbr' readonly value=".$_POST["nbrElem"]."><br><br>";
        // echo"<input type='hidden' name='nbr' value=".$_POST["nbrElem"]."><br><br>";
    ​
                    for ($i=1;$i<=$_POST["nbrElem"];$i++){
                        echo"<label>Nombre".$i." : </label>";

                        echo"<input type='TEXT' name='Variable$i'><br><br>";
                    }
                echo"<br><br><input class='btn btn-success' type='submit' value='valider' name='boutonn'>";
    ​
            echo "</form>";
        echo"</div>";
    }
    ?>
</body>
</html>