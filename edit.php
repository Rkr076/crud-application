<?php
include('db.php');

$userid = $_POST['getid'];
$sql = "SELECT * FROM `ajaxinsert` WHERE id='$userid' ";
$query = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($query);
echo json_encode($row);

?>