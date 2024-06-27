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

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="page-title">Deals<span class="count-title">123</span></h4>
                        </div>
                        <div class="col-4 text-end">
                            <div class="head-icons">
                                <a href="<?php echo base_url()?>deals-kanban" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh">
                                    <i class="ti ti-refresh-dot"></i>
                                </a>
                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                                    <i class="ti ti-chevrons-up"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Filter -->
                <div class="filter-section filter-flex">
                    <div class="sortby-list">
                        <ul>
                            <li>
                                <div class="form-sorts dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"  data-bs-auto-close="false"><i class="ti ti-filter-share"></i>Filter</a>
                                    <div class="filter-dropdown-menu dropdown-menu  dropdown-menu-start">
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
                                                        <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Deals Name</a>
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
                                                                        <h5>Collins</h5>
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
                                                                        <h5>Konopelski</h5>
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
                                                                        <h5>Adams</h5>
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
                                                                        <h5>Gutkowski</h5>
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
                                                                        <h5>Walter</h5>
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
                                                                        <h5>Won</h5>
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
                                                                        <h5>Open</h5>
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
                                                                        <h5>Lost</h5>
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
                                                        <a href="<?php echo base_url()?>deals-kanban" class="btn btn-primary">Filter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-wrap icon-form">
                                    <span class="form-icon"><i class="ti ti-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search Deals">
                                </div>	
                            </li>
                        </ul>
                    </div>
                    <div class="filter-list">
                        <ul>
                            <li>
                                <div class="view-icons">
                                    <a href="<?php echo base_url()?>deals"><i class="ti ti-list-tree"></i></a>
                                    <a href="<?php echo base_url()?>deals-kanban" class="active"><i class="ti ti-grid-dots"></i></a>
                                </div>
                            </li>																	
                            <li>
                                <a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add Deals</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Filter -->

                <!-- Deals Kanban -->
                <div class="kanban-wrapper">
                    <div class="kanban-list-items">
                        <div class="kanban-list-head">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="kanban-title-head dot-success">
                                    <h5>Qualify To Buy</h5>
                                    <span>45 Leads - $15,44,540</span>
                                </div>
                                <div class="kanban-action-btns d-flex align-items-center">
                                    <a href="javascript:void(0);" class="plus-btn"><i class="ti ti-plus"></i></a>
                                    <div class="dropdown table-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item edit-popup" href="#"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deal"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="kanban-drag-wrap">
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-purple"></span>
                                        <div class="kanban-card-title">
                                            <a href="<?php echo base_url()?>deals-details"><span>HT</span></a>
                                            <h6><a href="<?php echo base_url()?>deals-details">Howell, Tremblay and Rath</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $03,50,000
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                darleeo@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 12445-47878
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                Newyork, United States
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Darlee Robertson</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>85%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i> 10 Jan 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-warning"></span>
                                        <div class="kanban-card-title">
                                            <a href="<?php echo base_url()?>deals-details"><span>RJ</span></a>
                                            <h6><a href="<?php echo base_url()?>deals-details">Robert, John and Carlos</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $02,10,000
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                sheron@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 12445-47878
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                Exeter, United States
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Sharon Roy</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>15%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i> 12 Jan 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-success"></span>
                                        <div class="kanban-card-title">
                                            <a href="<?php echo base_url()?>deals-details"><span>WS</span></a>
                                            <h6><a href="<?php echo base_url()?>deals-details">Wendy, Star and David</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $04,22,000
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                vau@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 12445-47878
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                Phoenix, United States
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Vaughan</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>95%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i> 14 Jan 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="kanban-list-items">
                        <div class="kanban-list-head">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="kanban-title-head dot-info">
                                    <h5>Contact Made</h5>
                                    <span>30 Leads - $19,94,938</span>
                                </div>
                                <div class="kanban-action-btns d-flex align-items-center">
                                    <a href="javascript:void(0);" class="plus-btn"><i class="ti ti-plus"></i></a>
                                    <div class="dropdown table-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item edit-popup" href="#"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deal"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="kanban-drag-wrap">
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-success"></span>
                                        <div class="kanban-card-title">
                                            <a href="<?php echo base_url()?>deals-details"><span>BR</span></a>
                                            <h6><a href="<?php echo base_url()?>deals-details">Byron, Roman and Bailey</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $02,45,000
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                jessica13@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 89351-90346
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                Chester, United States
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-01.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Jessica</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>47%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i> 06 Feb 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-purple"></span>
                                        <div class="kanban-card-title">
                                            <a href="<?php echo base_url()?>deals-details"><span>CH</span></a>
                                            <h6><a href="<?php echo base_url()?>deals-details">Robert, John and Carlos</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $01,17,000
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                caroltho3@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 78982-09163
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                Charlotte, United States
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Carol Thomas</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>98%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i> 15 Feb 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-danger"></span>
                                        <div class="kanban-card-title">
                                            <a href="<?php echo base_url()?>deals-details"><span>IC</span></a>
                                            <h6><a href="<?php echo base_url()?>deals-details">Irene, Charles and Wilston</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $02,12,000
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                dawnmercha@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 27691-89246
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                Bristol, United States
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-22.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Dawn Mercha</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>78%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i> 25 Jan 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="kanban-list-items">
                        <div class="kanban-list-head">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="kanban-title-head dot-warning">
                                    <h5>Presentation</h5>
                                    <span>25 Leads - $10,36.390</span>
                                </div>
                                <div class="kanban-action-btns d-flex align-items-center">
                                    <a href="javascript:void(0);" class="plus-btn"><i class="ti ti-plus"></i></a>
                                    <div class="dropdown table-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item edit-popup" href="#"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deal"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="kanban-drag-wrap">
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-warning"></span>
                                        <div class="kanban-card-title">
                                            <a href="deals-details"><span>HT</span></a>
                                            <h6><a href="deals-details">Jody, Powell and Cecil</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $01,84,043
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                rachel@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 17839-93617
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                Baltimore, United States
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-23.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Rachel Hampton</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>25%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i> 18 Mar 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-success"></span>
                                        <div class="kanban-card-title">
                                            <a href="<?php echo base_url()?>deals-details"><span>BL</span></a>
                                            <h6><a href="<?php echo base_url()?>deals-details">Bonnie, Linda and Mullin</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $09,35,189
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                jonelle@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 16739-47193
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                Coventry, United States
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-24.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Jonelle Curtiss</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>70%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i> 15 Feb 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-purple"></span>
                                        <div class="kanban-card-title">
                                            <a href="<?php echo base_url()?>deals-details"><span>CJ</span></a>
                                            <h6><a href="<?php echo base_url()?>deals-details">Carlos, Jones and <br> Jim</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $04,27,940
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                jonathan@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 18390-37153
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                Seattle
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-25.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Jonathan</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>45%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i> 30 Jan 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="kanban-list-items">
                        <div class="kanban-list-head">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="kanban-title-head dot-purple">
                                    <h5>Proposal Made</h5>
                                    <span>50 Leads - $18,83,013</span>
                                </div>
                                <div class="kanban-action-btns d-flex align-items-center">
                                    <a href="javascript:void(0);" class="plus-btn"><i class="ti ti-plus"></i></a>
                                    <div class="dropdown table-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item edit-popup" href="#"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deal"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="kanban-drag-wrap">
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-danger"></span>
                                        <div class="kanban-card-title">
                                            <a href="<?php echo base_url()?>deals-details"><span>FJ</span></a>
                                            <h6><a href="<?php echo base_url()?>deals-details">Freda,Jennfier and Thompson</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $04,17,593
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                sidney@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 11739-38135
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                London, United States
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-17.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Sidney Franks</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>59%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i>11 Apr 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-purple"></span>
                                        <div class="kanban-card-title">
                                            <a href="<?php echo base_url()?>deals-details"><span>BF</span></a>
                                            <h6><a href="<?php echo base_url()?>deals-details">Bruce, Faulkner and Lela</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $08,81,389
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                brook@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 19302-91043
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                Detroit, United States
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-26.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Brook</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>72%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i> 17 Apr 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="kanban-card">
                                    <div class="kanban-card-head">
                                        <span class="bar-design bg-warning"></span>
                                        <div class="kanban-card-title">
                                            <a href="<?php echo base_url()?>deals-details"><span>LP</span></a>
                                            <h6><a href="<?php echo base_url()?>deals-details">Lawrence, Patrick and Vandorn</a></h6>
                                        </div>
                                    </div>
                                    <div class="kanban-card-body">
                                        <ul>
                                            <li>
                                                <i class="ti ti-report-money"></i>
                                                $09,27,193
                                            </li>
                                            <li>
                                                <i class="ti ti-mail"></i>
                                                mickey@example.com
                                            </li>
                                            <li>
                                                <i class="ti ti-phone"></i>
                                                +1 17280-92016
                                            </li>
                                            <li>
                                                <i class="ti ti-map-pin-pin"></i>
                                                Manchester, United States
                                            </li>
                                        </ul>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="card-user-info">
                                                <a href="javascript:void(0);" class="avatar"><img src="<?php echo base_url();?>assets/img/profiles/avatar-15.jpg" alt=""></a>
                                                <a href="javascript:void(0);" class="user-name">Mickey</a>
                                            </div>
                                            <span class="badge bg-blue"><i class="ti ti-progress"></i>20%</span>
                                        </div>
                                    </div>
                                    <div class="kanban-card-footer d-flex align-items-center justify-content-between">
                                        <span><i class="ti ti-calendar-due"></i> 10 Feb 2024</span>
                                        <ul class="icons-social">
                                            <li><a href="#"><i class="ti ti-phone-check"></i></a></li>
                                            <li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
                                            <li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Deals Kanban -->

            </div>
        </div>

    </div>
</div>
<!-- /Page Wrapper -->

<!-- Add New Deals -->
<div class="toggle-popup">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Add New Deals</h4>
            <a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <form action="<?php echo base_url()?>deals-kanban" class="toggle-height">	
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
                                    <a href="#" class="label-add add-popups"><i class="ti ti-square-rounded-plus"></i>Add New</a>
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
                        <a href="#" class="btn btn-light sidebar-close">Cancel</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#create_contact" class="btn btn-primary">Create</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add New Deals -->

<!-- Edit Deals -->
<div class="toggle-popup1">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Edit Deals</h4>
            <a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <div class="pro-create">
                <form action="<?php echo base_url()?>deals-kanban">							
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="Collins">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="col-form-label">Pipeine <span class="text-danger">*</span></label>
                                    <a href="#" class="label-add add-popups"><i class="ti ti-square-rounded-plus"></i>Add New</a>
                                </div>	
                                <select class="select2">
                                    <option>Choose</option>
                                    <option selected>Sales</option>
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
                                    <option selected>Open</option>
                                    <option>Lost</option>
                                    <option>Won</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
                                <input class="form-control" type="text" value="$04,51,000">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Currency <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select</option>
                                    <option selected>$</option>
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
                                      <input type="text" class="form-control datetimepicker" value="26-09-2024">
                                  </div>
                            </div>
                        </div>	
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Expected Closing Date <span class="text-danger">*</span></label>
                                <div class="icon-form">
                                      <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                                      <input type="text" class="form-control datetimepicker" value="25-09-2024">
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
                                    <option selected>Social Media</option>
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
                                    <option selected>Low</option>
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
                        <a href="#" class="btn btn-light sidebar-close1">Cancel</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#create_contact" class="btn btn-primary">Create</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Deals -->

<!-- Delete Deal -->
<div class="modal custom-modal fade" id="delete_deal" role="dialog">
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
                    <h3>Remove Deal?</h3>
                    <p class="del-info">Are you sure you want to remove deal you selected.</p>
                    <div class="col-lg-12 text-center modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <a href="<?php echo base_url()?>deals-kanban" class="btn btn-danger">Yes, Delete it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Deal -->

<!-- Create Deal -->
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
                        <i class="ti ti-medal"></i>
                    </div>
                    <h3>Deal Created Successfully!!!</h3>
                    <p>View the details of deal, created</p>
                    <div class="col-lg-12 text-center modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <a href="<?php echo base_url()?>deals-details" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Create Deal -->

<!-- Add New Pipeline -->
<div class="toggle-popup2">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Add New Pipeline</h4>
            <a href="#" class="sidebar-close2 toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <form action="<?php echo base_url()?>deals" class="toggle-height">
                <div class="pro-create">
                    <div class="form-wrap">
                        <label class="col-form-label">Pipeline Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-wrap">
                        <div class="pipe-title d-flex align-items-center justify-content-between">
                            <h5 class="form-title">Pipeline Stages</h5>
                            <a href="#" class="add-stage" data-bs-toggle="modal" data-bs-target="#add_stage"><i class="ti ti-square-rounded-plus"></i>Add New</a>
                        </div>
                        <div class="pipeline-listing">
                            <div class="pipeline-item">
                                <p><i class="ti ti-grip-vertical"></i> Inpipeline</p>
                                <div class="action-pipeline">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
                                </div>
                            </div>
                            <div class="pipeline-item">
                                <p><i class="ti ti-grip-vertical"></i> Follow Up</p>
                                <div class="action-pipeline">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
                                </div>
                            </div>
                            <div class="pipeline-item">
                                <p><i class="ti ti-grip-vertical"></i> Schedule Service</p>
                                <div class="action-pipeline">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
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
                    <a href="#" class="btn btn-light sidebar-close2">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add New Pipeline -->

<!-- Delete Stage -->
<div class="modal custom-modal fade" id="delete_stage" role="dialog">
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
                    <h3>Remove Stage?</h3>
                    <p class="del-info">Are you sure you want to remove it.</p>
                    <div class="col-lg-12 text-center modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <a href="<?php echo base_url()?>deals" class="btn btn-danger">Yes, Delete it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Stage -->

<!-- Add New Stage -->
<div class="modal custom-modal fade" id="add_stage" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Stage</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url()?>deals">
                    <div class="form-wrap">
                        <label class="col-form-label">Stage Name *</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="modal-btn text-end">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-danger">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add New Stage -->

<!-- Edit Stage -->
<div class="modal custom-modal fade" id="edit_stage" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Stage</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url()?>deals">
                    <div class="form-wrap">
                        <label class="col-form-label">Stage Name *</label>
                        <input type="text" class="form-control" value="Inpipeline">
                    </div>
                    <div class="modal-btn text-end">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-danger">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Stage -->

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
                <form action="<?php echo base_url()?>deals-kanban">
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

</div>
<!-- /Main Wrapper -->
<?= $this->include('partials/vendor-scripts') ?>
<!-- Drag Card -->
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
<!-- Summernote JS -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
</body>
</html>