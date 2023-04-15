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
?><title>Contact us</title>
<style>
    /* Card */
    .card2 {
        margin-left: 2rem;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
        background-color: white;
        border-radius: 1rem;

    }

    .card2-body {
        padding: 0.2rem;
        background-color: white;
        border-radius: 1rem;
        z-index: 99;
        text-align: left;
    }
</style>

<main id="main" class="main">
    <div class="pagetitle">
    <div class="card2 m-3" style="width: 25rem; margin-top: 3rem;">
            <div class="card2-body">
<h1 class="m-3">Contact us</h1>
    
    <form method="post" action="send-email.php">
        <label class="m-2" for="name" style="width: 80px;">Dr name</label>
        <input class="m-2" type="text" name="name" id="name" required> <br>
        
        <label class="m-2" for="email" style="width: 80px;">Your email</label>
        <input class="m-2" type="email" name="email" id="email" required><br>
        
        <label class="m-2" for="subject" style="width: 80px;">Subject</label>
        <input  class="m-2" type="text" name="subject" id="subject" required><br>
        
        <label class="m-2" for="message" style="width: 80px;">Message</label>
        <textarea class="m-2" name="message" id="message" required></textarea><br>
        
        <br>
        
        <div style="width: auto;text-align: center;">
        <button class="m-3" style="width: 120px;text-align: center;">Send</button>
        </div>
    </form>
            </div></div>
        <?php
        include "stu_dash_footer.php";
        ?>










