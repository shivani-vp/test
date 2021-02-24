# version
<html>
	<head>
	<title>Sample</title>
	</head>

	<body>
		<center>
		<form method="POST" action = "sample.php">
			<table>
			<tr>
				<td> Age </td>
				<input type="number" id = "age" min="0"></td>
			</tr>
			<tr>
				<td> USN </td>
				<input type="text" id = "usn" required></td>
			</tr>
			</table>
			<input type = "submit" id = "submit" value = "Submit">
		</form>


		</center>
	</body>
</html>

<?php
	$con=msqli_connect("localhost","root","","sample"); #connnection("PC","USERNAME","PASSWORD","DATABASE NAME")
	if(isset($_REQUEST['submit'])){
	$age=$_REQUEST['age'];
	$usn=$_REQUEST['usn'];
	
	if(mysqli_connect_errno($con))  #returns error number(wrong host name or database name) else returns 0
	{
		echo "Failed to connect to the database ".mysqli_connect_error(); #dot operator string concatenation, function gives description of error
	} 
	else
	{
		mysqli_query($con,"Insert into shivani values('$age','name')");
	}
	}
	mysqli_close($con);
?>
		        
