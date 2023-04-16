<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <title>Admin-Login</title>
        <link rel="icon" href="../img/RAIT_LOGO.png">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
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
            width: 98vw !important;
            height: 50vh !important;

        }
        .card1{
            background: #B2FEFA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0ED2F7, #B2FEFA);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0ED2F7, #B2FEFA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }     </style>
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
    </head>

    <body class="background">
    <section class="vh-100 bg-image"
  style="background-image: url('img/logingfgbg.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class=" parent_div">
            <div class=" child_div">

                <div class="frm m-2">
                    <div class="  align-items-center mt-5">
                        <div class="container ">
                            <div class="row justify-content-center">
                                <div class="col-md-3 ">
                                    <div class="card shadow" style="border-radius: 1rem;">
                                        <div class="card-body m-2">

                                            <h1 class="mb-5 text-center">LOGIN</h1>

                                            <form action="madminlogin.php" method="POST" autocomplete="off">

                                                <div class="form-outline mb-1 ">
                                                    <input type="text" id="form6Example3" name="username" class="form-control " placeholder="Username" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>

                                                <div class="form-outline mb-1">
                                                    <input type="password" id="form6Example3" name="password" class="form-control" placeholder="Password" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>

                                                <!-- 2 column grid layout with text inputs for the first and last names -->

                                                <!-- Submit button -->
                                                <div class="col-md-12 mt-5" style="text-align: center !important;margin: auto !important;">
                                                    <button type="submit" name="submit" class="col-md-4 btn text-white  btn-rounded "style="background-color:#737ee0;">login</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        Don’t have an account?
                    </span>

                    <a class="txt2" href="stu_reg.php" style="text-decoration: none;">
                        contact admin
                    </a>
                </div>
            </div>
        </div>
  </div>
    </section>
    </body>

</html>