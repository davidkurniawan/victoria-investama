<?php

$con = new DB_con();
$res=$con->select_where('menu','Parent','=0');
$language=$_SESSION['language'];
if($_SESSION['language']=="")
{
  $language="EN";
}
?>
<header class="head-section">
  <div class="container">
<div class="row">
  <div class="col-md-8">
    <a class="navbar-brand" href="/">
      <img src="<?=$base_url;?>assets/img/logo.png">
    </a>
</div>
<div class="col-md-4">
<div class="btn-lang">
  <?php
  $url=$_SERVER['SERVER_NAME'];
  $req_url=$_SERVER['REQUEST_URI'];
  ?>
<a href="/lib/ChangeLanguage.php?lang=ID" class="lang <? if($language=="ID") { echo 'title-red';} ?>">Indonesia</a>
<a href="/lib/ChangeLanguage.php?lang=EN" class="lang <? if($language=="EN") { echo 'title-red';} ?>">English</a>
</div>
<div class="btn-group">
<a class="btn btn-primary dropdown-toggle menu" data-toggle="dropdown" href="#">
</a>
<ul class="dropdown-menu" <? if ($language=="ID"){echo "style=left:-56px";}?> >
  <?php
 while($row=mysql_fetch_object($res))
 {
   if($language=="EN")
   {
     echo "<li><a href=/$row->url>$row->MenuName</a></li>";
   }
   else
   {
     echo "<li><a href=/$row->url>$row->MenuNameID</a></li>";
   }

}
?>
</ul>
</div>
</div>
</div>
</div>
</header>
