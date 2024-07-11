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
            <div class="row">
              <div class="col-xl-12 col-lg-12">


                <div class="settings-sub-header">
                  <h6>Update Party</h6>
                </div>

                <?php $validation = \Config\Services::validation();

                ?>
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">

                      <form method="post" action="<?php echo base_url('party/edit') ?>" enctype="multipart/form-data">
                        <div class="profile-details">
                          <div class="row">
                            <input type="hidden" id="party_id" name="id" value="<?= isset($pc_data) ? $pc_data['id'] : '0'; ?>">


                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Party Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="party_name" class="form-control" value="<?= isset($pc_data) ? $pc_data['party_name'] : ''; ?>">
                                <?php
                                if ($validation->getError('party_name')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('party_name') . '</div>';
                                }
                                ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Contact Person
                                </label>
                                <input type="text" name="contact_person" class="form-control" value="<?= isset($pc_data) ? $pc_data['contact_person'] : ''; ?>">
                                <?php
                                if ($validation->getError('contact_person')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('contact_person') . '</div>';
                                }
                                ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Business Name / Alias
                                </label>
                                <input type="text" name="alias" class="form-control" value="<?= isset($pc_data) ? $pc_data['alias'] : ''; ?>">
                              </div>
                            </div>


                            <div class="col-md-12">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Business Address
                                </label>
                                <input type="text" name="business_address" class="form-control" value="<?= isset($pc_data) ? $pc_data['business_address'] : ''; ?>">
                                <?php
                                if ($validation->getError('business_address')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('business_address') . '</div>';
                                }
                                ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  City <span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="city" class="form-control" value="<?= isset($pc_data) ? $pc_data['city'] : ''; ?>">
                                <?php
                                if ($validation->getError('city')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('city') . '</div>';
                                }
                                ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  State <span class="text-danger">*</span>
                                </label>
                                <select class="dropdown selectopt" name="state">
                                  <option>Select</option>
                                  <?php
                                  if (isset($state)) {
                                    foreach ($state as $row) { ?>
                                      <option value="<?php echo $row["state_id"]; ?>" <?php
                                                                                      if (isset($pc_data['state_id'])) {
                                                                                        if ($pc_data['state_id'] == $row['state_id']) {
                                                                                          echo 'selected';
                                                                                        }
                                                                                      }
                                                                                      ?>><?php echo ucwords($row["state_name"]); ?></option>
                                  <?php
                                    }
                                  }
                                  ?>
                                </select>
                                <?php
                                if ($validation->getError('state')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('state') . '</div>';
                                }
                                ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Postcode <span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="postcode" class="form-control" value="<?= isset($pc_data) ? $pc_data['postcode'] : ''; ?>">
                                <?php
                                if ($validation->getError('postcode')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('postcode') . '</div>';
                                }
                                ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Primary Phone number <span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="primary_phone" class="form-control" value="<?= isset($pc_data) ? $pc_data['primary_phone'] : ''; ?>">
                                <?php
                                if ($validation->getError('primary_phone')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('primary_phone') . '</div>';
                                }
                                ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Other Phone number
                                </label>
                                <input type="text" name="other_phone" class="form-control" value="<?= isset($pc_data) ? $pc_data['other_phone'] : ''; ?>">
                                <?php
                                if ($validation->getError('other_phone')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('other_phone') . '</div>';
                                }
                                ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Email
                                </label>
                                <input type="text" name="email" class="form-control" value="<?= isset($pc_data) ? $pc_data['email'] : ''; ?>">
                                <?php
                                if ($validation->getError('email')) {
                                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('email') . '</div>';
                                }
                                ?>
                              </div>
                            </div>


                          </div>
                          <div class="submit-button">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <a href="./<?php echo $pc_data['id'] ?>" class="btn btn-warning">Reset</a>
                            <a href="<?php echo base_url(); ?>party" class="btn btn-light">Back To List</a>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
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

  <script>
    $(document).ready(function() {

      // $.toggle();

      $("#business_type_id").on(' change', function() {
        $("#target").empty();
        var level = $(this).val();
        if (level) {
          $.ajax({
            type: 'POST',
            url: '../get_flags_fields',
            data: {
              business_type: '' + level + ''
            },
            success: function(htmlresponse) {
              $('#target').append(htmlresponse);
            }
          });
        }
      })
    });
  </script>

</body>

</html>