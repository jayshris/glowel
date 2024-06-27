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
                                        <input type="text" class="form-control" placeholder="Search Activity">
                                    </div>							
                                </div>	
                                <div class="col-md-7 col-sm-8">					
                                    <div class="export-list text-sm-end">
                                        <ul>								
                                            <li>
                                                <a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add New Activity</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Search -->

                        <!-- Filter -->
                        <div class="filter-section filter-flex">
                            <div class="activity-title">
                                <h4>All Activity</h4>
                                <div class="active-list">													
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url();?>activity-calls" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Calls"><i class="ti ti-phone"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>activity-mail"><i class="ti ti-mail" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Mail"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>activity-task" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Task"><i class="ti ti-subtask"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>activity-meeting" class="active" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Meeting"><i class="ti ti-user-share"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-list">
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
                                        <div class="manage-dropdwon">
                                            <a href="javascript:void(0);" class="btn btn-purple-light"  data-bs-toggle="dropdown"  data-bs-auto-close="false"><i class="ti ti-columns-3"></i>Manage Columns</a>
                                            <div class="dropdown-menu  dropdown-menu-xl-end">
                                                <h4>Want to manage datatables?</h4>
                                                <p>Please drag and drop your column to reorder your table and enable see option as you want.</p>
                                                <ul>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>Title</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-name" class="check">
                                                            <label for="col-name" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>Activity Type</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-phone" class="check">
                                                            <label for="col-phone" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>Due Date</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-email" class="check">
                                                            <label for="col-email" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>Owner</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-tag" class="check">
                                                            <label for="col-tag" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>Created at</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-loc" class="check">
                                                            <label for="col-loc" class="checktoggle"></label>
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
                                                                <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Title</a>
                                                            </div>
                                                            <div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
                                                                <div class="filter-content-list">
                                                                    <div class="form-wrap icon-form">
                                                                        <span class="form-icon"><i class="ti ti-search"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Search Name">
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
                                                                                <h5>We scheduled a meeting</h5>
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
                                                                                <h5>Store and manage contact</h5>
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
                                                                                <h5>Built landing pages</h5>
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
                                                                                <h5>Discussed budget proposal</h5>
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
                                                                                <h5>Discussed about team</h5>
                                                                            </div>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-set-content">
                                                            <div class="filter-set-content-head">
                                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Activity Type</a>
                                                            </div>
                                                            <div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
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
                                                                                <h5>Meeting</h5>
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
                                                                        <li>
                                                                            <div class="filter-checks">
                                                                                <label class="checkboxs">
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmarks"></span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="collapse-inside-text">
                                                                                <h5>Task</h5>
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
                                                                                <h5>Email</h5>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-set-content">
                                                            <div class="filter-set-content-head">
                                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Due Date </a>
                                                            </div>
                                                            <div class="filter-set-contents accordion-collapse collapse" id="Status" data-bs-parent="#accordionExample">
                                                                <div class="filter-content-list">
                                                                    <div class="form-wrap icon-form">
                                                                        <span class="form-icon"><i class="ti ti-search"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Search Date">
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
                                                                                <h5>25 Sep 2023, 12:12 pm</h5>
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
                                                                                <h5>29 Sep 2023, 04:12 pm</h5>
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
                                                                                <h5>11 Oct 2023, 05:00 pm</h5>
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
                                                                                <h5>19 Oct 2023, 02:35 pm</h5>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-set-content">
                                                            <div class="filter-set-content-head">
                                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Owner</a>
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
                                                                                <h5>Monty Beer</h5>
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
                                                                                <h5>Bradtke</h5>
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
                                                                                <h5>Swaniawski</h5>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-set-content">
                                                            <div class="filter-set-content-head">
                                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsestatus" aria-expanded="false" aria-controls="collapsestatus">Created Date</a>
                                                            </div>
                                                            <div class="filter-set-contents accordion-collapse collapse" id="collapsestatus" data-bs-parent="#accordionExample">
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
                                                                                <h5>22 Sep 2023, 10:14 am</h5>
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
                                                                                <h5>27 Sep 2023, 03:26 pm</h5>
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
                                                                                <h5>03 Oct 2023, 03:53 pm</h5>
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
                                                                <a href="<?php echo base_url();?>activity-meeting" class="btn btn-primary">Filter</a>
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

                        <!-- Activity List -->
                        <div class="table-responsive custom-table">
                            <table class="table" id="activity-meeting">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="no-sort">
                                            <label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
                                        </th>
                                        <th>Title</th>
                                        <th>Activity Type</th>
                                        <th>Due Date</th>
                                        <th>Owner</th>
                                        <th>Created At</th>
                                        <th>Action</th>
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
                        <!-- /Activity List -->

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- /Page Wrapper -->

<!-- Add New Activity -->
<div class="toggle-popup">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Add New Activity</h4>
            <a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <form action="<?php echo base_url();?>activity-meeting" class="toggle-height">
                <div class="pro-create">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Activity Type <span class="text-danger">*</span></label>
                                <ul class="radio-activity">
                                    <li>
                                        <div class="active-type">
                                            <input type="radio" id="call1" name="status" checked="">
                                             <label for="call1"><i class="ti ti-phone"></i>Calls</label>
                                         </div>
                                    </li>
                                    <li>
                                        <div class="active-type">
                                            <input type="radio" id="mail1" name="status">
                                             <label for="mail1"><i class="ti ti-mail"></i>Email</label>
                                         </div>
                                    </li>
                                    <li>
                                        <div class="active-type">
                                            <input type="radio" id="task1" name="status">
                                             <label for="task1"><i class="ti ti-subtask"></i>Task</label>
                                         </div>
                                    </li>
                                    <li>
                                        <div class="active-type">
                                            <input type="radio" id="shares1" name="status">
                                             <label for="shares1"><i class="ti ti-user-share"></i>Meeting</label>
                                         </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-form-label">Due Date <span class="text-danger">*</span></label>
                            <div class="form-wrap icon-form">
                                  <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                                   <input type="text" class="form-control datetimepicker">
                               </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-form-label">Time <span class="text-danger">*</span></label>
                            <div class="form-wrap icon-form">
                                  <span class="form-icon"><i class="ti ti-clock-hour-10"></i></span>
                                   <input type="text" class="form-control datetimepicker-time">
                               </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-form-label">Reminder <span class="text-danger">*</span></label>
                            <div class="form-wrap icon-form">
                                  <span class="form-icon"><i class="ti ti-bell-ringing"></i></span>
                                   <input type="text" class="form-control">
                               </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="form-wrap w-100"> 
                                    <label class="col-form-label">&nbsp;</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Minutes</option>
                                        <option>Hours</option>
                                    </select>
                                </div>
                                <div class="form-wrap time-text">
                                    <label class="col-form-label">&nbsp;</label>
                                    <p>Before Due</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Owner <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Hendry</option>
                                    <option>Bradtke</option>
                                    <option>Sally</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Guests <span class="text-danger">*</span></label>
                                <select class="select" multiple="multiple">
                                    <option selected>Darlee Robertson</option>
                                    <option>Collins</option>
                                    <option>Sally</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                <div class="summernote"></div>
                            </div>
                            <div class="form-wrap">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="col-form-label">Deals</label>
                                    <a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_deal"><i class="ti ti-square-rounded-plus"></i>Add New</a>
                                </div>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Collins</option>
                                    <option>Konopelski	</option>
                                    <option>Adams</option>
                                </select>
                            </div>
                            <div class="form-wrap">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="col-form-label">Contacts</label>
                                    <a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_contacts"><i class="ti ti-square-rounded-plus"></i>Add New</a>
                                </div>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Collins</option>
                                    <option>Konopelski	</option>
                                    <option>Adams</option>
                                </select>
                            </div>
                            <div class="form-wrap">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="col-form-label">Companies</label>
                                    <a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_company"><i class="ti ti-square-rounded-plus"></i>Add New</a>
                                </div>
                                <select class="select">
                                    <option>Select</option>
                                    <option>NovaWave LLC</option>
                                    <option>SilverHawk</option>
                                    <option>HarborView</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit-button text-end">
                    <a href="#" class="btn btn-light sidebar-close">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add New Activity -->

<!-- Edit Activity -->
<div class="toggle-popup1">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <div>
                <h4 class="mb-1">We scheduled a meeting for next week</h4>
                <p>Created At: September 28, 2023 01:21 - Hendry</p>
            </div>
            <a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <form action="<?php echo base_url();?>activity-meeting" class="toggle-height">
                <div class="pro-create">
                    <div class="tab-activity">
                        <ul class="nav">
                            <li>
                                <a href="#" data-bs-toggle="tab" data-bs-target="#activity" class="active">Activity</a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tab" data-bs-target="#comments" >Comments<span>1</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="comments">
                            <div class="comment-wrap">
                                <h6>The best way to get a project done faster is to start sooner. A goal without a timeline is just a dream.The goal you set must be challenging. At the same time, it should be realistic and attainable, not impossible to reach.</h6>
                                <p>Commented by <span>Aeron</span> on 15 Sep 2023, 11:15 pm</p>
                            </div>
                        </div>
                        <div class="tab-pane show active" id="activity">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Activity Type <span class="text-danger">*</span></label>
                                        <ul class="radio-activity">
                                            <li>
                                                <div class="active-type">
                                                    <input type="radio" id="call" name="status" checked="">
                                                     <label for="call"><i class="ti ti-phone"></i>Calls</label>
                                                 </div>
                                            </li>
                                            <li>
                                                <div class="active-type">
                                                    <input type="radio" id="mail" name="status">
                                                     <label for="mail"><i class="ti ti-mail"></i>Email</label>
                                                 </div>
                                            </li>
                                            <li>
                                                <div class="active-type">
                                                    <input type="radio" id="task" name="status">
                                                     <label for="task"><i class="ti ti-subtask"></i>Task</label>
                                                 </div>
                                            </li>
                                            <li>
                                                <div class="active-type">
                                                    <input type="radio" id="shares" name="status">
                                                     <label for="shares"><i class="ti ti-user-share"></i>Meeting</label>
                                                 </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label">Due Date <span class="text-danger">*</span></label>
                                    <div class="form-wrap icon-form">
                                          <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                                           <input type="text" class="form-control datetimepicker">
                                       </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label">Time <span class="text-danger">*</span></label>
                                    <div class="form-wrap icon-form">
                                          <span class="form-icon"><i class="ti ti-clock-hour-10"></i></span>
                                           <input type="text" class="form-control datetimepicker-time">
                                       </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="col-form-label">Reminder <span class="text-danger">*</span></label>
                                    <div class="form-wrap icon-form">
                                          <span class="form-icon"><i class="ti ti-bell-ringing"></i></span>
                                           <input type="text" class="form-control">
                                       </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="form-wrap w-100"> 
                                            <label class="col-form-label">&nbsp;</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Minutes</option>
                                                <option>Hours</option>
                                            </select>
                                        </div>
                                        <div class="form-wrap time-text">
                                            <label class="col-form-label">&nbsp;</label>
                                            <p>Before Due</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Owner <span class="text-danger">*</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Hendry</option>
                                            <option>Bradtke</option>
                                            <option>Sally</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Guests <span class="text-danger">*</span></label>
                                        <select class="select" multiple="multiple">
                                            <option selected>Darlee Robertson</option>
                                            <option>Collins</option>
                                            <option>Sally</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <label class="col-form-label">Description <span class="text-danger">*</span></label>
                                        <div class="summernote"></div>
                                    </div>
                                    <div class="form-wrap">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <label class="col-form-label">Deals</label>
                                            <a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_deal"><i class="ti ti-square-rounded-plus"></i>Add New</a>
                                        </div>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Collins</option>
                                            <option>Konopelski	</option>
                                            <option>Adams</option>
                                        </select>
                                    </div>
                                    <div class="form-wrap">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <label class="col-form-label">Contacts</label>
                                            <a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_contacts"><i class="ti ti-square-rounded-plus"></i>Add New</a>
                                        </div>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Collins</option>
                                            <option>Konopelski	</option>
                                            <option>Adams</option>
                                        </select>
                                    </div>
                                    <div class="form-wrap">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <label class="col-form-label">Companies</label>
                                            <a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_company"><i class="ti ti-square-rounded-plus"></i>Add New</a>
                                        </div>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>NovaWave LLC</option>
                                            <option>SilverHawk</option>
                                            <option>HarborView</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit-button text-end">
                    <a href="#" class="btn btn-light sidebar-close1">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Edit Activity -->

<!-- Delete Activity -->
<div class="modal custom-modal fade" id="delete_activity" role="dialog">
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
                    <h3>Remove Activity?</h3>
                    <p class="del-info">Are you sure you want to remove activity you selected.</p>
                    <div class="col-lg-12 text-center modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <a href="<?php echo base_url();?>activity-meeting" class="btn btn-danger">Yes, Delete it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Activity -->

<!-- Add Contacts -->
<div class="modal custom-modal fade" id="add_contacts" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Contacts</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>activity-meeting">	
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
<!-- /Add Contacts -->

<!-- Add Deals -->
<div class="modal custom-modal fade" id="add_deal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Deals</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>activity-meeting">	
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
                                        <a href="#">Collins</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <a href="#">Konopelski</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <a href="#">Adams</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <a href="#">Schumm</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <a href="#">Wisozk</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
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
<!-- /Add Deals -->

<!-- Add Company -->
<div class="modal custom-modal fade" id="add_company" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Company</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>activity-meeting">	
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
                                        <img src="<?php echo base_url();?>assets/img/icons/company-icon-01.svg" alt="">
                                        <a href="#">NovaWave LLC</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <img src="<?php echo base_url();?>assets/img/icons/company-icon-02.svg" alt="">
                                        <a href="#">BlueSky Industries</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <img src="<?php echo base_url();?>assets/img/icons/company-icon-03.svg" alt="">
                                        <a href="#">SilverHawk</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <img src="<?php echo base_url();?>assets/img/icons/company-icon-04.svg" alt="">
                                        <a href="#">SummitPeak</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <img src="<?php echo base_url();?>assets/img/icons/company-icon-05.svg" alt="">
                                        <a href="#">RiverStone Ventur</a>
                                    </span>
                                </label>
                            </li>				
                            <li class="select-people-checkbox">
                                <label class="checkboxs">
                                    <input type="checkbox">													
                                    <span class="checkmarks"></span>
                                    <span class="people-profile">
                                        <img src="<?php echo base_url();?>assets/img/icons/company-icon-06.svg" alt="">
                                        <a href="#">Bright Bridge Grp</a>
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
<!-- /Add Company -->

</div>
<!-- /Main Wrapper -->


<?= $this->include('partials/vendor-scripts') ?>
<!-- Summernote JS -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
</body>
</html>