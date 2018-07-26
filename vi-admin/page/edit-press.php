<?php
include "../lib/processor.php";

$id=$_REQUEST['press_id'];

$con = new DB_con();
$news=$con->select_where("press_release","id",$id);

$selected_news=mysql_fetch_object($news);
$date_post=date_create($selected_news->date_created);
$date=date_format($date_post,"d-m-Y");

 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Edit Press Release
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-press-lo.php">
                    <input type="hidden" name="id" value="<?=$selected_news->id;?>">
                    <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Date</label>
                    <div class="col-md-3 col-xs-11">
                              <input Name="date_post" class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="<?=$date;?>">
                              <span class="help-block">Select date</span>
                          </div>
                    </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Author</label>
                      <div class="col-lg-6">
                          <input type="text" Name="author" class="form-control" value="<?=$selected_news->author;?>">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Source News</label>
                      <div class="col-lg-6">
                          <input type="text" Name="source" class="form-control" value="<?=$selected_news->source;?>">
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
                      <a data-toggle="tab" href="#about">English</a>
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
                                    <input type="text" Name="title_id" class="form-control" value="<?=$selected_news->title_id;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control ckeditor" name="content_id" rows="12"><?=$selected_news->content_id;?></textarea>
                                </div>
                            </div>
                    </div>
                  </div>
                  <div id="about" class="tab-pane">
                    <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" Name="title_en" class="form-control" value="<?=$selected_news->title_en;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Content</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control ckeditor" name="content_en" rows="12"><?=$selected_news->content_en;?></textarea>
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
