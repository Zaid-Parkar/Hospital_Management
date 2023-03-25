<?php
session_start();
if (!isset($_SESSION["username"])) {
    ?>
<script type="text/javascript">
window.location = "admin_login.php";
</script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

    <head><link href="../img/RAIT_LOGO.png" rel="icon">
        <link rel="stylesheet" href="pdfstyle.css">
        <meta charset="utf-8">
        <title>Concession form print</title>
        <link href="../img/RAIT LOGO.png" rel="icon">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </head>

    <body>

        <style>
        html,
        body {
            margin: 0 !important;
            padding: 0 !important;
        }
    p{
        font-size: 20px;
        font-weight: bold;
    }
        
        
        </style>
        <?php
        include "details.php";
        $Rnos = $_GET['RN'];
        
        $sql = "SELECT * FROM `conform` where `RollNo`='$Rnos' ";
        $resultn = mysqli_query($conn, $sql);
        $row = $resultn->fetch_assoc();
        $date = date('d/m/ Y');
        $date1 = date('d/m/ Y', strtotime('+4 days') ) ."</br>";
        $orgDate = $row["DOB"]; 
        $newBDate = date("d-m-Y", strtotime($orgDate));  
        ?>

        <div class="row" style="margin-left: 5.2cm !important;margin-top: 0.4cm;">
            <div class="col-md-2" style="margin-left: 3.8cm;">
                <div class="left">

                    <p class="name" style=" margin-top: 9.3cm; margin-left: 3.6cm;width: 8cm;">
                        <?PHP echo $row["Name"] ?>
                    </p>

                    <p class="DOC" style=" margin-top: 1.0cm; margin-left: 6.2cm;width: 3.8cm;">
                        <?php echo $newBDate; ?>
                    </p>

                    <div class="lcontainer" style=" margin-top: 3.5cm;display: flex;width: 1.5cmcm;">

                        <p class="rollno" style=" margin-top: 0cm; margin-left: -0.6cm; text-align: center !important;">
                            <?PHP echo $row["Class"] ?>
                        </p>
                        <p class="Duration" style=" margin-top:0cm; margin-left: 1.1cm; text-align: center !important;">
                            <?PHP echo $row["Duration"] ?>
                        </p>
                        <p class="Source" style=" margin-top: 0cm; margin-left: 0.6cm; text-align: center !important;">
                            <?PHP echo $row["Source"] ?>
                        </p>
                        <p class="Destination" style=" margin-top: 0cm; margin-left: 1.5cm; text-align: center !important;">
                            <?PHP echo $row["Destination"] ?>
                        </p>
                    </div>

                    <p class="Contact" style=" margin-top: 4.3cm; margin-left: 7.1cm;width: 3.8cm;"> <?php echo $row['ssnno'] ?>
                    </p>
                    <p class="Contact" style=" margin-top: 1.8cm; margin-left: 6.2cm;width: 3.8cm;"><?php echo $date1; ?> </p>

                    <p class="DOC" style=" margin-top: 8.377cm; margin-left: 5.4cm;width: 3.8cm;">
                        <?php echo $date; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="right" style="margin-left: 4cm;">
                    <p class="name" style=" margin-top: 8.8cm; margin-left: 4.8cm;">
                        <?PHP echo $row["Name"] ?>
                    <div style=" margin-top: 0.7cm;display: flex;width: 35cm;">
                        <p class="Contact" style=" margin-top: 0.1cm; margin-left: 1.5cm;"><?php echo $row["AY"]; ?> </p>
                        <p class="Contact" style=" margin-top: 0.1cm; margin-left: 2cm;"><?php echo $row["AM"]; ?> </p>
                        <p class="Contact" style=" margin-top: 0.2m; margin-left: 18.2cm;"> <?php echo $newBDate; ?></p>

                    </div>
                    <div class="lcontainer" style=" margin-top: 2.9cm;display: flex;width: 3.8cm;min-height: 0.7cm;">

                        <p class="rollno" style=" margin-top: 0cm; margin-left: 0.2cm; text-align: center !important;">
                            <?PHP echo $row["Class"] ?>
                        </p>
                        <p class="Duration" style=" margin-top:0cm; margin-left: 1.6cm; text-align: center !important;">
                            <?PHP echo $row["Duration"] ?>
                        </p>
                        <p class="Source" style=" margin-top: 0cm; margin-left: 3.5cm; text-align: center !important;">
                            <?PHP echo $row["Source"] ?>
                        </p>
                        <p class="Destination" style=" margin-top: 0cm; margin-left: 4.8cm; text-align: center !important;">
                            <?PHP echo $row["Destination"] ?>
                        </p>
                    </div>

                    <p class="Contact" style=" margin-top: 1.4cm; margin-left: 25.3cm;">
                    <?php echo $row['ssnno'] ?></p>

                    <div class="lcontainer" style=" margin-top: 0.2cm;display: flex;width: 3.8cm;">
                        <p class="Source" style=" margin-top: 0cm; margin-left: 1.3cm;font-size: 16px !important;min-width: 4cm !important;">
                            <?PHP echo $row["Source"] ?>
                        </p>
                        <p class="Destination" style=" margin-top: 0cm; margin-left: 4.5cm;">
                            <?PHP echo $row["Destination"] ?>
                        </p>
                    </div>
                    <div style=" margin-top: 0cm; margin-left:2.2cm;width: 3.8cm;">
                        <p><?php echo $date1; ?></p>

                    </div>
                    <p class="DOC" style=" margin-top: 0.9cm; margin-left: 2.5cm;width: 5cm;">
                        <?php echo $date; ?>
                    </p>
                </div>

            </div>
        </div>
<div style="text-align: center;">
<button class="btn btn-primary hidden-print m-auto " onclick="myFunction()" style="width: AUTO; margin: 2rem;"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
</div>
       
        <script>
        function myFunction() {
            window.print();
        }
        </script>
    </body>

</html>