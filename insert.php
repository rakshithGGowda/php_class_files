<?php


$con=mysqli_connect("localhost","root","","class1");
if(mysqli_connect_errno())
{
	echo"failes".mysqli_connect_error();
}
else
{
	echo "connection is susscess";
}
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = password_hash($password,PASSWORD_BCRYPT);


$query= "INSERT INTO `user`(`name`,`email`,`password`) VALUES('$name','$email','$password')";
$result = mysqli_query($con,$query);
if($result)
{
	echo "parameter is send";
}
else
{
	echo "couldn't send the parameter";
}
?>

