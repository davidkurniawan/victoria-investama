<div class='main-konten'>
	<div class='center_col' style='min-height: 225px;'>
		<div class='kolom' style='width: 200px;'>
			<div class='content-title'>Our Services</div>
			<div class='kolom-content' style='margin-top: 0;'>
				<div id='left-menu'>
<!--					<div class='menuTitle'>Brokerage</div>
					<ul class='leftMenu'>
						<li><a class='equity' href='#'>Equity</a></li>
						<li><a class='fixed-income' href='#'>Fixed Income</a></li>
					</ul>
-->					<div class='menuTitle'>Corporate Finance</div>
					<ul class='leftMenu'>
						<li><a class='advisory' href='#'>Advisory</a></li>
<!--						<li><a class='underwriting' href='#'>Underwriting</a></li>
-->						<li><a class='arranging' href='#'>Arranger</a></li>
					</ul>
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
		<img src='img/services.png' class='pageimg' alt='About Victoria Sekuritas' />
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

            url: "serviceshome.php",
            type : "POST",
            success : function(result){
                    $("#isi").empty().append(result);

            }
    });

     $(".equity").click(function(){
        if(curpage != "equity"){
            curpage = "equity";
            StartLoading();
            $.ajax({

                    url: "equity.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
        }
     })

     $(".fixed-income").click(function(){
        if(curpage != "fixed-income"){
            curpage = "fixed-income";
            StartLoading();
            $.ajax({

                    url: "fixed-income.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
        }
     })

     $(".advisory").click(function(){
        if(curpage != "advisory"){
            curpage = "advisory";
            StartLoading();
            $.ajax({

                    url: "advisory.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
        }
     })

     $(".underwriting").click(function(){
        if(curpage != "underwriting"){
            curpage = "underwriting";
            StartLoading();
            $.ajax({

                    url: "underwriting.php",
                    type : "POST",
                    success : function(result){
                            $("#isi").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
        }
     })

     $(".arranging").click(function(){
        if(curpage != "arranging"){
            curpage = "arranging";
            StartLoading();
            $.ajax({

                    url: "arranging.php",
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