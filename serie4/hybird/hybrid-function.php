<?php 
// Ici j'ecris une fonction pour afficher les informations d'un etudiant
   function showStudent($student,$key){
     echo $student[$key];
    
   }
    $students=[["name"=>"Johnny","age"=>22,"score"=>15],["name"=>"Jeremy","age"=>23,"score"=>14],["name"=>"Tom","age"=>24,"score"=>16],["name"=>"Geraldine","age"=>24,"score"=>16],["name"=>"Pauline","age"=>22,"score"=>17]];


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
        <!--
            ici je mets mon propre fichier css
        -->
        <link rel="stylehseet" href="./style/style.css"/>
    </head>

    <body>
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
                        <!--
                            Ici je fais appel a ma fonction showStudent en lui passant comme argument la clé que nous souhaitons ainsi que l'etudiant en cours dans notre boucle
                        -->
                        <td> <?php showStudent($student,"name"); ?> </td>
                        <td> <?php showStudent($student,"age");?> </td>
                        <td> <?php showStudent($student,"score");?> </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </body>
</html>