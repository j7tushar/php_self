<?php
error_reporting(error_reporting() & ~E_NOTICE );
include_once 'dbConnect.php';

/*$response = array();*/

$emp_name = $_POST['emp_name'];
$emp_dob = $_POST['emp_dob'];
$emp_contact = $_POST['emp_contact'];
$emp_adress = $_POST['emp_adress'];
$emp_city = $_POST['emp_city'];
$emp_pincode = $_POST['emp_pincode'];
$emp_merital = $_POST['emp_merital'];
$emp_image = $_POST['emp_image'];
$id = $_POST['id'];

$que = "INSERT INTO ls_as_emp(emp_name,emp_dob,emp_contact, emp_adress, emp_city, emp_pincode, emp_merital,emp_image,id) VALUES ('$emp_name','$emp_dob','$emp_contact', '$emp_adress', '$emp_city', '$emp_pincode', '$emp_merital', '$emp_image', '$id')" ;

$result = mysqli_query($con,$que) or die(mysql_error());

if($result){
		//$response['success']=true;
		//$response['message']="Inserted Successfully";
		//print_r(json_encode($response));	
	echo "success";
	}
else{
	//$response['success']=false;
		//$response['message']="Error";
		//print_r(json_encode($response));	
	echo "error";
	}
	// header('Content-type: application/json');
	//print_r(json_encode($response));

 ?>