<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// While === continue   
//Before continue we need to use increment
  $x=0;
  while($x<10){  //5<10

  	if($x==4){ //4==4  //4==4 //4==4  5==4
  		$x=$x+1; //5
  		continue; 
  		
  	}
  	echo $x;
  	echo "<br />";
  	$x=$x+1;

  }
//0 1 2 3 5 6 7 8 9
?>
</body>
</html>