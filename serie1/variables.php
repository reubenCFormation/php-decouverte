<?php 
 
//1)Declarer une variable 
  //-------------------------------------------------------------------------------------------------------------------------------------------
    // On declare une variable avec le symbole ($) (le nom de la variable) (la valeur que l'on souhaite affecter) 
    // example: $myFirstVariable="A simple String";
    /*
    $myFirstVariable="A simple string <br/>";
    echo $myFirstVariable;
    echo "<br/>";
    */
    
    
    
    
    
    
    
    
    

//2) Les Types de variables 
  //-----------------------------------------------------------------------------------------------------------------------------------
 /*
  On a different types de valeurs dans ce cours on va voir: 
  1) les chaines de caracteres 
  2) les entiers et flottants (valeurs numeriques )
  3) les booleans 
  4) les tableux

 */

 //-----------------------------------------------------------------------------------------------------------------------------------------------

 //1) Les chaines de caracters (delimeter par un guillmet d'ouverture et un guillmet de fermeture)
 /*
 $myName="Reuben";
 
 echo "<h3> mon nom au debut </h3> <br/>";
 echo $myName;
 */
 
 
 
 

 // je decide d'utiliser mon nom complet au lieu de mon premon donc je modifier la variable 
/*
 $myName="Reuben Chouraki";

 echo "<br/>";

 echo "<h3> Mon Nom modifié </h3> <br/>";


 echo $myName;
 */
 
 
 
 
 
 
 
 


 //-----------------------------------------------------------------------------------------------------------------------------------------------

 //2) Les valeurs numeriques 



 
 $number=10;
/*
 echo "<h3>la valeur de number au debut </h3> <br/>";
 echo $number;
 echo "<br/>";
 */
 
 
 
 
 

 // je decide de rajouter 5 a la valeur stocké dans number 
 /*
 $number+=5; //un raccourci pour $number=$number+5
 
 echo "<h3> la valeur de number apres une incremenation de 5  </h3><br/>";
 echo $number;
 echo '<br/>';
 */
 

 
 
 
 
 

 // Maintenant je veux decrementer la valeur de number 
 /*
 $number-=5; //un raccourci pour $number=$number-5
 

 echo "<h3> la valeur de number apres une decrementation de 5 </h3> <br/>";
 echo $number;
 
 
 
 
 
 
 
 


 // finalement, noter que pour incrementer ou decrementer par un, nous avons encore un raccourci (simplement number++ pour incrementer ou number-- pour decrementer) 

 //--------------------------------------------------------------------------------------------------------------------------------------------------

 // 3)Les booleans 
    // Un boolean est une valeur binaire (true pour vrai) (false pour faux) On verra l'impotance des booleans que on verra les conditions

  $true=true;
  /*
  echo "<h3> Une valeur qui est dite vrai s'affichera par le numero '1' </h3>  <br/>";
  echo $true;
  echo "<br/>";
  */
  $false=false;
  /*
  echo "<h3> Une valeur qui dite faux ne s'affichera pas </h3> <br/>";
  echo $false;
  */



  //---------------------------------------------------------------------------------------------------------------------------------------------------



?>
