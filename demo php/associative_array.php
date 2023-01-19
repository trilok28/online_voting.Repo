<?php
echo"<pre>    <b> this is the associative array  </b></pre><br>";
// ASSOCIATIVE ARRAY
$favCol= array(
              'trilok' => 'white',
              'tarun' => 'blue',
              'sanju' => 'pink'  );
echo"the favrite color of trilok is:".$favCol['trilok']."<br>";


// VALUE PRINT BY LOOP
foreach ($favCol as $Key => $value){
    echo"the favourite color of $Key is $value<br>";
}
?>