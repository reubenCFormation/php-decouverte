<?php

//1) portéé des variables 
 //-------------------------------------------------------------------------------------------------------------------------------------

 // en PHP, nous pouvons voir que par defaut, les variables sont localisé. Cette a dire que si je declare une variable en dehors d'une fonction, elle ne sera pas reconnu dans une fonction, comme on peux le voir pour la variable $myString ici 
$myString="myString";

function echoVar(){
    /*
    echo $myString;
    */
}
/*
echoVar();
*/

// Avec la meme logique, si moi je declare une variable dans une fonction, et que j'essaye d'acceder a cette variable en dehors de la fonction, la variable ne sera pas reconnu (il faudrai faire un return et stocker la valeur du return dans une NOUVELLE variable)
function createVar(){
    $scope="Cette variable ne sera que reconnu dans cette fonction";
}
/*
var_dump($scope);
echo "<br/>";
*/

//2) Les variables globales 
//------------------------------------------------------------------------------------------------------------------------------------------

// si on veux donner une portée globale a une variable, nous devons DANS UNE FONCTION, utiliser le mot clé globale, suivi par la variable que nous souhaitons rendre globale et ensuite nous pouvons defenir la variable et elle sera reconnu partout dans notre script!. Cependent, nous allons rarement faire cela car il y a des manieres beaucoup plus efficace de rendre une valuer accesible partout dans notre script.
 
 function addGlobalScope(){
    global $globalVar;
    $globalVar="Je rends cette variable disponible partout en faisant appel a cette fonction";

 }

 addGlobalScope();
 var_dump($globalVar);

 

?>