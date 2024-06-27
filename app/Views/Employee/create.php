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

                                <select class="select" id="company" name = "company_name" required>

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



                                <select class="select" name="office_location" id="office_location" required>

                                    <option value="">Select</option>

                                </select>

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

                                <input type="text" name="name" class="form-control" value="<?= set_value('name') ?>" required>

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

                                <input type="number"  maxlength="12" pattern="\d{12}" title="Aadhaar number must be a 12-digit number" name="aadhaar" class="form-control"  value="<?= set_value('aadhaar') ?>" oninput="validateAdhaar(event)" required>

                                <?php

                                  if($validation->getError('aadhaar'))

                                  {

                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('aadhaar').'</div>';

                                  }

                                 ?>

                              </div>

                            </div>

                            <div class="col-md-6">

                              <div class="form-wrap">

                                <label class="col-form-label">

                                  Mobile No<span class="text-danger">*</span>

                                </label>



                                <input type="number" name="mobile" class="form-control" value="<?= set_value('mobile') ?>" title="Mobile number must be a 10-digit number" maxlength="10" oninput="validateMobile(event)" required>

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



                                <input type="text" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" <?= set_value('email') ?>>

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



                                <input type="number" min="0" name="bank_account_number" class="form-control" oninput="validateAccountno(event)" value="<?= set_value('bank_account_number') ?>">

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



                            

                                <div class="col-md-6">

                                  <div class="form-wrap">

                                <label class="col-form-label">

                                Image 1

                                </label>

                                <input type="file" accept="image/*"  name="image1" class="form-control" title="Image size should be less than 100 KB">

                                <p style="color:blue"><em>Image less than 100 KB</em></p>

                                <?php

                                if($validation->getError('image1'))

                                {

                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('image1').'</div>';

                                }

                                ?>

                                

                              </div>

                              </div>

                              <div class="col-md-6">

                                  <div class="form-wrap">

                                <label class="col-form-label">

                                Image 2

                                </label>

                                <input type="file" accept="image/*"  name="image2" class="form-control" title="Image size should be less than 100 KB">

                                <p style="color:blue"><em>Image less than 100 KB</em></p>

                                <?php

                                if($validation->getError('image2'))

                                {

                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('image2').'</div>';

                                }

                                ?>

                                

                              </div>

                              </div>

                            <div class="col-md-6">

                                  <div class="form-wrap">

                                <label class="col-form-label">

                                Aadhaar Image - Front<span class="text-danger">*</span>

                                </label>

                                <input type="file"  name="aadhaarfront" class="form-control" title="Image size should be less than 100 KB" required>

                                <p style="color:blue"><em>Image less than 100 KB</em></p>

                                <?php

                                if($validation->getError('aadhaarfront'))

                                {

                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('aadhaarfront').'</div>';

                                }

                                ?>

                                

                              </div>

                              </div>

                              <div class="col-md-6">

                                  <div class="form-wrap">

                                <label class="col-form-label">

                                Aadhaar Image - Back<span class="text-danger"></span>

                                </label>

                                <input type="file"  name="aadhaarback" class="form-control" title="Image size should be less than 100 KB">

                                <p style="color:blue"><em>Image less than 100 KB</em></p>

                                <?php

                                if($validation->getError('aadhaarback'))

                                {

                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('aadhaarback').'</div>';

                                }

                                ?>



                              </div>

                              </div>

                            <div class="col-md-6">

                              <div class="form-wrap">

                                <label class="col-form-label">

                                  Joining Date<span class="text-danger">*</span>

                                </label>

                                <input type="date"  name="joiningdate" class="form-control" <?= set_value('joiningdate') ?> required >

                                <?php

                                  if($validation->getError('joiningdate'))

                                  {

                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('joiningdate').'</div>';

                                  }

                                 ?>

                              </div>

                            </div>

                            <div class="col-md-6">

                              <div class="form-wrap">

                                <label class="col-form-label">

                                  UPI ID<span class="text-danger"></span>

                                </label>

                                <input type="file" <?= set_value('upi_id') ?>  name="upi_id" class="form-control" title="Image size should be less than 100 KB">

                                <p style="color:blue"><em>Image less than 100 KB</em></p>

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

<script src="<?php echo base_url(); ?>public/assets/js/common.js"></script>

  <script>

        $(document).ready(function() {

            $('#company').change(function() {

                var companyId = $(this).val();

                $.ajax({

                    url: '<?= base_url('employee/getOfficeLocations') ?>',

                    method: 'POST',

                    data: { company_id: companyId },

                    dataType: 'json',

                    success: function(response) {

                        $('#office_location').empty();

                        $('#office_location').append('<option value="">Select</option>');

                        $.each(response, function(key, value) {

                            $('#office_location').append('<option value="' + value.id + '">' + value.name + '</option>');

                        });

                    }

                });

            });

        });



        

    </script>

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