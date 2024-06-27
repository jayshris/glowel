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
									<h3 class="page-title">Leads Dashboard</h3>
								</div>
								<div class="col-md-8 float-end ms-auto">
									<div class="d-flex title-head">
										<div class="daterange-picker d-flex align-items-center justify-content-center">
											<div class="form-sort me-2">
												<i class="ti ti-calendar"></i>
												<input type="text" class="form-control  date-range bookingrange">
											</div>	
											<div class="head-icons mb-0">
												<a href="<?php echo base_url(); ?>leads-dashboard" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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
											<h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Leads</h4>
											<div class="dropdown statistic-dropdown">
												<div class="card-select">
													<ul>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																<i class="ti ti-calendar-check me-2"></i>Last 30 days
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
													</ul>
												</div>
											</div>
										</div>
										<div class="table-responsive custom-table">
											<table class="table dataTable" id="lead-project"> 
												<thead class="thead-light">
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
																Last 30 Days
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 30 Days
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 15 Days
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 7 Days
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div id="leadpiechart"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 d-flex">		
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
										<div id="contact-report"></div>
									</div>
								</div>
							</div>
							<div class="col-md-6">		
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
							</div>
							<div class="col-md-6">	
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
														<select class="select2">
															<option>Choose</option>
															<option>Hendry</option>
															<option>Guillory</option>
															<option>Jami</option>
															<option>Theresa</option>
															<option>Espinosa</option>
														</select>
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
								<a href="#" class="btn btn-light">Cancel</a>
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
														<select class="select2">
															<option>Choose</option>
															<option selected>Hendry</option>
															<option>Guillory</option>
															<option>Jami</option>
															<option>Theresa</option>
															<option>Espinosa</option>
														</select>
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
								<a href="#" class="btn btn-light">Cancel</a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#create_contact" class="btn btn-primary">Create</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Contact -->

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
						<form action="contacts">
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
						<form action="contacts">	
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