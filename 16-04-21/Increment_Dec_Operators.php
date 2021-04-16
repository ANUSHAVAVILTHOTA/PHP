<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

$x=10;

// echo ++$x;    //pre incre (symbol before the variable)  //10+1 ==11
// echo "<br />";  
// echo $x;  //11

// echo "<br />";

// // pre ==first it will increment the value then it will print
// //post ===first it will print then it will increment

// $x=10;
// echo $x++;  //post incre (symbol after variable)
// echo "<br />";  //10
// echo $x;        //11
// echo "<br />";


//$x=$x+1   

//++$x  // pre increment  
// first it will increment the value then it will display the value 
//$x++  // post increment

//  first it will display the value  then it will increment


$x=10;

echo ++$x;  //x=10+1  ==11

echo "<br />";

echo $x;  //11

echo "<br />";

$y=10;

echo $y++;  // print 10   then y=10+1=11

echo "<br />";

echo $y;  //11  

echo "<br />";
$x=10;
echo --$x;  //pre Decrement  x=x-1    10-1 =9 
echo "<br />";
echo $x;   //9

echo "<br />";
$x=10;
echo $x--;  //display the value 10
// then it will decrement x=10-1 =9
echo "<br />";
echo $x;   //9

?>
</body>
</html>