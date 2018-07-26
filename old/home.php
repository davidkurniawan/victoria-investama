<?php
    include_once 'Conf.php';
    include_once 'component/Information/class/Information.class.php';
    include_once 'component/Information/class/InformationAdapter.class.php';

    $informationadapter = new InformationAdapter();
    $informationdata = $informationadapter->GetDataAsObject($mysqli);
?>

<div class='main-konten'>
	<div class='center_col'>
		<div id='headline'>
			<div id='banner'>
				<img src='img/banner/01-b.jpg' alt='Victoria Sekuritas' width='674' height='300' />
                              </td>
                  <td valign="bottom">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><div id="pagedivider"></div></td>
                </tr>
              </tbody></table>
            </div>


      </div>
      <div class="pagedivider"></div>
      <div class="content_placeholder">

<link type="text/css" rel="stylesheet" href="index.aspx_files/news.css">
<script type="text/javascript" src="index.aspx_files/jquery_003.js"></script>
<script type="text/javascript" src="index.aspx_files/jquery.js"></script>
<script type="text/javascript" src="index.aspx_files/script.js"></script>
<script type="text/javascript">
$(document).ready( function(){

    $obj = $('#lofslidecontent45').lofJSidernews( { interval : 4000,
                                                    easing          : 'easeInOutQuad',
                                                    duration        : 1200,
                                                    auto            : true,
                                                    maxItemDisplay  : 3,
                                                    startItem       : 0,
                                                    navPosition     : 'horizontal', // horizontal
                                                    navigatorHeight : 15,
                                                    navigatorWidth  : 20,
                                                    mainWidth:480} );

});
</script>

            <div class="content_mainpanel">
              <div>

<link type="text/css" rel="stylesheet" href="index.aspx_files/ticker.css">
<script type="text/javascript" language="javascript" src="index.aspx_files/jquery_004.js"></script>



<script type="text/javascript" language="javascript">
var obj;
function start() {
    obj = $("#tickerScroller").simplyScroll({
        autoMode: 'loop'
    });
    //obj.init();
    setTimeout("moveForward()",1000);
}

function moveForward() {
    obj = $("#tickerScroller").simplyScroll({
        startNow: 1
    });
}

$(document).ready(function() {
    start();
});

</script>

              </div>
              <div>
				<!--<img src='img/banner/02.jpg' alt='Victoria Sekuritas' width='674px' height='292px' />-->
			</div>
			<div id='banner-description'>
				<div class='content-title'>Corporate Overview</div>
				<div class='kolom-content'>
					The Company was established in 1989 as PT Tata Sekuritas Maju. In line with a new and broadened vision, the Company then changed its name to PT Victoria Sekuritas in 2000. In 2012 the Company reinvented itself becoming an investment holding company under the name of PT Victoria Investama and since 8 July 2013, the Company listed in Indonesia Stock Exchange and sold its share under the ticker code VICO. 
				</div>
				<div class='readmore'><a id='overview' href='#'>readmore</a></div>
			</div>
		</div>
		<div class='clear'></div>
	</div>
</div>
<div class='main-konten'>
	<div class='center_col'>
<!--		<div class='kolom' style='margin-top: 0;'>
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
		<div class='kolom' style='margin-top: 0;width: 390px;background: url(img/dash.gif) repeat-y right top;'>
			<div class='content-title'><h2>Announcement</h2></div>
			<div class='kolom-content'>
				<h3>Notice To Shareholders</h3>
				<b class='news-date'>1 July 2015</b><br/>
				<div style='margin-top: 10px;'>
					PT VICTORIA INVESTAMA TBK("Company")
<br> </br>
<br>ANNOUNCEMENT SUMMARY ANNUAL GENERAL MEETING OF SHAREHOLDERS AND EXTRAORDINARY GENERAL MEETING OF SHAREHOLDERS VICTORIA INVESTAMA PT TBK</br>
<br> </br>
<li><a href='lib/GCG/2015_07_01_Bukti_Iklan_Hasil_RUPS.pdf'>Download Here</a></li>

				</div>
			</div>
		</div>
		<div class='kolom' style='margin-top: 0;'>
			<div class='content-title'>Stock and Market Indices</div>
			<div class='kolom-content'>
				<iframe src="word-index.php" style='width: 250px;height: 275px;border: 0;margin-top: -7px;margin-left: -5px;' scrolling='no'></iframe>
			</div>
		</div>
		<div class='clear'></div>
	</div>
</div>
<div class='clear' style='height: 20px'></div>
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

     $("#overview").click(function(){
            curpage = "overview";
            StartLoading();
            $.ajax({

                    url: "about.php",
                    type : "POST",
                    success : function(result){
                            $("#content").empty().append(result);
                            loading.hideAndUnload();
                    }
            });
     })

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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40876624-1', 'victoriainvestama.co.id');
  ga('send', 'pageview');

</script>