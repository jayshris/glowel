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
                      <form action="<?php echo base_url(); ?>vehicletype/edit" method="post" >
                        <div class="settings-sub-header">
                          <h6>Edit Vehicle Type</h6>
                        </div>
                        <div class="profile-details">
                          <input type="hidden" name="id" value="<?php
                                if(isset($vehicletype_data)){
                                  echo $vehicletype_data['id'];
                                }
                                ?>">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Vehicle Type Name <span class="text-danger">*</span>
                                </label>

                                <input type="text" name="name" class="form-control"  value="<?php
                                if(isset($vehicletype_data)){
                                  echo $vehicletype_data['name'];
                                }
                                ?>">
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
                                  No. of Tyres <span class="text-danger">*</span>
                                </label>

                                <input type="number" name="number_of_tyres" class="form-control"  value="<?php
                                if(isset($vehicletype_data)){
                                  echo $vehicletype_data['number_of_tyres'];
                                }
                                ?>">
                                <?php
                                  if($validation->getError('number_of_tyres'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('number_of_tyres').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Unladen Weight <span class="text-danger">*</span>
                                </label>

                                <input type="number" name="unladen_weight" class="form-control"  value="<?php
                                if(isset($vehicletype_data)){
                                  echo $vehicletype_data['unladen_weight'];
                                }
                                ?>">
                                <?php
                                  if($validation->getError('unladen_weight'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('unladen_weight').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="submit-button">
                          <input type="submit" name="add_fuel_type" class="btn btn-primary" value="Save Changes">
                          <input type="reset" class="btn btn-light" value="Reset">
                          <a href="<?php echo base_url();?>vehicletype" class="btn btn-light">Cancel</a>
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