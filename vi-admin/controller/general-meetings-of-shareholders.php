<?php
include "../lib/processor.php";

$con = new DB_con();
$content_file=$con->select('general_meeting_shareholder');
?>
