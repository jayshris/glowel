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
                                    <a href="<?php echo base_url();?>profile" class="active">
                                        <i class="ti ti-settings-cog"></i> General Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>company-settings">
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
                                    <h4>General Settings</h4>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url();?>profile">Profile</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>security">Security</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>notifications">Notifications</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>connected-apps" class="active">Connected Apps</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Settings Sidebar -->

                    </div>

                    <div class="col-xl-9 col-lg-12">

                        <!-- Settings Info -->
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="settings-header">
                                    <h4>Connected Apps</h4>
                                </div>
                                <div class="row">

                                    <!-- App -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="integration-grid">
                                            <div class="integration-calendar">
                                                <img src="<?php echo base_url();?>assets/img/icons/integration-01.svg" alt="Icon">
                                                <div class="connect-btn">
                                                    <a href="javascript:void(0);" class="connected">Connected</a>
                                                </div>
                                            </div>
                                            <div class="integration-content">
                                                <p>Google Calendar</p>
                                                <div class="status-toggle">
                                                    <input id="google_calendar" class="check" type="checkbox" checked="">
                                                    <label for="google_calendar" class="checktoggle">checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /App -->

                                    <!-- App -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="integration-grid">
                                            <div class="integration-calendar">
                                                <img src="<?php echo base_url();?>assets/img/icons/integration-02.svg" alt="Icon">
                                                <div class="connect-btn">
                                                    <a href="javascript:void(0);">Connect</a>
                                                </div>
                                            </div>
                                            <div class="integration-content">
                                                <p>Figma</p>
                                                <div class="status-toggle">
                                                    <input id="figma" class="check" type="checkbox" checked="">
                                                    <label for="figma" class="checktoggle">checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /App -->

                                    <!-- App -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="integration-grid">
                                            <div class="integration-calendar">
                                                <img src="<?php echo base_url();?>assets/img/icons/integration-03.svg" alt="Icon">
                                                <div class="connect-btn">
                                                    <a href="javascript:void(0);" class="connected">Connected</a>
                                                </div>
                                            </div>
                                            <div class="integration-content">
                                                <p>Dropbox</p>
                                                <div class="status-toggle">
                                                    <input id="dropbox" class="check" type="checkbox" checked="">
                                                    <label for="dropbox" class="checktoggle">checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /App -->

                                    <!-- App -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="integration-grid">
                                            <div class="integration-calendar">
                                                <img src="<?php echo base_url();?>assets/img/icons/integration-04.svg" alt="Icon">
                                                <div class="connect-btn">
                                                    <a href="javascript:void(0);">Connect</a>
                                                </div>
                                            </div>
                                            <div class="integration-content">
                                                <p>Slack</p>
                                                <div class="status-toggle">
                                                    <input id="slack" class="check" type="checkbox" checked="">
                                                    <label for="slack" class="checktoggle">checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /App -->

                                    <!-- App -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="integration-grid">
                                            <div class="integration-calendar">
                                                <img src="<?php echo base_url();?>assets/img/icons/integration-05.svg" alt="Icon">
                                                <div class="connect-btn">
                                                    <a href="javascript:void(0);" class="connected">Connected</a>
                                                </div>
                                            </div>
                                            <div class="integration-content">
                                                <p>Gmail</p>
                                                <div class="status-toggle">
                                                    <input id="gmail" class="check" type="checkbox" checked="">
                                                    <label for="gmail" class="checktoggle">checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /App -->

                                    <!-- App -->
                                    <div class="col-md-4 col-sm-6">
                                        <div class="integration-grid">
                                            <div class="integration-calendar">
                                                <img src="<?php echo base_url();?>assets/img/icons/integration-06.svg" alt="Icon">
                                                <div class="connect-btn">
                                                    <a href="javascript:void(0);">Connect</a>
                                                </div>
                                            </div>
                                            <div class="integration-content">
                                                <p>Github</p>
                                                <div class="status-toggle">
                                                    <input id="github" class="check" type="checkbox" checked="">
                                                    <label for="github" class="checktoggle">checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /App -->

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
<script src="<?php echo base_url();?>assets/js/profile-upload.js"></script>
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>