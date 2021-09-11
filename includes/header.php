<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (empty($_SESSION['username'])) {
    header('location:login.php');
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if ($title == "dash") {
            echo "Dashboard";
        } elseif ($title == "add_p") {
            echo "Add Patient";
        } else {
            echo " Admin - Pathology Management System";
        }
        ?>
    </title>
    <link rel="stylesheet" href="Vendor/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Vendor/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Vendor/Bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="Src/css/style.css">
    <script src="Vendor/Jquery/jquery.js"></script>
    <script src="Vendor/FontAwesome/all.js"></script>
    <script src="Vendor/Bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="Src/fonts/Poppins/poppins-fonts.css">
    <script type="text/javascript" src="Src/js/script.js"></script>
</head>
<body class="dashboard">
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar_header">
            <h3>Dashboard</h3>
            <hr>
        </div>
        <ul class="list-unstyled components">
            <li><a href="dashboard.php" class="active">Home</a></li>
            <li><a href="#patientmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Patient</a>
                <ul class="collapse list-unstyled" id="patientmenu">
                    <li><a href="add-patient.php">Add Patient</a></li>
                    <li><a href="#">Patinet's List</a></li>
                    <li><a href="#">Search Patient</a></li>
                </ul>
            </li>
            <li><a href="#">Master Page</a></li>
            <li><a href="#testmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Test</a>
                <ul class="collapse list-unstyled" id="testmenu">
                    <li><a href="#">Test Entry</a></li>
                    <li><a href="#">Test Update</a></li>
                    <li><a href="#">Manual Entry</a></li>
                    <li><a href="#">Manual Update</a></li>
                    <li><a href="#">Test Rate List</a></li>
                </ul>
            </li>
            <li><a href="#">Account Details</a></li>
            <li><a href="#">Backup & Restore</a></li>
            <li><a href="#">Manage User</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="Controllers/LogotController.php?logout=1">Logout</a></li>

        </ul>
    </nav>
    <div class="container-fluid page_area_cst">
        <nav class="navbar navbar-expand-lg navbar-light nvbar_cstm">
            <button type="button" id="sidebarCollapse" class="btn btn-info"><i class="fa fa-align-justify"></i></button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto list-unstyled components">
                    <li><a href="#adminarea" data-toggle="modal" aria-expanded="true"
                           data-target="#exampleModal">ADMIN</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header modal_adm_bg">
                                        <h5 class="modal-title" id="exampleModalLabel">Admin</h5>
                                        <!-- <p class="modal_subTl">Laboratory Name</p> -->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="text-right">

        </nav>
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page_title">Dashboard</h1>
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav> -->
                <div class="line"></div>