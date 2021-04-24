<!DOCTYPE html>
<html>
<head>
	<title>Str</title>
</head>
<body>
<?php
$ch="BSc";  //Case sen
switch ($ch) {
	case "BCA":
	   echo "This is 3 years";
	   break;
	case "Bsc":
	   echo "This is 3 years";
	   break;
	case "B.Tech":
	   echo "This is 4 years";
	   break;
	case "ABC":
	   echo "Wrong Choice";
	   break;
	default:
	   echo "This course is not in the list";
	   

}
?>
</body>
</html>