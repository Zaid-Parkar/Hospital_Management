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
   <link href="../img/hospitallogo.webp" rel="icon">
 <body onload="myFunction()">
 <div id="loading"></div>
<?php
session_start();
if (!isset($_SESSION["username"])) {
    ?>
<script type="text/javascript">
window.location = "admin_login.php";
</script>
<?php
}
include "details.php";
?>

<?php

$RollNo = $_POST['RollNo'];

$sql = "SELECT * FROM `conform` where `RollNo`='$RollNo' ";
$resultn = mysqli_query($conn, $sql);
$row = $resultn->fetch_assoc();
if ($row) {
} else {
    ?>
<script type="text/javascript">
alert("The entered RollNo is not registered");
window.location = "rc_form.php";
</script>
<?php
}
$date = date('d/m/Y');
$date1 = date('d/m/Y', strtotime('+4 days') ) ."</br>";
$orgDate = $row["DOB"]; 
$newBDate = date("d/m/Y", strtotime($orgDate));  
?>


<html lang="en">

<head>

        <link rel="stylesheet" href="../css2/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verify details</title>

   
    <style>
        p{
            width: fit-content;
            font-size: 1.1rem;
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
</head>
<body class="background">

        <div class="text-center parent_div">

            <div class="row child_div">
                 
            
                <div class="col-12 ">
               
                    <div class="card shadow p-3 " style="width: 23rem;padding-left: 3rem !important;">
                    <p style="margin-bottom: 1rem;"> <h4><u>Verify Details</u></h4></p>
                    <p><b>Name :</b>
                        <i><?PHP echo $row["name"] ?></i>
                    </p>
                    <p><b>RollNo :</b>
                       <i> <?PHP echo $row["RollNo"] ?></i>
                    </p>
                    
                    <p><b>Year :</b>
                     <i>   <?PHP echo $row["Year"] ?></i>
                    </p>
                    <p><b>Branch :</b>
                       <i> <?PHP echo $row["Branch"] ?></i>
                    </p>
                    <p><b>Source :</b>
                      <i>  <?PHP echo $row["Source"] ?></i>
                    </p>
                    <p><b>Destination :</b>
                       <i> <?PHP echo $row["Destination"] ?></i>
                    </p>
                    <p><b>Class:</b>
                        <i><?PHP echo $row["Class"] ?></i>
                    </p>
                    <p><b>Pass duration :</b>
                       <i> <?PHP echo $row["Duration"] ?></i>
                    </p>
                    <p><b>Birh date :</b>
                      <i>  <?PHP echo $newBDate?></i>
                    </p>
                    
                    <p><b>Season ticket no :</b>
                       <i> <?PHP echo $row["ssnno"] ?></i>
                    </p>
                    <p><b>Current date :</b>
                       <i> <?PHP echo $date ?></i>
                    </p>
                    <p><b>Validity upto :</b>
                       <i> <?PHP echo $date1 ?></i>
                    </p>

                   

                    <a href="rc_print.php?RN=<?php echo $row["RollNo"]  ?>" class="text-white" style="text-decoration: none;"><button class="btn btn-primary hidden-print " style="width: AUTO; margin: 2rem;"></span>Verify</button></a> 
                </div>
        
            </div>   </div>
            </div>
        
        <?php
        include "admin_footer.php";
        ?>
