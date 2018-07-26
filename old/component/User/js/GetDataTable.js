var componentPath = "component";
var dialog;

function GenerateTableSorter(){
	$(".yui")
		.tablesorter({ debug: false, sortList: [[0, 0]], widgets: ['zebra'] })
		.tablesorterPager({ container: $("#pagerOne"), positionFixed: false, size: 10 })
		.tablesorterFilter({
		filterContainer: $("#filterBoxOne"),
		filterClearContainer: $("#filterClearOne"),
		filterCaseSensitive: false
});
}

function RefreshTableBody(){
	dialog = new Boxy("<div align='center'><img src='../img/loading.gif' alt='loading' /></div>",{
	title: "Refresh Table",
	closeable:false,
	modal: true
});

$.ajax({
	url : "../component/User/UserData.php",
	type : "POST",
	success : function(result){
		$(".yui tbody").empty().append($(result).find("tbody").html());
		WhenEditedClick();
		WhenDeletedClick();
		GenerateTableSorter();
		dialog.hideAndUnload();
		}
	});
}

function WhenDeletedClick(){
	$(".delete").click(function(){
		var id = $(this).parent().parent().attr("id");
		jConfirm("Anda yakin ingin delete Data : <br />ID : " + id , 'Delete Data',
			function(value){
				if(value){
					dialog = new Boxy("<div align='center'><img src='" + "../component/User/img/loading.gif' alt='loading' /></div>",{
						title: "Delete Data",
						closeable:false,
						modal: true
					});

					$.ajax({
					url : "../component/User/MethodDeleteUser.php",
					type : "POST",
					data : "IdUser=" + escape(id),
					success :
						function(result){
							dialog.hideAndUnload();
							jAlert("info",result,"Delete Data",RefreshTableBody);
						}
					});
				}
			},"Delete Data"
		);
	});
}

function WhenEditedClick(){
	$(".edit").click(function(){
		dialog = new Boxy("<div align='center'><img src='" + "../component/User/img/loading.gif' alt='loading' /></div>",{
			title: "Edit Data",
			closeable:false,
			modal: true,
			show: true,
	afterHide: RefreshTableBody
		}
	);

	$.ajax({
		url: "../component/User/ViewUser.php",
		type: "POST",
		data: "action=UPDATE&ID=" + $(this).parent().parent().attr("id"),
		success: function(result){
			dialog.setContent(result);
		}
	});
	});
}

function WhenInsertClick(){
	$(".insert_new").click(function(){
		dialog = new Boxy("<div align='center'><img src='" + "../component/User/img/loading.gif' alt='loading' /></div>",{
			title: "Insert Data",
			closeable:false,
			modal: true,
			show: true,
			afterHide: RefreshTableBody
		}
	);

	$.ajax({
		url: "../component/User/ViewUser.php",
		type: "POST",
		data: "action=INSERT",
		success: function(result){
			dialog.setContent(result);
		}
	});
	});
}

$(function(){
	WhenInsertClick();
    WhenEditedClick()
	WhenDeletedClick();
	GenerateTableSorter();
});
