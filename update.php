<?php
// including the database connection file
include_once("classes/Crud.php");
include_once("classes/Validation.php");

$crud = new Crud();
$validation = new Validation();
if(isset($_POST['Submit']))
{	

	$id = $crud->escape_string($_POST['id']);
	
	$name = $crud->escape_string($_POST['name']);
	$age = $crud->escape_string($_POST['age']);
	$email = $crud->escape_string($_POST['email']);
	$mobile = $crud->escape_string($_POST['mobile']);
	
	$msg = $validation->check_empty($_POST, array('name', 'age', 'email', 'mobile'));
	$check_age = $validation->is_age_valid($_POST['age']);
	$check_email = $validation->is_email_valid($_POST['email']);
	$check_mobile = $validation->is_mobile_valid($_POST['mobile']);
	
	if($msg) {
		echo $msg;		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} elseif (!$check_age) {
		echo 'Please provide proper age.';
	} elseif (!$check_email) {
		echo 'Please provide proper email.';	
	} elseif (!$check_mobile) {
		echo 'Please provide proper mobile number.';
	} else {	
		//update the table
		$result = $crud->execute("UPDATE users SET name='$name',age='$age',email='$email',mobile='$mobile' WHERE id=$id");
		
		//redirecting to index.php
		header("Location: index.php");
	}
}
?>                                                                                                                                                                          
