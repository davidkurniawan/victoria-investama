<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Create New Account
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/save-account-lo.php">
                                          <div class="clearfix"></div>
                                          <div class="form-group">
                                          <label class="col-sm-4 col-sm-4 control-label">User Level Access</label>
                                              <div class="col-sm-5">
                                                <select name="user_level" class="form-control">
                                                 <option value='superadmin'>Super Admin</option>
                                                 <option value='editor'>Content Editor</option>
                                                 <option value='financial'>Financial</option>
                                                 </select>
                                              </div>
                                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Name</label>
                              <div class="col-sm-5">
                                  <input type="text" Name="name" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Email</label>
                              <div class="col-sm-5">
                                <input type="text" Name="username" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Password</label>
                              <div class="col-sm-5">
                                  <input type="password" Name="password" class="form-control" value="">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Retype Password</label>
                              <div class="col-sm-5">
                                  <input type="password" Name="re-password" class="form-control"">
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
