<?php
  date_default_timezone_set('asia/kolkata');
  $dt = date('dmyhi');  
    $file_path = "profile/";
     
    $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path) ){
        echo "success";
    } else{
        echo "fail";
    }
 ?>