<?php

$conn = mysqli_connect('localhost', 'root', '', 'graduation');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dynamic dropdown</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container"><br>
<h1 class="text-center">Dynamic dropdown using php, mysqli and ajax</h1>
<div class="col-lg-8 m-auto" id="cont">
<form id="myform" action="insert.php" method="POST" >

<div class="form-group">
<label>Username:</label>
<input type="text" name="username" class="form-control">
</div>

<div class="form-group">
<label>Password:</label>
<input type="text" name="password" class="form-control">
</div>

<div class="form-group">
<label>Degree:</label>
<select class="form-control" onchange="myfun(this.value)" >
<option>Select any one</option>
<?php
$q="SELECT * FROM degree";
$r=mysqli_query($conn, $q);
while ($m=mysqli_fetch_assoc($r))
 {
 	?>
     <option value="<?php echo $m['mid']; ?>" ><?php echo $m['degree']; ?></option> 
	<?php

}

?>
</select>
</div>


<div class="form-group">
<label>Clases:</label>
<select class="form-control" id="dataget">
<option>Select any one</option>
</select>
</div>


<input type="submit" id="submit" name="submit" value="submit" class="btn btn-success">
</form>
</div>
</div>


<script type="text/javascript" src="js/jquery.js"></script>

<script>

 function myfun(datavalue)
 {
   $.ajax({
      url: 'class.php',
      type: 'POST',
      data:{datapost:datavalue},
      success:function(response)
      {
       $('#dataget').html(response);
      }

    });

 }

</script>
</body>
</html>