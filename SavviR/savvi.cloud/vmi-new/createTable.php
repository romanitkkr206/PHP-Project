<?php
include('db.php');
?>

<?php
	
		
		$sql = "create table `register`(Id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, `First_Name` VARCHAR(50) NOT NULL ,`Last_Name` VARCHAR(50) NOT NULL , `Email` VARCHAR(50) NOT NULL UNIQUE,
		         `Subject` VARCHAR(100) NOT NULL , `Message` VARCHAR(100) NOT NULL)";
		
		if($con -> query($sql) === TRUE)
		{
			echo '<script>alert("Table is created")</script>';
		}
		else
		{
			echo '<script>alert("Table is not created")</script>';
		}
		

?>