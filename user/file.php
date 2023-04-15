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
$patientid=$_SESSION["username"];

?>

<main id="main" class="main">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<div class="pagetitle">
		<h1>Patient Report</h1>
		<div class="frm m-5">
			<div class="  align-items-center mt-5">
				<div class="container mt-5">
					<div class="row justify-content-center">
						<div class="col-md-6 ">
							<div class="card" style="border-radius: 1rem;">
								<div class="card-body m-2">

									<h2 class="mb-3 text-center"><b>Upload your other reports</b></h2>
									<strong>Enter report name and Upload pdf</strong>
									<form method="post" enctype="multipart/form-data">
    <?php
    // If submit button is clicked
    if (isset($_POST['submit'])) {
        // get name from the form when submitted
        $caseid = $_POST['filename'];
        $pdf_file = $_FILES['pdf_file'];

        if ($pdf_file['error'] === UPLOAD_ERR_OK) {
            // If the ‘pdf_file’ field has an attachment
            $file_name = $pdf_file['name'];
            $file_tmp = $pdf_file['tmp_name'];

            // Move the uploaded pdf file into the pdf folder
            $target_dir = "/var/www/html/pdf/";
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }

            if (!is_writable($target_dir)) {
                echo "Error: Directory is not writable.";
            } else {
                $target_path = $target_dir . $caseid . ".pdf";
                if (move_uploaded_file($file_tmp, $target_path)) {
                    // Insert the submitted data from the form into the table
					$insertquery = "INSERT INTO pdf_data(patientid, caseid, filename, name) VALUES('$patientid','$caseid','$file_name', 'unknown')";
                    // Execute insert query
                   
					$iquery = mysqli_query($conn, $insertquery);

if ($iquery) {
  // Success message
} else {
  // Error message
  echo "Error: " . mysqli_error($conn);
}
                    if ($iquery) {
                        ?>
                        <div class="alert alert-success alert-dismissible fade show text-center">
                            <a class="close" data-dismiss="alert" aria-label="close">
                                
                            </a>
                            <strong>Success!</strong> Data submitted successfully.
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show text-center">
                            <a class="close" data-dismiss="alert" aria-label="close">
                                
                            </a>
                            <strong>Failed!</strong> Try Again!
                        </div>
                        <?php
                    }
                } else {
                    echo "Error: File upload failed";
                }
            }
        } else {
            switch ($pdf_file['error']) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    echo "Error: File size too large";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    echo "Error: File upload was only partially successful";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo "Error: No file was uploaded";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    echo "Error: Missing a temporary folder";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    echo "Error: Failed to write file to disk";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    echo "Error: A PHP extension stopped the file upload";
                    break;
                default:
                    echo "Error: Unknown upload error";
                    break;
            }
        } // end if
    } // end if
    ?>

    <div class="form-input py-2">
        <div class="form-group">
            <input type="file" name="pdf_file" class="form-control" accept=".pdf" required />
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Report name" name="filename">
        </div>
        <div class="form-group">
            <input type="submit" class="btnRegister" name="submit" value="Submit">
        </div>
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
   include "stu_dash_footer.php";
    ?>














