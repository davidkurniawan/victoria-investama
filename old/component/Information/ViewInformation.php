<?php

	include_once '../../Conf.php';
	include_once 'class/Information.class.php';
	include_once 'class/InformationAdapter.class.php';
	$action = $_POST["action"];
	if($action == "INSERT" or $action == "UPDATE"){
		$data = new Information();
			if($action == "UPDATE"){
				$adapter = new InformationAdapter();
				$data = $adapter->SearchDataAsObject($_POST["ID"], $mysqli);
				if($data == NULL){
					die("Data tidak ditemukan");
				exit();}
			}
?>

	<table border="0" class="myTable">
		<tr>
			<td width="75px">NewsId</td>
			<td><input type="text" style="width: 200px;text-align: center;" maxlength="13" style="text-align:center;" class="myTextbox" value="<?php echo (($action == 'UPDATE') ? $data->GetNewsId() : ''); ?>" id="NewsId"  /></td>
		</tr>
		<tr>
			<td>Type</td>
			<td>
				<select id="Type" style="width: 100px;">
					<option <?php if($data->GetType()=="News") echo 'selected'; ?> value="News">News</option>
					<option <?php if($data->GetType()=="Information") echo 'selected'; ?> value="Information">Information</option>
				</select>
            </td>
		</tr>
		<tr>
			<td>Date</td>
			<td><input type="text" id="Date" style="width: 100px;" value="<?php echo $data->GetDate()?>" readonly /></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" maxlength="50" id="Title" style="width: 200px;" value="<?php echo $data->GetTitle()?>" maxlength='100' /></td>
		</tr>
		<tr>
			<td valign='top'>Content</td>
            <td>
                <textarea id="Content" rows="5"  style="width:200px;"><?php echo $data->GetContent()?></textarea> <!-- php add by Kamal -->
            </td>
		</tr>
		<tr align="right">
			<td colspan="2">
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
	<script type="text/javascript" src="../component/Information/js/ViewData.js"></script>