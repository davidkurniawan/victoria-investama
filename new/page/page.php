<?php
$con = new DB_con();
$cat=$con->select_where('menu','url',$page_request);
$cat_menu=mysql_fetch_object($cat);
$side_menu=$con->select_where('menu','Parent',$cat_menu->id);
$content=$con->select_where('content','url',$page_content);
$data_content=mysql_fetch_object($content);
?>
<body>
    <!--header start-->
    <!--header end-->

    <!-- Sequence Modern Slider -->

    <!--property start-->
      <div class="container">
          <div class="col-md-3  sidebar-bg">
            <div class="sidebar">

            <h3><?=$page_request;?></h3>
            <h4 class="title-red"><?php echo $page_content; ?></h4>

            <ul class="page-footer-list">
              <?php
             while($row=mysql_fetch_object($side_menu))
             {
               echo "
               <li>
                 <a href='/$page_request/$row->url'>$row->MenuName</a>
               </li>";

            }
            ?>
            </ul>
          </div>
          </div>
      <div class="col-md-9 bg-white">
        <h3 class="title-content"><?=$data_content->Title;?></h3>
<?=$data_content->BodyTextEN;?>
        <div class="clearfix"></div>
        <!--
        <div class="row bod">
        @if(isset($bod))
        @foreach ($bod as $bod_list)
        <div class="col-md-4">
        <img src='{!!$bod_list->Photo!!}'>
        <h5>{!!$bod_list->Name!!}</h5>
        <h5 class="tebal">{!!$bod_list->Position!!}</h5>

        {!!substr($bod_list->DescriptionEN, 0, 100)!!}
      </div>
        @endforeach
        @endif
      </div> -->
        <?php
          if($page_content=="about-victoria")
          {
            ?>
        <div class="col-md-6">
          <h3>Vision</h3>
          <hr>
          <div class="clearfix"></div>
          <p>Being an internationally scale top-tier investment company and providing one stop financial service solutions that are trustworthy through its subsidiaries.
          Mission
        </div>
        <div class="col-md-6">
          <h3>Vision</h3>
          <hr>
          <div class="clearfix"></div>
          <ul>
            <li>Investing in companies that have good prospects in order to maximize its shareholders' value</li>
          <li>Providing services and up-to date information in the field of integrated financial services for customers</li>
          <li>Encourage sustainable development of human resources</li>
        </ul>
        </div>
        <? } ?>
      </div>

      </div>

    <div class="container">

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
