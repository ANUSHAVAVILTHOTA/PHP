<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

//  ==


$x=25;  //int
$y=35;  //int
$z="25"; //string


echo var_dump($x==$z);  //bool(true)   //25==25  //bool(true)

echo "<br />";

// ===
echo var_dump($x===$z);  //bool(false)  // int(25)===string(25)  false
echo "<br />";

// !=
echo var_dump($x!=$y);   //bool(true)  25!=35  it will gives output as true
echo "<br />";

// !==
echo var_dump($x!==$z);  //bool(true)   int(25)!==string(25)  true
echo "<br />";

echo var_dump($x<$y);  //bool(true)   25<35  //true
echo "<br />";

echo var_dump($x>$y);  //bool(false)  25>35   //false
echo "<br />";


echo var_dump($x<=$y);  //bool(true)   25<=35  //true
echo "<br />";

echo var_dump($x>=$y);  //bool(false)  25>=35   //false
echo "<br />";


?>
</body>
</html>