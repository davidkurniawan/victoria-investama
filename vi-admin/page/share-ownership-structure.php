<?php
include "../lib/processor.php";

$con = new DB_con();
$content=$con->select_where("content","url","share-ownership-structure");

$selected_content=mysql_fetch_object($content);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Share Ownership Structure
          </header>
          <div class="panel-body">

            <div class="panel-body">

                  <form class="form-horizontal tasi-form" method="post" action="controller/save-sos-lo.php" enctype="multipart/form-data">
                    <div class="form-group">
                                              <label class="control-label col-md-3">Image Upload</label>
                                              <div class="col-md-9">
                                                  <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                          <?=$selected_content->BodyText_en;?>
                                                      </div>
                                                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                      <div>
                                                       <span class="btn btn-white btn-file">
                                                       <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                       <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                       <input type="file" class="default" name="strukture">
                                                       </span>
                                                          <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                  <div class="form-group">
                      <div class="col-lg-2">
                          <input type="submit" Name="category_en" class="form-control btn-success btn" value="Save">
                      </div>
                  </div>
            </div>

          </div>

      </section>

        <div class="row">

        </div>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Current Structure
          </header>
          <div class="panel-body">

            <div class="panel-body">
              <?=$selected_content->BodyText_en;?>
            </div>

          </div>

      </section>

        <div class="row">

        </div>

    </div>
</div>
