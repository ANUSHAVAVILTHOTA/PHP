<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$x="purple";
$y="red";

switch ($x) {   //orange
	case "blue":   
				        switch ($y) {  //red
				        	case "red":  //y value is red 
					        	   echo " x is blue and y is red";  //this will be executed
					        	   break;
				        	case "yellow":
				        	       echo "x is blue and y is yellow";
				        	
				        }
					    break;

	case "orange":  //this block will be executed  24===32
				         switch ($y) {  //yellow
				        	case "red":
				        	   echo " x is orange and y is red";
				        	   break;
				        	case "yellow":  //this block will be executed
				        	   echo "x is orange and y is yellow";//29
				        	
				        }
					    break;


	case "purple":
				         switch ($y) {  //red
				        	case "red":
				        	   echo " x is purple and y is red"; //
				        	   break;
				        	case "yellow":
				        	   echo "x is purple and y is yellow";
				        	
				        }
					    break;
}

?>
</body>
</html>