<!DOCTYPE html>
<html>
<head>
	<title>For Each</title>
</head>
<body>

<?php
// $color=array("red","green","purple","yellow","blue");
// foreach ($color as $x) { //red //green //purple//yellow //blue   5 times
// 	echo $x;   //red   
// 	echo "<br />";
// }

// //  abc xyz 123 789 lmn 
// //
// $s=array("abc","xyz",123,789,"lmn");

// foreach ($s as $anusha) {  //abc xyz....
// 	echo $anusha;  //
// 	echo "<br />";
// }

// print_r($s);  //


// $abc=array("A","B","C","D","E");
// foreach ($abc as $h) {
// 	echo $h;
// 	echo "<br />";

// }
// array name   as  variable name
$xyz=array("X"=>"45","Y"=>"67","Z"=>"30");

foreach($xyz as $a=>$b){
	//arrayname as variable name(key)  => variable name(values)

	echo "$a => $b";
	echo "<br />";

}
//    A= abc   X=xyz    L=lmn  H=ijk
$d=array("A"=>"abc","X"=>"xyz","L"=>"lmn","H"=>"ijk");

foreach($d as $b=>$c){
	echo "$b => $c";
	echo "<br />";

}


?>
</body>
</html>