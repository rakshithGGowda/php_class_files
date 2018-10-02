<?php


 include 'file2.php';

 $query="SELECT * FROM `user`";
 $result= mysqli_query($con,$query);
 $data=array();
 while($row=mysqli_fetch_assoc($result)){
 	$data[]=$row;

 }

 echo json_encode($data);

 ?>