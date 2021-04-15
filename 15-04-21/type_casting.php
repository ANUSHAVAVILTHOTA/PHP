<!DOCTYPE html>
<html>
<head>
	<title>Type Casting</title>
</head>
<body>

<?php

//int==========float            (float)
//float =============int        (int)

// $x=145.879;   //float value decimal value 

// $y= (int)$x;  //converting float value to int  value

// echo $y;


// echo "<br />";
// $l=1234.576;

// $y= (int)$l;  //converting float value to int  value

// echo $y;
// echo "<br />";


// $t=1234;  //int -float

// $m= (float) $t;  //int --------------float

// echo $m;
// echo "<br />";
// //to verify we can use vardump
// // datatype(value)
// //data ype (value)   //float(1234) ===converted
// echo var_dump($m);

$x=123;   //int
$y=145.987;  //float

//  int===float
//float ===int


$r=(int)$y;  //y = float  into int value

echo $r;
echo "<br />";
echo var_dump($r);
echo "<br />";

$u=(float)$x;  //     (datatype)(varibale name)

echo var_dump($u);  //float


$b=167.897; //float  datatype

//float ===========int datatype   $res

$res=(int)$b;  
echo var_dump($res);


$t=(float)$b;

//just  by using datatype before the variable name 

?>
</body>
</html>