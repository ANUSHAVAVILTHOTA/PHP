<!DOCTYPE html>
<html>
<head>
	<title>Break</title>
</head>
<body>
<?php 

//break Keyword == we can stop running the loop (Exit from the loop)

//1 - 10
for($x=0;$x<10;$x=$x+1){

	if($x==4){    //4==4
		break;   //exit out of the loop
	}

     echo $x;  //0 1 2 3
     echo "<br />";
}
//< less than
// > greater than

//  25 == 45   //30===stop the loop using break  // 25,26,27,28,29
// for loop and break
for($y=25;$y<45;$y=$y+1){ 
    if($y==30){
    	break;
    }
    echo $y;
    echo "<br />";


}

// 2,4,6 ,8 10,12 ,14 ,16,18
// 2 to 16
// 12==break

// we can use 14
//16
for($a=2;$a<=16;$a=$a+2){
	//2,4,6 ,8 10,12 ,14 ,16,
	echo $a; //12
    echo "<br />";
	if($a==12){ //condition is true  12==12 break
		break;
	}
	// 2>12  =false  2
	// 4>12==false  4
	// 6>12 ==false 6 
	// 8>12  ==false 8
	// 10>12  ==false 10
	// 12>12 == flase 12 
	// 14>12 ==true break exit out of the loop

	// $a==14
	// $a>12

	// we can write echo first and then condition

}

//2,4,6,8,10,12
//in the condition ==12


 ?>
</body>
</html>