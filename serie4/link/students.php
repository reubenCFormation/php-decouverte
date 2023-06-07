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
        <!--
        Ici, je vais afficher les noms de tous mes etudiants de maniere dynamique avec une boucle foreach
        -->
        <h2 class="col-5 offset-1"> Les Etudiants </h2>
    
        
    <ul class="col-6 list-group">
        <div class="d-flex"> 
            <li class="list-group-item col-4"> Nom </li>
            <li class="list-group-item col-4"> Age </li>
            <li class="list-group-item col-4"> Moyenne </li>
        </div>  
            <?php foreach($students as $student): ?>
            <div class="d-flex">
                <li class="list-group-item col-4 text-info"> <?php echo $student["name"] ?> </li>
                <li class="list-group-item col-4 text-info"> <?php echo $student["age"] ?> </li>
                <li class="list-group-item col-4 text-info"> <?php echo $student["score"] ?> </li>
            </div>
            <?php endforeach ?>
           
        </ul>
        <!--
            Ici je peux creer un lien pour aller sur la page des atheltes
        -->
    
    <a href="./athletes.php" class="btn btn-primary m-5"> Voir les athletes </button>

    </body>
</html>