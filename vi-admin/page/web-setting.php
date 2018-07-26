<?php
include "../lib/processor.php";

$id=1;

$con = new DB_con();
$web_setting=$con->select_where("Setting","id",$id);

$selected_setting=mysql_fetch_object($web_setting);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Web Setting
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-web-setting-lo.php">
                    <input type="hidden" name="id" value="<?=$selected_setting->id;?>">
                                          <div class="clearfix"></div>
                        <div class="form-group">
                        <label class="col-sm-4 col-sm-4 control-label">Site Name</label>
                            <div class="col-sm-5">
                                <input type="text" Name="site_name" class="form-control" value="<?=$selected_setting->SiteName;?>">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-4 col-sm-4 control-label">Site Author</label>
                            <div class="col-sm-5">
                                <input type="text" Name="site_author" class="form-control" value="<?=$selected_setting->SiteAuthor;?>">
                            </div>
                        </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Site Title</label>
                              <div class="col-sm-5">
                                  <input type="text" Name="site_title" class="form-control" value="<?=$selected_setting->SiteTitle;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Site Slogan</label>
                              <div class="col-sm-5">
                                <input type="text" Name="site_tag" class="form-control" value="<?=$selected_setting->SiteTag;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Meta Keyword</label>
                              <div class="col-sm-5">
                                <textarea cols=53 rows=5 name="meta_keyword" lass="form-control"><?=$selected_setting->SiteKeyword;?></textarea>
                                <span>Gunakan koma (,) untuk menambahakn keyword SEO</span>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Meta Description</label>
                              <div class="col-sm-5">
                                <textarea cols=53 rows=5 name="meta_description" lass="form-control"><?=$selected_setting->SiteDescription;?></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="submit" value="Save" class="btn btn-primary pull-right">
                              </div>
                          </div>
                          </form>
            </div>

          </div>

      </section>

        <div class="row">

        </div>

    </div>
</div>
