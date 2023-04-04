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
$name=$_SESSION["username"];

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
        <h1>Upload Documents</h1>

        <div class="card2" style="width: 25rem; margin-top: 3rem;">

            <div class="card2-body">
                <div class="container" style="margin: 1rem;">
                
                <form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Select Image File:</label> <br>
    <input type="hidden" id="patientid" name="patientid" 
    value="<?php echo $name; ?>">
    
    <input class="my-2" type="file" name="image">
    <input class="my-2" type="text" name="title" placeholder="File name"><br>
    <input  class="my-2" type="submit" name="submit" value="Upload">
   
</form>
 
                </div>
            </div>
        </div>
    </div>

    <?php
    include "stu_dash_footer.php";
    ?>


















