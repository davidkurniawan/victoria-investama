<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Board of Directors
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                                <a href=?page=create-bod class="btn btn-success">Add</a>
                        </div>
                    </section>

                </div>
            </div>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> Photo</th>
                    <th><i class="fa fa-bullhorn"></i> Name</th>
                    <th><i class="fa fa-bullhorn"></i> Position</th>
                    <th><i class="fa fa-bullhorn"></i> Description</th>
                    <th width=100px></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  include "controller/bod-lo.php";
                  $id_modal=0;
                  while($list_bod=mysql_fetch_object($bod))
                  {
                    ?>
                    <tr>
                        <td><a href="#"><img src='<?=$list_bod->Photo;?>'</a></td>
                        <td width=200px><?=$list_bod->Name;?></td>
                        <td width=200px><?=$list_bod->Position;?></td>
                        <td><?=$list_bod->DescriptionEN;?></td>
                        <td>
                            <a href="index.php?page=bod-editor&bod_id=<?=$list_bod->id;?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-xs" data-toggle="modal" href='#delete_modal_<?=$list_bod->id;?>'>
                            <i class="fa fa-trash-o "></i>
                            </a>
                            <div class="modal fade" id="delete_modal_<?=$list_bod->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Delete Board Of Directors</h4>
                                        </div>
                                        <div class="modal-body">

                                            Are you sure want to delete this Directors ?
                                        </div>
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                            <a href="controller/delete-bod-lo.php?id=<?=$list_bod->id;?>" class="btn btn-warning">Confirm</a>
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
