<?php

include "details.php";

include "admin_header.php";

?>

<script>
		// $(document).ready(function(){
			// 	$('div#loading').removeAttr('id');
		// });
		var preloader = document.getElementById("loading");
		// window.addEventListener('load', function(){
		// 	preloader.style.display = 'none';
		// 	})

		function myFunction(){
			preloader.style.display = 'none';
		};
	</script>
    <?php
$Rnos = $_GET['id'];

$squery = "SELECT * FROM `registration` where `id`={$Rnos}";
$sdata = mysqli_query($conn, $squery);
$arrdata = mysqli_fetch_array($sdata);

if (isset($_POST['submit'])) {
    $Rnosupdate = $_GET['id'];
    $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
    $RollNo = $_POST['RollNo'];
    $Name = $_POST['Name'];
    $Year = $_POST['Year'];
    $Branch = $_POST['Branch'];
    $Contactno = $_POST['Contactno'];
    if (strlen(trim($_POST['Contactno'])) != 10) {
        $password_err = "Phone number should be 0f 10 numbers";
        ?>
        <script type="text/javascript">
            alert("Phone number should be 0f 10 numbers");
            window.location = "update_details.php";
        </script>
        <?php
    } else {
        $sql2 = "UPDATE  `registration` SET `RollNo`='$RollNo',`Name`='$Name',`Year`='$Year',`Branch`='$Branch' ,`Contactno`='$Contactno' ,`Password`='$Password'  WHERE `id`= '$Rnos'";

        $res = mysqli_query($conn, $sql2);
        if ($res) {
            ?>
            <script>
                alert("Successfully updated !!");
                window.location = "stu_reg.php";
            </script><?php
        } else {
            ?>
            <script>
                alert("Details not updated !! Try again later");
            </script>
            <?php
        }
    }
}
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
    </style>
    <div class="pagetitle">
        <h1>Update Form</h1>
        <div class="frm m-5">
            <div class="  align-items-center mt-5">
                <div class="container mt-1">
                    <div class="row justify-content-center">
                        <div class="col-md-6 ">
                            <div class="card shadow" style="border-radius: 1rem;">
                                <div class="card-body m-2">

                                    <h1 class="mb-3 text-center">Personal details</h1>

                                    <form action="" method="POST" autocomplete="off">

                                        <div class="form-outline  ">
                                            <input type="text" id="form6Example3" name="RollNo" class="form-control " placeholder="Roll Number" value="<?php echo $arrdata['RollNo']; ?>" />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>

                                        <div class="form-outline">
                                            <input type="text" id="form6Example3" name="Name" class="form-control" placeholder="Name" value="<?php echo $arrdata['Name']; ?>" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>

                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="Year" class="form-control" placeholder="Year" value="<?php echo $arrdata['Year']; ?>" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>

                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="Branch" class="form-control" placeholder="Branch" value="<?php echo $arrdata['Branch']; ?>" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="Contactno" class="form-control" placeholder="Contactno" value="<?php echo $arrdata['Contactno']; ?>" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <div class="form-outline ">
                                            <input type="text" id="form6Example3" name="Password" class="form-control" placeholder="Password (Enter current password if you dont want to change password)" value="<?php $arrdata['Password']; ?>" required />
                                            <label class="form-label" for="form6Example3"></label>
                                        </div>
                                        <!-- Submit button -->
                                        <div class="col-md-12 " style="text-align: center !important;margin: auto !important;">
                                            <button type="submit" name="submit" class="col-md-4 btn text-white btn-rounded " style="background-color: #737ee0;">Update</button>
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

        </body>

        </html>