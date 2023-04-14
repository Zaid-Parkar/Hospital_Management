<?php
session_start();

include "details.php";

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from admint where username = '$username' and password='$password'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query); {
        if ($row["username"] == $username) {
            $_SESSION["username"] = $username;
            ?>
<script type="text/javascript">
window.location = "admin_dashboard.php";
</script>
<?php

        } else {

            ?>
<script type="text/javascript">
alert("Incorrect Password or Username");
window.location = "admin_login.php";
</script>
<?php
            session_abort();
        }
    }
}

?>