<!DOCTYPE html>
<html>
<head>
	<title>array</title>
</head>
<body>

<?php
//Indexed
//ass
//multi dim
$apple=array("A","B","C","D"); //4  

print_r($apple);

// traversing  indexed array
//count()== no of elements in the array
//0  =4   
echo "<br />";
for($x=0;$x<count($apple);$x++){   //4<4  ==exit out of the loop
     echo $apple[$x]; //apple[0]=A apple[1]=B  apple[2]=C apple[3]=D
     echo "<br />";
}

//key value   //asso arrays  0 1 2 3 4 5 
//    Matrix====  2D
$age=array("A"=>"45","B"=>"89","C"=>"67","D"=>"34");

foreach ($age as $x =>$y) { // x=A X=B X=C 4=B
	                         //x=A y=45
	                        //X=B y=89
	                       //X=C y=67
	                       //X=D y=34
	# code...
	 echo $x." ".$y ; 
	 echo "<br />";

}

//multi dim

$abc=array(

//3*3  3 
	// 2*2 
   array("AFH","GERN","SFJ"),//row 0   //hor==row  ver==column
   array("DFVS","SD","sdd"),//row1
   array("SDdc","Ddf","sdds")//row2
   array("SDdc","Ddf","sdds")//row3
        //col0   col1  col2

);
// arrayname[row][column]
echo $abc[0][0];
echo "<br />";
echo $abc[0][1];  //GERN

echo "<br />";
echo $abc[0][2];   //SFJ

echo "<br />";
echo $abc[1][0];  //DFVS

echo "<br />";
echo $abc[1][2];  ////sdd

echo "<br />";
echo $abc[1][1];  //SD


echo "<br />";
echo $abc[2][1];  //Ddf

?>
</body>
</html>