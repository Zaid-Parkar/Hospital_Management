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
$name = $row["name"];
$RNO = $row["RollNo"];
$branch = $row["Branch"];
?>

<main id="main" class="main">
    <style>
    ::placeholder {
        color: black !important;
        opacity: 1;
        /* Firefox */
    }

    :-webkit-input-placeholder {
        /* Chrome, Safari, Opera */
        color: black !important;
    }

    ::-ms-input-placeholder {
        /* Microsoft Edge */
        color: black !important;
    }

    hr {
        background-color: transparent;
        border: none;
        border-top: 0.2rem dotted black;
    }
    </style>
    <div class="pagetitle">
        <h1>Concession Form</h1>
        <div class="frm m-5">
            <div class="  align-items-center mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6 m-auto " style="text-align: center;">
                        <h3>Reissue / Update concession form </h3>
                        <a class="text-white" href="conf_update.php?rn=<?php echo $row["RollNo"]; ?>"><button class="col-md-4 btn text-white btn-rounded " style="background-color:#737ee0;">Reissue</button></a>

                    </div>
                </div>
            </div>
            <hr>
        </div>
        <div class="frm m-5">
            <div class="  align-items-center mt-5">
                <div class="container mt-1">
                    <div class="row justify-content-center">
                        <div class="col-md-6 ">
                            <h3 style="text-align: center;">First time register </h3>
                            <div class="card shadow" style="border-radius: 1rem;">
                                <div class="card-body m-2">

                                    <h1 class="mb-3 text-center">Personal details</h1>

                                    <form action="concession_form.php" method="POST" autocomplete="off">

                                        <div class="form-outline  ">
                                            <input type="text" id="form6Example3" name="RollNo" class="form-control " placeholder="Roll Number" value="<?php echo $RNO; ?>" readonly />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>

                                        <div class="form-outline">
                                            <input type="text" id="form6Example3" name="Name" class="form-control" placeholder="Name" value="<?php echo $name; ?>" readonly />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <input type="text" onclick="type='date'" id="form6Example3" name="DOB" class="form-control" placeholder="Birthdate" value="" />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="AY" class="form-control" placeholder="Age in years (eg 19 years)" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="AM" class="form-control" placeholder="Age in months (eg 10 months)" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <!-- <input type="text" id="form6Example3" name="Year" class="form-control" placeholder="Year" /> -->
                                            <select class="form-select form-select-md" aria-label="Default select example" name="Year" input type="text" required>
                                                <option value="">Year</option>
                                                <option value="First Year">First Year</option>
                                                <option value="Second Year">Second Year</option>
                                                <option value="Third Year">Third Year</option>
                                                <option value="Fourth Year">Fourth Year</option>

                                            </select>

                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="Branch" class="form-control" placeholder="Branch" value="<?php echo $branch; ?>" readonly />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="Source" class="form-control" placeholder="From station" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="" class="form-control" placeholder="To station : Nerul" readonly />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <!-- <input type="text" id="form6Example3" name="Class" class="form-control" placeholder="Pass class" /> -->
                                            <select class="form-select form-select-md" aria-label="Default select example" name="Class" input type="text" required>
                                                <option value="">Pass class</option>
                                                <option value="First class">First class</option>
                                                <option value="Second class">Second class</option>

                                            </select>
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <!-- <input type="text" id="form6Example3" name="Duration" class="form-control" placeholder="Pass duration" /> -->
                                            <select class="form-select form-select-md" aria-label="Default select example" name="Duration" input type="text" required>
                                                <option value="">Pass duration</option>
                                                <option value="1 month">1 month</option>
                                                <option value="3 months">3 months</option>
                                               s
                                            </select>
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="AadharNo" class="form-control" placeholder="Adhar Number" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="ssnno" class="form-control" placeholder="Season ticket number" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="address" class="form-control" placeholder="Home address" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>

                                        <!-- 2 column grid layout with text inputs for the first and last names -->

                                        <!-- Submit button -->
                                        <div class="col-md-12 " style="text-align: center !important;margin: auto !important;">
                                            <button type="submit" class="col-md-4 btn text-white btn-rounded " style="background-color: #737ee0;">Submit</button>

                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <script src="../assets/js/apexcharts.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/chart.min.js"></script>
        <script src="../assets/js/echarts.min.js"></script>
        <script src="../assets/js/quill.min.js"></script>
        <script src="../assets/js/simple-datatables.js"></script>
        <script src="../assets/js/tinymce.min.js"></script>
        <script src="../assets/js/validate.js"></script>
        <script src="../assets/js/main.js"></script>
        <script>
		
		var preloader = document.getElementById("loading");
		

		function myFunction(){
			preloader.style.display = 'none';
		};
	</script>
        </body>

        </html>