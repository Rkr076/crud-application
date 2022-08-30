<?php
include('db.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO `ajaxinsert`( `username`, `password`) VALUES ('$username','$password')";
$query = mysqli_query($conn, $sql);
if ($query) 
{
	echo "Data inserted";
}

else
{
  echo "Data not inserted";
}


?>