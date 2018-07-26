<?php

	include_once '../../Conf.php';
	include_once 'class/User.class.php';
	include_once 'class/UserAdapter.class.php';
	$componentpath = "component";
	$action = $_POST["action"];
	if($action == "INSERT" or $action == "UPDATE"){
		$data = new User();
			if($action == "UPDATE"){
				$adapter = new UserAdapter();
				$data = $adapter->SearchDataAsObject($_POST["ID"], $mysqli);
				if($data == NULL){
					die("Data tidak ditemukan");
				exit();}
			}
?>

	<table border="0" class="myTable">
		<tr>
			<td width="90px">IdUser</td>
			<td><input type="text" style="width:175px;text-align:center;" class="myTextbox" value="<?php echo (($action == 'UPDATE') ? $data->GetIdUser() : 'AUTO GENERATE'); ?>" id="IdUser" readonly /></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" id="Nama" style="width:175px;" value="<?php echo $data->GetNama()?>"/></td>
		</tr>
		<tr>
			<td>Sex</td>
			<td>
				<select id="JenisKelamin">
					<option <?php echo (($data->GetJenisKelamin() == 'Male') ? "selected" : ''); ?>>Male</option>
					<option <?php echo (($data->GetJenisKelamin() == 'Female') ? "selected" : ''); ?>>Female</option>
				</select>
			</td>
		</tr>
		<tr valign='top'>
			<td>Address</td>
            <td>
				<textarea id="Alamat" rows="3" style="width:175px;"><?php echo $data->GetAlamat()?></textarea>
            </td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="text" id="Telepon" style="width:175px;" value="<?php echo $data->GetTelepon()?>"/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" id="Email" style="width:175px;" value="<?php echo $data->GetEmail()?>"/></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" id="Username" style="width:175px;" value="<?php echo $data->GetUsername()?>"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" id="Password" style="width:175px;" value="<?php echo $data->GetPassword()?>"/></td>
		</tr>
		<tr><!--
			<td>Level</td>
			<td>
				<select id="Level" style="width:100px;">
					<option <?php echo (($data->GetLevel() == 'Admin') ? "selected" : ''); ?>>Admin</option>
					<option <?php echo (($data->GetLevel() == 'User') ? "selected" : ''); ?>>User</option>
				</select>
            </td>
			-->
			<input type="hidden" id="Level" style="width:175px;" value="<?php echo $data->GetLevel()?>"/>
		</tr>
		<tr align="right">
			<td colspan="2">
				<br />
				<input type="button" value="Cancel" class="myButton" id="btnCancel" />
				<input type="button" value="Save" class="myButton" id="btnSave" />
			</td>
		</tr>
	</table>
	<div style="color:red;margin-top:-30px" id="status"></div>
	<?php

	}else{
	 echo"UNKNOWN DATA";  
	}
?>
	<script type="text/javascript">
		var action = "<?php echo $action; ?>";
	</script>
	<script type="text/javascript" src="../component/User/js/ViewData.js"></script>
