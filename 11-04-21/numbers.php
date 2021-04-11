<!DOCTYPE html>
<html>
<head>
	<title>NUMBERS</title>

</head>
<body>

<?php
   

   // is_int()   --to check int  or not

   //is_float()   ---to check float or not
   //range of integer
//b/n this range the values will come under integer
   //   32 bit   -2147483648    to  2147483647   //interger 
    //  64 bit    -99223372036854775808     to 9223372036854775807  //inter


//  an integer must conatin one digit
// 3
//45
//678
//8475

//should not contain decimal point (we should not have dot)

//it can +ve or -ve
//456
//-456
//7367
//-7367
//methods
$x=5843;

$y=5843.98;
//is_int     === int or not
//true false

//  true       ============  bool(true)
// false     ==============   bool(false)

echo var_dump(is_int($x));  //bool(true)

echo "<br>";

echo var_dump(is_int($y));  //bool(false)

$l=7659.456;
$m=89765;  //int  true

echo "<br>";


echo var_dump(is_int($l)); //  bool(false)
echo "<br>";

echo var_dump(is_int($m));//  bool(true)


echo "<br>";


echo var_dump(is_float($l));  //true     bool(true)
echo "<br>";

echo var_dump(is_float($m));  //false     bool(false)

// bool(true)
// bool(true)
// bool(true)
// bool(false)

$r=7895;
echo  var_dump(is_numeric($r));  //bool(true)

echo "<br>";

$r="7895";
echo  var_dump(is_numeric($r));   //bool(true)
echo "<br>";

$r="78.96"+200;
echo  var_dump(is_numeric($r));   //bool(true)
echo "<br>";


$r="apple";  //string ==========false
echo  var_dump(is_numeric($r));   //bool(false)
echo "<br>";



$r=4389;
echo  var_dump(is_numeric($r));  //bool(true)

echo "<br>";

$r="789584";
echo  var_dump(is_numeric($r));   //bool(true)
echo "<br>";

$r="78.9685";
echo  var_dump(is_numeric($r));   //bool(true)
echo "<br>";


$r="kiwi";  //string ==========false
echo  var_dump(is_numeric($r));   //bool(false)
echo "<br>";



$x=1.e9411;
//finite //infinite
echo var_dump($x);  //float(INF)

echo "<br>";


$y= cos(8);
echo var_dump($y);
echo "<br>";

$y= acos(8);
echo var_dump($y); //Not a Number 
//Invalid Calculations will return Nan Value
?>
</body>
</html>