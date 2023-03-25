<?php
$RollNo = $_POST['RollNo'];
$Name = $_POST['Name'];
$DOB = date('Y-m-d', strtotime($_POST['DOB']));
$AY = $_POST['AY'];
$AM = $_POST['AM'];
$Year = $_POST['Year'];
$Branch = $_POST['Branch'];
$Source = $_POST['Source'];
$Class = $_POST['Class'];
$Duration = $_POST['Duration'];
$ssnno = $_POST['ssnno'];
$AadharNo = "";
$address = $_POST['address'];

#$DOC = date('Y-m-d', strtotime($_POST['DOC']));
include "details.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (empty(trim($_POST["AadharNo"]))) {
		$username_err = "Username cannot be blank";
	} 
	else{
		$sql = "SELECT id FROM conform WHERE AadharNo = ?";
		$stmt = mysqli_prepare($conn, $sql);
		if ($stmt) {
			mysqli_stmt_bind_param($stmt, "s", $param_AadharNo);

			$param_AadharNo = trim($_POST['AadharNo']);

			if (mysqli_stmt_execute($stmt)) {
				mysqli_stmt_store_result($stmt);
				if (mysqli_stmt_num_rows($stmt) == 1) {
					$username_err = "This AadharNo is already taken"; 
					?>  <script type="text/javascript">alert("This AadharNo is already taken");  window.location = "concession_form_input.php";</script> <?php
				}
				else{
					$AadharNo = trim($_POST['AadharNo']);
				}
			}
			else{
				echo "something went wrong";
			}
		}
	}

	mysqli_stmt_close($stmt);

	$query = "INSERT INTO conform (RollNo,Name,DOB,AY,AM,Year,Branch,Source,Class,Duration,AadharNo,ssnno,address) values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$stmt = mysqli_prepare($conn, $query);

	if ($stmt) {
		mysqli_stmt_bind_param($stmt, "sssssssssssss", $RollNo, $Name, $DOB, $AY, $AM, $Year, $Branch, $Source, $Class, $Duration, $param_AadharNo,$ssnno,$address);
		$param_AadharNo = $AadharNo;
		if (mysqli_stmt_execute($stmt))
		{
			$_SESSION['status'] = "Concession form submitted Successfully";
			
			?>  <script type="text/javascript">alert("Concession form submitted Successfully");  window.location = "stu_dashboard.php";</script> <?php

		}
		
		else {
			$_SESSION['status'] = "Error! Concession form not submitted";
		
			?>  <script type="text/javascript">alert("Error! Concession form not submitted");  window.location = "stu_dashboard.php";</script> <?php
		}
	}
}
?>

