<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                User Management
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                                <a href=?page=create-user class="btn btn-success">Create New User</a>
                        </div>
                    </section>

                </div>
            </div>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                  <th><i class="fa fa-bullhorn"></i> User Level</th>
                    <th><i class="fa fa-bullhorn"></i> Name</th>
                    <th><i class="fa fa-bullhorn"></i> Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  include "controller/user-manager-lo.php";
                  while($user_list=mysql_fetch_object($account))
                  {

                    ?>
                    <tr>
                      <td><a href="#"><?=$user_list->level;?></a></td>
                        <td><a href="#"><?=$user_list->Name;?></a></td>
                        <td class="hidden-phone"><?=$user_list->username;?></td>
                        <td>
                            <a href="index.php?page=edit-user&account_id=<?=$user_list->id;?>" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-xs" data-toggle="modal" href='#delete_modal_<?=$user_list->id;?>'>
                            <i class="fa fa-trash-o "></i>
                            </a>
                            <div class="modal fade" id="delete_modal_<?=$user_list->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Delete User</h4>
                                        </div>
                                        <div class="modal-body">

                                            Are you sure want to delete this user ?
                                        </div>
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                            <a href="controller/delete-account-lo.php?account_id=<?=$user_list->id;?>" class="btn btn-warning">Confirm</a>
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
