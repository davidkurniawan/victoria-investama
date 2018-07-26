<?php
include "../lib/processor.php";

$bs_id=1;

$con = new DB_con();
$contact=$con->select_where("contact_us","id",$bs_id);

$selected_contact=mysql_fetch_object($contact);
 ?>
<div class="row">
    <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Contact Setting
          </header>
          <div class="panel-body">
            <div class="panel-body">
                  <form class="form-horizontal tasi-form" method="post" action="controller/update-contact-lo.php">
                    <input type="hidden" name="contact_id" value="<?=$selected_contact->id;?>">
                                          <div class="clearfix"></div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Company Name</label>
                              <div class="col-sm-5">
                                  <input type="text" Name="company" class="form-control" value="<?=$selected_contact->company_name;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Address</label>
                              <div class="col-sm-5">
                                <textarea cols=53 rows=5 name="address" lass="form-control"><?=$selected_contact->address;?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Phone</label>
                              <div class="col-sm-5">
                                  <input type="text" Name="phone" class="form-control" value="<?=$selected_contact->phone;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Fax</label>
                              <div class="col-sm-5">
                                  <input type="text" Name="fax" class="form-control" value="<?=$selected_contact->fax;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Email</label>
                              <div class="col-sm-5">
                                  <input type="text" Name="mail" class="form-control" value="<?=$selected_contact->email;?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4 col-sm-4 control-label">Inbox Email</label>
                              <div class="col-sm-5">
                                  <input type="text" Name="inbox_mail" class="form-control" value="<?=$selected_contact->mailbox_address;?>">
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
