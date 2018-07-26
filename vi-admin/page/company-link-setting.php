<?php
include "../lib/processor.php";

$id=1;

$con = new DB_con();
$company=$con->select_where("company_link","id",$id);

$company_link=mysql_fetch_object($company);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Company Link
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-company-link-lo.php">
                    <input type="hidden" name="id" value="<?=$company_link->id;?>">
                                          <div class="clearfix"></div>
                                          <div class="form-group">
                                              <label class="col-sm-4 col-sm-4 control-label">Bank Victoria</label>
                                              <div class="col-sm-5">
                                                <input type="text" Name="bank_victoria" class="form-control" value="<?=$company_link->bank_victoria;?>">
                                                  <span>Awali dengan http://</span>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-4 col-sm-4 control-label">Victoria Investama</label>
                                              <div class="col-sm-5">
                                                <input type="text" Name="victoria_investama" class="form-control" value="<?=$company_link->victoria_investama;?>">
                                                <span>Awali dengan http://</span>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-4 col-sm-4 control-label">Bank Victoria Syariah</label>
                                              <div class="col-sm-5">
                                                <input type="text" Name="bank_victoria_syariah" class="form-control" value="<?=$company_link->bank_victoria_syariah;?>">
                                                <span>Awali dengan http://</span>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-4 col-sm-4 control-label">Victoria Insurance</label>
                                              <div class="col-sm-5">
                                                <input type="text" Name="victoria_insurance" class="form-control" value="<?=$company_link->victoria_insurance;?>">
                                                <span>Awali dengan http://</span>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-4 col-sm-4 control-label">Victoria Securities</label>
                                              <div class="col-sm-5">
                                                <input type="text" Name="victoria_securities" class="form-control" value="<?=$company_link->victoria_securities;?>">
                                                <span>Awali dengan http://</span>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label class="col-sm-4 col-sm-4 control-label">Victoria Manajemen Investasi</label>
                                              <div class="col-sm-5">
                                                <input type="text" Name="vmi" class="form-control" value="<?=$company_link->vmi;?>">
                                                <span>Awali dengan http://</span>
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
