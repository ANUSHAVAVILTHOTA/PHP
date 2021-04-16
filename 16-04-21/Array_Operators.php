<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
//asso
// a b c ==keys
//red,blue,green ==values
$x=array("a"=>"Red","b"=>"Green","c"=>"Blue");
$y=array("u"=>"Yellow","v"=>"Orange","w"=>"Pink");
$z=array("a"=>"Red","b"=>"Green","c"=>"Blue");
print_r($x);

echo "<br />";

print_r($y);

echo "<br />";


print_r($x+$y);

echo "<br />";


// + we can combine one or more arrays
//==

echo var_dump($x==$y);  //bool(false)   //key/value pairs are different so output is false
echo "<br />";

echo var_dump($x===$y);  //bool(false)   //key/value and type   

// key and values are different so output is true
echo "<br />";

echo var_dump($x==$z); //bool(true)
echo "<br />";

echo var_dump($x!=$y); //bool(true)
echo "<br />";    //!=    <>
?>
</body>
</html>