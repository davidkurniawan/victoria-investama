<?php
include "../lib/processor.php";

$milestone_id=$_REQUEST['id'];

$con = new DB_con();
$milestone=$con->select_where("milestone","id",$milestone_id);

$selected_milestone=mysql_fetch_object($milestone);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Edit Milestone
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-milestone-lo.php">
                    <input type="hidden" name="milestone_id" value="<?=$selected_milestone->id;?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Year</label>
                              <div class="col-sm-3">

                                  <input type="text" Name="milestone-year" class="form-control" value="<?=$selected_milestone->Year;?>">
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

                            <div class="clearfix"></div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Deskriptsi</label>
                                <div class="col-sm-10">
                                    <textarea name="milestone_info_id" class="form-control"><?=$selected_milestone->InformationID;?></textarea>
                                </div>
                            </div><br>
                    </div>
                  </div>
                  <div id="english" class="tab-pane" >
                    <div class="panel-body">

                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                                <div class="col-sm-10">
                                                  <textarea name="milestone_info_en" class="form-control"><?=$selected_milestone->InformationEN;?></textarea>
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
