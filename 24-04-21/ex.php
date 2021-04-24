<!DOCTYPE html>
<html>
<head>
	<title>Example</title>
</head>
<body>
<?php

$num=20;

switch ($num) {
	case 10:
	    echo "num is 10";
	    break;
	case 20:
	    echo "number is 20";   //true  ===all the remaining cases will be executed
	    break;
	case 30:
	    echo "number is 30";
	    break;
	case 40:
	    echo "number is 40";
	    break;
}

// number 456

// 45  "number is 45" ,  
//67  "number is 67", 
//89 ""number is 89",
// 456 "number is 456", 
//76 "number is 76" 
//" number is not matched"


// i want only one output
//not more than one
$a=456;
switch (456) {
	 case 45:  //true  ==and we are not using break means it will execute remaining all cases blocks
	 	echo "number is 45";
	 	break;
	 case 67:
	    echo "number is 67";
	    break;
	 case 89:
	    echo "number is 89";
	    break;
	 case 456:  //true
	    echo "number is 456";
	    // break;
	 case 76:
	    echo "number is 76";
	    break;  //stop switch
	 default:
	    echo "number is not matched";

}

?>
</body>
</html>