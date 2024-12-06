<?php 
if(isset($_POST['submit']))
{
$units=($_POST['units']); 
if($units<=100)
{
$b=$units*4;
echo"Your Bill Amount is.$b";
}
else
{
if($units<=200)
{
$b=400+($units-100)*5; 
echo"Your Bill Amount is.$b";
}
else
{
$b=400+500+($units-200)*6; 
echo"Your Bill Amount is.$b";
}}}?>