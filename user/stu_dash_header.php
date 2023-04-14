<?php
include "details.php";
$RNO = $_SESSION["username"];
$sql = "SELECT * FROM `registration` where `patientid`='$RNO' ";
$resultn = mysqli_query($conn, $sql);
$row = $resultn->fetch_assoc();
?>

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
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Student-Dashboard</title>
        <meta name="robots" content="noindex, nofollow">
        <meta content="" name="description">
        <meta content="" name="keywords">
         <link href="../img/hospitallogo.webp" rel="icon">

        <link href="../https://fonts.gstatic.com" rel="preconnect">
        <link href="../https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/css/boxicons.min.css" rel="stylesheet">
        <link href="../assets/css/quill.snow.css" rel="stylesheet">
        <link href="../assets/css/quill.bubble.css" rel="stylesheet">
        <link href="../assets/css/remixicon.css" rel="stylesheet">
        <link href="../assets/css/simple-datatables.css" rel="stylesheet">
        <link href="../assets/css/style.css" rel="stylesheet">

        <link href="../css2/style.css" media="all" rel="Stylesheet" type="text/css" />
    </head>

    <body onload="myFunction()">
    
    <div id="loading"></div>
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between"> <i class="bi bi-list toggle-sidebar-btn" style="margin-right: 1rem;"></i><img src="../img/dy_logo.svg" style="width: 8rem; height:auto;">  <a href="stu_dashboard.php" class="logo d-flex align-items-center"> <span class="d-none d-lg-block"></span> </a></div>

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">
                    <li class="nav-item d-block d-lg-none"> <a class="nav-link nav-icon search-bar-toggle " href="#"> <i class="bi bi-search"></i> </a></li>

                    <li class="nav-item dropdown pe-3">
                        <span class="d-none d-md-block  ps-2"><b style="font-size: 1.3rem !important;">
                                <?php echo "Welcome " . $row["name"] . ""; ?>
                            </b></span> </a>

            </nav>
        </header>
        <aside id="sidebar" class="sidebar">
            <ul class="sidebar-nav group" id="sidebar-nav">

                <li class="nav-heading">Menu</li>
                <li class="nav-item"> <a class="nav-link collapsed nav_click" href="myprofile.php"> <i class="bi bi-person"></i> <span>My profile</span> </a></li>

                <li class="nav-item"> <a class="nav-link collapsed " href="stu_dashboard.php"> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>

                <li class="nav-item"> <a class="nav-link collapsed" href="view_prescription.php"> <i class="bi bi-journal-text"></i> <span>Your Prescription</span> </a></li>
                
                <li class="nav-item"> <a class="nav-link collapsed" href="patient_report.php"> <i class="bi bi-journal-text"></i> <span>Your Reports</span> </a></li>

                <li class="nav-item"> <a class="nav-link  collapsed" href="file.php"> <i class="bi bi-envelope"></i> <span>Upload</span> </a></li>

                <li class="nav-item"> <a class="nav-link  collapsed" href="form.php"> <i class="bi bi-envelope"></i> <span>Contact</span> </a></li>

                <li class="nav-item"> <a class="nav-link collapsed" href="logout.php"> <i class="bi bi-box-arrow-in-right"></i> <span>Logout</span> </a></li>

            </ul>
        </aside>