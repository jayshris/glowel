<?php
use App\Models\ForemanModel;
use App\Models\StateModel;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
<!-- Summernote CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.css">
<style>
.other-title{
    font-size: 16px;
    font-weight: bold;
}
.other-value{
    margin-left:50px;
    font-size: 16px;
}
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

            </div>
        </div>

        <div class="row">
          <?php
              $foremanModel = new ForemanModel();
              $foremanModel = $foremanModel->where('id', $driver_data['foreman_id'])->first();
              $statemodel = new StateModel();
              $statemodel = $statemodel->where('state_id', $driver_data['state'])->first();
              //print_r($statemodel['state_name']); die;
          ?>

            <!-- Contact Sidebar -->
            <div class="col-xl-12 theiaStickySidebar">
                <div class="contact-sidebar">
                    <h4>Driver Information</h4><br>
                    <ul class="other-info">
                        <li><span class="other-title"> Driver Name </span><span class="other-value"><?= $driver_data['name'] ?></span></li>
                        <li><span class="other-title">Foreman Name </span><span class="other-value"><?= @$foremanModel['name'] ?></span></li>
                        <li><span class="other-title">Driver Type</span><span class="other-value"><?= $driver_data['driver_type'] ?></span></li>
                        <li><span class="other-title">DL No</span><span class="other-value"><?=  $driver_data['driving_licence_number'] ?></span></li>
                        <li><span class="other-title">Phone number</span><span class="other-value"><?= $driver_data['mobile'] ?></span></li>
                        <li><span class="other-title">Alternate number</span><span class="other-value"><?= $driver_data['alternate_number'] ?></span></li>
                        <li><span class="other-title">Aadhaar number</span><span class="other-value" style="margin-left:40px;"><?= $driver_data['adhaar_number'] ?></li>
                        <li><span class="other-title">Address</span><span class="other-value" style="margin-left:40px;"><?= $driver_data['address']. ' '. $driver_data['city']. ' '. $statemodel['state_name']. ' '. $driver_data['zip']?></li>
                    </ul>	
                </div>
            </div>
            <!-- /Contact Sidebar -->

            
        </div>

    </div>
</div>
<!-- /Page Wrapper -->



</div>
<!-- /Main Wrapper -->



<?= $this->include('partials/vendor-scripts') ?>
<!-- Summernote JS -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>