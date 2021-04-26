<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

//first it will run the block of code
//check the codition

//whie  first check the condition ==========then if it is true (execute the block of code)
//do while =====first it will execute the block of code=====then it will check the condition
// dowhile will execute at least once.
//


$y=6;

do{
	echo $y;    //6
	$y=$y+1;   //6+1==7

}while ($y<=5);   //7<=5  //condiiton failed


//while ==========first checking the condition===executing the code
//do while=====first execute the statements then ====check the condition
///checking the condition on the 2 nd time
$y=6;
while($y<=5){  //6<=5  failed 
	echo $y;  
	$y=$y+1;
	
}


// $x=1;
// do{
// 	echo $x;     //1   //2   //3  //4
// 	$x=$x+1;    //2    //3   //4   //5
// 	echo "<br />";


// }while ($x<=5);  //2<=5  3<=5  4<=5  6<=5//false

?>
</body>
</html>