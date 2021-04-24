<!DOCTYPE html>
<html>
<head>
	<title>Switch Cases</title>
</head>
<body>
<?php 

//  Switch case is same like if-else if

$favcolor="orange";


switch($favcolor){  //purple
	case "red";  //red==purple    fail
	    //case 0
	    //case 'G'
	    //case "abc"
		echo "MY fav color is red";
		break;
    case "green":  //green==purple   fail
    	echo "My fav color is green";
    	break;
    case "purple":   //true
    	echo "My fav color is purple";
    	break;
    case "yellow":
        echo "My fav color is yellow";
    case "blue":
        echo "MY fav color is blue";
    default:  //default block============it will execute if all above cases are failed
       echo "MY FAV color is orange";

}
// Default is an optional 
//Default must me always last statement
//There is only one default(otherwise it will raise an error) and multiple cases........  
//in each case we can write break,it will terminate execution of next cases
//break is also optional
//if we are not using break means after finding one true case=========remaining all cases will be executed
//we can use numbers,strings,char in cases
// we have Nested switch cases
// : we can use ;


 ?>
</body>
</html>