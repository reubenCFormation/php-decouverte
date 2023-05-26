<?php
// Que est une conditions
/*
 Imaginez le scenario suivant: 
 1) Je veux aller au restaurant mais il me faut un montant suffisant pour pouvoir y aller 
 2) Si j'ai plus de 100 euros, j'irai au resturant 
 3) Comment traduire cela en code? 

*/

$balance=120;

if($balance>100){
    //echo "j'irai au restaurant <br/>";
}



// 2 Enchainer plusiers conditions 
//------------------------------------------------------------------------------------------------------------------------------

   // J'enchaine plusiers if les uns apres les autres

   $number=100;

   if($number>=80){
      //echo "Le numero est superieur ou egal a 80 <br/>";
   }

   if($number>=90){
      //echo "Le numero est superieur ou egal a 90 <br/>";
   }

   if($number>100){
        //echo "Le numero est superier a 100 <br/>";
   }
   
   // je redefini la variable $number

   $number=120;
   // j'enchaine des if suivi par des else if 

   if($number>=80){
     //echo "Le numero est superieur ou egal a 80 <br/>";
   }

   else if($number>=90){
    //echo "le numero est superieru ou egal a 90 <br/>";
   }

   else{
    //echo "Aucun des cas remplis <br/>";
   }

   // Se rabattre avec un else 

   $myName="Reuben";
   /*
     1) noter ici le == (double egal)
     2) avec un == on est en train de se poser la question (est ce que la valeur affecté a $myName est egal a "Jeremy")? 
     3) avec un = (simple egal) on est en train de faire une affirmation, on declare qua la valeur affecté a $myName sera "Reuben"
   */
   if($myName=="Jeremy"){
   // echo "Tu t'appelles Jeremy <br/>";
   }

   else if($myName=="Johnny"){
    //echo "Tu t'appelles Johnny <br/>";
   }

   // ici vu que la valeur de $myName n'est affecté ni "Jeremy" ni "Johnny", on va tomber dans le cas par defaut qui est la condition else. On tombe dans cette condition quand tous nos if et else if ont échoué.

   else {
   // echo "Tu t'appelles ni Jeremy ni Johnny <br/>";
   }

   // finalement on peux directement enchainer un if et un else 

   $speaksChineese=false;

   if($speaksChineese==true){
      //echo "Je peux parler le chinois <br/>";
   }

   else{
      //echo "Je ne parle pas le chinois <br/>";
   }



   // 3 La difference entre le double et le triple egale

   //------------------------------------------------------------------------------------------------------------------------------

     // on a parler du double et du simple egale mais il existe aussi un tripe egal. Le triple egale et la forme la plus stricts d'egalité que l'on peux avoir 

    // exemple 
    $number=5;
    $numberStr="5";

    if($number==$numberStr){
      //echo "la condition de double egalité est rempli <br/>";
    }

    if($number===$numberStr){
      //echo "la condition de triple égalité est rempli <br/>";
    }

    //4 Utiliser des conditions sur des booleans
  //----------------------------------------------------------------------------------------------------

    $speaksEnglish=true;
    // il y a une facon plus condensé de pouvoir tester si une condition est vrai ou non lors que il s'agit s'un boolean. Nous pouvons ecrire une condition sans avoir besoin de faire un == comme ceci 
    // equivaut a ecrire if($speaksEnglish==true){}
    if($speaksEnglish){
      //echo "I speak perfect english <br/>";
    }

    else{
      //echo "I not speaks english <br/>";
    }

    // ainsi nous pouvons aussi appliquez la meme logique pour tester si une condition nous renvoie false ou pas 

    $speaksChineese=false;
    // equivaut a ecrire if($speaksChineese==false){}
    if(!$speaksChineese){
      //echo "Je ne parle pas chinois <br/>";
    }

    else{
      //echo "Je suis comme Mark Zuckerberg! <br/>";
    }

    // plus globablement, lors que une variable est egale a null,undefined, une chaine de caracteres vide ou false, nous allons pouvoir utiliser le ! 
    $emptyStr="";

    if(!$emptyStr){
      //echo "La chaine de caracteres est vide! <br/>";
    }
    
    $nullVal=null;

    if(!$nullVal){
     // echo "La variable est nulllle!! <br/>";
    }

    // a l'inverse, lors que nous avons une variable qui n'est pas vide, est defini, etc. nous pouvons ecrire une condition de la maniere suivante 

    $definedStr="ceci est une chaine de caractere defini";

    if($definedStr){
      //echo "La chaine de caracterees est bien defini <br/>";
    }

   //5 Avoir plusiers conditions dans une meme condition les ET/OU 
   //--------------------------------------------------------------------------------------------------------------------------------
     // souvent on va vouloir tester si plusiers conditions sont rempli (dans ce cas on utilisera le symbole &&)

    $animals=["bear","dog","wolf","cat","lion","bird"];
    // Ici testons si notre tableaux d'animaux est superier ou egal a 5 et si il contient "dog" (ca sera l'oppurtunité de decouvrir la methode in_array!)

    if(count($animals)>5 && in_array("dog",$animals)){
      //echo "Le tableau contient des chiens et a plus de 5 animaux!! <br/>";
    }


    // on peux aussi tester si l'une des conditions sera rempli. Ici notre tableaux no contient pas des grizzlies mais il contient 6 elements 

    if(count($animals)>5 || in_array("dog",$animals)){
      //echo "Le tableau contient au moins l'une des conditions <br/>";
    }

    // 6) Les conditions imbriqués 
    //----------------------------------------------------------------------------------------------------
     // rien ne nous empeche d'imbriqué une condition dans une autre . 
     $name="Reuben Chouraki";
     /*
      exemple: 
      1) ici je vais savoir si j'ai une variable qui s'apelle $name et je vais verifier que elle existe et que elle n'est pas vide
      2) Je veux aussi tester que cette variable a plus de 10 caracteres. 
      3) pour tester c'est deux choses, je peux tout a fait ecrire une condition imbriqué!
     */
    // ici je teste que j'ai bien une variable $name qui n'est pas vide
     if($name){
        //echo "La variable name est bien defini <br/>";
      if(strlen($name)>10){
        //echo "non seulment la variable est bien defini mais elle comporte plus de 10 characteres!<br/>";
      }
     }

  


?>