<?php
// Database Connection
$server_name="localhost";
$username="root";
$password="";
$db_name="iocl";

$conn=mysqli_connect($server_name,$username,$password,$db_name);

//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
else{
	echo "Connection was successful";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $dept = $_POST["dept"];
    $empId = $_POST["empId"];
    $mobile = $_POST["Phone"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    if($pass == $cpass){
        $sql = "INSERT INTO `employees`(`Name`, `Department`, `EmployeeId`, `Phone`, `Email`, `Password`, `ConfirmPassword`) VALUES ('$name','$dept','$empId','$mobile','$email','$pass','$cpass')";
    }

    else{
        echo "Password and Confirm Password do not match!";
    }
    
    
    mysqli_query($conn, $sql);

}
    
    

?>
