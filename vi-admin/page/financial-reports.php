<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Financial Reports
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                                <a href=?page=new-financial-reports class="btn btn-success">Add new</a>
                        </div>
                    </section>

                </div>
            </div>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Cover Image</th>
                    <th><i class="fa fa-bullhorn"></i> Year</th>
                    <th><i class="fa fa-bullhorn"></i> Title</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> File</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  include "controller/financial-reports.php";
                  $id_modal=0;
                  while($ListFile=mysql_fetch_object($content_file))
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

                      <td class="hidden-phone"><img src='<?=$ListFile->CoverImg;?>' width=100px></td>
                        <td><a href="#"><?=$ListFile->Year;?></a></td>
                        <td class="hidden-phone"><?=$ListFile->Title;?></td>
                          <td class="hidden-phone"><?=$ListFile->file;?></td>
                        <td>
                            <a href="index.php?page=edit-ar&id=<?=$ListFile->id;?>" class="btn btn-primary btn-xs">
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
                                            <a href="controller/delete-financial-report-lo.php?id=<?=$ListFile->id;?>" class="btn btn-warning">Confirm</a>
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
