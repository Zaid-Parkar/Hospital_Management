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
 
 <?php
  include "details.php";
?>
<main id="main" class="main">
<link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    <div class="pagetitle">
        <h1>Patient Prescription</h1>
        <div class="frm m-5">
            <div class="  align-items-center mt-5">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6 ">
                            <div class="card" style="border-radius: 1rem;">
                                <div class="card-body m-2">

                                    <h2 class="mb-3 text-center"><b>Prescription</b></h2>
                                    <strong>Enter Patientid and Upload  pdf</strong>
				<form method="post" enctype="multipart/form-data">
					<?php
						// If submit button is clicked
						if (isset($_POST['submit']))
						{
						// get name from the form when submitted
						$name = $_POST['name'];					

						if (isset($_FILES['pdf_file']['name']))
						{
						// If the ‘pdf_file’ field has an attachment
							$file_name = $_FILES['pdf_file']['name'];
							$file_tmp = $_FILES['pdf_file']['tmp_name'];
						
							// Move the uploaded pdf file into the pdf folder
							move_uploaded_file($file_tmp,"../pdf/$name.pdf" );
            
							// Insert the submitted data from the form into the table
							$insertquery ="INSERT INTO pdf_data(patientid,filename) VALUES('$name','$file_name')";
							
							
							// Execute insert query
							$iquery = mysqli_query($conn, $insertquery);	
							if (!$iquery) {
								printf("Error: %s\n", mysqli_error($conn));
							  }
								if ($iquery)
							{							
					?>											
								<div class=
								"alert alert-success alert-dismissible fade show text-center">
									<a class="close" data-dismiss="alert" aria-label="close">
									×
									</a>
									<strong>Success!</strong> Data submitted successfully.
								</div>
								<?php
								}
								else
								{
								?>
								<div class=
								"alert alert-danger alert-dismissible fade show text-center">
									<a class="close" data-dismiss="alert" aria-label="close">
									×
									</a>
									<strong>Failed!</strong> Try Again!
								</div>
								<?php
								}
							}
							else
							{
							?>
								<div class=
								"alert alert-danger alert-dismissible fade show text-center">
								<a class="close" data-dismiss="alert" aria-label="close">
									×
								</a>
								<strong>Failed!</strong> File must be uploaded in PDF format!
								</div>
							<?php
							}// end if
						}// end if
					?>
					
					<div class="form-input py-2">
						<div class="form-group">
							<input type="text" class="form-control"
								placeholder="Enter your name" name="name">
						</div>								
						<div class="form-group">
							<input type="file" name="pdf_file"
								class="form-control" accept=".pdf" required/>
						</div>
						<div class="form-group">
							<input type="submit"
								class="btnRegister" name="submit" value="Submit">
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
        include "admin_footer.php";
        ?>
















