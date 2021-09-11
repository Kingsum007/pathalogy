<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pathology Management System</title>
    <link rel="stylesheet" href="Vendor/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Src/css/style.css">
    <script src="Vendor/Jquery/jquery.js"></script>
    <script src="Vendor/FontAwesome/all.js"></script>
</head>
<body class="indx_body">
<div class="container">
    <div class="row">
        <div class="col-sm-5 mx-auto login_frm_cst">
            <div class="logo_cstm text-center">
                <img src="Src/img/patholgoy-logo.svg" alt="">
            </div>
            <form action="Controllers/LoginController.php" method="post" class="mt-5">
                <div class="frm_head text-center">
                    <h1>Login</h1>
                </div>
                <hr>
                <div class="input-group mb-3 mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text cstm_icnns" id="basic-addon1"><label for="username"></label><i class="fa fa-user"></i></label></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="username" name="username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text cstm_icnnstwo" id="basic-addon1"><i class="fas fa-lock" style="font-size: 18px;"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" id="password" name="password">
                    <!-- <i class="fa fa-eye" aria-hidden="true"></i> -->
                </div>
                <!-- <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <div class="form-check frm_cst_cbx">
                    <input type="checkbox" class="form-check-input check_box_cstm" id="exampleCheck1" onclick="toggle()">
                    <label class="form-check-label ssho_pas_labl" for="exampleCheck1">Show Password</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn_sbmt" name="login">Login</button>
            </form>
        </div>
    </div>
</div>



<!-- Script -->

<script>
    function toggle(){
        var temp = document.getElementById("password");
        if (temp.type === "password"){
            temp.type = "text";
        }
        else{
            temp.type = "password";
        }
    }
</script>
</body>
</html>
