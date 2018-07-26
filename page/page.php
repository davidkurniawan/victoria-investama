
<?php
$page_url=$page_request."/".$page_content;
if($page_request=="company" or
$page_request=="services" or
$page_request=="investor-relation" or
$page_request=="corporate-social-responsibility" or
$page_request=="connect" or
$page_request=="good-corporate-goverance"

)
{
  if($page_request=="good-corporate-goverance" and $page_content=="")
  {
    $page_content="good-coorporate-governance";
  }
  if($page_request=="company" and $page_content=="")
  {
    $page_content="about-victoria";
  }
  if($page_request=="services" and $page_content=="")
  {
    $page_content="overview";
  }
  if($page_request=="corporate-social-responsibility" and $page_content=="")
  {
    $page_content="csr-overview";
  }
  if($page_request=="connect" and $page_content=="")
  {
    $page_content="contact-us";
  }
    if($page_request=="investor-relation" and $page_content=="" or $page_content=="financial-overview")
    {
        $page_content="financial-overview";
        if($sub_content=="")
        {
            $sub_content = "hightlights";
        }
    }
}
$con = new DB_con();
$cat=$con->select_where('menu','url',$page_request);
$cat_menu=mysql_fetch_object($cat);
$side_menu=$con->select_where('menu','Parent',$cat_menu->id);
$content=$con->select_where('content','url',$page_content);

$data_content=mysql_fetch_object($content);
$active_menu=$con->select_where('menu','url',$page_content);
$active_menu_name=mysql_fetch_object($active_menu);

?>
<body>
    <!--header start-->
    <!--header end-->

    <!-- Sequence Modern Slider -->

    <!--property start-->
      <div class="page_container">
          <div class="col-md-4   sidebar-bg">
            <div class="col-md-8 col-sm-5 col-md-offset-5 ">

            <h3>
                <?
                if ($language=="EN")
                {
                    echo ($cat_menu->MenuName);
                }
                else
                {
                    echo ($cat_menu->MenuNameID);
                }
                ?>
            </h3>
            <h4 class="title-red">
                <?
                if ($language=="EN")
                {
                    echo $active_menu_name->MenuName;
                }
                else
                {
                    echo $active_menu_name->MenuNameID;
                }
                ?>
            </h4><br>

            <ul class="side-menu">
              <?php
             while($row=mysql_fetch_object($side_menu))
             {
               echo "<li>
                 <a href='/$page_request/$row->url'>";
              if ($language=='EN')
              {
                  echo $row->MenuName;
              }
              else
              {
                  echo $row->MenuNameID;
              }
               echo " </a> </li>";

            }
            ?>
            </ul>
          </div>
          </div>
      <div class="col-md-8 bg-white">
        <div class="col-md-10">
          <div>
            <?php
            session_start();
              if(isset($_SESSION['msg']))
            {

            ?>
            <div class="alert alert-success alert-block fade in">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="fa fa-times"></i>
                                  </button>
                                  <p><?=$_SESSION['msg'];?></p>
                              </div>
            <?
            unset($_SESSION['msg']);
            }
            if($page_content=="contact-us")
            {

              $con = new DB_con();
              $contact_us=$con->select_where('contact_us','id','1');
              $contact=mysql_fetch_object($contact_us);
              ?>
                <?php
                if($language=="EN")
                {
                    ?>
                    <h3 class="title-content">Contact</h3>
                    <?
                }
                else
                {?>
                    <h3 class="title-content">Hubungi Kami</h3>
                <?}
                ?>
              <div class="col-md-4">
                <h5 class="title-red"><?=$contact->company_name;?></h5>

                <p><?=$contact->address;?>
                <p>

              </div>
              <div class="col-md-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.5690083915557!2d106.79694018135456!3d-6.227291189513295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x947e7b8195ac9623!2sPanin+Tower!5e0!3m2!1sid!2sid!4v1454546052668" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="clearfix"></div>
                <div class="col-md-12">
                  <p>
                      <?php
                      if($language=="EN")
                      {
                      ?>
                    <h4>Phone</h4>
                    <?
                    }
                    else
                    {?>
                        <h4>Telepon</h4>
                    <?}
                    ?>

                  <?=$contact->phone;?>
                </p><br>
                <p>
                  <h4>Fax</h4>
                  <?=$contact->phone;?>
                  </p><br>
<p>
                  <h4>Email</h4>
                  <?=$contact->email;?><br>
                  </p>


              </div>

              <?

            }
             ?>
            <div class="portlet">
                <div class="portlet-body">
                    <div>
                      <?php
                      if($page_content=="contact-us")
                      {
                       if($language=="EN")
                       {
                           echo  '<h3 class="toggle-trigger toggle-trigger-active">SEND US MESSAGE</h3>';
                       }
                          else
                          {
                              echo  '<h3 class="toggle-trigger toggle-trigger-active">KIRIM PESAN</h3>';
                          }
                          echo '
                          <form class="form-horizontal tasi-form" method="post" action="/lib/mail.php">
                            <input type="hidden" name="to" value='.$contact->mailbox_address.'>';

                        echo '<div class="toggle-container toggle-container-opened contact-form">'; ?>
                        <div class=col-md-4>
                          <div class="form-input">
                        <input type=text name=name placeholder="Name">
                        <input type=text name=email placeholder="Email">
                        <input type=text name=subject placeholder="Subject">
                        </div>
                      </div>
                        <div class=col-md-8>
                          <div class="form-input">
                        <textarea name="message" placeholder="Your Message"></textarea>
                        <input type="submit" value="SEND" class="btn pull-right">
                        </div>
                        </div>
                      </form>
                        <?
                        echo '</div>';
                      }

                       ?>
                      <?php
                      if($page_content=="prospectus")
                      {
                        echo '<h3 class="title-content">'.ucfirst (str_replace("-"," ",$page_content)).'</h3>';
                        $prospectus=$con->select_distinct('prospectus','Year');
                        $a=0;
                        while($prospectus_data=mysql_fetch_object($prospectus))
                        {
                          $a=$a+1;
                          $prospectus_sort=$con->select_where('prospectus','Year',$prospectus_data->Year);

                          if($a=1)
                          {
                            echo  '<h3 class="toggle-trigger toggle-trigger-active">'.$prospectus_data->Year.'</h3>';
                            echo '<div class="toggle-container toggle-container-opened">';
                          }
                          else {
                            echo  '<h3 class="toggle-trigger toggle-trigger">'.$prospectus_data->Year.'</h3>';
                            echo '<div class="toggle-container toggle-container-opened">';
                          }
                            echo ' <div id="table-scroll">';
                          echo '<table class=dividend_history_table style="margin-left:-20px;width:710px">';
                          echo '<thead>';
                          echo '<tr>';
                          echo '<th>Year</th>';
                          echo '<th>Information</td>';
                            echo '<th>Download</td>';
                          echo '</tr>';
                          echo '</thead>';
                          echo '<tbody class="tbody_center">';
                          while($prospectus_sort_data=mysql_fetch_object($prospectus_sort))
                          {
                            echo '<tr>';
                            echo '<td>'.$prospectus_sort_data->Year.'</td>';
                            echo '<td>'.$prospectus_sort_data->Information.'</td>';
                            echo '<td><a href="'.$prospectus_sort_data->File.'" download><img src=/assets/img/btn_pdf.png></a></td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                            echo '</div>';
                        echo '</div>';
                                    echo '<div class="clearfix"></div>';
                        }

                      }
                      ?>

                      <?php
                      if($page_content=="information-disclosure")
                      {

                        echo '<h3 class="title-content">';
                if ($language=="EN")
                {
                    echo ucfirst(strtolower($active_menu_name->MenuName));
                }
                else
                {
                    echo ucfirst(strtolower($active_menu_name->MenuNameID));
                }
                          echo '</h3>';
                        $information_disclosure=$con->select_distinct('information_disclosure','Year');
                        $a=0;
                        while($information_disclosure_data=mysql_fetch_object($information_disclosure))
                        {
                          $a=$a+1;
                          $information_disclosure_sort=$con->select_where('information_disclosure','Year',$information_disclosure_data->Year);

                          if($a=1)
                          {
                            echo  '<h3 class="toggle-trigger toggle-trigger-active">'.$information_disclosure_data->Year.'</h3>';
                            echo '<div class="toggle-container toggle-container-opened">';
                          }
                          else {
                            echo  '<h3 class="toggle-trigger toggle-trigger">'.$information_disclosure_data->Year.'</h3>';
                            echo '<div class="toggle-container toggle-container-opened">';
                          }
                          echo ' <div id="table-scroll">';
                          echo '<table class=dividend_history_table style="margin-left:-40px;width:700px">';
                          echo '<thead>';
                          echo '<tr>';
                          echo '<th></th>';
                          echo '<th>Year</th>';
                          echo '<th>Information</td>';
                            echo '<th>Download</td>';
                          echo '</tr>';
                          echo '</thead>';
                          echo '<tbody class="tbody_left" >';
                          while($information_disclosure_sort_data=mysql_fetch_object($information_disclosure_sort))
                          {
                            echo '<tr >';
                            echo '<td></td>';
                            echo '<td>'.$information_disclosure_sort_data->Year.'</td>';
                            if ($language=="EN")
                            {
                                echo '<td>'.$information_disclosure_sort_data->Information.'</td>';
                            }
                            else
                            {
                                echo '<td>'.$information_disclosure_sort_data->InformationId.'</td>';
                            }

                            echo '<td><a href="'.$information_disclosure_sort_data->File.'" download><img src=/assets/img/btn_pdf.png></a></td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                            echo '</div>';
                        echo '</div>';
                                    echo '<div class="clearfix"></div>';
                        }

                      }
                      ?>

                      <?php
                      if($page_content=="general-meetings-of-shareholders")
                      {
                          echo '<h3 class="title-content">';
                          if ($language=="EN")
                          {
                              echo ucfirst(strtolower($active_menu_name->MenuName));
                          }
                          else
                          {
                              echo ucfirst(strtolower($active_menu_name->MenuNameID));
                          }
                          echo '</h3>';

                        $gmsh=$con->select_distinct('general_meeting_shareholder','Year');
                        $a=0;
                        while($gmsh_data=mysql_fetch_object($gmsh))
                        {
                          $a=$a+1;
                          $gmsh_sort=$con->select_where('general_meeting_shareholder','Year',$gmsh_data->Year);

                          if($a=1)
                          {
                            echo  '<h3 class="toggle-trigger toggle-trigger-active">'.$gmsh_data->Year.'</h3>';
                            echo '<div class="toggle-container toggle-container-opened">';
                          }
                          else {
                            echo  '<h3 class="toggle-trigger toggle-trigger">'.$gmsh_data->Year.'</h3>';
                            echo '<div class="toggle-container toggle-container-opened">';
                          }
                            echo ' <div id="table-scroll">';
                          echo '<table class=dividend_history_table style="margin-left:-40px;width:710px">';
                          echo '<thead>';
                          echo '<tr>';
                          echo '<th></th>';
                          if ($language=="EN")
                          {
                          echo '<th>Year</th>';
                        }
                        else {
                          echo '<th>Tahun</th>';
                        }
                        if ($language=="EN")
                        {
                        echo '<th>Information</th>';
                      }
                      else {
                        echo '<th>Informasi</th>';
                      }
                      if ($language=="EN")
                      {
                      echo '<th>Download</th>';
                    }
                    else {
                      echo '<th>Unduh</th>';
                    }
                          echo '</tr>';
                          echo '</thead>';
                          echo '<tbody class="tbody_left" >';
                          while($gmsh_sort_data=mysql_fetch_object($gmsh_sort))
                          {
                            echo '<tr >';
                            echo '<td></td>';
                            echo '<td>'.$gmsh_sort_data->Year.'</td>';
                            if ($language=="EN")
                            {
                            echo '<td>'.$gmsh_sort_data->Information.'</td>';
                          }
                          else {
                            echo '<td>'.$gmsh_sort_data->InformationId.'</td>';
                          }

                            echo '<td><a href="'.$gmsh_sort_data->File.'" download><img src=/assets/img/btn_pdf.png></a></td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                            echo '</div>';
                        echo '</div>';
                                    echo '<div class="clearfix"></div>';
                        }

                      }
                      ?>
                    </div>
                </div>
            </div>
        </div>
            <?php
            if($page_content=="committee") {
                $SubContent = $con->select_where('SubContent', 'ParentUrl', $page_url);
                $CheckSubContent = mysql_num_rows($SubContent);
                if ($CheckSubContent != 0) {

                    if ($sub_content == "") {
                        $subcontent_url = $con->select_where('SubContent', 'id', 1);
                        $default_subcontent = mysql_fetch_object($subcontent_url);
                        $subcontent = $default_subcontent->url;
                    } else {
                        $subcontent = $sub_content;
                    }
                    $page_content = $page_content . "/" . $subcontent;
                    $default_content = $con->select_where('content', 'Url', $subcontent);
                    $SubContentDefault = mysql_fetch_object($default_content);
                    if($language=="EN") {
                        echo '<h3>' . $SubContentDefault->Title_en . '</h3>';
                    }
                    else
                    {
                        echo '<h3>' . $SubContentDefault->Title_id . '</h3>';
                    }
                    echo "<div class=submenu_content_box>";

                    while ($SubContentList = mysql_fetch_object($SubContent)) {
                        if ($sub_content == $SubContentList->url) {
                            echo "<a href='/$page_url/$SubContentList->url' class='submenu_content submenu_content_active'>";
                            if($language=="EN")
                            {
                                echo $SubContentList->MenuName;
                            }
                            else
                            {
                                echo $SubContentList->MenuNameID;
                            }

                            echo "</a>";
                        } else {
                            echo "<a href='/$page_url/$SubContentList->url' class='submenu_content'>";
                            if($language=="EN")
                            {
                                echo $SubContentList->MenuName;
                            }
                            else
                            {
                                echo $SubContentList->MenuNameID;
                            }
                            echo "</a>";
                        }

                    }
                    echo "</div>";


                    echo '<div class="clearfix"></div>';
                    if($language=="EN") {
                        echo $SubContentDefault->BodyText_en;
                    }
                    else
                    {
                        echo $SubContentDefault->BodyText_id;
                    }
                    if ($subcontent == "audit-committee")
                    {
                        if($language=="EN")
                        {
                            echo "<h3 style='margin-top: 50px'>Members of Audit Committee:</h3>";
                        }
                        else
                        {
                            echo "<h3 style='margin-top: 50px'>Anggota Komite Audit:</h3>";
                        }


                    } elseif ($subcontent == "investment-committee") {
                        if($language=="EN")
                        {
                            echo "<h3 style='margin-top: 50px'>Members of Investment Committee:</h3>";
                        }
                        else
                        {
                            echo "<h3 style='margin-top: 50px'>Anggota Komite Investasi:</h3>";
                        }

                    } else {
                        if($language=="EN")
                        {
                            echo "<h3 style='margin-top: 50px'>Members of Renumerartion & Nomination Committee:</h3>";
                        }
                        else
                        {
                            echo "<h3 style='margin-top: 50px'>Anggota Renumerartion & Nominasi:</h3>";
                        }

                    }

                    $member_comite = $con->select_where('Committee','Url',$subcontent);
                    $check_member = mysql_num_rows($member_comite);
                    if ($check_member != 0) {
                        while ($member_list = mysql_fetch_object($member_comite)) {
                            echo "<div class=col-md-4>";
                            echo "<h5 class='title-red'> $member_list->Name</h5>";

                            echo "<h6>";
            if($language=="EN")
            {
                echo $member_list->Position;
            }
            else
            {
                echo $member_list->PositionID;
            }
                            echo "</h6>";
                            echo "<br><br>";
                            echo "<a href=# class='title-red'>Read More</a>";
                            echo "</div>";
                        }
                    }
                    echo "<div class='clearfix'></div>";
                    if ($subcontent == "audit-committee") {
                        if($language=="EN")
                        {
                            echo "<h3 style='margin-top: 50px'>Audit Committee Charter</h3>";
                        }
                        else
                        {
                            echo "<h3 style='margin-top: 50px'>Piagam Komite Audit</h3>";
                        }

                    } elseif ($subcontent == "investment-committee") {
                        if($language=="EN")
                        {
                            echo "<h3 style='margin-top: 50px'>Investment Committee Charter</h3>";
                        }
                        else
                        {
                            echo "<h3 style='margin-top: 50px'>Piagam Komite Investasi</h3>";
                        }

                    } else {
                        if($language=="EN")
                        {
                            echo "<h3 style='margin-top: 50px'>Renumerartion & Nomination Committee Charter</h3>";
                        }
                        else
                        {
                            echo "<h3 style='margin-top: 50px'>Piagam Renumerartion & Nomination Committee</h3>";
                        }

                    }

                }
            }
            ?>
            <?php
            if($language=="EN") {
                ?>
                <h3 class="title-content"><?= $data_content->Title_en; ?></h3>
                <?= $data_content->BodyText_en; ?>
                <?
            }
            else
            {
                ?>
                <h3 class="title-content"><?= $data_content->Title_id; ?></h3>
                <?= $data_content->BodyText_id; ?>
            <?
            }
            ?>
        <div class="clearfix"></div>

        <?php
        if($page_content=="annual-reports")
        {
            echo '<h3 class="title-content">';
            if ($language=="EN")
            {
                echo ucfirst(strtolower($active_menu_name->MenuName));
            }
            else
            {
                echo ucfirst(strtolower($active_menu_name->MenuNameID));
            }
            echo '</h3>';
          $annual_report=$con->select('annual_report');
          while($annual_report_list=mysql_fetch_object($annual_report))
          {
            echo '<div class=col-md-4>';
            echo  '<h4 class="title-red">'.$annual_report_list->Year.'</h4>';
            echo '<hr>';
            echo '<div class="clearfix"></div>';
            echo '<h5>'.$annual_report_list->Title.'</h5>';

            echo '<img src="'.$annual_report_list->CoverImg.'" width="100px">';
            echo '<h6 class="title-red">Download</h6>';
            echo '<a href="'.$annual_report_list->file.'" download><img src=/assets/img/btn_pdf.png></a>';
            echo '</div>';
          }
        }
        ?>
        <?php
        if($page_content=="events-presentation")
        {
            echo '<h3 class="title-content">';
            if ($language=="EN")
            {
                echo ucfirst(strtolower($active_menu_name->MenuName));
            }
            else
            {
                echo ucfirst(strtolower($active_menu_name->MenuNameID));
            }
            echo '</h3>';
          $event_report=$con->select_distinct('event_presentation','Year');
          while($event_report_data=mysql_fetch_object($event_report))
          {
            $event_report_sort=$con->select_where('event_presentation','Year',$event_report_data->Year);
            echo  '<h4 class="title-red">'.$event_report_data->Year.'</h4>';

            while($event_report_sort_data=mysql_fetch_object($event_report_sort))
            {
            echo '<div class=col-md-4>';
            echo '<div class="clearfix"></div>';
            echo '<h6>'.$event_report_sort_data->Title.'</h6>';
            echo '<img src=/assets/img/event_presentation.png>';
            echo '<h6 class="title-red">Download</h6>';
                        echo '<a href="'.$event_report_sort_data->File.'" download><img src=/assets/img/btn_pdf.png></a>';
            echo '</div>';
          }
                      echo '<div class="clearfix"></div>';
          }
        }
        ?>
            <?php
            if($page_content=="financial-overview")
            {
                echo "<div class=submenu_content_box style='margin-top: 0px'>";
                $SubContent = $con->select_where('SubContent', 'ParentUrl', 'investor-relation/finnancial-overview');
                while ($SubContentList = mysql_fetch_object($SubContent)) {
                    if ($sub_content == $SubContentList->url) {
                        if($language=="EN")
                        {
                            echo "<a href='/$page_url/$SubContentList->url' class='submenu_content submenu_content_active'>$SubContentList->MenuName</a>";
                        }
                        else
                        {
                            echo "<a href='/$page_url/$SubContentList->url' class='submenu_content submenu_content_active'>$SubContentList->MenuNameID</a>";
                        }

                    } else {

                        if($language=="EN")
                        {
                            echo "<a href='/$page_url/$SubContentList->url' class='submenu_content'>$SubContentList->MenuName</a>";
                        }
                        else
                        {
                            echo "<a href='/$page_url/$SubContentList->url' class='submenu_content'>$SubContentList->MenuNameID</a>";
                        }

                    }

                }
                echo "</div>";
                if($sub_content=="hightlights")
                {


                  ?>

                  <script type="text/javascript">

                                  window.onload = function () {
                                    var assets = new CanvasJS.Chart("chartContainer", {
                                      theme: "theme1",//theme1
                                      title:{
                                        text: false,
                                      },
                  axisY2: {
                  interlacedColor: "white",
                  tickColor: "azure",
                  titleFontColor: "rgb(0,75,141)",
                  interval: 300,
                  gridColor: "white",
                  gridThickness: 0,
                  lineColor: "red",
                  lineThickness: 3,
                  tickColor: "red",
                  tickLength: 5,
                  tickThickness: 2
                  },
                  axisX:{
                  lineColor: "red",
                  lineThickness:0
                  },
                  animationEnabled: true,
                  data: [
                                      {
                      axisYType: "secondary",
                      type: "column", //change it to line, area, bar, pie, etc
                      dataPoints: [
                        <?
                          $financial_balance=$con->select('FinancialBalanceSheet');
                        while($total_asset_chart=mysql_fetch_object($financial_balance))
                        {
                         ?>
                        { label: "<?=$total_asset_chart->Year;?>", y:
                        <?php
                        $value=str_replace(",","",$total_asset_chart->TotalAssets)/1000000000;
                        $format_value=number_format($value,1);
                        echo ceil($value);
                        ?>,
                         indexLabel: "<?=$format_value=number_format($value,1);;?>" },
                        <?
                      }

                        ?>
                      ]
                                      }
                                      ]
                                    });

                                    var equity = new CanvasJS.Chart("equity_chart", {
                                      theme: "theme1",//theme1
                                      title:{
                                        text: false,
                                      },
                  axisY2: {
                  interlacedColor: "white",
                  tickColor: "azure",
                  titleFontColor: "rgb(0,75,141)",
                  interval: 300,
                  gridColor: "white",
                  gridThickness: 0,
                  lineColor: "red",
                  lineThickness: 3,
                  tickColor: "red",
                  tickLength: 5,
                  tickThickness: 2
                  },
                  axisX:{
                  lineColor: "red",
                  lineThickness:0
                  },
                  animationEnabled: true,
                  data: [
                  {
                      axisYType: "secondary",
                      type: "column", //change it to line, area, bar, pie, etc
                      dataPoints: [
                        <?
                        $financial_balance=$con->select('FinancialBalanceSheet');
                        while($total_equity_chart=mysql_fetch_object($financial_balance))
                        {
                         ?>
                        { label: "<?=$total_equity_chart->Year;?>", y:
                        <?php
                        $value=str_replace(",","",$total_equity_chart->TotalShareholdersEquity)/1000000000;
                        $format_value=number_format($value,1);
                        echo ceil($value);
                        ?>,
                         indexLabel: "<?=$format_value=number_format($value,1);;?>" },
                        <?
                      }

                        ?>
                      ]
                                      }
                                      ]
                                    });

                                    var revenue = new CanvasJS.Chart("revenue_chart", {
                                      theme: "theme1",//theme1
                                      title:{
                                        text: false,
                                      },
                  axisY2: {
                  interlacedColor: "white",
                  tickColor: "azure",
                  titleFontColor: "rgb(0,75,141)",
                  interval: 20,
                  gridColor: "white",
                  gridThickness: 0,
                  lineColor: "red",
                  lineThickness: 3,
                  tickColor: "red",
                  tickLength: 5,
                  tickThickness: 2
                  },
                  axisX:{
                  lineColor: "red",
                  lineThickness:0
                  },
                  animationEnabled: true,
                  data: [
                  {
                      axisYType: "secondary",
                      type: "column", //change it to line, area, bar, pie, etc
                      dataPoints: [
                        <?
                        $financial_Revenue=$con->select('ProfitLoss');
                        while($total_revenue_chart=mysql_fetch_object($financial_Revenue))
                        {
                         ?>
                        { label: "<?=$total_revenue_chart->Year;?>", y:
                        <?php
                        $value=str_replace(",","",$total_revenue_chart->Revenue)/1000000000;
                        $format_value=number_format($value,1);
                        echo ceil($value);
                        ?>,
                         indexLabel: "<?=$format_value=number_format($value,1);;?>" },
                        <?
                      }

                        ?>
                      ]
                                      }
                                      ]
                                    });

                                    var net_income = new CanvasJS.Chart("net_income_chart", {
                                      theme: "theme1",//theme1
                                      title:{
                                        text: false,
                                      },
                  axisY2: {
                  interlacedColor: "white",
                  tickColor: "azure",
                  titleFontColor: "rgb(0,75,141)",
                  interval: 50,
                  gridColor: "white",
                  gridThickness: 0,
                  lineColor: "red",
                  lineThickness: 3,
                  tickColor: "red",
                  tickLength: 5,
                  tickThickness: 2
                  },
                  axisX:{
                  lineColor: "red",
                  lineThickness:0
                  },
                  animationEnabled: true,
                  data: [
                  {
                      axisYType: "secondary",
                      type: "column", //change it to line, area, bar, pie, etc
                      dataPoints: [
                        <?
                        $financial_Revenue=$con->select('ProfitLoss');
                        while($total_income_chart=mysql_fetch_object($financial_Revenue))
                        {
                         ?>
                        { label: "<?=$total_income_chart->Year;?>", y:
                        <?php
                        $value=str_replace(",","",$total_income_chart->IncomeYear)/1000000000;
                        $format_value=number_format($value,1);
                        echo ceil($value);
                        ?>,
                         indexLabel: "<?=$format_value=number_format($value,1);;?>" },
                        <?
                      }

                        ?>
                      ]
                                      }
                                      ]
                                    });

                                    var current_ratio = new CanvasJS.Chart("current_ratio", {
                                      theme: "theme1",//theme1
                                      title:{
                                        text: false,
                                      },
                  axisY2: {
                  interlacedColor: "white",
                  tickColor: "azure",
                  titleFontColor: "rgb(0,75,141)",
                  interval: 200,
                  gridColor: "white",
                  gridThickness: 0,
                  lineColor: "red",
                  lineThickness: 3,
                  tickColor: "red",
                  tickLength: 5,
                  tickThickness: 2
                  },
                  axisX:{
                  lineColor: "red",
                  lineThickness:0
                  },
                  animationEnabled: true,
                  data: [
                  {
                      axisYType: "secondary",
                      type: "column", //change it to line, area, bar, pie, etc
                      dataPoints: [
                        <?
                        $financial_Ratio=$con->select('FinancialRatio');
                        while($total_ratio_chart=mysql_fetch_object($financial_Ratio))
                        {
                         ?>
                        { label: "<?=$total_ratio_chart->Year;?>", y:
                        <?php
                        $value=str_replace("%","",$total_ratio_chart->CurrentRatio);
                        $format_value=number_format($value,1);
                        echo ceil($value);
                        ?>,
                         indexLabel: "<?=$format_value=$value."%";?>" },
                        <?
                      }

                        ?>
                      ]
                                      }
                                      ]
                                    });

                                    var net_income_margin = new CanvasJS.Chart("net_income_margin", {
                                      theme: "theme1",//theme1
                                      title:{
                                        text: false,
                                      },
                  axisY2: {
                  interlacedColor: "white",
                  tickColor: "azure",
                  titleFontColor: "rgb(0,75,141)",
                  interval: 50,
                  gridColor: "black",
                  gridThickness: 0,
                  lineColor: "red",
                  lineThickness: 3,
                  tickColor: "red",
                  tickLength: 5,
                  tickThickness: 2
                  },
                  axisX:{
                  lineColor: "red",
                  lineThickness:0
                  },
                  animationEnabled: true,
                  data: [
                  {
                      axisYType: "secondary",
                      type: "column", //change it to line, area, bar, pie, etc
                      dataPoints: [
                        <?
                        $financial_Ratio=$con->select('FinancialRatio');
                        while($total_margin_chart=mysql_fetch_object($financial_Ratio))
                        {
                         ?>
                        { label: "<?=$total_margin_chart->Year;?>", y:
                        <?php
                        $value=str_replace("%","",$total_margin_chart->NetIncomeMargin);
                        $format_value=number_format($value,1);
                        echo ceil($value);
                        ?>,
                         indexLabel: "<?=$format_value=$value."%";?>" },
                        <?
                      }

                        ?>
                      ]
                                      }
                                      ]
                                    });

                                    assets.render();
                                    equity.render();
                                    revenue.render();
                                    net_income.render();
                                    current_ratio.render();
                                    net_income_margin.render();
                                  }
                                  </script>

                  <?
                  echo '<div class=col-md-4>';
                  echo '<h4 class="title-red">Total Assets</h4>';
                  echo '<hr class="red-line">';
                  echo '<div class="clearfix"></div>';
                  echo '<span>In Billion Rupiah</span>';
                  echo '<div id="chartContainer" style="height: 270px; width: 100%;"></div>';
                  echo '</div>';

                  echo '<div class=col-md-4>';
                  echo '<h4 class="title-red">Total Equity</h4>';
                  echo '<hr class="red-line">';
                  echo '<div class="clearfix"></div>';
                  echo '<span>In Billion Rupiah</span>';
                  echo '<div id="equity_chart" style="height: 270px; width: 100%;"></div>';
                  echo '</div>';

                  echo '<div class=col-md-4>';
                  echo '<h4 class="title-red">Revenue</h4>';
                  echo '<hr class="red-line">';
                  echo '<div class="clearfix"></div>';
                  echo '<span>In Billion Rupiah</span>';
                  echo '<div id="revenue_chart" style="height: 270px; width: 100%;"></div>';
                  echo '</div>';

                  echo '<div class=col-md-4>';
                  echo '<h4 class="title-red">Net Income</h4>';
                  echo '<hr class="red-line">';
                  echo '<div class="clearfix"></div>';
                  echo '<span>In Billion Rupiah</span>';
                  echo '<div id="net_income_chart" style="height: 270px; width: 100%;"></div>';
                  echo '</div>';

                  echo '<div class=col-md-4>';
                  echo '<h4 class="title-red">Current Ratio</h4>';
                  echo '<hr class="red-line">';
                  echo '<div class="clearfix"></div>';
                  echo '<br>';
                  echo '<div id="current_ratio" style="height: 270px; width: 100%;"></div>';
                  echo '</div>';

                  echo '<div class=col-md-4>';
                  echo '<h4 class="title-red">Net Income Margin</h4>';
                  echo '<hr class="red-line">';
                  echo '<div class="clearfix"></div>';
                  echo '<br>';
                  echo '<div id="net_income_margin" style="height: 270px; width: 100%;"></div>';
                  echo '</div>';




                }
                if($sub_content=="balance-sheet")
                {

                    $financial_data=$con->select("FinancialBalanceSheet");
                    echo ' <div id="table-scroll">';
                    echo '<table class=dividend_history_table style="margin-left:-30px;width:710px">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th></th>';
                    while($financial_overview=mysql_fetch_object($financial_data))
                    {
                        echo "<th>$financial_overview->Year</th>";
                    }
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody class="tbody_left">';
                    if($language=="EN")
                    {
                        echo '<tr><td>Total Assets</td>';
                    }
                    else
                    {
                        echo '<tr><td>Jumlah aset</td>';
                    }

                    $financial_total_assets=$con->select("FinancialBalanceSheet");
                    while($financial_overview_total_assets=mysql_fetch_object($financial_total_assets))
                    {
                        echo "<td>$financial_overview_total_assets->TotalAssets</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo '<tr><td>Current assets</td>';
                    }
                    else
                    {
                        echo '<tr><td>Aset Lancar</td>';
                    }

                    $financial_current_assets=$con->select("FinancialBalanceSheet");
                    while($financial_overview_current_assets=mysql_fetch_object($financial_current_assets))
                    {
                        echo "<td>$financial_overview_current_assets->CurrentAssets</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo '<tr><td>Noncurrent assets</td>';
                    }
                    else
                    {
                        echo '<tr><td>Aset Tidak Lancar</td>';
                    }

                    $financial_noncurrent_assets=$con->select("FinancialBalanceSheet");
                    while($financial_overview_noncurrent_assets=mysql_fetch_object($financial_noncurrent_assets))
                    {
                        echo "<td>$financial_overview_noncurrent_assets->NoncurrentAssets</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo '<tr><td>Total Liabilities</td>';
                    }
                    else
                    {
                        echo '<tr><td>Jumlah Liabilitas</td>';
                    }

                    $financial_liabilities=$con->select("FinancialBalanceSheet");
                    while($financial_overview_liabilities=mysql_fetch_object($financial_liabilities))
                    {
                        echo "<td>$financial_overview_liabilities->TotalLiabilities</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo '<tr><td>Current Liabilities</td>';
                    }
                    else
                    {
                        echo '<tr><td>Liabilitas Jangka Pendek</td>';
                    }

                    $financial_current_liabilities=$con->select("FinancialBalanceSheet");
                    while($financial_overview_current_liabilities=mysql_fetch_object($financial_current_liabilities))
                    {
                        echo "<td>$financial_overview_current_liabilities->CurrentLiabilities</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo '<tr><td>Noncurrent Liabilities</td>';
                    }
                    else
                    {
                        echo '<tr><td>Liabilitas Jangka Panjang</td>';
                    }

                    $financial_noncurrent_liabilities=$con->select("FinancialBalanceSheet");
                    while($financial_overview_noncurrent_liabilities=mysql_fetch_object($financial_noncurrent_liabilities))
                    {
                        echo "<td>$financial_overview_noncurrent_liabilities->NoncurrentLiabilities</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo "<tr><td>Total shareholder's equity</td>";
                    }
                    else
                    {
                        echo '<tr><td>Jumlah Ekuitas</td>';
                    }

                    $financial_shareholder_equity=$con->select("FinancialBalanceSheet");
                    while($financial_overview_shareholder_equity=mysql_fetch_object($financial_shareholder_equity))
                    {
                        echo "<td>$financial_overview_shareholder_equity->TotalShareholdersEquity</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo "<tr><td>Attributable to owners of the Parents</td>";
                    }
                    else
                    {
                        echo '<tr><td>Diatribusikan Kepada Pemilik Entitas Induk</td>';
                    }

                    $financial_AttributableOwnerParents=$con->select("FinancialBalanceSheet");
                    while($financial_overview_AttributableOwnerParents=mysql_fetch_object($financial_AttributableOwnerParents))
                    {
                        echo "<td>$financial_overview_AttributableOwnerParents->AttributableOwnerParents</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo "<tr><td>Attributable to Noncontrolling Interests</td>";
                    }
                    else
                    {
                        echo '<tr><td>Diatribusikan Kepada Kepentingan Nonpengendali</td>';
                    }


                    $financial_AttributableNoncontrollingInterests=$con->select("FinancialBalanceSheet");
                    while($financial_overview_AttributableNoncontrollingInterests=mysql_fetch_object($financial_AttributableNoncontrollingInterests))
                    {
                        echo "<td>$financial_overview_AttributableNoncontrollingInterests->AttributableNoncontrollingInterests</td>";
                    }
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</div>';
                    echo '</table>';
                    echo '</div>';
                }
                if($sub_content=="profit-loss-statement")
                {
                    $financial_ProfitLossYear=$con->select("ProfitLoss");
                    echo ' <div id="table-scroll">';
                    echo '<table class=dividend_history_table style="margin-left:-30px;width:710px">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th></th>';
                    while($financial_ProfitLossData=mysql_fetch_object($financial_ProfitLossYear))
                    {
                        echo "<th>$financial_ProfitLossData->Year</th>";
                    }
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody class="tbody_left">';
                    if($language=="EN")
                    {
                        echo '<tr><td>Revenue</td>';
                    }
                    else
                    {
                        echo '<tr><td>Pendapatan Usaha</td>';
                    }

                    $financial_Revenue=$con->select("ProfitLoss");
                    while($financial_RevenueData=mysql_fetch_object($financial_Revenue))
                    {
                        echo "<td>$financial_RevenueData->Revenue</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo '<tr><td>Operating expenses</td>';
                    }
                    else
                    {
                        echo '<tr><td>Beban Usaha</td>';
                    }

                    $financial_OperatingExpenses=$con->select("ProfitLoss");
                    while($financial_OperatingExpensesData=mysql_fetch_object($financial_OperatingExpenses))
                    {
                        echo "<td>$financial_OperatingExpensesData->OperatingExpenses</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo '<tr><td>Operating Income</td>';
                    }
                    else
                    {
                        echo '<tr><td>Laba Usaha</td>';
                    }

                    $financial_OperatingIncome=$con->select("ProfitLoss");
                    while($financial_OperatingIncomeData=mysql_fetch_object($financial_OperatingIncome))
                    {
                        echo "<td>$financial_OperatingIncomeData->OperatingIncome</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo '<tr><td>Other Income (expenses) - net </td>';
                    }
                    else
                    {
                        echo '<tr><td>Penghasilan (Beban) Lain-lain - Bersih</td>';
                    }


                    $financial_OtherIncome=$con->select("ProfitLoss");
                    while($financial_OtherIncomeData=mysql_fetch_object($financial_OtherIncome))
                    {
                        echo "<td>$financial_OtherIncomeData->OtherIncome</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo '<tr><td>Income Before tax</td>';
                    }
                    else
                    {
                        echo '<tr><td>Laba sebelum pajak</td>';
                    }

                    $financial_IncomeBeforeTax=$con->select("ProfitLoss");
                    while($financial_IncomeBeforeTaxData=mysql_fetch_object($financial_IncomeBeforeTax))
                    {
                        echo "<td>$financial_IncomeBeforeTaxData->IncomeBeforeTax</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo "<tr><td>Income for the year</td>";
                    }
                    else
                    {
                        echo '<tr><td>Laba Bersih tahun Berjalan </td>';
                    }

                    $financial_IncomeYear=$con->select("ProfitLoss");
                    while($financial_IncomeYearData=mysql_fetch_object($financial_IncomeYear))
                    {
                        echo "<td>$financial_IncomeYearData->IncomeYear</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo "<tr><td>Income attributable to  the owners of the Company</td>";
                    }
                    else
                    {
                        echo '<tr><td>Jumlah Laba yang Diatribusikan kepada Pemilik entitas Induk</td>';
                    }

                    $financial_IncomeOwner=$con->select("ProfitLoss");
                    while($financial_IncomeOwnerData=mysql_fetch_object($financial_IncomeOwner))
                    {
                        echo "<td>$financial_IncomeOwnerData->IncomeOwner</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo "<tr><td>Income (Loss) attributable to noncontrolling shareholders</td>";
                    }
                    else
                    {
                        echo '<tr><td>jumlah Laba (rugi) yang Diatribusikan kepada dan kepentingan nonpengendali</td>';
                    }

                    $financial_IncomeShareHolder=$con->select("ProfitLoss");
                    while($financial_IncomeShareHolderData=mysql_fetch_object($financial_IncomeShareHolder))
                    {
                        echo "<td>$financial_IncomeShareHolderData->IncomeShareHolder</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo "<tr><td>Total Comprehensive Income for the year</td>";
                    }
                    else
                    {
                        echo '<tr><td>Total Laba komprehensif tahun Berjalan </td>';
                    }

                    $financial_ComprehensiveIncomeYear=$con->select("ProfitLoss");
                    while($financial_ComprehensiveIncomeYearData=mysql_fetch_object($financial_ComprehensiveIncomeYear))
                    {
                        echo "<td>$financial_ComprehensiveIncomeYearData->ComprehensiveIncomeYear</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo "<tr><td>Comprehensive Income attributable to owners of the Company</td>";
                    }
                    else
                    {
                        echo '<tr><td>Jumlah Laba komprehensif yang Diatribusikan kepada Pemilik entitas Induk</td>';
                    }

                    $financial_ComprehensiveIncomeOwner=$con->select("ProfitLoss");
                    while($financial_ComprehensiveIncomeOwnerData=mysql_fetch_object($financial_ComprehensiveIncomeOwner))
                    {
                        echo "<td>$financial_ComprehensiveIncomeOwnerData->ComprehensiveIncomeOwner</td>";
                    }
                    echo '</tr>';

                    if($language=="EN")
                    {
                        echo "<tr><td>Total Comprehensive Income (Loss) attributable to noncontrolling shareholders</td>";
                    }
                    else
                    {
                        echo '<tr><td>Jumlah Laba (rugi) komprehensif yang Diatribusikan kepada kepentingan nonpengendali </td>';
                    }

                    $financial_ComprehensiveIncomeShareholders=$con->select("ProfitLoss");
                    while($financial_ComprehensiveIncomeShareholdersData=mysql_fetch_object($financial_ComprehensiveIncomeShareholders))
                    {
                        echo "<td>$financial_ComprehensiveIncomeShareholdersData->ComprehensiveIncomeShareholders</td>";
                    }
                    echo '</tr>';

                    if($language=="EN")
                    {
                        echo "<tr><td>Earnings Per share - basic</td>";
                    }
                    else
                    {
                        echo '<tr><td>Laba Per saham - dasar</td>';
                    }

                    $financial_EarningBasic=$con->select("ProfitLoss");
                    while($financial_EarningBasicData=mysql_fetch_object($financial_EarningBasic))
                    {
                        echo "<td>$financial_EarningBasicData->EarningBasic</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo "<tr><td>Earnings Per share - diluted</td>";
                    }
                    else
                    {
                        echo '<tr><td>Laba Per saham - dilusian</td>';
                    }

                    $financial_EarningDiluted=$con->select("ProfitLoss");
                    while($financial_EarningDilutedData=mysql_fetch_object($financial_EarningDiluted))
                    {
                        echo "<td>$financial_EarningDilutedData->EarningDiluted</td>";
                    }
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</div>';
                    echo '</table>';
                    echo '</div>';
                }

                if($sub_content=="financial-ratio")
                {
                    $financial_RatioYear=$con->select("FinancialRatio");
                    echo ' <div id="table-scroll">';
                    echo '<table class=dividend_history_table style="margin-left:-30px;width:710px">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th></th>';
                    while($financial_RatioYearData=mysql_fetch_object($financial_RatioYear))
                    {
                        echo "<th>$financial_RatioYearData->Year</th>";
                    }
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody class="tbody_left">';
                    if($language=="EN")
                    {
                        echo '<tr><td>Revenue Growth</td>';
                    }
                    else
                    {
                        echo '<tr><td>Pertumbuhan Pendapatan</td>';
                    }

                    $financial_RevenueGrowth=$con->select("FinancialRatio");
                    while($financial_RevenueGrowthData=mysql_fetch_object($financial_RevenueGrowth))
                    {
                        echo "<td>$financial_RevenueGrowthData->RevenueGrowth</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo '<tr><td>Net Income Growth</td>';
                    }
                    else
                    {
                        echo '<tr><td>Pertumbuhan Laba Bersih</td>';
                    }

                    $financial_NetIncomeGrowth=$con->select("FinancialRatio");
                    while($financial_NetIncomeGrowthData=mysql_fetch_object($financial_NetIncomeGrowth))
                    {
                        echo "<td>$financial_NetIncomeGrowthData->NetIncomeGrowth</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo '<tr><td>Comprehensive Income for the Year</td>';
                    }
                    else
                    {
                        echo '<tr><td>Pertumbuhan Pendapatan Komprehensif Tahun Berjalan</td>';
                    }

                    $financial_ComprehensiveIncomeYear=$con->select("FinancialRatio");
                    while($financial_ComprehensiveIncomeYearData=mysql_fetch_object($financial_ComprehensiveIncomeYear))
                    {
                        echo "<td>$financial_ComprehensiveIncomeYearData->ComprehensiveIncomeYear</td>";
                    }
                    echo '</tr>';

                    if($language=="EN")
                    {
                        echo '<tr><td>Return on Assets</td>';
                    }
                    else
                    {
                        echo '<tr><td>Rasio Pendapatan Komprehensif Terhadap Aset </td>';
                    }


                    $financial_ReturnOnAssets=$con->select("FinancialRatio");
                    while($financial_ReturnOnAssetsData=mysql_fetch_object($financial_ReturnOnAssets))
                    {
                        echo "<td>$financial_ReturnOnAssetsData->ReturnOnAssets</td>";
                    }
                    echo '</tr>';

                    if($language=="EN")
                    {
                        echo '<tr><td>Return on Equity </td>';
                    }
                    else
                    {
                        echo '<tr><td>Rasio Pendapatan Komprehensif Terhadap Ekuitas </td>';
                    }

                    $financial_ReturnOnEquity=$con->select("FinancialRatio");
                    while($financial_ReturnOnEquityData=mysql_fetch_object($financial_ReturnOnEquity))
                    {
                        echo "<td>$financial_ReturnOnEquityData->ReturnOnEquity</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo "<tr><td>Net Income Margin</td>";
                    }
                    else
                    {
                        echo '<tr><td>Rasio Pendapatan Komprehensif Terhadap Pendapatan </td>';
                    }

                    $financial_NetIncomeMargin=$con->select("FinancialRatio");
                    while($financial_NetIncomeMarginData=mysql_fetch_object($financial_NetIncomeMargin))
                    {
                        echo "<td>$financial_NetIncomeMarginData->NetIncomeMargin</td>";
                    }
                    echo '</tr>';
                    if($language=="EN")
                    {
                        echo "<tr><td>Current Ratio</td>";
                    }
                    else
                    {
                        echo '<tr><td>Rasio Lancar</td>';
                    }


                    $financial_CurrentRatio=$con->select("FinancialRatio");
                    while($financial_CurrentRatioData=mysql_fetch_object($financial_CurrentRatio))
                    {
                        echo "<td>$financial_CurrentRatioData->CurrentRatio</td>";
                    }
                    echo '</tr>';

                    if($language=="EN")
                    {
                        echo "<tr><td>Total Liabilities to Equity Ratio</td>";
                    }
                    else
                    {
                        echo '<tr><td>Rasio Liabilitas Terhadap Ekuitas</td>';
                    }

                    $financial_LiabilitiesToEquityRatio=$con->select("FinancialRatio");
                    while($financial_LiabilitiesToEquityRatioData=mysql_fetch_object($financial_LiabilitiesToEquityRatio))
                    {
                        echo "<td>$financial_LiabilitiesToEquityRatioData->LiabilitiesToEquityRatio</td>";
                    }
                    echo '</tr>';

                    if($language=="EN")
                    {
                        echo "<tr><td>Total Liabilities to Total Assets</td>";
                    }
                    else
                    {
                        echo '<tr><td>Rasio Liabilitas Terhadap Jumlah Aset </td>';
                    }

                    $financial_LiabilitiesToTotalAssets=$con->select("FinancialRatio");
                    while($financial_LiabilitiesToTotalAssetsData=mysql_fetch_object($financial_LiabilitiesToTotalAssets))
                    {
                        echo "<td>$financial_LiabilitiesToTotalAssetsData->LiabilitiesToTotalAssets</td>";
                    }
                    echo '</tr>';
                    echo '</tbody>';
                    echo '</div>';
                    echo '</table>';
                    echo '</div>';
                }
                if($sub_content=="financial-report")
                {

                    $SubContent=$con->select_where('SubContent','url',$sub_content);
                    $subContent_data=mysql_fetch_object($SubContent);
                    echo '<h3 class="title-content">';
                    if ($language=="EN")
                    {
                        echo ucfirst(strtolower($subContent_data->MenuName));
                    }
                    else
                    {
                        echo ucfirst(strtolower($subContent_data->MenuNameID));
                    }
                    echo '</h3>';
                  $annual_report=$con->select_order('financial_report','Year','DESC');
                  while($annual_report_list=mysql_fetch_object($annual_report))
                  {
                    echo '<div class=col-md-4>';
                    echo  '<h4 class="title-red">'.$annual_report_list->Year.'</h4>';
                    echo '<hr>';
                    echo '<div class="clearfix"></div>';
                    if ($language=="EN")
                    {
                    echo '<h5>'.$annual_report_list->Title.'</h5>';
                  }
                  else {
                    echo '<h5>'.$annual_report_list->Title_id.'</h5>';
                  }



                    echo '<img src="'.$annual_report_list->CoverImg.'" width="100px">';
                    echo '<h6 class="title-red">Download</h6>';
                    echo '<a href="'.$annual_report_list->file.'" download><img src=/assets/img/btn_pdf.png></a>';
                    echo '</div>';
                  }
                }
            }
            ?>
        <?php
        if($page_content=="dividend-history")
        {
            echo '<h3 class="title-content">';
            if ($language=="EN")
            {
                echo ucfirst(strtolower($active_menu_name->MenuName));
            }
            else
            {
                echo ucfirst(strtolower($active_menu_name->MenuNameID));
            }
            echo '</h3>';
          $dividend_history=$con->select('dividend_history');
            echo ' <div id="table-scroll">';
          echo '<table class=dividend_history_table style="margin-left:-20px;width:710px">';
          echo '<thead>';
          echo '<tr>';
          echo '<th>Year</th>';
          echo '<th>Dividend/Share</th>';
          echo '<th>No. Of Shares as of December 31</th>';
          echo '<th>Net Income</th>';
          echo '<th>Deviden Payout Ratio</td>';
          echo '</tr>';
          echo '</thead>';
          echo '<tbody class="tbody_left">';
            while($dividend_history_data=mysql_fetch_object($dividend_history))
            {
            echo '<tr>';
            echo '<td>'.$dividend_history_data->Year.'</td>';
            echo '<td>'.$dividend_history_data->TotalDivident.'</td>';
            echo '<td>'.$dividend_history_data->NoOfSharesAsDec31.'</td>';
            echo '<td>'.$dividend_history_data->NetIncome.'</td>';
            echo '<td>'.$dividend_history_data->DividentPayoutRatio.'</td>';
            echo '</tr>';
            }
          echo '</tbody>';
          echo '</table>';
            echo '</div>';
        }
        ?>
        <?php
          if($page_content=="board-of-directors")
          {
            $bod=$con->select('bod');
            while($bod_list=mysql_fetch_object($bod))
            {
              ?>
              <div class="col-md-4">
              <a href=# class="<?=$bod_list->id;?>"><img src='<?=$bod_list->Photo;?>'></a>
              <h5 class="title-red"><?=$bod_list->Name;?></h5>
              <h5 class="tebal">
                  <? if($language=="EN")
                  {
                      echo $bod_list->Position;
                  }
                  else
                  {
                      echo $bod_list->PositionID;
                  }
                  ?>
              </h5>
                  <?php if($language=="EN") {  ?>
                <?=substr($bod_list->DescriptionEN, 0, 100).".....";?>
                  <? } else { ?>
                  <?=substr($bod_list->DescriptionID, 0, 100).".....";?>
                  <? } ?>
            </div>
            <?php if($language=="EN") {  ?>
            <script type="text/javascript">

                $('.<?=$bod_list->id;?>').on('click', function () {
                  $.confirm({
                      title: false,
                      content: "<div class='col-md-2 modal-img'><img src='<?=$bod_list->Photo;?>'></div><div class='col-md-8 modal-content'><h3><?=$bod_list->Name;?></h3><?php echo str_replace(PHP_EOL, '', $bod_list->DescriptionEN)?></div><div class=clearfix></div>",
                      cancelButton: false,
                      columnClass: 'col-md-8 col-md-offset-2',
                      confirmButton: "<button class=modal_close>X</buton>"
                  });
                });
            </script>
            <? } else { ?>
                <script type="text/javascript">

                    $('.<?=$bod_list->id;?>').on('click', function () {
                        $.confirm({
                            title: false,
                            content: "<div class='col-md-2 modal-img'><img src='<?=$bod_list->Photo;?>'></div><div class='col-md-8 modal-content'><h3><?=$bod_list->Name;?></h3><?php echo str_replace(PHP_EOL, '', $bod_list->DescriptionID);?></div><div class=clearfix></div>",
                            cancelButton: false,
                            columnClass: 'col-md-8 col-md-offset-2',
                            confirmButton: "<button class=modal_close>X</buton>"
                        });
                    });
                </script>

            <? } ?>
              <?
            }
          }
          ?>
          <?php
            if($page_content=="board-of-comissioner")
            {
              $boc=$con->select('boc');
              while($boc_list=mysql_fetch_object($boc))
              {
                ?>
                <div class="col-md-4">
                <a href=# class="<?=$boc_list->id;?>"><img src='<?=$boc_list->Photo;?>'></a>
                <h5 class="title-red"><?=$boc_list->Name;?></h5>
                <h5 class="tebal">
                    <? if($language=="EN")
                    {
                        echo $boc_list->Position;
                    }
                    else
                    {
                        echo $boc_list->PositionID;
                    }
                    ?>
                </h5>
                    <?php if($language=="EN") {  ?>
                  <?=substr($boc_list->DescriptionEN, 0, 100).".....";?>
                    <? } else { ?>
                        <?=substr($boc_list->DescriptionID, 0, 100).".....";?>
                    <? } ?>
              </div>
              <?php if($language=="EN") {  ?>
              <script type="text/javascript">

                  $('.<?=$boc_list->id;?>').on('click', function () {
                    $.confirm({
                        title: false,
                        content: '<div class="col-md-2 modal-img"><img src="<?=$boc_list->Photo;?>"></div><div class="col-md-8 modal-content" ><h3><?=$boc_list->Name;?></h3><?=$boc_list->DescriptionEN;?></div><div class=clearfix></div>',
                        cancelButton: false,
                        columnClass: 'col-md-8 col-md-offset-2',
                        confirmButton: "<button class=modal_close>X</buton>"
                    });
                  });
              </script>
                  <? } else { ?>

                  <script type="text/javascript">

                      $('.<?=$boc_list->id;?>').on('click', function () {
                          $.confirm({
                              title: false,
                              content: '<div class="col-md-2 modal-img"><img src="<?=$boc_list->Photo;?>"></div><div class="col-md-8 modal-content" ><h3><?=$boc_list->Name;?></h3><?=$boc_list->DescriptionID;?></div><div class=clearfix></div>',
                              cancelButton: false,
                              columnClass: 'col-md-8 col-md-offset-2',
                              confirmButton: "<button class=modal_close>X</buton>"
                          });
                      });
                  </script>

                  <? } ?>
                <?
              }
            }
            ?>

            <?php
            $slider=$con->select_where('SliderImage','PageTarget',$page_content);
            $slider_page=mysql_fetch_object($slider);
            $slider_image=$con->select_where('SliderImageContent','SliderImageId',$slider_page->id);
            $slider_thumb=$con->select_where('SliderImageContent','SliderImageId',$slider_page->id);
            if(mysql_num_rows($slider_image)!=0)
            {
            ?>


              <div class="connected-carousels">
                              <div class="stage">
                                  <div class="carousel carousel-stage">
                                      <ul>
                                        <?php
                                        while($list_image_slider=mysql_fetch_object($slider_image))
                                        {

                                         ?>
                                          <li><img src="<?=$list_image_slider->ImageUrl;?>" width="600" height="400" alt=""></li>
                                          <?
                                        }
                                        ?>
                                      </ul>
                                  </div>
                                  <a href="#" class="prev prev-stage"><span>&lsaquo;</span></a>
                                  <a href="#" class="next next-stage"><span>&rsaquo;</span></a>
                              </div>

                              <div class="navigation">
                                  <a href="#" class="prev prev-navigation">&lsaquo;</a>
                                  <a href="#" class="next next-navigation">&rsaquo;</a>
                                  <div class="carousel carousel-navigation">
                                      <ul>
                                        <?php
                                        while($list_thumb_slider=mysql_fetch_object($slider_thumb))
                                        {

                                         ?>
                                          <li><img src="<?=$list_thumb_slider->ImageUrl;?>" width="50" height="50" alt=""></li>
                                          <?
                                          }
                                          ?>
                                      </ul>
                                  </div>
                              </div>
                          </div>
              <?
            }
             ?>
             <?php
             $ContentCollapseWidget=$con->select_where('ContentCollapseWidget','url',$page_content);
             $CheckWidget=mysql_num_rows($ContentCollapseWidget);
             if($CheckWidget!=0)
             {
               $a=0;
               while($CollapseContent=mysql_fetch_object($ContentCollapseWidget))
               {
                $a=$a+1;
                if($a==1)
                {
                    if($language=="EN")
                    {
                        echo '<h3 class="toggle-trigger toggle-trigger-active">' . $CollapseContent->title_en . '</h3>';
                    }
                    else
                    {
                        echo '<h3 class="toggle-trigger toggle-trigger-active">' . $CollapseContent->title_id . '</h3>';
                    }
               echo '<div class="toggle-container toggle-container-opened">';
                    if($language=="EN")
                    {
                        echo '<p>' . $CollapseContent->desc_en . '</p>';
                    }
                    else
                    {
                        echo '<p>' . $CollapseContent->desc_id . '</p>';
                    }
               echo '</div>';
               echo '<div class="clearfix"></div>';
                }
                else {
                    if($language=="EN") {
                        echo '<h3 class="toggle-trigger toggle-trigger">' . $CollapseContent->title_en . '</h3>';
                    }
                    else
                    {
                        echo '<h3 class="toggle-trigger toggle-trigger">' . $CollapseContent->title_id . '</h3>';
                    }
                  echo '<div class="toggle-container toggle-container">';
                    if($language=="EN") {
                        echo '<p>' . $CollapseContent->desc_en . '</p>';
                    }
                    else
                    {
                        echo '<p>' . $CollapseContent->desc_id . '</p>';
                    }
                  echo '</div>';
                  echo '<div class="clearfix"></div>';
                }

             }
              }

              ?>
              <?php
              if($page_content=="milestone")
              {

                ?>
                <section id="cd-timeline" class="cd-container">
                  <?php
                  $milestone=$con->select_order('milestone','Year','DESC');
                  while($milestone_list=mysql_fetch_object($milestone))
                  {
                   ?>
                  <div class="cd-timeline-block">
                    <div class="cd-timeline-img cd-picture">
                    </div> <!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                      <h1 class="title-red"><?=$milestone_list->Year;?></h1>
                      <hr class="hr_red">
                      <div class="clearfix"></div>

                      <p>
                        <?php
                        if ($language=="EN")
                        {
                            echo $milestone_list->InformationEN;
                        }
                        else
                        {
                            echo $milestone_list->InformationID;
                        }
                         ?>
                    </div> <!-- cd-timeline-content -->
                  </div> <!-- cd-timeline-block -->
                  <?
                }
                ?>

                </section>


                <?
              }
              ?>
              <?php
              $ContentAttachment=$con->select_where('ContentAttachment','url',$page_content);
              $CheckAttachment=mysql_num_rows($ContentAttachment);
              if($CheckAttachment!=0)
              {
                echo '<div class="clearfix"></div>';
                echo '<table class=dividend_history_table style="margin-top:20px;margin-left:-30px;width:700px">';
                echo '<thead>';
                echo '<tr>';
                echo '<th></th>';
                  if($language=="EN")
                  {
                      echo '<th>Information</td>';
                  }
                  else
                  {
                      echo '<th>Informasi</td>';
                  }

                echo '<th>Download</td>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody class="tbody_left" >';
                while($FileAttachment=mysql_fetch_object($ContentAttachment))
                {
                    echo '<tr >';
                    echo '<td></td>';
                    if($language=="EN")
                    {
                        echo '<td>'.$FileAttachment->file_desc.'</td>';
                    }
                    else
                    {
                        echo '<td>'.$FileAttachment->file_descID.'</td>';
                    }

                    echo '<td><a href="'.$FileAttachment->file.'" download><img src=/assets/img/btn_pdf.png></a></td>';
                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
                            echo '<div class="clearfix"></div>';
                }
               ?>
            <?php
            if($page_content=="corporate-secretary")
            {
                $sekretaris=$con->select_where('Sekretaris','id','1');
                $sekretaris_people=mysql_fetch_object($sekretaris);
                ?>
                <?php if($language=="EN") {  ?>
                <h5 class="title-red"><?=$sekretaris_people->Name;?></h5>
                <b>Corporate Secretary</b>
            <br><br><br>
                <a href="#" class="<?=$sekretaris_people->id;?>">Read More</a>
                <script type="text/javascript">

                    $('.<?=$sekretaris_people->id;?>').on('click', function () {
                        $.confirm({
                            title: false,
                            content: '<div class="col-md-2 modal-img"><img src="<?=$sekretaris_people->Photo;?>"></div><div class="col-md-8 modal-content" ><h3><?=$sekretaris_people->Name;?></h3><? echo "$sekretaris_people->DescriptionEn";?></div><div class=clearfix></div>',
                            cancelButton: false,
                            columnClass: 'col-md-8 col-md-offset-2',
                            confirmButton: "<button class=modal_close>X</buton>"
                        });
                    });
                </script>
            <? } else { ?>
                <h5 class="title-red"><?=$sekretaris_people->Name;?></h5>
                <b>Sekretaris Perusahaan</b>
                <br><br><br>
                <a href="#" class="<?=$sekretaris_people->id;?>">Baca Lebih lanjut</a>
                <script type="text/javascript">

                    $('.<?=$sekretaris_people->id;?>').on('click', function () {
                        $.confirm({
                            title: false,
                            content: '<div class="col-md-2 modal-img"><img src="<?=$sekretaris_people->Photo;?>"></div><div class="col-md-8 modal-content" ><h3><?=$sekretaris_people->Name;?></h3><? echo "$sekretaris_people->DescriptionID";?></div><div class=clearfix></div>',
                            cancelButton: false,
                            columnClass: 'col-md-8 col-md-offset-2',
                            confirmButton: "<button class=modal_close>X</buton>"
                        });
                    });
                </script>

            <? } ?>
            <?}

            ?>
        <?php
          if($page_content=="about-victoria")
          {
              $visi=$con->select_where('VisiMisi','id','1');
              $misi=$con->select_where('VisiMisi','id','2');
              $visi_victoria=mysql_fetch_object($visi);
              $misi_victoria=mysql_fetch_object($misi);
            ?>
        <div class="col-md-6">
          <h3>
              <?php
              if($language=="EN")
              {
                  echo $visi_victoria->Title_en;
              }
              else
              {
                  echo $visi_victoria->Title_id;
              }


              ?>

          </h3>
          <hr>
          <div class="clearfix"></div>
            <?php
            if($language=="EN")
            {
                echo $visi_victoria->ContentEn;
            }
            else
            {
                echo $visi_victoria->ContentId;
            }


            ?>
        </div>
        <div class="col-md-6">
          <h3>
              <?php
              if($language=="EN")
              {
                  echo $misi_victoria->Title_en;
              }
              else
              {
                  echo $misi_victoria->Title_id;
              }


              ?>
          </h3>
          <hr>
          <div class="clearfix"></div>
            <?php
            if($language=="EN")
            {
                echo $misi_victoria->ContentEn;
            }
            else
            {
                echo $misi_victoria->ContentId;
            }


            ?>
        </div>
        <? } ?>

      </div>
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
