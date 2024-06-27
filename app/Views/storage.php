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
											<a href="<?php echo base_url(); ?>profile">
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
											<a href="<?php echo base_url(); ?>storage" class="active">
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
											<h4>Other Settings</h4>
											<ul>
												<li>
													<a href="<?php echo base_url(); ?>storage" class="active">Storage</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>ban-ip-address">Ban IP Address</a>
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
											<h4>Storage</h4>
										</div>
										<div class="row">

											<!-- Storage -->
											<div class="col-xxl-4 col-sm-6">
												<div class="storage-wrap">
													<div class="storage-icon">
														<span class="system-app-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/storage-icon-01.svg" alt="">
														</span>
														<h6>Local Storage</h6>
													</div>
													<div class="setting-gateway">
														<a href="javascript:void(0);"><i class="ti ti-settings"></i></a>
														<div class="status-toggle">
															<input type="checkbox" id="loc" class="check" checked="">
															<label for="loc" class="checktoggle">	</label>
														</div>
													</div>
												</div>
											</div>
											<!-- /Storage -->

											<!-- Storage -->
											<div class="col-xxl-4 col-sm-6">
												<div class="storage-wrap">
													<div class="storage-icon">
														<span class="system-app-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/storage-icon-02.svg" alt="">
														</span>
														<h6>AWS</h6>
													</div>
													<div class="setting-gateway">
														<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_settings"><i class="ti ti-settings"></i></a>
														<div class="status-toggle">
															<input type="checkbox" id="aws" class="check" checked="">
															<label for="aws" class="checktoggle"></label>
														</div>
													</div>
												</div>
											</div>
											<!-- /Storage -->

										</div>
										<div class="submit-button">
											<a href="#" class="btn btn-light">Cancel</a>
											<button type="submit" class="btn btn-primary">Save Changes</button>
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

		<!-- AWS Settings -->
		<div class="modal custom-modal fade" id="add_settings" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">AWS Settings</h5>
						<div class="d-flex align-items-center mod-toggle">
							<div class="status-toggle">
								<input type="checkbox" id="toggle" class="check" checked="">
								<label for="toggle" class="checktoggle"></label>
							</div>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
								<i class="ti ti-x"></i>
							</button>
						</div>
					</div>
					<div class="modal-body">
						<form action="storage">
							<div class="form-wrap">
								<label class="col-form-label">AWS Access Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Secret Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Bucket Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Region <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Base URL <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
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
		<!-- /AWS Settings -->

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