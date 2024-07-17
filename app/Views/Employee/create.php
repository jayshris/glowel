<!doctypehtml>
  <html lang="en">

  <head>
    <?= $this->include('partials/title-meta') ?>
    <?= $this->include('partials/head-css') ?>
  </head>

  <body>
    <div class="main-wrapper">

      <?= $this->include('partials/menu') ?>

      <div class="page-wrapper">
        <div class="content">
          <div class="row">
            <div class="col-md-12">

              <?= $this->include('partials/page-title') ?>
              <?php $validation = \Config\Services::validation(); ?>

              <div class="row">
                <div class="col-lg-12 col-xl-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="settings-form">
                        <form action="<?php echo base_url(); ?>employee/create" enctype="multipart/form-data" method="post">

                          <div class="settings-sub-header">
                            <h6>Add Employee</h6>
                          </div>

                          <div class="profile-details">
                            <div class="row">

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">Company Name <span class="text-danger">*</span></label>
                                  <select class="select" id="company" name="company_name" required>
                                    <option value="">Select Company</option><?php if (isset($company)) {
                                                                              foreach ($company as $row) {
                                                                                echo '<option value="' . $row["id"] . '" "' . set_select('company_name', $row['id']) . '">' . $row["name"] . '</option>';
                                                                              }
                                                                            } ?>
                                  </select>
                                  <?php if ($validation->getError('company_name')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('company_name') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap"><label class="col-form-label">Office Location <span class="text-danger">*</span></label>
                                  <select class="select" id="office_location" name="office_location" required>
                                    <option value="">Select Location</option>
                                  </select><?php if ($validation->getError('office_location')) {
                                              echo '<div class="alert alert-danger mt-2">' . $validation->getError('office_location') . '</div>';
                                            } ?>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap"><label class="col-form-label">Employee Name <span class="text-danger">*</span></label>
                                  <input class="form-control" name="name" value="<?= set_value('name') ?>" required>
                                  <?php if ($validation->getError('name')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('name') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-wrap"><label class="col-form-label">Mobile No<span class="text-danger">*</span></label>
                                  <input class="form-control" name="mobile" type="number" title="Mobile number must be a 10-digit number" maxlength="10" oninput="validateMobile(event)" value="<?= set_value('mobile') ?>" required>
                                  <?php if ($validation->getError('mobile')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('mobile') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-wrap">
                                  <label class="col-form-label">Email ID<span class="text-danger"></span></label>
                                  <input class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" <?= set_value('email') ?>>
                                  <?php if ($validation->getError('email')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('email') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-wrap">
                                  <label class="col-form-label">Aadhaar Card No<span class="text-danger">*</span></label>
                                  <input class="form-control" name="aadhaar" type="number" title="Aadhaar number must be a 12-digit number" maxlength="12" oninput="validateAdhaar(event)" value="<?= set_value('aadhaar') ?>" required pattern="\d{12}">
                                  <?php if ($validation->getError('aadhaar')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('aadhaar') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-wrap">
                                  <label class="col-form-label">Aadhaar Image - Front<span class="text-danger">*</span></label>
                                  <input class="form-control" name="aadhaarfront" type="file" title="Image size should be less than 100 KB" required>
                                  <p style="color:#00f"><em>Image less than 100 KB</em></p>
                                  <?php if ($validation->getError('aadhaarfront')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('aadhaarfront') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-wrap">
                                  <label class="col-form-label">Aadhaar Image - Back<span class="text-danger"></span></label>
                                  <input class="form-control" name="aadhaarback" type="file" title="Image size should be less than 100 KB">
                                  <p style="color:#00f"><em>Image less than 100 KB</em></p>
                                  <?php if ($validation->getError('aadhaarback')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('aadhaarback') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">Company Mobile No</label>
                                  <input class="form-control" name="comp_mobile" type="number" title="Mobile number must be a 10-digit number" maxlength="10" oninput="validateMobile(event)" value="<?= set_value('comp_mobile') ?>">
                                  <?php if ($validation->getError('comp_mobile')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('comp_mobile') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">Company Email ID</label>
                                  <input class="form-control" name="comp_email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" <?= set_value('comp_email') ?>>
                                  <?php if ($validation->getError('comp_email')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('comp_email') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">Emergency Contact Person</label>
                                  <input class="form-control" name="emergency_person" type="text" value="<?= set_value('emergency_person') ?>">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">Emergency Contact Number</label>
                                  <input class="form-control" name="emergency_phone" type="number" <?= set_value('emergency_phone') ?>>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">Bank A/C No:<span class="text-danger"></span></label>
                                  <input class="form-control" name="bank_account_number" type="number" value="<?= set_value('bank_account_number') ?>" oninput="validateAccountno(event)" min="0">
                                  <?php if ($validation->getError('bank_account_number')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('bank_account_number') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">Bank IFSC<span class="text-danger"></span></label>
                                  <input class="form-control" name="bank_ifsc_code" value="<?= set_value('bank_ifsc_code') ?>">
                                  <?php if ($validation->getError('bank_ifsc_code')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('bank_ifsc_code') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">Profile Image 1</label>
                                  <input class="form-control" name="image1" type="file" title="Image size should be less than 100 KB" accept="image/*">
                                  <p style="color:#00f"><em>Image less than 100 KB</em></p>
                                  <?php if ($validation->getError('image1')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('image1') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">Profile Image 2</label>
                                  <input class="form-control" name="image2" type="file" title="Image size should be less than 100 KB" accept="image/*">
                                  <p style="color:#00f"><em>Image less than 100 KB</em></p>
                                  <?php if ($validation->getError('image2')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('image2') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">Joining Date<span class="text-danger">*</span></label>
                                  <input class="form-control" name="joiningdate" type="date" <?= set_value('joiningdate') ?>required>
                                  <?php if ($validation->getError('joiningdate')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('joiningdate') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">Digital Signature</label>
                                  <input class="form-control" name="digital_sign" type="file" title="Image size should be less than 100 KB" accept="image/*" <?= set_value('digital_sign') ?>>
                                  <p style="color:#00f"><em>Image less than 100 KB</em></p>
                                  <?php if ($validation->getError('digital_sign')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('digital_sign') . '</div>';
                                  } ?>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">UPI ID</label>
                                  <input class="form-control" name="upi" <?= set_value('upi') ?>>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">UPI ID Image<span class="text-danger"></span></label>
                                  <input class="form-control" name="upi_id" type="file" title="Image size should be less than 100 KB" <?= set_value('upi_id') ?>>
                                  <p style="color:#00f"><em>Image less than 100 KB</em></p>
                                  <?php if ($validation->getError('upi_id')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('upi_id') . '</div>';
                                  } ?>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="submit-button">
                            <input class="btn btn-primary" name="add_profile" type="submit" value="Save Changes">
                            <a href="./create" class="btn btn-warning">Reset</a>
                            <a class="btn btn-light" href="<?php echo base_url(); ?>employee">Cancel</a>
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
    </div>

    <?= $this->include('partials/vendor-scripts') ?>
    <script src="<?php echo base_url(); ?>public/assets/js/common.js"></script>

    <script>
      $(document).ready(function() {
        $("#company").change(function() {
          var o = $(this).val();
          $.ajax({
            url: "<?= base_url('employee/getOfficeLocations') ?>",
            method: "POST",
            data: {
              company_id: o
            },
            dataType: "json",
            success: function(o) {
              $("#office_location").empty(), $("#office_location").append('<option value="">Select Location</option>'), $.each(o, function(o, n) {
                $("#office_location").append('<option value="' + n.id + '">' + n.name + "</option>")
              })
            }
          })
        })
      })
    </script>
  </body>

  </html>