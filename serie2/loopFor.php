<?php
// une boucle (loop en anglais) est une facon de repeter des instructions plusiers fois. 

// une boucle a trois parties principales 
 //1) Initialisation  
 //2) Condition de sortie 
 //3) Condition d'incrementation
/*

for($i=0;$i<10;$i++){
    echo $i."<br/>";
}
*/

// En tant que developpeurs on va rarement afficher 0 a 9, cela n'a pas grand interet mais c'est important de comprendre comment une boucle fonctionne pour ensuite faire des choses plus interessantes. Par exemple, que se passerai t'il si je voulais afficher le nom de tous mes etudiants dans ma classe? 

$students=["Christophe","Mamed","Chanel","William","Cecile","Thea","Sophie","Henri","Maxime","Pierre","Mehdi"];

for($i=0;$i<count($students);$i++){
    //echo $students[$i]."<br/>";
}


//----------------------------------------------------------------------------------------------------------------------------------


// Plus souvent en php, quand on va boucler sur un tableau, on prendra la format suivant 



foreach($students as $index=>$student){
     // echo "L'index"." ".$index." "."correspond a la valeur"." ".$student."<br/>";
    // si on a pas besoin de l'index 
}


// sans l'index du tableau 

foreach($students as $student){
    //echo $student."<br/>";
}


//-------------------------------------------------------------------------------------------------------------------------------------------

// comme on a deja vu,en php on a aussi des tableau associatifs, au lieu d'avoir une indexation numerique, ils ont une indexation par le nom d'une clé. Comment on boucle sur de tels tableaux? 

$studentsAssoc=["name"=>"Pierre","age"=>25,"score"=>14];

foreach($studentsAssoc as $index=>$student){
    //echo "On est sur l'index"." ".$index." "."qui correspond a la valeur ".$studentsAssoc[$index]."<br/>";

}

//  comment faire pour un tableau de tableaux associatifs? (cette strategie ne fonctionne seulment lors que les clés des tableaux associatifs comportent tous le meme nom mais c'est souvent le cas!)

$studentsMulti=[["name"=>"Pierre","age"=>25,"score"=>14],["name"=>"Timothée","age"=>22,"score"=>16],["name"=>"Elodie","age"=>21,"score"=>15]];

foreach($studentsMulti as $student){
   // echo "L'etudiant s'apelle"." ".$student["name"]." "."il/elle a ".$student["age"]." "."ans et a une moyenne de ".$student["score"]."<br/>";
}

// finalement, nous allons aussi parfois devoir boudler sur un tableau de tableau. Cette a dire que nos tableaux associatifs peuvent eux meme contenir des tableaux sur lesquells nous allons pouvoir boucler!  On appele ca une boucle imbriqué!

$sports=[["name"=>"Tennis","players"=>["Rafael","Novak","Pete"]],["name"=>"golf","players"=>["Tiger","Phil","Happy"]],["sport"=>"basketball","players"=>["Kobe","Lebron","Micheal"]]];

// ici en premier lieu je boucle sur mon tableau de $sports 
foreach($sports as $sport){
    // et ici j'acceder a ma liste de jouers pour chaque sport 
    $players=$sport["players"];
    // ici vue que mon index players contient un tableau, je vais devoir boucler sur ce tableau!
    foreach($players as $player){
       // echo $player."<br/>";
    }
}
// Encore une fois ici on voit que chaque index de notre tableau est lui aussi un tableau, meme si ici nous avons que des tableau numerique
$arrayMult=[["first","second","third"],["first","second","third"],["first","second","third"]];

foreach($arrayMult as $val){
    // on verra que ici aussi c'est un tableau!
    //var_dump($val);
}





  



?>
