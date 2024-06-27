<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
</head>
<body>
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">
	<div class="preloader">
			<div class="preloader-blk">
				<div class="preloader__image"></div>
			</div>
		</div>
	<?= $this->include('partials/menu') ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">
						<div class="page-header">
							<div class="row align-items-center ">
								<div class="col-md-4">
									<h3 class="page-title">Project Dashboard</h3>
								</div>
								<div class="col-md-8 float-end ms-auto">
									<div class="d-flex title-head">
										<div class="daterange-picker d-flex align-items-center justify-content-center">
											<div class="form-sort me-2">
												<i class="ti ti-calendar"></i>
												<input type="text" class="form-control  date-range bookingrange">
											</div>	
											<div class="head-icons mb-0">
												<a href="<?php echo base_url(); ?>project-dashboard" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-7">		
								<div class="card">
									<div class="card-body">
										<div class="statistic-header">
											<h4><i class="ti ti-grip-vertical me-1"></i>Recent Projects</h4>
											<div class="dropdown statistic-dropdown">
												<div class="card-select">
													<ul>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																<i class="ti ti-calendar-check me-2"></i>Last 7 days
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 15 days
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 30 days
																</a>
															</div>
														</li>
														<li>
															<a class="btn btn-primary add-popup" href="javascript:void(0);">
																<i class="ti ti-square-rounded-plus me-1"></i>Add Project
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="table-responsive custom-table">
											<table class="table dataTable" id="recent-project"> 
												<thead class="thead-light">
													<tr>
														<th>Priority</th>
														<th>Name</th>
														<th>Client</th>
														<th>Due Date</th>
													</tr>
												</thead>
												<tbody>

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5 d-flex">		
								<div class="card w-100">
									<div class="card-body">
										<div class="statistic-header">
											<h4><i class="ti ti-grip-vertical me-1"></i>Projects By Stage</h4>
											<div class="dropdown statistic-dropdown">
												<div class="card-select">
													<ul>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Last 3 months
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 3 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 6 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 12 months
																</a>
															</div>
														</li>
													</ul>
												</div>
												
											</div>
										</div>
										<div id="contacts-analysis"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 d-flex">		
								<div class="card w-100">
									<div class="card-body">
										<div class="statistic-header">
											<h4><i class="ti ti-grip-vertical me-1"></i>Projects By Stage</h4>
											<div class="dropdown statistic-dropdown">
												<div class="card-select">
													<ul>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Sales Pipeline
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Marketing Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Sales Pipeline
																</a>
															</div>
														</li>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Last 3 months
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 3 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 6 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 12 months
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div id="project-stage"></div>
									</div>
								</div>
							</div>
							<div class="col-md-6 ">		
								<div class="card">
									<div class="card-body">
										<div class="statistic-header">
											<h4><i class="ti ti-grip-vertical me-1"></i>Leads By Stage</h4>
											<div class="dropdown statistic-dropdown">
												<div class="card-select">
													<ul>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Marketing Pipeline
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Marketing Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Sales Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Email
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Chats
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Operational
																</a>
															</div>
														</li>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Last 3 months
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 3 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 6 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 12 months
																</a>
															</div>
														</li>
													</ul>
												</div>
												
											</div>
										</div>
										<div id="last-chart"></div>
									</div>
								</div>
								<div class="card">
									<div class="card-body ">
										<div class="statistic-header">
											<h4><i class="ti ti-grip-vertical me-1"></i>Won Deals Stage</h4>
											<div class="dropdown statistic-dropdown">
												<div class="card-select">
													<ul>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Marketing Pipeline
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Marketing Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Sales Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Email
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Chats
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Operational
																</a>
															</div>
														</li>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Last 3 months
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 3 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 6 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 12 months
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div id="won-chart"></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Project -->
		<div class="toggle-popup">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Add New Project</h4>
					<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<form action="project-dashboard" class="toggle-height">
						<div class="pro-create">
							<div class="row">
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Project ID<span class="text-danger"> *</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Project Type <span class="text-danger">*</span></label>
										<select class="select2">
											<option>Choose</option>
											<option>Mobile App</option>
											<option>Meeting</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Client <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select</option>
											<option>NovaWave LLC</option>
											<option>SilverHawk</option>
											<option>HarborView</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Category <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select</option>
											<option>HarborView</option>
											<option>LLC</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Project Timing <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select</option>
											<option>Hourly</option>
											<option>Minutes</option>
										</select>
									</div>
								</div>	
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Price <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>	
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Amount <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>	
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Total <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>	
								<div class="col-md-6">
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
									<div class="form-wrap">
										<label class="col-form-label">Team Leader  <span class="text-danger">*</span></label>
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
										<label class="col-form-label">Priority</label>
										<select class="select">
											<option>Select</option>
											<option>High</option>
											<option>Low</option>
											<option>Medium</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea class="form-control" rows="4"></textarea>
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
		<!-- /Add New Project -->

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
								<a href="<?php echo base_url(); ?>contacts" class="btn btn-danger">Yes, Delete it</a>
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
								<a href="<?php echo base_url(); ?>contact-details" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Contact -->

		<!-- Add Event Modal -->
		<div id="dwnld_report" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Download Report</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					</div>
					<div class="modal-body">
						<form action="calendar">
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
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="#" class="btn btn-primary">Download Now</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Event Modal -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>
	
	<!-- Apexchart JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/apexchart/apexcharts.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/apexchart/chart-data.js"></script>

</body>
</html>