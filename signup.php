<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
                <form action="Controllers/SignupController.php" method="post" class="mt-5">
                    <div class="frm_head text-center">
                        <h1>Sign Up</h1>
                    </div>
                    <hr>
                    <div class="input-group mb-3 mt-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text cstm_icnns" id="basic-addon1"><label for="name"></label><i class="fa fa-user"></i></label></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" id="name" name="name">
                    </div>

                    <div class="input-group mb-3 mt-4">
                        <div class="input-group-prepend">
                          <span class="input-group-text cstm_icnnstwo" id="basic-addon1"><label for="email"></label><i class="fa fa-envelope"></i></label></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Email Address" aria-label="Email" aria-describedby="basic-addon1" id="email" name="email">
                    </div>

                    <div class="input-group mb-3 mt-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text cstm_icnnstwo" id="basic-addon1"><label for="phone"></label><i class="fa fa-phone"></i></label></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Phone Number" aria-label="Phone" aria-describedby="basic-addon1" id="phone" name="phone">
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
                    <hr>
                    <div class="form-check frm_cst_cbx">
						<input type="checkbox" class="form-check-input check_box_cstm" id="exampleCheck1" onclick="toggle()">
						<label class="form-check-label ssho_pas_labl" for="exampleCheck1">Show Password</label>
					</div>
                    <button type="submit" class="btn btn-primary btn-block btn_sbmt" name="signup">Sign Up</button>
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
			var c = document.getElementById('confirm');
			if(c.type==='password')
            {
                c.type='text';
            }
            else
            {
                c.type='password';
            }

		}
	$(document).ready()

	</script>
</body>
</html>