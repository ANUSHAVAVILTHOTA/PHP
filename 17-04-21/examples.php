<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// $a=40
//  >=45 or not 
//if it is true =========================YES ITS TRUE
//false =======================YES ITS FALSE


$a=40;
if($a>=45){   //40>=45   false=========it will execute else block
	echo "YES ITS TRUE";
}
else{   //YES ITS FALSE
	echo "YES ITS FALSE";
}

echo "<br />";


$a=50;
if($a>=45){    //50>=45   //true =================it will execute if block
	echo "YES ITS TRUE";  //27 //27  //YES ITS TRUE
}
else{  
	echo "YES ITS FALSE";
}


// a=450
// b=678

//  we need check a>b 
//it it is true then print  a is greater than b

//false print b is greater than a

$a=450;
$b=678;  //b value is greater
if($a>$b){
	echo "a is greater than b";
}
else{
	echo "b is greater than a";
}

//a=345
//b=879
//c=389
//  a>b
// if it is true
// 	  a+c 
 //   a+20

// else
// 	 b+c
    //b+30

$a=345;
$b=879;
$c=389;

if($a>$b){   //345>879
	$a=$a+$c;
	$a=$a+20;

	echo $a;
}
else{  //879
	$b=$b+20;   //879+20 =899
	$b=$b+30;      //899+30=========929

	echo $b;
}

//x=347
//y=237
//print the biggest number

echo "<br />";
$x=347;
$y=237;

// 347  is big number
if($x>$y){
   echo $x; 
}
else{
	echo $y;
}

echo "<br />";
if($x<$y){
   echo $y; 
}
else{
	echo $x;
}

//x=23
//y=67
//z=89   //89
//print the biggest number

$x=23;
$y=123;
$z=789;

// y>x    y>z     ====y

// x>y    x>z    =======x

// z>x   z>y   ==========z

if($x>$y and $x>$z){
	echo $x;
}
elseif ($y>$x and $y>$z) {
	# code...

	echo $y;
}
elseif ($z>$x and $z>$y) {
	# code...

	echo $z;
}
else{
	echo "All are equal values";
}

//i will give input as years
//eg 1999,2000,2001,2020

//leap year or not

//$a=2020;


// year is century or not


//find the biggest of 4 numbers;

?>
<!-- 

Web Application=============using website you can see the deatils about app
cal,flipcart,
HTML,==JUST TO DISPLY the Content
CSS,===========style
BS=============responsive ness mobile,-------------etc
FORMS
JS
== validation==========we need correct info from the user
===game design


PHP==Server side scripting language
u have entered some data 
using php we can pass the data to server
we can get the data
we can store the data
we can pass the data to our emails

NAME:ANUSHA
LASTNAME:V
ID:R!4

MYSQL
 -->


</body>
</html>