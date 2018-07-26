<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Page List
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">
                                <a href="?page=page-editor&cat_id=<?=$_REQUEST['cat_id'];?>" class="btn btn-success">Create New Page</a>
                        </div>
                    </section>

                </div>
            </div>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> Category</th>
                    <th><i class="fa fa-bullhorn"></i> Page Name</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Title</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  include "../lib/processor.php";

                  $con = new DB_con();
                  $cat=$_REQUEST['cat_id'];
                  $cat_url=$con->select_where('menu','id',$cat);
                  $category_url=mysql_fetch_object($cat_url);
                  $data_page=$con->select_where('menu','Parent',$category_url->id);
                  $id_modal=0;
                  while($ListPage=mysql_fetch_object($data_page))
                  {
                    $page=$con->select_where('menu','url',$ListPage->url);
                    $PageName=mysql_fetch_object($page);
                    $id_modal=$id_modal+1;
                    $category=$con->select_where_order('menu','id',$PageName->Parent,'MenuName','ASC');
                    $category_name=mysql_fetch_object($category);

                    $content=$con->select_where('content','Url',$PageName->url);
                    $list_content=mysql_fetch_object($content);
                    ?>
                    <tr>
                        <td><a href="#"><?=$category_name->MenuName;?></a></td>
                        <td class="hidden-phone"><?=$PageName->MenuName;?></td>
                          <td class="hidden-phone"><?=$list_content->Title_en;?></td>
                        <td>
                            <a href="index.php?page=edit-page&page_id=<?=$list_content->id;?>&menu_id=<?=$PageName->id;?>" class="btn btn-primary btn-xs">
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
                                            <h4 class="modal-title">Delete Content</h4>
                                        </div>
                                        <div class="modal-body">

                                            Are you sure want to delete this content ?
                                        </div>
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                            <a href="controller/delete-page-lo.php?page_id=<?=$ListPage->id;?>&menu_id=<?=$PageName->id;?>" class="btn btn-warning">Confirm</a>
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
