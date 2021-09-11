$(document).ready(function () {
  /*
  * Preventing form from reloading
   */
    $('form').submit(function (e) {
        e.preventDefault();
    })
    /*
     * Triggering the Click Method of the Submit Button
     */
$("#submit").click(function () {
    // Getting Values of the inputs.
    var name = $("#name").val();
    var age = $("#age").val();
    var coll_date = $("#coll-date").val();
    var male = $("#male").val();
 var child = $("input[name='child']:checked").val();
var gender = $("input[name='gender']:checked").val();
    var doc_ref = $("#doc-ref").val();
    var smp_sent = $("#smp-sent").val();
    // storing Values in an array
    var dataString = 'name1='+name +'&age1='+age+ '&coll_date1='+coll_date+ '&gender1='+gender+ '&child1='+child+ '&doc-ref1='+doc_ref+ '&smp-sent1='+smp_sent;
    try {
        //checking if the fields are filled
        if (name == '' && age == '' && gender == '') {
            alert('Please Fill all Fields')
        }
        // making an ajax send method data
        else {
            $.ajax({
                type: 'post',
                url: 'Controllers/PatientController.php',
                data: dataString,
                cache: false,
                success: function (result) {
                    document.getElementById('patientForm').reset();
                    alert(result);

                },
                error: function (error) {
                    alert(error);
                }
            })
        }
    }
    catch (e) {
        alert(e.message);
    }
})
})
