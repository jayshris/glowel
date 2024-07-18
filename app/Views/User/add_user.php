<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>


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

                if ($session->getFlashdata('success')) {
                  echo '
                          <div class="alert alert-success">' . $session->getFlashdata("success") . '</div>
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
                                  User Role <span class="text-danger">*</span>
                                </label>
                                <select class="select" name="role_id">
                                  <option>Select User Role</option>
                                  <?php
                                  if (isset($roles)) {
                                    foreach ($roles as $row) {
                                      echo '<option value="' . $row["id"] . '" "' . set_select('role_id', $row['id']) . '">' . ucwords($row["role_name"]) . '</option>';
                                    }
                                  }
                                  ?>
                                </select>
                                <?php
                                if ($validation->getError('role_id')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('role_id') . '</div>';
                                }
                                ?>
                              </div>
                            </div>

                            <!-- Add employee list -->
                            <div class="col-md-6" id="employees-div">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Employees <span class="text-danger">*</span>
                                </label><br>
                                <select class="select" name="employees" id="employees">
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Login Expiry <span class="text-danger">*</span>
                                </label>
                                <?php
                                if ($validation->getError('login_expiry')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('login_expiry') . '</div>';
                                }
                                ?>
                                <input type="date" required name="login_expiry" class="form-control" min="<?php echo date('Y-m-d'); ?>" value="<?= set_value('login_expiry') ?>">
                              </div>
                            </div>


                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  First Name <span class="text-danger">*</span>
                                </label>
                                <?php
                                if ($validation->getError('first_name')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('first_name') . '</div>';
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
                                if ($validation->getError('last_name')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('last_name') . '</div>';
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
                                <input type="text" required name="email" value="<?= set_value('email') ?>" class="form-control">
                                <?php
                                if ($validation->getError('email')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('email') . '</div>';
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
                                if ($validation->getError('password')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('password') . '</div>';
                                }
                                ?>
                                <input type="text" required value="<?php echo uniqid(); ?>" name="password" class="form-control">
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
                                  if (isset($company)) {
                                    foreach ($company as $row) {
                                      echo '<option value="' . $row["id"] . '" "' . set_select('company_id', $row['id']) . '">' . ucwords($row["name"]) . '</option>';
                                    }
                                  }
                                  ?>
                                </select>
                                <?php
                                if ($validation->getError('company_id')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('company_id') . '</div>';
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
                                if ($validation->getError('mobile')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('mobile') . '</div>';
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
                                </select>
                                <?php
                                if ($validation->getError('home_branch')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('user_type') . '</div>';
                                }
                                ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Branches <span class="text-danger"></span>
                                </label><br>
                                <span id="branches"></span>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="<?php echo base_url().$currentController;?>" class="btn btn-light">Cancel</a>
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

  <script type="text/javascript">
    $.getBranch = function() {
      $('#home_branch').html('<option>Select Home Branch/Office</option>');
      $('#branches').html('');

      var company_id = $('#company_id').val();
      if (company_id > 0) {
        $.ajax({
          method: "POST",
          url: '<?php echo base_url('user/getHomeBranch'); ?>',
          data: {
            company_id: company_id
          },
          success: function(resp) {
            $('#home_branch').html(resp);
          }
        });

        $.ajax({
          method: "POST",
          url: '<?php echo base_url('user/getBranches'); ?>',
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
      if (home_branch > 0) {
        $('#id_' + home_branch).attr('checked', 'checked');
      }
    }

    $('#employees-div').css('display', 'none');
    $('select[name="role_id"]').on('change', function() {
      $('#employees').html('');
      $('#employees').removeAttr('required');
      $('#employees-div').css('display', 'none');  
      if (this.value == 3) {
        $.ajax({
          method: "POST",
          url: '<?php echo base_url('user/getEmployeess'); ?>',
          data: {
            user_type: this.value
          },
          success: function(resp) {
            console.log(resp);
            var html = '<option value="">Select</option>';
            if (resp) {
              var obj = jQuery.parseJSON(resp);
              $.each(obj, function(key, val) {
                html += '<option value="' + val.id + '">' + val.name + '</option>';
              });
            }
            $('#employees').attr('required', true);
            $('#employees').html(html);
            $('#employees-div').css('display', 'block');
          }
        });
      }
    });
  </script>
</body>

</html>