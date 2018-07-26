<?php
include "../lib/processor.php";

$id=$_REQUEST['account_id'];

$con = new DB_con();
$account=$con->select_where("account","id",$id);

$selected_account=mysql_fetch_object($account);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Edit Account
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-account-lo.php">
                    <input type="hidden" name="account_id" value="<?=$selected_account->id;?>">
                                          <div class="clearfix"></div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Name</label>
                              <div class="col-sm-5">
                                  <input type="text" Name="name" class="form-control" value="<?=$selected_account->Name;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Email</label>
                              <div class="col-sm-5">
                                <input type="text" Name="username" class="form-control" value="<?=$selected_account->username;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">New Password</label>
                              <div class="col-sm-5">
                                  <input type="password" Name="password" class="form-control" value="">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Retype New Password</label>
                              <div class="col-sm-5">
                                  <input type="password" Name="re-password" class="form-control" value="<?=$selected_account->fax;?>">
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
