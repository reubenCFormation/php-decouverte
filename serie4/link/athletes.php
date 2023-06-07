<?php
    // nous pouvons aussi utiliser la fonction require_once. Elle est identique a require mise a part le fait que php va verifier si nous avons deja fait un require du fichier auparavant et si c'est le cas, il ne fera pas un require un deuxieme fois
    require_once("data.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    </head>

    <body>

       <h2 class="col-5 offset-1"> Les Athletes </h2>
        <ul class="col-6 list-group">
        <div class="d-flex"> 
            <li class="list-group-item col-4"> Nom </li>
            <li class="list-group-item col-4"> Sport </li>
        </div>  
        <!--
            ici je peux utiliser mes données $atheltes qui viennent du fichier data.php
        -->
            <?php foreach($athletes as $athlete): ?>
            <div class="d-flex">
                <li class="list-group-item col-4 text-warning"> <?php echo $athlete["name"] ?> </li>
                <li class="list-group-item col-4 text-warning"> <?php echo $athlete["sport"] ?> </li>
            </div>
            <?php endforeach ?>
           
        </ul>
        <!--
            Ici je peux creer un lien pour aller sur la page des etudiants
        -->
        <a href="./students.php" class="btn btn-primary m-5"> Voir les etudiants </button>
        
       
       
    </body>
</html>