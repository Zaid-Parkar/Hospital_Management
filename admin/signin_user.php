<?php
include "details.php";

?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    .card{
            background: #B2FEFA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0ED2F7, #B2FEFA);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0ED2F7, #B2FEFA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
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

  <body>
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-1">Create Entry</h2>

                  <form action="caseid.php" method="POST">
                    <div class="form-outline mb-1">
                      <input type="text" name="patientid" id="form3Example4cg" class="form-control form-control-lg" placeholder="Patientid" />
                      <label class="form-label" for="form3Example4cg"></label>
                    </div>
                    <div class="form-outline mb-1">
                      <input type="text" name="admitted" id="form3Example4cg" class="form-control form-control-lg" placeholder="Admitted on" />
                      <label class="form-label" for="form3Example4cg"></label>
                    </div>
                    <div class="form-outline mb-1">
                      <input type="text" name="medicalrsn" id="form3Example4cg" class="form-control form-control-lg" placeholder="Cause" />
                      <label class="form-label" for="form3Example4cg"></label>
                    </div>
                    <div class="form-outline mb-1">
                      <input type="text" name="drassign" id="form3Example4cg" class="form-control form-control-lg" placeholder="Dr assigned" />
                      <label class="form-label" for="form3Example4cg"></label>
                    </div>




                    <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                    </div>

                    <!-- <p class="text-center text-muted mt-1 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p> -->

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>

</html>