<?php
include "../lib/processor.php";

$content_id=$_REQUEST['content_id'];

$con = new DB_con();
$content=$con->select_where("VisiMisi","id",$content_id);

$selected_content=mysql_fetch_object($content);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Edit
             <a href="<?=$_SERVER['HTTP_REFERER'];?>" data-dismiss="modal" class="btn btn-sm btn-primary pull-right" type="button">Back to category list</a>
          </header>
          <div class="row">
              <div class="col-lg-12">
                  <section class="panel">
                      <div class="panel-body">
                        <section class="panel">
                            <header class="panel-heading tab-bg-dark-navy-blue ">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#indonesia">Indonesia</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" href="#about">English</a>
                                    </li>
                                </ul>
                            </header>
                            <div class="panel-body">
                              <form class="form-horizontal tasi-form" method="post" action="controller/update-visimisi-lo.php">
                                <input type="hidden" name="id_content" value="<?=$content_id;?>">

                                <div class="tab-content">
                                    <div id="indonesia" class="tab-pane active">
                                      <div class="panel-body">
                                              <div class="form-group">
                                                  <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" Name="title_id" class="form-control" value="<?=$selected_content->Title_id;?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-sm-2 col-sm-2 control-label">Content</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" name="content_id" rows="12"> <?=$selected_content->ContentId;?></textarea>
                                                  </div>
                                              </div>
                                      </div>
                                    </div>
                                    <div id="about" class="tab-pane">
                                      <div class="panel-body">
                                              <div class="form-group">
                                                  <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                                  <div class="col-sm-10">
                                                      <input type="text" Name="title_en" class="form-control" value="<?=$selected_content->Title_en;?>">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-sm-2 col-sm-2 control-label">Content</label>
                                                  <div class="col-sm-10">
                                                      <textarea class="form-control ckeditor" name="content_en" rows="12"><?=$selected_content->ContentEn;?></textarea>
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
                      </div>
                  </section>

              </div>
          </div>

      </section>












        <div class="row">

        </div>

    </div>
</div>
