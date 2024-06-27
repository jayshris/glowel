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

                <div class="card main-card">
                    <div class="card-body">

                        <!-- Search -->
                        <div class="search-section">
                            <div class="row">
                                <div class="col-md-5 col-sm-4">
                                    <div class="form-wrap icon-form">
                                        <span class="form-icon"><i class="ti ti-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Search FAQ">
                                    </div>							
                                </div>		
                                <div class="col-md-7 col-sm-8">					
                                    <div class="export-list text-sm-end">
                                        <ul>
                                            <li>
                                                <div class="export-dropdwon">
                                                    <a href="javascript:void(0);" class="dropdown-toggle"  data-bs-toggle="dropdown"><i class="ti ti-package-export"></i>Export</a>
                                                    <div class="dropdown-menu  dropdown-menu-end">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0);"><i class="ti ti-file-type-pdf text-danger"></i>Export as PDF</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);"><i class="ti ti-file-type-xls text-green"></i>Export as Excel </a>
                                                            </li>
                                                        </ul>
                                                      </div>
                                                </div>
                                            </li>									
                                            <li>
                                                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_faq"><i class="ti ti-square-rounded-plus"></i>Add FAQ</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Search -->

                        <!-- Filter -->
                        <div class="filter-section filter-flex">
                            <div class="sortby-list">
                                <ul>
                                    <li>
                                        <div class="sort-dropdown drop-down">
                                            <a href="javascript:void(0);" class="dropdown-toggle"  data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2"></i>Sort </a>
                                            <div class="dropdown-menu  dropdown-menu-start">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <i class="ti ti-circle-chevron-right"></i>Ascending
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <i class="ti ti-circle-chevron-right"></i>Descending
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <i class="ti ti-circle-chevron-right"></i>Recently Viewed
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <i class="ti ti-circle-chevron-right"></i>Recently Added
                                                        </a>
                                                    </li>
                                                </ul>
                                              </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-wrap icon-form">
                                            <span class="form-icon"><i class="ti ti-calendar"></i></span>
                                            <input type="text" class="form-control bookingrange" placeholder="">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-list">
                                <ul>
                                    <li>
                                        <div class="manage-dropdwon">
                                            <a href="javascript:void(0);" class="btn btn-purple-light"  data-bs-toggle="dropdown"  data-bs-auto-close="false"><i class="ti ti-columns-3"></i>Manage Columns</a>
                                            <div class="dropdown-menu  dropdown-menu-xl-end">
                                                <h4>Want to manage datatables?</h4>
                                                <p>Please drag and drop your column to reorder your table and enable see option as you want.</p>
                                                <ul>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>Questions</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-questions" class="check">
                                                            <label for="col-questions" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>Category</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-category" class="check">
                                                            <label for="col-category" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>Answers</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-answers" class="check">
                                                            <label for="col-answers" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>Status</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-status" class="check">
                                                            <label for="col-status" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>Action</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-action" class="check">
                                                            <label for="col-action" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-sorts dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown"  data-bs-auto-close="false"><i class="ti ti-filter-share"></i>Filter</a>
                                            <div class="filter-dropdown-menu dropdown-menu  dropdown-menu-xl-end">
                                                <div class="filter-set-view">
                                                    <div class="filter-set-head">
                                                        <h4><i class="ti ti-filter-share"></i>Filter</h4>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#save_view">Save View</a>
                                                    </div>
                                                    <div class="header-set">
                                                        <select class="select">
                                                            <option>Select a View</option>
                                                            <option>Contact View List</option>
                                                            <option>Contact Location View</option>
                                                        </select>
                                                        <div class="radio-btn-items">
                                                            <div class="radio-btn">
                                                                <input type="radio" class="status-radio" id="pdf" name="export-type" checked="">
                                                                <label for="pdf">Just For Me</label>
                                                            </div>
                                                            <div class="radio-btn">
                                                                <input type="radio" class="status-radio" id="share" name="export-type">
                                                                <label for="share">Share Filter with Everyone </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="filter-set-content">
                                                            <div class="filter-set-content-head">
                                                                <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Category</a>
                                                            </div>
                                                            <div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
                                                                <div class="filter-content-list">
                                                                    <div class="form-wrap icon-form">
                                                                        <span class="form-icon"><i class="ti ti-search"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Search Category">
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Services</h5>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Advertising</h5>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Content Marketing</h5>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>HealthCare</h5>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Media</h5>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-set-content">
                                                            <div class="filter-set-content-head">
                                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Status</a>
                                                            </div>
                                                            <div class="filter-set-contents accordion-collapse collapse" id="Status" data-bs-parent="#accordionExample">
                                                                <div class="filter-content-list">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox" checked>
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Active</h5>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Inactive</h5>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-set-content">
                                                            <div class="filter-set-content-head">
                                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Created Date</a>
                                                            </div>
                                                            <div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
                                                                <div class="filter-content-list">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox" checked>
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Promotion</h5>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Rated</h5>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Rejected</h5>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Collab</h5>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Calls</h5>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>													
                                                    <div class="filter-reset-btns">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <a href="#" class="btn btn-light">Reset</a>
                                                            </div>
                                                            <div class="col-6">
                                                                <a href="<?php echo base_url();?>faq" class="btn btn-primary">Filter</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Filter -->

                        <!-- Faq List -->
                        <div class="table-responsive custom-table">
                            <table class="table" id="faqlist">
                                <thead class="thead-light">
                                    <tr>
                                    <th class="no-sort">
                                                    <label class="checkboxs">
                                                        <input type="checkbox"><span class="checkmarks"></span>
                                                    </label>
                                                </th>
                                        <th class="no-sort"></th>
                                        <th>Questions</th>
                                        <th>Category</th>
                                        <th>Answers</th>
                                        <th>Created at</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="datatable-length"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="datatable-paginate"></div>
                            </div>
                        </div>
                        <!-- /Faq List -->

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- /Page Wrapper -->

<!-- Add FAQ -->
<div class="modal custom-modal fade" id="add_faq" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add FAQ</h5>
                <div class="d-flex align-items-center mod-toggle">
                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                        <i class="ti ti-x"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>faq">
                    <div class="form-wrap">
                        <label class="col-form-label">Category <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Question <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Answer <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Status <span class="text-danger">*</span></label>
                        <div class="radio-wrap">
                            <div class="d-flex align-items-center">
                                <div class="radio-btn">
                                    <input type="radio" class="status-radio" id="active1" name="status" checked="">
                                    <label for="active1">Active</label>
                                </div>
                                <div class="radio-btn">
                                    <input type="radio" class="status-radio" id="inactive1" name="status">
                                    <label for="inactive1">Inactive</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add FAQ  -->

<!-- Edit FAQ -->
<div class="modal custom-modal fade" id="edit_faq" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit FAQ</h5>
                <div class="d-flex align-items-center mod-toggle">
                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                        <i class="ti ti-x"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>faq">
                    <div class="form-wrap">
                        <label class="col-form-label">Category <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Service">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Question <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="How can I book a service">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Answer <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">Status <span class="text-danger">*</span></label>
                        <div class="radio-wrap">
                            <div class="d-flex align-items-center">
                                <div class="radio-btn">
                                    <input type="radio" class="status-radio" id="active" name="status" checked="">
                                    <label for="active">Active</label>
                                </div>
                                <div class="radio-btn">
                                    <input type="radio" class="status-radio" id="inactive" name="status">
                                    <label for="inactive">Inactive</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit FAQ  -->

<!-- Delete FAQ -->
<div class="modal custom-modal fade" id="delete_faq" role="dialog">
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
                    <h3>Remove FAQ?</h3>
                    <p class="del-info">Are you sure you want to remove it.</p>
                    <div class="col-lg-12 text-center modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <a href="<?php echo base_url();?>faq" class="btn btn-danger">Yes, Delete it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete FAQ -->

</div>
<!-- /Main Wrapper -->

<?= $this->include('partials/vendor-scripts') ?>

</body>
</html>