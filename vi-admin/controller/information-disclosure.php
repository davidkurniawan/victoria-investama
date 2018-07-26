<?php
include "../lib/processor.php";

$con = new DB_con();
$content_file=$con->select('information_disclosure');
?>
