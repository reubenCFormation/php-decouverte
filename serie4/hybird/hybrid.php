<?php
// ici nous allons voir que nous pouvons toute a fait melanger notre html et notre php de maniere beaucoup plus efficace que en faisant des echos partout
$students=[["name"=>"Johnny","age"=>22,"score"=>15],["name"=>"Jeremy","age"=>23,"score"=>14],["name"=>"Tom","age"=>24,"score"=>16],["name"=>"Geraldine","age"=>24,"score"=>16],["name"=>"Pauline","age"=>22,"score"=>17]];

?>

<!DOCTYPE html>
<!--
     un ficher avec une extension php est capable de recconaitre de l'html css!
-->
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
        <!--
            ici je mets mon propre fichier css
        -->
        <link rel="stylehseet" href="./style/style.css"/>
    </head>

    <body>
        <!--
            Voyons comment nous pouvons dynamiquement ecrire du html/css avec du php 
        -->

        <table class="table">
            <h2 class="text-center"> Nos Etudiants </h2>
            <thead>
                <th> Nom </th>
                <th> Age </th>
                <th> Moyenne </th>
            </thead>

            <tbody>
                <?php foreach($students as $student): ?>
                    <!--
                        Avec cette syntaxe j'ai pu generer de maniere dynamique de l'html/css a l'aide d'une boucle foreach. Ainsi, si nous avons eu une centaine d'etudiants a afficher, ca nous aurai que pris quelque millisecondes de plus pour afficher tous nos etudiants
                    -->
                    <tr> 
                        <td> <?php echo $student["name"]; ?> </td>
                        <td> <?php echo $student["age"]; ?> </td>
                        <td> <?php echo $student["score"];?> </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
        

    </body>
</html>