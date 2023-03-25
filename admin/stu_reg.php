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
?>
<?php
include "admin_header.php";
?>
<?php
  
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `registration` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
  }
  
  ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Student Registered</h1>
        <div class="container my-4">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">RollNo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Year</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Contact No</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `registration`";
                    $result = mysqli_query($conn, $sql);
                    $id = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $id + 1;
                        ?>
                    <tr>
                        <th scope='row'> <?php echo$id; ?></th>
                        <td><?php echo$row['RollNo']; ?></td>
                        <td><?php echo$row['Name']; ?></td>
                        <td><?php echo$row['Year']; ?></td>
                        <td><?php echo$row['Branch']; ?></td>
                        <td><?php echo$row['Contactno']; ?></td>
                        <td> <button class='delete btn btn-sm btn-primary my-5 ' id=d<?php echo $row["id"]; ?>  style="margin: 0.5rem !important;">Delete</button>
                        <a class="text-white" href="update_details.php?id=<?php echo $row["id"];  ?>"> <button class=' btn btn-sm btn-primary my-5 text-white ' style="margin: 0.5rem !important;"> Update</button></a>
                        </td>

                    </tr>
                    <?php
                    }
                    ?>

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

<style>
    
@media(max-width:400px) {
    html {
      font-size: 50% !important;
    }
  
  }
  
  @media(min-width:401px) and (max-width:672px) {
    html {
      font-size: 65% !important;
    }
  
  }
  
  @media(min-width:673px) and (max-width:768px) {
    html {
      font-size: 80% !important;
    }
  
  }
  
  @media(min-width:769px) and (max-width:1000px) {
    html {
      font-size: 80% !important;
    }
  
  }
  
  @media(min-width:1001px) and (max-width:1200px) {
    html {
      font-size: 80%;
    }
  
  }
  
  @media(min-width:1201px) {
    html {
      font-size: 100%;
    }
  
  }
</style>
        <?php
        include "admin_footer.php";
        ?>

        