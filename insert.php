<?php
include_once("Crud.php");
include_once("Validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['Submit'])){	
	$name = $crud->escape_string($_POST['name']);
	$age = $crud->escape_string($_POST['age']);
	$email = $crud->escape_string($_POST['email']);
	$mobile = $crud->escape_string($_POST['mobile']);
		
	$msg = $validation->check_empty($_POST, array('name', 'age', 'email','mobile'));
	$check_age = $validation->is_age_valid($_POST['age']);
	$check_email = $validation->is_email_valid($_POST['email']);
	$check_mobile = $validation->is_mobile_valid($_POST['mobile']);
	
	// checking empty value
	if($msg != null) {
		echo $msg;		
		// it will be link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} elseif (!$check_age) {
		echo 'Please provide proper age.';
	} elseif (!$check_email) {
		echo 'Please provide proper email.';
	} elseif (!$check_mobile) {
		echo 'Please provide proper mobile number.';
	}	
	else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		//echo $result = ("INSERT INTO users(name,age,email,mobile) VALUES('$name','$age','$email','$mobile')");
		$result = $crud->execute("INSERT INTO users(name,age,email,mobile) VALUES('$name','$age','$email','$mobile')");
		
		//redirecting to index.php
		header("Location: index.php");
	}
}
?>
