<!DOCTYPE html>
<html>
<head>
	<title>Math Functions</title>
</head>
<body>


<?php

// pi is inbuit function in php  const value

//sytax var datatypes if else loops op 
    echo(pi());

    echo "<br/>";

    echo(min(29,23,20,5,50,35,47));   //small number

    echo "<br/>";
    echo(max(29,23,20,5,250,50,35,47,780));

    echo "<br/>";
    echo(abs(-8.7));  //convert all -ve numbers into +Ve numbers -x x =x  |x|

    echo "<br/>";

    echo(abs(-9.7));

    echo "<br/>";

    echo(abs(79.7));

    echo "<br/>";



     echo(sqrt(64));  //8
     
     echo "<br/>";  //break line

     echo(sqrt(9));  //3

     echo "<br/>";

    //SQRT 64 SQRT9  ADD
    $a=sqrt(9);
    $b=sqrt(64);
    $c=$a+$b;

    echo $c;


    echo "<br/>";
    echo sqrt(9)+sqrt(64);

     echo "<br/>";

     echo (round(2.60));  //3
     echo "<br/>";
     echo (round(4.45));  //4

      //first digit after dot (decimal point)  //6    //4

     //number>=5        6>=5                        // 4>=5 

     //  true        the number before dot+1   2+1 =3

     //  false       the number before dot      4


    echo "<br/>";
    echo(round(6.78));  //7

    //   7
    //  7>=5

    //true  6+1           ==7
    echo "<br/>";
    echo(round(86.78));  //87

    // 7
    //7>=5
    //true   86+1    ==87
 

   echo "<br/>";
    echo(round(86.48));    //86

    //4
    //4>=5
    //false  86

    echo "<br/>";
    echo(round(86.58));   //87
    //5
    //5>=5
    //true    86+1

    echo "<br/>";
    echo (rand());

    echo "<br/>";
    echo(rand(20,80)); //

    echo "<br/>";
    echo(rand(50,500));



?>
</body>
</html>