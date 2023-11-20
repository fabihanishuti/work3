<?php
$name = $_POST["name"];
$email = $_POST["email"];

$msg = $_POST["msg"];

$connection=mysqli_connect("localhost" ,"root","","contact_information") or die ("connection failed");
$sql="INSERT INTO user_info(name,email,msg)VALUES('{$name}', '{$email}', '{$msg}')";

$result =mysqli_query($connection,$sql) or die ("query failed");


 //header("location: http://localhost/contact from/contact.php");
 mysqli_close($connection);
?>