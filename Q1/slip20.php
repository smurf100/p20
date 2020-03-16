<?php
$str=$_POST['txt1'];
 $ch1=$_POST['opt1'];
   
if($ch1=='o1')
{
     echo "all Uppercase letter ".strtoupper($str);
}
else if($ch1=='o2')
{
   
     echo ucwords($str);
}

?>
