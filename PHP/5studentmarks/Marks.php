<?php
$a=array(55,68,60,80,75);
$t=0;
foreach($a as $value)
{
echo"<br><br>Marks in subject.$value";
$t=$t+$value;
}
$p=$t*100/500; 
echo"<br><br>Total is:.$t"; 
echo"<br><br>Percentage is:.$p";
?>
