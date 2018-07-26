<?php
include "controller/category-page-lo.php";

$page_id=$_REQUEST['page_id'];
$menu_id=$_REQUEST['menu_id'];

$list_content=$con->select_where('content','id',$page_id);
$list_category=$con->select_where('menu','id',$menu_id);


$data_content=mysql_fetch_object($list_content);
$data_category=mysql_fetch_object($list_category);

$content_category=$con->select_where('menu','id',$data_category->Parent);

$selected_category=mysql_fetch_object($content_category);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Edit Page
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-page-lo.php">
                    <input type=hidden name="page_id" value="<?=$page_id;?>">
                    <input type="hidden" name="menu_id" value="<?=$menu_id;?>">
                  <div class="form-group">
                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Category Page</label>
                      <div class="col-lg-6">
                          <select class="form-control m-bot15" name="category_page">
                            <?php
                            echo $data_category->Parent;
                            while($categorylist=mysql_fetch_object($category))
                            {
                              ?>
                              <option value="<?=$categorylist->id;?>" <? if($categorylist->id==$selected_category->id) {echo "selected";} ?>><?=$categorylist->MenuName;?></option>
                              <?
                            }
                             ?>

                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Page Name (ID)</label>
                      <div class="col-lg-6">
                          <input type="text" Name="page_name_id" class="form-control" value="<?=$data_category->MenuNameID;?>">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Page Name (EN)</label>
                      <div class="col-lg-6">
                          <input type="text" Name="page_name_en" class="form-control" value="<?=$data_category->MenuName;?>">
                      </div>
                  </div>
            </div>

          </div>

      </section>
      
      <section class="panel">
          <header class="panel-heading tab-bg-dark-navy-blue ">
              <ul class="nav nav-tabs">
                  <li class="active">
                      <a data-toggle="tab" href="#indonesia">Indonesia</a>
                  </li>
                  <li class="">
                      <a data-toggle="tab" href="#english">English</a>
                  </li>
              </ul>
          </header>
          <div class="panel-body">


              <div class="tab-content">
                  <div id="indonesia" class="tab-pane active">
                    <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" Name="title_id" class="form-control" value="<?=$data_content->Title_id;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control ckeditor" name="content_id" rows="12">
                                      <?php
                                      echo $data_content->BodyText_id;
                                       ?>
                                    </textarea>
                                </div>
                            </div>
                    </div>
                  </div>
                  <div id="english" class="tab-pane">
                    <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" Name="title_en" class="form-control" value="<?=$data_content->Title_en;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control ckeditor" name="content_en" rows="12">
                                      <?php
                                      echo $data_content->BodyText_en;
                                       ?>
                                    </textarea>
                                </div>
                            </div>


                    </div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-sm-12">
                      <input type="submit" value="Save" class="btn btn-primary pull-right">
                  </div>
              </div>
              </form>
          </div>
      </section>











        <div class="row">

        </div>

    </div>
</div>
