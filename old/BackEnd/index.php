<?php
//    session_start();
//
//    $username = $_SESSION["Username"];
//    $password = $_SESSION["Password"];
//
//    if($username == "" || $password == ""){
//        header("Location: home.php");
//    }else{
//    }
?>
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
	<head>
		<link href='../img/victoria.ico' rel='shortcut icon' type='image/x-icon' />
		<title>Victoria Sekuritas</title>
		
		<link href="../css/BackEnd-Blue.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js/login.js"></script>
	</head>
	
	<body>
 	<div id='company-logo'>
		<img src='../img/company-logo.jpg' />
	</div>

	<div id="login_container">
		<form action="authenticate.php" method="post">
		<div id="login">
			<div class="login_area">
				<ul>
					<li>Username :</li>			
					<li><input type="text" name="username" /></li>
				</ul>
			</div>
			<div style="clear:both"></div>
			
			<div class="login_area">
				<ul>
					<li>Password :</li>			
					<li><input type="password" name="password" /></li>
				</ul>
			</div>
			<div style="clear:both"></div>
			
			<div class="login_area">
				<ul>
					<li class="login_button"><input type="submit" value="Login" name="login" id="btnLogin" /></li>			
				</ul>
			</div>
			<div style="clear:both"></div>
		</div>
		</form>
	</div>
	<div id='web-info'>
		Copyright &copy;2010 PT. Victoria Sekuritas <br/>
		Web Development by <a href='http://amank.co.cc' target='blank'>Kamal</a>
	</div>	
	</body>
</html>
<?php
if($_GET["err"]){
?>
<script type="text/javascript" src="../lib/jquery.js"></script>
<script type="text/javascript" src="../lib/AlertDialog/js/jquery.alerts.js"></script>
<link href="../lib/AlertDialog/css/jquery.alerts.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
    jAlert('info', "<?php echo $_GET["err"] ?>")
</script>
<?php
}
?>