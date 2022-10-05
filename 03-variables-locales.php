<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables locales</title>
</head>

<body>
    <h1>Variables locales</h1>
    <p>En PHP, les variables sont représentées par un signe dollar "$" suivi du nom de la variable. Le nom est sensible à la casse.<br>
        Les noms de variables suivent les mêmes règles de nommage que les autres entités PHP. Un nom de variable valide doit commencer par une lettre ou un souligné (_) mais on va l'éviter car les superglobales l'utilisent, et l'OO (orienté objet aussi), suivi de lettres, chiffres ou soulignés.</p>
    <p>On va éviter les caractères spéciaux, même si certains sont valides. il faut absolument éviter les signes servant aux calculs (+-*/)</p>

    <h2>Utilité des variables</h2>
    <p>Elles servent à stocker des informations</p>
    <p>Elles peuvent être manipulées, affichées, sauvegardées, détruites etc...</p>
    <h4>Mettez les variables valides (même les déconseillées) dans les balises PHP</h4>
    <pre>
    $lulu = 5;
    $lala = "yes";
    $5main = 3; <!--pas bon-->
    $_____coucou = 7; <!--bon-->
    $bool = true; <!--bon-->
    $bool 2 = false;<!--pas bon-->
    $je-t-aime = "pas"; <!--pas bon-->
    $ILoveYou = "me too"; <!--bon-->
    $6-repos = 77;<!--pas bon-->
    $bon-homme = true;<!--pas bon-->
    $lkhjfgt5468sd58757 = 677;<!--bon-->
    $mabapta = $lulu;<!--bon-->
</pre>
    <hr>
    <?php
    $lulu = 5;

    $mabapta = $lulu;
    echo '$mabapta = $lulu;';
    echo "$mabapta <br>";



    ?>
</body>

</html>