<!<!doctype html>
<html lang="en">
<?php
session_start();
if(empty($_SESSION['username'])){
    header('location:login.php');
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Details</title>
</head>
<body>
    <h2 class="btn btn-danger btn-block"><a href="Controllers/LogotController.php?logout=1"> Logout</a></h2>
</body>
</html>