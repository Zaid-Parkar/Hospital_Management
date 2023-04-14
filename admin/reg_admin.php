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
</style>
    <head>
        <link href="../img/hospitallogo.webp" rel="icon">
        <link rel="stylesheet" href="../css2/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hospital management system</title>

        
    </head>

    <body onload="myFunction()" class="Background">
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
                        <img src="../img/patientgfg.png" class="card-img-top" alt="..." style="height: 18rem;">
                        <div class="card-body">

                            <a href="newreg.php" class="btn btn-primary">Regestir</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card shadow " style="width: 18rem;">
                        <img src="../img/admin_logo.webp" class="card-img-top" alt="..." style="height: 18rem;">
                        <div class="card-body ">
                            <a href="../admin/admin_login.php" class="btn btn-primary ">Already registered</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
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