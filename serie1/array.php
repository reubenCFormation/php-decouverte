<?php

   //1) Les Tableaux simples (numeriques)
//-----------------------------------------------------------------------------------------------------------------------------------------------------

/*
1) Un tableau est une variable qui est capable de stocker plusiers valeurs differentes. 
2) Par exemple, si on veux avoir une liste d'etudiants, il serai fastideux de devoir a chaque fois ecrire une nouvelle variables pour chaque etudiant, c'est pour cela que la programmation a inventé des tableaux! 
*/

$students=["Pierre","Benoit","Christophe","Darius","Paul","Guillaume","Reuben","Mamed"];

// l'indexation d'un tableau commence par 0, ensuite le 1er element du tableau a l'index 0, le 2eme l'index 1 et ainsi de suite 

// $students[0] renverra Pierre; 
/*
 echo $students[0];
 echo "<br/>";
 */
 
 




// $students[2] renverra Christophe
/*
 echo $students[2];
 echo "<br/>";
 */
 
 



//$students[100] revnerra une erreur car l'index 100 n'existe pas!
/*
echo $students[100];
echo "<br/>";
*/





   //2) Les tableaux associatifs
//----------------------------------------------------------------------------------------------------------------------------------------------------

 /*
   Ce que l'on vient de voir sont des tableaux numeriques, mais en php, on n'a pas que des tableaux numeriques, on a aussi des tableaux associatifs! 
   // Un tableau associatif est une forme de clé valeur. Ainsi, au lieu d'avoir une indexation numerique on aura une indexation de clé! 
 */

$studentAssoc=["name"=>"Benoit","age"=>25,"score"=>17];
//$studentAssoc["name"] renverra Benoit 
//$studentAssoc["age"] renverra 25 
//$studentAssoc["score"] renverra 17
/*
echo $studentAssoc["name"];
echo "<br/>";
echo $studentAssoc["age"];
echo "<br/>";
echo $studentAssoc["score"];
echo "<br/>";
*/






//3) Les tableaux multidimensionelles 

//----------------------------------------------------------------------------------------------------------------------------------------------------

// finalement, on peux aussi avoir un tableau multi-dimensionelle (cette a dire un tableau dans un tableau) Souvent on aura un tableau numerique qui comportera plusiers tableaux associatifs mais ca sera pas forcement le cas
$studentsAssocMulti=[["name"=>"Benoit","age"=>25,"score"=>17],["name"=>"Pierre","age"=>22,"score"=>16],["name"=>"Toto","age"=>23,"score"=>17]];

// ainsi pour acceder au nom du 2eme etudiant dans notre tableau on fera ainsi! 
/*
echo $studentsAssocMulti[1]["name"];
echo "<br/>";
*/





// pour acceder a l'age: 

/*

echo $studentsAssocMulti[1]["age"];
echo "<br/>";
*/







?>