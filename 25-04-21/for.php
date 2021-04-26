<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


 <?php 

// 1 to 10

//for loop

 // for(counter;condition;incre){
 // 	code;
 // }
// ini===1
 //condition  100 
 //+1

 //1
 //1+2===3
 //3+2===5
 //5+2====7
 // 35
 // 36
 // 37
 // 38
 // 39
 // ....45

 // 35
 // 35+3===38
 // 38+3===41
 // 41+3====44
 // 44+3====47  47<=45
// for($i=35;$i<=45;$i=$i+3){
//     echo $i;
//     echo "<br />";
// }

// 25,89
// 34,68
// ]1,10
// 1,100
// for($i=78;$i<=125;$i=$i+1){
//   echo $i;
//   echo "<br />";

  
// }
// for($i=2;$i<=12;$i=$i+2){
// 	echo $i;
// 	echo "<br />";
// }
// for($i=1;$i<=16;$i=$i+3){
// 	echo $i;
// 	echo "<br />";
// }
// $sum=0;
// // 1+2+3+4+5+6==21
// for($i=1;$i<=6;$i=$i+1){  //1+2+3+4+5+........50
//     $sum=$sum+$i;       
//     echo $sum;
// 	echo "<br />";

// 	// $sum=0+1  ==1   // 1st time
// 	// $sum=1+2===3        //2 nd time
//  //    $sum=3+3===6     //3rd
//  //    $sum=6+4 ===10   //4th
//  //    $sum == 10+5===15  //5th 
//  //    $sum=15+6===21   //6 th loop
// }

// 5 to 10  ==45
//5+6+7+8+9+10
//if we want to execute block of code for multiple times se can use for loops
 $sum=0;
for($i=1;$i<=100;$i=$i+1){   //5 6 7 8 9 10 
	$sum=$sum+$i;

	
	// 5...10===5+6+7+8+9+10==45
 //                          $sum=$sum+$i;
 //      1st time   =======> $sum=0+5==5
 //      2 nd time  =======> $sum=5+6=11
 //      3 rd time ========> $sum=11+7=18
 //      4 th time ========>$sum=18+8=26
 //      5 th time ========> $sum=26+9=35
 //      6 th time ======> $sum=35+10===45

	
}

echo $sum;
	echo "<br />";
    

?>
<!-- 
 1,4 ,7,10,13,16 i+3
  2 4 6 8 10 12   i+2
 78 to 125   i+1 

Sum 1====  50
-->


</body>
</html>