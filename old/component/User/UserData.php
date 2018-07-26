<?php

	include_once '../../Conf.php';
	include_once 'class/User.class.php';
	include_once 'class/UserAdapter.class.php';

    $adapter = new UserAdapter();
	$data = $adapter->GetDataAsObject($mysqli);
	$mysqli->close();
?>

<div style="margin-right:5px">
	<a href="#" class="insert_new"><img src="../img/add.png" alt="add" style="border:none" />New Data</a>
	<table class='yui' summary="User Data" width="100%">
		<thead>

			<tr>
				<td colspan="3" class="tableHeader">User Data</td>
				<td colspan="7" class="filter" style="border-right: solid 3px #7f7f7f;">
				Search : <input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
				<img id="filterClearOne" src="../lib/TableSorter/img/cross.png" title="Click to clear filter." alt="Clear" />
				
			</tr>
			<tr align='center'>
				<th><a href='#' title='Click'>IdUser</a></th>
				<th><a href='#' title='Click'>Nama</a></th>
				<!--<th><a href='#' title='Click'>Jenis Kelamin</a></th>-->
				<th><a href='#' title='Click'>Alamat</a></th>
				<th><a href='#' title='Click'>Telepon</a></th>
				<th><a href='#' title='Click'>Email</a></th>
				<th><a href='#' title='Click'>Username</a></th>
				<th><a href='#' title='Click'>Action</a></th>
			</tr>
		</thead>

		<tfoot>

			<tr id="pagerOne">
				<td colspan=" 10" style="border-right: solid 3px #7f7f7f;">
				<img src="../lib/TableSorter/img/first.png" class="first" alt="first"/>
				<img src="../lib/TableSorter/img/prev.png" class="prev" alt="prev" />
				<input type="text" class="pagedisplay"/>
				<img src="../lib/TableSorter/img/next.png" class="next" alt="next" />
				<img src="../lib/TableSorter/img/last.png" class="last" alt="last" />
				<select class="pagesize">
					<option selected="selected"  value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
					<option value="50">50</option>
				</select>
				</td>
			</tr>
		</tfoot>

		<tbody valign='top'>

			<?php

				foreach($data as $obj){
					echo "<tr id='" . $obj->GetIdUser() . "'>";
					echo "<td align='center'>" . $obj->GetIdUser() . "</td>";
					echo "<td>" . $obj->GetNama() . "</td>";
					//echo "<td align='center'>" . $obj->GetJenisKelamin() . "</td>";
					echo "<td>" . $obj->GetAlamat() . "</td>";
					echo "<td>" . $obj->GetTelepon() . "</td>";
					echo "<td>" . $obj->GetEmail() . "</td>";
					echo "<td>" . $obj->GetUsername() . "</td>";
					echo "<td align='center'>";
					echo "<img src='../img/edit.png' class='edit' alt='edit' title='edit' />&nbsp;&nbsp;";
					echo "<img src='../img/drop.png' class='delete' alt='delete' title='delete' />&nbsp;";
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
	<script type="text/javascript" src="../component/User/js/GetDataTable.js"></script>
