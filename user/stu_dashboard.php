<?php

session_start();
if (!isset($_SESSION["username"])) {
    ?>
    <script type="text/javascript">
        window.location = "stu_login.php";
    </script>
    <?php
}
include "details.php";
include "stu_dash_header.php";
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <!-- <?php echo $_SESSION["username"]; ?> -->
        <?php
        include "stu_dash_footer.php";
        ?>