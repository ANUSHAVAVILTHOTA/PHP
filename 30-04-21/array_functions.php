<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$age=array("Asc"=>"45","Bjks"=>"89","Ckj"=>"67","Djk"=>"34");

//converting keys into uppercase  ==Capital letters
print_r(array_change_key_case($age,CASE_UPPER));
echo "<br />";

print_r(array_change_key_case($age,CASE_LOWER));
echo "<br />";


$apple=array("A","B","C","D");  //keys
$price=array("300","500","240","456");  //value
//it is generating asso array

//   2 args
// 1 st one=============it will consider as keys
// 2 nd array =========values
$c=array_combine($apple, $price);
print_r($c);


$a=array("ABC","LMN","ABC","LMN","B","XYZ","LMN");
print_r(array_count_values($a));   //count== 4

echo "<br />";

// it will print the elements which is not in xyz  
//reminds me
$age=array("RKL"=>"67","Asc"=>"45","Bjks"=>"89","Ckj"=>"67","Djk"=>"34");
$xyz=array("Asc"=>"45","Bjks"=>"89","Ckj"=>"67");

//
//3 4 5 
$results=array_diff($age, $xyz);
print_r($results);
echo "<br />";

$a1=array("red","abc","xyz");
$a2=array("lmn","opq","blue");

print_r(array_merge($a1,$a2));
echo "<br />";
$a=array("ynm","ghjb","yugy");  //removing the last one  element in the array
array_pop($a);
print_r($a);

$b=array("jhj","hh","uhui","juuju");  //adding more elements in the last
array_push($b,"abc","hjbhj");  //
print_r($b);


//end-start
$a1=array("ABC","XYZ");  //a1 with a2 a1,a2
$a2=array("Apple","Kiwi");

$a=array_replace($a1, $a2);   // 1 st arg array is replaced with 2 nd one
print_r($a);
echo "<br />";
print_r(array_reverse($a1));

echo "<br />";
$c=array(5,46,89);
echo array_sum($c);



?>
</body>
</html>