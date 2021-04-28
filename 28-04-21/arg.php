<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function family($name,$year,$id){  
	//$name="purple"
	//year=1970
	//id=A1
    echo $name;
    echo "<br />";
    echo $year;
    echo "<br />";
    echo $id;
    echo "<br />";
}
//reusing the code
//
family("Purple","1970","A1");
// family("Blue","2012");
// family("Orange","1234");
// family("Red","2021");

function add($a,$b,$c){

	$sum=$a+$b+$c;
	echo $sum;
	echo "<br />";

}


add(45,123,79);
add(45,234,79);
add(146,78,234);
add(45,567,79);
add(45,7898,79);


//Notice
function add1(int $a,int $b){

	echo $a+$b;

}


add1(5,"40 Days"); 
//int or string it is  automatically converting into integer

?>
</body>
</html>