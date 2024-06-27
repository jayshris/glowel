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

            </div>
        </div>

        <div class="row">
                <div class="col-xl-6">
                    <div class="card analytics-card">
                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                            <h3>
                                <i class="ti ti-grip-vertical"></i> Recently Created Contacts
                            </h3>
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 3 months</option>
                                            <option>Last 6 months</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table dataTable custom-table mb-0" id="analytic-contact">
                                    <thead>
                                        <tr>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Created at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card analytics-card">
                        <div class="card-header d-flex justify-content-between card-selectsview flex-wrap">
                            <h3 class="card-title"><i class="ti ti-grip-vertical"></i>Won Deals Stage</h3>
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <select class="select">
                                            <option>Marketing Pipeline</option>
                                            <option>Pipeline</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 15 days</option>
                                            <option>Last 7 days</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div id="won-chart"></div>
                        </div>
                    </div>
                    <div class="card analytics-card">
                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                            <h3><i class="ti ti-grip-vertical"></i>Recently Created Deals</h3>
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 3 months</option>
                                            <option>Last 6 months</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-nowrap custom-table mb-0" id="analytic-deal">
                                    <thead>
                                        <tr>
                                            <th>Deal Name</th>
                                            <th>Stage</th>
                                            <th>Deal Value</th>
                                            <th>Probability</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card analytics-card">
                        <div class="card-header d-flex justify-content-between card-selectsview flex-wrap">
                            <h3 class="card-title"><i class="ti ti-grip-vertical"></i>Lost Leads Stage</h3>
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <select class="select">
                                            <option>Marketing Pipeline</option>
                                            <option>Pipeline</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 15 days</option>
                                            <option>Last 7 days</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div id="last-chart-2"></div>
                        </div>
                    </div>
                    <div class="card analytics-card">
                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                            <h3>
                                <i class="ti ti-grip-vertical"></i>Leads By Stage
                            </h3>
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <select class="select">
                                            <option>Sales Pipeline</option>
                                            <option>Marketing Pipeline</option>
                                        </select>
                                    </li>
                                    <li class="form-wrap mb-0">
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 3 months</option>
                                            <option>Last 6 months</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div id="leads-chart"></div>
                        </div>
                    </div>
                    <div class="card analytics-card">
                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                            <h3><i class="ti ti-grip-vertical"></i>Recently Added Companies</h3>
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 3 months</option>
                                            <option>Last 6 months</option>
                                        </select>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i> Add Company</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table custom-table mb-0" id="analytic-company">
                                    <thead>
                                        <tr>
                                            <th>Company Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Created at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card analytics-card">
                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                            <h3><i class="ti ti-grip-vertical"></i>Deals By Stage</h3>
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <select class="select">
                                            <option>Sales Pipeline</option>
                                            <option>Marketing Pipeline</option>
                                        </select>
                                    </li>
                                    <li class="form-wrap mb-0">
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 3 months</option>
                                            <option>Last 6 months</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div id="deals-chart"></div>
                        </div>
                    </div>
                    <div class="card analytics-card">
                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                            <h3><i class="ti ti-grip-vertical"></i>Activities</h3>
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 3 months</option>
                                            <option>Last 6 months</option>
                                        </select>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-primary add-popups"><i class="ti ti-square-rounded-plus"></i> Add New Activity</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="activities-list">
                                <ul>
                                    <li>
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="activity-name">
                                                    <h5>We scheduled a meeting for next week</h5>
                                                    <p>Due Date : 10 Feb 2024, 09:00 am </p>
                                                    <span class="badge activity-badge bg-purple"><i class="ti ti-user-share"></i>Meeting</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="user-activity">
                                                    <span>
                                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="">
                                                    </span>
                                                    <h6>Darlee Robertson</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap mb-0">
                                                    <select class="select">
                                                        <option>Inprogress</option>
                                                        <option>Completed</option>
                                                        <option>Cancelled</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="activity-name">
                                                    <h5>Regarding latest updates in project	</h5>
                                                    <p>Due date :  29 Sep 2023, 08:20 am</p>
                                                    <span class="badge activity-badge bg-warning"><i class="ti ti-mail"></i>Email</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="user-activity">
                                                    <span>
                                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-22.jpg" alt="">
                                                    </span>
                                                    <h6>Dawn Mercha</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap mb-0">
                                                    <select class="select">
                                                        <option>Inprogress</option>
                                                        <option>Completed</option>
                                                        <option>Cancelled</option>
                                                    </select>
                                                </div>
                                            </div>	
                                        </div>										
                                    </li>
                                    <li>
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="activity-name">
                                                    <h5>Call John and discuss about project</h5>
                                                    <p>Due date :  05 Oct 2023, 10:35 am</p>
                                                    <span class="badge activity-badge bg-blue"><i class="ti ti-subtask"></i>Task</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="user-activity">
                                                    <span>
                                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg" alt="">
                                                    </span>
                                                    <h6>Carol Thomas</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap mb-0">
                                                    <select class="select">
                                                        <option>Inprogress</option>
                                                        <option>Completed</option>
                                                        <option>Cancelled</option>
                                                    </select>
                                                </div>
                                            </div>	
                                        </div>										
                                    </li>
                                    <li>
                                        <div class="row align-items-center">
                                            <div class="col-md-5">
                                                <div class="activity-name">
                                                    <h5>Discussed budget proposal with Edwin</h5>
                                                    <p>Due date :  16 Oct 2023, 04:40 pm</p>
                                                    <span class="badge activity-badge bg-green"><i class="ti ti-phone"></i>Calls</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="user-activity">
                                                    <span>
                                                        <img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt="">
                                                    </span>
                                                    <h6>Sharon Roy</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-wrap mb-0">
                                                    <select class="select">
                                                        <option>Inprogress</option>
                                                        <option>Completed</option>
                                                        <option>Cancelled</option>
                                                    </select>
                                                </div>
                                            </div>	
                                        </div>										
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card analytics-card">
                        <div class="card-header d-flex justify-content-between card-selectsview flex-wrap">
                            <h3 class="card-title"><i class="ti ti-grip-vertical"></i>Lost Leads Stage</h3>
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <select class="select">
                                            <option>Marketing Pipeline</option>
                                            <option>Pipeline</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 15 days</option>
                                            <option>Last 7 days</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div id="last-chart"></div>
                        </div>
                    </div>
                    <div class="card analytics-card">
                        <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                            <h3>
                                <i class="ti ti-grip-vertical"></i>Recently Created Leads
                            </h3>
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 3 months</option>
                                            <option>Last 6 months</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table custom-table mb-0" id="analytic-lead">
                                    <thead>
                                        <tr>
                                            <th>Lead Name</th>
                                            <th>Company Name</th>
                                            <th>Phone</th>
                                            <th>Lead Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card analytics-card">
                        <div class="card-header d-flex justify-content-between card-selectsview flex-wrap">
                            <h3 class="card-title"><i class="ti ti-grip-vertical"></i>Recently Created Campaign</h3>
                            <div class="card-select">
                                <ul>
                                    <li>
                                        <select class="select">
                                            <option>Last 30 days</option>
                                            <option>Last 15 days</option>
                                            <option>Last 7 days</option>
                                        </select>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-primary edit-popup"><i class="ti ti-square-rounded-plus"></i> Add Pipeline</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="campaign-card">
                                <ul>
                                    <li class="campaign-wrap">
                                        <div class="campaign-info">
                                            <div class="campaign-name">
                                                <h5>Distribution</h5>
                                                <p>Public Relations</p>
                                            </div>
                                            <ul class="list-progress">
                                                <li>
                                                    <h6>30.5%</h6>
                                                    <p>Opened</p>
                                                </li>
                                                <li>
                                                    <h6>20.5%</h6>
                                                    <p>Closed</p>
                                                </li>
                                                <li>
                                                    <h6>30.5%</h6>
                                                    <p>Unsubscribe</p>
                                                </li>
                                                <li>
                                                    <h6>70.5%</h6>
                                                    <p>Delivered</p>
                                                </li>
                                                <li>
                                                    <h6>35.0%</h6>
                                                    <p>Conversation</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="campaign-action">
                                            <div class="campaign-date">
                                                <span class="badge badge-pill badge-status bg-danger">Bounced</span>
                                                <p>Due Date : 25 Sep 2023</p>
                                            </div>
                                            <ul class="project-mem">
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-14.jpg" alt="img"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-15.jpg" alt="img"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg" alt="img"></a>
                                                </li>
                                                <li class="more-set"><a href="#">+03</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="campaign-wrap">
                                        <div class="campaign-info">
                                            <div class="campaign-name">
                                                <h5>Pricing</h5>
                                                <p>Social Marketing</p>
                                            </div>
                                            <ul class="list-progress">
                                                <li>
                                                    <h6>42.5%</h6>
                                                    <p>Opened</p>
                                                </li>
                                                <li>
                                                    <h6>38.2%</h6>
                                                    <p>Closed</p>
                                                </li>
                                                <li>
                                                    <h6>48.8%</h6>
                                                    <p>Unsubscribe</p>
                                                </li>
                                                <li>
                                                    <h6>62.7%</h6>
                                                    <p>Delivered</p>
                                                </li>
                                                <li>
                                                    <h6>22.5%</h6>
                                                    <p>Conversation</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="campaign-action">
                                            <div class="campaign-date">
                                                <span class="badge badge-pill badge-status bg-green">Running</span>
                                                <p>Due Date : 14 Oct 2023</p>
                                            </div>
                                            <ul class="project-mem">
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-14.jpg" alt="img"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-15.jpg" alt="img"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg" alt="img"></a>
                                                </li>
                                                <li class="more-set"><a href="#">+04</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="campaign-wrap">
                                        <div class="campaign-info">
                                            <div class="campaign-name">
                                                <h5>Merchandising</h5>
                                                <p>Content Marketing</p>
                                            </div>
                                            <ul class="list-progress">
                                                <li>
                                                    <h6>52.5%</h6>
                                                    <p>Opened</p>
                                                </li>
                                                <li>
                                                    <h6>29.3%</h6>
                                                    <p>Closed</p>
                                                </li>
                                                <li>
                                                    <h6>62.8%</h6>
                                                    <p>Unsubscribe</p>
                                                </li>
                                                <li>
                                                    <h6>71.3%</h6>
                                                    <p>Delivered</p>
                                                </li>
                                                <li>
                                                    <h6>39.5%</h6>
                                                    <p>Conversation</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="campaign-action">
                                            <div class="campaign-date">
                                                <span class="badge badge-pill badge-status bg-info">Paused</span>
                                                <p>Due Date : 14 Oct 2023</p>
                                            </div>
                                            <ul class="project-mem">
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-14.jpg" alt="img"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-15.jpg" alt="img"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg" alt="img"></a>
                                                </li>
                                                <li class="more-set"><a href="#">+06</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="campaign-wrap">
                                        <div class="campaign-info">
                                            <div class="campaign-name">
                                                <h5>Repeat Customers</h5>
                                                <p>Rebranding</p>
                                            </div>
                                            <ul class="list-progress">
                                                <li>
                                                    <h6>17.5%</h6>
                                                    <p>Opened</p>
                                                </li>
                                                <li>
                                                    <h6>49.5%</h6>
                                                    <p>Closed</p>
                                                </li>
                                                <li>
                                                    <h6>35.2%</h6>
                                                    <p>Unsubscribe</p>
                                                </li>
                                                <li>
                                                    <h6>54.8%</h6>
                                                    <p>Delivered</p>
                                                </li>
                                                <li>
                                                    <h6>60.5%</h6>
                                                    <p>Conversation</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="campaign-action">
                                            <div class="campaign-date">
                                                <span class="badge badge-pill badge-status bg-success">Success</span>
                                                <p>Due Date : 29 Oct 2023</p>
                                            </div>
                                            <ul class="project-mem">
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-14.jpg" alt="img"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-15.jpg" alt="img"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg" alt="img"></a>
                                                </li>
                                                <li class="more-set"><a href="#">+02</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
<!-- /Page Wrapper -->

<!-- Add Company -->
<div class="toggle-popup">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Add New Company</h4>
            <a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <div class="pro-create">
                <form action="<?php echo base_url();?>analytics">							
                    <div class="accordion-lists" id="list-accord">

                        <!-- Basic Info -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#basic"><span><i class="ti ti-user-plus"></i></span>Basic Info</a>
                            <div class="accordion-collapse collapse show" id="basic" data-bs-parent="#list-accord">
                                <div class="content-collapse">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="profile-pic-upload">
                                                <div class="profile-pic">
                                                    <span><i class="ti ti-photo"></i></span>
                                                </div>
                                                <div class="upload-content">
                                                    <div class="upload-btn">
                                                        <input type="file">
                                                        <span>
                                                            <i class="ti ti-file-broken"></i>Upload File
                                                        </span>
                                                    </div>
                                                    <p>JPG, GIF or PNG. Max size of 800K</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Company Name</label>
                                                <input type="text" class="form-control">
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
                                                <label class="col-form-label">Website <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Ratings  </label>
                                                <div class="icon-form-end">
                                                    <span class="form-icon"><i class="ti ti-star"></i></span>
                                                    <input type="text" class="form-control" placeholder="4.2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap img-select">
                                                <label class="col-form-label">Owner</label>
                                                <select class="select2">
                                                    <option>Jerald</option>
                                                    <option>Guillory</option>
                                                    <option>Jami</option>
                                                    <option>Theresa</option>
                                                    <option>Espinosa</option>
                                                </select>
                                                <span class="select-box-img avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-14.jpg" alt=""></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Tags </label>
                                                <input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Tag1" >	
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Deals <span class="text-danger">*</span></label>
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
                                        <div class="col-md-12">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Contact <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option>Choose</option>
                                                    <option>Darlee Robertson</option>
                                                    <option>Sharon Roy</option>
                                                    <option>Vaughan</option>
                                                    <option>Jessica</option>
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
                                            <div class="form-wrap mb-wrap">
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
                                            <div class="form-wrap mb-wrap">
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
                        <button type="submit" data-bs-toggle="modal" data-bs-target="#create_contact" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Company -->

<!-- Add New Pipeline -->
<div class="toggle-popup1">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Add New Pipeline</h4>
            <a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <div class="toggle-height">
                <div class="pro-create">
                    <div class="form-wrap">
                        <label class="col-form-label">Pipeline Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-wrap">
                        <h5 class="form-title">Pipeline Stages</h5>
                        <div class="pipeline-listing">
                            <div class="pipeline-item">
                                <p><i class="ti ti-grip-vertical"></i> Inpipeline</p>
                                <div class="action-pipeline">
                                    <a href="#"><i class="ti ti-edit text-blue"></i>Edit</a>
                                    <a href="#"><i class="ti ti-trash text-danger"></i>Delete</a>
                                </div>
                            </div>
                            <div class="pipeline-item">
                                <p><i class="ti ti-grip-vertical"></i> Follow Up</p>
                                <div class="action-pipeline">
                                    <a href="#"><i class="ti ti-edit text-blue"></i>Edit</a>
                                    <a href="#"><i class="ti ti-trash text-danger"></i>Delete</a>
                                </div>
                            </div>
                            <div class="pipeline-item">
                                <p><i class="ti ti-grip-vertical"></i> Schedule Service</p>
                                <div class="action-pipeline">
                                    <a href="#"><i class="ti ti-edit text-blue"></i>Edit</a>
                                    <a href="#"><i class="ti ti-trash text-danger"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-wrap">
                        <h5 class="form-title">Access</h5>
                        <div class="d-flex flex-wrap access-item nav">
                            <div class="radio-btn" data-bs-toggle="tab" data-bs-target="#all">
                                <input type="radio" class="status-radio" id="all" name="status" checked="">
                                <label for="all">All</label>
                            </div>
                            <div class="radio-btn" data-bs-toggle="tab" data-bs-target="#select-person">
                                <input type="radio" class="status-radio" id="select" name="status">
                                <label for="select">Select Person</label>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="select-person">
                                <div class="access-wrapper">
                                    <div class="access-view">
                                        <div class="access-img">
                                            <img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt="Image">Vaughan
                                        </div>
                                        <a href="#">Remove</a>
                                    </div>
                                    <div class="access-view">
                                        <div class="access-img">
                                            <img src="<?php echo base_url();?>assets/img/profiles/avatar-01.jpg" alt="Image">Jessica
                                        </div>
                                        <a href="#">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit-button text-end">
                    <a href="#" class="btn btn-light sidebar-close1">Cancel</a>
                    <a href="<?php echo base_url();?>analytics" class="btn btn-primary">Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add New Pipeline -->

<!-- Add New Activity -->
<div class="toggle-popup2">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Add New Activity</h4>
            <a href="#" class="sidebar-close2 toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <form action="<?php echo base_url();?>analytics" class="toggle-height">
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
                                <select class="multiple-img" multiple="multiple">
                                    <option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
                                    <option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
                                    <option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
                                    <option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
                                    <option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
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
                    <a href="#" class="btn btn-light sidebar-close2">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add New Activity -->

</div>
<!-- /Main Wrapper -->

<?= $this->include('partials/vendor-scripts') ?>
<!-- Apexchart JS -->
<script src="<?php echo base_url();?>assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/apexchart/chart-data.js"></script>
<!-- Summernote JS -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
</body>
</html>