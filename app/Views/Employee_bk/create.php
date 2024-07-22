<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>
  <!-- Feathericon CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/feather.css">
  <style>
        .image-container12 {
            display: inline-block;
            margin: 10px;
        }
        .img12 {
            cursor: pointer;
            width: 100px;
            height: 100px;
            border: 2px solid #ddd;
        }
    </style>
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
            <?php $validation = \Config\Services::validation(); 
            ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">
                      <form action="<?php echo base_url(); ?>employee/create" method="post"  enctype="multipart/form-data">
                        <div class="settings-sub-header">
                          <h6>Add Employee</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Company Name <span class="text-danger">*</span>
                                </label>
                                <select class="select" name = "company_name" >
                                  <option value="">Select</option>
                                  <?php
                                  if(isset($company)){
                                    foreach($company as $row)
                                    {
                                        echo '<option value="'.$row["id"].'" "'.set_select('company_name', $row['id']).'">'.$row["name"].'</option>';
                                    }
                                  }
                                  ?>
                                </select>
                                <?php
                                  if($validation->getError('company_name'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('company_name').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Office Location <span class="text-danger">*</span>
                                </label>

                                <input type="text" name="office_location" class="form-control"  value="<?= set_value('office_location') ?>">
                                <?php
                                  if($validation->getError('office_location'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('office_location').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Employee Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" name="name" class="form-control" value="<?= set_value('name') ?>">
                                <?php
                                  if($validation->getError('name'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('name').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Aadhaar Card No<span class="text-danger">*</span>
                                </label>
                                <input type="text" name="aadhaar_number" class="form-control"  value="<?= set_value('aadhaar_number') ?>">
                                <?php
                                  if($validation->getError('aadhaar_number'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('aadhaar_number').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Mobile No<span class="text-danger">*</span>
                                </label>

                                <input type="text" name="mobile" class="form-control" value="<?= set_value('mobile') ?>">
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
                                  Email ID<span class="text-danger"></span>
                                </label>

                                <input type="text" name="email" class="form-control" value="<?= set_value('email') ?>">
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
                                  Bank A/C No:<span class="text-danger"></span>
                                </label>

                                <input type="text" name="bank_account_number" class="form-control" value="<?= set_value('bank_account_number') ?>">
                                <?php
                                  if($validation->getError('bank_account_number'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('bank_account_number').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Bank IFSC<span class="text-danger"></span>
                                </label>

                                <input type="text" name="bank_ifsc_code" class="form-control" value="<?= set_value('bank_ifsc_code') ?>">
                                <?php
                                  if($validation->getError('bank_ifsc_code'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('bank_ifsc_code').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Select Image <span class="text-danger"></span>
                                </label>
                                  <div class="image-container12">
                                    <img id="image1" src="<?php echo base_url(); ?>assets/img/profiles/avatar-02.jpg" alt="Image 1" onclick="triggerFileInput('fileInput1')" class="img12">
                                    <input type="file" id="fileInput1" name="image1" accept="image/*" style="display: none;" onchange="updateImage('image1', this)">
                                    
                                </div>
                                <div class="image-container12">
                                    <img id="image2" src="<?php echo base_url(); ?>assets/img/profiles/avatar-02.jpg" alt="Image 2" onclick="triggerFileInput('fileInput2')" class="img12">
                                    <input type="file" id="fileInput2" accept="image/*" style="display: none;" name="image2" onchange="updateImage('image2', this)">
                                    
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  UPI ID:<span class="text-danger"></span>
                                </label>

                                <input type="text" name="upi_id" class="form-control" value="<?= set_value('upi_id') ?>">
                                <?php
                                  if($validation->getError('upi_id'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('upi_id').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="submit-button">
                          <input type="submit" name="add_profile" class="btn btn-primary" value="Save Changes">
                          <button type="reset" class="btn btn-light">Reset</button>
                          <a href="<?php echo base_url();?>employee" class="btn btn-light">Cancel</a>
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
  <script>
        function triggerFileInput(fileInputId) {
            document.getElementById(fileInputId).click();
        }

        function updateImage(imageId, input) {
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById(imageId).src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        }
    </script>

  <!-- Sticky Sidebar JS -->
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
</body>

</html>