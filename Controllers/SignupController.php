<?php
require_once ('db.php');
if (isset($_POST['signup'])) //Checking if Sign Up Button Pressed
{
    //Getting Veriable Values
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
//query
$insert = "INSERT INTO `tbluser` ( `u_name`, `u_email`, `u_password`, `u_phone`)VALUES ('$name','$email',MD5($password),'$phone')";

$run = mysqli_query($conn, $insert);
try
{
if ($run)
{
    $_SESSION['username'] = $name;
header('location:../dashboard.php');
}

else
{
    echo mysqli_error($conn);
}

}
catch
(Exception $e)
    {
        echo $e;
    }

}