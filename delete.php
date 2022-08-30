<?php

  include('db.php');

   	$userid = $_POST['deleteid'];
	$sql ="DELETE FROM `ajaxinsert` WHERE id = '$userid' ";
	$query = mysqli_query($conn, $sql);
    if ($query)
     {
    	echo "data deleted ";
    }

    else
    {
      echo "data cant be deleted";
    }
    



?>