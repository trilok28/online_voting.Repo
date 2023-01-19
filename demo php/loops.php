<?php
echo"<pre>    <b> this is the do while loop  </b></pre><br>";

$i=0;
while($i<5){
    echo $i+1;
    echo".my name is trilok";
    echo"<br>";
    $i++;
}
echo"<pre>    <b> this is the for loop  </b></pre><br>";

for($j=0; $j<5; $j++){
    echo"this is number".$j."<br>";
}

echo"<pre>    <b> this is the do while loop  </b></pre><br>";

$k=0;
do{
    echo"this is do while loop".$k."<br>";
    $k++;

}while($k<5);

echo"<pre>    <b> this is the for each  loop  </b></pre><br>";


$arr=array("banana", "apple" , "harpic", "facewash", "deo", "perfume");
for($i=0; $i<count($arr); $i++)
{
    echo $arr[$i];
    echo"<br>";
}   
echo"<br><br>";
// BATTER WAY TO DO THIS THINGS--- for each loop
foreach($arr as $value){
    echo "$value <br>";
}

?>