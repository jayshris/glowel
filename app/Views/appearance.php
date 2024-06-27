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
                                            <a href="<?php echo base_url();?>company-settings">Company Settings</a>
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
                                            <a href="<?php echo base_url();?>appearance" class="active">Appearance</a>
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

                        <!-- Appearance -->
                        <div class="card">
                            <div class="card-body settings-form">
                                <div class="settings-header">
                                    <h4>Appearance</h4>
                                </div>	
                                <form action="<?php echo base_url();?>appearance">
                                    <div class="profile-details border-0 mb-0">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="setting-title">
                                                    <h6>Select Theme</h6>
                                                    <p>Select theme of the website</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-wrap mb-0">
                                                    <div class="theme-type-images d-flex align-items-center">
                                                        <div class="theme-image active">
                                                            <div class="theme-image-set">
                                                                <img src="<?php echo base_url();?>assets/img/theme/theme-01.jpg" alt="">
                                                            </div>
                                                            <span>Light</span>
                                                        </div>
                                                        <div class="theme-image">
                                                            <div class="theme-image-set">
                                                                <img src="<?php echo base_url();?>assets/img/theme/theme-02.jpg" alt="">
                                                            </div>
                                                            <span>Dark</span>
                                                        </div>
                                                        <div class="theme-image">
                                                            <div class="theme-image-set">
                                                                <img src="<?php echo base_url();?>assets/img/theme/theme-03.jpg" alt="">
                                                            </div>
                                                            <span>Automatic</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="setting-title">
                                                    <h6>Accent Color</h6>
                                                    <p>Select accent color of website</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-wrap">
                                                    <div class="theme-colors">
                                                        <ul>
                                                            <li>
                                                                <span class="themecolorset defaultcolor active"></span>
                                                            </li>
                                                            <li>
                                                                <span class="themecolorset theme-secondary"></span>
                                                            </li>
                                                            <li>
                                                                <span class="themecolorset theme-violet"></span>
                                                            </li>
                                                            <li>
                                                                <span class="themecolorset theme-blue"></span>
                                                            </li>
                                                            <li>
                                                                <span class="themecolorset theme-brown"></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="setting-title">
                                                    <h6>Expand Sidebar</h6>
                                                    <p>To display in all the pages</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap">
                                                    <div class="status-toggle">
                                                        <input type="checkbox" id="prefer3" class="check" checked="">
                                                        <label for="prefer3" class="checktoggle">	</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>			
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="setting-title">
                                                    <h6>Sidebar Size</h6>
                                                    <p>Select size of sidebar to display</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap">
                                                    <select class="select">
                                                        <option selected>Large - 250px</option>
                                                        <option>Small - 85px</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="setting-title">
                                                    <h6>Font Family</h6>
                                                    <p>Select font family of website</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap">
                                                    <select class="select">
                                                        <option selected>Noto Sans</option>
                                                        <option>Nunito</option>
                                                    </select>
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
                        <!-- /Appearance -->

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
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>