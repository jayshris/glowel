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
                                    <a href="<?php echo base_url();?>company-settings" class="active">
                                        <i class="ti ti-world-cog"></i> Website Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>invoice-settings">
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
                                    <h4>Website Settings</h4>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url();?>company-settings" class="active">Company Settings</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>localization">Localization</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>prefixes">Prefixes</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>preference">Preference</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>appearance">Appearance</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>language">Language</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Settings Sidebar -->

                    </div>

                    <div class="col-xl-9 col-lg-12">

                        <!-- Company Settings -->
                        <div class="card">
                            <div class="card-body settings-form">
                                <div class="settings-header">
                                    <h4>Company Settings</h4>
                                </div>	
                                <form action="<?php echo base_url();?>company-settings">	
                                    <div class="settings-sub-header">
                                        <h6>Company Information</h6>
                                        <p>Provide the company information below</p>
                                    </div>			
                                    <div class="profile-details">			
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Company Name </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Company Email Address</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Phone Number</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Fax</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Website</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settings-sub-header">
                                        <h6>Company Images</h6>
                                        <p>Provide the company images</p>
                                    </div>			
                                    <div class="profile-details">			
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <div class="profile-upload">
                                                        <div class="profile-upload-img">
                                                            <span><i class="ti ti-photo"></i></span>
                                                            <img src="<?php echo base_url();?>assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
                                                            <button type="button" class="profile-remove">
                                                                <i class="feather-x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="profile-upload-content">
                                                            <label class="profile-upload-btn">
                                                                <i class="ti ti-file-broken"></i> Upload File 
                                                                <input type="file" class="input-img">
                                                            </label>
                                                            <p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <div class="profile-upload">
                                                        <div class="profile-upload-img">
                                                            <span><i class="ti ti-photo"></i></span>
                                                            <img src="<?php echo base_url();?>assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
                                                            <button type="button" class="profile-remove">
                                                                <i class="feather-x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="profile-upload-content">
                                                            <label class="profile-upload-btn">
                                                                <i class="ti ti-file-broken"></i> Upload File 
                                                                <input type="file" class="input-img">
                                                            </label>
                                                            <p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <div class="profile-upload">
                                                        <div class="profile-upload-img">
                                                            <span><i class="ti ti-photo"></i></span>
                                                            <img src="<?php echo base_url();?>assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
                                                            <button type="button" class="profile-remove">
                                                                <i class="feather-x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="profile-upload-content">
                                                            <label class="profile-upload-btn">
                                                                <i class="ti ti-file-broken"></i> Upload File 
                                                                <input type="file" class="input-img">
                                                            </label>
                                                            <p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-wrap">
                                                    <div class="profile-upload">
                                                        <div class="profile-upload-img">
                                                            <span><i class="ti ti-photo"></i></span>
                                                            <img src="<?php echo base_url();?>assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
                                                            <button type="button" class="profile-remove">
                                                                <i class="feather-x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="profile-upload-content">
                                                            <label class="profile-upload-btn">
                                                                <i class="ti ti-file-broken"></i> Upload File 
                                                                <input type="file" class="input-img">
                                                            </label>
                                                            <p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settings-sub-header">
                                        <h6>Address</h6>
                                        <p>Please enter the company address details</p>
                                    </div>			
                                    <div class="profile-details">			
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Address</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Country</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">State / Province</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Fax</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-4">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">Postal Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
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
                        <!-- /Company Settings -->

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
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>