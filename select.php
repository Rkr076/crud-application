<?php
include('db.php');

$sql = "SELECT * FROM `ajaxinsert` ";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) > 0) 
{
	while ($row=mysqli_fetch_assoc($query))
	 {
		?>
     <tr>
       <td><?php echo $row['id']; ?></td>
		    <td><?php echo $row['username']; ?></td>
		    <td><?php echo $row['password']; ?></td>
		    <td><button type="button" id="<?php echo $row['id']; ?>" onclick="getuservalues(this.id)" class="btn btn-primary">Edit</button></td>
		    <td><button type="button" id="<?php echo $row['id']; ?>" onclick="deleteuservalues(this.id)" class="btn btn-danger">Delete</button></td>
     </tr>
		<?php
	}
}

else
{
  echo "No records found";
}


?>