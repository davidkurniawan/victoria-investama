<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Visi Misi
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> Title</th>
                    <th><i class="fa fa-bullhorn"></i> Content EN</th>
                    <th><i class="fa fa-bullhorn"></i> Content ID</th>
                    <th width=100px></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  include "controller/visimisi-page-lo.php";
                  $id_modal=0;
                  while($list_content=mysql_fetch_object($content))
                  {
                    ?>
                    <tr>
                        <td><a href="#"><?=$list_content->Title_en;?></a></td>
                        <td class="hidden-phone"><?=$list_content->ContentEn;?></td>
                        <td class="hidden-phone"><?=$list_content->ContentId;?></td>
                        <td>
                            <a href="index.php?page=visi-misi-editor&content_id=<?=$list_content->id;?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-xs" data-toggle="modal" href='#delete_modal_<?=$list_content->id;?>'>
                            <i class="fa fa-trash-o "></i>
                            </a>
                            <div class="modal fade" id="delete_modal_<?=$list_content->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Delete Category</h4>
                                        </div>
                                        <div class="modal-body">

                                            Are you sure want to delete this category ?
                                        </div>
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                            <a href="controller/delete-category-lo.php?menu_id=<?=$list_content->id;?>" class="btn btn-warning">Confirm</a>
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
