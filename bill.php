<?php


include 'file2.php';

$name = $_POST['name'];
$tax = $_POST['tax'];
$pay = $_POST['pay'];

$query= "INSERT INTO `bill`(`name`,`tax`,`pay`) VALUES('$name','$tax','$pay')";
$result = mysqli_query($con,$query);
if($result)
{
	echo "susscess";
}
else
{
	echo "0svf1vtring";
}
?>

