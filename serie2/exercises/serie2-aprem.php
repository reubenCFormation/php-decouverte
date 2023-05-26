<?php

//1) A partir du tableau $names faites en sorte d'afficher chaque valeur du tableau via une boucle for ou foreach
$names=["Cecile","Reuben","Eli","Peyton","Tom","Amandine"];
//1a) A partir de notre tableau $arrayMult, faites en sorte d'afficher a l'aide d'une boucle imbriqué, toutes les valeurs de nos trois tableaux
$arrayMult=[["first","second","third"],["first","second","third"],["first","second","third"]];

//2) A partir de ce tableaux mutlidimensionelle et a l'aide d'une boucle, pour chaque indice du tableaux,faites en sorte d'afficher la phrase, "le restaurant s'apelle {name} et il est localisé a {city};

$restaurants=[["name"=>"Le mistral","city"=>"Paris","meals"=>["steak","glace","ouef mayo"]],["name"=>"Brasserie de Bordeaux","city"=>"Bordeaux","meals"=>["steak haché","assiete de fromage","fois grais"]],["name"=>"O'tacos Paris","city"=>"Paris","meals"=>["tacos gras","tacos plus gras","tacos ultra gras","taco de la salle d'urgence"]],["name"=>"La Cantine","city"=>"Paris",["ouef mayo","saussice de toulouse","entrecote","assiete fromage"]],["name"=>"La folie douce","city"=>"Tignes val d'isere","meals"=>["bire xl","bierre xxl","bierre ko","cocktail piste rouge","cocktail piste noir"]]];

//3) Toujours a partir de notre tableaux restaurants,faites en sorte d'afficher la meme chose que dans l'etape numero 2 mais cette fois, rajoutez le nombre d'elements qui se trouvent sur le menu de chaque restaurant.

//4)A partir du tableau $players, creer un nouveau tableau qui ne va que conserver les jouers qui auront marqué plus de 50 buts dans leurs carrieres. 
$players=[
["firstname"=>'Killian',"lastname"=>'Mbappé',"goals"=>268],
["firstname"=>"Lionel","lastname"=>"Messi","goals"=>800],
["firstname"=>"Reuben","lastname"=>"Chouraki","goals"=>0],
["firstname"=>"Christano","lastname"=>"Ronaldo","goals"=>500],
["firstname"=>"Tom","lastname"=>"Brady","goals"=>0],
["firstname"=>"Eli","lastname"=>"Manning","goals"=>2],
["firstname"=>"Wayne","lastname"=>"Rooney","goals"=>200],
["firstname"=>"Brad","lastname"=>"Pitt","goals"=>0],
["firstname"=>"Ronaldo","lastname"=>"Luis","goals"=>1000]
];


//5) A partir du tableau $concerts de concerts,affichez sous forme de liste, le titre, le prix,la ville, le prix d'entree ainsi que la liste de chaque groupe qui joue dans le concert. 

$concerts=[
["title"=>"The best concert ever","city"=>"Paris","price"=>100,"bands"=>["Orelsan","Maitre Gims","Booba","Gringe","Hollywood Undead"]],
["title"=>"the second best concert ever","city"=>"Lyon","price"=>110,"bands"=>["Orelsan","Linkin Park","Tupac"]],
["title"=>"The third best concert ever","city"=>"San Franciso","price"=>120,"bands"=>["Orelsan","Maitre Gims","Green Day","The Beatles"]],
["title"=>"the fourth best concert ever","city"=>"Los Angeles","price"=>50,"bands"=>["SOAD","Biggie","Blink 182","Hollywood Undead","B.O.B"]],["title"=>"the fifth best concert ever","city"=>"Chicago","price"=>50,"bands"=>["Hollywood Undead","Imagine Dragons","The Offsrping","Blink 182","Sexion D'assaut"]],
["title"=>"the best concert in the best city","city"=>"New York","price"=>200,"bands"=>["JayZ","Biggie","Tupac","Beyoncé","Kid Cudi","Orelsan"]],
["title"=>"another concert in the midwest","city"=>"kansas city","price"=>50,"bands"=>["tech-n9ne","kmk"]]
];

//6) Toujours a partir du tableau $concerts, creer un nouveau tableaux, qui ne contiendra que les concerts ayant un prix superieur a 60 euros, et ayant plus de 4 groupes qui joue dans le concert

// -------BONUS!---------

//1)(attention pas facile, que pour les courageux!) A partir du tableau $concerts,creer un nouveau tableaux associatifs qui va lister le nom du groupe, ainsi que le nombre de fois que le groupe a joué en concert. Attention (pas le droit de d'utiliser la methode array_count_values (sinon ca serai trop facile! ))Vous pouvez tout de meme utiliser array_key_exists!





//2) Pour finir en douceur :) En utilisant une boucle while, et en utilisant notre tableau de mots ($words- on va aleatoirement selectionner un index de ce tableau et on va alimenter une chaine de caraceters (qui au debut sera vide) chaque fois avec le mot aleatoire que on aura trouvé selon notre tableau. Tant que notre chaine de caractere fait moins de 10000 caractres, nous allons continuer a alimenter notre chaine de caracteres

$words=["myfirstlongword","small","nowareallymuchlongerword","painbeurrejambon","petit","grandaautantdelettresquepetit","deux","sometimes","always","thelastwordinthisarray"];



?>