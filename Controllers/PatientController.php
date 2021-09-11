<?php
require_once ('db.php');
$name = $_POST['name1'];
$age = $_POST['age1'];
$coll_date = $_POST['coll_date1'];
$gender = $_POST['gender1'];
$child = $_POST['child1'];
$ref = $_POST['doc-ref1'];
$sample = $_POST['smp-sent1'];
/*
 *
 *
 * Trying to Directly Save Information throug an Ajax POST Method
 */
try {
    mysqli_query($conn, "INSERT INTO `tblpatient`( `p_name`, `p_age`, `p_sample_date`, `p_gender`, `p_child`, `p_doctor`, `p_sample_sent`)
VALUES ('$name','$age','$coll_date','$gender','$child','$ref','$sample')");
    echo "Saved Successfully";
}
catch (Exception $e)
{
    /*
     * If Errors Occcurs Printing Response to the Ajax.
     */
    echo $e->getMessage();
}
