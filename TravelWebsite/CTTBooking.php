<?php
include('includes/dbconnection.php');
?>

<?php
	
		
		$sql = "create table `tbooking`(Id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY, `Name` VARCHAR(50) NOT NULL , `Email` VARCHAR(50) NOT NULL UNIQUE,
		         `MobileNumber` VARCHAR(11) NOT NULL , `Package` VARCHAR(100) NOT NULL, `Date` VARCHAR(100) NOT NULL,
                 `Person` INT(20) NOT NULL,`Boarding` VARCHAR(100) NOT NULL ,`Fooding` VARCHAR(100) NOT NULL ,
                 `Sightseeing` VARCHAR(100) NOT NULL,`Code` VARCHAR(100) NOT NULL  )";
		
		if($con -> query($sql) === TRUE)
		{
			echo '<script>alert("Table is created")</script>';
		}
		else
		{
			echo '<script>alert("Table is not created")</script>';
		}
		

?>