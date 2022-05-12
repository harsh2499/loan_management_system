<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin | Loan Management System</title>


    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">


    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/DataTables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/jquery.datetimepicker.min.css" rel="stylesheet">
    <link href="assets/css/select2.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery-te-1.4.0.css">

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/DataTables/datatables.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.datetimepicker.full.min.js"></script>
    <script type="text/javascript" src="assets/font-awesome/js/all.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>




</head>
<style>
    body {
        background: #80808045;
    }

    .modal-dialog {
        max-width: 871px;
    }
</style>

<body>
    <style>
        .logo {
            margin: auto;
            font-size: 20px;
            background: white;
            padding: 7px 11px;
            border-radius: 50% 50%;
            color: #000000b3;
        }
    </style>


    <style>
    </style>
    <x-header />
    <script>
        $('.nav-borrowers').addClass('active')
    </script>
    <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
    </div>


    <main id="view-panel">

        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <large class="card-title">
                            <b>Borrower List</b>
                        </large>
                        <button class="btn btn-primary btn-block col-md-2 float-right" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> New Borrower</button>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered" id="borrower-list">
                            <colgroup>
                                <col width="10%">
                                <col width="35%">
                                <col width="30%">
                                <col width="15%">
                                <col width="10%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Borrower</th>
                                    <th class="text-center">Current Loan</th>
                                    <th class="text-center">Next Payment Schedule</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                        <script>
                            function load() {
                                $.ajax({
                                    url: "/showborrow",
                                    type: "get",

                                    success: function(data) {

                                    
                                        console.log(data);
                                        var print = JSON.parse(data);

                                        var tblprint = "";
                                        var i = 1;
                                        $.each(print, function(key, value) {

                                            if(value["status"]=="0")
                                            {
                                                status="N/A";
                                                next_payment_date="N/A";
                                            }
                                            else if(value["status"]=="1")
                                            {
                                                status="N/A";
                                                next_payment_date="N/A";
                                            }
                                            else if(value["status"]=="2")
                                            {
                                                status="yes";
                                                next_payment_date=value["next_payment_date"];
                                            }
                                            else if(value["status"]=="3")
                                            {
                                                status="yes";
                                                next_payment_date=value["next_payment_date"];
                                            }
                                            

                                            tblprint += `<tr>
                                <td>${i++}</td>
                                <td><b>Name:</b>${value["lname"] +"  " +value["fname"] + "  "+value["mname"]+"<br>"}
                                <b>Address:</b>${value["address"]+"<br>"}
                                <b>Contact:</b>${value["contact_no"]+"<br>"}
                                <b>Email:</b>${value["email"]+"<br>"}
                                <b>Tax Id:</b>${value["tax_id"]+"<br>"}
                                </td>

                                <td>
                                     ${status}   
                                            
                                </td><td>${next_payment_date}  </td>
                                <td>
                              
                                <button type="button" class="btn btn-primary  btn-sm edit_borrow" data-bs-toggle="modal" data-bs-target="#editModal" data-id="${value['id']}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
                                </button>
                                <button class="btn btn-sm btn-danger delete_borrow bbb" id="dtype" type="button" data-id="${value['id']}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></button></td>
                            </tr>`;
                                        });

                                        $("tbody").html(tblprint);
                                    }
                                });

                            }

                            load();

                            $("tbody").on("click", ".delete_borrow", function() {
                                var id = $(this).data('id');
                                console.log(id);
                                $.ajax({
                                    url: "/deleteborrow",
                                    type: "get",
                                    data: {
                                        "id": id
                                    },
                                    success: function(data) {
                                        var msg = JSON.parse(data);

                                        if (msg["status"] == "100") {

                                            $("#msg").text("Record Delete Successfully........");


                                            load();



                                        } else if (msg["status"] == "100") {

                                            $("#msg").text("Record Delete Not  Successfully........");
                                        }
                                    }
                                });
                            });


                            $("tbody").on("click", ".edit_borrow", function() {
                                var id = $(this).data('id');
                                console.log(id);
                                $.ajax({
                                    url: "/editborrow",
                                    type: "get",
                                    data: {
                                        "id": id
                                    },
                                    success: function(data) {

                                        console.log(data);

                                        var msg = JSON.parse(data);



                                        if (msg["status"] == "100") {
                                            $("#eid").val(msg["data"][0]["id"]);

                                            $("#lname").val(msg["data"][0]["lname"]);
                                            $("#fname").val(msg["data"][0]["fname"]);
                                            $("#mname").val(msg["data"][0]["mname"]);
                                            $("#address").val(msg["data"][0]["address"]);
                                            $("#contact").val(msg["data"][0]["contact_no"]);
                                            $("#email").val(msg["data"][0]["email"]);
                                            $("#taxid").val(msg["data"][0]["tax_id"]);

                                        } else if (msg["status"] == "200") {
                                            $(".geeks").removeClass("d-none");
                                            $("#msg").text("Record Not Fetch Successfully........");
                                            setTimeout(function() {
                                                $(".geeks").addClass("d-none");
                                            }, 5000);

                                        } else {
                                            $(".geeks").addClass("d-none");
                                        }
                                    }
                                });
                            });




                            $(document).ready(function() {
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                    }
                                });
                                $(".update").click(function() {
                                    var update_borrower = $("#update-borrower").serialize();

                                    $.ajax({
                                        url: "/updateborrow",
                                        type: "POST",
                                        data: update_borrower,
                                        success: function(data) {

                                            console.log(data);

                                            var msg = JSON.parse(data);

                                            if (msg["status"] == "100") {

                                                $("#msg").text("Record Update Successfully........");


                                                $("#eid").val("");
                                                $("#emonth").val("");
                                                $("#einterest_percentage").val("");
                                                $("#epenalty_rate").val("");

                                                load();

                                                $("#editModal").modal("hide");


                                            } else if (msg["status"] == "200") {

                                                $("#msg").text("Record Not Update Successfully........");

                                                $("#editModal").modal("hide");

                                            }

                                        }
                                    });

                                });

                            });
                        </script>
                        <p id="msg"></p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Button trigger modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New borrower</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="col-lg-12">
                                <form id="update-borrower">
                                    <input type="hidden" id="eid" name="id">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="" class="control-label">Last Name</label>
                                                <input name="lastname" class="form-control" required="" value="" id="lname">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">First Name</label>
                                                <input name="firstname" class="form-control" required="" value="" id="fname">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Middle Name</label>
                                                <input name="middlename" class="form-control" value="" id="mname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label for="">Address</label>
                                            <textarea name="address" cols="30" rows="2" class="form-control" required="" id="address"></textarea>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="">
                                                <label for="">Contact #</label>
                                                <input type="text" class="form-control" name="contact_no" id="contact">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" id="email">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="">
                                                <label for="">Tax ID</label>
                                                <input type="text" class="form-control" name="tax_id" id="taxid">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary update">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New borrower</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="col-lg-12">
                                <form id="manage-borrower">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="" class="control-label">Last Name</label>
                                                <input name="lastname" class="form-control" required="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">First Name</label>
                                                <input name="firstname" class="form-control" required="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Middle Name</label>
                                                <input name="middlename" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label for="">Address</label>
                                            <textarea name="address" id="" cols="30" rows="2" class="form-control" required=""></textarea>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="">
                                                <label for="">Contact #</label>
                                                <input type="text" class="form-control" name="contact_no" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" value="">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="">
                                                <label for="">Tax ID</label>
                                                <input type="text" class="form-control" name="tax_id" value="">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary confirm">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                });
                $(".confirm").click(function(e) {
                    e.preventDefault();

                    var manage_borrower = $("#manage-borrower").serialize();

                    $.ajax({
                        url: "/saveborrow",
                        type: "POST",
                        data: manage_borrower,
                        success: function(data) {


                            var msg = JSON.parse(data);

                            if (msg["status"] == "100") {

                                $("#msg").text("Record Save Successfully........");
                                $("#exampleModal").modal("hide");
                                load();

                            } else if (msg["status"] == "200") {
                                $("#exampleModal").modal("hide");
                                $("#msg").text("Record NotSave Successfully........");
                            }

                        }
                    });

                });

            });
        </script>


        <style>
            td p {
                margin: unset;
            }

            td img {
                width: 8vw;
                height: 12vh;
            }

            td {
                vertical-align: middle !important;
            }
        </style>

    </main>

</body>

</html>