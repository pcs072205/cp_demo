<?php
include("../config/db_con.php");

//Employees Registration
if(isset($_POST["btn_employees_registration"]))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

		
	$created_on = date('Y-m-d H:i:s');
    $updated_on = date('Y-m-d H:i:s');
	$status = "A";

    $email = strtolower($email);

    $role = "Employee";
	
	//Reg Check
	$register_check="SELECT * FROM  `login` WHERE username='$email'";
	$result_register_check = mysqli_query($dbconnection,$register_check);  
	$row_register_check = $result_register_check->num_rows;
	if ($row_register_check>0)
	{
		$msg="Email is already registred. Please try login";
        $msg_type="Error";
		echo "<script>location='../register.php?msg=" . urlencode($msg) . "&msg_type=" . urlencode($msg_type) . "'</script>";
		exit();
	}
	else
	{	
		//Insert into Registation table
		$insert_query="INSERT INTO `employees` (
            `employee_id`, 
            `full_name`, 
            `date_of_birth`, 
            `gender`, 
            `social_security_card`, 
            `social_security_number`, 
            `email`, 
            `password`, 
            `role`, 
            `phone_number`, 
            `alt_phone_number`, 
            `home_address`, 
            `created_on`, 
            `updated_on`, 
            `status`
        ) VALUES (
            NULL, 
            '$name', 
            '', 
            '', 
            '', 
            '', 
            '$email', 
            '$password', 
            '$role', 
            '', 
            '', 
            '',
            '$created_on', 
            '$updated_on',
            '$status'
        );";
		$insert_result=mysqli_query($dbconnection,$insert_query);
		//Check whether the query was successful or not
		if($insert_result) { 
			$msg="Successfully Registred";
            $msg_type="Success";
            echo "<script>location='../index.php?msg=" . urlencode($msg) . "&msg_type=" . urlencode($msg_type) . "'</script>";
            exit();
		}
		else
		{
			$msg="Something went wrong. Please try again";
            $msg_type="Error";
            echo "<script>location='../index.php?msg=" . urlencode($msg) . "&msg_type=" . urlencode($msg_type) . "'</script>";
            exit();
		}
	}
}
echo"fdfdf";
echo"ererere";
//Employees Add
if(isset($_POST["full_name"]))
{
    echo"fdfdf";

    $name = $_POST['full_name']; 
    $date_of_birth = $_POST['date_of_birth']; 
    $gender = $_POST['gender']; 
    $social_security_card = $_POST['social_security_card']; 
    $social_security_number = $_POST['social_security_number']; 
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $role = $_POST['role']; 
    $phone_number = $_POST['phone_number']; 
    $alt_phone_number = $_POST['alt_phone_number']; 
    $home_address = $_POST['home_address']; 

		
	$created_on = date('Y-m-d H:i:s');
    $updated_on = date('Y-m-d H:i:s');
	$status = "A";

    $email = strtolower($email);

    $role = "Employee";
	
	//Reg Check
	$register_check="SELECT * FROM  `login` WHERE username='$email'";
	$result_register_check = mysqli_query($dbconnection,$register_check);  
	$row_register_check = $result_register_check->num_rows;
	if ($row_register_check>0)
	{
		$msg="Email is already registred. Please try login";
        $msg_type="Error";
		echo "<script>location='../SSLA/employees_add.php?msg=" . urlencode($msg) . "&msg_type=" . urlencode($msg_type) . "'</script>";
		exit();
	}
	else
	{	
		//Insert into Registation table
		$insert_query="INSERT INTO `employees` (
            `employee_id`, 
            `full_name`, 
            `date_of_birth`, 
            `gender`, 
            `social_security_card`, 
            `social_security_number`, 
            `email`, 
            `password`, 
            `role`, 
            `phone_number`, 
            `alt_phone_number`, 
            `home_address`, 
            `created_on`, 
            `updated_on`, 
            `status`
        ) VALUES (
            NULL, 
            '$name', 
            '$date_of_birth', 
            '$gender', 
            '$social_security_card', 
            '$social_security_number', 
            '$email', 
            '$password', 
            '$role', 
            '$phone_number', 
            '$alt_phone_number', 
            '$home_address',
            '$created_on', 
            '$updated_on',
            '$status'
        );";
		$insert_result=mysqli_query($dbconnection,$insert_query);
		//Check whether the query was successful or not
		if($insert_result) { 
			$msg="Successfully Added";
            $msg_type="Success";
            echo "<script>location='../SSLA/employees_add.php?msg=" . urlencode($msg) . "&msg_type=" . urlencode($msg_type) . "'</script>";
            exit();
		}
		else
		{
			$msg="Something went wrong. Please try again";
            $msg_type="Error";
            echo "<script>location='../SSLA/employees_add.php?msg=" . urlencode($msg) . "&msg_type=" . urlencode($msg_type) . "'</script>";
            exit();
		}
	}
}

?>