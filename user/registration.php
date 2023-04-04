<?php
include "details.php";

$RollNo = $_POST['RollNo'];
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
//$Year = $_POST['Year'];
//$Branch = $_POST['Branch'];
$Contactno = $_POST['Contactno'];
$Email=$_POST['Email'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (empty(trim($_POST["username"]))) {
        $username_err = "Username cannot be blank";
    } else {
        $sql = "SELECT id FROM registration WHERE RollNo = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = trim($_POST['RollNo']);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This RollNo is already taken";
                    ?>
                    <script type="text/javascript">
                        alert("This RollNo is already taken");
                        window.location = "stu_reg.php";
                    </script>
                    <?php
                } else {

                    $username = trim($_POST['username']);
                }

            } else {
                ?>
                <script type="text/javascript">
                    alert("Something went wrong");
                    window.location = "stu_reg.php";
                </script> <?php
            }
        }
    }

    mysqli_stmt_close($stmt);

    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = "Password cannot be less than 5 characters";
        ?>
        <script type="text/javascript">
            alert("Password cannot be less than 5 characters");
            window.location = "stu_reg.php";
        </script>
        <?php
    } else {
        $password = trim($_POST['password']);
    }

    if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
        $password_err = "Passwords should match";
        ?>
        <script type="text/javascript">
            alert("Passwords should match");
            window.location = "stu_reg.php";
        </script> <?php
    }
    if (strlen(trim($_POST['Contactno'])) != 10) {
        $password_err = "Phone number should be 0f 10 numbers";
        ?>
        <script type="text/javascript">
            alert("Phone number should be 0f 10 numbers");
            window.location = "stu_reg.php";
        </script>
        <?php
    } else {
        $Contactno = trim($_POST['Contactno']);
    }
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO registration (RollNo,Name,Contactno, Email,Password) VALUES (?,?,?,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $RollNo, $param_username, $Contactno, $Email,$param_password);

            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if (mysqli_stmt_execute($stmt)) {
                ?>
                <script type="text/javascript">
                    alert("Successfully Registered");
                    window.location = "stu_login.php";
                </script> <?php

            } else {
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}

?>