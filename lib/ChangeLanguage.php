<?php
session_start();
$language=$_GET['lang'];
$_SESSION["language"] = $language;
header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;
?>