<?php
include "../lib/processor.php";

$bs_id=$_REQUEST['id'];

$con = new DB_con();
$bs=$con->select_where("ProfitLoss","id",$bs_id);

$selected_bs=mysql_fetch_object($bs);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Edit Profit Loss
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-profitloss-lo.php">
                    <input type="hidden" name="profitloss_id" value="<?=$selected_bs->id;?>">
                                          <div class="clearfix"></div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Year</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="Year" class="form-control" value="<?=$selected_bs->Year;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Revenue</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="Revenue" class="form-control" value="<?=$selected_bs->Revenue;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Operating expenses</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="OperatingExpenses" class="form-control" value="<?=$selected_bs->OperatingExpenses;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Operating Income</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="OperatingIncome" class="form-control" value="<?=$selected_bs->OperatingIncome;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Other Income (expenses) - net</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="OtherIncome" class="form-control" value="<?=$selected_bs->OtherIncome;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Income Before tax</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="IncomeBeforeTax" class="form-control" value="<?=$selected_bs->IncomeBeforeTax;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Income for the year</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="IncomeYear" class="form-control" value="<?=$selected_bs->IncomeYear;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Income attributable to  the owners of the Company</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="IncomeOwner" class="form-control" value="<?=$selected_bs->IncomeOwner;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Income (Loss) attributable to noncontrolling shareholders</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="IncomeShareHolder" class="form-control" value="<?=$selected_bs->IncomeShareHolder;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Total Comprehensive Income for the year</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="ComprehensiveIncomeYear" class="form-control" value="<?=$selected_bs->ComprehensiveIncomeYear	;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Comprehensive Income attributable to owners of the Company</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="ComprehensiveIncomeOwner" class="form-control" value="<?=$selected_bs->ComprehensiveIncomeOwner;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Total Comprehensive Income (Loss) attributable to noncontrolling shareholders</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="ComprehensiveIncomeShareholders" class="form-control" value="<?=$selected_bs->ComprehensiveIncomeShareholders;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Earnings Per share - basic</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="EarningBasic" class="form-control" value="<?=$selected_bs->EarningBasic;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Earnings Per share - diluted</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="EarningDiluted" class="form-control" value="<?=$selected_bs->EarningDiluted;?>">
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
