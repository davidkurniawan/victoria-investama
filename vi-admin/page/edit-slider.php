<?php
include "../lib/processor.php";

$id=$_REQUEST['slider_id'];

$con = new DB_con();
$slider=$con->select_where("SliderImage","id",$id);

$selected_slider=mysql_fetch_object($slider);
 ?>


<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Edit Slide Image
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-slide-image-lo.php">
                    <input type="hidden" name="id" value="<?=$selected_slider->id;?>">
                                          <div class="clearfix"></div>
                        <div class="form-group">
                        <label class="col-sm-4 col-sm-4 control-label">Slider Name</label>
                            <div class="col-sm-5">
                                <input type="text" Name="slider_name" class="form-control" value="<?=$selected_slider->SlideShowName;?>">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-4 col-sm-4 control-label">Page Target</label>
                            <div class="col-sm-5">
                              <select name="page_target" class="form-control">
                              <?php
                              include "../lib/processor.php";

                              $con = new DB_con();
                              $page_list=$con->select_where('menu','MenuType',2);
                              while($list_page=mysql_fetch_object($page_list))
                              {

                               ?>
                               <option value='<?=$list_page->url;?>'
                                 <?
                                 if($selected_slider->PageTarget==$list_page->url)
                                 {
                                   echo "selected";
                                 }

                                 ?>
                                 >
                                 <?php
                                 $cat_list=$con->select_where('menu','id',$list_page->Parent);
                                 $cat_name=mysql_fetch_object($cat_list);
                                  ?>
                                <?=$cat_name->MenuName;?> -
                                <?=$list_page->MenuName;?>
                              </option>
                                <?
                              }
                               ?>
                               </select>
                            </div>
                        </div>





                          <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="submit" value="Save" class="btn btn-primary pull-right">
                              </div>
                          </div>
                          </form>
            </div>

          </div>

      </section>

        <div class="row">

        </div>

    </div>
</div>
