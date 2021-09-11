<?php
require_once('db.php');
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `tbluser` WHERE `u_email`='$username' AND `u_password` = MD5('$password');";
    $check = mysqli_query($conn,$query);
    $data = mysqli_fetch_assoc($check);
    $count = mysqli_num_rows($check);

    if($count ==1)
    {
        $_SESSION['username'] = $data['u_name'];
        header('location:../dashboard.php');

    }
    else
    {
        echo '<script>alert("Please Use Correct Email and Password")</script>';
        header('location:../login.php');

    }
}
