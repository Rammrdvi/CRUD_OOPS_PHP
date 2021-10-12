<?php
if(!empty($_GET['id'])){
	
// including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();


//getting id from url
$id = $crud->escape_string($_GET['id']);
		

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM users WHERE id=$id");

foreach ($result as $res) {
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
	$mobile = $res['mobile'];
}
	
}


?>
<html>
<head>
    <title>Add Data</title>
	
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>

</head>

<body>

<div class="container">

<div class="row">
    
<div class="card col-md-12">
<div class="card col-md-6 divtable" style="margin: auto; margin-top: 4%; margin-bottom: 4%;">
<div class="card-body">

<a class="btn btn-primary" href="index.php">Home</a>
    <br/><br/>
	
	
    <form action="<?php echo !empty($_GET['id'])?'update.php':'insert.php'; ?>" method="post" name="form1">
        <table class="table" width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" class="form-control" name="name" value="<?php echo !empty($name)?$name:''; ?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" class="form-control"  name="age" value="<?php echo !empty($age)?$age:''; ?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" class="form-control" name="email" value="<?php echo !empty($email)?$email:''; ?>"></td>
            </tr>
			
			 <tr> 
                <td>Mobile</td>
                <td><input type="text" class="form-control" name="mobile" value="<?php echo !empty($mobile)?$mobile:''; ?>"></td>
            </tr>
            <tr> 
                <td><input type="hidden" name="id" value="<?php echo !empty($_GET['id'])?$_GET['id']:''; ?>"></td>
                <td><input class="btn btn-info" type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
	
	</div>
	</div>
	</div>
	
	</div>
	</div>
</body>
</html>