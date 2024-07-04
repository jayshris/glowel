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
                      <form action="<?php echo base_url(); ?>fuelpumpbrand/edit" method="post" >
                        <div class="settings-sub-header">
                          <h6>Edit Fuel Pump Brand</h6>
                        </div>
                        <div class="profile-details">
                          <input type="hidden" name="id" value="<?php
                                if(isset($fuelpumpbrand_data)){
                                  echo $fuelpumpbrand_data['id'];
                                }
                                ?>">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Brand Name <span class="text-danger">*</span>
                                </label>

                                <input type="text" name="brand_name" class="form-control"  value="<?php
                                if(isset($fuelpumpbrand_data)){
                                  echo $fuelpumpbrand_data['brand_name'];
                                }
                                ?>">
                                <?php
                                  if($validation->getError('brand_name'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('brand_name').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Abbreviation <span class="text-danger">*</span>
                                </label>

                                <input type="text" name="abbreviation" class="form-control"  value="<?php
                                if(isset($fuelpumpbrand_data)){
                                  echo $fuelpumpbrand_data['abbreviation'];
                                }
                                ?>">
                                <?php
                                  if($validation->getError('abbreviation'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('abbreviation').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Select Fuel Type <span class="text-danger">*</span>
                                </label>
                                <select class="select" name = "fuel_name[]" multiple>
                                  
                                  <?php
                                  if(isset($fueltype_data)){
                                    if(isset($fuelpumpbrand_data)){
                                      $abc='';
                                      $abc =explode(',',$fuelpumpbrand_data['fuel_type_ids']);
                                    }
                                    foreach($fueltype_data as $row)
                                    { ?>
                                         <option value="<?= $row['id'] ?>" <?= in_array($row['id'], $abc) ? 'selected' : '' ?>><?= $row['fuel_name'] ?></option>
                                    <?php 
                                    }
                                  }
                                  ?>
                                </select>
                                <?php
                                  if($validation->getError('fuel_name'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('fuel_name').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="submit-button">
                          <input type="submit" name="add_fuel_type" class="btn btn-primary" value="Save Changes">
                          <input type="reset" class="btn btn-light" value="Reset">
                          <a href="<?php echo base_url();?>fuelpumpbrand" class="btn btn-light">Cancel</a>
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


  <!-- Sticky Sidebar JS -->
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
</body>

</html>