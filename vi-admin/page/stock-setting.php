<?php
include "../lib/processor.php";

$id=1;

$con = new DB_con();
$stock_setting=$con->select_where("Stock_Widget","id",$id);

$selected_stock=mysql_fetch_object($stock_setting);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Stock Setting
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-stock-setting-lo.php">
                    <input type="hidden" name="id" value="<?=$selected_stock->id;?>">
                                          <div class="clearfix"></div>
                        <div class="form-group">
                        <label class="col-sm-4 col-sm-4 control-label">Symbol</label>
                            <div class="col-sm-5">
                              <textarea name="symbol" cols=10 rows=10 class="form-control"><?=$selected_stock->symbol;?></textarea>
                              Gunakan koma (,) untuk menambahakn symbol Stock Exchange
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
