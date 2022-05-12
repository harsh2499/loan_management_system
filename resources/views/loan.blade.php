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
        $('.nav-loans').addClass('active')
    </script>
    <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
    </div>

    <p id="msg"></p>
    <main id="view-panel">

        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <large class="card-title">
                            <b>Loan List</b>
                            <button class="btn btn-primary btn-sm btn-block col-md-2 float-right" type="button" id="new_application" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Create New Application</button>
                        </large>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="loan-list">
                            <colgroup>
                                <col width="10%">
                                <col width="25%">
                                <col width="25%">
                                <col width="20%">
                                <col width="10%">
                                <col width="10%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Borrower</th>
                                    <th class="text-center">Loan Details</th>
                                    <th class="text-center">Next Payment Details</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="load">


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function load() {
                $.ajax({

                    url: "/result",
                    type: "get",
                    success: function(data) {


                        var print = JSON.parse(data);
                        var tblprints = "";
                        var i = 1;

                        a = 10

                        $.each(print, function(index, value) {

                            var totalamount = (parseInt(value["amount"]) + (value["amount"] * (parseInt(value["interest_rate"]) / 100))) / parseInt(value["month"]) * value["month"];
                            var monthamount = (parseInt(value["amount"]) + (value["amount"] * (parseInt(value["interest_rate"]) / 100))) / parseInt(value["month"]);
                            var overdue = (parseInt(value["amount"]) + (value["amount"] * (parseInt(value["interest_rate"]) / 100))) / parseInt(value["month"]) * (parseInt(value["penalty_rate"]) / 100);
                            if (value["status"] == "0") {
                                status = "<b style='color:#212529;background-color:#ffc107; border-radius:10px;padding: 8px;'>For Approval</b>";
                                release_date = "N/A";
                                total_a = "";
                                month_a = "";
                                penalty_a = "";
                            } else if (value["status"] == "1") {
                                status = "<b style='color:#212529;background-color:#ffc107;border-radius:10px;padding: 8px;'>Approved</b>";
                                release_date = "N/A";
                                total_a = "";
                                month_a = "";
                                penalty_a = "";
                            } else if (value["status"] == "2") {
                                status = "<b style='color:chartreuse;background-color:darkblue;border-radius:10px;padding:8px;'>Released</b>";
                                date = new Date(value["date_released"]);

                                newDate = new Date(date.setDate(date.getDate() + 31))

                                release_date = newDate.getDate() + ' ' + newDate.toLocaleString('default', {
                                    month: 'long'
                                }) + ' ' + newDate.getFullYear();

                                total_a = "Total Payable Amount:" + "<b>" + totalamount + "</b>";

                                month_a = "Monthly Payable Amount:" + "<b>" + Math.floor(monthamount) + "</b>";

                                penalty_a = "Overdue Payable Amount:" + "<b>" + Math.floor(overdue) + "</b>";
                            } else if (value["status"] == "3") {
                                status = "<b style='color:white;background-color:#007bff;border-radius:10px;padding:8px;'>Complete</b>";
                                date = new Date(value["date_released"]);

                                newDate = new Date(date.setDate(date.getDate() + 31))

                                release_date = newDate.getDate() + ' ' + newDate.toLocaleString('default', {
                                    month: 'long'
                                }) + ' ' + newDate.getFullYear();
                                total_a = "Total Payable Amount:" + "<b>" + totalamount + "</b>";

                                month_a = "Monthly Payable Amount:" + "<b>" + Math.floor(monthamount) + "</b>";

                                penalty_a = "Overdue Payable Amount:" + "<b>" + Math.floor(overdue) + "</b>";
                            } else {
                                status = "<b style='color:white;background-color:#007bff;border-radius:10px;padding:8px;'>For Approval</b>";
                                release_date = "N/A";
                                total_a = "";
                                month_a = "";
                                penalty_a = "";
                            }


                            tblprints += `<tr>
                            <td>${i++}</td>
                            <td>Name:<b>${value["lname"] +"  " +value["fname"] + "  "+value["mname"]+"<br>"}</b>
                            Contact:<b>${value["contact_no"]+"<br>"}</b>
                            Address:<b>${value["address"]+"<br>"}</b>

                            </td>

                            <td>
                            Reference:<b>${value["ref_no"]+"<br>"}</b>
                            Loan Type:<b>${value["type_name"]+"<br>"}</b>
                            Plan:<b>${value["month"]+" "}month [${value["interest_rate"]}%,${value["penalty_rate"]}]</b><br>
                            Amount:<b>${value["amount"]}</b></br>


                            Total Payable Amount:<b>${totalamount}</b><br>
                            Monthly Payable Amount:<b>${ Math.floor(monthamount)}</b><br>
                            
                            Overdue Payable Amount:<b>${Math.floor(overdue) }</b>
                            
                            
                            </td>


                            <td>
                 
                            
                              ${release_date+"<br>"}

                              ${total_a+"<br>"}
                              ${month_a+"<br>"}
                              ${penalty_a+"<br>"}

                            </td>
                           
                            <td>
                            ${status}
                            </td>
                                
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

                            </td>
                            </tr>`;
                        });
                        $("#load").html(tblprints);
                    }

                });
            }
            load();
            console.log(Math.floor(604.1666666666666));

            $("tbody").on("click", ".delete_borrow", function() {
                var id = $(this).data('id');



                $.ajax({
                    url: "/deleteloanlist",
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
        </script>




        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="col-lg-12">
                                <form action="" id="loan-application">
                                    <input type="hidden" name="id" value="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Borrower</label>

                                            <select class="form-control" id="borrow">
                                                <option disabled="disabled" selected>Please Select Here</option>

                                            </select>
                                            <script>
                                                $.ajax({
                                                    url: "/showborrow",
                                                    type: "get",

                                                    success: function(data) {



                                                        var print = JSON.parse(data);

                                                        var tblprint = "";
                                                        var i = 1;
                                                        $.each(print, function(key, value) {

                                                            tblprint += `
                                                                
                                                                <option value='${value["id"]}'>${value["lname"] +"  " +value["fname"] + "  "+value["mname"]} | ${value["tax_id"]+"<br>"}</option> `;
                                                        });

                                                        $("#borrow").append(tblprint);
                                                    }
                                                });
                                            </script>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Loan Type</label>
                                            <select class="form-control" id="ltype">
                                                <option disabled="disabled" selected>Please Select Here</option>

                                            </select>
                                            <script>
                                                $.ajax({
                                                    url: "/showtype",
                                                    type: "get",

                                                    success: function(data) {

                                                        var print = JSON.parse(data);

                                                        var tblprint = "";
                                                        var i = 1;
                                                        $.each(print, function(key, value) {

                                                            tblprint += `
                                                                                    
                                                                                    <option value='${value["id"]}'>${value["type_name"]}</option> 

                                                                                    `;
                                                        });

                                                        $("#ltype").append(tblprint);
                                                    }
                                                });
                                            </script>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Loan Plan</label>
                                            <select class="form-control" id="lplan">
                                                <option disabled="disabled" selected>Please Select Here</option>

                                            </select>
                                            <script>
                                                $.ajax({
                                                    url: "/showplan",
                                                    type: "get",

                                                    success: function(data) {

                                                        var print = JSON.parse(data);

                                                        var tblprint = "";
                                                        var i = 1;
                                                        $.each(print, function(key, value) {

                                                            tblprint += ` <option value='${value["id"]}'>${value["month"]} month/s[${value["interest_rate"]} %, ${value["penalty_rate"]} % ]</option> `;
                                                        });

                                                        $("#lplan").html(tblprint);
                                                    }
                                                });
                                            </script>
                                            <small>months [ interest%,penalty% ]</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Loan Amount</label>
                                            <input type="number" name="amount" class="form-control text-right amt" step="any" id="" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Purpose</label>
                                            <textarea name="purpose" id="purpose" cols="30" rows="2" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group col-md-2 offset-md-2 .justify-content-center">
                                            <label class="control-label">&nbsp;</label>
                                            <button class="btn btn-primary btn-sm btn-block align-self-end calculate" type="button">Calculate</button>
                                        </div>
                                    </div>

                                    <script>
                                        $(".calculate").click(function(e) {
                                            e.preventDefault();
                                            var lplan = $("#lplan").val();
                                            var amt = $(".amt").val();

                                            $.ajax({
                                                url: "calculate",
                                                type: "get",
                                                data: {
                                                    "lplan": lplan,
                                                    "amt": amt
                                                },
                                                success: function(data) {

                                                    var print = JSON.parse(data);


                                                    if (print["status"] == "100") {

                                                        $(".total_payout").text(print["total_payout"]);
                                                        $(".month_payout").text(print["month_payout"]);
                                                        $(".panelty_payout").text(print["panelty_payout"]);
                                                        $("#calculation_table").removeClass("d-none");
                                                    }

                                                }
                                            });
                                        });
                                    </script>


                                    <div id="calculation_table" class="d-none">
                                        <hr>
                                        <table width="100%">
                                            <tbody>
                                                <tr>
                                                    <th class="text-center" width="33.33%">Total Payable Amount</th>
                                                    <th class="text-center" width="33.33%">Monthly Payable Amount</th>
                                                    <th class="text-center" width="33.33%">Penalty Amount</th>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><small class="total_payout"></small></td>
                                                    <td class="text-center"><small class="month_payout"></small></td>
                                                    <td class="text-center"><small class="panelty_payout"></small></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                    </div>

                                    <div id="row-field">
                                        <div class="row ">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary btn-sm save_data">Save</button>
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <script>
                                    $(document).ready(function() {
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                            }
                                        });
                                        $(".save_data").click(function(e) {
                                            e.preventDefault();

                                            var bid = $("#borrow").val();
                                            var ltid = $("#ltype").val();
                                            var lpid = $("#lplan").val();
                                            var amt = $(".amt").val();
                                            var purpose = $("#purpose").val();

                                            if (bid && ltid && lpid && amt && purpose) {

                                                $.ajax({

                                                    url: "/loanlist",
                                                    type: "post",
                                                    data: {
                                                        "bid": bid,
                                                        "ltid": ltid,
                                                        "lpid": lpid,
                                                        "amt": amt,
                                                        "purpose": purpose
                                                    },
                                                    success: function(data) {

                                                        console.log(data);
                                                        var msg = JSON.parse(data);

                                                        if (msg["status"] == "100") {

                                                            $("#msg").text("Record Insert Successfully........");

                                                            load();

                                                            $("#exampleModal").modal("hide");


                                                        } else if (msg["status"] == "200") {

                                                            $("#msg").text("Record Not Insert Successfully........");
                                                            load();
                                                            $("#exampleModal").modal("hide");

                                                        }
                                                    }
                                                });
                                            } else {
                                                $("#msg").text("Please Select All The Input");
                                            }









                                        });
                                    });
                                </script>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Edit Model -->

        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="col-lg-12">
                                <form action="" id="loan-application">
                                    <input type="hidden" name="id" id="eid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Borrower</label>

                                            <select class="form-control" id="eborrow">
                                                <option disabled="disabled" selected>Please Select Here</option>

                                            </select>
                                            <script>
                                                $.ajax({
                                                    url: "/showborrow",
                                                    type: "get",

                                                    success: function(data) {



                                                        var print = JSON.parse(data);

                                                        var tblprint = "";
                                                        var i = 1;
                                                        $.each(print, function(key, value) {

                                                            tblprint += `
                                                                
                                                                <option value='${value["id"]}'>${value["lname"] +"  " +value["fname"] + "  "+value["mname"]} | ${value["tax_id"]+"<br>"}</option> `;
                                                        });

                                                        $("#eborrow").append(tblprint);
                                                    }
                                                });
                                            </script>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Loan Type</label>
                                            <select class="form-control" id="eltype">
                                                <option disabled="disabled" selected>Please Select Here</option>

                                            </select>
                                            <script>
                                                $.ajax({
                                                    url: "/showtype",
                                                    type: "get",


                                                    success: function(data) {

                                                        var print = JSON.parse(data);

                                                        var tblprint = "";
                                                        var i = 1;
                                                        $.each(print, function(key, value) {

                                                            tblprint += `
                                                                                    
                                                                                    <option value='${value["id"]}'>${value["type_name"]}</option> 

                                                                                    `;
                                                        });

                                                        $("#eltype").append(tblprint);
                                                    }
                                                });
                                            </script>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Loan Plan</label>
                                            <select class="form-control" id="elplan">
                                                <option disabled="disabled" selected>Please Select Here</option>

                                            </select>
                                            <script>
                                                $.ajax({
                                                    url: "/showplan",
                                                    type: "get",

                                                    success: function(data) {

                                                        var print = JSON.parse(data);

                                                        var tblprint = "";
                                                        var i = 1;
                                                        $.each(print, function(key, value) {

                                                            tblprint += ` <option value='${value["id"]}'>${value["month"]} month/s[${value["interest_rate"]} %, ${value["penalty_rate"]} % ]</option> `;
                                                        });

                                                        $("#elplan").html(tblprint);
                                                    }
                                                });
                                            </script>
                                            <small>months [ interest%,penalty% ]</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Loan Amount</label>
                                            <input type="number" name="amount" class="form-control text-right eamt" step="any" id="" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Purpose</label>
                                            <textarea name="purpose" id="epurpose" cols="30" rows="2" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group col-md-2 offset-md-2 .justify-content-center">
                                            <label class="control-label">&nbsp;</label>
                                            <button class="btn btn-primary btn-sm btn-block align-self-end ecalculate" type="button">Calculate</button>
                                        </div>
                                    </div>

                                    <script>
                                        $(".calculate").click(function(e) {
                                            e.preventDefault();
                                            var lplan = $("#lplan").val();
                                            var amt = $(".amt").val();

                                            $.ajax({
                                                url: "calculate",
                                                type: "get",
                                                data: {
                                                    "lplan": lplan,
                                                    "amt": amt
                                                },
                                                success: function(data) {

                                                    var print = JSON.parse(data);


                                                    if (print["status"] == "100") {

                                                        $(".total_payout").text(print["total_payout"]);
                                                        $(".month_payout").text(print["month_payout"]);
                                                        $(".panelty_payout").text(print["panelty_payout"]);
                                                        $("#calculation_table").removeClass("d-none");
                                                    }

                                                }
                                            });
                                        });
                                    </script>


                                    <div id="calculation_table">
                                        <hr>
                                        <table width="100%">
                                            <tbody>
                                                <tr>
                                                    <th class="text-center" width="33.33%">Total Payable Amount</th>
                                                    <th class="text-center" width="33.33%">Monthly Payable Amount</th>
                                                    <th class="text-center" width="33.33%">Penalty Amount</th>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><small class="etotal_payout"></small></td>
                                                    <td class="text-center"><small class="emonth_payout"></small></td>
                                                    <td class="text-center"><small class="epanelty_payout"></small></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">&nbsp;</label>
                                            <select class="custom-select browser-default" name="status" id="approve">
                                                <option value="0">For Approval</option>
                                                <option value="1">Approved</option>
                                                <option value="2">Released</option>
                                                <option value="3">Complete</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="row-field">
                                        <div class="row ">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary btn-sm update_data">Update</button>
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <script>
                                    $(document).ready(function() {
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                            }
                                        });
                                        $(".update_data").click(function(e) {
                                            e.preventDefault();

                                            var id = $("#eid").val();
                                            var bid = $("#eborrow").val();
                                            var ltid = $("#eltype").val();
                                            var lpid = $("#elplan").val();
                                            var amt = $(".eamt").val();
                                            var purpose = $("#epurpose").val();
                                            var approve = $("#approve").val();
                                            console.log(approve);
                                            if (bid && ltid && lpid && amt && purpose && approve) {
                                                $.ajax({

                                                    url: "/updateloanlist",
                                                    type: "post",
                                                    data: {
                                                        "id": id,
                                                        "bid": bid,
                                                        "ltid": ltid,
                                                        "lpid": lpid,
                                                        "amt": amt,
                                                        "purpose": purpose,
                                                        "approve": approve
                                                    },
                                                    success: function(data) {

                                                        console.log(data);
                                                        var msg = JSON.parse(data);

                                                        if (msg["status"] == "100") {

                                                            $("#msg").text("Record Update Successfully........");



                                                            $("#editModal").modal("hide");

                                                            load();


                                                        } else if (msg["status"] == "200") {

                                                            $("#msg").text("Record Not Update Successfully........");

                                                            $("#editModal").modal("hide");
                                                            load();
                                                        }
                                                    }
                                                });
                                            } else {
                                                $("#msg").text("Please Select All The Input");
                                            }



                                        });
                                    });
                                </script>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script>
            $("#load").on("click", ".edit_borrow", function() {
                var id = $(this).data('id');
                console.log(id);



                $.ajax({
                    url: "/editloan",
                    type: "get",
                    data: {
                        "id": id
                    },
                    success: function(data) {

                        console.log(data);
                        var print = JSON.parse(data);



                        $("#eborrow option[value='" + print['borrower_id'] + "']").attr("selected", "selected");
                        $("#eltype option[value='" + print['loan_type_id'] + "']").attr("selected", "selected");
                        $("#elplan option[value='" + print['plan_id'] + "']").attr("selected", "selected");
                        $(".eamt").val(print["amount"]);
                        $("#epurpose").val(print["purpose"]);
                        $("#eid").val(print["id"]);

                        var lplan = $("#elplan").val();
                        var amt = $(".eamt").val();

                        $.ajax({
                            url: "calculate",
                            type: "get",
                            data: {
                                "lplan": lplan,
                                "amt": amt
                            },
                            success: function(data) {


                                console.log(data);
                                var print = JSON.parse(data);


                                if (print["status"] == "100") {

                                    $(".etotal_payout").text(print["total_payout"]);
                                    $(".emonth_payout").text(print["month_payout"]);
                                    $(".epanelty_payout").text(print["panelty_payout"]);
                                    $("#approve option[value='" + print['0'] + "']").attr("selected", "selected");
                                }

                            }
                        });
                    }
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




</body>

</html>