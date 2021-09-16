<html>
<head>
	<title>Add Employees</title>
</head>

<body>
	<a href="../home.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Names</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Adress</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td>Department Id</td>
				<td><input type="text" name="department"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$department = $_POST['department'];

		include_once("../config.php");
		$result = mysqli_query($mysqli, "INSERT INTO employee(name,address,phone,Fk_dept_id) VALUES('$name','$address','$phone','$department')");
		$result = mysqli_query($mysqli, "INSERT INTO employee(name,address,phone,Fk_dept_id) VALUES('Thilina','22A, Lowss, Burjan',077876534,4)");

		echo "Employee added successfully. <a href='../home.php'>View Employees</a>";
	}
	?>
</body>
</html>