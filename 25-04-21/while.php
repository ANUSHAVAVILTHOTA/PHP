<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

for($i=1;$i<=10;$i=$i+1){
  echo $i;
  echo "<br />";
}

// for(init;cond;ince){
// 	code
// }

// init;
// while(cond){
// 	code;
// 	incre
// }

$i=1;
while($i<=10){
  echo $i;
  echo "<br />";
  $i=$i+1;

}

// 25 to 89
$i=25;
while($i<=89){
	echo $i;
	echo "<br />";
	$i=$i+1;
}

$sum=0;
for($i=1;$i<=100;$i=$i+1){ 
	$sum=$sum+$i;
}

echo $sum;
echo "<br />";
 
$sum=0; 
$i=1;   //41,42,43==========49,50,51,52,53
while($i<=100){
	$sum=$sum+$i;
	$i=$i+1;
}

echo $sum;
echo "<br />";

?>
</body>
</html>