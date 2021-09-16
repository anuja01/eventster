<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$resultDepartment = mysqli_query($mysqli, "SELECT * FROM department ORDER BY dept_id DESC");
$resultEmployee = mysqli_query($mysqli, "SELECT * FROM employee ORDER BY emp_id DESC");
$resultDevice = mysqli_query($mysqli, "SELECT * FROM device ORDER BY device_id DESC");
?>

<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <a href="department/add.php">Add New Department</a><br /><br />
    <a href="employee/add.php">Add New Employee</a><br /><br />
    <a href="device/add.php">Add New Device</a><br /><br />
    <br />
    <h3>Departments</h3>
    <table width='80%' border=1>

        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Floor Number</th>
            <th>Actions</th>
        </tr>
        <?php

        while ($dept_data = mysqli_fetch_array($resultDepartment)) {
            echo "<tr>";
            echo "<td>" . $dept_data['dept_id'] . "</td>";
            echo "<td>" . $dept_data['name'] . "</td>";
            echo "<td>" . $dept_data['floor_no'] . "</td>";
            echo "<td><a href='department/edit.php?id=$dept_data[dept_id]'>Edit</a> | <a href='department/delete.php?id=$dept_data[dept_id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
    <br />
    <h3>Employees</h3>
    <table width='80%' border=1>

        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
        <?php
        while ($emp_data = mysqli_fetch_array($resultEmployee)) {
            echo "<tr>";
            echo "<td>" . $emp_data['emp_id'] . "</td>";
            echo "<td>" . $emp_data['name'] . "</td>";
            echo "<td>" . $emp_data['address'] . "</td>";
            echo "<td>" . $emp_data['phone'] . "</td>";
            echo "<td>" . $emp_data['Fk_dept_id'] . "</td>";
            echo "<td><a href='employee/edit.php?id=$emp_data[emp_id]'>Edit</a> | <a href='employee/delete.php?id=$emp_data[emp_id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
    <br />
    <h3>Devices</h3>
    <table width='80%' border=1>

        <tr>
            <th>Id</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Owner</th>
            <th>Actions</th>
        </tr>
        <?php
        while ($device_data = mysqli_fetch_array($resultDevice)) {
            echo "<tr>";
            echo "<td>" . $device_data['device_id'] . "</td>";
            echo "<td>" . $device_data['brand'] . "</td>";
            echo "<td>" . $device_data['model'] . "</td>";
            echo "<td>" . $device_data['Fk_emp_id'] . "</td>";
            echo "<td><a href='device/edit.php?id=$device_data[device_id]'>Edit</a> | <a href='device/delete.php?id=$device_data[device_id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
    <br />
    <a href="index.php">Log out</a><br /><br />
</body>

</html>