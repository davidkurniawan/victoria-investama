<body>
    <!--header start-->

    <!--header end-->

    <!-- Sequence Modern Slider -->
    <section class="slider">
      <div class="flexslider">
        <ul class="slides about-flex-slides">
          <li>
            <div class="about-testimonial-image ">
              <img alt="" src="<?=$base_url;?>assets/img/banner1.png">
            </div>
          </li>
        </ul>

      </div>

    </section>





    <!--property start-->
      <div class="container">
        <div class="box-banner">
          <div class="col-md-3 box-slider">
              <? if($language=="EN")
              {
                  echo "<H6>COMPANY<BR>OVERVIEW</H6><br>";
                  ECHO "<a href=/company/about-victoria>View</a>";
              }
              else
              {
                  echo "<H6>SEKILAS<BR>PERUSAHAAN</H6><br>";
                  ECHO "<a href=/company/about-victoria>Lihat</a>";
              }
              ?>


          </div>
          <div class="col-md-3 box-slider second-box">
              <? if($language=="EN")
              {
                  echo "<H6>INVESTOR<BR>RELATION</H6><br>";
                  ECHO "<a href=/investor-relation>View</a>";
              }
              else
              {
                  echo "<H6>HUBUNGAN<BR>INVESTOR</H6><br>";
                  ECHO "<a href=/investor-relation>Lihat</a>";
              }
              ?>


          </div>
          <div class="col-md-3 box-slider second-box">
              <? if($language=="EN")
              {
                  echo "<H6>GOOD CORPORATE<BR>GOVERANCE</H6><br>";
                  ECHO "<a href=/good-corporate-goverance>View</a>";
              }
              else
              {
                  echo "<H6>TATA KELOLA<BR>PERUSAHAAN</H6><br>";
                  ECHO "<a href=/good-corporate-goverance>Lihat</a>";
              }
              ?>


          </div>
        </div>
      </div>
        <div class="clearfix"></div>
          <div class="home-text">
          <div class="container">


          <div class="col-lg-12 col-sm-12 wow fadeInRight">
            <p>
                <?php
                $home_text=$con->select_where('content','url','about-victoria');
                $front_text=mysql_fetch_object($home_text);
                if($language=="EN")
                {
                    echo strip_tags(substr($front_text->BodyText_en, 0, 650))."...";
                }
                else
                {
                    echo strip_tags(substr($front_text->BodyText_id, 0, 650))."...";
                }

                ?>
            </p>
            <br>
            <a href="/company/about-victoria" style="color:red;font-weight:bold">
                <? if($language=="EN")
{
    echo "READ MORE";
}
else
{
    echo "LEBIH LANJUT";
}
    ?>
            </a>
          </div>
        </div>
      </div>

    <div class="container">
      <div class="row mar-b-50">
        <div class="col-md-4 col-sm-6 ui-sortable no-padding-right">
            <section class="panel panel-red" id="panel-1" data-portlet-item=""  style="min-height:230px">
								<header class="panel-heading portlet-handler">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
									</div>

									<h2 class="panel-title">
                                        <? if($language=="EN")
                                        {
                                            echo "STOCK EXCHANGE";
                                        }
                                        else
                                        {
                                            echo "BURSA SAHAM";
                                        }
                                        ?>
                                    </h2>
								</header>
								<div class="panel-body  dark">
                  <script type="text/javascript">
                  var wt = '5000';
                  var w = '250';
                  var h = '145';
                  var bgc = '171717';
                  var tf = 'arial';
                  var tfs = '15';
                  var tc = 'ffffff';
                  var tbc = '171717';
                  var f = 'arial';
                  var fc = 'fff';
                  var fs = '14';
                  var c = 'US';
                  var tz = '0';
                  <?php
                  $stock=$con->select_where('Stock_Widget','id','1');
                  $stock_symbol=mysql_fetch_object($stock);
                  echo "var cw = '$stock_symbol->symbol';";
                  ?>

                  /*var cw = '^STOXX50E,^IXIC,^GSPC,^FTSE,^GDAXI,^FCHI,^N225,^HSI,^STI,MSFT';*/

                  </script>

                  <script type="text/javascript" src="http://www.stocktrader.org.uk/remote2/ST1-1.php"></script>
              	</div>
							</section>
          <!--feature end-->
        </div>
        <div class="col-md-4 col-sm-6 ui-sortable no-padding">
            <section class="panel panel-red" id="panel-1" data-portlet-item=""  style="min-height:230px">
								<header class="panel-heading portlet-handler">
									<div class="panel-actions">
										<a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
										<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
									</div>

									<h2 class="panel-title">

                                        <? if($language=="EN")
                                        {
                                            echo "LAST NEWS";
                                        }
                                        else
                                        {
                                            echo "BERITA TERBARU";
                                        }
                                        ?>
                                    </h2>
								</header>
								<div class="panel-body red">

								</div>
							</section>
          <!--feature end-->
        </div>
        <div class="col-md-4 col-sm-12 ui-sortable no-padding-left">
            <section class="panel panel-red" id="panel-1" data-portlet-item=""  style="min-height:230px;overflow: hidden;clear: both">
              <?php
              $company=$con->select_where('company_link','id','1');
              $link=mysql_fetch_object($company);
              ?>
              <a href="<?=$link->bank_victoria;?>" target="_blank">
              <div class="col-md-6 col-xs-6 home-logo-bv">
              </div>
            </a>
            <a href="<?=$link->victoria_insurance;?>" target="_blank">
              <div class="col-md-6 col-xs-6 home-logo-vins">
              </div>
              </a>

              <a href="<?=$link->victoria_investama;?>" target="_blank">
              <div class="col-md-6 col-xs-6 home-logo-vi">
              </div>
              </a>

              <a href="<?=$link->victoria_securities;?>">
              <div class="col-md-6 col-xs-6 home-logo-vs">
              </div>
              </a>

              <a href="<?=$link->bank_victoria_syariah;?>" target="_blank">
              <div class="col-md-6 col-xs-6 home-logo-bvis">
              </div>
            </a>
              <a href="<?=$link->vmi;?>" target="_blank">
              <div class="col-md-6 col-xs-6 home-logo-bvmi">
              </div>
              </a>
							</section>
          <!--feature end-->
        </div>
      </div>
    </div>
    <!--property end-->




      <!--recent work start-->


    <!-- service end -->
    <!--container end-->

    <!--footer start-->
    <!-- footer end -->
    <!--small footer start -->

    <!--small footer end-->

    <!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->

  </body>
