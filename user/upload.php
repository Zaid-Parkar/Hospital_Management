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
$patientid = $_POST['patientid'];
$title = $_POST['title'];

// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into images (image,created,patientid,title) VALUES ('$imgContent', NOW(),'$patientid','$title')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
                ?>
                <script type="text/javascript">
                alert("File uploaded successfully.!");
                window.location = "file.php";
                </script> 
                <?php
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
                echo $statusMsg; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            echo $statusMsg; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
        echo $statusMsg; 
    } 
} 
 
// Display status message 

?>