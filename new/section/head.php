<?php
$con = new DB_con();
$res=$con->select_where('menu','Parent','=0');
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
<a href="/id<? echo $req_url;?>" class="lang">Indonesia</a>
<a href="/en<? echo $req_url;?>" class="lang">English</a>
</div>
<div class="btn-group">
<a class="btn btn-primary dropdown-toggle menu" data-toggle="dropdown" href="#">
</a>
<ul class="dropdown-menu">
  <?php
 while($row=mysql_fetch_object($res))
 {
echo "<li><a href=/$row->url>$row->MenuName</a></li>";
}
?>
</ul>
</div>
</div>
</div>
</div>
</header>
