<?php
	include_once 'class/Information.class.php';
	include_once 'class/InformationAdapter.class.php';

	if(file_exists('../../Conf.php'))
		include_once('../../Conf.php'); //ini load yg pake ajax
	else if(file_exists('Conf.php'))
		include_once('Conf.php'); // ini load yg pake include
	
	$adapter = new InformationAdapter();
	$data = $adapter->GetDataAsObject($mysqli);
	
	$mysqli->close();
?>

<div style="margin-right:5px">
<!--	<a href="#" class="insert_new"><img src="../img/add.png" alt="add" style="border:none" />New Data</a> *Comment add by Kamal* -->
	<table class='yui' summary="Information Data" width="100%">
		<thead>
			<tr>
				<td colspan="2" class="tableHeader">News & Information</td>
				<td colspan="3" class="filter" style="border-right: solid 3px #7f7f7f;">
				Search : <input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
				<img id="filterClearOne" src="../lib/TableSorter/img/cross.png" title="Click to clear filter." alt="Clear" />
				
			</tr>
			<tr align='center'>
				<th width='100px'><a href='#' title='Click'>NewsId</a></th>
				<th width='100px'><a href='#' title='Click'>Type</a></th>
				<th><a href='#' title='Click'>Title</a></th>
				<th><a href='#' title='Click'>Date</a></th>
				<th width='100px'><a href='#' title='Click'>Action</a></th>
			</tr>
		</thead>

		<tfoot>
			<tr id="pagerOne">
				<td colspan=" 5" style="border-right: solid 3px #7f7f7f;">
				<img src="../lib/TableSorter/img/first.png" class="first" alt="first"/>
				<img src="../lib/TableSorter/img/prev.png" class="prev" alt="prev" />
				<input type="text" class="pagedisplay"/>
				<img src="../lib/TableSorter/img/next.png" class="next" alt="next" />
				<img src="../lib/TableSorter/img/last.png" class="last" alt="last" />
				<select class="pagesize">
					<option selected="selected" value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
					<option value="50">50</option>
				</select>
				</td>
			</tr>
		</tfoot>

		<tbody>

			<?php

				foreach($data as $obj){
					echo "<tr id='" . $obj->GetNewsId() . "' style='text-align: center;'>";
					echo "<td>" . $obj->GetNewsId() . "</td>";
					echo "<td>" . $obj->GetType() . "</td>";
					echo "<td align='left'>" . $obj->GetTitle() . "</td>";
					echo "<td>" . date("d M Y", strtotime($obj->GetDate())) . "</td>"; 
					echo "<td align='center'>";
					echo "<img src='../img/edit.png' class='edit' alt='edit' title='edit' />&nbsp;&nbsp;";
					// echo "<img src='../img/drop.png' class='delete' alt='delete' title='delete' />&nbsp;"; <-- Comment add by Kamal
					echo "</td>";
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
<script type="text/javascript" src="../component/Information/js/GetDataTable.js"></script>