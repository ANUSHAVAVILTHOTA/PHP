<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
  

  $x=10;


  $y=$x;
  echo $y;

  echo "<br />";

  //   +=

  $x=20;  //20
  $x+=30;  //x=x+30   x=20+30 ==50

  echo $x;

  echo "<br />";

  $x=50;  //50
  $x-=20;  //x=x=20   x=50-20  ==30

  echo $x;
  echo "<br />";


   $x=5;
   $x=$x*25;  //x*=25    //x=5*25  =125

   echo $x;
   echo "<br />";  

   $x=50;
   $x=$x/10;  //Quotient  //x=50/10  ==5

   echo  $x;  
   echo "<br />"; 




    $x=100;
   $x=$x%15;  //Reminder   10    //$x%=15;
   echo  $x;  
   echo "<br />"; 




  // $x=$x+$y;   //first op  $x+=y;   $x=$x+$y

  // $z=$x+$y;   //different  $z=$x+$y

?>
</body>
</html>