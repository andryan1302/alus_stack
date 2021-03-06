  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: 901px;">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">PROFILE</h3>
              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" onclick="window.history.back()"><i class="fa fa-caret-square-o-left"></i> Kembali
                </button>
              </div>
            </div>

            <div class="box-body box-profile">
              <?php if(file_exists(base_url('assets/avatar')."/".$this->session->userdata('avatar'))){?>
                   <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/avatar')."/".$this->session->userdata('avatar');?>" alt="User profile picture" height="90" width="90">
                <?php }else{?>
                   <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/avatar');?>/avatar_default.png" alt="User profile picture" height="90" width="90">
                <?php }?>
              <form action="<?php echo base_url('user_profile/update');?>" method="POST" id="upuser" class="form-horizontal" enctype="multipart/form-data">
              <h3 class="profile-username text-center"><?php echo $data->first_name." ".$data->last_name;?></h3>

              <p class="text-muted text-center"><?php echo $data->job_title;?></p>
              <div class="list-group list-group-unbordered">
                <div class="form-group">
                    <label class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="first" name="first_name" type="text" value="<?php echo $data->first_name;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="last" name="last_name" type="text" value="<?php echo $data->last_name;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="email" id="email" type="text" value="<?php echo $this->alus_auth->decrypt($data->abc);?>">
                      <input type="hidden" name="id" value="<?php $this->session->userdata('user_id');?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="pw" name="password" type="password" value="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Re-Type Password</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="repassword" name="repassword" type="password" value="">
                    </div>
                  </div>
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="phone" id="phone" type="text" value="<?php echo $data->phone;?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Picture</label>
                    <div class="col-sm-9">
                      <input class="" id="picture" type="file" name="userfile">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-2">
                      <input type="submit" class="btn btn-primary btn-block" value="Save Update">
                      <input type="button" onclick="window.history.back()" class="btn btn-danger btn-block" value="Cancel">
                    </div>
                  </div>
              </div>
              </form>
            </div>
          </div>
          <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->


<script type="text/javascript">

function popup(ms = null) {
  if(ms == null)
  {
    $().toasty({
        message: "Berhasil",
        autoHide: 3000
    });
  }else{
    $().toasty({
        message: ms,
        autoHide: 3000
    });
  }

}
</script>