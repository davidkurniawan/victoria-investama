var componentPath = "component";

function ValidateBeforeSave(){

	$("#IdUser").val(trim($("#IdUser").val()));
	$("#Nama").val(trim($("#Nama").val()));
	$("#JenisKelamin").val(trim($("#JenisKelamin").val()));
	$("#Alamat").val(trim($("#Alamat").val()));
	$("#Telepon").val(trim($("#Telepon").val()));
	$("#Email").val(trim($("#Email").val()));
	$("#Username").val(trim($("#Username").val()));
	$("#Password").val(trim($("#Password").val()));
	$("#Level").val(trim($("#Level").val()));
	if($("#IdUser").val()=="")
	{
		jAlert('error',"IdUser tidak boleh kosong","Insert Data");
		$("#IdUser").val("").focus();
		return false;
	}
	else if($("#Nama").val()=="")
	{
		jAlert('error',"Nama tidak boleh kosong","Insert Data");
		$("#Nama").val("").focus();
		return false;
	}
	else if($("#JenisKelamin").val()=="")
	{
		jAlert('error',"JenisKelamin tidak boleh kosong","Insert Data");
		$("#JenisKelamin").val("").focus();
		return false;
	}
	else if($("#Alamat").val()=="")
	{
		jAlert('error',"Alamat tidak boleh kosong","Insert Data");
		$("#Alamat").val("").focus();
		return false;
	}
	else if($("#Telepon").val()=="")
	{
		jAlert('error',"Telepon tidak boleh kosong","Insert Data");
		$("#Telepon").val("").focus();
		return false;
	}
	else if($("#Email").val()=="")
	{
		jAlert('error',"Email tidak boleh kosong","Insert Data");
		$("#Email").val("").focus();
		return false;
	}
	else if($("#Username").val()=="")
	{
		jAlert('error',"Username tidak boleh kosong","Insert Data");
		$("#Username").val("").focus();
		return false;
	}
	else if($("#Password").val()=="")
	{
		jAlert('error',"Password tidak boleh kosong","Insert Data");
		$("#Password").val("").focus();
		return false;
	}
	else if($("#Level").val()=="")
	{
		jAlert('error',"Level tidak boleh kosong","Insert Data");
		$("#Level").val("").focus();
		return false;
	}
	return true;
}

function CloseDialogBox()
{
	if(Boxy.get($(".boxy-wrapper").children()) != null)
	Boxy.get($(".boxy-wrapper").children()).hideAndUnload();
}

$(function(){
	$("#btnSave").click(function(){
//		if(ValidateBeforeSave()){
			$("#btnSave").attr("disabled","true");
			$("#btnCancel").attr("disabled","true");
			var urlSend = "";

			if(action == "UPDATE")
				urlSend = "../component/User/MethodUpdateUser.php";
			else
				urlSend = "../component/User/MethodInsertUser.php";

			$("#status").empty().append("Menunggu proses....");

			var passingData = "IdUser=" + escape($("#IdUser").val());
			passingData += "&Nama=" + escape($("#Nama").val());
			passingData += "&JenisKelamin=" + escape($("#JenisKelamin").val());
			passingData += "&Alamat=" + escape($("#Alamat").val());
			passingData += "&Telepon=" + escape($("#Telepon").val());
			passingData += "&Email=" + escape($("#Email").val());
			passingData += "&Username=" + escape($("#Username").val());
			passingData += "&Password=" + escape($("#Password").val());
			passingData += "&Level=" + escape($("#Level").val());
			$.ajax({
				url: urlSend,
				type: "POST",
				data: passingData,
				success: function(result){jAlert('info',result,"Insert Data",CloseDialogBox);}
			});
//		}
	});
	$("#btnCancel").click(function(){
		CloseDialogBox();
	});
});

