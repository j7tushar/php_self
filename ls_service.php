<?php 
  require 'dbConnect.php';
 
$response = array();
  
$q = "select * from emp_category ";
$q1 = mysqli_query($con,$q);
$response['Service'] = array();
 
while($row = mysqli_fetch_array($q1)){
 
    $temp = array();
	
	$temp['id'] = $row['id'];
    $temp['name'] = $row['name'];
    $temp['service_icon'] = $row['service_icon'];
     
   array_push($response['Service'],$temp);
  
}
 header('content-type: application/json');
print_r(json_encode($response));
?>