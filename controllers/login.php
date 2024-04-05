<?php
include("../config/db_con.php");

// Start session
session_start();

//Login
if(isset($_POST["btn_employees_login"]))
{
    // Get username and password from form
    $username = $_POST["username"];
    $password = $_POST["userpassword"];

    // Hash the password for comparison
    //$hashed_password = md5($password); // You should use a stronger hashing algorithm like bcrypt

    // Sanitize user input to prevent SQL injection
    $username = mysqli_real_escape_string($dbconnection, $username);
    $password = mysqli_real_escape_string($dbconnection, $password);


    $sql = "SELECT * FROM employees WHERE email='$username' AND password='$password'";
    $result = mysqli_query($dbconnection, $sql);

    echo $sql;

    if (mysqli_num_rows($result) == 1) {
        // Authentication successful
        $_SESSION["username"] = $username;
        //header("Location: ../SSLA/dashboard.php");
        echo "<script>location='../SSLA/dashboard.php'</script>";
        exit;
    } else {
        $msg="Username or Password is Wrong. Invalid User";
        $msg_type="Error";
		echo "<script>location='../index.php?msg=" . urlencode($msg) . "&msg_type=" . urlencode($msg_type) . "'</script>";
		exit();
    }
}
?>
