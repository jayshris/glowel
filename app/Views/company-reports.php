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
                                        <input type="text" class="form-control" placeholder="Search Companies">
                                    </div>							
                                </div>		
                                <div class="col-md-7 col-sm-8">					
                                    <div class="filter-list">
                                        <ul>
                                            <li>
                                                <div>
                                                    <a href="download_report" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#download_report"><i class="ti ti-file-download me-2"></i>Download Report</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Search -->

                        <div class="row">
                            <div class="col-md-7">		
                                <div class="card report-card">
                                    <div class="card-body">
                                        <div class="statistic-header report-header">
                                            <h4>Companies by Year</h4>
                                            <div class="statistic-dropdown">
                                                <div class="icon-form">
                                                    <span class="form-icon"><i class="ti ti-calendar"></i></span>
                                                    <input type="text" class="form-control bookingrange" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="company-year"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex">		
                                <div class="card report-card w-100">
                                    <div class="card-body">
                                        <div class="statistic-header report-header">
                                            <h4>Companies by Source</h4>
                                            <div class="statistic-dropdown">
                                                <div class="icon-form">
                                                    <span class="form-icon"><i class="ti ti-calendar"></i></span>
                                                    <input type="text" class="form-control bookingrange" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="leads-analysis"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card report-card-table">
                            <div class="card-body">

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
                                                    <div class="dropdown-menu  dropdown-menu-md-end">
                                                        <h4>Want to manage datatables?</h4>
                                                        <p>Please drag and drop your column to reorder your table and enable see option as you want.</p>
                                                        <ul>
                                                            <li>
                                                                <p><i class="ti ti-grip-vertical"></i>Name</p>
                                                                <div class="status-toggle">
                                                                    <input type="checkbox" id="col-name" class="check">
                                                                    <label for="col-name" class="checktoggle"></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <p><i class="ti ti-grip-vertical"></i>Phone</p>
                                                                <div class="status-toggle">
                                                                    <input type="checkbox" id="col-phone" class="check">
                                                                    <label for="col-phone" class="checktoggle"></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <p><i class="ti ti-grip-vertical"></i>Email</p>
                                                                <div class="status-toggle">
                                                                    <input type="checkbox" id="col-email" class="check">
                                                                    <label for="col-email" class="checktoggle"></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <p><i class="ti ti-grip-vertical"></i>Location</p>
                                                                <div class="status-toggle">
                                                                    <input type="checkbox" id="col-loc" class="check">
                                                                    <label for="col-loc" class="checktoggle"></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <p><i class="ti ti-grip-vertical"></i>Owner</p>
                                                                <div class="status-toggle">
                                                                    <input type="checkbox" id="col-owner" class="check">
                                                                    <label for="col-owner" class="checktoggle"></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <p><i class="ti ti-grip-vertical"></i>Source</p>
                                                                <div class="status-toggle">
                                                                    <input type="checkbox" id="col-tag" class="check">
                                                                    <label for="col-tag" class="checktoggle"></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <p><i class="ti ti-grip-vertical"></i>Won Deals</p>
                                                                <div class="status-toggle">
                                                                    <input type="checkbox" id="col-contact" class="check" checked="">
                                                                    <label for="col-contact" class="checktoggle"></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <p><i class="ti ti-grip-vertical"></i>Lost Deals</p>
                                                                <div class="status-toggle">
                                                                    <input type="checkbox" id="col-status" class="check">
                                                                    <label for="col-status" class="checktoggle"></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <p><i class="ti ti-grip-vertical"></i>Date Created</p>
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
                                                    <div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end">
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
                                                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Location</a>
                                                                    </div>
                                                                    <div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
                                                                        <div class="filter-content-list">
                                                                            <div class="form-wrap icon-form">
                                                                                <span class="form-icon"><i class="ti ti-search"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Search Location">
                                                                            </div>
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="filter-checks">
                                                                                        <label class="checkboxs">
                                                                                            <input type="checkbox" checked>
                                                                                            <span class="checkmarks"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="collapse-inside-text">
                                                                                        <h5>India</h5>
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
                                                                                        <h5>USA</h5>
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
                                                                                        <h5>France</h5>
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
                                                                                        <h5>United Kingdom</h5>
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
                                                                                        <h5>UAE</h5>
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
                                                                                        <h5>Italy</h5>
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
                                                                                        <h5>Japan</h5>
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
                                                                                        <h5>Germany</h5>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="filter-set-content">
                                                                    <div class="filter-set-content-head">
                                                                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Owner</a>
                                                                    </div>
                                                                    <div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
                                                                        <div class="filter-content-list">
                                                                            <div class="form-wrap icon-form">
                                                                                <span class="form-icon"><i class="ti ti-search"></i></span>
                                                                                <input type="text" class="form-control" placeholder="Search Owner">
                                                                            </div>
                                                                            <ul>
                                                                                <li>
                                                                                    <div class="filter-checks">
                                                                                        <label class="checkboxs">
                                                                                            <input type="checkbox" checked>
                                                                                            <span class="checkmarks"></span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="collapse-inside-text">
                                                                                        <h5>Hendry</h5>
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
                                                                                        <h5>Guillory</h5>
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
                                                                                        <h5>Jami</h5>
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
                                                                                        <h5>Theresa</h5>
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
                                                                                        <h5>Espinosa</h5>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="filter-set-content">
                                                                    <div class="filter-set-content-head">
                                                                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Source</a>
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
                                                                                <h5>Paid Social</h5>
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
                                                                                <h5>Google</h5>
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
                                                                                <h5>Campaigns</h5>
                                                                            </div>
                                                                        </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="filter-set-content">
                                                                    <div class="filter-set-content-head">
                                                                        <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Date</a>
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
                                                                                        <h5>25 Sep 2023, 01:22 pm
</h5>
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
                                                                                        <h5>29 Sep 2023, 04:15 pm</h5>
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
                                                                                        <h5>04 Oct 2023, 10:18 am</h5>
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
                                                                                        <h5>17 Oct 2023, 03:31 pm</h5>
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
                                                                                        <h5>24 Oct 2023, 09:14 pm</h5>
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
                                                                        <a href="javascript:void(0);" class="btn btn-light">Reset</a>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <a href="<?php echo base_url();?>contact-reports" class="btn btn-primary">Filter</a>
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

                                <!-- Report List -->
                                <div class="table-responsive custom-table">
                                    <table class="table" id="company_reports">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="no-sort">
                                                    <label class="checkboxs">
                                                        <input type="checkbox"><span class="checkmarks"></span>
                                                    </label>
                                                </th>
                                                <th class="no-sort"></th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Location</th>
                                                <th>Owner</th>
                                                <th>Source </th>
                                                <th>Won Deals</th>
                                                <th>Lost Deals</th>
                                                <th>Date Created</th>
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
                                <!-- /Report List -->

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- /Page Wrapper -->

<!-- Download Report -->
<div class="modal custom-modal fade" id="download_report" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Download Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="mb-3">
                        <label class="form-label">File Type <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Download as PDF</option>
                            <option>Download as Excel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <h5>Filters</h5>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">File Type <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>All Fields</option>
                            <option>Name</option>
                            <option>Position</option>
                            <option>Owner</option>
                            <option>Location</option>
                            <option>Phone</option>
                            <option>Date Created</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Position<span class="text-danger">*</span></label>
                        <select class="select">
                            <option>All Position</option>
                            <option>Installer</option>
                            <option>Senior  Manager</option>
                            <option>Test Engineer</option>
                            <option>UI /UX Designer</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Source<span class="text-danger">*</span></label>
                        <select class="select">
                            <option>All Source</option>
                            <option>Google</option>
                            <option>Campaigns </option>
                            <option>Referrals</option>
                            <option>Paid Social</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Year<span class="text-danger">*</span></label>
                        <select class="select">
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                        </select>
                    </div>
                    <div class="col-lg-12 text-end modal-btn">
                        <button type="submit" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Download Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Download Report -->

</div>
<!-- /Main Wrapper -->


<?= $this->include('partials/vendor-scripts') ?>
<!-- Apexchart JS -->
<script src="<?php echo base_url();?>assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/apexchart/chart-data.js"></script>
</body>
</html>