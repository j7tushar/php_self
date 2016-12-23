<?php
require 'dbConnect.php';
$response = array();

$service_name = $_POST['service_name'];
$service_add = $_POST['service_add'];

$q = "INSERT INTO ls_service (service_name,service_add) VALUES ('$service_name','$service_add')";

$result = mysqli_query($con,$q);
if($result){
	echo "Success insert";
	//$response['message'] = true;
	//$response['message'] = "Success";
	$qq = "SELECT * FROM ls_service WHERE service_add='$service_add'";
	
	$res = mysqli_query($con,$qq);
	while($rows = mysqli_fetch_array($res)){
		$temp = array();
		$temp['service_name'] = $rows['service_name'];
		array_push($response,$temp);
		if(mysqli_num_rows($res) > 0){
			$qqq = "UPDATE ls_service SET service_add = 'TUSHAR' WHERE service_name='$service_name'";
			$r = mysqli_query($con,$qqq);
		}
	}
	if($r){
		echo "Success Update";
		$qqqq = "DELETE FROM ls_service WHERE service_add='TUSHAR'";
		$rr = mysqli_query($con,$qqqq);
		if($rr){
			echo "Success delete";
		}else{
			echo "Fail to delete";
		}
	}else{
		echo "Fail Update";
	}
}else{
	echo "Fail insert";
}
print_r(json_encode($response));
?>