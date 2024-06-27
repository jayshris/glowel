<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.css">


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

						<!-- Project User -->
						<div class="contact-head">
							<div class="row align-items-center">
								<div class="col-sm-6">
									<ul class="contact-breadcrumb">
										<li><a href="<?php echo base_url(); ?>projects"><i class="ti ti-arrow-narrow-left"></i>Project</a></li>
										<li>Kofejob</li>
									</ul>
								</div>
								<div class="col-sm-6 text-sm-end">
									<div class="contact-pagination">
										<p>1 of 40</p>
										<ul>
											<li>
												<a href="<?php echo base_url(); ?>project-details"><i class="ti ti-chevron-left"></i></a>
											</li>
											<li>
												<a href="<?php echo base_url(); ?>project-details"><i class="ti ti-chevron-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="contact-wrap">
							<div class="contact-profile">
								<div class="avatar company-avatar">									
									<img src="<?php echo base_url(); ?>assets/img/priority/project-03.svg" alt="Image">
								</div>
								<div class="name-user">
									<h5>Kofejob</h5>
									<p>Project Id :154454887</p>
									<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i>High</span>
								<span class="badge badge-pill badge-status bg-success">Active</span>
								</div>
							</div>
							<div class="contacts-action">
								<span class="badge badge-light"><i class="ti ti-lock"></i>Private</span>
								<div class="dropdown action-drops">
									<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
										<span class="bg-success"><i class="ti ti-thumb-up me-2"></i>Completed<i class="ti ti-chevron-down ms-2"></i></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="javascript:void(0);"><span>Completed</span></a>
										<a class="dropdown-item" href="javascript:void(0);"><span>Develop</span></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Project User -->

					</div>

					<!-- Project Sidebar -->
					<div class="col-xl-3 theiaStickySidebar">
						<div class="contact-sidebar">
							<h6>Project Information</h6>
							<ul class="other-info">
								<li><span class="other-title">Start Date</span><span>27 Sep 2023, 11:45 pm  </span></li>
								<li><span class="other-title">Due Date </span><span>27 Sep 2023, 11:45 pm  </span></li>
								<li><span class="other-title">Value</span><span>$25,11,145</span></li>
								<li><span class="other-title">Project Type</span><span>Mobile Application</span></li>
								<li><span class="other-title">Project Timing</span><span>Hourly</span></li>
							</ul>	
							<div class="con-sidebar-title">
								<h6>Client</h6>
								<a href="javascript:void(0);" class="com-add"><i class="ti ti-circle-plus me-1"></i>Add New</a>
							</div>
							<ul class="company-info com-info">
								<li>
									<span>
										<img src="<?php echo base_url(); ?>assets/img/icons/company-icon-08.svg" alt="Image">
									</span>
									<div>
										<p>HarborView</p>
									</div>
								</li>
							</ul>	
							<div class="con-sidebar-title">
								<h6>Responsible Persons</h6>
								<a href="javascript:void(0);" class="com-add" data-bs-toggle="modal" data-bs-target="#access_view"><i class="ti ti-circle-plus me-1"></i>Add New</a>
							</div>
							<ul class="project-mem">
								<li>
									<a href="#">
										<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-03.jpg" alt="img">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-05.jpg" alt="img">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-06.jpg" alt="img">
									</a>
								</li>
								<li class="more-set">
									<a href="#">+05</a>
								</li>
							</ul>
							<div class="con-sidebar-title">
								<h6>Team Leader</h6>
								<a href="javascript:void(0);" class="com-add" data-bs-toggle="modal" data-bs-target="#owner">Change</a>
							</div>
							<ul class="deals-info">
								<li>
									<span>
										<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-21.jpg" alt="Image">
									</span>
									<div>
										<p>Vaughan</p>
									</div>
								</li>
							</ul>
							<div class="con-sidebar-title border-line">
								<h6>Priority</h6>
								<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i>High</span>
							</div>
							<div class="con-sidebar-title border-line">
								<h6>Pipeline</h6>
								<p><i class="ti ti-timeline-event-text"></i>Marketing Pipeline</p>
							</div>
							<ul class="other-info">
								<li><span class="other-title">Last Modified</span><span>10 Jan 2024, 10:00 am</span></li>
								<li>
									<span class="other-title">Modified By</span>
									<span><img src="<?php echo base_url(); ?>assets/img/profiles/avatar-19.jpg" class="avatar-xs" alt="img"> Darlee Robertson</span>
								</li>
							</ul>
						</div>
					</div>
					<!-- /Project Sidebar -->

					<!-- Project Details -->
					<div class="col-xl-9">
						<div class="contact-tab-wrap">
							<div class="pipeline-list">
								<ul>
									<li><a href="javascript:void(0);" class="bg-pending">Plan</a></li>
									<li><a href="javascript:void(0);" class="bg-warning">Design</a></li>
									<li><a href="javascript:void(0);" class="bg-gray">Development</a></li>
									<li><a href="javascript:void(0);" class="bg-gray">Completed</a></li>
								</ul>
							</div>
							<ul class="contact-nav nav">
								<li>
									<a href="#" data-bs-toggle="tab" data-bs-target="#tasks" class="active"><i class="ti ti-subtask"></i>Tasks</a>
								</li>
								<li>
									<a href="#" data-bs-toggle="tab" data-bs-target="#activities"><i class="ti ti-alarm-minus"></i>Activities</a>
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

								<!-- Tasks -->
								<div  class="tab-pane active show" id="tasks">
									<div class="view-header">
										<h4>All Tasks</h4>
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
												<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-circle-plus me-1"></i>Add New Task</a>
											</li>
										</ul>
									</div>
									<div class="tasks-activity">
										<ul>
											<li class="task-wrap">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="task-info">
															<p><i class="ti ti-grip-vertical"></i>Add a form to Update Task</p>
															<span class="badge badge-pill badge-status bg-green"><i class="ti ti-phone"></i>Calls</span>
															<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i>High</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="task-actions">
															<ul>
																<li class="task-time">
																	<i class="ti ti-clock-record"></i>25 Hrs
																</li>
																<li class="task-date">
																	<i class="ti ti-calendar-exclamation"></i>25 Oct 2023 
																</li>
																<li class="task-owner">
																	<div class="task-user">
																		<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item edit-popup" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="task-wrap">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="task-info">
															<p><i class="ti ti-grip-vertical"></i>Make all strokes thinner</p>
															<span class="badge badge-pill badge-status bg-green"><i class="ti ti-phone"></i>Calls</span>
															<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i>High</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="task-actions">
															<ul>
																<li class="task-time">
																	<i class="ti ti-clock-record"></i>25 Hrs
																</li>
																<li class="task-date">
																	<i class="ti ti-calendar-exclamation"></i>25 Oct 2023 
																</li>
																<li class="task-owner">
																	<div class="task-user">
																		<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item edit-popup" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="task-wrap">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="task-info">
															<p><i class="ti ti-grip-vertical"></i>Update orginal content</p>
															<span class="badge badge-pill badge-status bg-green"><i class="ti ti-phone"></i>Calls</span>
															<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i>High</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="task-actions">
															<ul>
																<li class="task-time">
																	<i class="ti ti-clock-record"></i>25 Hrs
																</li>
																<li class="task-date">
																	<i class="ti ti-calendar-exclamation"></i>24 Oct 2023 
																</li>
																<li class="task-owner">
																	<div class="task-user">
																		<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item edit-popup" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="task-wrap">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="task-info">
															<p><i class="ti ti-grip-vertical"></i>Use only component colours</p>
															<span class="badge badge-pill badge-status bg-green"><i class="ti ti-phone"></i>Calls</span>
															<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i>High</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="task-actions">
															<ul>
																<li class="task-time">
																	<i class="ti ti-clock-record"></i>25 Hrs
																</li>
																<li class="task-date">
																	<i class="ti ti-calendar-exclamation"></i>24 Oct 2023 
																</li>
																<li class="task-owner">
																	<div class="task-user">
																		<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item edit-popup" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="task-wrap">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="task-info">
															<p><i class="ti ti-grip-vertical"></i>Add images to the cards section</p>
															<span class="badge badge-pill badge-status bg-green"><i class="ti ti-phone"></i>Calls</span>
															<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i>High</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="task-actions">
															<ul>
																<li class="task-time">
																	<i class="ti ti-clock-record"></i>25 Hrs
																</li>
																<li class="task-date">
																	<i class="ti ti-calendar-exclamation"></i>24 Oct 2023 
																</li>
																<li class="task-owner">
																	<div class="task-user">
																		<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item edit-popup" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="task-wrap">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="task-info">
															<p><i class="ti ti-grip-vertical"></i>Design description banner & landing page</p>
															<span class="badge badge-pill badge-status bg-green"><i class="ti ti-phone"></i>Calls</span>
															<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i>High</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="task-actions">
															<ul>
																<li class="task-time">
																	<i class="ti ti-clock-record"></i>25 Hrs
																</li>
																<li class="task-date">
																	<i class="ti ti-calendar-exclamation"></i>23 Oct 2023 
																</li>
																<li class="task-owner">
																	<div class="task-user">
																		<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item edit-popup" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>
											<li class="task-wrap">
												<div class="row align-items-center">
													<div class="col-md-6">
														<div class="task-info">
															<p><i class="ti ti-grip-vertical"></i>Make sure all the padding should be 24px</p>
															<span class="badge badge-pill badge-status bg-green"><i class="ti ti-phone"></i>Calls</span>
															<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i>High</span>
														</div>
													</div>
													<div class="col-md-6">
														<div class="task-actions">
															<ul>
																<li class="task-time">
																	<i class="ti ti-clock-record"></i>25 Hrs
																</li>
																<li class="task-date">
																	<i class="ti ti-calendar-exclamation"></i>23 Oct 2023 
																</li>
																<li class="task-owner">
																	<div class="task-user">
																		<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item edit-popup" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</li>											
										</ul>
									</div>
								</div>
								<!-- /Tasks -->

								<!-- Activities -->
								<div  class="tab-pane fade" id="activities">
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
													<h6>Meeting With <span class="avatar-xs"><img src="<?php echo base_url(); ?>assets/img/profiles/avatar-19.jpg" alt="img"></span> Abraham</h6>
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
																	<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/img/profiles/avatar-19.jpg" alt="img" class="avatar-xs">John<i class="ti ti-chevron-down ms-1"></i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="javascript:void(0);">
																			<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-19.jpg" alt="img" class="avatar-xs">John
																		</a>
																		<a class="dropdown-item" href="javascript:void(0);">
																			<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-19.jpg" alt="img" class="avatar-xs">Peter
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
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-19.jpg" alt="img">
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
																<img src="<?php echo base_url(); ?>assets/img/media/media-35.jpg" alt="img">
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
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="img">
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
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-21.jpg" alt="img">
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
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-19.jpg" alt="img">
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
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="img">
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
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-21.jpg" alt="img">
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
															<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-21.jpg" alt="img">
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
															<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-01.jpg" alt="img">
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
															<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-22.jpg" alt="img">
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
															<tr class="unread clickable-row" data-href="mail-view">
																<td>
																	<input type="checkbox" class="checkmail">
																</td>
																<td><span class="mail-important"><i class="fa fa-star starred "></i></span></td>
																<td class="name">John Doe</td>
																<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
																<td><i class="fa-solid fa-paperclip"></i></td>
																<td class="mail-date">13:14</td>
															</tr>
															<tr class="unread clickable-row" data-href="mail-view">
																<td>
																	<input type="checkbox" class="checkmail">
																</td>
																<td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
																<td class="name">Envato Account</td>
																<td class="subject">Important account security update from Envato</td>
																<td></td>
																<td class="mail-date">8:42</td>
															</tr>
															<tr class="clickable-row" data-href="mail-view">
																<td>
																	<input type="checkbox" class="checkmail">
																</td>
																<td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
																<td class="name">Twitter</td>
																<td class="subject">HRMS Bootstrap Admin Template</td>
																<td></td>
																<td class="mail-date">30 Nov</td>
															</tr>
															<tr class="unread clickable-row" data-href="mail-view">
																<td>
																	<input type="checkbox" class="checkmail">
																</td>
																<td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
																<td class="name">Richard Parker</td>
																<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
																<td></td>
																<td class="mail-date">18 Sep</td>
															</tr>
															<tr class="clickable-row" data-href="mail-view">
																<td>
																	<input type="checkbox" class="checkmail">
																</td>
																<td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
																<td class="name">John Smith</td>
																<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
																<td></td>
																<td class="mail-date">21 Aug</td>
															</tr>
															<tr class="clickable-row" data-href="mail-view">
																<td>
																	<input type="checkbox" class="checkmail">
																</td>
																<td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
																<td class="name">me, Robert Smith (3)</td>
																<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
																<td></td>
																<td class="mail-date">1 Aug</td>
															</tr>
															<tr class="unread clickable-row" data-href="mail-view">
																<td>
																	<input type="checkbox" class="checkmail">
																</td>
																<td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
																<td class="name">Codecanyon</td>
																<td class="subject">Welcome To Codecanyon</td>
																<td></td>
																<td class="mail-date">Jul 13</td>
															</tr>
															<tr class="clickable-row" data-href="mail-view">
																<td>
																	<input type="checkbox" class="checkmail">
																</td>
																<td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
																<td class="name">Richard Miles</td>
																<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
																<td><i class="fa-solid fa-paperclip"></i></td>
																<td class="mail-date">May 14</td>
															</tr>
															<tr class="unread clickable-row" data-href="mail-view">
																<td>
																	<input type="checkbox" class="checkmail">
																</td>
																<td><span class="mail-important"><i class="fa-regular fa-star"></i></span></td>
																<td class="name">John Smith</td>
																<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
																<td></td>
																<td class="mail-date">11/11/16</td>
															</tr>
															<tr class="clickable-row" data-href="mail-view">
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
					<!-- /Project Details -->
					
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Delete Project -->
		<div class="modal custom-modal fade" id="delete_task" role="dialog">
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
							<h3>Remove Task?</h3>
							<p class="del-info">Task "Design description" from your Account</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url(); ?>project-details" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Project -->

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
						<form action="project-details">
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
						<form action="project-details">
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
								<form action="project-details">
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
								<form action="project-details">
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

		<!-- Success Email -->
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
								<a href="<?php echo base_url(); ?>project-details" class="btn btn-primary">Go to email</a>
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
						<h5 class="modal-title">Add Responsible Persons</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="project-details">	
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
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-19.jpg" alt="">
												<a href="#">Darlee Robertson</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="">
												<a href="#">Sharon Roy</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-21.jpg" alt="">
												<a href="#">Vaughan</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-01.jpg" alt="">
												<a href="#">Jessica</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-16.jpg" alt="">
												<a href="#">Carol Thomas</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-22.jpg" alt="">
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

		<!-- Add New Deals -->
		<div class="toggle-popup">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Add New Task</h4>
					<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<div class="pro-create">
						<form action="project-details">							
							<div class="row">
								<div class="col-md-12">
									<div class="project-name">
										<p>Project Name</p>
										<h4>Kofejob</h4>
									</div>
									<div class="form-wrap">
										<label class="col-form-label">Task Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
									<div class="form-wrap">
										<label class="col-form-label">Category <span class="text-danger">*</span></label>
										<select class="select2">
											<option>Choose</option>
											<option>Sales</option>
											<option>Marketing</option>
											<option>Calls</option>
										</select>
									</div>
									<div class="form-wrap">
										<label class="col-form-label">Total Hours</label>
										<input type="text" class="form-control">
									</div>									
									<div class="form-wrap">
										<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
										<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Darlee Robertson" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
											<input type="text" class="form-control datetimepicker" value="29-02-2020">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
											<input type="text" class="form-control datetimepicker" value="29-02-2020">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Priority <span class="text-danger">*</span></label>
										<div class="select-priority">
											<span class="select-icon"><i class="ti ti-square-rounded-filled"></i></span>
											<select class="select">
												<option>Select</option>
												<option>High</option>
												<option>Low</option>
												<option>Medium</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Status <span class="text-danger">*</span></label>
										<select class="select2">
											<option>Choose</option>
											<option>Active</option>
											<option>Inactive</option>
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
		<!-- /Add New Tasks -->

		<!-- Edit Task -->
		<div class="toggle-popup1">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Edit Task</h4>
					<a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<div class="pro-create">
						<form action="project-details">							
							<div class="row">
								<div class="col-md-12">
									<div class="project-name">
										<p>Project Name</p>
										<h4>Kofejob</h4>
									</div>
									<div class="form-wrap">
										<label class="col-form-label">Task Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="New Task">
									</div>
									<div class="form-wrap">
										<label class="col-form-label">Category <span class="text-danger">*</span></label>
										<select class="select2">
											<option>Choose</option>
											<option>Mobile App</option>
											<option>Meeting</option>
										</select>
									</div>
									<div class="form-wrap">
										<label class="col-form-label">Total Hours</label>
										<input type="text" class="form-control" value="65">
									</div>									
									<div class="form-wrap">
										<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
										<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Darlee Robertson" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
											<input type="text" class="form-control datetimepicker" value="29-02-2020">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
											<input type="text" class="form-control datetimepicker" value="29-02-2020">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Priority <span class="text-danger">*</span></label>
										<div class="select-priority">
											<span class="select-icon"><i class="ti ti-square-rounded-filled"></i></span>
											<select class="select">
												<option>Select</option>
												<option selected>High</option>
												<option>Low</option>
												<option>Medium</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Status <span class="text-danger">*</span></label>
										<select class="select2">
											<option>Choose</option>
											<option selected>Active</option>
											<option>Inactive</option>
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
								<button type="submit" class="btn btn-primary">Create</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Tasks -->

	</div>
	<!-- /Main Wrapper -->
	<?= $this->include('partials/vendor-scripts') ?>

	<!-- Summernote JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>
		
	<!-- Sticky Sidebar JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>


</body>
</html>