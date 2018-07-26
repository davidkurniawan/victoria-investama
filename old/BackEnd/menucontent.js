var curpage = "";
var passingData;

function StartLoading()
{
		loading = new Boxy("<div align='center'><img src='../img/loading.gif' alt='loading' /></div>",{
						title: "Loading Page",
						closeable:false,
						modal: true
		});
}

function GetContentBack(){
		curpage = "Home";
		StartLoading();

		$.ajax({

				url : "profile.php",
				type : "POST",
				success : function(result){
						$("#content").empty().append(result);
						
				}
		});

		$.ajax({

				url : "headerpage.php",
				type : "POST",
				data : "page=" + curpage ,
				success : function(result){
						$(".module_name").empty().append(result);
						loading.hideAndUnload();
				}
		});
}

function UserData(){
		curpage = "UserData";
		StartLoading();
		$.ajax({

				url : "../component/User/UserData.php",
				type : "POST",
				success : function(result){
						$("#content").empty().append(result);
						loading.hideAndUnload();
				}
		});

		$.ajax({

				url : "headerpage.php",
				type : "POST",
				data : "page=" + curpage ,
				success : function(result){
						$(".module_name").empty().append(result);
						loading.hideAndUnload();
				}
		});
 }

function InformationData(){
		curpage = "Information";
		StartLoading();
		$.ajax({

				url : "../component/Information/NewsData.php",
				type : "POST",
				success : function(result){
						$("#content").empty().append(result);
						loading.hideAndUnload();
				}
		});

		$.ajax({

				url : "headerpage.php",
				type : "POST",
				data : "page=" + curpage ,
				success : function(result){
						$(".module_name").empty().append(result);
						loading.hideAndUnload();
				}
		});
 }

function MyProfileData(){
		curpage = "MyProfile";
		StartLoading();
		$.ajax({

				url : "profile.php",
				type : "POST",
				success : function(result){
						$("#content").empty().append(result);
						loading.hideAndUnload();
				}
		});

		$.ajax({

				url : "headerpage.php",
				type : "POST",
				data : "page=" + curpage ,
				success : function(result){
						$(".module_name").empty().append(result);
						loading.hideAndUnload();
				}
		});
 }


$(function(){

curpage = "Home";
StartLoading();

$.ajax({

        url : "profile.php",
        type : "POST",
        success : function(result){
                $("#content").empty().append(result);

        }
});

$.ajax({

        url : "headerpage.php",
        type : "POST",
        data : "page=" + curpage ,
        success : function(result){
                $(".module_name").empty().append(result);
                loading.hideAndUnload();
        }
});

$(".home").click(function(){
        if(curpage != "Home")
            MyProfileData()
    })
});

$(function(){
    $(".user").click(function(){
        if(curpage != "UserData")
            UserData()
    })
});

$(function(){
    $(".news").click(function(){
        if(curpage != "Information")
            InformationData()
    })
});

$(function(){
    $("#profile").click(function(){
        if(curpage != "MyProfile")
            MyProfileData()
    })
});