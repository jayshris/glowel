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
                <div class="card">
                    <div class="card-body">
                        <div class="settings-form"> 
                            <div class="settings-sub-header">
                                <h6>View Unit</h6>
                            </div>
                            <div class="profile-details">
                                <div class="row g-3">
                                <div class="col-md-3">
                                    <label class="col-form-label">Unit Name: </label>
                                    <label class="col-form-label"><?php
                                            if(isset($data)){
                                            echo $data['unit'];
                                            }else{
                                            echo '-'; 
                                            }
                                            ?></label>      
                                </div>   
                                </div>
                                <br>
                            </div>
                            <div class="submit-button">
                                <a href="<?php echo base_url();?>units" class="btn btn-light">Cancel</a>
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
</body>

</html>