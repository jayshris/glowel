<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
<!-- Feathericon CSS -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/feather.css">
<!-- Summernote CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.css">
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

                <!-- Settings Menu -->
                <div class="card settings-tab">
                    <div class="card-body pb-0">
                        <div class="settings-menu">
                            <ul class="nav">
                                <li>
                                    <a href="<?php echo base_url();?>profile">
                                        <i class="ti ti-settings-cog"></i> General Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>company-settings">
                                        <i class="ti ti-world-cog"></i> Website Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>invoice-settings" class="active">
                                        <i class="ti ti-apps"></i> App Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>email-settings">
                                        <i class="ti ti-device-laptop"></i> System Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>payment-gateways">
                                        <i class="ti ti-moneybag"></i> Financial Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>storage">
                                        <i class="ti ti-flag-cog"></i> Other Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Settings Menu -->

                <div class="row">
                    <div class="col-xl-3 col-lg-12 theiaStickySidebar">

                        <!-- Settings Sidebar -->
                        <div class="card">
                            <div class="card-body">
                                <div class="settings-sidebar">
                                    <h4>App Settings</h4>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url();?>invoice-settings" class="active">Invoice Settings</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>printers">Printer</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>custom-fields">Custom Fields</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Settings Sidebar -->

                    </div>

                    <div class="col-xl-9 col-lg-12">

                        <!-- Invoice Settings -->
                        <div class="card">
                            <div class="card-body">
                                <div class="settings-header">
                                    <h4>Invoice Settings</h4>
                                </div>
                                <div class="settings-form">
                                    <form action="<?php echo base_url();?>invoice-settings">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="setting-title">
                                                    <h6>Invoice Logo</h6>
                                                    <p>Upload logo of your company to display in invoice</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <div class="profile-upload">
                                                        <div class="profile-upload-img">
                                                            <span><i class="ti ti-photo"></i></span>
                                                            <img id="ImgPreview" src="<?php echo base_url();?>assets/img/logo.svg" alt="img" class="preview1">
                                                            <button type="button" id="removeImage1" class="profile-remove">
                                                                <i class="feather-x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="profile-upload-content">
                                                            <label class="profile-upload-btn">
                                                                <i class="ti ti-file-broken"></i> Upload File 
                                                                <input type="file" id="imag" class="input-img">
                                                            </label>
                                                            <p>Upload Logo of your company to display in website(JPG or PNG). Max size of 800K</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="setting-title">
                                                    <h6>Invoice Prefix</h6>
                                                    <p>Add prefix to your invoice</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap">
                                                    <input type="text" class="form-control" value="INV-">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="setting-title">
                                                    <h6>Invoice Due</h6>
                                                    <p>Select due date to display in invoice</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap">
                                                    <div class="d-flex align-items-center inv-days">
                                                        <div class="select-drop">
                                                            <select class="select">
                                                                <option selected>5</option>
                                                                <option>7</option>
                                                            </select>
                                                        </div>
                                                        <p>Days</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <div class="setting-title">
                                                    <h6>Invoice Round Off</h6>
                                                    <p>Value roundoff in invoice</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap">
                                                    <div class="d-flex align-items-center round-off">
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="roundoff" class="check" checked="">
                                                            <label for="roundoff" class="checktoggle">	</label>
                                                        </div>
                                                        <div class="select-drop w-100">
                                                            <select class="select">
                                                                <option selected>Roundoff Up</option>
                                                                <option>Roundoff Down</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <div class="setting-title">
                                                    <h6>Show Company Details</h6>
                                                    <p>Show/hide company details in invoice</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <div class="status-toggle">
                                                        <input type="checkbox" id="sms1" class="check" checked="">
                                                        <label for="sms1" class="checktoggle">	</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="setting-title">
                                                    <h6>Invoice Header Terms</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-wrap">													<div class="summernote"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="setting-title">
                                                    <h6>Invoice Footer Terms</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <div class="summernote"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-button">
                                            <a href="#" class="btn btn-light">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Settings -->

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
<script src="<?php echo base_url();?>assets/js/profile-upload.js"></script>
<!-- Summernote JS -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>