<?php
    include_once 'Conf.php';
    include_once 'component/Information/class/Information.class.php';
    include_once 'component/Information/class/InformationAdapter.class.php';

    $informationadapter = new InformationAdapter();
    $informationContent = $informationadapter->SearchDataAsObject($_POST['ID'], $mysqli);
	
	$informationdata = $informationadapter->GetDataAsObject($mysqli);

?>

<div class='main-konten'>
	<div class='center_col' style='min-height: 225px;'>
		<div class='kolom' style='width: 650px;'>
			<div class='kolom-content' style='margin-top: 0;'>
				<div id='isi'>
					<div>
						<h2><?php echo $informationContent->GetTitle() ?></h2>
						<div style='margin-top: 5px;'>
							<b class='news-date'><?php echo date("D, d M Y", strtotime($informationContent->GetDate())); ?></b>
						</div>
						<?php echo $informationContent->GetContent() ?>
					</div>
				</div>
			</div>
		</div>
		<div class='kolom'>
			<div class='kolom-content' style='margin-top: 0;'>
				<div class='content-title'>Latest Market News</div>
					<div id='news'>
						<ul>
						<?php
							foreach ($informationdata as $obj) {
							echo "<li>";
							echo "	<b class='news-date'>", date("D, d M Y",strtotime($obj->GetDate())) ,"</b><br/>";
							echo "	<div id='". $obj->GetNewsId() ."'><a class='news-title' href='#'>", $obj->GetTitle() ,"</a></div>";
							echo "</li>";
							}
						?>
						</ul>
					</div>
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
<script type="text/javascript">
	var curpage = "";

    function StartLoading()
    {
            loading = new Boxy("<div align='center'><img src='img/loading.gif' alt='loading' /></div>",{
                            title: "Loading Page",
                            closeable:false,
                            modal: true
            });
    }
	
     $(".news-title").click(function(){
		curpage = "news";

		var id = $(this).parents().attr("id");
		
		StartLoading();

		$.ajax({

				url: "news-title.php",
				type : "POST",
				data: "ID=" + escape(id),
				success : function(result){
						$("#content").empty().append(result);
						loading.hideAndUnload();
				}
		});
     })
</script>