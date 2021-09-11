<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
    <link rel="stylesheet" href="Src/css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="Vendor/Bootstrap/css/bootstrap.css">
    <!-- jQuery library -->
    <script src="Vendor/Jquery/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="Vendor/Bootstrap/js/bootstrap.min.js"></script>

    <script src="Vendor/FontAwesome/fontawesome.js"></script>
    <script src="Src/js/script.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="register-form">
                    <h2 class="text-center head_tt_mn">Patient Registration</h2>
                    <form action="#" method="post" class="has-validation" id="patientForm" >
                        <div class="form-group">
                          <label for="name" class="label_main">Patient Name:</label>
                          <input type="text" class="form-control" placeholder="Patient name" id="name" name="name">
                        </div>
                        <div class="form-group">
                          <label for="age" class="label_main">Patient Age:</label>
                          <input type="text" class="form-control" placeholder="Patient age" id="age" name="age">
                        </div>
                        <div class="form-group">
                            <label for="coll-date" class="label_main">Sample Collection Date:</label>
                            <input type="datetime-local" class="form-control" placeholder="Collection date" id="coll-date" name="coll-date">
                        </div>  
                        <label for="" class="label_main">Patient Gender:</label> 
                        <div class="form-group rd_bg_cst1">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="male" name="gender" value="Male">
                                <label class="custom-control-label" for="male">Male</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="female" name="gender" value="Female">
                                <label class="custom-control-label" for="female">Female</label>
                            </div> 
                        </div> 
                        <label for="" class="label_main">Child:</label> 
                        <div class="form-group rd_bg_cst2">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="childyes" name="child" value="1">
                                <label class="custom-control-label" for="childyes">Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="childno" name="child" value="0">
                                <label class="custom-control-label" for="childno">No</label>
                            </div> 
                        </div> 
                        <div class="form-group">
                            <label for="doc-ref" class="label_main">Referred By Doctor:</label>
                            <input type="text" class="form-control" placeholder="Doctor name" id="doc-ref" name="doc-ref">
                        </div>  
                        <div class="form-group">
                            <label for="smp-sent" class="label_main">Sample Sent:</label>
                            <input type="text" class="form-control" placeholder="Self" id="smp-sent" name="smp-sent">
                        </div>     
                        <button type="submit" class="btn btn-primary btn-block" id="submit"><i class="fa">&#xf061;</i> Next</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
