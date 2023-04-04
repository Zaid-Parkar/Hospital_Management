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
<h1 class="m-3">Contact</h1>
    
    <form method="post" action="send-email.php">
        <label class="m-2" for="name">Name</label>
        <input class="m-2" type="text" name="name" id="name" required> <br>
        
        <label class="m-2" for="email">Emailid</label>
        <input class="m-2" type="email" name="email" id="email" required><br>
        
        <label class="m-2" for="subject">Subject</label>
        <input  class="m-2" type="text" name="subject" id="subject" required><br>
        
        <label class="m-2" for="message">Message</label>
        <textarea class="m-2" name="message" id="message" required></textarea><br>
        
        <br>
        
        <button class="m-2">Send</button>
    </form>
            </div></div>
        <?php
        include "stu_dash_footer.php";
        ?>










