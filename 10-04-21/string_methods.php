<!DOCTYPE html>
<html>
<head>
	<title>String Methods</title>
</head>
<body>

<?php

		echo "HELLO";

		//Str len  ===to find the length of the string

		echo "<br >";

		echo strlen("Hello World!!!AB");  //1 ----length

		echo "<br >";

		$str="Hello World!!!AB";

		echo strlen($str);

		echo "<br >";


		$a="HELLO";
		echo strlen($a);

		echo "<br >";

        $b="ABCX ZLMN #";  //space

        //1=A 2=B 3=C 4=X
        //5=space 6=Z 7=L 8=M  9=N 10=space  11=#

        echo strlen($b);


        echo "<br >";
        //str_word_count  =====to count no of words in a sent

        echo str_word_count("HELLO WOrld  apple");

        echo "<br >";


        $x="apple fruit kiwi orange";
        echo str_word_count($x);  //4

        echo "<br >";

        $y="abc xyz $@# uipo qwrt";  //  ''
 
        echo str_word_count($y);  // word starts with $@ like special symbol  above function will ignores that

        //strrev

        echo "<br >";  //suppose i have an error then will show the next line number


        echo strrev("Hello world!!");  //

        echo "<br >";

        $r="coding abc";
        //cba gnidoc  -1 to 0  //string reverse =====we will get all the chars from last
        echo strrev($r);

        echo "<br >";


        $t="Hello World";   //0 then ---------------
        //   0=H   1=e  2=l 3=l 4=o 5=space 6=W  7=o 8=r 9=l   10=d

        $g="ABCXYZ";
        //0=A 1=B 2=C 3=X 4=Y 5=Z

       echo strpos("HELLO WORLD","WORLD");  //6
     

     // 0=H 1=E 2=L 3=L 4=O 5=space 6=W     //6

       //it will take the sec string   == WORLD
       //  it will search for that in First String

       echo "<br >";

      echo strpos("ABC XYZ LMN", "XYZ");

      //0=A  1=B 2=C 3=space 4=X  

      //XYZ is identified in the 4 th    //4


       echo "<br >";

      echo strpos("ABC AXYZ LMN", "XYZ");  

      // 0=A 1=B 2=C 3=space 4 =A  5==

      // so in 5th location string is identified

      echo "<br >";

     //strpos(string1,string2)
      //string2
      //and it will search in the first one
      echo strpos("ABC AXYZ LMN","LMN");  //index position

      // 0=A 1=B 2=C 3=space 4=A 5=X 6=Y 7-Z 8=space 9=L  //9th location

     
      echo "<br >";
     echo strpos("AYUSHI ANANYA" ,"ANANYA");  //7

     //0=A 1=Y 2=U 3=S 4=H 5=I  6=space 7=A   //ANANYA name is located at 7 th index position


//animations,alerts


// js mostly for animations and game design and form validation

      //email format is wrong
      //password must contain one capital letter /small letter /one number
      //mobile
      //alerts   
      //contact us today 
//all these for user friendlyness


//Hypertext preprocessor

//php   ==server side scripting language
//we can pass our info to server 
 // and we can store in database
 //and we can do anything with the data

echo "<br >";
//  which string we are going to replace, what is the new string, sentence
echo str_replace("holiday", "working day", "Today is holiday");
//Today is holiday
//Today is working day

// Today is Sunday  
///Today is monday
//str_replace

echo "<br >";
//we can replace words/sent  with new one
echo str_replace("Sunday", "monday!! HAVE A NICE DAY!!!","Today is Sunday");




//String Methods /String Functions


?>
</body>
</html>