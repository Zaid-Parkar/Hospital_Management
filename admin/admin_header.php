<?php $username = $_SESSION["username"]; ?>

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
    <head><link href="../https://fonts.gstatic.com" rel="preconnect">
        <link href="../https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Admin-Dashboard</title>
        <meta name="robots" content="noindex, nofollow">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <link href="../img/RAIT_LOGO.png" rel="icon">
       
        
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
                        <span class="d-none d-md-block  ps-2"><b style="font-size: 1.3rem;">Welcome Dr.<?php echo $username ?></b></span> </a>

            </nav>
        </header>
        <aside id="sidebar" class="sidebar">
            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-heading">Menu</li>

                <li class="nav-item"> <a class="nav-link collapsed  " href="admin_dashboard.php"> <i class="bi bi-grid"></i> <span>Dashboard</span> </a></li>
                <li class="nav-item"> <a class="nav-link collapsed" href="stu_reg.php"> <i class="bi bi-journal-text"></i> <span> Patient Details</span> </a></li>
                <li class="nav-item"> <a class="nav-link collapsed" href="chat.php"> <i class="bi bi-journal-text"></i> <span>Chat with patient</span> </a></li>
                <li class="nav-item"> <a class="nav-link collapsed" href="dr_prescription.php"> <i class="bi bi-journal-text"></i> <span>Patient prescription</span> </a></li>
                <li class="nav-item"> <a class="nav-link collapsed" href="view.php"> <i class="bi bi-journal-text"></i> <span>Patient Documnents</span> </a></li>
                <li class="nav-item"> <a class="nav-link collapsed" href="logout.php"> <i class="bi bi-box-arrow-in-right"></i> <span>Logout</span> </a></li>

            </ul>
        </aside>