<?php declare(strict_types=1); //top of the line
//raise an error
//without strict type it will convert strings to integers automatically
function add1(int $a,int $b){

	echo $a+$b;

}


// add1(5,"40 Days");

//automatic convertion of string to int



//Error
// strict_types always on top of the file
//to avoid automatic type convertion

function xyz(int $a=67){   // $a=350   $a=67  $a=230   $a=578 $a=67

     echo $a;
     echo "<br />";
}



xyz(350);  //350
xyz();     // defalut==67
xyz(230);  //230
xyz(578);  //578
xyz();      //fefault ==67

// display content
// passing args
//multiple args
//calculations
//strict_types
//default value


?>
