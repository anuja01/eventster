<?php
include_once("../config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM employee WHERE emp_id=$id");

header("Location:../home.php");
?>