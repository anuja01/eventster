<html>
<head>
	<title>Add Device</title>
</head>

<body>
	<a href="../home.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand"></td>
			</tr>
			<tr>
				<td>Model</td>
				<td><input type="text" name="model"></td>
			</tr>
			<tr>
				<td>Owner Id</td>
				<td><input type="text" name="owner"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	if(isset($_POST['Submit'])) {
		$brand = $_POST['brand'];
		$model = $_POST['model'];
		$owner = $_POST['owner'];
		include_once("../config.php");

		$result = mysqli_query($mysqli, "INSERT INTO device(brand,model,Fk_emp_id) VALUES('$brand','$model','$owner')");

		echo "Device added successfully. <a href='../home.php'>View Devices</a>";
	}
	?>
</body>
</html>