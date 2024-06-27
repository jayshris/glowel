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
                                    <a href="<?php echo base_url();?>payment-gateways" class="active">
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
                                    <h4>Financial Settings</h4>
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url();?>payment-gateways">Payment Gateways</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>bank-accounts">Bank Accounts</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>tax-rates">Tax Rates</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>currencies" class="active">Currencies</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Settings Sidebar -->

                    </div>

                    <div class="col-xl-9 col-lg-12">

                        <!-- Currencies -->
                        <div class="card">
                            <div class="card-body">
                                <div class="settings-header">
                                    <h4>Currencies</h4>
                                    <a href="javascript:void(0)" class="btn-add" data-bs-toggle="modal" data-bs-target="#add_currency" ><i class="ti ti-plus"></i></a>
                                </div>

                                <form action="<?php echo base_url();?>currencies">
                                    <!-- Euro -->
                                    <div class="settings-sub-header setting-item">
                                        <div>
                                            <h6>Euro</h6>
                                            <p>Shows the details of Euro currency</p>
                                        </div>
                                        <div class="dropdown table-action">
                                            <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_currency"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_currency"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-details">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Currency Name
                                                    </label>
                                                    <input type="text" class="form-control" value="Euro">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Code
                                                    </label>
                                                    <input type="text" class="form-control" value="EUR">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Symbol
                                                    </label>
                                                    <input type="text" class="form-control" value="€">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Exchange Rate
                                                    </label>
                                                    <input type="text" class="form-control" value="Default">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Euro -->

                                    <!-- England Pound -->
                                    <div class="settings-sub-header setting-item">
                                        <div>
                                            <h6>England Pound</h6>
                                            <p>Shows the details of England Pound currency</p>
                                        </div>
                                        <div class="dropdown table-action">
                                            <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_currency"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_currency"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-details">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Currency Name
                                                    </label>
                                                    <input type="text" class="form-control" value="England Pound">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Code
                                                    </label>
                                                    <input type="text" class="form-control" value="GBP">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Symbol
                                                    </label>
                                                    <input type="text" class="form-control" value="€">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Exchange Rate
                                                    </label>
                                                    <input type="text" class="form-control" value="Default">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /England Pound -->

                                    <!-- Indian Rupee -->
                                    <div class="settings-sub-header setting-item">
                                        <div>
                                            <h6>Indian Rupee</h6>
                                            <p>Shows the details of Indian Rupee currency</p>
                                        </div>
                                        <div class="dropdown table-action">
                                            <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_currency"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_currency"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-details">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Currency Name
                                                    </label>
                                                    <input type="text" class="form-control" value="Indian Rupee">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Code
                                                    </label>
                                                    <input type="text" class="form-control" value="INR">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Symbol
                                                    </label>
                                                    <input type="text" class="form-control" value="₹">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Exchange Rate
                                                    </label>
                                                    <input type="text" class="form-control" value="83.11">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Indian Rupee -->

                                    <!-- US Dollar -->
                                    <div class="settings-sub-header setting-item">
                                        <div>
                                            <h6>US Dollar</h6>
                                            <p>Shows the details of US Dollar currency</p>
                                        </div>
                                        <div class="dropdown table-action">
                                            <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_currency"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_currency"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-details border-0 mb-0">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Currency Name
                                                    </label>
                                                    <input type="text" class="form-control" value="US Dollar">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Code
                                                    </label>
                                                    <input type="text" class="form-control" value="USD">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Symbol
                                                    </label>
                                                    <input type="text" class="form-control" value="$">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-wrap">
                                                    <label class="col-form-label">
                                                        Exchange Rate
                                                    </label>
                                                    <input type="text" class="form-control" value="Default">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /US Dollar -->

                                    <div class="submit-button">
                                        <a href="#" class="btn btn-light">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- /Currencies -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /Page Wrapper -->

<!-- Add Currency -->
<div class="modal custom-modal fade" id="add_currency" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Currency</h5>
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
                <form action="<?php echo base_url();?>currencies">
                    <div class="form-wrap">
                        <label class="col-form-label">Currency Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Code <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Symbol <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Exchange Rate <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
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
<!-- /Add Currency -->

<!-- Edit Currency -->
<div class="modal custom-modal fade" id="edit_currency" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Tax Rate</h5>
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
                <form action="<?php echo base_url();?>currencies">
                    <div class="form-wrap">
                        <label class="col-form-label">Currency Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Euro">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Code <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="EUR">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Symbol <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="€">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Exchange Rate <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Default">
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
<!-- /Edit Currency -->

<!-- Delete Account -->
<div class="modal custom-modal fade" id="delete_currency" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 m-0 justify-content-end">
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="success-message text-center">
                    <div class="success-popup-icon">
                        <i class="ti ti-trash-x"></i>
                    </div>
                    <h3>Remove Currency?</h3>
                    <p class="del-info">Are you sure you want to remove it.</p>
                    <div class="col-lg-12 text-center modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <a href="<?php echo base_url();?>currencies" class="btn btn-danger">Yes, Delete it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Account -->

</div>
<!-- /Main Wrapper -->


<?= $this->include('partials/vendor-scripts') ?>
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>