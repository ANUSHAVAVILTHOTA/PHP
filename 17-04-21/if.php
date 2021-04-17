<!DOCTYPE html>
<html>
<head>
	<title>IF</title>
</head>
<body>

<?php
$a=20;


//  if  block will execute when the condition is true;

//else   //else block will execute when the condition is false
if($a==21)  // 20==21   false
{
	echo "NOW if block will execute";
	echo "<br />";
	echo "YES a value is 20";
	echo "<br />";
	echo "ABC";
	echo "<br />";

	$a=$a+30;
	echo $a;
	echo "<br />";
}
elseif ($a==25) {   //20==25 //false
	# code...
   echo "A value is 20 Not 25";
   $a=$a+20;
   echo "<br />";
   echo $a;
}
elseif ($a==20) {   //20==25 //false
	# code...
   echo "A value is 20";
   $a=$a+20;
   echo "<br />";
   echo $a;

   //stop
}
else   
{
   echo "A value is 20 Not 21";
   $a=$a+20;
   echo "<br />";
   echo $a;
}

$x=$a;
echo "EVNG";
//  many number of else if
?>

</body>
</html>