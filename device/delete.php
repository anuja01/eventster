<?php
include_once("../config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM device WHERE device_id=$id");

header("Location:../home.php");
?>