<?php
include('connect.php');
		function getaadharTrim($message)
		{
			$first12 = substr($message, 0,12);
			return $first12;	
		}
		function getmobileTrim($message)
		{
			$last = substr($message,12,21);
			return $last;
		}
	  if( $_GET["message"]) {
      	echo "Recevied". " ".$_GET['message']. "<br />";
      	$message =$_GET['message'];
      	$aadhar_number = getaadharTrim($message);
      	$mobile_number = getmobileTrim($message);
      	$sql = "INSERT sms_string SET string = :message,
      	mobile = :mobile_number,
      	aadhar = :aadhar_number";
      	$stmt = $con->prepare($sql);
      	$stmt->bindParam(':message', $_GET['message'],PDO::PARAM_STR);
      	$stmt->bindParam(':aadhar_number', $aadhar_number,PDO::PARAM_STR);
      	$stmt->bindParam(':mobile_number', $mobile_number,PDO::PARAM_STR);      
   		$stmt->execute();
   		echo 'Sent succesfully!'.$message;

   }
?>