<?php

//1) Avec ce tableaux multidimensionelle,trouvez un moyen d'afficher la valeur ainsi que le type de chaque element de notre tableau associatif contenu dans notre tableau multidimensionelle

$multiArr=[["myString"=>"a string","myBool"=>false,"myInt"=>25],["myString"=>"another_string","myBool"=>true,"myInt"=>27],["myString"=>"last_string","myBool"=>true,"myInt"=>30]];

//2)  Trouvez un moyen d'afficher en une seul ligne l'addition de la longeur du 1er element et du dernier element du tableau $shortArr (encore une fois les elements sont des chaines de caracteres). Par exemple, il faudrai afficher "La somme du premier et dernier element est egale a.. "

$shortArr=["first","second","third","fourth","last"];

//3) repeter l'etape 3 mais cette fois ci, ajoutez 2 element au tableau crée et il faut utiliser une valeur dynamique pour afficher le dernier element du tableau (par exemple si le tableau comporte 7 elements, pour le dernier element, il ne faut pas ecrire $monTableau[6]).HINT: pensez a une fonction predefini que affiche le nombre d'elements trouvé dans un tableau




// BONUS
//4) Trouver un moyen de generer aleatoirement un numero entre 0 et l'indexation correspondant au dernier element du tableau $numbers. Repeter 3 fois et afficher en une seul ligne: "le resultat des trois elements aleatoire de mon tableau est ..."


$numbers=[20,40,60,80,100];

?>
