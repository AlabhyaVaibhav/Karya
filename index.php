<?php
include('connect.php');
	  if( $_GET["message"]) {
      	echo "Recevied". " ".$_GET['message']. "<br />";
      	$message = $_GET['message'];
      	$sql = "INSERT sms_string SET string = :message";
      	$stmt = $con->prepare($sql);
      	$stmt->bindParam(':message', $_GET['message'],PDO::PARAM_STR);      
   		$stmt->execute();
   		echo 'Sent succesfully!'.$message;	
   }
?>