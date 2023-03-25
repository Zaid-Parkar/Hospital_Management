<?php
session_start();
if (!isset($_SESSION["username"])) {
    ?>
<script type="text/javascript">
window.location = "admin_login.php";
</script>
<?php
}
include "admin_header.php";
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Concession Form</h1>
        <div class="frm m-5">
            <div class="  align-items-center mt-5">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6 ">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="card-body m-2">

                                    <h2 class="mb-3 text-center"><b>CONCESSION FORM</b></h2>

                                    <form action="rc_verify.php" method="POST" autocomplete="off">

                                        <div class="form-outline mb-1 ">
                                            <input type="text" id="form6Example3" name="RollNo" class="form-control " placeholder="Roll Number" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>

                                        <!-- Submit button -->
                                        <div class="col-md-12 " style="text-align: center !important;margin: auto !important;">
                                            <button type="submit" class="col-md-4 btn  btn-rounded text-white" style="background-color: #737ee0;">Submit</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h2 class="mb-3 text-center"><b>GENERATE REPORT</b></h2>

        <div class="frm m-1">
            <div class="  align-items-center mt-1">
                <div class="container mt-2">
                    <div class="row justify-content-center">
                        <div class="col-md-6 ">

                        <div class="col-md-12 " style="text-align: center !important;margin: auto !important;">
                                           <a href="export.php"> <button type="submit" class="col-md-4 btn  btn-rounded text-white" style="background-color: #737ee0;">Generate report</button></a>
                                        </div>

                                  

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <?php
        include "admin_footer.php";
        ?>