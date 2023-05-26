<?php 
// une methode predfini est une methode que php nous a deja ecrit! PHP a actuellement envrion 1000 methodes predefini! On peux les retrouver dans la documentation de php!

// par exemple, je veux connaitre le type d'une variable

$myString="My String";

/*
echo "La variable myString est un/une ".gettype($myString)."<br/>";
*/


$myArray=["Jeremy","Johnny","Steve","Eli","Roger"];

/*
echo "La variable myArray est un/une ".gettype($myArray)."<br/>";
*/





// souvent on veux connaitre le nombre d'elements dans une tableau ou aussi dans une chaine de caracteres. Comme on peux bien s'en douter, php nous a crée une methode pour les deux cas de figure! 
/*
echo "ma chaine comporte ".strlen($myString)." "."caracteres <br/>";
echo "Mon tableau contient ".count($myArray)." "."elements <br/>";
*/

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

var_dump($names);





// Comme on s'en doute bien, il serai impossible de vous montrer toutes les methodes contenu dans la documentation php dans ce fichier. Il faut savoir que une grande partie du boulot d'un programmeur consiste a aller dans la documentation et de chercher la methode que il lui faut selon son cas de figure!


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