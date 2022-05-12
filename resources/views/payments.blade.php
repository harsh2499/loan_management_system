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
    <style>
        .modal-dialog {
            max-width: 871px;
        }

        a.nav-item {
            bottom: -50px;
        }
    </style>


</head>

<body>


    <x-header />

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->


    <!-- Button trigger modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container-fluid">
                        <div class="col-lg-12">
                            <form id="manage-payment" data-select2-id="[object HTMLInputElement]">
                                <input type="hidden" id="loans_id">
                                <div class="row">
                                    <div class="col-md-4" data-select2-id="5">
                                        <div class="form-group" data-select2-id="4">
                                            <label for="" class="control-label">Loan Reference No.</label>
                                            <select class="form-control" id="reference">
                                                <option disabled="disabled" selected>Please Select Here</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <script>
                                    $.ajax({
                                        url: "/newpayment",
                                        type: "get",
                                        success: function(data) {
                                            var print = JSON.parse(data);

                                            var tblprint = "";
                                            var i = 1;
                                            $.each(print, function(key, value) {

                                                tblprint += `
                                                                                    
                         <option value='${value["id"]}'>${value["ref_no"]}</option> 

                            `;
                                            });

                                            $("#reference").append(tblprint);
                                        }
                                    });



                                    $("#reference").on('change', function() {
                                        var id = $(this).val();




                                        $.ajax({
                                            url: "/paymentdetail",
                                            type: "get",
                                            data: {
                                                "id": id
                                            },
                                            success: function(data) {


                                                var print = JSON.parse(data);

                                                console.log(data);

                                                if (print["status"] == "100") {


                                                    $("#pay").val(print[0]["lname"] + "  " + print[0]["fname"] + "  " + print[0]["mname"]);
                                                    var month_amount = Math.trunc((parseInt(print[0]["amount"]) + (print[0]["amount"] * (parseInt(print[0]["interest_rate"]) / 100))) / parseInt(print[0]["month"]));
                                                    $("#ma").text(month_amount);

                                                    $("#loans_id").val(print[0]["id"]);


                                                    if (print[0]["date_released"] > print[0]["next_payment_date"]) {
                                                        var penelty = Math.trunc((parseInt(print[0]["amount"]) + (print[0]["amount"] * (parseInt(print[0]["interest_rate"]) / 100))) / parseInt(print[0]["month"]) * (parseInt(print[0]["penalty_rate"]) / 100));
                                                        $("#py").text(penelty);
                                                        var total_payable_amount = month_amount + penelty;
                                                        $("#pa").text(total_payable_amount);

                                                        $(".amt").val(total_payable_amount);
                                                        $("#load").removeClass("d-none");
                                                    } else {
                                                        var penelty = "0";
                                                        $("#py").text(penelty);
                                                        var total_payable_amount = month_amount;
                                                        $("#pa").text(total_payable_amount);

                                                        $(".amt").val(total_payable_amount);
                                                        $("#load").removeClass("d-none");
                                                    }



                                                } else if (print["status"] == "200") {
                                                    $("#load").addClass("d-none");
                                                } else {
                                                    $("#load").addClass("d-none");
                                                }
                                            }
                                        });
                                    });
                                </script>

                                <div id="load" class="d-none">
                                    <div class="row" id="fields"><br>

                                        <div class="col-lg-12">
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="">Payee</label>
                                                        <input name="payee" class="form-control" id="pay">
                                                    </div>
                                                </div>

                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <p><small>Monthly amount:<b id="ma"></b></small></p>
                                                    <p><small>Penalty :<b id="py"></b></small></p>
                                                    <p><small>Payable Amount :<b id="pa"></b></small></p>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="">Amount</label>
                                                        <input type="text" name="amount" class="form-control text-right amt" disabled>
                                                        <input type="hidden" name="penalty_amount" value="11.777777777778">
                                                        <input type="hidden" name="loan_id" value="9">
                                                        <input type="hidden" name="overdue" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary savepayment">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->

    </div>


    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
            $(".savepayment").click(function(e) {
                e.preventDefault();


                var loan_id = $("#loans_id").val();
                var payee = $("#pay").val();
                var amt = $(".amt").val();
                var penelty = $("#py").text();




                $.ajax({
                    url: "/savepayment",
                    type: "post",
                    data: {
                        "loan_id": loan_id,
                        "payee": payee,
                        "amt": amt,
                        "penelty": penelty
                    },
                    success: function(data) {



                        var msg = JSON.parse(data);

                        if (msg["status"] == "100") {
                            $("#exampleModal").modal("hide");

                            $("#msg").text("Record Save Successfully........");



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









    <main id="view-panel">

        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <large class="card-title">
                            <b>Payment List</b>
                            <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                New Payment
                            </button>
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
                                    <th class="text-center">Loan Reference No</th>
                                    <th class="text-center">Payee</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Penalty</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>

                        <script>
                            function load() {
                                $.ajax({
                                    url: "/showpayment",
                                    type: "get",

                                    success: function(data) {



                                        var print = JSON.parse(data);

                                        var tblprint = "";
                                        var i = 1;
                                        $.each(print, function(key, value) {

                                            tblprint += `<tr> 
                                            <td>${i++}</td>
                                            <td>${value["ref_no"]}</td>
                                            <td>${value["payee"]}</td>
                                            <td>${value["amount"]}</td>
                                            <td>${value["penelty_amount"]}</td>
                                            <td>
                                                        
                                        <button class="btn btn-sm btn-danger delete_borrow bbb" id="dtype" type="button" data-id="${value['id']}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></button>
                                            </td>
                                          
                                            </tr>`;
                                        });

                                        $("tbody").html(tblprint);
                                    }
                                });

                            }

                            load();

                            $("tbody").on("click", ".delete_borrow", function() {
                                var id = $(this).data('id');

                                $.ajax({
                                    url: "/deletepayment",
                                    type: "get",
                                    data: {
                                        "id": id
                                    },
                                    success: function(data) {

                                        load();

                                    }
                                });
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>
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