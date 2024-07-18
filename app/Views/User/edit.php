<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>
  <!-- Feathericon CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/feather.css">
</head>

<body>

  <!-- Main Wrapper -->
  <div class="main-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content">
        <div class="row">
          <div class="col-md-12">

            <?= $this->include('partials/page-title') ?>
            <?php $validation = \Config\Services::validation(); ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <?php
                      $session = \Config\Services::session();

                      if($session->getFlashdata('success'))
                      {
                          echo '
                          <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
                          ';
                      }
                      ?>
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">
                      <!-- <form method="post" action="<?php echo base_url(); ?>user/update"> -->
                      <?php echo form_open_multipart(base_url().$currentController.'/'.$currentMethod.(($token>0) ? '/'.$token : ''), ['name'=>'actionForm', 'id'=>'actionForm']);?>
                        <div class="settings-sub-header">
                          <h6>Add User</h6>
                        </div>
                        
                        <input type="hidden" name="id" value="<?php
                                if(isset($userdata)){
                                  echo $userdata['id'];
                                } ?>">
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-wrap">
                                  <label class="col-form-label">
                                    User Role <span class="text-danger">*</span>
                                  </label>
                                  <input type="hidden" value="<?= $userdata['role_id']; ?>" name="role_id"/>
                                  <select class="select" name="role_id" disabled>
                                    <option>Select User Role</option>
                                    <?php
                                    if(isset($roles)){
                                      foreach($roles as $row)
                                      { ?>
                                      <option value="<?php echo $row["id"] ?>" <?php 
                                      if(isset($userdata)){
                                        if($userdata['role_id'] == $row['id']){
                                          echo 'selected';
                                        }
                                      }
                                      ?>>
                                        <?php echo ucwords($row["role_name"]); ?>
                                      </option>
                                      <?php
                                      }
                                    }
                                    ?>
                                  </select>
                                  <?php
                                    if($validation->getError('user_type'))
                                    {
                                        echo '<div class="alert alert-danger mt-2">'.$validation->getError('user_type').'</div>';
                                    }
                                  ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Login Expiry <span class="text-danger">*</span>
                                </label>
                                <?php
                                if($validation->getError('login_expiry'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('login_expiry').'</div>';
                                }
                                $l = strtotime($userdata['login_expiry']); ?>
                                <input type="date" required name="login_expiry" class="form-control" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d',$l); ?>">
                              </div>
                            </div>

                            
                            <div class="col-md-6">
                              <div class="form-wrap">
                                  <label class="col-form-label">
                                    First Name <span class="text-danger">*</span>
                                  </label>
                                  <?php
                                  if($validation->getError('first_name'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('first_name').'</div>';
                                  }
                                  ?>
                                  <input type="text" required name="first_name" class="form-control"  value="<?php if(isset($userdata)){ echo $userdata['first_name']; } ?>">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                  <label class="col-form-label">
                                    Last Name <span class="text-danger">*</span>
                                  </label>
                                  <?php
                                  if($validation->getError('last_name'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('last_name').'</div>';
                                  }
                                  ?>
                                  <input type="text" required name="last_name" class="form-control" value="<?php if(isset($userdata)){ echo $userdata['last_name']; } ?>">
                                </div>
                              </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                  <label class="col-form-label">
                                    Email <span class="text-danger">*</span>
                                  </label>
                                  <input type="text" required name="email" value="<?php if(isset($userdata)){ echo $userdata['email']; } ?>" class="form-control">
                                  <?php
                                  if($validation->getError('email'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('email').'</div>';
                                  }
                                  ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Password 
                                </label>
                                <?php
                                if($validation->getError('password'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('password').'</div>';
                                }
                                ?>
                                <input type="text" name="password" class="form-control">
                                <p>Enter password only if you wish to change</p>
                              </div>
                            </div> 

                            <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">
                                      Company <span class="text-danger">*</span>
                                    </label>
                                    <select class="select" name="company_id" id="company_id" onchange="$.getBranch();">
                                      <option>Select Company</option>
                                      <?php
                                      if(isset($company)){
                                        foreach($company as $row)
                                        {
                                          $sel = (isset($userdata) && $userdata['company_id'] == $row['id']) ? 'selected' : '';
                                          echo '<option value="'.$row["id"].'" "'.set_select('company_id', $row['id']).'" '.$sel.'>'.ucwords($row["name"]).'</option>';
                                        }
                                      }
                                      ?>
                                    </select>
                                    <?php
                                      if($validation->getError('company_id'))
                                      {
                                          echo '<div class="alert alert-danger mt-2">'.$validation->getError('company_id').'</div>';
                                      }
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                  <label class="col-form-label">
                                    Mobile <span class="text-danger">*</span>
                                  </label>
                                  
                                  <input type="text" required name="mobile" class="form-control" value="<?php if(isset($userdata)){ echo $userdata['mobile']; } ?>">
                                  <?php
                                  if($validation->getError('mobile'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('mobile').'</div>';
                                  }
                                  ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                    Home Branch/Office <span class="text-danger">*</span>
                                  </label>
                                  <select class="select" name="home_branch" id="home_branch" onchange="$.chkdBranch();">
                                    <option>Select Home Branch/Office</option>
                                    <?php
                                    if(isset($office)){
                                      foreach($office as $row)
                                      { ?>
                                          <option value="<?php echo $row["id"]; ?>" <?php
                                          if(isset($userdata)){
                                            if($userdata['home_branch'] == $row['id']){
                                              echo 'selected';
                                            }
                                          }
                                          ?>>
                                            <?php echo ucwords($row["name"]); ?>
                                          </option>
                                      <?php
                                      }
                                    }
                                    ?>
                                  </select>
                                  <?php
                                    if($validation->getError('home_branch'))
                                    {
                                        echo '<div class="alert alert-danger mt-2">'.$validation->getError('user_type').'</div>';
                                    }
                                  ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                  <label class="col-form-label">
                                      Branches <span class="text-danger"></span>
                                  </label><br>
                                  <span id="branches">
                                    <?php
                                      if(isset($office)){
                                        foreach($office as $row)
                                        { 
                                          $offices = [];
                                          foreach ($branches as $key => $value) {
                                          $offices[] = $value['office_id'];
                                        }
                                        
                                    ?>

                                    <input class="form-check-input" type="checkbox" name="branch[]" id="id_<?php echo $row["id"]; ?>" value="<?php echo $row["id"]; ?>" 
                                    <?php if(in_array($row['id'], $offices)){
                                          echo "checked";} ?>>
                                    <label for="id_<?php echo $row["id"]; ?>" class="col-form-label" style=" margin: 0px 20px 0px 3px;"><?php echo ucwords($row["name"]); ?></label>
                                    <?php
                                      }
                                    }
                                    ?>
                                  </span>
                              </div>
                            </div>    

                          </div>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="<?php echo base_url().$currentController;?>" class="btn btn-light">Cancel</a>
                          <!-- <button type="reset" class="btn btn-light">Reset</button>
                          <a href="<?php echo base_url();?>company" class="btn btn-light">Cancel</a> -->
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Settings Info -->

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- /Page Wrapper -->

  </div>
  <!-- /Main Wrapper -->

  <?= $this->include('partials/vendor-scripts') ?>

  <!-- Profile Upload JS -->
  <script src="<?php echo base_url(); ?>assets/js/profile-upload.js"></script>

  <!-- Sticky Sidebar JS -->
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

  <script type="text/javascript">
    $.getBranch = function() {
      $('#home_branch').html('<option>Select Home Branch/Office</option>');
      $('#branches').html('');

      var company_id = $('#company_id').val();
      if(company_id>0){
        $.ajax({
          method: "POST",
          url: '<?php echo base_url('user/getHomeBranch');?>',
          data: {
            company_id: company_id
          },
          success: function(resp) {
            $('#home_branch').html(resp);
          }
        });

        $.ajax({
          method: "POST",
          url: '<?php echo base_url('user/getBranches');?>',
          data: {
            company_id: company_id
          },
          success: function(resp) {
            $('#branches').html(resp);
          }
        });
      }
    }

    $.chkdBranch = function() {
      $('input:checkbox').removeAttr('checked');
      var home_branch = $('#home_branch').val();
      if(home_branch>0){
        $('#id_'+home_branch).attr('checked','checked');
      }
    }
  </script>
</body>
</html>