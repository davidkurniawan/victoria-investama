<?php
include "../lib/processor.php";

$bs_id=$_REQUEST['id'];

$con = new DB_con();
$bs=$con->select_where("FinancialBalanceSheet","id",$bs_id);

$selected_bs=mysql_fetch_object($bs);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Edit Balance Sheet
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-balancesheet-lo.php">
                    <input type="hidden" name="balance_id" value="<?=$selected_bs->id;?>">
                                          <div class="clearfix"></div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Year</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="Year" class="form-control" value="<?=$selected_bs->Year;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Total Assets</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="TotalAssets" class="form-control" value="<?=$selected_bs->TotalAssets;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Current assets</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="CurrentAssets" class="form-control" value="<?=$selected_bs->CurrentAssets;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Noncurrent assets</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="NonCurrentAssets" class="form-control" value="<?=$selected_bs->NonCurrentAssets;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Total Liabilities</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="TotalLiabilities" class="form-control" value="<?=$selected_bs->TotalLiabilities;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Current Liabilities</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="CurrentLiabilities" class="form-control" value="<?=$selected_bs->CurrentLiabilities;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Noncurrent Liabilities</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="NonCurrentLiabilities" class="form-control" value="<?=$selected_bs->NonCurrentLiabilities;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Total shareholder's equity</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="TotalShareholdersEquity" class="form-control" value="<?=$selected_bs->TotalShareholdersEquity;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Attributable to owners of the Parents</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="AttributableOwnerParents" class="form-control" value="<?=$selected_bs->AttributableOwnerParents;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Attributable to Noncontrolling Interests</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="AttributableNoncontrollingInterests" class="form-control" value="<?=$selected_bs->AttributableNoncontrollingInterests;?>">
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
