<?php
	session_start();
	include_once("../Conf.php");
	include_once("../component/User/class/User.class.php");
	include_once("../component/User/class/UserAdapter.class.php");

	$username = strip_tags($_POST["username"]);
	$password = strip_tags($_POST["password"]);

        if(UserAdapter::IsValidLogin($username, $password, $mysqli))
	{
		$_SESSION["Username"] = $username;
		$_SESSION["Password"] = $password;

                header("Location: home.php");
	}
	else{
		header("Location: index.php?err=Invalid Username And Password");
        }
?>