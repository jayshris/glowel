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
                                            <a href="<?php echo base_url();?>bank-accounts" class="active">Bank Accounts</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>tax-rates">Tax Rates</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>currencies">Currencies</a>
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
                                    <h4>Bank Accounts</h4>
                                    <a href="javascript:void(0)" class="btn-add" data-bs-toggle="modal" data-bs-target="#add_bank" ><i class="ti ti-plus"></i></a>
                                </div>
                                <div class="row">

                                    <!-- Bank Account -->
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="bank-box active">
                                            <div class="bank-header">
                                                <div class="bank-name">
                                                    <h6>HDFC</h6>
                                                    <p>**** **** 4872</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="bank-info">
                                                    <h6>Holder Name</h6>
                                                    <p>Darlee Robertson</p>
                                                </div>
                                                <div class="dropdown table-action">
                                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_bank"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_bank"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>	
                                    <!-- /Bank Account -->

                                    <!-- Bank Account -->
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="bank-box">
                                            <div class="bank-header">
                                                <div class="bank-name">
                                                    <h6>SBI</h6>
                                                    <p>**** **** 2495</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="bank-info">
                                                    <h6>Holder Name</h6>
                                                    <p>Sharon Roy</p>
                                                </div>
                                                <div class="dropdown table-action">
                                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_bank"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_bank"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>	
                                    <!-- /Bank Account -->

                                    <!-- Bank Account -->
                                    <div class="col-xxl-4 col-sm-6">
                                        <div class="bank-box">
                                            <div class="bank-header">
                                                <div class="bank-name">
                                                    <h6>KVB</h6>
                                                    <p>**** **** 3948</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="bank-info">
                                                    <h6>Holder Name</h6>
                                                    <p>Vaughan</p>
                                                </div>
                                                <div class="dropdown table-action">
                                                    <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_bank"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_bank"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>	
                                    <!-- /Bank Account -->

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

<!-- Add Bank Account -->
<div class="modal custom-modal fade" id="add_bank" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Bank Account</h5>
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
                <form action="<?php echo base_url();?>bank-accounts">
                    <div class="form-wrap">
                        <label class="col-form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Bank <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Branch <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Account Number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">IFSC Code <span class="text-danger">*</span></label>
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
<!-- /Add Bank Account -->

<!-- Edit Bank Account -->
<div class="modal custom-modal fade" id="edit_bank" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Bank Account</h5>
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
                <form action="<?php echo base_url();?>bank-accounts">
                    <div class="form-wrap">
                        <label class="col-form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Darlee Robertson">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Bank <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="HDFC">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Branch <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Bringham">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Account Number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="**** **** 4872">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">IFSC Code <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="198367">
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
<!-- /Edit Bank Account -->

<!-- Delete Account -->
<div class="modal custom-modal fade" id="delete_bank" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 m-0 justify-content-end">
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>bank-accounts">
                    <div class="success-message text-center">
                        <div class="success-popup-icon">
                            <i class="ti ti-trash-x"></i>
                        </div>
                        <h3>Remove Account?</h3>
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
<!-- /Delete Account -->

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