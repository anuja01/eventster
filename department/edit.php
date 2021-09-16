<?php
// include database connection file
include_once("../config.php");

// Check if form is submitted , then redirect to homepage after update
if (isset($_POST['update'])) {
	$id = $_POST['id'];

	$name = $_POST['name'];
	$floorNo = $_POST['floorNo'];

	// update  data
	$result = mysqli_query($mysqli, "UPDATE department SET name='$name',floor_no='$floorNo' WHERE dept_id=$id");

	// Redirect to homepage to display updated list
	header("Location: ../home.php");
}
?>
<?php
// Display selected data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech data based on id
$result = mysqli_query($mysqli, "SELECT * FROM department WHERE dept_id=$id");

while ($user_data = mysqli_fetch_array($result)) {
	$name = $user_data['name'];
	$floorNo = $user_data['floor_no'];
}
?>
<html>

<head>
	<title>Edit Department Data</title>
</head>

<body>
	<a href="../home.php">Home</a>
	<br /><br />

	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name; ?>></td>
			</tr>
			<tr>
				<td>Floor Number</td>
				<td><input type="text" name="floorNo" value=<?php echo $floorNo; ?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>

</html>