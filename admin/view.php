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
        <h1>Lifeline Hospital Form</h1>
        <div class="frm m-5">
            <div class="  align-items-center mt-5">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6 ">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="card-body m-2">

                                    <h2 class="mb-3 text-center"><b>Lifeline Hospital FORM</b></h2>

                                    <form action="patient_doc.php" method="POST" autocomplete="off">

                                        <div class="form-outline mb-1 ">
                                            <input type="text" id="form6Example3" name="patientid" class="form-control " placeholder="patientid" required />
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
        
        </div>
        <?php
        include "admin_footer.php";
        ?>















