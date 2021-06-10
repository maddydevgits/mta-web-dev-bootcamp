<!-- Tech Support Team -->
<!-- In PHP, you can call HTML CODE -->
<!-- In HTML, you can't call PHP -->

<!DOCTYPE html>
<html>
	<head>
		<title>Tech Support Table</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email ID</th>
				<th>Subject</th>
				<th>Message</th>
			</tr>
		<?php
			
			// Server Credentials
			$server="localhost:3306";
			$username="root";
			$password="";
			$dbname="web-dev";

			// Connecting with Server
			$conn=mysqli_connect($server,$username,$password,$dbname);	
			if(!$conn) {
				echo 'Connection Failure';
			}

			// Prepare an SQL Injection
			$sql="SELECT * FROM contact_form";

			// query this injection
			$data=mysqli_query($conn,$sql);
			if(mysqli_num_rows($data)>0) {
				while($row=mysqli_fetch_assoc($data)) {
		?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['email_id'];?></td>
						<td><?php echo $row['subject'];?></td>
						<td><?php echo $row['message'];?></td>
					</tr>
		<?php			
				}
			}
		?>
	</table>
	</body>
</html>


