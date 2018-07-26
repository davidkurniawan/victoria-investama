<?php
	include_once '../../Conf.php';
	
	include_once 'class/Information.class.php';
	include_once 'class/InformationAdapter.class.php';
	
	$Information = new Information;

	$Information->SetNewsId(strip_tags($_POST["NewsId"]));
	$Information->SetType(strip_tags($_POST["Type"]));
	$Information->SetDate(strip_tags($_POST["Date"]));
	$Information->SetTitle(strip_tags($_POST["Title"]));
	$Information->SetContent(str_replace(array('\"',"\'"), array('"',"'"), $_POST["Content"]));

	$adapter = new InformationAdapter();

	if($adapter->UpdateData($Information, $mysqli))
		echo "Sukses Update Data.";
	else
		echo "Update Failed.<br/>Error :<br/>" . $adapter->GetLastErrorMessage();
	
	$mysqli->close();
?>
