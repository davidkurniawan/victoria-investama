<div class="row" >
    <div class="col-lg-12" >
        <section class="panel">
            <header class="panel-heading">
                Profit/Loss Statement
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                                <a href=?page=new-profit-loss class="btn btn-success">Add new</a>
                        </div>
                    </section>

                </div>
            </div>
            <div style="width:100%; overflow:auto;">
            <table class="table table-striped table-advance table-hover" style="font-size:9px">
                <thead>
                <tr>
                  <th></th>
                    <th>Year</th>
                    <th>Revenue</th>
                    <th>Operating expenses</th>
                    <th>Operating Income</th>
                    <th>Other Income (expenses) - net</th>
                    <th>Income Before tax</th>
                    <th>Income for the year</th>
                    <th>Income attributable to  the owners of the Company</th>
                    <th>Income (Loss) attributable to noncontrolling shareholders</th>
                    <th>Total Comprehensive Income for the year</th>
                    <th>Comprehensive Income attributable to owners of the Company</th>
                    <th>Total Comprehensive Income (Loss) attributable to noncontrolling shareholders</th>
                    <th>Earnings Per share - basic</th>
                    <th>Earnings Per share - diluted</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  include "controller/profit-loss.php";
                  $id_modal=0;
                  while($ContentList=mysql_fetch_object($content))
                  {
                    $id_modal=$id_modal+1;
                    /*
                    $page=$con->select_where('menu','url',$ListPage->Url);
                    $PageName=mysql_fetch_object($page);
                    $id_modal=$id_modal+1;
                    $category=$con->select_where_order('menu','id',$PageName->Parent,'MenuName','ASC');
                    $category_name=mysql_fetch_object($category);
                    */
                    ?>
                    <tr>
                      <td>
                          <a href="index.php?page=edit-profit-loss&id=<?=$ContentList->id;?>" class="btn btn-primary btn-xs">
                            <i class="fa fa-pencil"></i>
                          </a>
                          <a class="btn btn-danger btn-xs" data-toggle="modal" href='#delete_modal_<?=$id_modal;?>'>
                          <i class="fa fa-trash-o "></i>
                          </a>
                          <div class="modal fade" id="delete_modal_<?=$id_modal;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Delete Report</h4>
                                      </div>
                                      <div class="modal-body">

                                          Are you sure want to delete this Report ?
                                      </div>
                                      <div class="modal-footer">
                                          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                          <a href="controller/delete-profitloss-lo.php?id=<?=$ContentList->id;?>" class="btn btn-warning">Confirm</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </td>
                        <td><a href="#"><?=$ContentList->Year;?></a></td>
                        <td class="hidden-phone"><?=$ContentList->Revenue;?></td>
                          <td class="hidden-phone"><?=$ContentList->OperatingExpenses;?></td>
                          <td class="hidden-phone"><?=$ContentList->OperatingIncome;?></td>
                          <td class="hidden-phone"><?=$ContentList->OtherIncome;?></td>
                          <td class="hidden-phone"><?=$ContentList->IncomeBeforeTax;?></td>
                          <td class="hidden-phone"><?=$ContentList->IncomeYear;?></td>
                          <td class="hidden-phone"><?=$ContentList->IncomeOwner;?></td>
                          <td class="hidden-phone"><?=$ContentList->IncomeShareHolder;?></td>
                          <td class="hidden-phone"><?=$ContentList->ComprehensiveIncomeYear;?></td>
                          <td class="hidden-phone"><?=$ContentList->ComprehensiveIncomeOwner;?></td>
                          <td class="hidden-phone"><?=$ContentList->ComprehensiveIncomeShareholders;?></td>
                          <td class="hidden-phone"><?=$ContentList->EarningBasic;?></td>
                          <td class="hidden-phone"><?=$ContentList->EarningDiluted;?></td>

                    </tr>

                    <?

                  }
                   ?>


                </tbody>
            </table>
          </div>
        </section>
    </div>
</div>
