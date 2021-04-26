<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// it will print all values except the number in condition
for($x=0;$x<10;$x=$x+1){
	if($x==5){  //3  //5
		continue;
	}
	echo $x;
	echo "<br />";
}

//50  to 60  
// 55==continue 
//50 51 52 53 54 56 57 58 59 60
// for loop and continue
for($a=50;$a<=60;$a=$a+1){
	if($a==55){
		continue;
	}
	echo $a;
	echo "<br />";
}
?>
</body>
</html>