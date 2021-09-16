<html>

<head>
	<title>Add Departments</title>
</head>

<body>
	<a href="../home.php">Go to Home</a>
	<br /><br />

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Floor Number</td>
				<td><input type="text" name="floor_no"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	if (isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$floorNo = $_POST['floor_no'];

		// include database connection file
		include_once("../config.php");

		$result = mysqli_query($mysqli, "INSERT INTO department(name, floor_no) VALUES('$name', '$floorNo')");

		echo "Department added successfully. <a href='../home.php'>View Department</a>";
	}
	?>
</body>

</html>