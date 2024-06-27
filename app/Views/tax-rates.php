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
											<a href="<?php echo base_url(); ?>payment-gateways" class="active">
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
											<h4>Financial Settings</h4>
											<ul>
												<li>
													<a href="<?php echo base_url(); ?>payment-gateways">Payment Gateways</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>bank-accounts">Bank Accounts</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>tax-rates" class="active">Tax Rates</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>currencies">Currencies</a>
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
											<h4>Tax Rates</h4>
											<a href="javascript:void(0)" class="btn-add" data-bs-toggle="modal" data-bs-target="#add_tax" ><i class="ti ti-plus"></i></a>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="form-wrap">
													<label class="col-form-label">VAT</label>
													<div class="icon-form-end">
														<a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax">
															<span class="form-icon"><i class="ti ti-edit"></i></span>
														</a>
														<input type="text" class="form-control" value="16%">
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-wrap">
													<label class="col-form-label">GST</label>
													<div class="icon-form-end">
														<a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax">
															<span class="form-icon"><i class="ti ti-edit"></i></span>
														</a>
														<input type="text" class="form-control" value="14%">
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-wrap">
													<label class="col-form-label">HST</label>
													<div class="icon-form-end">
														<a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax">
															<span class="form-icon"><i class="ti ti-edit"></i></span>
														</a>
														<input type="text" class="form-control" value="12%">
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

		<!-- Add Tax Rate -->
		<div class="modal custom-modal fade" id="add_tax" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Tax Rate</h5>
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
						<form action="tax-rates">
							<div class="form-wrap">
								<label class="col-form-label">Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Tax Rate % <span class="text-danger">*</span></label>
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
		<!-- /Add Tax Rate -->

		<!-- Edit Tax Rate -->
		<div class="modal custom-modal fade" id="edit_tax" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Tax Rate</h5>
						<div class="d-flex align-items-center mod-toggle">
							<div class="status-toggle">
								<input type="checkbox" id="toggle1" class="check" checked="">
								<label for="toggle1" class="checktoggle"></label>
							</div>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
								<i class="ti ti-x"></i>
							</button>
						</div>
					</div>
					<div class="modal-body">
						<form action="tax-rates">
							<div class="form-wrap">
								<label class="col-form-label">Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="VAT">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Tax Rate % <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="16">
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
		<!-- /Edit Tax Rate -->

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