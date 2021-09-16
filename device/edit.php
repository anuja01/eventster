<?php
include_once("../config.php");

if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$owner = $_POST['owner'];
	echo "tteeesstt: '$brand' - '$model' - '$owner'";

	$result = mysqli_query($mysqli, "UPDATE device SET brand='$brand',model='$model',Fk_emp_id='$owner' WHERE device_id=$id");

	header("Location: ../home.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM device WHERE device_id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$brand = $user_data['brand'];
	$model = $user_data['model'];
	$owner = $user_data['Fk_emp_id'];
}
?>
<html>
<head>
	<title>Edit Device Data</title>
</head>

<body>
	<a href="../home.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand" value=<?php echo $brand;?>></td>
			</tr>
			<tr>
				<td>Model</td>
				<td><input type="text" name="model" value=<?php echo $model;?>></td>
			</tr>
			<tr>
				<td>Owner Id</td>
				<td><input type="text" name="owner" value=<?php echo $owner;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>