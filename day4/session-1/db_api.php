
<?php
	
	// Step - 1: Data Collection
	// Collecting the Data
	$name=$_POST['uname'];
	$emailid=$_POST['emailid'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	// Push data to Database Server

	// Step -2 - Confinguring your Server Details
	// Server Details
	$server="localhost:3306";
	$dbname="web-dev";
	$username="root";
	$password="";

	$sFlag=0;

	// Step - 3 - Connecting with Server
	// let us connect with server using server details
	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn) {
		echo 'Server Connection Failure';
		$sFlag=0;
	} else {
		echo 'Server Connection Authorised';
		$sFlag=1;
	}
	echo '<br/>';

	// Step - 4: Pushing the Data to Server
	if($sFlag==1) {

		// Step-4a: Create SQL Injection according to the database
		// create an SQL Injection to insert data into the table
		$sql="INSERT INTO contact_form (name,email_id,subject,message) VALUES('".$name."','".$emailid."','".$subject."','".$message."');";

		//echo $sql;

		// Step-4b: Query the Server through injection
		// query the database server
		$a=mysqli_query($conn,$sql);

		if($a) {
			echo "Data Inserted Successfully";
		} else {
			echo $conn->error;
		}

	}

?>