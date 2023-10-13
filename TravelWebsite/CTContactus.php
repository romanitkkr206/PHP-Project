<?php
include('includes/dbconnection.php');
?>

<?php
	
		
		$sql = "create table `contactus`(Id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, `Name` VARCHAR(50) NOT NULL , `Email` VARCHAR(50) NOT NULL UNIQUE,
		         `MobileNumber` VARCHAR(11) NOT NULL , `State` VARCHAR(100) NOT NULL, `Message` VARCHAR(1000) NOT NULL )";
		
		if($con -> query($sql) === TRUE)
		{
			echo '<script>alert("Table is created")</script>';
		}
		else
		{
			echo '<script>alert("Table is not created")</script>';
		}
		

?>