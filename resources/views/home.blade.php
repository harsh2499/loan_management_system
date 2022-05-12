<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        .nav {
            background-color: #000000c4;
            height: 300px;
            border-radius: 2px;
        }

        .nav-link {
            color: cornsilk;
            font-weight: 600;
            padding: 12px;
            line-height: 33px;
            border-bottom-style: groove;
            border-bottom-color: cornflowerblue;
            border-bottom-width: 2px;
            text-align: center;
        }

        .button {
            display: none;
        }



        @media only screen and (max-width: 600px) {

            .menu {
                transition: all 0.8s ease-in-out 0s;
                float: left;


            }

            .open {
                margin-left: -350px;

            }

            .button {
                display: block;
            }

        }
    </style>

</head>

<body>
    <button id="load" class="btn btn-primary button"><i class="bi bi-list"></i></button>

    <div class="container-fluid">

        <div class="row">
            <div class="col-6 col-sm-4 col-md-2  col-lg-2 col-xl-2 menu" style="background-color:cadetblue;height: 41pc; ">

                <div class="">
                    <center><img src="https://logos-world.net/wp-content/uploads/2020/12/Lays-Logo.png" height=100 width=200 class="img-fluid"></center>
                    <nav class="nav flex-column">
                        <a class="nav-link " href="https://getbootstrap.com/docs/5.1/components/navs-tabs/">Home</a>
                        <a class="nav-link" href="/welcome">About</a>
                        <a class="nav-link" href="https://stackoverflow.com/questions/596467/how-do-i-convert-a-float-number-to-a-whole-number-in-javascript">Contact Us</a>
                        <a class="nav-link ">Faq</a>
                    </nav>

                </div>
            </div>

            <div class="col-6 col-sm-8 col-md-10  col-lg-10 col-xl-10">

            </div>
        </div>

    </div>
    <script>
        $("#load").on("click", function() {
            $this = $(this);
            $nav = $('.menu');
            $nav.toggleClass('open');
        });
    </script>
    <p></p>
</body>

</html>