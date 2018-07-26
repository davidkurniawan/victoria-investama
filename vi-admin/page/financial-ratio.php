<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Financial Ratio
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                                <a href=?page=new-financial-ratio class="btn btn-success">Add new</a>
                        </div>
                    </section>

                </div>
            </div>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>Year</th>
                    <th>Revenue Growth</th>
                    <th>Net Income Growth</th>
                    <th>Comprehensive Income for the Year</th>
                    <th>Return on Assets</th>
                    <th>Return on Equity</th>
                    <th>Net Income Margin</th>
                    <th>Current Ratio</th>
                    <th>Total Liabilities to Equity Ratio</th>
                    <th>Total Liabilities to Total Assets</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  include "controller/financial-ratio.php";
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

                        <td><a href="#"><?=$ContentList->Year;?></a></td>
                        <td class="hidden-phone"><?=$ContentList->RevenueGrowth;?></td>
                          <td class="hidden-phone"><?=$ContentList->NetIncomeGrowth;?></td>
                          <td class="hidden-phone"><?=$ContentList->ComprehensiveIncomeYear;?></td>
                          <td class="hidden-phone"><?=$ContentList->ReturnOnAssets;?></td>
                          <td class="hidden-phone"><?=$ContentList->ReturnOnEquity;?></td>
                          <td class="hidden-phone"><?=$ContentList->NetIncomeMargin;?></td>
                          <td class="hidden-phone"><?=$ContentList->CurrentRatio;?></td>
                          <td class="hidden-phone"><?=$ContentList->LiabilitiesToTotalAssets;?></td>
                        <td>
                            <a href="index.php?page=edit-financial-ratio&id=<?=$ContentList->id;?>" class="btn btn-primary btn-xs">
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
                                            <a href="controller/delete-financialratio-lo.php?id=<?=$ContentList->id;?>" class="btn btn-warning">Confirm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <?

                  }
                   ?>


                </tbody>
            </table>
        </section>
    </div>
</div>
