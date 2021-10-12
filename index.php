<?php 
//include database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//fetch query 
$query = "SELECT * FROM users ORDER BY age ASC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>

<html>
<head>	
	<title>Homepage</title>
	
	<!-- Live bootstrapp css and js -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>


</head>

<body>

<div class="container">

<div class="row">

<div class="card col-md-12">
<div class="card col-md-8 divtable" style="margin: auto; margin-top: 4%; margin-bottom: 4%;">
<div class="card-body">

<a href="AddEdit.php" class="btn btn-primary">Add New Data</a><br/><br/>

	<table class="table table-striped table-hover">


	<tr bgcolor='#CCCCCC'>
		<th scope="col">Name</th>
		<th scope="col">Age</th>
		<th scope="col">Email</th>
		<th scope="col">Mobile</th>
		<th scope="col">Update</th>
	</tr>
	<?php 
	foreach ($result as $key => $res) {
	//while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td>".$res['mobile']."</td>";	
		echo "<td><a class='btn btn-info' href=\"Addnew.php?id=$res[id]\"> <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
 Edit</a> | <a class='btn btn-danger' href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
	
	</div>
	</div>
	</div>
	
	</div>
	</div>
</body>
</html>
