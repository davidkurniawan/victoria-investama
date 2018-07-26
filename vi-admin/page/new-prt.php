<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             New Prospectus
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/save-prt-lo.php" enctype="multipart/form-data">

                                          <div class="form-group">
                                              <label class="col-sm-2 col-sm-2 control-label">File Attachment</label>
                                              <div class="col-sm-3">
                                                  <input type="file" Name="prt-file" class="form-control default" value="">
                                              </div>
                                          </div>
                                          <div class="clearfix"></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Year</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="prt-year" class="form-control" value="">
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
                                    <input type="text" Name="prt_info_id" class="form-control" value="">
                                </div>
                            </div><br>
                    </div>
                  </div>
                  <div id="english" class="tab-pane" >
                    <div class="panel-body">

                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">File Information</label>
                                                <div class="col-sm-10">
                                                    <input type="text" Name="prt_info_en" class="form-control" value="">
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
