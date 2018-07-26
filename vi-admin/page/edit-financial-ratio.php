<?php
include "../lib/processor.php";

$fr_id=$_REQUEST['id'];

$con = new DB_con();
$fr=$con->select_where("FinancialRatio","id",$fr_id);

$selected_fr=mysql_fetch_object($fr);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Edit Balance Sheet
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-financialratio-lo.php">
                    <input type="hidden" name="fr_id" value="<?=$selected_fr->id;?>">
                                          <div class="clearfix"></div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Year</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="Year" class="form-control" value="<?=$selected_fr->Year;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Revenue Growth</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="RevenueGrowth" class="form-control" value="<?=$selected_fr->RevenueGrowth;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Net Income Growth</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="NetIncomeGrowth" class="form-control" value="<?=$selected_fr->NetIncomeGrowth;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Comprehensive Income for the Year</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="ComprehensiveIncomeYear" class="form-control" value="<?=$selected_fr->ComprehensiveIncomeYear;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Return on Assets</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="ReturnOnAssets" class="form-control" value="<?=$selected_fr->ReturnOnAssets;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Return on Equity</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="ReturnOnEquity" class="form-control" value="<?=$selected_fr->ReturnOnEquity;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Net Income Margin</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="NetIncomeMargin" class="form-control" value="<?=$selected_fr->NetIncomeMargin;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Current Ratio</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="CurrentRatio" class="form-control" value="<?=$selected_fr->CurrentRatio;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Total Liabilities to Equity Ratio</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="LiabilitiesToEquityRatio" class="form-control" value="<?=$selected_fr->LiabilitiesToEquityRatio;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Total Liabilities to Total Assets</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="LiabilitiesToTotalAssets" class="form-control" value="<?=$selected_fr->LiabilitiesToTotalAssets;?>">
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
