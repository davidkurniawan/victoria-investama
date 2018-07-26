<div class='main-konten'>
	<div class='center_col' style='min-height: 225px;'>
		<div class='kolom' style='width: 200px;'>
			<div class='kolom-content' style='margin-top: 0;'>
				<div class='content-title'>About Victoria Investama</div>
				<div id='left-menu'>
					<div class='menuTitle'><a class='overview' href='#'>Overview</a></div>
					<div class='menuTitle'><a class='milestone' href='#'>Milestone</a></div>
					<div class='menuTitle'><a class='visi-misi' href='#'>Vision &amp; Mission</a></div>
<!--					<div class='menuTitle'><a class='management' href='#'>Management</a></div>-->
					<div class='menuTitle'><a class='credentials' href='#'>Credentials</a></div>
				</div>
			</div>
		</div>
		<div class='kolom' style='width: 725px;'>
			<div class='kolom-content' style='margin-top: 0;'>
				<div id='isi'></div>
			</div>
		</div>
	</div>
</div>
<div class='main-konten'>
	<div class='center_col' style='min-height: 100px;'>
		<img src='img/about.png' class='pageimg' alt='About Victoria Sekuritas' />
	</div>
	<div class='clear'></div>
</div>

<script type='text/javascript'>

$(function(){
    var curpage = "";
    var passingData;

    function StartLoading()
    {
            loading = new Boxy("<div align='center'><img src='img/loading.gif' alt='loading' /></div>",{
                            title: "Loading Page",
                            closeable:false,
                            modal: true
            });
    }

    $.ajax({

            url: "abouthome.php",
            type : "POST",
            success : function(result){
                    $("#isi").empty().append(result);

            }
    });

     $(".overview").click(function(){
        if(curpage != "overview"){
            curpage = "overview";
            StartLoading();
            $.ajax({

                    url: "abouthome.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
        }
     })

     $(".milestone").click(function(){
        if(curpage != "milestone"){
            curpage = "milestone";
            StartLoading();
            $.ajax({

                    url: "milestone.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
        }
     })

     $(".visi-misi").click(function(){
        if(curpage != "visi-misi"){
            curpage = "visi-misi";
            StartLoading();
            $.ajax({

                    url: "visi-misi.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
        }
     })

     $(".management").click(function(){
        if(curpage != "management"){
            curpage = "management";
            StartLoading();
            $.ajax({

                    url: "management.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
        }
     })

     $(".credentials").click(function(){
        if(curpage != "credentials"){
            curpage = "credentials";
            StartLoading();
            $.ajax({

                    url: "credentials.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
        }
     })

});

</script>