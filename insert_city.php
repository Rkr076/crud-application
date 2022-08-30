<?php

$conn = mysqli_connect('localhost', 'root', '', 'country');
$nameid = $_POST['svalue'];
$sql = "SELECT * FROM `city` WHERE sid = '$nameid' ";
$res=mysqli_query($conn, $sql);
while ($fet=mysqli_fetch_assoc($res))
 {
 	?>
     <option><?php echo $fet['city']; ?></option> 
	<?php

}

?>