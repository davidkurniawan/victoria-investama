<?php
include "../lib/processor.php";

$div_id=$_REQUEST['id'];

$con = new DB_con();
$div=$con->select_where("dividend_history","id",$div_id);

$selected_div=mysql_fetch_object($div);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Edit Dividen History
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-dividen-lo.php">
                    <input type="hidden" name="div_id" value="<?=$div_id;?>">
                                          <div class="clearfix"></div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Year</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="Year" class="form-control" value="<?=$selected_div->Year;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Total Dividen</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="TotalDivident" class="form-control" value="<?=$selected_div->TotalDivident;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Of Shares As Dec 31</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="NoOfSharesAsDec31" class="form-control" value="<?=$selected_div->NoOfSharesAsDec31;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Net Income</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="NetIncome" class="form-control" value="<?=$selected_div->NetIncome;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Dividen Payout Ratio</label>
                              <div class="col-sm-3">
                                  <input type="text" Name="DividentPayoutRatio" class="form-control" value="<?=$selected_div->DividentPayoutRatio;?>">
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
