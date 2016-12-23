<?php
require 'dbConnect.php';
$response = array();

$q="SELECT * FROM ls_service"; 
$result = mysqli_query($con,$q);


while($rows = mysqli_fetch_array($result)){
	$temp = array();
	$temp['service_name'] = $rows['service_name'];
	$temp['service_add'] = $rows['service_add'];
	
	array_push($response,$temp);
}
print_r(json_encode($response));
?>