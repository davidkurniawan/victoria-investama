<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Slide Show
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                                <a href=?page=new-slide-image class="btn btn-success">Create New Slide Show</a>
                        </div>
                    </section>

                </div>
            </div>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                  <th></th>
                    <th><i class="fa fa-bullhorn"></i> Slide Show Name</th>
                    <th><i class="fa fa-bullhorn"></i> Page Target Url</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  include "../lib/processor.php";

                  $con = new DB_con();
                  $slide=$con->select('SliderImage');


                  $id_modal=0;
                  while($list_slide=mysql_fetch_object($slide))
                  {
                    ?>
                    <tr>
                      <td>
                      <a href="index.php?page=slider&slider_id=<?=$list_slide->id;?>" class="btn btn-info btn-xs">
                        <i class="fa fa-plus-square"></i>
                      </a>
                    </td>
                        <td><a href="#"><?=$list_slide->SlideShowName;?></a></td>
                        <td class="hidden-phone"><?=$list_slide->PageTarget;?></td>
                        <td>
                            <a href="index.php?page=edit-slider&slider_id=<?=$list_slide->id;?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-xs" data-toggle="modal" href='#delete_modal_<?=$list_slide->id;?>'>
                            <i class="fa fa-trash-o "></i>
                            </a>
                            <div class="modal fade" id="delete_modal_<?=$list_slide->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Delete Slider Image</h4>
                                        </div>
                                        <div class="modal-body">

                                            Are you sure want to delete this Slide ?
                                        </div>
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                            <a href="controller/delete-slider-lo.php?slider_id=<?=$list_slide->id;?>" class="btn btn-warning">Confirm</a>
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
