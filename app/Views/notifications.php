<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
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
													<a href="<?php echo base_url(); ?>security">Security</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>notifications" class="active">Notifications</a>
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
									<div class="card-body">
										<div class="settings-header">
											<h4>Security Settings</h4>
										</div>
										<div class="settings-form">

											<!-- General Notifications -->	
											<div class="settings-sub-header">
												<h6>General Notifications</h6>
												<p>Select notifications </p>
											</div>
											<div class="notification-wrap">
												<ul>
													<li>
														<div class="security-checkbox">
															<label class="checkboxs">
																<input type="checkbox" checked>				
																<span class="checkmarks"></span>
																Mobile Push Notifications
															</label>
														</div>
													</li>
													<li>
														<div class="security-checkbox">
															<label class="checkboxs">
																<input type="checkbox" checked>				
																<span class="checkmarks"></span>
																Desktop Notifications
															</label>
														</div>
													</li>
													<li>
														<div class="security-checkbox">
															<label class="checkboxs">
																<input type="checkbox" checked>				
																<span class="checkmarks"></span>
																Email Notifications
															</label>
														</div>
													</li>
													<li>
														<div class="security-checkbox">
															<label class="checkboxs">
																<input type="checkbox" checked>				
																<span class="checkmarks"></span>
																SMS Notifications
															</label>
														</div>
													</li>
												</ul>
											</div>
											<!-- /General Notifications -->		

											<!-- Custom Notifications -->									
											<div class="settings-sub-header">
												<h6>Custom Notifications</h6>
												<p>Select when you will be notified when the following changes occur </p>
											</div>
											<div class="table-responsive notificaion-table">
												<table class="table table-borderless">
													<thead>
														<tr>
															<th></th>
															<th>Push</th>
															<th>SMS</th>
															<th>Email</th>
														</tr>
													</thead>
													<tbody class="custom-table-data">
														<tr>
															<td>
																Legendary
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="users4" class="check" checked>
																	<label for="users4" class="checktoggle">	</label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="users5" class="check" checked>
																	<label for="users5" class="checktoggle">	</label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="users6" class="check" checked>
																	<label for="users6" class="checktoggle">	</label>
																</div>
															</td>
														</tr>	
														<tr>
															<td>
																Transaction
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user5" class="check" checked>
																	<label for="user5" class="checktoggle">	</label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user6" class="check" checked>
																	<label for="user6" class="checktoggle">	</label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user7" class="check" checked>
																	<label for="user7" class="checktoggle">	</label>
																</div>
															</td>
														</tr>												
														<tr>
															<td>
																Email Verification
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user8" class="check" checked>
																	<label for="user8" class="checktoggle"></label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user9" class="check" checked>
																	<label for="user9" class="checktoggle"></label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user10" class="check" checked>
																	<label for="user10" class="checktoggle"></label>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																OTP
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user11" class="check" checked>
																	<label for="user11" class="checktoggle"></label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user12" class="check" checked>
																	<label for="user12" class="checktoggle"></label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user13" class="check" checked>
																	<label for="user13" class="checktoggle"></label>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																Activity
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user14" class="check" checked>
																	<label for="user14" class="checktoggle"></label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user15" class="check" checked>
																	<label for="user15" class="checktoggle"></label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user16" class="check" checked>
																	<label for="user16" class="checktoggle"></label>
																</div>
															</td>
														</tr>
														<tr>
															<td>
																Account
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user17" class="check" checked>
																	<label for="user17" class="checktoggle"></label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user18" class="check" checked>
																	<label for="user18" class="checktoggle"></label>
																</div>
															</td>
															<td>
																<div class="status-toggle modal-status">
																	<input type="checkbox" id="user19" class="check" checked>
																	<label for="user19" class="checktoggle"></label>
																</div>
															</td>
														</tr>										
													</tbody>
												</table>
											</div>
											<!-- /Custom Notifications -->

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