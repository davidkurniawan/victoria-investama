<?php
include_once '../../Conf.php';
include_once 'class/Information.class.php';
include_once 'class/InformationAdapter.class.php';
	if(empty($_POST["NewsId"])||empty($_POST["Type"])||empty($_POST["Title"])||empty($_POST["Content"])||empty($_POST["Date"]))
		echo "Gagal Update Information";
	else 
	{
		$Information = new Information;

		$Information->SetNewsId(strip_tags($_POST["NewsId"]));
		$Information->SetType(strip_tags($_POST["Type"]));
		$Information->SetTitle(strip_tags($_POST["Title"]));
		$Information->SetContent(strip_tags($_POST["Content"]));
		$Information->SetDate(strip_tags($_POST["Date"]));

		$adapter = new InformationAdapter();

		if($adapter->UpdateData($Information, $mysqli))
		echo "Sukses Update Information".$adapter->GetLastErrorMessage();
		else
		echo "Gagal Update Information".$adapter->GetLastErrorMessage();

	}
?>
