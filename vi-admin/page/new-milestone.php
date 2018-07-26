<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             New milestone
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/save-milestone-lo.php">

                                          <div class="clearfix"></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Year</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="milestone-year" class="form-control" value="">
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
                                <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                                <div class="col-sm-10">
                                  <textarea name="milestone_info_id" class="form-control"></textarea>
                                </div>
                            </div><br>
                    </div>
                  </div>
                  <div id="english" class="tab-pane" >
                    <div class="panel-body">

                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea name="milestone_info_en" class="form-control"></textarea>
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
