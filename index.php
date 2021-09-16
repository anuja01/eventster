<html>

<head>
    <title>Login</title>
</head>

<body>
    <h3>Please Login</h3>
    <form action="index.php" method="post" name="form1">
        <input type="text" name="name" placeholder="Please enter User Name" />
        <br />
        <br />
        <input type="password" name="password" placeholder="Please enter Password" />
        <br />
        <br />
        <input type="submit" name="Submit" value="Login">
    </form>
    <?php

    if (isset($_POST['Submit'])) {

        $userName = $_POST['name'];
        $password = $_POST['password'];
        if (!$userName && !$password) {
            echo "Please enter username and password";
        } else {
            include_once("../config.php");

            $result = mysqli_query($mysqli, "SELECT * FROM user where name='$userName' AND password='$password'");
            $count = mysqli_num_rows($result);
            if (!$count) {
                header("Location: ../home.php");
            }
        }
    }
    ?>
</body>

</html>