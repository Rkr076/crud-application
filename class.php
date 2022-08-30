<?php

$conn = mysqli_connect('localhost', 'root', '', 'graduation');
$nameid= $_POST['datapost'];

$qu="SELECT * FROM classes WHERE mid='$nameid' ";
$re=mysqli_query($conn, $qu);
while ($fe=mysqli_fetch_assoc($re))
 {
 	?>
     <option><?php echo $fe['class']; ?></option> 
	<?php

}

?>
