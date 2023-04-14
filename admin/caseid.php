<?php
include "details.php";

$patientid = $_POST['patientid'];
$admitted = $_POST['admitted'];
$medicalrsn = $_POST['medicalrsn'];
$drassign = $_POST['drassign'];
$sql = "SELECT * FROM `registration` where `patientid` = '$patientid'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $randomno = (rand(10, 10000));
    $caseid = $patientid . $randomno;
    
    $name=$row['name']; 
    $patientid=$row['patientid']; 
    $email =$row['email']; 
   $aadharno =$row['aadharno']; 
   $phoneno  =$row['phoneno']; 
    $age =$row['age']; 
    $gender =$row['gender']; 
    
    $sql2 = "INSERT INTO patient( `patientid`, `email`, `caseid`, `name`, `gender`, `age`, `phoneno`, `aadharno`, `admitted`, `medicalrsn`, `drassign`) VALUES ('$patientid', '$email','$caseid', '$name','$gender' ,'$age','$phoneno' , '$aadharno' ,'$admitted','$medicalrsn','$drassign')";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2){
        ?>
        <script type="text/javascript">
            alert("Success!Case id is : <?php echo $caseid ?>");
            window.location = "reg_admin.php";
        </script>
        <?php
    } 
}


?>








