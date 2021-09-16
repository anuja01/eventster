<?php
// include database connection file
include_once("../config.php");

// Get id from URL to delete 
$id = $_GET['id'];

// Delete 
$result = mysqli_query($mysqli, "DELETE FROM department WHERE dept_id=$id");

// After delete redirect to Home, so that latest list will be displayed.
header("Location:../home.php");
?>