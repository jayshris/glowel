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
                      <form method="post" action="<?php echo base_url(); ?>user/create">
                        <div class="settings-sub-header">
                          <h6>Add User</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-wrap">
                                  <label class="col-form-label">
                                    User Type <span class="text-danger">*</span>
                                  </label>
                                  <select class="dropdown" name = "user_type">
                                    <option>Select</option>
                                    <?php
                                    if(isset($user_type)){
                                      foreach($user_type as $row)
                                      {
                                          echo '<option value="'.$row["id"].'" "'.set_select('usertype', $row['id']).'">'.ucwords($row["user_type_name"]).'</option>';
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
                                ?>
                                <input type="date" required name="login_expiry" class="form-control" min="<?php echo date('Y-m-d'); ?>"  value="<?= set_value('login_expiry') ?>">
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
                                  <input type="text" required name="first_name" class="form-control" value="<?= set_value('first_name') ?>">
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
                                  <input type="text" required name="last_name" class="form-control" value="<?= set_value('last_name') ?>">
                                </div>
                              </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                  <label class="col-form-label">
                                    Email <span class="text-danger">*</span>
                                  </label>
                                  <input type="text" required name="email" value="<?= set_value('email') ?>"  class="form-control">
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
                                    Mobile <span class="text-danger">*</span>
                                  </label>
                                  
                                  <input type="text" required name="mobile" class="form-control" value="<?= set_value('mobile') ?>">
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
                                        Branch/Office <span class="text-danger">*</span>
                                      </label>
                                      <select class="select" name="home_branch">
                                        <option>Select</option>
                                        <?php
                                        if(isset($office)){
                                          foreach($office as $row)
                                          {
                                              echo '<option value="'.$row["id"].'" "'.set_select('home_branch', $row['id']).'">'.ucwords($row["name"]).'</option>';
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
                                  Password <span class="text-danger">*</span>
                                  </label>
                                  <?php
                                  if($validation->getError('password'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('password').'</div>';
                                  }
                                  ?>
                                  <input type="text" required value="<?php echo uniqid(); ?>" name="password" class="form-control">
                                </div>
                              </div>

                              <div class="col-md-12">
                                <div class="form-wrap">

                                    <label class="col-form-label">
                                        Branches <span class="text-danger"></span>
                                    </label><br>
                                    <?php
                                      if(isset($office)){
                                        foreach($office as $row)
                                        {
                                          echo '<input class="form-check-input" type="checkbox" name="branch[]" id="id_'.$row["id"].'" value="'.$row["id"].'"><label for="id_'.$row["id"].'" class="col-form-label" style=" margin: 0px 20px 0px 3px;">'.ucwords($row["name"]).'</label>';
                                        }
                                      }
                                      ?>
                                </div>
                              </div>    

                          </div>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <button type="reset" class="btn btn-light">Reset</button>
                          <a href="<?php echo base_url();?>company" class="btn btn-light">Cancel</a>
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
</body>

</html>