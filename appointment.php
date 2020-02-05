<?php
error_reporting(0);
session_start();
if (isset($_SESSION['Username']) == 'rvdelapaz' && ($_SESSION['Password']) == 'Siglofinecuts'){
    $dbconnect = mysqli_connect("localhost", "root", "");
    mysqli_select_db($dbconnect, "siglorecords");
    $query = mysqli_query($dbconnect, "SELECT * FROM sigloreservation");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Siglo Barbershop - Classic barbershop in pampanga</title>
  <meta name="author" content="Cabuso Arlan, Lapuz Mar Michael, Severino Shernon Amiel" />
  <meta name="google-site-verification" content="4IOcliwGileg_8g8VARbzVabtfAsvNlcBqUHiuOmj3U" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="resources/Pictures/Misc/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="resources/css/master.css"> 
</head>
<body class="loginbackground">
<div class="title">
<a href="index.php"><img src="resources/Pictures/Misc/Siglo_Pompadour_Barbershop_in_Pampanga_logo.png" class="img-responsive center-block" id="logo" alt="Siglo Logo" width="380" height="380" oncontextmenu="return false;"></a>
</div></br></br></br>

<div class="container-fluid">
<table class="table">
            <thead>
              <tr>
                      <th class="table-inner"><b>Customer_ID</b></th>
                      <th class="table-inner"><b>First Name</b></th>
                      <th class="table-inner"><b>Last Name</b></th>
                      <th class="table-inner"><b>Contact #</b></th>
                      <th class="table-inner"><b>Appointment Schedule Date</b></th>
                      <th class="table-inner"><b>Appointment Schedule Time</b></th>
                      <th class="table-inner"><b>Barber</b></th>
                      <th class="table-inner"><b>Message</b></th>
                      <th class="table-inner"><b>Action</b></th>
              </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?=$row['Customer_ID']?></td>
                            <td><?=$row['Fname']?></td>
                            <td><?=$row['Lname']?></td>
                            <td><?=$row['Contact']?></td>
                            <td><?=$row['Date']?></td>
                            <td><?=$row['TimeSlot']?></td>
                            <td><?=$row['Barber']?></td>
                            <td><?=$row['Message']?></td>
                            <td>
                                <a href="delete.php?Customer_ID=<?=$row['Customer_ID']?>">[DELETE]</a>
                            </td>
                            <tr>
                <?php
                }
                    ?>
                      </tr>
    
          </tbody>
          </table>
</div>
</br></br></br></br></br></br>
<a href="#" class="scrollToTop"><span class="glyphicon glyphicon-chevron-up"></span></a>
<footer class="transparentbg">
<div align="center" class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
    </br>
    <b>Location: #18 Marcel Bldg. Sto Entierro St. cor Jesus St.
        Angeles City<b></br>  
        <b>Contact #: 0949 997 7304</b></br>
        <b>Opening & Closing hours: 10:00am - 8:00pm</b>
        </div></br>
    <div class="col-sm-4">
    <img src="resources/Pictures/Misc/Siglo_Pompadour_Barbershop_in_Pampanga_logo.png" alt="siglo logo" height="85" oncontextmenu="return false;">
    </div>
    <div class="col-sm-4">
      <a href="https://www.facebook.com/siglobarbers/"><img title="Facebook" src="resources/Pictures/Social media icons/fbicon.png" height="48" alt="facebook logo" ></a>
      <a href="https://www.instagram.com/siglobarbers/"><img title="Instagram" src="resources/Pictures/Social media icons/igicon.png" height="30" alt="instagram logo"></a>&nbsp;&nbsp;
      <a href="https://twitter.com/Siglobarbers"><img title="Twitter" src="resources/Pictures/Social media icons/twitterlogo.png" height="37" alt="twitter logo"></a>&nbsp;
      <a href="https://accounts.google.com/SignUp?hl=en"><img title="Gmail" src="resources/Pictures/Social media icons/emailicon.png" height="40" alt="email logo"></a></br>
      <b>&copy;&nbsp;2017 All Rights Reserved</b></div></br>
  </div>
</div>
</footer>
<script type="text/javascript">
/*Google Analytics*/
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102544434-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="resources/javascript/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="resources/javascript/master.js"></script>
</html>
<?php
        }
         else{
            header("location: admin.php");
             }
            ?>