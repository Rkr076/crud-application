<?php
include('db.php');

$userid = $_POST['userid'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE `ajaxinsert` SET `username`='$username',`password`='$password' WHERE id='$userid' ";
$query = mysqli_query($conn, $sql);

if ($query) 
{
	echo "Data updated";
}

else
{
  echo "Data not updated";
}

?>