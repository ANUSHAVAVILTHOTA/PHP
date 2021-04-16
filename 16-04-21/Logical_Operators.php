<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

// return true when both variables are true
//otherwise ========false

$x=true;
$y=true;
$z=false;

echo var_dump($x && $y);  //bool(true)  //true&&true

echo "<br />";

//or 
//any one is true either x / either y is true  ================output is true


echo var_dump($x || $z);   //bool(true)   true||false  =======true

echo "<br />";

//  &&  and  ==================both are same

//  || or      ==================both are same


echo var_dump($x and $y);  //bool(true)  //true&&true

echo "<br />";

//or 
//any one is true either x / either y is true  ================output is true


echo var_dump($x or $z);   //bool(true)   true||false  =======true

echo "<br />";

//true======================false
//false==================true
echo var_dump(!$x);  //bool(false)
echo "<br />";

echo var_dump(!$z);  //bool(true)

?>
</body>
</html>