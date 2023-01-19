<?php
// variable are case sensitive
$name="my name is trilok";           
$rollno=18207049;
echo "my name is $name <br>"; 
echo "my roll number is $rollno<br>";

// String FUNCTION
echo "the lenght of name is".strlen($name); echo"<br>"; // to find lenght of string and 'dot' is for join two string in a echo..
echo str_word_count($name); echo"<br>"; // to find number of words 
echo strrev($name);echo"<br>"; // to reverse a string 
echo strpos($name,"trilok"); echo"<br>";  // to find from which index word are start
echo str_replace("trilok","hemlata",$name);echo"<br>"; // to replace any word in string
echo str_repeat($name, 4);echo"<br>";  // to repeat any string 

// OPERATORS
   //arithmetic operator
$a=48;
$b=8;
echo $a+$b."<br>";  // addition
echo "for a + b, the result is :".($a+$b); echo "<br>"; 
echo "for a - b, the result is :".($a-$b); echo "<br>"; 
echo "for a / b, the result is :".($a/$b); echo "<br>"; 
echo "for a * b, the result is :".($a*$b); echo "<br>"; 
echo "for a % b, the result is :".($a%$b); echo "<br>";  // remainder after devision
echo "for a ** b, the result is :".($a**$b); echo "<br>";  // ** for a power b

  //assignment operator
$x=$a;
echo"for x the value is: " .$x ."<br>"; // to assign value of a into x
$a+=6;                           // increment operator
echo" after increment for a the value is: " .$a ."<br>"; // to increment the value of a with 6
$a-=6;                           // decrement operator
echo" after decrement for a the value is: " .$a ."<br>"; // to decrement the value of a with 6

  //comparison operator
$i=7;
$j=7;
$k=8;
echo"for i==j , the result is".var_dump($i==$j)."<br>";
echo"for i==k , the result is".var_dump($i==$k)."<br>";
echo"for i<k , the result is".var_dump($i<$k)."<br>";
echo"for i<>j, the result is ".var_dump($i<>$j)."<br>";
echo"for i<>k(i is not equal to k, the result is".var_dump($i<>$k)."<br><br>";
  
  // LOGICAL OPERATERS

$m=true;
$n=false;
echo " for m and n , the result is";
echo var_dump($m && $n);
echo"<br><br>";  

echo " for m and n , the result is";
echo var_dump($m || $n);
echo"<br><br>";  

echo " for m , not is , the result is";
echo var_dump(!$m);
echo"<br><br>";  



?>