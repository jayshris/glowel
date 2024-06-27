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
                                    <a href="<?php echo base_url();?>storage-settings" class="active">
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
                                    <h4>Other Settings</h4>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url();?>storage">Storage</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>ban-ip-address" class="active">Ban IP Address</a>
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
                            <div class="card-body">
                                <div class="settings-header">
                                    <h4>Ban IP Address</h4>
                                    <a href="javascript:void(0)" class="btn-add" data-bs-toggle="modal" data-bs-target="#add_ip"><i class="ti ti-plus"></i></a>
                                </div>
                                <div class="row">

                                    <!-- Ban Ip Box -->
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="ip-wrap">
                                            <div class="ip-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Temporarily block to protect user accounts from internet fraudsters."><i class="ti ti-info-circle-filled"></i></a>
                                                <h6>198.120.16.01</h6>
                                            </div>
                                            <div class="dropdown table-action">
                                                <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_ip"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_ip"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Ban Ip Box -->

                                    <!-- Ban Ip Box -->
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="ip-wrap">
                                            <div class="ip-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Temporarily block to protect user accounts from internet fraudsters."><i class="ti ti-info-circle-filled"></i></a>
                                                <h6>198.120.23.56</h6>
                                            </div>
                                            <div class="dropdown table-action">
                                                <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_ip"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_ip"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Ban Ip Box -->

                                    <!-- Ban Ip Box -->
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="ip-wrap">
                                            <div class="ip-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Temporarily block to protect user accounts from internet fraudsters."><i class="ti ti-info-circle-filled"></i></a>
                                                <h6>198.132.57.12</h6>
                                            </div>
                                            <div class="dropdown table-action">
                                                <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_ip"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_ip"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Ban Ip Box -->

                                    <!-- Ban Ip Box -->
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="ip-wrap">
                                            <div class="ip-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Temporarily block to protect user accounts from internet fraudsters."><i class="ti ti-info-circle-filled"></i></a>
                                                <h6>198.120.32.01</h6>
                                            </div>
                                            <div class="dropdown table-action">
                                                <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_ip"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_ip"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Ban Ip Box -->

                                    <!-- Ban Ip Box -->
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="ip-wrap">
                                            <div class="ip-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Temporarily block to protect user accounts from internet fraudsters."><i class="ti ti-info-circle-filled"></i></a>
                                                <h6>198.120.32.25</h6>
                                            </div>
                                            <div class="dropdown table-action">
                                                <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_ip"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_ip"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Ban Ip Box -->

                                </div>
                                <div class="submit-button">
                                    <a href="#" class="btn btn-light">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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

<!-- Add Ban IP Address -->
<div class="modal custom-modal fade" id="add_ip" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Ban IP Address</h5>
                <div class="d-flex align-items-center mod-toggle">
                    <div class="status-toggle">
                        <input type="checkbox" id="toggle" class="check" checked="">
                        <label for="toggle" class="checktoggle"></label>
                    </div>
                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                        <i class="ti ti-x"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>ban-ip-address">
                    <div class="form-wrap">
                        <label class="col-form-label">IP Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Reason For Ban</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <div class="modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Ban IP Address -->

<!-- Edit Ban IP Address -->
<div class="modal custom-modal fade" id="edit_ip" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Ban IP Address</h5>
                <div class="d-flex align-items-center mod-toggle">
                    <div class="status-toggle">
                        <input type="checkbox" id="toggle1" class="check" checked="">
                        <label for="toggle1" class="checktoggle"></label>
                    </div>
                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                        <i class="ti ti-x"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>ban-ip-address">
                    <div class="form-wrap">
                        <label class="col-form-label">IP Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Reason For Ban</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <div class="modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Ban IP Address -->

<!-- Delete IP Address -->
<div class="modal custom-modal fade" id="delete_ip" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 m-0 justify-content-end">
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>ban-ip-address">
                    <div class="success-message text-center">
                        <div class="success-popup-icon">
                            <i class="ti ti-trash-x"></i>
                        </div>
                        <h3>Remove IP Address?</h3>
                        <p>Are you sure you want to remove it.</p>
                        <div class="col-lg-12 text-center modal-btn">
                            <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-danger">Yes, Delete it</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Delete IP Address -->

</div>
<!-- /Main Wrapper -->

<?= $this->include('partials/vendor-scripts') ?>
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>