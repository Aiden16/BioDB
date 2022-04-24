<?php
session_start();
unset($_SESSION["User_ID"]);
unset($_SESSION["User_Username"]);
header("Location:loginPage.php");
?>