<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<?php
include "details.php";

 $patientid = $_POST['patientid'];?> <br /> <?php
 $admitted = $_POST['admitted'];?> <br /> <?php
 $medicalrsn = $_POST['medicalrsn'];?> <br /> <?php
 $drassign = $_POST['drassign'];?> <br /> <?php
$sql = "SELECT * FROM `registration` where `patientid` = '$patientid'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $randomno = (rand(10, 10000));
    $caseid = $patientid . $randomno;
     "$caseid"; ?> <br /> <?php
       $name=$row['name'];?> <br /> <?php
      $patientid=$row['patientid']; ?> <br /> <?php
      $email =$row['email']; ?> <br /> <?php
     $aadharno =$row['aadharno']; ?> <br /> <?php
     $phoneno  =$row['phoneno']; ?> <br /> <?php
  $age =$row['age']; ?> <br /> <?php
     $gender =$row['gender']; ?> <br /> <?php
    
    
// Define the SQL query using placeholders (?)
$sql = "INSERT INTO `patient`(`patientid`,`email`,`caseid`,`name`,`gender`,`age`,`phoneno`,`aadharno`,`admitted`,`medicalrsn`,`drassign`) 
VALUES ('$patientid','$email','$caseid','$name','$gender','$age','$phoneno','$aadharno','$admitted','$medicalrsn','$drassign')";



// Prepare the SQL statement
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
  // Bind the values to the placeholders
  mysqli_stmt_bind_param($stmt, "sssssssssss", $patientid, $email, $caseid, $name, $gender, $age, $phoneno, $aadharno, $admitted, $medicalrsn, $drassign);

  // Execute the statement
  $result = mysqli_stmt_execute($stmt);
  if($result){
    ?>
        <script type="text/javascript">
            alert("Success!Case id is : <?php echo $caseid ?>");
            window.location = "reg_admin.php";
        </script>
        <?php
  }

  if (!$result) {
    // Handle the error
    echo "Error: " . mysqli_error($conn);
  }

  // Close the statement
  mysqli_stmt_close($stmt);
} else {
  // Handle the error
  echo "Error: " . mysqli_error($conn);
}





}


?>


<?php 




error_reporting( E_ALL ); ?>





