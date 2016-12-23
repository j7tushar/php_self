<?php 
 
require 'dbConnect.php';
 
$response = array();
  
$q = "select * from ls_city where city_future = '1' ";
$q1 = mysqli_query($con,$q);
$response['City'] = array();
 
while($row = mysqli_fetch_array($q1)){
 
    $temp = array();
 
    $temp['c_name'] = $row['c_name'];
    $temp['city_future'] = $row['city_future'];
    $temp['city_image'] = $row['city_image'];
     
   array_push($response['City'],$temp);
  
}
 header('content-type: application/json');
print_r(json_encode($response));
?>