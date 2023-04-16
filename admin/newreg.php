<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
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
<body>
<section class="vh-100 bg-image"
  style="background-image: url('../img/logingfgbg.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-3">
              <h2 class="text-uppercase text-center mb-3">Create an account</h2>

              <form action="newregcode.php" method="POST">

                <div class="form-outline mb-3">
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg"  placeholder="Full Name"/>
                  
                </div>
                <div class="form-outline mb-3">
                  <input type="text" name="age" id="form3Example1cg" class="form-control form-control-lg"  placeholder="Age"/>
                 
                </div>
                <div class="form-outline mb-3">
                  <input type="text" name="gender" id="form3Example1cg" class="form-control form-control-lg"  placeholder="Gender"/>
                
                </div>
                <div class="form-outline mb-3">
                  <input type="text" name="phoneno" id="form3Example1cg" class="form-control form-control-lg"  placeholder="Phone number"/>
                 
                </div>
                <div class="form-outline mb-3">
                  <input type="text"name="email"  id="form3Example1cg" class="form-control form-control-lg"  placeholder="Email id"/>
                  
                </div>
                <div class="form-outline mb-3">
                  <input type="text" name="aadharno" id="form3Example1cg" class="form-control form-control-lg"  placeholder="Aadhar number"/>
                
                </div>
                
                <div class="form-outline mb-3">
                  <input type="text" name="patientid" id="form3Example1cg" class="form-control form-control-lg"  placeholder="Patientid"/>
                 
                </div>
                <div class="form-outline mb-3">
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg"  placeholder="Password"/>
                
                </div>
                <div class="form-outline mb-3">
                  <input type="password" name="confirm_password" id="form3Example4cg" class="form-control form-control-lg"  placeholder="Confirm Password"/>
                 
                </div>
                

               

                <div class="d-flex justify-content-center">
                  <button type="submit" 
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><b>Register</b></button>
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