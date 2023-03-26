<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../img/RAIT LOGO.png" rel="icon">
        <title>verifying</title>
    </head>

    <body>

    </body>

</html>

<?php

session_start();
/*session_start();
if(isset($_SESSION['username']))
{
header("location: choosepage.php");
exit;
}
*/

include "details.php";

$username = $password = "KPT4UuQLnPntxN";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['RollNo'])) || empty(trim($_POST['password']))) {
        $err = "Please enter correct username or password";
    } else {
        $username = trim($_POST['RollNo']);
        $password = trim($_POST['password']);

    }

    if (empty($err)) {
        $sql = "SELECT id, RollNo, password FROM registration WHERE RollNo = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        header("location: stu_dashboard.php");
                    } else {
                        ?>
<script type="text/javascript">
alert("Invalid Roll No or Password");
window.location = "stu_login.php";
</script> <?php
                    }
                }
            } else {
                ?>
<script type="text/javascript">
alert("Account for this Aadhar Number is not Registered");
window.location = "stu_login.php";
</script>
<?php
            }
        }

    }
}
?>