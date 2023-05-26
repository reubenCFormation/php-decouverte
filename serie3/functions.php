<?php
// 1) Definition d'une fonction 
//----------------------------------------------------------------------------------------------------------------------
/*
 1) Souvent en programmation ,on va vouloir repeter a plusiers endroits le meme traitement. Il serai repetitif de devoir a chaque endroit, re-ecrire les memes lignes, c'est pour cela que nous avons inventé les fonctions! Une fonction est un bloc re-utilisable de code et on pourra y faire appel la ou l'on souhaite
 2) Une fonction se defini avec le mot clé function, le nom de la fonction, nos parenthese, une accolade d'ouverture et une accolade de fermeture. Ceci est lors que nous de
 3) nous pouvons donner le nom de la fonction que nous souhaitons (comme avec des variables). Il est toutefois reccomandé de donner un nom coherent a notre fonction
 4) Pour executer une fonction nous devons y faire appel en donnant le nom de la fonction suivi par des parantheses
*/
  // remarquer que il n'y a rien qui se passe ici, pourtant on a bien un echo, allors pourquoi rien ne s'affiche? En effet, c'est tout a fait normal!, ici on n'a que defini la fonction mais on n'y a pas fait appel!
  function myFirstFunction(){
     echo "This is my first function in php!";
  }
 // pour faire appel a la fonction on va tout simplement ecrire le nom de la foncton et rajouter des parentheses! Ainsi la fonction se declenchera!
 /*
  myFirstFunction();
  */
 // Ici on defini la fonction
  function mySecondFunction(){
    for($i=0;$i<10;$i++){
        echo $i."<br/>";
    }
  }

  // ici on y fait appel!
  /*
    mySecondFunction();
  */

  //2) Valeurs de retour (utilisation du mot clé return)
  //------------------------------------------------------------------------------------------------------------------------------------------
    // Tout d'abord, observons ce qui se passe lors que nous voulons acceder a une variable dans une fonction en dehors de celle ci

    function storesLocalVar(){
      echo "une erreur va se declencher";
      $localVar="ceci est une variable locale";
    }
    // Ici on voit bien que cette variable n'est pas defini. En effet, lors sque nous essayons d'acceder a une variable qui est defini dans une fonction en DEHORS de la fonction, nous allons avoir une erreur!
    /*
    var_dump($localVar);
    */


       // En effet pour pouvoir stocker une variable qui serai créer dans une fonction, nous allons besoin de faire un return dans la fonction et ensuite faire appel a la fonction et stocker le resultat dans une variable!
       function returnsValue(){
         echo "<h2> Cette fonction va creer une variable qui stocke une valuer qui pourra etre re-utilisable en dehors de la fonction grace au mot clé return! </h2>";
         $array=["value1","value2","value3","value4"];
         return $array;
       }
       /*
       $getValue=returnsValue();
       var_dump($getValue);
       */

       // Nous avons pas besoin de mettre un return dans une fonction mais si nous mettions pas de return,nous n'allons pas pouvoir stocker une valeur en dehors de celle ci! Ainsi chaque fois que nous voulons acceder a une variable defini dans une fonction en dehors de celle ci, nous allons avoir besoin de mettre le mot clé return!

       function returnsNothing(){
        echo "cette fonction pourra s'executer mais elle ne vas pas pouvoir nous retrouner une valeur car elle ne contien pas de mot clé return!<br/>";
       }
       /*
       $getNull=returnsNothing();
       var_dump($getNull);
       */
       

    // 3) Aller plus loin avec le return 
    //--------------------------------------------------------------------------------------------------------------------------------------------

       // notons que tous ce qui suit apres un return dans une fonction ne sera pas executé! Du moment que nous avons un return, on sort directement de la fonction! 
       function testExecuteAfterReturn(){
         $value1="Je vais directer retourner une valuer";
         echo $value1;
         return $value1;
         $value2="je vais creer une autre valuer mais celle si ne sera pas pris en compte car j'ai deja fait un return";
         echo $value2;
       }
       /*
        testExecuteAfterReturn();
        */
        

        // Comme on peux le voir, du moment que une fonction retourne une valuer, nous sortons directement de la fonction! C'est comme si la fonction se termine la! On peux se demander pourqoui? Ca peux paraitre contre intuitif mais c'est tout a fait logique! Decortiquons pourquoi
        /*
            1) Une variable ne peux que stocker une valeur (que ca soit un boolean, une chaine de caractere, un tableau etc)
            2) Du moment que la fonction retourne une valuer, c'est CETTE valeur qui sera eventuellement stocké 
            3) Si on continue a executer la fonction apres un return, que se passe t'il si on fait un 2eme return? Lequel chosir? Le 2eme parce ce que c'est le plus recent? Dans ce cas, pourquoi avoir creer un premeir return?? C'est pour cela que du moment que il y a un return dans une fonction on sort de la fonction!
        */

    //4) Les parametres
    //-----------------------------------------------------------------------------------------------------------------------------
    //Bon a savoir sur les parametres
      /*
        1) Un parametre c'est une donnée d'entrée dynamique dans une fonction. Nous allons pouvoir nous servrr de cette donnée d'entrée pour nous adapter a des cas de figure different!  A noter que nous pouvons appelez nos parametres comme nous le souhaitons (toto, tata etc.) Mais encore une fois c'est bien de donner une valeur coherente!

        2) Lors que une fonction prend un parametre, nous sommes en train de dire a la fonction que lors que nous allons faire appel nous allons devoir lui PRECISER a quoi correspond notre parametre. Ca s'appelle un ARGUMENT.

        3) Nous pouvons passer comme argument un tableau, une chaine de caracteres, un boolean etc. Pas de restrictions par rapport a la valeur que nos parametres prendront lors que nous les passons en argument!


      */
   

      // exemple: je veux souhaiter le bienvenue a quel que un. Mais evidement nous avons tous des noms differents! Nous avons un parametre dynamique $name. Lors que nous allons faire appel a la fonction greet nous allons preciser a quoi correspondera le parametre $name, nous allons passer le parametre $name EN ARGUMENT
      function greet($name){
        echo "bonjour ".$name."<br/>";
      }
      // Ici je fais appel a la fonction greet deux fois en passant les arguments "Reuben" puis "Toto".

      /*
      greet("Reuben");
      greet("Toto");
      */
      

      // Que se passe t'il si je defini un parametre dans une fonction mais que je ne l'utilise pas lors de mon appel a la fonction? 
      
      function unusedParam($param){
        echo "Que se passe t'il si je defini un parametre mais que je m'en sers pas?";
      }
      // logique! nous avons une erreur PHP n'est pas permissive comme le javascript!
      /*
      unusedParam();
      */

      //Nous allons avoir des cas de figure ou nous allons vouloir un parametre mais nous allons pas toujours nous en servir! Dans ce cas, nous allons pouvoir definir une valeur par defaut pour ce parametre! Dans ce cas la, ca sera null 
      
      function exampleDefaultParam($param=null){
        if($param){
            echo $param." "."A etait passé en argument <br/>";
        }
        else{
            echo "Pas d'erreur ici meme si le parametre n'a pas etait transmis car le parametre est mis a null par defaut <br/>";
        }
        
      }
      /*
      exampleDefaultParam();
      exampleDefaultParam("My Argument");
      */

      // comme evoqué plus haut, nous pouvons passer en argument une autre type de valeur, pas seuiment une chaine de caracteres, ici j'ecris une fonction qui prendra un parametre qui s'apelle $arr et qui va correspond a un tableau lors que je fait appel a la fonction et que je lui passe en argument!

      function getArr($arr){
        echo count($arr);
      }

      // ici je fait appel a la fonction getArr et je passe en argument la valeur qui va correspondre a $arr 
      /*
      getArr(["first","second","third","fourth"]);
      */

      // enfin, rien ne nous empeche de definir plusiers parametres dans une fonction! Nous avons juste besoin de separer chaque parametre par une virgule!
       function sayHelloSeveral($name1,$name2){
        echo "hello"." ".$name1." "."et"." ".$name2;
       }
       /*
       sayHelloSeveral("Jeremy","Johnny");
       */


     //5) Aller plus loin avec les parametres par default
     //---------------------------------------------------------------------------------------------------------------------------------

       // nous venons de voir que on peux passer un parametre par defaut et le mettre a null, mais c'est pas tout,nous pouvons typé nos parametres pour faire en sorte que la valeur passé en argument viendra du meme type;

       function paramIsTypeString(string $param){
        var_dump($param);
         echo "Le parametre doit etre une/un"." ".gettype($param)." "."Si ce n'est pas le cas, une erreur va se declencher";
       }
       // Ici lors que l'on fait appel, pas d'erreur, PHP a pu en interne convertir l'entier 20 en chaine de caracteres par lui meme!
       /*
       paramIsTypeString(20);
       */

       // cependant si on essaye de passer un tableau, on verra du rouge tout de suite avec une belle erreur dans notre terminale!
       /*
       paramIsTypeString(["value1","value2","value3"]);
       */
       

       function paramIsTypeArray(array $param){
         var_dump($param);
         echo "Le parametre doit etre une/un"." ".gettype($param)." "."Si ce n'est pas le cas,un erreur va se declencehr";
       }
       /*

       paramIsTypeArray(["value1","value2","value3"]);
       */
       /*
       paramIsTypeArray("a string is being passed");
       */

       
    
       



?>