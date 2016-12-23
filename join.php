<?php
require 'dbConnect.php';
$response = array();

$id = $_POST['id'];

$q = "SELECT emp_category.name, ls_as_emp.emp_contact
FROM ls_as_emp
INNER JOIN emp_category
ON ls_as_emp.id=emp_category.id";


$result = mysqli_query($con,$q);
while($rows = mysqli_fetch_array($result)){
	$temp = array();
	$temp['name'] = $rows['name'];
	$temp['emp_contact'] = $rows['emp_contact'];
	
	array_push($response,$temp);
}
print_r(json_encode($response));
?>