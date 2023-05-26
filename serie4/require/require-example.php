<?php
// ici j'utilise la fonction php require. Cette fonction va me charger le contenu de mon fichier data.php et ainsi je vais avoir access aux informations qui sont contenu dans le fichier data.php
require("data.php");
// ici grace au require, j'ai bien access au contenu de ma variable $athletes que j'ai defini dans data.php. Etant donnée que je precise que je veux faire un require de ce fichier.
var_dump($athletes);

// cependant, que se passe t'il si je precise un fichier qui n'existe pas? Je vais avoir une erreur fatal et la suite de mon script ne pourra pas etre effectué!

require("datazzz.php");

echo "<h1> Nous avons une erreur fatale, nous ne pouvons pas declencher la suite des instructions! </h1>"


?>