<!DOCTYPE html>

<html lang="en">
    <style>
        #loading {
            position: fixed;
            width: 100%;
            height: 100vh;
            background: #fff url('./img/1490.gif') no-repeat center center;
            z-index: 999999;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .parent_div {
            width: 100vw !important;
            height: 100vh !important;
            display: grid !important;
            place-items: center !important;

        }

        .child_div {
            width: 100vw !important;
            height: 70vh !important;
        }
    </style>
    <style>
        .gradient-custom-3 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }

        .gradient-custom-4 {
            /* fallback for old browsers */
            background: #84fab0;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }
    </style>

    <head>
        <link href="img/hospitallogo.webp" rel="icon">
        <link rel="stylesheet" href="css2/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hospital management system</title>


    </head>

   

        <body onload="myFunction()" class="gfgbg">
        <section class="vh-100 bg-image"
  style="background-image: url('img/logingfgbg.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div id="loading"></div>
           
            <div class="text-center parent_div">

                <div class="row child_div">
                    <p style="margin-bottom: 3rem;"><b class="MAIN-HEAD"></b></p>
                    <div class="col-4 ">
                        <div class="card shadow " style="width: 18rem;">
                            <img src="img/patientgfg.png" class="card-img-top" alt="..." style="height: 18rem;">
                            <div class="card-body">

                                <a href="user/stu_login.php" class="btn btn-primary">PATIENT LOGIN</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card shadow " style="width: 18rem;">
                            <img src="img/admin_logo.webp" class="card-img-top" alt="..." style="height: 18rem;">
                            <div class="card-body ">
                                <a href="admin/admin_login.php" class="btn btn-primary ">Doctor LOGIN</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card shadow " style="width: 18rem;">
                            <img src="img/admin_logo.webp" class="card-img-top" alt="..." style="height: 18rem;">
                            <div class="card-body ">
                                <a href="admin/reg_admin.php" class="btn btn-primary ">ADMIN LOGIN</a>
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  </div>
        </section>
            <script>
               
                var preloader = document.getElementById("loading");
               
                function myFunction() {
                    preloader.style.display = 'none';
                };
            </script>
        </body>

</html>