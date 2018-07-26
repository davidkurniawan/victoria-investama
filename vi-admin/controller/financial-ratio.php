<?php
include "../lib/processor.php";

$con = new DB_con();
$content=$con->select('FinancialRatio');
?>
