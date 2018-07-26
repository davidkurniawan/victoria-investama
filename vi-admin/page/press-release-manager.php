<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Press Release Manager
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                                <a href=?page=post-press-release class="btn btn-success">Post New</a>
                        </div>
                    </section>

                </div>
            </div>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> Date</th>
                    <th><i class="fa fa-bullhorn"></i> Title</th>
                    <th><i class="fa fa-bullhorn"></i> Source</th>
                    <th><i class="fa fa-bullhorn"></i> Author</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  include "../lib/processor.php";

                  $con = new DB_con();
                  $news=$con->select_order('press_release','date_created','desc');
                  $id_modal=0;
                  while($list_news=mysql_fetch_object($news))
                  {
                    ?>
                    <tr>

                        <td><a href="#"><?=$list_news->date_created;?></a></td>
                        <td class="hidden-phone"><?=$list_news->title_en;?></td>
                        <td class="hidden-phone"><?=$list_news->author;?></td>
                        <td class="hidden-phone"><?=$list_news->source;?></td>
                        <td>
                            <a href="index.php?page=edit-press&press_id=<?=$list_news->id;?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-xs" data-toggle="modal" href='#delete_modal_<?=$list_news->id;?>'>
                            <i class="fa fa-trash-o "></i>
                            </a>
                            <div class="modal fade" id="delete_modal_<?=$list_news->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Delete Press Release</h4>
                                        </div>
                                        <div class="modal-body">

                                            Are you sure want to delete this Press ?
                                        </div>
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                            <a href="controller/delete-press-release-lo.php?press_id=<?=$list_news->id;?>" class="btn btn-warning">Confirm</a>
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
