<?php
$base_url="http://www.victoriainvestama.co.id/";
$request_url=$_SERVER['REQUEST_URI'];
$url=substr($request_url, 1);
$content=explode("/",$url);

$page_request=$content[0];
$page_content=$content[1];
$sub_content=$content[2];
include "lib/processor.php";
$con = new DB_con();
$web_setting=$con->select('Setting');

$setting=mysql_fetch_object($web_setting);

include "base/header.php";
include "section/head.php";

if($page_request=="")
{

  include "page/home.php";
}
else {

  include "page/page.php";
}


include "section/footer.php";
include "base/bottom.php";

 ?>
