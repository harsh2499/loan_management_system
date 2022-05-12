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

    .modal-dialog.large {
        width: 80% !important;
        max-width: unset;
    }

    .modal-dialog.mid-large {
        width: 50% !important;
        max-width: unset;
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

    <x-header />
    <script>
        $('.nav-users').addClass('active')
    </script>
    <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
    </div>
    <main id="view-panel">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary float-right btn-sm" id="new_user" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> New user</button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="card col-lg-12">
                    <div class="card-body">
                        <table class="table-striped table-bordered col-md-12">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

<script>
                function load() {
                                $.ajax({
                                    url: "/showuser",
                                    type: "get",

                                    success: function(data) {


                                        console.log(data);
                                        var print = JSON.parse(data);

                                        var tblprint = "";
                                        var i = 1;
                                        $.each(print, function(key, value) {

                                            tblprint += `<tr>
                                <td>${i++}</td>
                                <td>
                                ${value["email"]}
                                </td>
                                <td>
                                ${value["username"]}
                                </td>
                                            
                                
                                <td>
                                <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" id="useredit" data-id="${value['id']}" data-bs-toggle="modal" data-bs-target="#editmodel">Edit</a>
                                    <a class="dropdown-item" href="#" id="userdelete" data-id="${value['id']}">Delete</a>
                                    
                                   </div>
                                </div>
                             </td>
                            </tr>`;
                                        });

                                        $("tbody").html(tblprint);
                                    }
                                });

                            }

                            load();


                            $("tbody").on("click", "#userdelete", function() {
                                var id = $(this).data('id');


                                console.log(id);

                                $.ajax({
                                    url: "/deleteuser",
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



                            $("tbody").on("click", "#useredit", function() {
                                 var id = $(this).data('id');
                                console.log(id);
        $.ajax({
          url: "/edituser",
          type: "get",
          data: {
            "id": id
          },
          success: function(data) {


            console.log(data);
            var msg = JSON.parse(data);



          
              $("#eids").val(msg["data"]["0"]["id"]);
              $("#eemails").val(msg["data"]["0"]["email"]);
              $("#eusernames").val(msg["data"]["0"]["username"]);

              $("#epasswords").val(msg["data"]["0"]["password"]);
              

              $("#etypes option[value='" +msg["data"]["0"]["type"]+ "']").attr("selected", "selected");

            
           
          }
        });
      });
</script>
    </main>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">

                        <form action="" id="manage-user">
                            <input type="hidden" name="id" >
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="" required="">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" value="" required="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" value="" required="">
                            </div>
                            <div class="form-group">
                                <label for="type">User Type</label>
                                <select name="type" id="type" class="custom-select">
                                    <option value="1">Admin</option>
                                    <option value="2">Staff</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary usersave">Save</button>
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
            $(".usersave").click(function() {
                var manage_user = $("#manage-user").serialize();

                $.ajax({
                    url: "/saveuser",
                    type: "post",
                    data: manage_user,
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


        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
            $(".update-user").click(function() {
                var update_user = $("#update-user").serialize();
                
                console.log(update_user);
			$.ajax({
                    url: "/updateuser",
                    type: "post",
					data: update_user,
                    success: function(data) {

                        
                       
                        var msg = JSON.parse(data);

                        if (msg["status"] == "100") {
                          
                            $("#msg").text("Record Update Successfully........");


						
                            load();

                            $("#editmodal").modal("hide");
                          

                        } else if (msg["status"] == "200") {
                           
                            $("#msg").text("Record Not Update Successfully........");

                            $("#editmodal").modal("hide");
                         
                        }

                    }
                });

            });

        });

    </script>
<div class="modal fade" id="editmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">

<form action="" id="update-user">
    <input type="hidden" name="uid" id="eids">
    <div class="form-group">
        <label for="name">Email</label>
        <input type="text" name="uemail" id="eemails" class="form-control" >
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="uusername" id="eusernames" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="upassword" id="epasswords" class="form-control" >
    </div>
    <div class="form-group">
        <label for="type">User Type</label>
        <select name="utype" id="etypes" class="custom-select">
            <option value="1">Admin</option>
            <option value="2">Staff</option>
        </select>
    </div>
</form>
</div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary update-user" data-bs-dismiss="modal">Update</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

</body>

</html>