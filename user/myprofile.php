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
        <h1>My profile</h1>

        <div class="card2" style="width: 25rem; margin-top: 3rem;">

            <div class="card2-body">
                <div class="container" style="margin: 1rem;">
                    <p>Name : <?php echo "   " . $row["Name"] . ""; ?> </p>

                    <p>Roll no : <?php echo "   " . $row["RollNo"] . ""; ?> </p>
                    </p>
                    <p>Year : <?php echo "   " . $row["Year"] . ""; ?> </p>
                    </p>
                    <p>Branch : <?php echo "   " . $row["Branch"] . ""; ?> </p>
                    </p>
                    <p>Branch : <?php echo "   " . $row['Contactno'] . ""; ?> </p>
                    </p>
                    <p>Email-id : <?php echo "   " . $row['Email'] . ""; ?> </p>
                    </p>
                    <!-- <a href="update_details.php?id=<?php echo $row["id"]; ?>">Update details</a> -->

                </div>
            </div>
        </div>
    </div>

    <?php
    include "stu_dash_footer.php";
    ?>