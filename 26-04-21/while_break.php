<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
for($x=0;$x<10;$x=$x+1){

	if($x==4){    
		break;   
	}

     echo $x; 
     echo "<br />";
}



$x=0;
while($x<10){
	
	if($x==4){    
		break;   
	}

    echo $x; 
    echo "<br />";
    $x=$x+1;
}
?>
</body>
</html>