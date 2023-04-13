
<?php
session_start();
if (!isset($_SESSION["username"])) {
    ?>
    <script type="text/javascript">
        window.location = "admin_login.php";
    </script>
    <?php
}
include "details.php";
include "stu_dash_header.php";
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
        <h1>Patient Files</h1>
        <div class="card2" style="width: 35rem; margin-top: 3rem;">
            <div class="card2-body">
                <div class="container" style="margin: 0rem;">
                <?php  
// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "";  
$dbName     = "hospital_management";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}

$patientid = $_SESSION["username"];
echo $patientid;
$sql1 = "SELECT `caseid` FROM `images` where `patientid`='$patientid' ";
$resultn = mysqli_query($db, $sql1);
$row = $resultn->fetch_assoc();
if ($row) {
} else {
    ?>
<script type="text/javascript">
alert("The entered patientid is not registered");
window.location = "view.php";
</script>
<?php }

// Get image data from database 
$result = $db->query("SELECT * FROM images where `patientid`='$patientid'"); 

?>
   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Filename</th>
      <th scope="col">File</th>
      
    </tr>
  </thead><script>
            var i=1;
            </script>
<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ 
          ?>
   <tbody>
    <tr>
        
      <th scope="row"><script>document.write(i++)</script></th>
      <td><?php echo $row['title']; ?></td>
      <td><img style="width: 200px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  /></td>
      
    </tr>
    </tbody>
 

      
        <?php } ?>  
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?></table>
                </div>
            </div>
        </div>

    <?php
    include "stu_dash_footer.php";
    ?>