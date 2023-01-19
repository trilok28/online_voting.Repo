<?php
   $a=65;
   $b=9;
 /*
   if($a>$b)
   {
       echo "a is greater than b";
   }
   else
   {
       echo "a is not greater ";
   }
   */

   $age=12;
   if($age>60)
    {
        echo"you will be retired"."<br>";
    }
    elseif($age<60){
        echo"you are not retired"."<br>";
    }
    else{
        echo"i don't know anything"."<br>";
    }

    switch($age){
        case 12:  
            echo"you are 12 year old";
            break;
        case 25: 
            echo"you are 25 year old";
            break;
        case 50: 
            echo"you are 50 year old";
            break;
        default: 
        echo"your age is wiered";
        break;
    }
?>