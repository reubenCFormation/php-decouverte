<?php
// maintenant que on sait boucler et que on connait les conditions, notre champ de possibilités est grandement elargi, on va pouvoir construire nos propres tableaux, une tache qui se fait souvent en programmation. 

// j'initialise un tableau vide
$myFavoriteAnimals=[];


$animals=[["name"=>"labby","type"=>"labrador retreiver","isFavorite"=>true],["name"=>"goldy","type"=>"golden retreiver","isFavorite"=>true],["name"=>"husker","type"=>"husky","isFavorite"=>false],["name"=>"pitman","type"=>"pitbull","isFavorite"=>true],["name"=>"GrizzlyMan","type"=>"Bear","isFavorite"=>false]];

// si dans ce tableaux multi-dimensional, j'ai un animal favori, je vais l'ajouter dans mes animaux favori, deux syntaxes differentes

// 1er exemple
foreach ($animals as $animal){
  if($animal["isFavorite"]){
    // on alimente le tableaux
    $myFavoriteAnimals[]=$animal;
    // ou on peux utiliser la methode array_push 
    //array_push($myFavoriteAnimals,$animal);
  }

  // on peux aussi utiliser la methode array_push, 

 
  
}


var_dump($myFavoriteAnimals);


?>