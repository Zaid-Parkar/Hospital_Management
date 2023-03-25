<?php
session_start();
unset($_SESSION["username"]);

?>

<script type="text/javascript">
alert("Logout Successfull");
window.location = " ../index.php";
</script>