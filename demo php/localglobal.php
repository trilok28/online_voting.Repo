<?php
    echo"<pre>    <b> this is the local global variable  </b></pre><br>";
    $a=98;
    $b=9;
    function printValue(){
        global $a, $b;
        $a=100;
        $b=1000;
        echo" the value of a is $a and b is $b <br>";
    }
printValue();
echo"$a <br> $b <br>";
var_dump($GLOBALS);
echo"<br>";
var_dump($GLOBALS["a"]);


?>