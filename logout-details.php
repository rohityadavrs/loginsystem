<?php
require_once ('connections.php');
// this is logout page when user click button logout in system page

session_start();
$time = date("H:i:s");
$date = date("Y-m-d");
mysqli_query($conn, "UPDATE track_log_user SET logout_date = '$date' AND logout_time = '$time' WHERE username = '$_SESSION[the_username]'");
$_SESSION = NULL;
$_SESSION = [];
session_unset();
session_destroy();
header("location:index.php");
?>
