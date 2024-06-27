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

						<div class="card main-card">
							<div class="card-body">

								<!-- Search -->
								<div class="search-section">
									<div class="row">
										<div class="col-md-5 col-sm-4">
											<div class="form-wrap icon-form">
												<span class="form-icon"><i class="ti ti-search"></i></span>
												<input type="text" class="form-control" placeholder="Search Task">
											</div>							
										</div>	
										<div class="col-md-7 col-sm-8">					
											<div class="export-list text-sm-end">
												<ul>								
													<li>
														<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add New Task</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /Search -->

								<!-- Filter -->
								<div class="filter-section">
									<div class="row align-items-center">
										<div class="col-md-4">
											<div class="sortby-list">
												<ul>
													<li>
														<div class="sort-dropdown drop-down task-drops">
															<a href="javascript:void(0);" class="dropdown-toggle"  data-bs-toggle="dropdown">Completed</a>
															<div class="dropdown-menu  dropdown-menu-start">
								    							<ul>
								    								<li>
								    									<a href="<?php echo base_url(); ?>tasks">
								    										<i class="ti ti-dots-vertical"></i>All Tasks
								    									</a>
								    								</li>
								    								<li>
								    									<a href="<?php echo base_url(); ?>tasks-important">
								    										<i class="ti ti-dots-vertical"></i>Important
								    									</a>
								    								</li>
								    								<li>
								    									<a href="<?php echo base_url(); ?>tasks-completed">
								    										<i class="ti ti-dots-vertical"></i>Completed
								    									</a>
								    								</li>
								    							</ul>
								    						</div>
								  						</div>
								  					</li>
								  				</ul>
								  			</div>
										</div>
										<div class="col-md-8">
											<div class="filter-list">
												<ul class="justify-content-md-end">
													<li class="all-read">
														<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span>Mark all as read</label>
													</li>
													<li>
														<div class="sort-dropdown drop-down">
															<a href="javascript:void(0);" class="dropdown-toggle"  data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2"></i>Sort </a>
															<div class="dropdown-menu  dropdown-menu-start">
					    										<ul>
					    											<li>
					    												<a href="javascript:void(0);">
					    													<i class="ti ti-dots-vertical"></i>Ascending
					    												</a>
					    											</li>
					    											<li>
					    												<a href="javascript:void(0);">
					    													<i class="ti ti-dots-vertical"></i>Descending
					    												</a>
					    											</li>
					    											<li>
					    												<a href="javascript:void(0);">
					    													<i class="ti ti-dots-vertical"></i>Recently Viewed
					    												</a>
					    											</li>
					    											<li>
					    												<a href="javascript:void(0);">
					    													<i class="ti ti-dots-vertical"></i>Recently Added
					    												</a>
					    											</li>
					    										</ul>
					  										</div>
														</div>
													</li>
													<li>
														<div class="form-wrap icon-form mb-0">
															<span class="form-icon"><i class="ti ti-calendar"></i></span>
															<input type="text" class="form-control bookingrange" placeholder="">
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
																				<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Task Name</a>
																			</div>
																			<div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
																				<div class="filter-content-list">
																					<div class="form-wrap icon-form">
																						<span class="form-icon"><i class="ti ti-search"></i></span>
																						<input type="text" class="form-control" placeholder="Search Task">
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
																								<h5>Add a form to Update Task</h5>
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
																								<h5>Add a form to Update Task</h5>
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
																								<h5>Update orginal content</h5>
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
																								<h5>Use only component colours</h5>
																							</div>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="filter-set-content">
																			<div class="filter-set-content-head">
																				<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner"> Task Type</a>
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
																				<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsestatus" aria-expanded="false" aria-controls="collapsestatus">Tags</a>
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
																								<h5>Promotion</h5>
																							</div>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="filter-set-content">
																			<div class="filter-set-content-head">
																				<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Created Date</a>
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
																								<h5>23 Oct 2023 </h5>
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
																								<h5>29 Sep 2023</h5>
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
																								<h5>24 Oct 2023 </h5>
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
																								<h5>25 Oct 2023 </h5>
																							</div>
																						</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="filter-set-content">
																			<div class="filter-set-content-head">
																				<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Created By</a>
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
																				<a href="<?php echo base_url(); ?>tasks-completed" class="btn btn-primary">Filter</a>
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
									</div>
								</div>
								<!-- /Filter -->

								<!-- Recent Task List -->
								<div class="task-wrapper">
									<a href="#" class="task-accordion" data-bs-toggle="collapse" data-bs-target="#recent">
										<h4>Recent<span>24</span></h4>
									</a>
									<div class="tasks-activity tasks collapse show" id="recent">
										<ul>
											<li class="task-wrap  success">
												<div class="task-info">
													<span class="task-icon"><i class="ti ti-grip-vertical"></i></span>
													<div class="task-checkbox">
														<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
													</div>
													<div class="set-star rating-select">
														<i class="fa fa-star"></i>
													</div>
													<p><del>Make sure all the padding should be 24px</del></p>
													<span class="badge badge-pill badge-status bg-green"><i class="ti ti-phone"></i>Calls</span>
													<span class="badge badge-tag bg-success">Completed</span>
												</div>
												<div class="task-actions">
													<ul>
														<li class="task-time">
															<span class="badge badge-tag badge-purple-light">Promotion</span>
														</li>
														<li class="task-date">
															<i class="ti ti-calendar-exclamation"></i>23 Oct 2023 
														</li>
														<li class="task-owner">
															<div class="task-user">
																<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-14.jpg" alt="img">
															</div>
															<div class="dropdown table-action">
																<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="fa fa-ellipsis-v"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item edit-popup" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																	<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_activity"><i class="ti ti-trash text-danger"></i> Delete</a>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</li>									
										</ul>
									</div>
								</div>
								<!-- /Recent Task List -->

								<!-- Recent Task List -->
								<div class="task-wrapper">
									<a href="#" class="task-accordion" data-bs-toggle="collapse" data-bs-target="#yesterday">
										<h4>Yesterday</h4>
									</a>
									<div class="tasks-activity tasks collapse show" id="yesterday">
										<ul>
											<li class="task-wrap  success">
												<div class="task-info">
													<span class="task-icon"><i class="ti ti-grip-vertical"></i></span>
													<div class="task-checkbox">
														<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
													</div>
													<div class="set-star rating-select">
														<i class="fa fa-star"></i>
													</div>
													<p><del>Use border radius as 5px or 10 px</del></p>
													<span class="badge badge-pill badge-status bg-blue"><i class="ti ti-subtask"></i>Task</span>
													<span class="badge badge-tag bg-success">Completed</span>
												</div>
												<div class="task-actions">
													<ul>
														<li class="task-time">
															<span class="badge badge-tag badge-success-light">Collab</span>
															<span class="badge badge-tag badge-warning-light">Rated</span>
														</li>
														<li class="task-date">
															<i class="ti ti-calendar-exclamation"></i>22 Oct 2023 
														</li>
														<li class="task-owner">
															<div class="task-user">
																<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-14.jpg" alt="img">
															</div>
															<div class="dropdown table-action">
																<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="fa fa-ellipsis-v"></i>
																</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item edit-popup" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																	<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_activity"><i class="ti ti-trash text-danger"></i> Delete</a>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</li>										
										</ul>
									</div>
								</div>
								<!-- /Recent Task List -->

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Task -->
		<div class="toggle-popup">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Add New Task</h4>
					<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<form action="tasks-completed" class="toggle-height">
						<div class="pro-create">
							<div class="row">
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Title <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
									<div class="form-wrap">
										<label class="col-form-label">Category</label>
										<select class="select">
											<option>Choose</option>
											<option>Calls</option>
											<option>Email</option>
											<option>Email</option>
											<option>Meeting</option>
										</select>
									</div>
									<div class="form-wrap">
										<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
										<select class="multiple-img" multiple="multiple">
											<option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
											<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
											<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
											<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
											<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
									<div class="form-wrap icon-form">
	 	 								<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
	 	  								<input type="text" class="form-control datetimepicker">
	 	  							</div>
								</div>
								<div class="col-md-6">
									<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
									<div class="form-wrap icon-form">
	 	 								<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
	 	  								<input type="text" class="form-control datetimepicker">
	 	  							</div>
								</div>
								<div class="col-md-12">									
									<div class="form-wrap">
										<label class="col-form-label">Tags <span class="text-danger">*</span></label>
										<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Promotion, Collab" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Priority</label>
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
										<label class="col-form-label">Status</label>
										<select class="select">
											<option selected>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<div class="summernote"></div>
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
		<!-- /Add New Task -->

		<!-- Edit Task -->
		<div class="toggle-popup1">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Edit Task</h4>
					<a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<form action="tasks-completed" class="toggle-height">
						<div class="pro-create">
							<div class="row">
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Title <span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="Add a form to Update Task">
									</div>
									<div class="form-wrap">
										<label class="col-form-label">Category</label>
										<select class="select">
											<option>Choose</option>
											<option>Calls</option>
											<option>Email</option>
											<option>Email</option>
											<option>Meeting</option>
										</select>
									</div>
									<div class="form-wrap">
										<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
										<select class="multiple-img" multiple="multiple">
											<option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
											<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
											<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
											<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
											<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
									<div class="form-wrap icon-form">
	 	 								<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
	 	  								<input type="text" class="form-control datetimepicker" value="27-10-2024">
	 	  							</div>
								</div>
								<div class="col-md-6">
									<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
									<div class="form-wrap icon-form">
	 	 								<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
	 	  								<input type="text" class="form-control datetimepicker" value="29-10-2024">
	 	  							</div>
								</div>
								<div class="col-md-12">									
									<div class="form-wrap">
										<label class="col-form-label">Tags <span class="text-danger">*</span></label>
										<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Promotion, Collab" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Priority</label>
										<div class="select-priority">
											<span class="select-icon"><i class="ti ti-square-rounded-filled"></i></span>
											<select class="select">
												<option selected>High</option>
												<option>Low</option>
												<option>Medium</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Status</label>
										<select class="select">
											<option selected>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<div class="summernote"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="submit-button text-end">
							<a href="#" class="btn btn-light sidebar-close1">Cancel</a>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Task -->

		<!-- Delete Task -->
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
							<h3>Remove Task?</h3>
							<p class="del-info">Are you sure you want to remove task you selected.</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url(); ?>tasks-completed" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete ActivTaskity -->

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
						<form action="campaign">
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

	<!-- Summernote JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>


</body>
</html>