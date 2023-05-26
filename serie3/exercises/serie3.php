<?php
//1) Trouvez un moyen d'acceder a la valeur "hello world" en DEHORS de la fonction. Hint: il faut utiliser une variable EN DEHORS de la fonction. 

function returnsHelloWorld(){
    return "hello world";
}

//2) Trouvez un moyed d'acceder a la valeur $arr en DEHORS de la fonction. Hint: il faut rajouter une ligne dans la fonction et aussi definir une variable EN DEHORS de la fonction

function returnsArr(){
    $arr=["first","second","third","fourth","fifth"];
    //il faut rajouter une ligne ici
}

//3) Trouvez un moyen de souhaiter le bienvenue a trois personnes differentes que vous allez choisir 

function greet($name){
    echo "hello"." ".$name;
}

//4) A partir de cette fonction, faites en sorte de pouvoir stocker dans une variable EN DEHORS de la fonction la valeur 4 Hint: Pensez a la fonction predefini  count

function returnsArrLength($arr){
    // votre code ici
}

//5 Ecris une fonction qui prendra un parametre qui sera un numero. Faites en sorte de pouvoir stocker le carré de ce numero dans une variable EN DEHORS de la fonction

function squareNum($num){
    // ici ecrivez votre code
}

//6) Ecrivez une fonction pour parcourir chaque element de notre tableau $names tableau que vous allez definir lors que vous faites appel a la fonction. (pensez parametres et arguments!). La fonction va devoir afficher chaque valeur de notre tableau $names

$names=["Cecil","Amandine","Jeremy","Johnny","Tom","Aaron"];


//7) Ecrivez une fonction qui va utiliser notre tableau multi dimensionelle $restaurants. Trouvez un moyen de retourner le nombre de restaurants qui ont comme type fast-food et stockez ce resultat dans une variable 
// Hint: nous devons avoir une valeur de 3 correpondant au nombre de restaurants qui sont de type fast food!

$restaurants=[["name"=>"Mcdo","type"=>"fast-food"],["name"=>"O'tacos","type"=>"fast-food"],["name"=>"La Coupule","type"=>"brasserie"],["name"=>"KFC","type"=>"fast-food"],["name"=>"le relais de l'entrecote","type"=>"brasserie"]];

//8) Avec notre talbeau, ecrivez une fonction qui va compteur le nombre de sports qui sont de type contact_sport. Encore une fois retourner le nombre de sports qui sont de type_contact et stockez cette valeur dans une variable en DEHORS de la fonction

$sports=[["name"=>"Rugby","is_contact_sport"=>true],["name"=>"Football Americain","is_contact_sport"=>true],["name"=>"Golf","is_contact_sport"=>false],["name"=>"Football","is_contact_sport"=>false],["name"=>"Basketball","is_contact_sport"=>false]];

// BONUS!

//9) 
/*
1)Ecrivez une fonction qui prendra un parametre min et max. 
2)Ensuite avec une autre fonction ,trouver un moyen de boucler sur notre tableaux de noms
3) a chaque tour de boucle ,trouver un moyen d'acceder a une lettre aleatoire de notre tableau
4) finalement, nous allons devoir retourner une chaine de caracteres qui consistera de pleins de lettres generé aleatoirement. 
5) Nous allons avoir deux fonctions et nos deux fonctions nous retournerons des valeurs!

*/ 




?>