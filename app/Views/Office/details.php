<?php
use App\Models\CompanyModel;
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
          

            <!-- Contact Sidebar -->
            <div class="col-xl-12 theiaStickySidebar">
                <div class="contact-sidebar">
                    <h4>Office Information</h4><br>
                    <ul class="other-info">
                        <?php
                            $companyModel = new CompanyModel();
                            $company  = $companyModel->where('id', $office_data['company_id'])->first();

                            
                            $stateModel = new StateModel();
                            $state  = $stateModel->where('state_id', $office_data['state'])->first();
                        ?>
                        <li><span class="other-title">Name</span><span class="other-value"><?= $office_data['name'] ?></span></li>
                        <li><span class="other-title">Company Name</span><span class="other-value" style="margin-left:33px;"><?= $company['name'] ?></span></li>
                        <li><span class="other-title">GST Number</span><span class="other-value"><?= $office_data['gst'] ?></span></li>
                        <li><span class="other-title">Office Code</span><span class="other-value"><?= $office_data['office_code'] ?></span></li>
                        <li><span class="other-title">Address</span><span class="other-value"><?= $office_data['address'] ?></span></li>
                        <li><span class="other-title">State</span><span class="other-value"><?=  $state['state_name'] ?></span></li>
                        <li><span class="other-title">Postcode</span><span class="other-value"><?= $office_data['postcode'] ?></span></li>
                        <li><span class="other-title">City</span><span class="other-value"><?= $office_data['city'] ?></span></li>
                        <li><span class="other-title">Booking Prefix</span><span class="other-value" style="margin-left:40px;"><?= $office_data['booking_prefix'] ?></span></li>
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