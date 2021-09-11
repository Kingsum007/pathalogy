<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(empty($_SESSION['username'])){
    header('location:login.php');
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pathology Management System</title>
    <link rel="stylesheet" href="Vendor/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Src/css/index.css">
    <script src="Vendor/Jquery/jquery.js"></script>
    <script src="Vendor/FontAwesome/all.js"></script>
</head>
<body>
    <div class="container dashboard_mn_cs">
        <div class="dsh_btns_heading text-center">
            <h1>Admin Panel</h1>
            <h3 style="color: darkgreen">Welcome <?php echo $_SESSION['username']; ?></h3>
        </div>
        <div class="row dsh_btns">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">New Patient</h5>
                      <p class="card-text">Click the button below to add new patient</p>
                      <a href="add-patient.php" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="fas fa-plus"></i> Add Patient</a>
                    </div>
                </div>
            </div>     
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Patient's List</h5>
                      <p class="card-text">Click the button below open the list of existing patients</p>
                      <a href="#" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="fas fa-list-ol"></i> Patient's</a>
                    </div>
                </div>
            </div>   
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Search Patient's</h5>
                      <p class="card-text">Click the button below to search the existing patients</p>
                      <a href="#" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="fas fa-search"></i> Search Patient's</a>
                    </div>
                </div>
            </div>   
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Master Page</h5>
                      <p class="card-text">Click the button below to view master page</p>
                      <a href="#" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="far fa-file"></i> Master Page</a>
                    </div>
                </div>
            </div>            
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Test Entry</h5>
                      <p class="card-text">Click the button below to add or manage test</p>
                      <a href="#" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="fas fa-vial"></i> Test Entry</a>
                    </div>
                </div>
            </div>   
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Manual Entry</h5>
                      <p class="card-text">Click the button below to add test manually</p>
                      <a href="#" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="far fa-edit"></i> Manual Entry</a>
                    </div>
                </div>
            </div> 
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Manual Update</h5>
                      <p class="card-text">Click the button below to manually update test's</p>
                      <a href="#" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Manual Update</a>
                    </div>
                </div>
            </div>   
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Test's Rate List</h5>
                      <p class="card-text">Click the button below to manage test rates</p>
                      <a href="#" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="fas fa-rupee-sign"></i> Rate List</a>
                    </div>
                </div>
            </div>      
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Update Test's</h5>
                      <p class="card-text">Click the button below to update tests</p>
                      <a href="#" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="fas fa-undo-alt"></i> Update Test</a>
                    </div>
                </div>
            </div>     
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Account Details</h5>
                      <p class="card-text">Click the button below to view account details</p>
                      <a href="account.php" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="far fa-user-circle"></i> Account</a>
                    </div>
                </div>
            </div>          
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Backup</h5>
                      <p class="card-text">Click the button below to take backup</p>
                      <a href="#" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="fas fa-download"></i> Backup</a>
                    </div>
                </div>
            </div>  
            <div class="col-sm-3 mt-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Sub Admin</h5>
                      <p class="card-text">Click the button below to add new admin</p>
                      <a href="signup.php" class="btn btn-primary btn-lg active btn-block" role="button" aria-pressed="true"><i class="fas fa-user-plus"></i> Sub Admin</a>
                    </div>
                </div>
            </div>                                     
        </div>
    </div>
</body>
</html>