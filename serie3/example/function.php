<?php 

//Example 1:// Ici je veux une fonction qui va pouvoir me retourner la longeur d'une chaine de caracteres que nous allons passer en tant que argument de la fonction. Cela veux dire que la fonction prendra un parametre Comment faire? 
function returnStrLen($string){
    // que dois je mettre ici?
    return strlen($string);
}
// comment stocker la longeur de notre chaine 
/*

*/
$stockedVal=returnStrLen("stringwhatiwant");
//var_dump($stockedVal);




// Example 2: Ici j'ai un tableau de personnes. Certaines sont des adultes et d'autres sont des enfants. Comment va t'on creer une fonction pour afficher le nombre de personnes qui sont des adultes

$people=[["name"=>"Jeremy","isAdult"=>false],["name"=>"Johnny","isAdult"=>false],["name"=>"Pauline","isAdult"=>true],["name"=>"Sarah","isAdult"=>true],["name"=>"Valentina","isAdult"=>false],["name"=>"Tom","isAdult"=>true]];

function countAdults($persons){
    $adultCounter=0;
   foreach($persons as $person){
     if($person["isAdult"]==true){
        $adultCounter++;
     }
   }
   return $adultCounter;
}

$getAdults=countAdults($people);
var_dump($getAdults);





?>