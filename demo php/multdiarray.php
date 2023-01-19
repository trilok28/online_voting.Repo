<?php
echo"<pre>    <b> this is the multi dimensional  array  </b></pre><br>";
$multidim= array(
                  array(2,5,7,8),
                  array(1,3,2,4),
                  array(4,5,3,9)
                );
for($i=0; $i<count($multidim); $i++){
    for($j=0; $j<count($multidim[$i]); $j++){
       echo $multidim[$i][$j];
       echo" ";
    }
    echo"<br>";
}

?>           