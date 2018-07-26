<?php

	include_once '../../Conf.php';
	include_once 'class/Information.class.php';
	include_once 'class/InformationAdapter.class.php';
	$adapter = new InformationAdapter();
	$data = $adapter->GetDataAsObject($mysqli);
	$mysqli->close();
?>
<div id="maintext" style="min-height: 383px;">
	<!-- <a href="#" class="insert_new"><img src="../img/add.png" alt="add" style="border:none" />New Data</a> *Comment add by Kamal*-->
	<table class='yui' summary="Information Data" width="100%">
		<thead>
			<tr valign='top'>
				<td colspan='2' class="tableHeader" style='font: bold 14px Verdana,sans-serif; color: #8AC1FA'>News & Information</td>
				
				<td align='right' class="filter" style="border-right: solid 0px #7f7f7f;font-size: 10px">
					<img id='' src="../../lib/TableSorter/img/magnifier.png" title="Search" alt="Search:" />
					<input id="filterBoxOne" value="" maxlength="30" size="17" type="text" />
				</td>
			</tr>
			<tr align='center'>
				<th width='75px;' align='left' style='padding-top: 20px;'><a href='#' title='Click'>Date</a></th>
				<th width='75px;' align='left' style='padding-top: 20px;'><a href='#' title='Click'>Type</a></th>
				<th width='175px;' align='left' style='padding-top: 20px;'><a href='#' title='Click'>Title</a></th>
			</tr>
		</thead>

		<tfoot>
			<tr id="pagerOne" align='center'>
				<td colspan="3" style="border-right: solid 0px #7f7f7f;padding-top: 10px;">
				<img src="../../lib/TableSorter/img/first.png" class="first" alt="first"/>
				<img src="../../lib/TableSorter/img/prev.png" class="prev" alt="prev" />
				<input type="text" class="pagedisplay" style=''/>
				<img src="../../lib/TableSorter/img/next.png" class="next" alt="next" />
				<img src="../../lib/TableSorter/img/last.png" class="last" alt="last" />
				<input type="hidden" class="pagesize" style="font-size: 9px;" value="10" />
				<!--
				<select class="pagesize">
					<option selected="selected" value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
					<option value="50">50</option>
				</select>
				-->
				</td>
			</tr>
		</tfoot>

		<tbody valign='top'>

			<?php

				foreach($data as $obj){
					echo "<tr id='" . $obj->GetNewsId() . "' style='text-align: left;'>";
					echo "<td>" . date("d M Y", strtotime($obj->GetDate())) . "</td>"; 
					echo "<td>" . $obj->GetType() . "</td>";
					echo "<td id='news-title'><a href='#' class='news-title-all' style='text-decoration: none;font-weight: normal'>" . $obj->GetTitle() . "</a></td>";
					echo "</tr>";
				}
				if(count($data) == 0){
					echo "<tr>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "<td>&nbsp;</td>";
					echo "</tr>";
				}
			?>

		</tbody>
	</table>
</div>

<style type='text/css'>
	td #news-title a:hover{
		text-decoration: underline;
	}
	.pagedisplay{
		margin-top: 0;
		background-color: transparent;
		border: 0 none;
		text-align: center;
		width: 35px;
		vertical-align: top;
		font-weight: bold;
		font-size: 9px;
		color: #bcbcbc;
	}
</style>

<script type="text/javascript">
		
	$("#news-container").height(234);
	$("#listticker").height(67);

	$(".news-title-all").click(function(){
		var id = $(this).parent().parent().attr("id");
		var dialog;

		dialog = new Boxy("<div align='center'><img src='" + "../../img/loading.gif' alt='loading' /></div>",{
						title: "Loading Data",
						closeable: true,
						modal: true,
						fixed: true,
						closeable: false
		});


		$.ajax({
		url : "news-viewer.php",
		type : "POST",
		data : "ID=" + id,
		success :
			function(result){
				dialog.hideAndUnload();
				$("#dialog").empty().append(result);
				$('#dialog').dialog('destroy').dialog({
					modal: true,
					width: 'auto',
					height: 'auto'
				});
			}
		});
	});
</script>

<script type="text/javascript" src="../../component/Information/js/GetDataTable.js"></script>
