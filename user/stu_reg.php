<!DOCTYPE html>
<html lang="en">
<style>
    
  #loading{
  top: 0px;
    position: fixed;
    width: 100%;
    height: 100%;
    background: #fff
    url('../img/1490.gif')
     no-repeat center center;	
    z-index: 99999;
  }
  
</style>
    <head>
        <meta charset="utf-8">
        <link href="../img/RAIT_LOGO.png" rel="icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <title>Student-Register</title>
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
            height: 80vh !important;

        }
        </style>
    </head>

    <body onload="myFunction()">
    <div id="loading"></div>
        <div class=" parent_div">
            <div class=" child_div">
                <div class="frm m-2">
                    <div class="  align-items-center ">
                        <div class="container ">
                            <div class="row justify-content-center">
                                <div class="col-md-4 ">
                                    <div class="card shadow" style="border-radius: 1rem;">
                                        <div class="card-body m-2">

                                            <h1 class="mb-2 text-center">REGISTER</h1>

                                            <form action="registration.php" method="POST" autocomplete="off">

                                                <div class="form-outline  ">
                                                    <input type="text" id="form6Example3" name="RollNo" class="form-control " placeholder="Roll Number" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>

                                                <div class="form-outline ">
                                                    <input type="text" id="form6Example3" name="username" class="form-control" placeholder="Full name" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>
                                                <div class="form-outline ">
                                                    <input type="text" id="form6Example3" name="Year" class="form-control" placeholder="Year" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>
                                                <div class="form-outline ">
                                                    <input type="text" id="form6Example3" name="Branch" class="form-control" placeholder="Branch" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>
                                                <div class="form-outline ">
                                                    <input type="text" id="form6Example3" name="Contactno" class="form-control" placeholder="Contact number" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>
                                                <div class="form-outline ">
                                                    <input type="email" id="form6Example3" name="Email" class="form-control" placeholder="Email" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>
                                                <div class="form-outline ">
                                                    <input type="password" id="form6Example3" name="password" class="form-control" placeholder="Password (minimum of 5 characters)" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>
                                                <div class="form-outline ">
                                                    <input type="password" id="form6Example3" name="confirm_password" class="form-control" placeholder="Confirm Password" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>

                                                <!-- 2 column grid layout with text inputs for the first and last names -->
<div class="mb-2">
<span style="text-align: center;font-size: 1rem;">Enter your information carefully, as it will appear on your concession form.Password is case sensitive ! </span>
</div>
                                                <!-- Submit button -->
                                                <div class="col-md-12 " style="text-align: center !important;margin: auto !important;">
                                                    <button type="submit" class="col-md-4 btn text-white btn-rounded "style="background-color: #737ee0;">Submit</button>
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
                        Already have an account
                    </span>

                    <a class="txt2" href="stu_login.php" style="text-decoration: none;">
                        Login
                    </a>
                </div>
            </div>
        </div>
        <script>
		
		var preloader = document.getElementById("loading");
		

		function myFunction(){
			preloader.style.display = 'none';
		};
	</script>
    <style>
        @media(max-width:400px) {
    html {
      font-size: 50% !important;
    }
    .child_div {
            width: 80vw !important;
            height: 60vh !important;
    }
        }
    </style>
    </body>

</html>