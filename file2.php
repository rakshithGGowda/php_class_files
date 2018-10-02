<?php
$con=mysqli_connect("localhost","root","","class1");
if(mysqli_connect_errno())
{
	echo"failes".mysqli_connect_error();
}
else
{
	echo "string";
}
?>