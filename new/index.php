<?php
$base_url="http://www.victoriainvestama.co.id/";
$request_url=$_SERVER['REQUEST_URI'];
$url=substr($request_url, 1);
$content=explode("/",$url);

$page_request=$content[0];
$page_content=$content[1];
include "lib/processor.php";
include "base/header.php";
include "section/head.php";
if($page_request=="")
{

  include "page/home.php";
}
if($page_request=="company")
{
  if($page_content=="")
  {
    $page_content="about-victoria";
  }
  include "page/page.php";
}
include "section/footer.php";
include "base/bottom.php";

 ?>
