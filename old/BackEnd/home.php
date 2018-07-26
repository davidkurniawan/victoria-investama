<?php
    session_start();

    $username = $_SESSION["Username"];
    $password = $_SESSION["Password"];

    if($username == "" || $password == ""){
        header("Location: index.php");
    }else{
        include_once '../Conf.php';
        include_once '../component/User/class/User.class.php';
        include_once '../component/User/class/UserAdapter.class.php';

        $adapter = new UserAdapter();
        $data = $adapter->SearchDataForSession($username, $password, $mysqli);

        $mysqli->close();
    }
?>

<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
    <head>
		<link href='../img/victoria.ico' rel='shortcut icon' type='image/x-icon' />
		<title>Victoria Sekuritas</title>
        <link href="../css/BackEnd-Blue.css" rel="stylesheet" type="text/css">
    </head>
    <body>
	<div id='container'>
		<div id='header'>
			<div class='company-name'>&nbsp;</div>
			<div class='company-slogan' style='padding-left: 10px;margin-top: 12px;'>AN ACCESS THROUGH THE EXCHANGE</div>
			<div class='company-address' style='padding-left: 10px;'>
				Victoria Suites, Senayan City, Panin Tower 8th Floor.
				Jl. Asia Afrika Lot 19, Jakarta 10270<br/>
				<i>Phone</i> : +62 21 7278 2310  <i style='margin-left: 15px;'>Fax</i> : +62 21 7278 2280
			</div>
			<div class='module_name'></div>
		</div>
		<div id='top-menu'>
			<b>Welcome, <?php echo $data->GetNama() ?></b> |
			<a href='#' id="profile">MyProfile</a> |
			<a href='logout.php'>Logout</a>
		</div>
		<div id='all_content'>
			<div id='left'>
				<div id='side_menu'>
					<div><a class='home' href='#'>Home</a></div>
					<div><a class='user' href='#'>User</a></div>
					<div><a class='news' href='#'>News</a></div>
				</div>
			</div>
			<div id="content">
				<!-- start create content here.> -->		
				<!-- content ends here.> -->
			</div>
		</div>
		<div style='clear: both;'></div>
		<div id='web-info'>
			Copyright &copy;2010 PT. Victoria Sekuritas <br/>
			Web Development by <a href='http://amank.co.cc' target='blank'>Kamal</a>
		</div>	
	</div>
    </body>
</html>
<script type="text/javascript" src="../lib/jquery.js"></script>
<script type="text/javascript" src="../lib/AlertDialog/js/jquery.alerts.js"></script>
<link href="../lib/AlertDialog/css/jquery.alerts.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../lib/Boxy/js/jquery.boxy.js"></script>
<link href="../lib/Boxy/css/boxy.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../lib/DatePicker/js/ui.datepicker.js"></script>
<link href="../lib/DatePicker/css/ui.datepicker.css" rel="stylesheet" type="text/css">
<link href="../lib/DatePicker/css/ui.all.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../lib/TableSorter/js/jquery.tablesorter-2.0.3.js"></script>
<script type="text/javascript" src="../lib/TableSorter/js/jquery.tablesorter.filer.js"></script>
<script type="text/javascript" src="../lib/TableSorter/js/jquery.tablesorter.pager.js"></script>
<link href="../lib/TableSorter/css/style.css" rel="stylesheet" type="text/css">

<!--tinymce library-->
<script type="text/javascript" src="../lib/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript" src="menucontent.js"></script>