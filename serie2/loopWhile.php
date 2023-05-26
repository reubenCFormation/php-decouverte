<?php
// contrairement a une boucle for, on va utiliser une boucle while quand on est dans une situation imprevisible. La plupart du temps, une boucle while sera utilisé quand le comportement d'un utilisateur est imprevisible ou plus largement dans chaque situation ou on ne connait pas en avance quand la condition de sortie de la boucle sera remplie (souvent des jeux!)

//example 

$number=0;
while($number<10){
    $number++;
    echo "On est dans la boucle while <br/>";
    echo $number."<br/>";
}
echo "FIN DE LA BOUCLE <br/>";
echo "Number a la fin de la boucle while"." ".$number;


?>