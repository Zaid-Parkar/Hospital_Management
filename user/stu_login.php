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
         <link href="../img/hospitallogo.png" rel="icon">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <title>Student-Login</title>
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
            /* //filter: blur(1px); */
        }

        .child_div {
            width: 100vw !important;
            height: 50vh !important;

        }
        </style>
    </head>
   
    <body   onload="myFunction()">
    <section class="vh-100 bg-image"
  style="background-image: url('img/logingfgbg.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div id="loading"></div>
        <div class=" parent_div">
            <div class="child_div">
                <div class="frm m-2">
                    <div class="  align-items-center mt-5">
                        <div class="container mt-5">
                            <div class="row justify-content-center">
                                <div class="col-md-3 ">
                                    <div class="card shadow" style="border-radius: 1rem;">
                                        <div class="card-body m-2">

                                            <h1 class="mb-5 text-center">LOGIN</h1>

                                            <form action="login.php" method="POST" autocomplete="off">

                                                <div class="form-outline mb-1 ">
                                                    <input type="text" id="form6Example3" name="patientid" class="form-control " placeholder="patientid" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>

                                                <div class="form-outline mb-1">
                                                    <input type="password" id="form6Example3" name="password" class="form-control" placeholder="Password" required />
                                                    <label class="form-label" for="form6Example3"></label>
                                                </div>

                                                <!-- Submit button -->
                                                <div class="col-md-12 mt-5" style="text-align: center !important;margin: auto !important;">
                                                    <button type="submit" class="col-md-4 btn text-white btn-rounded "style="background-color: #737ee0;" >login</button>
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

                    <a class="txt2" href="#" style="text-decoration: none;">
                        contact admin
                    </a>
                </div>
                
            </div>
        </div>
  </div>
    </section>
        <script>
		// $(document).ready(function(){
			// 	$('div#loading').removeAttr('id');
		// });
		var preloader = document.getElementById("loading");
		// window.addEventListener('load', function(){
		// 	preloader.style.display = 'none';
		// 	})

		function myFunction(){
			preloader.style.display = 'none';
		};
	</script><style>
        @media(max-width:400px) {
    html {
      font-size: 70% !important;
    }
    .child_div {
            width: 90vw !important;
            height: 50vh !important;
    }
        }
    </style>
    </body>
  
</html>
