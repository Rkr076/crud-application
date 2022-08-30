<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form submit</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container"><br>
<h1 class="text-center">Form submit using php, mysqli and ajax</h1>
<div class="col-lg-8 m-auto" id="cont">
<form id="myform"  method="POST" >


<div class="form-group">
<label>Choose state:</label>
<select class="form-control" onchange="myfun(this.value)" >
<option>Select state</option>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'country');
$s="SELECT * FROM state";
$q=mysqli_query($conn, $s);
if (mysqli_num_rows($q) > 0) 
{
    while ($d = mysqli_fetch_assoc($q))
     {
       ?>
       <option value="<?php echo $d['sid']; ?>"><?php echo $d['state']; ?></option>
       <?php
    }
}

?>
</select>
</div>


<div class="form-group">
<label>Choose city:</label>
<select class="form-control" id="city">
<option>Select city</option>
</select>
</div>


</form>
</div>
</div>


<script type="text/javascript" src="js/jquery.js"></script>

<script>
function myfun(row)
{
  $.ajax({
   
   url:'insert_city.php',
   type:'POST',
   data:{svalue:row},
   success:function(response)
   {
      $('#city').html(response);
   }

  })


}

</script>
</body>
</html>