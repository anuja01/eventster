<?php
include_once("../config.php");

if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$name = $_POST['name'];
	$email = $_POST['address'];
	$phone = $_POST['phone'];
	$department = $_POST['department'];

	$result = mysqli_query($mysqli, "UPDATE employee SET name='$name',address='$email',phone='$phone',Fk_dept_id='$department'  WHERE emp_id=$id");

	header("Location: ../home.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM employee WHERE emp_id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$address = $user_data['address'];
	$phone = $user_data['phone'];
	$department = $user_data['Fk_dept_id'];
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="../home.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value=<?php echo $address;?>></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" value=<?php echo $phone;?>></td>
			</tr>
			<tr>
				<td>Department Id</td>
				<td><input type="text" name="department" value=<?php echo $department;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>