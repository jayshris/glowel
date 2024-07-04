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
                      <form action="<?php echo base_url(); ?>office/edit" method="post" >
                        <div class="settings-sub-header">
                          <h6>Edit Office</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <input type="hidden" name="id" value="<?php
                                if(isset($office_data)){
                                  echo $office_data['id'];
                                }
                                ?>>
                                <label class="col-form-label">
                                  Company Name <span class="text-danger">*</span>
                                </label>
                                <select class="select" name = "company_name">
                                  <option>Select</option>
                                  <?php
                                  if(isset($company)){
                                    
                                    foreach($company as $row)
                                    {
                                      ?>

                                      <option value="<?php echo $row['id'] ?>" <?php
                                      if(isset($office_data)){
                                        if($office_data['company_id'] == $row['id']){
                                          echo 'selected';
                                          } 
                                      }
                                        ?> >
                                      <?php echo $row['name'] ?>
                                      </option>
                                      <?php
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
                                  Office Name <span class="text-danger">*</span>
                                </label>

                                <input type="text" name="office_name" class="form-control"  value="<?php
                                if(isset($office_data)){
                                  echo $office_data['name'];
                                }
                                ?>">
                                <?php
                                  if($validation->getError('office_name'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('office_name').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  GST Number <span class="text-danger"></span>
                                </label>
                                <input type="text" name="gst" class="form-control" value="<?php
                                if(isset($office_data)){
                                  echo $office_data['gst'];
                                }
                                ?>">
                                <?php
                                  if($validation->getError('gst'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('gst').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Office code<span class="text-danger">*</span>
                                </label>
                                <input type="text" name="office_code" class="form-control"  value="<?php
                                if(isset($office_data)){
                                  echo $office_data['office_code'];
                                }
                                ?>">
                                <?php
                                  if($validation->getError('office_code'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('office_code').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>
                            <div class="col-md-8">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Address<span class="text-danger">*</span>
                                </label>

                                <input type="text" name="address" class="form-control" value="<?php
                                if(isset($office_data)){
                                  echo $office_data['address'];
                                }
                                ?>">
                                <?php
                                  if($validation->getError('address'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('address').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Country<span class="text-danger">*</span>
                                </label>
                                <input type="text" value="India" readonly class="form-control">
                                
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  City<span class="text-danger">*</span>
                                </label>

                                <input type="text" name="city" class="form-control" value="<?php
                                if(isset($office_data)){
                                  echo $office_data['city'];
                                }
                                ?>">
                                <?php
                                  if($validation->getError('city'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('city').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  State<span class="text-danger">*</span>
                                </label>
                                <select class="select" name="state">
                                  <option>Select</option>
                                <?php
                                if (isset($state)) {
                                  foreach($state as $row)
                                  { ?>
                                    <option value="<?php echo $row["state_id"] ?>" 
                                    <?php 
                                    if(isset($office_data)){
                                    if($office_data['state'] == $row["state_id"]) echo 'selected';
                                       } ?>><?php echo $row["state_name"] ?></option>  
                                  <?php
                                  }
                                }
                                ?>
                                </select>
                                <?php
                                  if($validation->getError('state'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('state').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Postcode<span class="text-danger">*</span>
                                </label>

                                <input type="text" name="postcode" class="form-control" value="<?php
                                if(isset($office_data)){
                                  echo $office_data['postcode'];
                                }
                                ?>">
                                <?php
                                  if($validation->getError('postcode'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('postcode').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Booking Prefix <span class="text-danger"></span>
                                </label>

                                <input type="text" name="book_prefix" class="form-control" value="<?php
                                if(isset($office_data)){
                                  echo $office_data['booking_prefix'];
                                }
                                ?>">
                                <?php
                                  if($validation->getError('book_prefix'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('book_prefix').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>


                          </div>
                        </div>
                        <div class="submit-button">
                          <button type="submit" name="add_profile" class="btn btn-primary">Save Changes</button>
                          <button type="reset" class="btn btn-light">Reset</button>
                          <a href="<?php echo base_url();?>office" class="btn btn-light">Cancel</a>
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

  <!-- Sticky Sidebar JS -->
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
</body>

</html>