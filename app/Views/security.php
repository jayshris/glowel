<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/feather.css">



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
						<!-- Settings Menu -->
						<div class="card settings-tab">
							<div class="card-body pb-0">
								<div class="settings-menu">
									<ul class="nav">
										<li>
											<a href="<?php echo base_url(); ?>profile" class="active">
												<i class="ti ti-settings-cog"></i> General Settings
											</a>
										</li>
										<li>
											<a href="<?php echo base_url(); ?>company-settings">
												<i class="ti ti-world-cog"></i> Website Settings
											</a>
										</li>
										<li>
											<a href="<?php echo base_url(); ?>invoice-settings">
												<i class="ti ti-apps"></i> App Settings
											</a>
										</li>
										<li>
											<a href="<?php echo base_url(); ?>email-settings">
												<i class="ti ti-device-laptop"></i> System Settings
											</a>
										</li>
										<li>
											<a href="<?php echo base_url(); ?>payment-gateways">
												<i class="ti ti-moneybag"></i> Financial Settings
											</a>
										</li>
										<li>
											<a href="<?php echo base_url(); ?>storage">
												<i class="ti ti-flag-cog"></i> Other Settings
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Settings Menu -->

						<div class="row">
							<div class="col-xl-3 col-lg-12 theiaStickySidebar">

								<!-- Settings Sidebar -->
								<div class="card">
									<div class="card-body">
										<div class="settings-sidebar">
											<h4>General Settings</h4>
											<ul>
												<li>
													<a href="<?php echo base_url(); ?>profile">Profile</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>security" class="active">Security</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>notifications">Notifications</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>connected-apps">Connected Apps</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Settings Info -->
								<div class="card">
									<div class="card-body pb-0">
										<div class="settings-header">
											<h4>Security Settings</h4>
										</div>
										<div class="settings-form">
											<div class="row">
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="security-grid flex-fill">
														<div class="security-header">
															<div class="security-heading">
																<h5>Password</h5>
															</div>
															<div class="security-content">
																<p>Last Changed 03 Jan 2023, 09:00 AM</p>
															</div>
														</div>														
														<div class="security-btn security-btn-info">
															<a href="javascript:void(0)" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#change_password">
																Change Password
															</a>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="security-grid flex-fill">
														<div class="security-header">
															<div class="security-heading">
																<h5>Two Factor</h5>
																<div class="status-toggle">
																	<input id="two_factor" class="check" type="checkbox" checked="">
																	<label for="two_factor" class="checktoggle">checkbox</label>
																</div>
															</div>
															<div class="security-content">
																<p>Receive codes via SMS or email every time you login</p>
															</div>
														</div>
														<div class="security-btn security-btn-info">
															<a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete_two_factor">Delete Account</a>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="security-grid flex-fill">
														<div class="security-header">
															<div class="security-heading">
																<h5>Google Authenticator</h5>
																<div class="status-toggle">
																	<input id="google_authenticator" class="check" type="checkbox" checked="">
																	<label for="google_authenticator" class="checktoggle">checkbox</label>
																</div>
															</div>
															<div class="security-content">
																<p>Google Authenticator adds an extra layer of security to your online accounts by adding a second step of verification when you sign in.</p>
															</div>
														</div>
														<div class="security-btn">
															<span class="badge badge-light-success">Connected</span>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="security-grid flex-fill">
														<div class="security-header">
															<div class="security-heading">
																<h5>Phone Number Verification <i class="ti ti-square-rounded-check-filled text-success"></i></h5>
															</div>
															<div class="security-content">
																<p class="text-success-light">Verified Mobile Number : <span>+99264710583</span></p>
															</div>
														</div>
														<div class="security-btn  security-btn-info">
															<a href="javascript:void(0)" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#change_phone_number">Change</a>
															<a href="javascript:void(0)" class="btn btn-remove">Remove</a>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="security-grid flex-fill">
														<div class="security-header">
															<div class="security-heading">
																<h5>Email Verification <i class="ti ti-square-rounded-check-filled text-success"></i></h5>
															</div>
															<div class="security-content">
																<p class="text-success-light">Verified Email : <span>info@example.com</span></p>
															</div>
														</div>
														<div class="security-btn security-btn-info">
															<a href="javascript:void(0)" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#change_email">Change</a>
															<a href="javascript:void(0)" class="btn btn-remove">Remove</a>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="security-grid flex-fill">
														<div class="security-header">
															<div class="security-heading">
																<h5>Device Management</h5>
															</div>
															<div class="security-content">
																<p>Last Changed 17 Feb 2023, 11.00 AM</p>
															</div>
														</div>
														<div class="security-btn security-btn-info">
															<a href="javascript:void(0)" class="btn btn-light">Manage</a>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="security-grid flex-fill">
														<div class="security-header">
															<div class="security-heading">
																<h5>Account Activity</h5>
															</div>
															<div class="security-content">
																<p>Last Changed 22 Feb 2023, 01:20 PM</p>
															</div>
														</div>
														<div class="security-btn">
															<a href="javascript:void(0)" class="btn btn-light">View</a>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="security-grid flex-fill">
														<div class="security-header">
															<div class="security-heading">
																<h5>Deactive Account</h5>
															</div>
															<div class="security-content">
																<p>Last Changed 04 Mar 2023, 08:40 AM</p>
															</div>
														</div>
														<div class="security-btn">
															<a href="javascript:void(0)" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deactive_account">Deactive</a>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-6 d-flex">
													<div class="security-grid flex-fill">
														<div class="security-header">
															<div class="security-heading">
																<h5>Delete Account</h5>
															</div>
															<div class="security-content">
																<p>Last Changed 13 Mar 2023, 02:40 PM</p>
															</div>
														</div>
														<div class="security-btn">
															<a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete_account">Delete Account</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Info -->

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Change Password -->
		<div class="modal custom-modal fade" id="change_password" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="security">
							<div class="form-wrap">
								<label class="col-form-label">Current Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">New Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Confirm Password <span class="text-danger">*</span></label>
								<input type="password" class="form-control">
							</div>
							<div class="modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Change Password -->

		<!-- Delete Account -->
		<div class="modal custom-modal fade" id="delete_account" role="dialog">
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
							<h3>Delete Account</h3>
							<p class="del-info">Are you sure want to delete?</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url(); ?>security" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Account -->

		<!-- Delete Account -->
		<div class="modal custom-modal fade" id="delete_two_factor" role="dialog">
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
							<h3>Delete Two Factor</h3>
							<p class="del-info">Are you sure want to delete?</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url(); ?>security" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Account -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>

	<!-- Profile Upload JS -->
	<script src="<?php echo base_url(); ?>assets/js/profile-upload.js"></script>
		
	<!-- Sticky Sidebar JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>


</body>
</html>