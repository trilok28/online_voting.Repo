<?php
echo"<pre>    <b> this is the function  </b></pre><br>";

function processMarks($marksArr){
    $sum=0;
    foreach ($marksArr as $value){
        $sum+=$value;
    }
    return $sum;
}
function avgMarks($marksArr){
    $sum=0;
    $i=1;
    foreach ($marksArr as $value){
        $sum+=$value;
        $i++;
    }
    return $sum/$i;
}

$rohanDas=['33', '44', '99', '85', '55', '66' ];
$Trilok=['99', '98', '97', '96', '95', '94'];
$sumMarks=processMarks($rohanDas);
$avg=avgMarks($rohanDas);

$sumMarksTrilok=processMarks($Trilok);
$avgTrilok=avgMarks($Trilok);
echo" the total marks of Rohan is $sumMarks out of 600 and total % is $avg<br>";
echo" the total marks of Trilok is $sumMarksTrilok out of 600 and total % is $avgTrilok<br>";
$today = date('l jS \of F Y h:i:s A');
echo $today;
$t=time();
echo $t;
?>