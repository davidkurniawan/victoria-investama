<?php
include "../lib/processor.php";

$menu_id=$_REQUEST['menu_id'];

$con = new DB_con();
$category=$con->select_where("menu","id",$menu_id);

$selected_category=mysql_fetch_object($category);
 ?>
<div class="row">
    <div class="col-lg-8">
      <section class="panel">
          <header class="panel-heading">
             Edit Category<a href="<?=$_SERVER['HTTP_REFERER'];?>" data-dismiss="modal" class="btn btn-sm btn-primary pull-right" type="button">Back to category list</a>
          </header>
          <div class="panel-body">

            <div class="panel-body">

                  <form class="form-horizontal tasi-form" method="post" action="controller/edit-category-lo.php">
                    <input type="hidden" name="menu_id" value="<?=$menu_id;?>">
                  <div class="form-group">
                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Category Name (ID)</label>
                      <div class="col-lg-6">
                          <input type="text" Name="name_category_id" class="form-control" value="<?=$selected_category->MenuNameID;?>">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Category Name (EN)</label>
                      <div class="col-lg-6">
                          <input type="text" Name="name_category_en" class="form-control" value="<?=$selected_category->MenuName;?>">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess"></label>
                      <div class="col-lg-6">
                          <input type="submit" Name="category_en" class="form-control btn-success btn" value="Save">
                      </div>
                  </div>
            </div>

          </div>

      </section>

        <div class="row">

        </div>

    </div>
</div>
