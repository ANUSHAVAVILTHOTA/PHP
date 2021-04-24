<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$x=1;
$y=2;

switch ($x) {
    
    case 1:  //true  //1==1   16===24
		switch ($y) {  //2
			case 2:   //true  
			   echo "Choice is 2";  //execute
			   break;  //come out of inner switch that is Y
			case 3:
			   echo "Choice is 3";
			   break;
		}
		break;  //come out of main switch that is X
    case 3:  //1==3  false  //it wont execute this block
        switch ($y) {
			case 2:
			   echo "Choice is 22";
			   break;
			case 3:
			   echo "Choice is 33";
			   break;
		}
		break;

	
}

?>

</body>
</html>