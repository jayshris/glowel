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
                        <div class="settings-sub-header">
                          <h6>Vehicle Information</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label" style="padding-right: 10px;">
                                  Vehicle Owner <span class="text-danger">*</span>
                                </label>   
                                <input type="radio"  value="company" <?= $vehicle_data['owner'] === 'company' ? 'checked' : '' ?> required disabled>  
                                <label for="owner" style="padding-right:15px">Company</label>
                                <input type="radio"   value="onhire" <?= $vehicle_data['owner'] === 'onhire' ? 'checked' : '' ?> required disabled>  
                                <label for="owner">On Hire</label>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Vehicle Type <span class="text-danger">*</span>
                                </label>
                                <select class="select" id="vehicletype"  required disabled>
                                <option value="">Select</option>
                                  <?php
                                  if(isset($vehicletype_data)){
                                    foreach($vehicletype_data as $row)
                                    { ?>
                                        <option value="<?= $row['id'] ?>" <?= $row['id'] == $vehicle_data['vehicle_type_id'] ? 'selected' : '' ?>><?= $row['name'] ?></option>
                                  <?php  }
                                  }
                                  ?>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Vehicle Model <span class="text-danger">*</span>
                                </label>
                                <select class="select" id="model_no"  required disabled>
                                <option value="">Select</option>
                                <?php foreach ($vehiclemodel_data as $row): if($row['id']===$vehicle_data['model_number_id']){?>
                                        <option value="<?= $row['id'] ?>" <?= $row['id'] == $vehicle_data['model_number_id'] ? 'selected' : '' ?>>
                                            <?= $row['model_no'] ?>
                                        </option>
                                    <?php } ?>
                                    <?php endforeach; ?>
                                </select>
                                
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  RC No <span class="text-danger">*</span>
                                </label>

                                <input type="text"  class="form-control"  value="<?php
                                if(isset($vehicle_data)){
                                  echo $vehicle_data['rc_number'];
                                }
                                ?>" required disabled>
                               
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Chassis No <span class="text-danger">*</span>
                                </label>

                                <input type="text"  class="form-control"  value="<?php
                                if(isset($vehicle_data)){
                                  echo $vehicle_data['chassis_number'];
                                }
                                ?>" required disabled>
                                
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Engine No <span class="text-danger">*</span>
                                </label>

                                <input type="text"  class="form-control"  value="<?php
                                if(isset($vehicle_data)){
                                  echo $vehicle_data['engine_number'];
                                }
                                ?>" required disabled>
                                <?php
                                  if($validation->getError('engine'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('engine').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  KM reading at Start <span class="text-danger">*</span>
                                </label>

                                <input type="number"  class="form-control"  value="<?php
                                if(isset($vehicle_data)){
                                  echo $vehicle_data['km_reading_start'];
                                }
                                ?>" min="0" oninput="validateInteger(event)" required disabled>
                                
                              </div>
                            </div>

                            <div class="col-md-6">
                                  <div class="form-wrap">
                                <?php if(!empty($vehicle_data['image1'])){?>
                                <label class="col-form-label">
                                Image 1
                                </label>
                                <?php
                              } ?>
                                <?php if(!empty($vehicle_data['image1'])){?>
                                <div class="image-container12">
                                <img src="<?php  echo $vehicle_data['image1']; ?>" alt="Image 1"  class="img12" >
                              </div>

                                <?php
                              } ?>
                                
                                
                              </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-wrap">
                                <?php if(!empty($vehicle_data['image2'])){?>
                                <label class="col-form-label">
                                Image 2
                                </label>
                                <?php  } ?>
                                <?php if(!empty($vehicle_data['image2'])){?>
                                <div class="image-container12">
                                <img src="<?php  echo $vehicle_data['image2']; ?>" alt="Image 2"  class="img12" >
                              </div>

                                <?php
                              } ?>
                                
                              </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-wrap">
                                <?php if(!empty($vehicle_data['image3'])){?>
                                <label class="col-form-label">
                                Image 3
                                </label>
                                <?php  } ?>
                                <?php if(!empty($vehicle_data['image3'])){?>
                                <div class="image-container12">
                                <img src="<?php  echo $vehicle_data['image3']; ?>" alt="Image 3"  class="img12" >
                              </div>

                              <?php
                              } ?>
                               
                                
                              </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-wrap">
                                <?php if(!empty($vehicle_data['image4'])){?>
                                <label class="col-form-label">
                                Image 4
                                </label>
                                <?php
                              } ?>
                                <?php if(!empty($vehicle_data['image4'])){?>
                                <div class="image-container12">
                                <img src="<?php  echo $vehicle_data['image4']; ?>" alt="Image 4"  class="img12" >
                              </div>

                              <?php
                              } ?>
                                
                                
                              </div>
                              </div>

                              <div class="col-md-12">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Status
                                </label>
                                <?php
                                if(isset($vehicle_data)){
                                if($vehicle_data['approved'] == 1){
                                    $status ='<span class="badge badge-pill bg-success">Active</span>';
                                  }else{
                                    $status= '<span class="badge badge-pill bg-danger">Inactive</span>';
                                  }
                                  echo $status;
                              } ?>
                              </div>
                            </div> 

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Vehicle Tyres <span class="text-danger">*</span>
                                </label>
                              </div>
                            </div>
                            <div id="vehicletyre">
                              <?php
                                if(isset($vehicle_data)){
                                  $subcnt = substr_count($vehicle_data['tyre_serial_text'],",");
                                  if($subcnt>0){
                                    $a = explode(',', $vehicle_data['tyre_serial_text']);
                                    for ($i=0; $i < count($a); $i++) {  ?>
                                      <div class="col-md-12">
                                          <label for="fuel_types">Tyre <?=$i+1;?></label>
                                          <input type="text" class="form-control" id="fuel_types"  value="<?php echo $a[$i];?>"  required>
                                      </div>
                                      
                                <?php    }
                                  }
                                }
                                ?>
                              
                            </div>
                            
                          </div>
                        </div>
                        <div class="submit-button">
                          <a href="<?php echo base_url();?>vehicle" class="btn btn-light">Cancel</a>
                        </div>
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
  <script src="<?php echo base_url(); ?>assets/js/common.js"></script>


  <!-- Sticky Sidebar JS -->
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
</body>

</html>