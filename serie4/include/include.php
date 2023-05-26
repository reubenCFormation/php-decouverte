<?php
// ici j'utilise la fonction php include Cette fonction va me charger le contenu de mon fichier data.php et ainsi je vais avoir access aux informations qui sont contenu dans le fichier data.php
include("data.php");
// ici grace au include, j'ai bien access au contenu de ma variable $athletes que j'ai defini dans data.php. Etant donnée que je precise que je veux faire un include de ce fichier.
var_dump($athletes);

// cependant, que se passe t'il si je precise un fichier qui n'existe pas avec un include? Comme nous pouvons le constater le include est moins strict que le require et donc une erreur fatale ne sera pas declenché et le suite du fichier pourra quand meme etre executé.

include("datazzz.php");

echo "<h2> Malgré notre warning nous pouvons quand meme declencher la suite de notre fichier! </h2>"


?>