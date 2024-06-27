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
                      <form action="<?php echo base_url(); ?>vehicle/create" method="post" enctype="multipart/form-data">
                        <div class="settings-sub-header">
                          <h6>Add Vehicle</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label" style="padding-right: 10px;">
                                  Vehicle Owner <span class="text-danger">*</span>
                                </label>   
                                <input type="radio"  name="owner" value="company" required>  
                                <label for="owner" style="padding-right:15px">Company</label>
                                <input type="radio"  name="owner" value="onhire" required>  
                                <label for="owner">On Hire</label>
                                <?php
                                  if($validation->getError('owner'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('owner').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Vehicle Type <span class="text-danger">*</span>
                                </label>
                                <select class="select" id="vehicletype" name = "vehicletype" required>
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
                                  if($validation->getError('vehicletype'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('vehicletype').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Vehicle Model <span class="text-danger">*</span>
                                </label>
                                <select class="select" id="model_no" name = "model_no" required>
                                <option value="">Select</option>
                                </select>
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
                                  RC No <span class="text-danger">*</span>
                                </label>

                                <input type="text" name="rc" class="form-control"  value="<?= set_value('rc') ?>" required>
                                <?php
                                  if($validation->getError('rc'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('rc').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Chassis No <span class="text-danger">*</span>
                                </label>

                                <input type="text" name="chassis" class="form-control"  value="<?= set_value('chassis') ?>" required>
                                <?php
                                  if($validation->getError('chassis'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('chassis').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Engine No <span class="text-danger">*</span>
                                </label>

                                <input type="text" name="engine" class="form-control"  value="<?= set_value('engine') ?>" required>
                                <?php
                                  if($validation->getError('engine'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('engine').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  KM reading at Start <span class="text-danger">*</span>
                                </label>

                                <input type="number" name="km" class="form-control"  value="<?= set_value('km') ?>" min="0" oninput="validateInteger(event)" required>
                                <?php
                                  if($validation->getError('km'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('km').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                                  <div class="form-wrap">
                                <label class="col-form-label">
                                Image 1
                                </label>
                                <input type="file" accept="image/*"  name="image1" class="form-control" title="Image less than 100 KB">
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
                                <input type="file" accept="image/*"  name="image2" class="form-control" title="Image less than 100 KB">
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
                                Image 3
                                </label>
                                <input type="file" accept="image/*"  name="image3" class="form-control" title="Image less than 100 KB">
                                <p style="color:blue"><em>Image less than 100 KB</em></p>
                                <?php
                                if($validation->getError('image3'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('image3').'</div>';
                                }
                                ?>
                                
                              </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-wrap">
                                <label class="col-form-label">
                                Image 4
                                </label>
                                <input type="file" accept="image/*"  name="image4" class="form-control" title="Image less than 100 KB">
                                <p style="color:blue"><em>Image less than 100 KB</em></p>
                                <?php
                                if($validation->getError('image4'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('image4').'</div>';
                                }
                                ?>
                                
                              </div>
                              </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Vehicle Tyres <span class="text-danger">*</span>
                                </label>
                                
                              </div>
                            </div>
                            <div id="vehicletyre"></div>
                            <?php
                              if($validation->getError('vehicletyre'))
                              {
                                  echo '<div class="alert alert-danger mt-2">'.$validation->getError('vehicletyre').'</div>';
                              }
                             ?>
                             

                          </div>
                        </div>
                        <div class="submit-button">
                          <input type="submit" name="add_vehicle" class="btn btn-primary" value="Save Changes">
                          <input type="reset" class="btn btn-light" value="Reset">
                          <a href="<?php echo base_url();?>vehicle" class="btn btn-light">Cancel</a>
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

  <script>
        $(document).ready(function() {
            $('#vehicletype').change(function() {
                var vehicletypeId = $(this).val();
                $.ajax({
                    url: '<?= base_url('vehicle/getVehicletypedetails') ?>',
                    method: 'POST',
                    data: { vehicletype_id: vehicletypeId },
                    dataType: 'json',
                    success: function(response) {
                        $('#model_no').empty();
                        $('#model_no').append('<option value="">Select</option>');
                        $.each(response.vehiclemodels, function(key, value) {
                            $('#model_no').append('<option value="' + value.id + '">' + value.model_no + '</option>');
                        });

                        let textboxContainer = $('#vehicletyre');
                        textboxContainer.empty();
                        response.vehicletyres1.forEach(item => {
                          textboxContainer.append(`
                              <div class="col-md-12">
                                  <label for="fuel_types${item[0].id}">${item[0].name}</label>
                                  <input type="text" class="form-control" id="fuel_types${item[0].id}" name="fuel_types[]"  required>
                              </div>
                          `);
                      });
                    }
                });
            });
        });
  
    </script>
  <!-- Profile Upload JS -->
  <script src="<?php echo base_url(); ?>assets/js/profile-upload.js"></script>
  <script src="<?php echo base_url(); ?>public/assets/js/common.js"></script>
  <!-- Sticky Sidebar JS -->
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
</body>

</html>