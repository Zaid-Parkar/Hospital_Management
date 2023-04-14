<?php
include "details.php";

$patientid = $_POST['patientid'];
$name = $password = $confirm_password = "";
$name_err = $password_err = $confirm_password_err = "";
$gender = $_POST['gender'];
$age = $_POST['age'];
$aadharno = $_POST['aadharno'];
$phoneno = $_POST['phoneno'];
$email=$_POST['email'];
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (empty(trim($_POST["name"]))) {
        $name_err = "name cannot be blank";
    } else {
        $sql = "SELECT id FROM registration WHERE patientid = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_name);

            $param_name = trim($_POST['patientid']);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $name_err = "This patientid is already taken";
                    ?>
                    <script type="text/javascript">
                        alert("This patientid is already taken");
                        window.location = "stu_reg.php";
                    </script>
                    <?php
                } else {

                    $name = trim($_POST['name']);
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
    if (strlen(trim($_POST['phoneno'])) != 10) {
        $password_err = "Phone number should be 0f 10 numbers";
        ?>
        <script type="text/javascript">
            alert("Phone number should be 0f 10 numbers");
            window.location = "stu_reg.php";
        </script>
        <?php
    } else {
        $phoneno = trim($_POST['phoneno']);
    }
    if (empty($name_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO registration (patientid,Name,phoneno, email,Password,gender,age,aadharno) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssssss", $patientid, $param_name, $phoneno, $email,$param_password,$gender,$age,$aadharno);

            $param_name = $name;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if (mysqli_stmt_execute($stmt)) {
                ?>
                <script type="text/javascript">
                    alert("Successfully Registered");
                    window.location = "reg_admin.php";
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