<?php
include "../lib/processor.php";

$boc_id=$_REQUEST['boc_id'];
$con = new DB_con();
$boc=$con->select_where("boc","id",$boc_id);
$selected_boc=mysql_fetch_object($boc);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Edit Board of Commisioner
          </header>
      </section>
      <div class="col-lg-12">
      </div>
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
                      <form action="controller/update-boc-lo.php" enctype="multipart/form-data" method="post">
                        <input type="hidden" name="boc_id" value="<?=$boc_id;?>">
                      <div class="form-group">
                                                <label class="control-label col-md-2">Photo</label>
                                                <div class="col-md-9">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src='<?=$selected_boc->Photo;?>'>
                                                        </div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                        <div>
                                                         <span class="btn btn-white btn-file">
                                                         <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                         <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                         <input type="file" class="default" name="photo">
                                                         </span>
                                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" Name="boc_name" class="form-control" value="<?=$selected_boc->Name;?>">
                                </div>
                            </div><br>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Posisi</label>
                                <div class="col-sm-10">
                                    <input type="text" Name="boc_position_id" class="form-control" value="<?=$selected_boc->PositionID;?>">
                                </div>
                            </div><br>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control ckeditor" name="boc_desc_id" rows="12">
                                      <?php
                                      echo $selected_boc->DescriptionID;
                                       ?>
                                    </textarea>
                                </div>
                            </div>
                    </div>
                  </div>
                  <div id="english" class="tab-pane" >
                    <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" value="<?=$selected_boc->Name;?>">
                                                </div>
                                            </div><br>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Position</label>
                                                <div class="col-sm-10">
                                                    <input type="text" Name="boc_position_en" class="form-control" value="<?=$selected_boc->Position;?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control ckeditor" name="boc_desc_en" rows="12">
                                                      <?php
                                                      echo $selected_boc->DescriptionEN;
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
