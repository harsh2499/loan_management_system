<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin | Loan Management System</title>


    <meta content="" name="descriptison">
    <meta content="" name="keywords">



    <!-- Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">

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
    a.nav-item{
        bottom: -50px;
    }
    body {
        background: #80808045;
    }

    .modal-dialog.large {
        width: 80% !important;
        max-width: unset;
    }

    .modal-dialog.mid-large {
        width: 50% !important;
        max-width: unset;
    }

    .col-6.abb {
        padding: 59px;

        padding-left: 318px;
    }




    .geeks {

        position: absolute;
        background-color: aliceblue;
        left: 44pc;

    }

    p {

        padding: 9px;
        color: blueviolet;
    }

    .geeks::before {
        content: "";
        position: absolute;
        top: -2px;
        left: -2px;
        width: 0;
        height: 0;
        background: transparent;
        border: 2px solid transparent;
    }

    .geeks::before {
        animation: animate 1s linear forwards;
    }

    @keyframes animate {
        0% {
            width: 0;
            height: 0;
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: transparent;
        }

        50% {
            width: 100%;
            height: 0;
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: transparent;
        }

        100% {
            width: 100%;
            height: 100%;
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: transparent;
        }
    }

    .geeks::after {
        content: "";
        position: absolute;
        top: -2px;
        left: -2px;
        width: 0;
        height: 0;
        background: transparent;
        border: 2px solid transparent;
    }

    .geeks::after {
        animation: animates 2s linear forwards infinite;
    }

    @keyframes animates {
        0% {
            width: 0;
            height: 100%;
            border-bottom-width: 1px;
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: transparent;
        }

        50% {
            width: 0;
            height: 100%;
            border-bottom-width: 1px;
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: red;
            border-left-color: transparent;
        }

        100% {
            width: 100%;
            height: 100%;
            border-bottom-width: 1px;
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: red;
            border-left-color: transparent;
        }
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

        h6 {
            font-size: 1rem;
            border-bottom-color: darkgray;
            border-bottom-width: 1px;
            border-bottom-style: double;
            padding: 18px;
            color: brown;
            text-align: center;
        }
    </style>

  
    <style>
    </style>
    <x-header />

    <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="eid">
                    <div class="form-group">
                        <label class="control-label">Type</label>
                        <textarea name="type_name" id="edit_type_name" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea name="description" id="edit_description" cols="30" rows="2" class="form-control"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary update">Update</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>



                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row" style="background-color:white;">

            <div class="col-6 abb">
                <form>
                    <h6>Loan Type Form</h6>

                    <input type="hidden" name="id" id="id">

                    <label class="control-label">Type</label>
                    <textarea name="type_name" id="type_name" cols="30" rows="2" class="form-control"></textarea>


                    <label class="control-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="2" class="form-control"></textarea>
                    <br>
                    <button class="btn btn-sm btn-primary col-sm-3 offset-md-3 confirm"> Save</button>
                    <input type="reset" class="btn btn-sm btn-success col-sm-3" type="button">

                </form>


            </div>
            <div class="col-6" style="padding: 62px;">
                <div class="geeks d-none">
                    <p id="msg"></p>
                </div>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Loan Type</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
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

                var type_name = $("#type_name").val();
                var description = $("#description").val();


                $.ajax({
                    url: "/savetype",
                    type: "POST",
                    data: {
                        "type_name": type_name,
                        "description": description
                    },
                    success: function(data) {

                        var msg = JSON.parse(data);

                        if (msg["status"] == "100") {

                            $(".geeks").removeClass("d-none");
                            $("#msg").text("Record Save Successfully........");

                            $("#type_name").val("");
                            $("#description").val("");
                            load();
                            setTimeout(function() {
                                $(".geeks").addClass("d-none");
                            }, 5000);

                        } else if (msg["status"] == "100") {
                            $(".geeks").removeClass("d-none");
                            $("#msg").text("Record NotSave Successfully........");
                            setTimeout(function() {
                                $(".geeks").addClass("d-none");
                            }, 5000);

                        } else {
                            $(".geeks").addClass("d-none");
                        }
                    }
                });

            });

        });
    </script>
    <!-- FORM Panel -->

    <!-- Table Panel -->


    <script>
        function load() {
            $.ajax({
                url: "/showtype",
                type: "get",

                success: function(data) {

                    var print = JSON.parse(data);

                    var tblprint = "";
                    var i = 1;
                    $.each(print, function(key, value) {

                        tblprint += `<tr>
                                <td>${i++}</td>
                                <td>${value["type_name"]}</td>
                                <td>${value["description"]}</td>
                                <td>
                              
                                <button type="button" class="btn btn-primary  btn-sm edit_ltype" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="${value['id']}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
                                </button>
                                <button class="btn btn-sm btn-danger delete_ltype bbb" id="dtype" type="button" data-id="${value['id']}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></button></td>
                            </tr>`;
                    });

                    $("tbody").html(tblprint);
                }
            });

        }

        load();

        $("tbody").on("click", ".delete_ltype", function() {
            var id = $(this).data('id');

            $.ajax({
                url: "/deletetype",
                type: "get",
                data: {
                    "id": id
                },
                success: function(data) {
                    var msg = JSON.parse(data);

                    if (msg["status"] == "100") {
                        $(".geeks").removeClass("d-none");
                        $("#msg").text("Record Delete Successfully........");

                        $("#type_name").val("");
                        $("#description").val("");
                        load();
                        setTimeout(function() {
                            $(".geeks").addClass("d-none");
                        }, 5000);


                    } else if (msg["status"] == "100") {
                        $(".geeks").removeClass("d-none");
                        $("#msg").text("Record Delete Not  Successfully........");
                        setTimeout(function() {
                            $(".geeks").addClass("d-none");
                        }, 5000);

                    } else {
                        $(".geeks").addClass("d-none");
                    }
                }
            });
        });


        $("tbody").on("click", ".edit_ltype", function() {
            var id = $(this).data('id');

            $.ajax({
                url: "/edittype",
                type: "get",
                data: {
                    "id": id
                },
                success: function(data) {
                    var msg = JSON.parse(data);



                    if (msg["status"] == "100") {
                        $("#eid").val(msg["data"][0]["id"]);
                        $("#edit_type_name").val(msg["data"][0]["type_name"]);
                        $("#edit_description").val(msg["data"][0]["description"]);

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
    </script>





    <script>
        $(document).ready(function() {

            $("#hided").click(function() {
                $("#exampleModal").modal("hide");
            });
        });
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
            $(".update").click(function() {


                var id = $("#eid").val();
                var type_name = $("#edit_type_name").val();
                var description = $("#edit_description").val();


                $.ajax({
                    url: "/updatetype",
                    type: "POST",
                    data: {
                        "id": id,
                        "type_name": type_name,
                        "description": description
                    },
                    success: function(data) {

                        console.log(data);
                        var msg = JSON.parse(data);

                        if (msg["status"] == "100") {
                            $(".geeks").removeClass("d-none");
                            $("#msg").text("Record Update Successfully........");


                            $("#edit_type_name").val("");
                            $("#edit_description").val("");
                            load();

                            $("#exampleModal").modal("hide");
                            setTimeout(function() {
                                $(".geeks").addClass("d-none");
                            }, 5000);


                        } else if (msg["status"] == "200") {
                            $(".geeks").removeClass("d-none");
                            $("#msg").text("Record Not Update Successfully........");

                            $("#exampleModal").modal("hide");
                            setTimeout(function() {
                                $(".geeks").addClass("d-none");
                            }, 5000);

                        } else {
                            $(".geeks").addClass("d-none");
                        }

                    }
                });

            });

        });
     
    </script>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



</body>

</html>