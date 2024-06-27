<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
</head>
<body class="error-page">
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="container">
            <div class="error-box">
                <div class="error-img">
                    <img src="<?php echo base_url(); ?>assets/img/authentication/maintenance-img.png" class="img-fluid" alt="">
                </div>
                <div class="error-content">
                    <h3>We are Under Maintenance</h3>
                    <p>Sorry for any inconvenience caused, we have almost done Will get back soon!</p>
                    <a href="<?php echo base_url(); ?>deals-dashboard" class="btn btn-primary">
                        <i class="ti ti-arrow-narrow-left"></i> Back to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
    <?= $this->include('partials/vendor-scripts') ?>
</body>
</html>