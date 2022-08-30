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
<h1 class="text-center">Insert data using php, mysqli and ajax</h1>
<div class="col-lg-8 m-auto" id="cont">


<form id="myform" action="insert.php" method="POST" >

<div class="form-group">
<label>Username:</label>
<input type="text" id="uname"  class="form-control">
</div>

<div class="form-group">
<label>Password:</label>
<input type="text" id="pwd"  class="form-control">
</div>

<div class="form-group">
<input type="hidden"  id="userid"/>
</div>

<button type="button" id="addbtn" class="btn btn-success">Submit</button>
<button type="button" id="updatebtn" class="btn btn-danger">Update</button>
</form>


</div>



<br><br>
<h1 class="text-center bg-dark text-white">Display Data using AJAX</h1>
<br>
<button id="displaydata" class="btn btn-danger">Display</button>
<br>
<br>
<table class="table table-striped table-bordered  text-center ">
  <thead>
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
</thead>
<tbody id="table-data">
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</tbody>
</table>

</div>


<script type="text/javascript" src="js/jquery.js"></script>

<script>
$(document).ready(function(){

$('#updatebtn').hide();
displaydata();

  });


// jquery code to insert data

$('#addbtn').click(function()
  {
    $.ajax({
      
      url:'insert.php',
      type:'POST',
      data:{
        "username":$('#uname').val(),      
         "password":$('#pwd').val()
      },

      success:function(response)
      {

        alert(response);
        $('input[type="text"]').val('');
        displaydata();

      }

    });

  });


//display data
function displaydata()
{
  $.ajax({
    
    url:'select.php',
    type:'POST',
    success:function(response)
    {
      $('#table-data').html(response);

    }

  });

}


//Get uservalues to Delete Data

function deleteuservalues(id)
{

  $.ajax({
   
  url:"delete.php",
  type:"POST",
  data:{
   
   "deleteid":id

  },

  success:function(response)
  {
    alert(response);
    displaydata();
  }


  });

}


//get uservalue to update data

function getuservalues(id)
{
 $('#addbtn').hide();
 $('#updatebtn').show();

 $.ajax({
   url:'edit.php',
   type:'POST',
   data:{

    "getid":id
   },
  success:function(response)
  {
    var myobj=JSON.parse(response);
    $('#userid').val(myobj.id);
    $('#uname').val(myobj.username);
    $('#pwd').val(myobj.password);
  }
  
 });

}


// update data 

$('#updatebtn').click(function()
  {
    $.ajax({
      url:'update.php',
      type:'POST',
      data:{
        "userid":$("#userid").val(),
       "username": $('#uname').val(),
       "password": $('#pwd').val()
      },
      success:function(response)
      {
        alert(response);
        displaydata();
        $('input[type="text"]').val('');
      }

    });

  }); 




</script>
</body>
</html>
