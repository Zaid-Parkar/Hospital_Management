
 <?php 
session_start();
include "details.php";
                 $squery = "SELECT * FROM `pdf_data` where `patientid`='21ce9999'";
$sdata = mysqli_query($conn, $squery);
$arrdata = mysqli_fetch_array($sdata );


$patientid=($_SESSION["username"]);
strval( $patientid ) ;
echo "$patientid";
// Store the file name into variable
$file = "../pdf/$patientid.pdf";
$filename = $patientid.".pdf";

// Header content type
header('Content-type: application/pdf');

header('Content-Disposition: inline; filename="' . $filename . '"');

header('Content-Transfer-Encoding: binary');

header('Accept-Ranges: bytes');

// Read the file
@readfile($file);

?>

