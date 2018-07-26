<?php
    include_once 'Conf.php';
    include_once 'component/Information/class/Information.class.php';
    include_once 'component/Information/class/InformationAdapter.class.php';

    $informationadapter = new InformationAdapter();
    $informationdata = $informationadapter->GetDataAsObject($mysqli);
?>
<!--
<div class='main-konten'>
	<div class='center_col'>
		<div class='kolom'>
			<div class='content-title'>Latest Market News</div>
			<div class='kolom-content'>
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
		-->
		<div class='kolom' style='width: 390px;background: url(img/dash.gif) repeat-y right top;'>
			<div class='content-title'><h2>Announcement</h2></div>
			<div class='kolom-content'>
				<h3>Notice To Shareholders</h3>
				<b class='news-date'>21 May 2015</b><br/>
				<div style='margin-top: 10px;'>
					PT VICTORIA INVESTAMA TBK("Company")
<br> </br>
<br>ANNOUNCEMENT TO THE SHAREHOLDERS</br>
<br> </br>
<br>We hereby announce to all shareholders of the Company ("Shareholders") that the Company will hold a General Meeting of Shareholders and the Meeting of the Extraordinary General Shareholders (the "Meeting") on Monday, June 29th  2015.</br>

<br>Invitation and Agenda for the Meeting will be announced on Friday, June 5th June 2015 in 2 (two) Indonesian language daily newspapers, in accordance with the provisions of Article 12 paragraph (3) of the Articles of Association.</br>

<br>Shareholders who have the right to attend and vote in the Meeting are the shareholders whose names have been registered in the Company’s Shareholders Register on Thursday,  June 04th  2015 until 16:00 pm.</br>

<br>Every proposals from the Shareholders will be included in the Agenda for the Meeting if they meet the requirements of Article 12 paragraph (8) of the Articles of Association of the Company and should be received by the Board of Directors at least seven (7) calendar days prior to the date of the invitation issued by the Company.</br>

<br>Jakarta, May 21st 2015</br>
<br>Board of Directors of the Company</br>
 
				</div>
			</div>
		</div>
		<div class='kolom'>
			<div class='content-title'>Stock and Market Indices</div>
			<div class='kolom-content'>
				<iframe src="word-index.php" style='width: 250px;height: 275px;border: 0;margin-top: -7px;margin-left: -5px;' scrolling='no'></iframe>
			</div>
		</div>
		<div class='clear'></div>
	</div>
</div>
<div class='main-konten'>
	<div class='center_col' style='min-height: 100px;'>
		<img src='img/news.png' class='pageimg' alt='News Victoria Sekuritas' />
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