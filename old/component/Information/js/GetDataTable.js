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
		url : "../component/Information/NewsData.php",
		type : "POST",
		success : function(result){
			$(".yui tbody").empty().append($(result).find("tbody").html());
			WhenEditedClick();
			GenerateTableSorter();
			dialog.hideAndUnload();
			}
	});
}

function WhenEditedClick(){
	$(".edit").click(function(){
		dialog = new Boxy("<div align='center'><img src='" + "../img/loading.gif' alt='loading' /></div>",{
			title: "Edit Data",
			closeable:false,
			modal: true,
			show: true,
			afterHide: RefreshTableBody
			}
		);

		$.ajax({
			url: "../component/Information/ViewNews.php",
			type: "POST",
			data: "action=UPDATE&ID=" + $(this).parent().parent().attr("id"),
			success: function(result){
				dialog.setContent(result);
			}
		});
	});
}

$(function(){
	WhenEditedClick();
	GenerateTableSorter();
});
