<?php
session_start();
unset($_SESSION['Admin_ID']);
unset($_SESSION['Username']);
unset($_SESSION['Password']);
header("location: admin.php");
?>