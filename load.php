<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Select event</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container"><br>
<h1 id="load-data" class="text-center">Insert data using php, mysqli and ajax</h1>

<button  class="btn btn-danger" id="btn_click">click me</button>

</div>


<script type="text/javascript" src="js/jquery.js"></script>

<script>

$(document).ready(function()
 {
   $('#btn_click').click(function()
   {
     $('#load-data').text('hiii this is rahul from patna');

   });
 });

</script>
</body>
</html>