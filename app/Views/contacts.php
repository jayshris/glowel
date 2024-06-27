<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
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

                <div class="card main-card">
                    <div class="card-body">

                        <!-- Search -->
                        <div class="search-section">
                            <div class="row">
                                <div class="col-md-5 col-sm-4">
                                    <div class="form-wrap icon-form">
                                        <span class="form-icon"><i class="ti ti-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Search Contacts">
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
                                                <a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add Contacts</a>
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
                                                        <p><i class="ti ti-grip-vertical"></i>Tags</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-tag" class="check">
                                                            <label for="col-tag" class="checktoggle"></label>
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
                                                        <p><i class="ti ti-grip-vertical"></i>Rating</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-rate" class="check">
                                                            <label for="col-rate" class="checktoggle"></label>
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
                                                        <p><i class="ti ti-grip-vertical"></i>Contact</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-contact" class="check" checked="">
                                                            <label for="col-contact" class="checktoggle"></label>
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
                                                                <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Country</a>
                                                            </div>
                                                            <div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
                                                                <div class="filter-content-list">
                                                                    <div class="form-wrap icon-form">
                                                                        <span class="form-icon"><i class="ti ti-search"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Search Country">
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
                                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Rating</a>
                                                            </div>
                                                            <div class="filter-set-contents accordion-collapse collapse" id="collapseOne" data-bs-parent="#accordionExample">
                                                                <div class="filter-content-list">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox" checked>
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star filled"></i>
                                                                                <span>5.0</span>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <span>4.0</span>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <span>3.0</span>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <span>2.0</span>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <i class="fa fa-star filled"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <i class="fa fa-star"></i>
                                                                                <span>1.0</span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-set-content">
                                                            <div class="filter-set-content-head">
                                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Tags</a>
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
                                                                <a href="<?php echo base_url();?>contacts" class="btn btn-primary">Filter</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="view-icons">
                                            <a href="<?php echo base_url();?>contacts" class="active"><i class="ti ti-list-tree"></i></a>
                                            <a href="<?php echo base_url();?>contact-grid"><i class="ti ti-grid-dots"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Filter -->

                        <!-- Contact List -->
                        <div class="table-responsive custom-table">
                            <table class="table" id="categorieslist">
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
                                        <th>Tags</th>
                                        <th>Location</th>
                                        <th>Rating</th>
                                        <th>Owner</th>
                                        <th>Contact </th>
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
                        <!-- /Contact List -->

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- /Page Wrapper -->

<!-- Add Contact -->
<div class="toggle-popup">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Add New Contact</h4>
            <a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <div class="pro-create">
                <form action="#">							
                    <div class="accordion-lists" id="list-accord">

                        <!-- Basic Info -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#basic"><span><i class="ti ti-user-plus"></i></span>Basic Info</a>
                            <div class="accordion-collapse collapse show" id="basic" data-bs-parent="#list-accord">
                                <div class="content-collapse">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-wrap">
                                                <div class="profile-upload">
                                                    <div class="profile-upload-img">
                                                        <span><i class="ti ti-photo"></i></span>
                                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt="img" class="preview1">
                                                        <button type="button" class="profile-remove">
                                                            <i class="ti ti-x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="profile-upload-content">
                                                        <label class="profile-upload-btn">
                                                            <i class="ti ti-file-broken"></i> Upload File 
                                                            <input type="file" class="input-img">
                                                        </label>
                                                        <p>JPG, GIF or PNG. Max size of 800K</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Last Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Job Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Company Name</label>
                                                <select class="select2">
                                                    <option>Choose</option>
                                                    <option>NovaWave LLC</option>
                                                    <option>BlueSky Industries</option>
                                                    <option>SilverHawk</option>
                                                    <option>SummitPeak</option>
                                                    <option>RiverStone Ventur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-wrap">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                    <div class="status-toggle small-toggle-btn d-flex align-items-center">
                                                        <span class="me-2 label-text">Email Opt Out</span>
                                                        <input type="checkbox" id="user" class="check" checked="">
                                                        <label for="user" class="checktoggle"></label>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Phone 1 <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Phone 2</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Fax <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label class="col-form-label">Deals</label>
                                                    <a href="#" class="label-add add-popups"><i class="ti ti-square-rounded-plus"></i>Add New</a>
                                                </div>
                                                <select class="select2">
                                                    <option>Choose</option>
                                                    <option>Collins</option>
                                                    <option>Konopelski</option>
                                                    <option>Adams</option>
                                                    <option>Schumm</option>
                                                    <option>Wisozk</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Date of Birth</label>
                                                <div class="icon-form-end">
                                                    <span class="form-icon"><i class="ti ti-calendar-event"></i></span>
                                                    <input type="text" class="form-control datetimepicker">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Reviews </label>
                                                <div class="icon-form-end">
                                                    <span class="form-icon"><i class="ti ti-star"></i></span>
                                                    <input type="text" class="form-control" placeholder="4.2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Owner</label>
                                                <select class="select-img">
                                                    <option data-image="assets/img/profiles/avatar-14.jpg" selected>Jerald</option>
                                                    <option data-image="assets/img/profiles/avatar-15.jpg">Guillory</option>
                                                    <option data-image="assets/img/profiles/avatar-16.jpg">Jami</option>
                                                    <option data-image="assets/img/profiles/avatar-13.jpg">Theresa</option>
                                                    <option data-image="assets/img/profiles/avatar-24.jpg">Espinosa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Tags </label>
                                                <input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Collab" >	
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Source <span class="text-danger">*</span></label>
                                                <select class="select2">
                                                    <option>Choose</option>
                                                    <option>Phone Calls</option>
                                                    <option>Social Media</option>
                                                    <option>Referral Sites</option>
                                                    <option>Web Analytics</option>
                                                    <option>Previous Purchases</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Industry <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option>Choose</option>
                                                    <option>Retail Industry</option>
                                                    <option>Banking</option>
                                                    <option>Hotels</option>
                                                    <option>Financial Services</option>
                                                    <option>Insurance</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Currency <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Language <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option>Choose</option>
                                                    <option>English</option>
                                                    <option>Arabic</option>
                                                    <option>Chinese</option>
                                                    <option>Hindi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-wrap mb-0">
                                                <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Basic Info -->

                        <!-- Address Info -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#address"><span><i class="ti ti-map-pin-cog"></i></span>Address Info</a>
                            <div class="accordion-collapse collapse" id="address" data-bs-parent="#list-accord">
                                <div class="content-collapse">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Street Address </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">City </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">State / Province </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap mb-wrap">
                                                <label class="col-form-label">Country</label>
                                                <select class="select">
                                                    <option>Choose</option>
                                                    <option>India</option>
                                                    <option>USA</option>
                                                    <option>France</option>
                                                    <option>UK</option>
                                                    <option>UAE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap mb-0">
                                                <label class="col-form-label">Zipcode </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>	
                        <!-- /Address Info -->		

                        <!-- Social Profile -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#social"><span><i class="ti ti-social"></i></span>Social Profile</a>
                            <div class="accordion-collapse collapse" id="social" data-bs-parent="#list-accord">
                                <div class="content-collapse">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Facebook</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Skype </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Linkedin </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Twitter</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap mb-wrap">
                                                <label class="col-form-label">Whatsapp</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap mb-0">
                                                <label class="col-form-label">Instagram</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Social Profile -->

                        <!-- Access -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#access"><span><i class="ti ti-accessible"></i></span>Access</a>
                            <div class="accordion-collapse collapse" id="access" data-bs-parent="#list-accord">
                                <div class="content-collapse">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="radio-wrap form-wrap">
                                                <label class="col-form-label">Visibility</label>
                                                <div class="d-flex flex-wrap">
                                                    <div class="radio-btn">
                                                        <input type="radio" class="status-radio" id="public" name="visible">
                                                        <label for="public">Public</label>
                                                    </div>
                                                    <div class="radio-btn">
                                                        <input type="radio" class="status-radio" id="private" name="visible">
                                                        <label for="private">Private</label>
                                                    </div>
                                                    <div class="radio-btn" data-bs-toggle="modal" data-bs-target="#access_view">
                                                        <input type="radio" class="status-radio" id="people" name="visible">
                                                        <label for="people">Select People</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="radio-wrap">
                                                <label class="col-form-label">Status</label>
                                                <div class="d-flex flex-wrap">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Access -->

                    </div>
                    <div class="submit-button text-end">
                        <a href="#" class="btn btn-light sidebar-close">Cancel</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#create_contact" class="btn btn-primary">Create</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Contact -->

<!-- Edit Contact -->
<div class="toggle-popup1">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Edit Contact</h4>
            <a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <div class="pro-create">
                <form action="<?php echo base_url();?>contacts">							
                    <div class="accordion-lists" id="list-accords">

                        <!-- Basic Info -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#edit-basic"><span><i class="ti ti-user-plus"></i></span>Basic Info</a>
                            <div class="accordion-collapse collapse show" id="edit-basic" data-bs-parent="#list-accords">
                                <div class="content-collapse">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-wrap">
                                                <div class="profile-upload">
                                                    <div class="profile-upload-img">
                                                        <span><i class="ti ti-photo"></i></span>
                                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt="img" class="preview1">
                                                        <button type="button" class="profile-remove">
                                                            <i class="ti ti-x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="profile-upload-content">
                                                        <label class="profile-upload-btn">
                                                            <i class="ti ti-file-broken"></i> Upload File 
                                                            <input type="file" class="input-img">
                                                        </label>
                                                        <p>JPG, GIF or PNG. Max size of 800K</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="Darlee">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Last Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"  value="Robertson">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Job Title <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="Facility Manager">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Company Name</label>
                                                <select class="select2">
                                                    <option>Choose</option>
                                                    <option selected>NovaWave LLC</option>
                                                    <option>BlueSky Industries</option>
                                                    <option>SilverHawk</option>
                                                    <option>SummitPeak</option>
                                                    <option>RiverStone Ventur</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-wrap">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                    <div class="status-toggle small-toggle-btn d-flex align-items-center">
                                                        <span class="me-2 label-text">Email Opt Out</span>
                                                        <input type="checkbox" id="user2" class="check" checked="">
                                                        <label for="user2" class="checktoggle"></label>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" value="robertson@example.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Phone 1 <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" value="1234567890">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Phone 2</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Fax <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <label class="col-form-label">Deals</label>
                                                    <a href="#" class="label-add add-popups"><i class="ti ti-square-rounded-plus"></i>Add New</a>
                                                </div>
                                                <select class="select2">
                                                    <option>Choose</option>
                                                    <option selected>Collins</option>
                                                    <option>Konopelski</option>
                                                    <option>Adams</option>
                                                    <option>Schumm</option>
                                                    <option>Wisozk</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Date of Birth</label>
                                                <div class="icon-form-end">
                                                    <span class="form-icon"><i class="ti ti-calendar-event"></i></span>
                                                    <input type="text" class="form-control datetimepicker" value="29-02-2020">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Reviews </label>
                                                <div class="icon-form-end">
                                                    <span class="form-icon"><i class="ti ti-star"></i></span>
                                                    <input type="text" class="form-control" placeholder="4.2" value="4.2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Owner</label>
                                                <select class="select-img">
                                                    <option data-image="assets/img/profiles/avatar-14.jpg" selected>Jerald</option>
                                                    <option data-image="assets/img/profiles/avatar-15.jpg">Guillory</option>
                                                    <option data-image="assets/img/profiles/avatar-16.jpg">Jami</option>
                                                    <option data-image="assets/img/profiles/avatar-13.jpg">Theresa</option>
                                                    <option data-image="assets/img/profiles/avatar-24.jpg">Espinosa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Tags </label>
                                                <input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput"  name="Label" value="Collab" >	
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Source <span class="text-danger">*</span></label>
                                                <select class="select2">
                                                    <option>Choose</option>
                                                    <option selected>Phone Calls</option>
                                                    <option>Social Media</option>
                                                    <option>Referral Sites</option>
                                                    <option>Web Analytics</option>
                                                    <option>Previous Purchases</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Industry <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option>Choose</option>
                                                    <option>Retail Industry</option>
                                                    <option selected>Banking</option>
                                                    <option>Hotels</option>
                                                    <option>Financial Services</option>
                                                    <option>Insurance</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Currency <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Language <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option>Choose</option>
                                                    <option selected>English</option>
                                                    <option>Arabic</option>
                                                    <option>Chinese</option>
                                                    <option>Hindi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-wrap mb-0">
                                                <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Basic Info -->

                        <!-- Address Info -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#edit-address"><span><i class="ti ti-map-pin-cog"></i></span>Address Info</a>
                            <div class="accordion-collapse collapse" id="edit-address" data-bs-parent="#list-accords">
                                <div class="content-collapse">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Street Address </label>
                                                <input type="text" class="form-control" value="22, Ave Street">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">City </label>
                                                <input type="text" class="form-control" value="Denver">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">State / Province </label>
                                                <input type="text" class="form-control" value="Colorado">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap mb-wrap">
                                                <label class="col-form-label">Country</label>
                                                <select class="select">
                                                    <option>Choose</option>
                                                    <option>India</option>
                                                    <option selected>USA</option>
                                                    <option>France</option>
                                                    <option>UK</option>
                                                    <option>UAE</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap mb-0">
                                                <label class="col-form-label">Zipcode </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>	
                        <!-- /Address Info -->		

                        <!-- Social Profile -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#edit-social"><span><i class="ti ti-social"></i></span>Social Profile</a>
                            <div class="accordion-collapse collapse" id="edit-social" data-bs-parent="#list-accords">
                                <div class="content-collapse">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Facebook</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Skype </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Linkedin </label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Twitter</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap mb-wrap">
                                                <label class="col-form-label">Whatsapp</label>
                                                <input type="text" class="form-control" value="1234567890">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap mb-0">
                                                <label class="col-form-label">Instagram</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Social Profile -->

                        <!-- Access -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#edit-access"><span><i class="ti ti-accessible"></i></span>Access</a>
                            <div class="accordion-collapse collapse" id="edit-access" data-bs-parent="#list-accords">
                                <div class="content-collapse">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="radio-wrap form-wrap">
                                                <label class="col-form-label">Visibility</label>
                                                <div class="d-flex flex-wrap">
                                                    <div class="radio-btn">
                                                        <input type="radio" class="status-radio" id="edit-public" name="visible">
                                                        <label for="edit-public">Public</label>
                                                    </div>
                                                    <div class="radio-btn">
                                                        <input type="radio" class="status-radio" id="edit-private" name="visible">
                                                        <label for="edit-private">Private</label>
                                                    </div>
                                                    <div class="radio-btn" data-bs-toggle="modal" data-bs-target="#access_view">
                                                        <input type="radio" class="status-radio" id="edit-people" name="visible">
                                                        <label for="edit-people">Select People</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="radio-wrap">
                                                <label class="col-form-label">Status</label>
                                                <div class="d-flex flex-wrap">
                                                    <div class="radio-btn">
                                                        <input type="radio" class="status-radio" id="edit-active" name="status" checked="">
                                                        <label for="edit-active">Active</label>
                                                    </div>
                                                    <div class="radio-btn">
                                                        <input type="radio" class="status-radio" id="edit-inactive" name="status">
                                                        <label for="edit-inactive">Inactive</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Access -->

                    </div>

                    <div class="submit-button text-end">
                        <a href="#" class="btn btn-light sidebar-close1">Cancel</a>
                        <a href="#" class="btn btn-primary">Save Changes</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Contact -->

<!-- Add New Deals -->
<div class="toggle-popup2">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Add New Deals</h4>
            <a href="#" class="sidebar-close2 toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <form action="<?php echo base_url();?>contacts" class="toggle-height">	
                <div class="pro-create">						
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">										
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="col-form-label">Pipeine <span class="text-danger">*</span></label>
                                </div>										
                                <select class="select2">
                                    <option>Choose</option>
                                    <option>Sales</option>
                                    <option>Marketing</option>
                                    <option>Calls</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Status <span class="text-danger">*</span></label>
                                <select class="select2">
                                    <option>Choose</option>
                                    <option>Open</option>
                                    <option>Lost</option>
                                    <option>Won</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Currency <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>$</option>
                                    <option>€</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Period <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Choose</option>
                                    <option>Days</option>
                                    <option>Month</option>
                                </select>
                            </div>
                        </div>	
                        <div class="col-lg-3 col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Period Value <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>	
                        <div class="col-md-12">		
                            <div class="form-wrap">
                                <label class="col-form-label">Contact <span class="text-danger">*</span></label>
                                <select class="multiple-img" multiple="multiple">
                                    <option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
                                    <option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
                                    <option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
                                    <option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
                                    <option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
                                </select>
                            </div>
                            <div class="form-wrap">
                                <label class="col-form-label">Project <span class="text-danger">*</span></label>
                                <select class="select" multiple="multiple">
                                    <option selected>Devops Design</option>
                                    <option selected>MargrateDesign</option>
                                    <option selected>UI for Chat</option>
                                    <option>Web Chat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Due Date <span class="text-danger">*</span></label>
                                <div class="icon-form">
                                      <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                                      <input type="text" class="form-control datetimepicker" placeholder="">
                                  </div>
                            </div>
                        </div>	
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Expected Closing Date <span class="text-danger">*</span></label>
                                <div class="icon-form">
                                      <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                                      <input type="text" class="form-control datetimepicker" placeholder="">
                                  </div>
                            </div>
                        </div>	
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Assignee <span class="text-danger">*</span></label>
                                <select class="multiple-img" multiple="multiple">
                                    <option data-image="assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
                                    <option data-image="assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
                                    <option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
                                    <option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
                                    <option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Follow Up Date <span class="text-danger">*</span></label>												
                                <div class="icon-form">
                                      <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                                      <input type="text" class="form-control datetimepicker" placeholder="">
                                  </div>
                            </div>
                        </div>	
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Source <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Google</option>
                                    <option>Social Media</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Tags <span class="text-danger">*</span></label>
                                <input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Collab, Rated" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Priority <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Highy</option>
                                    <option>Low</option>
                                    <option>Medium</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                <div class="summernote"></div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-button text-end">
                        <a href="#" class="btn btn-light sidebar-close2">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add New Deals -->

<!-- Delete Contact -->
<div class="modal custom-modal fade" id="delete_contact" role="dialog">
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
                    <h3>Remove Contacts?</h3>
                    <p class="del-info">Are you sure you want to remove contact you selected.</p>
                    <div class="col-lg-12 text-center modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <a href="<?php echo base_url();?>contacts" class="btn btn-danger">Yes, Delete it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Contact -->

<!-- Create Contact -->
<div class="modal custom-modal fade" id="create_contact" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 m-0 justify-content-end">
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="success-message text-center">
                    <div class="success-popup-icon bg-light-blue">
                        <i class="ti ti-user-plus"></i>
                    </div>
                    <h3>Contact Created Successfully!!!</h3>
                    <p>View the details of contact, created</p>
                    <div class="col-lg-12 text-center modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <a href="<?php echo base_url();?>contact-details" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Create Contact -->

<!-- Add New View -->
<div class="modal custom-modal fade" id="save_view" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New View</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>contacts">
                    <div class="form-wrap">
                        <label class="col-form-label">View Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="modal-btn text-end">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-danger">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add New View -->

<!-- Access -->
<div class="modal custom-modal fade" id="access_view" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Access For</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>contacts">	
                    <div class="form-wrap icon-form">
                        <span class="form-icon"><i class="ti ti-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="access-wrap">
                        <ul>					
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="">
                                        <a href="#">Darlee Robertson</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt="">
                                        <a href="#">Sharon Roy</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt="">
                                        <a href="#">Vaughan</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-01.jpg" alt="">
                                        <a href="#">Jessica</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg" alt="">
                                        <a href="#">Carol Thomas</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-22.jpg" alt="">
                                        <a href="#">Dawn Mercha</a>
                                    </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-btn text-end">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Access -->

</div>
<!-- /Main Wrapper -->
<?= $this->include('partials/vendor-scripts') ?>
<!-- Profile Upload JS -->
<script src="<?php echo base_url();?>assets/js/profile-upload.js"></script>
<!-- Summernote JS -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
</body>
</html>