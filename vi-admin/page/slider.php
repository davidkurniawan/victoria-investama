<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Slider Image
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                                <a href=?page=add-image-slider&slider_id=<?=$_REQUEST['slider_id'];?> class="btn btn-success">Add Image</a>
                        </div>
                    </section>

                </div>
            </div>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> Image Thumbnail</th>
                    <th><i class="fa fa-bullhorn"></i> Image Url</th>
                    <th><i class="fa fa-bullhorn"></i> Image Title</th>
                    <th><i class="fa fa-bullhorn"></i> Image Alt</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  include "../lib/processor.php";
                  $id_slider=$_REQUEST['slider_id'];
                  $con = new DB_con();
                  $slide=$con->select_where('SliderImageContent','SliderImageId',$id_slider);


                  $id_modal=0;
                  while($list_slide=mysql_fetch_object($slide))
                  {
                    ?>
                    <tr>

                        <td><a href="#"><img src='<?=$list_slide->ImageUrl;?>' width=150px></a></td>
                        <td class="hidden-phone"><?=$list_slide->ImageUrl;?></td>
                        <td class="hidden-phone"><?=$list_slide->ImageTitle;?></td>
                          <td class="hidden-phone"><?=$list_slide->AltImage;?></td>
                        <td>
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
                                            <a href="controller/delete-image-slider-lo.php?image_id=<?=$list_slide->id;?>&slider_id=<?=$_REQUEST['slider_id'];?>" class="btn btn-warning">Confirm</a>
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
