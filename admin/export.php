<?php include "details.php"; ?>

<table border = 1>
  <tr>

    <td>Form number</td>
    <td>Date of issue</td>
    <td>Name</td>
    <td>Sex</td>
    <td>DOB</td>
    <td>Year</td>
    <td>Class</td>
    <td>Source</td>
    <td>Destination</td>
    <td>Address</td>
   

  </tr>
  <?php
  $i = 1;
  $rows = mysqli_query($conn, "SELECT * FROM conform");
  foreach($rows as $row) :
  ?>
  <tr>

    <td>  </td>
    <td>  </td>

    <td> <?php echo $row["name"]; ?> </td>
    <td>  </td>
    <td> <?php echo $row["DOB"]; ?> </td>
    <td> <?php echo "Year ".$row["AY"]; ?> <br>
    <?php echo "Month ".$row["AM"]; ?> </td>
    <td> <?php echo $row["Class"]; ?> </td>
    <td> <?php echo $row["Source"]; ?> </td>
    <td> <?php echo $row["Destination"]; ?> </td>
    <td> <?php echo $row["address"]; ?> </td>


  </tr>
  <?php endforeach; ?>
</table>
<?php
// Headers for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; Filename = Concession-Form.xls");


?>