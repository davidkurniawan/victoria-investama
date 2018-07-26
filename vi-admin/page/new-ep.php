<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             New Annual Reports
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/save-ep-lo.php" enctype="multipart/form-data">
                    <div class="form-group">
                                              <label class="control-label col-md-2">Cover Img</label>
                                              <div class="col-md-9">
                                                  <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                                                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                                      </div>
                                                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                                      <div>
                                                       <span class="btn btn-white btn-file">
                                                       <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                       <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                       <input type="file" class="default" name="cover">
                                                       </span>
                                                          <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div><br>
                                          <div class="form-group">
                                              <label class="col-sm-2 col-sm-2 control-label">File Attachment</label>
                                              <div class="col-sm-3">
                                                  <input type="file" Name="ep-file" class="form-control default" value="">
                                              </div>
                                          </div>
                                          <div class="clearfix"></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Year</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="ep_year" class="form-control" value="">
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
                                <label class="col-sm-2 col-sm-2 control-label">Informasi File</label>
                                <div class="col-sm-10">
                                    <input type="text" Name="ep_info_id" class="form-control" value="">
                                </div>
                            </div><br>
                    </div>
                  </div>
                  <div id="english" class="tab-pane" >
                    <div class="panel-body">

                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">File Information</label>
                                                <div class="col-sm-10">
                                                    <input type="text" Name="ep_info_en" class="form-control" value="">
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
