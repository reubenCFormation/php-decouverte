<?php
/*
Ici je crée un tableau de resaurants 
*/
$restaurants=[["name"=>"O'tacos chatelet","city"=>"Paris","type"=>"fast food"],["name"=>"five guys la defense","city"=>"Puteaux","type"=>"fast food"],["name"=>"La Rotonde","type"=>"Cuisine Gastronomique","city"=>"Paris"],["name"=>"Relais de Venise","type"=>"Cuisine Gastronomique", "city"=>"Paris"]];




?>

<!DOCTYPE html>
<html>
    <head>
        <!--
            Je charge mon fichier bootstrap
        -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
        <!--
            ici je mets mon propre fichier css
        -->
    <link rel="stylehseet" href="./style/style.css"/>
    </head>

    <body>
        <!--
         Ici voyons comment nous pouvons utiliser les de maniere dynamique afin de pouvoir changer le rendu visuel de notre page.Je vais utiliser mon tableau de restaurants.Ici si un restaurant a une type de cuisine gastronimique je vais mettre le texte en bleu. Au contraire, si un restaurant a une type de cuisine fast food je vais le mettre en jaune
        -->
        <!--
            Je parcours mes restaurants
        -->

        <table class="table">
            <thead>
                <th> Nom </th>
                <th> Ville </th>
                <th> Type </th>
            </thead>
            
        
            <tbody>

                <?php foreach($restaurants as $restaurant): ?>
                    <!--
                        Si mon restaurant est de type cuisine gastronomique je vais afficher ces informations en bleu, sinon je vais afficher ces informations en jaune
                    -->
                    <?php if($restaurant["type"]=="fast food"):?>
                        <tr>
                            <td class="text-warning"> <?php echo $restaurant["name"] ?> </td>
                            <td class="text-warning"> <?php echo $restaurant["city"] ?> </td>
                            <td class="text-warning"> <?php echo $restaurant["type"] ?> </td>
                        </tr>

                        <?php else: ?>
                            <tr>
                            <td class="text-primary"> <?php echo $restaurant["name"] ?> </td>
                            <td class="text-primary"> <?php echo $restaurant["city"] ?> </td>
                            <td class="text-primary"> <?php echo $restaurant["type"] ?> </td>
                        </tr>

                    <?php endif ?>

                    
                <?php endforeach ?>
            </tbody>

        </table>
    </body>
</html>