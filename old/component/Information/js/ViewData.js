var componentPath = "component";

function ValidateBeforeSave()
{
	$("#Title").val($("#Title").val());
		
	if($("#Title").val()=="")
	{
		jAlert('error',"Title tidak boleh kosong","Insert Data");
		$("#Title").val("").focus();
		return false;
	}
	else if(tinyMCE.get('Content').getContent()=="")
	{
		jAlert('error',"Content tidak boleh kosong","Insert Data");
		$("#Content").val("").focus();
		return false;
	}

	return true;
}

function CloseDialogBox()
{
	if(Boxy.get($(".boxy-wrapper").children()) != null)
	Boxy.get($(".boxy-wrapper").children()).hideAndUnload();
	
	tinyMCE.execCommand('mceRemoveControl', false, 'Content');
}

$(function()
{		
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		editor_selector : "Content",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,forecolor,backcolor,|,link,unlink",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true

	});		
						
	$("#btnSave").click(function(){
		if(ValidateBeforeSave())
		{
			$("#btnSave").attr("disabled","true");
			$("#btnCancel").attr("disabled","true");
			
			var urlSend = "";
							
			if(action == "UPDATE")
				urlSend = "../component/Information/MethodUpdateNews.php";
			else
				urlSend = "../component/Information/MethodInsertInformation.php";
			
			$("#status").empty().append("Menunggu proses....");

			var passingData = "NewsId=" + escape($("#NewsId").val());
			passingData += "&Type=" + escape($("#Type").val());
			passingData += "&Date=" + escape($("#Date").val());
			passingData += "&Title=" + escape($("#Title").val());
			passingData += "&Content=" + escape(tinyMCE.get('Content').getContent());

			$.ajax({
				url: urlSend,
				type: "POST",
				data: passingData,
				success: function(result){
					jAlert('info',result,"Manage Data",CloseDialogBox);
				}
			});
		}
	});
	
	$("#btnCancel").click(function(){
		CloseDialogBox();
	});

	$("#Date").datepicker({
		dateFormat: "yy-mm-dd"
	});
});

