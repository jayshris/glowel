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

                      <form action="<?php echo base_url(); ?>vehiclet/create" method="post">

                        <div class="settings-sub-header">

                          <h6>Add Vehicle Model</h6>

                        </div>

                        <div class="profile-details">

                          <div class="row">

                            <div class="col-md-6">

                              <div class="form-wrap">

                                <label class="col-form-label">

                                  Vehicle Type <span class="text-danger">*</span>

                                </label>

                                <select class="select" name = "name" required>

                                <option value="">Select</option>

                                  <?php

                                  if(isset($vehicletype_data)){

                                    foreach($vehicletype_data as $row)

                                    {

                                        echo '<option value="'.$row["id"].'" "'.set_select('name', $row['id']).'">'.ucwords($row["name"]).'</option>';

                                    }

                                  }

                                  ?>

                                </select>

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

                                  Model No. <span class="text-danger">*</span>

                                </label>



                                <input type="text" name="model_no" class="form-control"  value="<?= set_value('model_no') ?>"  pattern="[A-Za-z0-9 ]+"  title="Only letters, numbers, and spaces are allowed."   required>

                                <?php

                                  if($validation->getError('model_no'))

                                  {

                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('model_no').'</div>';

                                  }

                                 ?>

                              </div>

                            </div>



                            <div class="col-md-6">

                              <div class="form-wrap">

                                <label class="col-form-label">

                                  Fuel Type <span class="text-danger">*</span>

                                </label>

                                <?php

                                  if(isset($fueltype_data)){

                                    foreach($fueltype_data as $row1)

                                    {

                                  ?>    

                                <input type="radio"  name="fuel_type_id" value="<?= $row1['id'] ?>" required>  

                                <label for="<?= $row1['id'] ?>" style="padding-right: 15px;"><?= ucwords($row1['fuel_name']) ?></label>

                              <?php }

                                 }?>

                                <?php

                                  if($validation->getError('fuel_type_id'))

                                  {

                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('fuel_type_id').'</div>';

                                  }

                                 ?>

                              </div>

                            </div>



                          </div>

                        </div>

                        <div class="submit-button">

                          <input type="submit" name="add_profile" class="btn btn-primary" value="Save Changes">

                          <input type="reset" class="btn btn-light" value="Reset">

                          <a href="<?php echo base_url();?>vehiclet" class="btn btn-light">Cancel</a>

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

  <!-- Profile Upload JS -->

  <script src="<?php echo base_url(); ?>assets/js/profile-upload.js"></script>



  <!-- Sticky Sidebar JS -->

  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>

  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>



</html>