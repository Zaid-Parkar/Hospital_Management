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

$patientid =$_SESSION["username"];
$sql = "SELECT * FROM `patient` where `patientid`='$patientid' ";
$resultn = mysqli_query($conn, $sql);
$row = $resultn->fetch_assoc();
if ($row) {
} else {
    ?>
<script type="text/javascript">
alert("Something went wrong. Please try again");
window.location = "rc_form.php";
</script>
<?php
}
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
        <h1>Detailed Information</h1>
       
             

    <div class="pagetitle" style="margin-top: 10px;">
        <h2>Your Previous Reports</h2>
        <div class="container my-4">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Patient ID</th>
                        <th scope="col">Case ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Admitted on</th>
                        <!-- <th scope="col">Discharged on</th> -->
                        <th scope="col">Reason</th>
                        <th scope="col">Dr assigned</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                   $sql = "SELECT * FROM `patient` where `patientid`='$patientid' ";
                    $result = mysqli_query($conn, $sql);
                    $id = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $id + 1;
                        ?>
                    <tr>
                        <th scope='row'> <?php echo$id; ?></th>
                        <td><?php echo$row['patientid']; ?></td>
                        <td><?php echo$row['caseid']; ?></td>
                        <td><?php echo$row['name']; ?></td>
                        <td><?php echo$row['admitted']; ?></td>
                        <!-- <td><?php echo$row['discharged']; ?></td> -->
                        <td><?php echo$row['medicalrsn']; ?></td>
                        <td><?php echo$row['drassign']; ?></td>
                        <td> 
                           
                        <a class="text-white" href="../pdf/<?php echo$row['caseid']; ?>.pdf"><button class=' btn btn-sm btn-primary my-5 text-white ' style="margin: 0.5rem !important;"> Download/View Report</button></a>
                        </td>

                    </tr>
                    <?php
                    }
                    ?>
<!-- <button class='delete btn btn-sm btn-primary my-5 ' id=d<?php echo $row["id"]; ?>  style="margin: 0.5rem !important;">Delete</button> -->
                </tbody>
            </table>
        </div>
        <hr>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
        <script>
        $(document).ready(function() {
            $('#myTable').DataTable();

        });
        </script>
        <script>
        deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("edit ");
                id = e.target.id.substr(1);

                if (confirm("Are you sure you want to delete this account!")) {
                    console.log("yes");

                    alert("Account Deleted Successfully");
                    window.location = `stu_reg.php?delete=${id}`;

                } else {
                    console.log("no");
                }
            })
        })
        </script>


        
        <?php
        include "stu_dash_footer.php";
        ?>
 