<!DOCTYPE html>
<html>
<head>
	<title>Var Dump</title>


</head>
<body>
<?php

//  it will dump some info about one or more variables


//  "ABC"       string
//  12          int
//34.6          float
//true,false    boolean

//12   //int
//-12  //int
//56.7  //float

$b=378.1;
$c=true;
$a="ABCDE";

// true
// false

// $a=true;   //boolean
// $b=true;    //boolean

echo var_dump($b);  //datatype(value)    float(378.1)

echo "<br />";
echo var_dump($c);   //bool(true)


echo "<br />";
echo var_dump($a);  //string(3) "ABC"      datatype(len) "value"

$x=369.876;
$y=false;
$z="LMNOPTY";


//datatype(value)
//datatype(len) "value"

// float(369.876)
// bool(false)
// string(7) "LMNOPTY"

echo "<br />";
echo var_dump($x);   

// float(369.876)

echo "<br />";
echo var_dump($y);   

//bool(false)


echo "<br />";
echo var_dump($z);

echo "<br />";
//string(7) "LMNOPTY"


echo var_dump($x,$y,$z);




?>
</body>
</html>