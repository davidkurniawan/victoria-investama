<?php
session_start();
session_destroy();
$msg="You are Log Out !!";
header("location:../login.php?msg=".$msg);
 ?>
