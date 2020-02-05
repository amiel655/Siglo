<?php
error_reporting(0);
session_start();
if (isset($_SESSION['Username']) == 'rvdelapaz' && ($_SESSION['Password']) == 'Siglofinecuts'){
    $dbconnect = mysqli_connect("localhost", "root", "");
    mysqli_select_db($dbconnect, "siglorecords");

if(isset($_GET['Customer_ID'])){
    $Customer_ID = $_GET['Customer_ID'];
    mysqli_query($dbconnect, "DELETE from sigloreservation WHERE Customer_ID='".$Customer_ID."'");
    echo"<script>alert('Appointment Schedule Deleted!'); window.location.href='appointment.php';</script>";
}
}
else{header("location: login.php");}
?>