<?php 
// une methode predfini est une methode que php nous a deja ecrit! PHP a actuellement envrion 1000 methodes predefini! On peux les retrouver dans la documentation de php!

// 1) gettype par exemple, je veux connaitre le type d'une variable

$myString="My String";

/*
echo "La variable myString est un/une ".gettype($myString)."<br/>";
*/


$myArray=["Jeremy","Johnny","Steve","Eli","Roger"];

/*
echo "La variable myArray est un/une ".gettype($myArray)."<br/>";
*/



//2) strlen et count

// souvent on veux connaitre le nombre d'elements dans une tableau ou aussi dans une chaine de caracteres. Comme on peux bien s'en douter, php nous a crée une methode pour les deux cas de figure! 
/*
echo "ma chaine comporte ".strlen($myString)." "."caracteres <br/>";
echo "Mon tableau contient ".count($myArray)." "."elements <br/>";
*/
//3)array_push
// nous pouvons aussi rajouter des elements a un tableau existant. Ici je defini un tableau de noms.
$names=["Reuben","Johnny","Jeremy","Eli","Brett"];
// il y a deux facons de rajouter des elements a un tableau 
/*
 1) avec la methode de php array_push
 2) en precisant $names[]=valeur_a_rajouter
*/


/*
array_push($names,"Barack");
$names[]="Roman";
*/

// comme nous pouvons le contstater, ici les deux facons de rajouter des elements a nos tableaux fonctionnent!

//var_dump($names);

//4) isset
/*
La fonction isset verifie si une variable exists et est different de null. Ainsi si nous avons une chaine de caractere qui est vide elle sera "reconnu" et donc isset va nous renvoyer true
*/

$emptyStr="";
// va nous renvoyer true (vrai)
//var_dump(isset($emptyStr));
// va nous renvoyer false (faux) La variable $nonExistentVal n'existe pas donc logiquement elle ne sera pas reconnu!
//var_dump(isset($nonExistentVal));

//5) empty
/*
    La fonction empty en php va determiner si un tableau est vide ou si une chaine de caractere est vide. Par example ici si je defini une chaine de caracteres vide, empty va nous renvoyer true. La meme logique s'applique pour un tableau qui est vide
*/

$emptyStr="";
$filledStr="hello";
// va nous renvoyer true (vrai)
//var_dump(empty($emptyStr));
// va nous envoyer false car la valeur filledStr n'est pas vide nous avons defini une chaine avec des caracteres defini
//var_dump(empty($filledStr))



// Comme on s'en doute bien, il serai impossible de vous montrer toutes les methodes contenu dans la documentation php dans ce fichier. Il faut savoir que une grande partie du boulot d'un programmeur consiste a aller dans la documentation et de chercher la methode que il lui faut selon son cas de figure!
//

// finalement, on a aussi une methode predefini qui s'apelle var_dump, le var_dump est note meillieur ami pour le debougage!

// exemple 

$presidents=["Emmanuel","Francois","Giscard","Nicolas","Barack","Donald"];
/*
var_dump($presidents);
*/

/*
$string="MyString";
echo "<br/>";
var_dump($string);
*/


/*
$bool=false;
echo "<br/>";
var_dump($bool);
*/








?>