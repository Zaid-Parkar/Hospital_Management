<!DOCTYPE html>

<html lang="en">
<style>
  #loading{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #fff
    url('./img/1490.gif')
     no-repeat center center;	
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
        .Background {
  background-image: url('img/loginbg19.jpeg') !important;
  background-size: cover;
 
}
.card{
            background: #B2FEFA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0ED2F7, #B2FEFA);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0ED2F7, #B2FEFA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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
        <link rel="stylesheet" href="../css2/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hospital management system</title>

        
    </head>

    <body onload="myFunction()" class="Background">
    <section class="vh-100 bg-image"
  style="background-image: url('img/logingfgbg.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div id="loading"></div>
<nav>
<!--<picture>
  <source 
    media="(max-width: 450px)"
    srcset="img/dy_mlogo.svg"  style="position: absolute; width: 100vw;height: auto;margin-top: 10%;">
  
  <img 
    src="../img/dy_header_2.svg" 
    alt="dy_logo"  style="position: absolute; width: 100vw;height: auto;margin-top: 1%;">
</picture>-->
<!-- <img src="../" style="position: absolute; width: 100vw;height: auto;margin-top: 0%;"> -->
</nav>
        <div class="text-center parent_div">

            <div class="row child_div">
                <p style="margin-bottom: 3rem;"><b class="MAIN-HEAD"></b></p> 
                <div class="col-6 ">
                    <div class="card shadow " style="width: 18rem;">
                        <img src="../img/user_logo.png" class="card-img-top" alt="..." style="height: 18rem;">
                        <div class="card-body">

                            <a href="newreg.php" class="btn btn-primary">Register</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card shadow " style="width: 18rem;">
                        <img src="../img/admin_logo.png" class="card-img-top" alt="..." style="height: 18rem;">
                        <div class="card-body ">
                            <a href="signin_user.php" class="btn btn-primary ">Generate caseid</a>
                        </div>
                    </div>
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
	</script>
    </body>

</html>