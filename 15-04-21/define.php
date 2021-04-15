<?php
   // define("CAR", "ABC");  //define   variable   (variablename,value)

   // echo CAR;

   // define("X", "GOOD EVNG");  

   // echo X;

   // define("Y", "GOOD MRNG");

   // echo Y;


    // $CAR="ABC";

    // echo $CAR;

    // define("CAR", "ABC");

    // echo CAR;

    // $X="LMN";  //declare =assign value

    // echo $X;  //display


   // define("XYZ", "LMN",true);  //variable name=X

   // //case sen======true

   // //value is LMN  

   // // X  x both are different
   
   // //X x both are same   ===true

   // echo XYZ;

   // echo "<br />";

   // echo xyz;

   // echo "<br />";

   // echo xYZ;

   // echo "<br />";

   // echo XyZ;

   // echo "<br />";

   // echo XYz;

   // echo "<br />";

   // echo xYz;

   //php variables are case sen =========XYZ xyz


    echo "<br />";

   $C=7;

   echo $C;

   echo "<br />";


  define("C", 7,true);

// true ====  C and c are same

//false ====C  and c are different

//by def     ---always false

  echo C;  //without $ symbol

   echo "<br />";

  echo c;

  //php variables are case sen
  // C and c both are different

 echo "<br />";


define("xyz", ["abc","lmn","opq",7,89]);

echo xyz[0];


// $x=10;  //this can't be accessed inside the function
//but using define we can access
define("x", 10);
define("Y", 15); 
  //global scope we can access any ware
function myfun(){
	echo "<br />";
	echo xyz[0];
	 echo "<br />";
	echo Y;

	echo "<br />";
	echo x;
}
myfun();

//W3 schools
//Ex
//Quiz

//basic web applications without Backend


//M
//Web DEv ==  
//Mean  ===Angular,Node ,MONGODB    Mean stack

//Mobile  ==Applications  XML,JAVA

//WEb Dev  ==Java ,c++





?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


buit in functions
ECHO   echo  
PRINT


keywords

IF
ELSE
WHILE



case sen
$x
$X
$XYZ
</body>
</html>

