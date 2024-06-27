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
            <div class="col-md-12">

                <!-- Contact User -->
                <div class="contact-head">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <ul class="contact-breadcrumb">
                                <li><a href="<?php echo base_url();?>companies"><i class="ti ti-arrow-narrow-left"></i>Company</a></li>
                                <li>NovaWave LLC</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-sm-end">
                            <div class="contact-pagination">
                                <p>1 of 40</p>
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url();?>company-details"><i class="ti ti-chevron-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>company-details"><i class="ti ti-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-wrap">
                    <div class="contact-profile">
                        <div class="avatar company-avatar">									
                            <img src="<?php echo base_url();?>assets/img/icons/company-icon-01.svg" alt="Image">
                        </div>
                        <div class="name-user">
                            <h5>NovaWave LLC</h5>
                            <p><i class="ti ti-map-pin-pin me-1"></i>22, Ave Street, Newyork, USA</p>
                            <div class="badge-rate">
                                <p><i class="fa-solid fa-star"></i> 5.0</p>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-action">
                        <a href="#" class="btn-icon rating"><i class="fa-solid fa-star"></i></a>
                        <a href="#" class="btn btn-danger add-popup">
                            <i class="ti ti-circle-plus"></i>Add Deal
                        </a>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_compose">
                            <i class="ti ti-mail"></i>Send Email
                        </a>
                        <a href="<?php echo base_url();?>chat" class="btn-icon">
                            <i class="ti ti-brand-hipchat"></i>
                        </a>
                        <a href="#" class="btn-icon edit-popup"><i class="ti ti-edit-circle"></i></a>	
                        <div class="act-dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash text-danger"></i>Delete</a>
                            </div>
                        </div>
                    </div>	
                </div>
                <!-- /Contact User -->

            </div>

            <!-- Contact Sidebar -->
            <div class="col-xl-3 theiaStickySidebar">
                <div class="contact-sidebar">
                    <h6>Basic Information</h6>
                    <ul class="basic-info">
                        <li>
                            <span>
                                <i class="ti ti-mail"></i>
                            </span>
                            <p>NovaW@example.com</p>
                        </li>
                        <li>
                            <span>
                                <i class="ti ti-phone"></i>
                            </span>
                            <p>+1 12445-47878</p>
                        </li>
                        <li>
                            <span>
                                <i class="ti ti-calendar-exclamation"></i>
                            </span>
                            <p>Created on 5 Jan 2024, 10:30 am</p>
                        </li>
                    </ul>
                    <h6>Other Information</h6>
                    <ul class="other-info">
                        <li><span class="other-title">Language</span><span>Language</span></li>
                        <li><span class="other-title">Currency</span><span>United States dollar</span></li>
                        <li><span class="other-title">Last Modified</span><span>27 Sep 2023, 11:45 pm</span></li>
                        <li><span class="other-title">Source</span><span>Paid Campaign</span></li>
                    </ul>								
                    <h6>Tags</h6>
                    <ul class="tag-info">
                        <li>
                            <a href="javascript:void(0);" class="badge badge-tag badge-success-light">Collab</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="badge badge-tag badge-warning-light">Rated</a>
                        </li>
                    </ul>
                    <div class="con-sidebar-title">
                        <h6>Company</h6>
                        <a href="javascript:void(0);" class="com-add add-popups"><i class="ti ti-circle-plus me-1"></i>Add New</a>
                    </div>
                    <ul class="company-info com-info">
                        <li>
                            <span>
                                <img src="<?php echo base_url();?>assets/img/icons/company-icon-01.svg" alt="Image">
                            </span>
                            <div>
                                <h6>NovaWaveLLC</h6>
                                <p><i class="fa-solid fa-star"></i>3.5</p>
                            </div>
                        </li>
                        <li>
                            <span>
                                <img src="<?php echo base_url();?>assets/img/icons/company-icon-02.svg" alt="Image">
                            </span>
                            <div>
                                <h6>BlueSky Industries</h6>
                                <p><i class="fa-solid fa-star"></i>4.2</p>
                            </div>
                        </li>
                    </ul>
                    <h6>Social Profile</h6>
                    <ul class="social-info">
                        <li>
                            <a href="javascript:void(0);"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="fa-brands fa-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="fa-brands fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                    </ul>
                    <h6>Settings</h6>
                    <ul class="set-info">
                        <li>
                            <a href="javascript:void(0);"><i class="ti ti-share-2"></i>Share Company</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="ti ti-star"></i>Add to Favourite</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_contact"><i class="ti ti-trash-x"></i>Delete Company</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Contact Sidebar -->

            <!-- Contact Details -->
            <div class="col-xl-9">
                <div class="contact-tab-wrap">
                    <ul class="contact-nav nav">
                        <li>
                            <a href="#" data-bs-toggle="tab" data-bs-target="#activities" class="active"><i class="ti ti-alarm-minus"></i>Activities</a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="tab" data-bs-target="#notes"><i class="ti ti-notes"></i>Notes</a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="tab" data-bs-target="#calls"><i class="ti ti-phone"></i>Calls</a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="tab" data-bs-target="#files"><i class="ti ti-file"></i>Files</a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="tab" data-bs-target="#email"><i class="ti ti-mail-check"></i>Email</a>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="contact-tab-view">
                    <div  class="tab-content pt-0">

                        <!-- Activities -->
                        <div  class="tab-pane active show" id="activities">
                            <div class="view-header">
                                <h4>Activities</h4>
                                <ul>
                                    <li>
                                        <div class="form-sort">
                                            <i class="ti ti-sort-ascending-2"></i>
                                            <select class="select">
                                                <option>Sort By Date</option>
                                                <option>Ascending</option>
                                                <option>Descending</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-activity">
                                <div class="badge-day"><i class="ti ti-calendar-check"></i>29 Aug 2023</div>
                                <ul>
                                    <li class="activity-wrap">
                                        <span class="activity-icon bg-pending">
                                            <i class="ti ti-mail-code"></i>
                                        </span>
                                        <div class="activity-info">
                                            <h6>You sent 1 Message to the contact.</h6>
                                            <p>10:25 pm</p>
                                        </div>
                                    </li>
                                    <li class="activity-wrap">
                                        <span class="activity-icon bg-secondary-success">
                                            <i class="ti ti-phone"></i>
                                        </span>
                                        <div class="activity-info">
                                            <h6>Denwar responded to your appointment schedule question by call at 09:30pm.</h6>
                                            <p>09:25 pm</p>
                                        </div>
                                    </li>
                                    <li class="activity-wrap">
                                        <span class="activity-icon bg-orange">
                                            <i class="ti ti-notes"></i>
                                        </span>
                                        <div class="activity-info">
                                            <h6>Notes added by Antony</h6>
                                            <p>Please accept my apologies for the inconvenience caused. It would be much appreciated if it's possible to reschedule to 6:00 PM, or any other day that week.</p>
                                            <p>10.00 pm</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="badge-day"><i class="ti ti-calendar-check"></i>28 Feb 2024</div>
                                <ul>												
                                    <li class="activity-wrap">
                                        <span class="activity-icon bg-info">
                                            <i class="ti ti-user-pin"></i>
                                        </span>
                                        <div class="activity-info">
                                            <h6>Meeting With <span class="avatar-xs"><img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="img"></span> Abraham</h6>
                                            <p>Schedueled  on 05:00 pm</p>
                                        </div>
                                    </li>											
                                    <li class="activity-wrap">
                                        <span class="activity-icon bg-secondary-success">
                                            <i class="ti ti-phone"></i>
                                        </span>
                                        <div class="activity-info">
                                            <h6>Drain responded to your appointment schedule question.</h6>
                                            <p>09:25 pm</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="badge-day"><i class="ti ti-calendar-check"></i>Upcoming Activity</div>
                                <ul>												
                                    <li class="activity-wrap">
                                        <span class="activity-icon bg-info">
                                            <i class="ti ti-user-pin"></i>
                                        </span>
                                        <div class="activity-info">
                                            <h6>Product Meeting</h6>
                                            <p>A product team meeting is a gathering of the cross-functional product team — ideally including team members from product, engineering, marketing, and customer support.</p>
                                            <p>25 Jul 2023, 05:00 pm</p>
                                            <div class="upcoming-info">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p>Reminder</p>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-clock-edit me-1"></i>Reminder<i class="ti ti-chevron-down ms-1"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="javascript:void(0);">Remainder</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">1 hr</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">10 hr</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p>Task Priority</p>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-square-rounded-filled me-1 text-danger circle"></i>High<i class="ti ti-chevron-down ms-1"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="javascript:void(0);">
                                                                    <i class="ti ti-square-rounded-filled me-1 text-danger circle"></i>High
                                                                </a>
                                                                <a class="dropdown-item" href="javascript:void(0);">
                                                                    <i class="ti ti-square-rounded-filled me-1 text-success circle"></i>Low
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p>Assigned to</p>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="img" class="avatar-xs">John<i class="ti ti-chevron-down ms-1"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="javascript:void(0);">
                                                                    <img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="img" class="avatar-xs">John
                                                                </a>
                                                                <a class="dropdown-item" href="javascript:void(0);">
                                                                    <img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="img" class="avatar-xs">Peter
                                                                </a>
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
                        <!-- /Activities -->

                        <!-- Notes -->
                        <div  class="tab-pane fade" id="notes">
                            <div class="view-header">
                                <h4>Notes</h4>
                                <ul>
                                    <li>
                                        <div class="form-sort">
                                            <i class="ti ti-sort-ascending-2"></i>
                                            <select class="select">
                                                <option>Sort By Date</option>
                                                <option>Ascending</option>
                                                <option>Descending</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_notes" class="com-add"><i class="ti ti-circle-plus me-1"></i>Add New</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="notes-activity">
                                <div class="calls-box">
                                    <div class="caller-info">
                                        <div class="calls-user">
                                            <img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="img">
                                            <div>
                                                <h6>Darlee Robertson</h6>
                                                <p>15 Sep 2023, 12:10 pm</p>
                                            </div>
                                        </div>
                                        <div class="calls-action">
                                            <div class="dropdown action-drop">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit text-blue"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash text-danger"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>		
                                    <h5>Notes added by Antony</h5>							
                                    <p>A project review evaluates the success of an initiative and identifies areas for improvement. It can also evaluate a current project to determine whether it's on the right track. Or, it can determine the success of a completed project. </p>
                                    <ul>
                                        <li>
                                            <div class="note-download">
                                                <div class="note-info">
                                                    <span class="note-icon bg-secondary-success">
                                                        <i class="ti ti-file-spreadsheet"></i>
                                                    </span>
                                                    <div>
                                                        <h6>Project Specs.xls</h6>
                                                        <p>365 KB</p>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);"><i class="ti ti-arrow-down"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="note-download">
                                                <div class="note-info">
                                                    <span class="note-icon">
                                                        <img src="<?php echo base_url();?>assets/img/media/media-35.jpg" alt="img">
                                                    </span>
                                                    <div>
                                                        <h6>090224.jpg</h6>
                                                        <p>365 KB</p>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);"><i class="ti ti-arrow-down"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="notes-editor">
                                        <div class="note-edit-wrap">
                                            <div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
                                            <div class="text-end note-btns">
                                                <a href="javascript:void(0);" class="btn btn-light add-cancel">Cancel</a>
                                                <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);" class="add-comment"><i class="ti ti-square-plus me-1"></i>Add Comment</a>
                                        </div>
                                    </div>
                                </div>	
                                <div class="calls-box">
                                    <div class="caller-info">
                                        <div class="calls-user">
                                            <img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt="img">
                                            <div>
                                                <h6>Sharon Roy</h6>
                                                <p>18 Sep 2023, 09:52 am</p>
                                            </div>
                                        </div>
                                        <div class="calls-action">
                                            <div class="dropdown action-drop">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit text-blue"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash text-danger"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>		
                                    <h5>Notes added by Antony</h5>								
                                    <p>A project plan typically contains a list of the essential elements of a project, such as stakeholders, scope, timelines, estimated cost and communication methods. The project manager typically lists the information based on the assignment.</p>
                                    <ul>
                                        <li>
                                            <div class="note-download">
                                                <div class="note-info">
                                                    <span class="note-icon bg-secondary-success">
                                                        <i class="ti ti-file-text"></i>
                                                    </span>
                                                    <div>
                                                        <h6>Andrewpass.txt</h6>
                                                        <p>365 KB</p>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);"><i class="ti ti-arrow-down"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="reply-box">
                                        <p>The best way to get a project done faster is to start sooner. A goal without a timeline is just a dream.The goal you set must be challenging. At the same time, it should be realistic and attainable, not impossible to reach.</p>
                                        <p>Commented by <span class="text-purple">Aeron</span> on 15 Sep 2023, 11:15 pm</p>
                                        <a href="#" class="btn"><i class="ti ti-arrow-back-up-double"></i>Reply</a>
                                    </div>
                                    <div class="notes-editor">
                                        <div class="note-edit-wrap">
                                            <div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
                                            <div class="text-end note-btns">
                                                <a href="javascript:void(0);" class="btn btn-light add-cancel">Cancel</a>
                                                <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);" class="add-comment"><i class="ti ti-square-plus me-1"></i>Add Comment</a>
                                        </div>
                                    </div>
                                </div>	
                                <div class="calls-box">
                                    <div class="caller-info">
                                        <div class="calls-user">
                                            <img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt="img">
                                            <div>
                                                <h6>Vaughan</h6>
                                                <p>20 Sep 2023, 10:26 pm</p>
                                            </div>
                                        </div>
                                        <div class="calls-action">
                                            <div class="dropdown action-drop">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit text-blue"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash text-danger"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>									
                                    <p>Projects play a crucial role in the success of organizations, and their importance cannot be overstated. Whether it's launching a new product, improving an existing</p>
                                    <div class="notes-editor">
                                        <div class="note-edit-wrap">
                                            <div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
                                            <div class="text-end note-btns">
                                                <a href="javascript:void(0);" class="btn btn-light add-cancel">Cancel</a>
                                                <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <a href="javascript:void(0);" class="add-comment"><i class="ti ti-square-plus me-1"></i>Add Comment</a>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </div>
                        <!-- /Notes -->

                        <!-- Calls -->
                        <div  class="tab-pane fade" id="calls">
                            <div class="view-header">
                                <h4>Calls</h4>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_call" class="com-add"><i class="ti ti-circle-plus me-1"></i>Add New</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="calls-activity">
                                <div class="calls-box">
                                    <div class="caller-info">
                                        <div class="calls-user">
                                            <img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="img">
                                            <p><span>Darlee Robertson</span> logged a call on 23 Jul 2023, 10:00 pm</p>
                                        </div>
                                        <div class="calls-action">
                                            <div class="dropdown call-drop">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Busy<i class="ti ti-chevron-down ms-2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">Busy</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">No Answer</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Unavailable</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Wrong Number</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Left Voice Message</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Moving Forward</a>
                                                </div>
                                            </div>
                                            <div class="dropdown action-drop">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit text-blue"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash text-danger"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>										
                                    <p>A project review evaluates the success of an initiative and identifies areas for improvement. It can also evaluate a current project to determine whether it's on the right track. Or, it can determine the success of a completed project. </p>
                                </div>	
                                <div class="calls-box">
                                    <div class="caller-info">
                                        <div class="calls-user">
                                            <img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt="img">
                                            <p><span>Sharon Roy</span> logged a call on 28 Jul 2023, 09:00 pm</p>
                                        </div>
                                        <div class="calls-action">
                                            <div class="dropdown call-drop">
                                                <a href="#" class="dropdown-toggle bg-pending" data-bs-toggle="dropdown" aria-expanded="false">No Answer<i class="ti ti-chevron-down ms-2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">Busy</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">No Answer</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Unavailable</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Wrong Number</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Left Voice Message</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Moving Forward</a>
                                                </div>
                                            </div>
                                            <div class="dropdown action-drop">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i class="ti ti-edit text-blue"></i>Edit
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i class="ti ti-trash text-danger"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>										
                                    <p>A project plan typically contains a list of the essential elements of a project, such as stakeholders, scope, timelines, estimated cost and communication methods. The project manager typically lists the information based on the assignment.</p>
                                </div>	
                                <div class="calls-box">
                                    <div class="caller-info">
                                        <div class="calls-user">
                                            <img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt="img">
                                            <p><span>Vaughan</span> logged a call on 30 Jul 2023, 08:00 pm</p>
                                        </div>
                                        <div class="calls-action">
                                            <div class="dropdown call-drop">
                                                <a href="#" class="dropdown-toggle bg-pending" data-bs-toggle="dropdown" aria-expanded="false">No Answer<i class="ti ti-chevron-down ms-2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">Busy</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">No Answer</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Unavailable</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Wrong Number</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Left Voice Message</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Moving Forward</a>
                                                </div>
                                            </div>
                                            <div class="dropdown action-drop">
                                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i class="ti ti-edit text-blue"></i>Edit
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i class="ti ti-trash text-danger"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>										
                                    <p>Projects play a crucial role in the success of organizations, and their importance cannot be overstated. Whether it's launching a new product, improving an existing</p>
                                </div>	
                            </div>
                        </div>
                        <!-- /Calls -->

                        <!-- Files -->
                        <div  class="tab-pane fade" id="files">
                            <div class="view-header">
                                <h4>Files</h4>
                            </div>
                            <div class="files-activity">
                                <div class="files-wrap">	
                                    <div class="row align-items-center">										
                                        <div class="col-md-8">											
                                            <div class="file-info">												
                                                <h4>Manage Documents</h4>
                                                <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                            </div>
                                        </div>										
                                        <div class="col-md-4 text-md-end">	
                                            <ul class="file-action">
                                                <li>
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new_file">Create Document</a>
                                                </li>
                                            </ul>
                                        </div>		
                                    </div>
                                </div>
                                <div class="files-wrap">	
                                    <div class="row align-items-center">										
                                        <div class="col-md-8">											
                                            <div class="file-info">												
                                                <h4>Collier-Turner Proposal</h4>
                                                <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                                <div class="file-user">
                                                    <img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt="img">
                                                    <div>
                                                        <p><span>Owner</span> Vaughan</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>										
                                        <div class="col-md-4 text-md-end">	
                                            <ul class="file-action">
                                                <li>															
                                                    <span class="badge badge-tag badge-danger-light">Proposal</span>
                                                </li>
                                                <li>												
                                                    <span class="badge badge-tag bg-pending priority-badge">Draft</span>
                                                </li>
                                                <li>															
                                                    <div class="dropdown action-drop">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ti ti-edit text-blue"></i>Edit
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ti ti-trash text-danger"></i>Delete
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ti ti-download text-info"></i>Download
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>		
                                    </div>
                                </div>
                                <div class="files-wrap">	
                                    <div class="row align-items-center">										
                                        <div class="col-md-8">											
                                            <div class="file-info">												
                                                <h4>Collier-Turner Proposal</h4>
                                                <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                                <div class="file-user">
                                                    <img src="<?php echo base_url();?>assets/img/profiles/avatar-01.jpg" alt="img">
                                                    <div>
                                                        <p><span>Owner</span> Jessica</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>										
                                        <div class="col-md-4 text-md-end">	
                                            <ul class="file-action">
                                                <li>															
                                                    <span class="badge badge-tag badge-purple-light">Quote</span>
                                                </li>
                                                <li>												
                                                    <span class="badge bg-success priority-badge">Sent</span>
                                                </li>
                                                <li>															
                                                    <div class="dropdown action-drop">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ti ti-edit text-blue"></i>Edit
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ti ti-trash text-danger"></i>Delete
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ti ti-download text-info"></i>Download
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>		
                                    </div>
                                </div>											
                                <div class="files-wrap">	
                                    <div class="row align-items-center">										
                                        <div class="col-md-8">											
                                            <div class="file-info">												
                                                <h4>Collier-Turner Proposal</h4>
                                                <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                                <div class="file-user">
                                                    <img src="<?php echo base_url();?>assets/img/profiles/avatar-22.jpg" alt="img">
                                                    <div>
                                                        <p><span>Owner</span> Vaughan</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>										
                                        <div class="col-md-4 text-md-end">	
                                            <ul class="file-action">
                                                <li>															
                                                    <span class="badge badge-tag badge-danger-light">Proposal</span>
                                                </li>
                                                <li>												
                                                    <span class="badge badge-tag bg-pending priority-badge">Draft</span>
                                                </li>
                                                <li>															
                                                    <div class="dropdown action-drop">
                                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ti ti-edit text-blue"></i>Edit
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ti ti-trash text-danger"></i>Delete
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ti ti-download text-info"></i>Download
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>		
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Files -->

                        <!-- Email -->
                        <div  class="tab-pane fade" id="email">
                            <div class="view-header">
                                <h4>Email</h4>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" class="com-add create-mail" data-bs-toggle="tooltip"  data-bs-placement="left" data-bs-custom-class="tooltip-dark" data-bs-original-title="There are no email accounts configured, Please configured your email account in order to Send/ Create EMails"><i class="ti ti-circle-plus me-1"></i>Create Email</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="files-activity">
                                <div class="files-wrap">	
                                    <div class="row align-items-center">										
                                        <div class="col-md-8">											
                                            <div class="file-info">												
                                                <h4>Manage Emails</h4>
                                                <p>You can send and reply to emails directly via this section.</p>
                                            </div>
                                        </div>										
                                        <div class="col-md-4 text-md-end">	
                                            <ul class="file-action">
                                                <li>
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_email" >Connect Account</a>
                                                </li>
                                            </ul>
                                        </div>		
                                    </div>
                                </div>
                                <div class="files-wrap">
                                    <div class="email-header">
                                        <div class="row">
                                            <div class="col top-action-left">
                                                <div class="float-start d-none d-sm-block">
                                                    <input type="text" placeholder="Search Messages" class="form-control search-message">
                                                </div>
                                            </div>
                                            <div class="col-auto top-action-right">
                                                <div class="text-end">
                                                    <button type="button" title="Refresh" data-bs-toggle="tooltip" class="btn btn-white d-none d-md-inline-block"><i class="fa-solid fa-rotate"></i></button>
                                                    <div class="btn-group">
                                                        <a class="btn btn-white"><i class="fa-solid fa-angle-left"></i></a>
                                                        <a class="btn btn-white"><i class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="email-content">
                                        <div class="table-responsive">
                                            <table class="table table-inbox table-hover">
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" class="ps-2">
                                                            <input type="checkbox" class="checkbox-all">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="unread clickable-row" data-href="<?php echo base_url();?>mail-view">
                                                        <td>
                                                            <input type="checkbox" class="checkmail">
                                                        </td>
                                                        <td><span class="mail-important"><i class="fa fa-star starred "></i></span></td>
                                                        <td class="name">John Doe</td>
                                                        <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                        <td><i class="fa-solid fa-paperclip"></i></td>
                                                        <td class="mail-date">13:14</td>
                                                    </tr>
                                                    <tr class="unread clickable-row" data-href="<?php echo base_url();?>mail-view">
                                                        <td>
                                                            <input type="checkbox" class="checkmail">
                                                        </td>
                                                        <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                        <td class="name">Envato Account</td>
                                                        <td class="subject">Important account security update from Envato</td>
                                                        <td></td>
                                                        <td class="mail-date">8:42</td>
                                                    </tr>
                                                    <tr class="clickable-row" data-href="<?php echo base_url();?>mail-view">
                                                        <td>
                                                            <input type="checkbox" class="checkmail">
                                                        </td>
                                                        <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                        <td class="name">Twitter</td>
                                                        <td class="subject">HRMS Bootstrap Admin Template</td>
                                                        <td></td>
                                                        <td class="mail-date">30 Nov</td>
                                                    </tr>
                                                    <tr class="unread clickable-row" data-href="<?php echo base_url();?>mail-view">
                                                        <td>
                                                            <input type="checkbox" class="checkmail">
                                                        </td>
                                                        <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                        <td class="name">Richard Parker</td>
                                                        <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                        <td></td>
                                                        <td class="mail-date">18 Sep</td>
                                                    </tr>
                                                    <tr class="clickable-row" data-href="<?php echo base_url();?>mail-view">
                                                        <td>
                                                            <input type="checkbox" class="checkmail">
                                                        </td>
                                                        <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                        <td class="name">John Smith</td>
                                                        <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                        <td></td>
                                                        <td class="mail-date">21 Aug</td>
                                                    </tr>
                                                    <tr class="clickable-row" data-href="<?php echo base_url();?>mail-view">
                                                        <td>
                                                            <input type="checkbox" class="checkmail">
                                                        </td>
                                                        <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                        <td class="name">me, Robert Smith (3)</td>
                                                        <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                        <td></td>
                                                        <td class="mail-date">1 Aug</td>
                                                    </tr>
                                                    <tr class="unread clickable-row" data-href="<?php echo base_url();?>mail-view">
                                                        <td>
                                                            <input type="checkbox" class="checkmail">
                                                        </td>
                                                        <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                        <td class="name">Codecanyon</td>
                                                        <td class="subject">Welcome To Codecanyon</td>
                                                        <td></td>
                                                        <td class="mail-date">Jul 13</td>
                                                    </tr>
                                                    <tr class="clickable-row" data-href="<?php echo base_url();?>mail-view">
                                                        <td>
                                                            <input type="checkbox" class="checkmail">
                                                        </td>
                                                        <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                        <td class="name">Richard Miles</td>
                                                        <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                        <td><i class="fa-solid fa-paperclip"></i></td>
                                                        <td class="mail-date">May 14</td>
                                                    </tr>
                                                    <tr class="unread clickable-row" data-href="<?php echo base_url();?>mail-view">
                                                        <td>
                                                            <input type="checkbox" class="checkmail">
                                                        </td>
                                                        <td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
                                                        <td class="name">John Smith</td>
                                                        <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                        <td></td>
                                                        <td class="mail-date">11/11/16</td>
                                                    </tr>
                                                    <tr class="clickable-row" data-href="<?php echo base_url();?>mail-view">
                                                        <td>
                                                            <input type="checkbox" class="checkmail">
                                                        </td>
                                                        <td><span class="mail-important"><i class="fa fa-star starred "></i></span></td>
                                                        <td class="name">Mike Litorus</td>
                                                        <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                        <td></td>
                                                        <td class="mail-date">10/31/16</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Email -->

                    </div>
                </div>
                <!-- /Tab Content -->

            </div>
            <!-- /Contact Details -->
            
        </div>

    </div>
</div>
<!-- /Page Wrapper -->

<!-- Delete Company -->
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
                    <h3>Remove Company?</h3>
                    <p class="del-info">Company ”NovaWaveLLC” from your Account</p>
                    <div class="col-lg-12 text-center modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <a href="<?php echo base_url();?>company-details" class="btn btn-danger">Yes, Delete it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Company -->

<!-- Add Note -->
<div class="modal custom-modal fade modal-padding" id="add_notes" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Notes</h5>
                <button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <form action="<?php echo base_url();?>company-details">
                    <div class="form-wrap">
                        <label class="col-form-label">Title <span class="text-danger"> *</span></label>
                        <input class="form-control" type="text">
                     </div>
                     <div class="form-wrap">
                        <label class="col-form-label">Note <span class="text-danger"> *</span></label>
                        <textarea class="form-control" rows="4"></textarea>
                     </div>
                     <div class="form-wrap">
                        <label class="col-form-label">Attachment <span class="text-danger"> *</span></label>
                        <div class="drag-attach">
                            <input type="file">
                            <div class="img-upload">											
                                <i class="ti ti-file-broken"></i>Upload File
                            </div>
                        </div>
                     </div>
                     <div class="form-wrap">
                        <label class="col-form-label">Uploaded Files</label>
                        <div class="upload-file">
                            <h6>Projectneonals teyys.xls</h6>
                            <p>4.25 MB</p>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="black-text">45%</p>
                        </div>
                        <div class="upload-file upload-list">
                            <div>
                                <h6>tes.txt</h6>
                                <p>4.25 MB</p>
                            </div>
                            <a href="javascript:void(0);" class="text-danger"><i class="ti ti-trash-x"></i></a>
                        </div>
                     </div>
                     <div class="col-lg-12 text-end modal-btn">
                        <a class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <button class="btn btn-primary" type="submit">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Note -->

<!-- Create Call Log -->
<div class="modal custom-modal fade modal-padding" id="create_call" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Call Log</h5>
                <button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <form action="<?php echo base_url();?>company-details">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Status <span class="text-danger"> *</span></label>
                                <select class="select">
                                    <option>Busy</option>
                                    <option>Unavailable</option>
                                    <option>No Answer</option>
                                    <option>Wrong Number</option>
                                    <option>Left Voice Message</option>
                                    <option>Moving Forward</option>
                                </select>
                            </div>
                            <div class="form-wrap">
                                <label class="col-form-label">Follow Up Date <span class="text-danger"> *</span></label>
                                <div class="icon-form">
                                      <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                                      <input type="text" class="form-control datetimepicker" placeholder="">
                                  </div>
                            </div>						
                            <div class="form-wrap">
                                <label class="col-form-label">Note <span class="text-danger"> *</span></label>
                                <textarea class="form-control" rows="4" placeholder="Add text"></textarea>
                            </div>
                            <div class="form-wrap">
                                 <label class="checkboxs">
                                      <input type="checkbox">
                                      <span class="checkmarks"></span> Create a followup task
                                  </label>
                            </div>	
                            <div class="text-end modal-btn">
                                <a class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                                <button class="btn btn-primary" type="submit">Confirm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Create Call Log -->

<!-- Add File -->
<div class="modal custom-modal fade custom-modal-two modal-padding" id="new_file" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New File</h5>
                <button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">	
                <div class="add-info-fieldset">

                    <div class="add-details-wizard">
                        <ul class="progress-bar-wizard">
                            <li class="active">
                                <span><i class="ti ti-file"></i></span>
                                <div class="multi-step-info">
                                    <h6>Basic Info</h6>
                                </div>
                            </li>
                            <li>									
                                <span><i class="ti ti-circle-plus"></i></span>
                                <div class="multi-step-info">
                                    <h6>Add Recipient</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <fieldset id="first-field-file">
                        <form action="<?php echo base_url();?>company-details">
                            <div class="contact-input-set">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Choose Deal <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Collins</option>
                                                <option>Wisozk</option>
                                                <option>Walter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Document Type <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Contract</option>
                                                <option>Proposal</option>
                                                <option>Quote</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Owner <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Admin</option>
                                                <option>Jackson Daniel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Title <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Locale <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>en</option>
                                                <option>es</option>
                                                <option>ru</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="signature-wrap">
                                            <h4>Signature</h4>
                                            <ul class="nav sign-item">
                                                <li class="nav-item">
                                                    <span class=" mb-0" data-bs-toggle="tab" data-bs-target="#nosign">
                                                    <input type="radio" class="status-radio" id="sign1" name="email">
                                                    <label for="sign1"><span class="sign-title">No Signature</span>This document does not require a signature before acceptance.</label>
                                                </span>
                                                </li>
                                                <li class="nav-item">
                                                    <span class="active mb-0" data-bs-toggle="tab" data-bs-target="#use-esign">		
                                                        <input type="radio" class="status-radio" id="sign2" name="email" checked>
                                                        <label for="sign2"><span class="sign-title">Use e-signature</span>This document require e-signature before acceptance.</label>
                                                    </span>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="use-esign">
                                                    <div class="input-block mb-0">
                                                        <label class="col-form-label">Document Signers <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="sign-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-wrap">
                                                                    <input class="form-control" type="text" placeholder="Enter Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="float-none form-wrap me-3 w-100">
                                                                        <input class="form-control" type="text" placeholder="Email Address">
                                                                    </div>
                                                                    <div class="input-btn form-wrap">
                                                                        <a href="javascript:void(0);" class="add-sign"><i class="ti ti-circle-plus"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Content <span class="text-danger"> *</span></label>
                                            <textarea class="form-control" rows="3" placeholder="Add Content"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-end form-wizard-button modal-btn">
                                        <button class="btn btn-light" type="reset">Reset</button>
                                        <button class="btn btn-primary wizard-next-btn" type="button">Next</button>
                                    </div>
                                </div>									
                            </div>
                        </form>
                    </fieldset>
                    <fieldset>
                        <form action="<?php echo base_url();?>company-details">
                            <div class="contact-input-set">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="signature-wrap">
                                            <h4 class="mb-2">Send the document to following signers</h4>
                                            <p>In order to send the document to the signers</p>
                                            <div class="input-block mb-0">
                                                <label class="col-form-label">Recipients (Additional recipients)</label>
                                            </div>
                                            <div class="sign-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-wrap">
                                                            <input class="form-control" type="text" placeholder="Enter Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="d-flex align-items-center">
                                                            <div class="float-none form-wrap me-3 w-100">
                                                                <input class="form-control" type="text" placeholder="Email Address">
                                                            </div>
                                                            <div class="input-btn form-wrap">
                                                                <a href="javascript:void(0);" class="add-sign"><i class="ti ti-circle-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-wrap">
                                            <label class="col-form-label">Message Subject <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" placeholder="Enter Subject">
                                        </div>
                                        <div class="form-wrap">
                                            <label class="col-form-label">Message Text <span class="text-danger"> *</span></label>
                                            <textarea class="form-control" rows="3" placeholder="Your document is ready"></textarea>
                                        </div>
                                        <button class="btn btn-light mb-3">Send Now</button>
                                        <div class="send-success">
                                            <p><i class="ti ti-circle-check"></i>  Document sent successfully to the selected recipients</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-end form-wizard-button modal-btn">
                                        <button class="btn btn-light" type="reset">Cancel</button>
                                        <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Save & Next</button>
                                    </div>
                                </div>									
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Add File -->

<!-- Connect Account -->
<div class="modal custom-modal fade" id="create_email" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Connect Account</h5>
                <button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="form-wrap">
                    <label class="col-form-label">Account type <span class="text-danger"> *</span></label>
                    <select class="select">
                        <option>Gmail</option>
                        <option>Outlook</option>
                        <option>Imap</option>
                    </select>
                </div>
                <div class="form-wrap">
                    <h5 class="form-title">Sync emails from</h5>
                    <div class="sync-radio">
                        <div class="radio-item">
                            <input type="radio" class="status-radio" id="test1" name="radio-group" checked="">
                            <label for="test1">Now</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" class="status-radio" id="test2" name="radio-group">
                            <label for="test2">1 Month Ago</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" class="status-radio" id="test3" name="radio-group">
                            <label for="test3">3 Month Ago</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" class="status-radio" id="test4" name="radio-group">
                            <label for="test4">6 Month Ago</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-end modal-btn">
                    <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                    <button class="btn btn-primary"  data-bs-target="#success_mail" data-bs-toggle="modal" data-bs-dismiss="modal" >Connect Account</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Connect Account -->

<!-- Success Company -->
<div class="modal custom-modal fade" id="success_mail" role="dialog">
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
                        <i class="ti ti-mail-opened"></i>
                    </div>
                    <h3>Email Connected Successfully!!!</h3>
                    <p >Email Account is configured with “example@example.com”. Now you can access email.</p>
                    <div class="col-lg-12 text-center modal-btn">
                        <a href="<?php echo base_url();?>company-details" class="btn btn-primary">Go to email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Success Company -->

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
                <form action="<?php echo base_url();?>company-details">	
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

<!-- Add Compose -->
<div class="modal custom-modal fade" id="add_compose" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Compose</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body p-0">
                <form action="#">
                    <div class="form-wrap">
                        <input type="email" placeholder="To" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input type="email" placeholder="Cc" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input type="email" placeholder="Bcc" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-wrap">
                        <input type="text" placeholder="Subject" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <div class="summernote"></div>
                    </div>
                    <div class="form-wrap">
                        <div class="text-center">
                            <button class="btn btn-primary"><span>Send</span><i class="fa-solid fa-paper-plane ms-1"></i></button>
                            <button class="btn btn-primary" type="button"><span>Draft</span> <i class="fa-regular fa-floppy-disk ms-1"></i></button>
                            <button class="btn btn-primary" type="button"><span>Delete</span> <i class="fa-regular fa-trash-can ms-1"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Compose -->

<!-- Edit Company -->
<div class="toggle-popup1">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Edit Company</h4>
            <a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <div class="pro-create">
                <form action="#">							
                    <div class="accordion-lists" id="list-accords">

                        <!-- Basic Info -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#edit-basic"><span><i class="ti ti-user-plus"></i></span>Basic Info</a>
                            <div class="accordion-collapse collapse show" id="edit-basic" data-bs-parent="#list-accords">
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
                                                <input type="text" class="form-control" value="NovaWave LLC">
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
                                                <label class="col-form-label">Website <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Ratings </label>
                                                <div class="icon-form-end">
                                                    <span class="form-icon"><i class="ti ti-star"></i></span>
                                                    <input type="text" class="form-control" placeholder="4.2" value="4.2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap img-select">
                                                <label class="col-form-label">Owner</label>
                                                <select class="select2">
                                                    <option>Choose</option>
                                                    <option selected>Jerald</option>
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
                                                <input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput"  name="Label" value="Tag1" >	
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Deals</label>
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
                                        <div class="col-md-12">
                                            <div class="form-wrap">
                                                <label class="col-form-label">Contact <span class="text-danger">*</span></label>
                                                <select class="select2">
                                                    <option>Choose</option>
                                                    <option selected>John</option>
                                                    <option>Guillory</option>
                                                    <option>Jami</option>
                                                    <option>Theresa</option>
                                                    <option>Espinosa</option>
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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#create_contact" class="btn btn-primary">Create</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Company -->

<!-- Add Company -->
<div class="toggle-popup2">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Add Company</h4>
            <a href="#" class="sidebar-close2 toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <div class="pro-create">
                <form action="#">							
                    <div class="accordion-lists" id="list-accord">

                        <!-- Basic Info -->
                        <div class="user-accordion-item">
                            <a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#add-basic"><span><i class="ti ti-user-plus"></i></span>Basic Info</a>
                            <div class="accordion-collapse collapse show" id="add-basic" data-bs-parent="#list-accord">
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
                                                        <input type="checkbox" id="mail" class="check" checked="">
                                                        <label for="mail" class="checktoggle"></label>
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
                                                <label class="col-form-label">Rating </label>
                                                <div class="icon-form-end">
                                                    <span class="form-icon"><i class="ti ti-star"></i></span>
                                                    <input type="text" class="form-control" placeholder="4.2" value="4.2">
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
                                                <label class="col-form-label">Deals</label>
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
                                                <select class="select2">
                                                    <option>Choose</option>
                                                    <option>John</option>
                                                    <option>Guillory</option>
                                                    <option>Jami</option>
                                                    <option>Theresa</option>
                                                    <option>Espinosa</option>
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
                            <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#add-address"><span><i class="ti ti-map-pin-cog"></i></span>Address Info</a>
                            <div class="accordion-collapse collapse" id="add-address" data-bs-parent="#list-accord">
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
                            <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#add-social"><span><i class="ti ti-social"></i></span>Social Profile</a>
                            <div class="accordion-collapse collapse" id="add-social" data-bs-parent="#list-accord">
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
                            <a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#add-access"><span><i class="ti ti-accessible"></i></span>Access</a>
                            <div class="accordion-collapse collapse" id="add-access" data-bs-parent="#list-accord">
                                <div class="content-collapse">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="radio-wrap form-wrap">
                                                <label class="col-form-label">Visibility</label>
                                                <div class="d-flex flex-wrap">
                                                    <div class="radio-btn">
                                                        <input type="radio" class="status-radio" id="add-public" name="visible">
                                                        <label for="add-public">Public</label>
                                                    </div>
                                                    <div class="radio-btn">
                                                        <input type="radio" class="status-radio" id="add-private" name="visible">
                                                        <label for="add-private">Private</label>
                                                    </div>
                                                    <div class="radio-btn" data-bs-toggle="modal" data-bs-target="#access_view">
                                                        <input type="radio" class="status-radio" id="add-people" name="visible">
                                                        <label for="add-people">Select People</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="radio-wrap">
                                                <label class="col-form-label">Status</label>
                                                <div class="d-flex flex-wrap">
                                                    <div class="radio-btn">
                                                        <input type="radio" class="status-radio" id="add-active" name="status" checked="">
                                                        <label for="add-active">Active</label>
                                                    </div>
                                                    <div class="radio-btn">
                                                        <input type="radio" class="status-radio" id="add-inactive" name="status">
                                                        <label for="add-inactive">Inactive</label>
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
                        <a href="#" class="btn btn-light sidebar-close2">Cancel</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#create_contact" class="btn btn-primary">Create</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Company -->

<!-- Add New Deals -->
<div class="toggle-popup">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h4>Add New Deals</h4>
            <a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
        </div>
        <div class="toggle-body">
            <div class="pro-create">
                <form action="<?php echo base_url();?>company-details">							
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Pipeine <span class="text-danger">*</span></label>
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
                                <input class="form-control" type="text">
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
                                <input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Jack, Darlee Robertson" >
                            </div>
                            <div class="form-wrap">
                                <label class="col-form-label">Project <span class="text-danger">*</span></label>
                                <input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Divine dran" >
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
                                <input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="James" >
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
                                <input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Tag1" >
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
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add New Deals -->

</div>
<!-- /Main Wrapper -->



<?= $this->include('partials/vendor-scripts') ?>
<!-- Summernote JS -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>