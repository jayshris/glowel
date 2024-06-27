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
											<a href="<?php echo base_url(); ?>invoice-settings" class="active">
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
											<h4>App Settings</h4>
											<ul>
												<li>
													<a href="<?php echo base_url(); ?>invoice-settings">Invoice Settings</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>printers" class="active">Printer</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>custom-fields">Custom Fields</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Printers -->
								<div class="card">
									<div class="card-body">
										<div class="settings-header">
											<h4>Printer</h4>
											<a href="javascript:void(0)" class="btn-add" data-bs-toggle="modal" data-bs-target="#add_printer" ><i class="ti ti-plus"></i></a>
										</div>
										<div class="settings-form">
											<form action="printers">
												<!-- Hp -->
												<div class="settings-sub-header setting-item">
													<div>
														<h6>Hp</h6>
														<p>Shows the details of Hp printers</p>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_printer"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_printer"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
														</div>
													</div>
												</div>
												<div class="profile-details">
													<div class="row">
														<div class="col-md-3 col-sm-6">
															<div class="form-wrap">
																<label class="col-form-label">Printer Name </label>
																<input type="text" class="form-control" value="Hp printer">
															</div>
														</div>
														<div class="col-md-3 col-sm-6">
															<div class="form-wrap">
																<label class="col-form-label">Connection Type</label>
																<input type="text" class="form-control" value="Network">
															</div>
														</div>
														<div class="col-md-3 col-sm-6">
															<div class="form-wrap">
																<label class="col-form-label">IP Address</label>
																<input type="text" class="form-control" value="192.168.0.1">
															</div>
														</div>
														<div class="col-md-3 col-sm-6">
															<div class="form-wrap">
																<label class="col-form-label">Port</label>
																<input type="text" class="form-control" value="900">
															</div>
														</div>
													</div>
												</div>
												<!-- /Euro -->

												<!-- Epson -->
												<div class="settings-sub-header setting-item">
													<div>
														<h6>Epson</h6>
														<p>Shows the details of Epson printers</p>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_printer"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_printer"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
														</div>
													</div>
												</div>
												<div class="profile-details border-0 mb-0">
													<div class="row">
														<div class="col-md-3 col-sm-6">
															<div class="form-wrap">
																<label class="col-form-label">Printer Name </label>
																<input type="text" class="form-control" value="Epson">
															</div>
														</div>
														<div class="col-md-3 col-sm-6">
															<div class="form-wrap">
																<label class="col-form-label">Connection Type</label>
																<input type="text" class="form-control" value="Network">
															</div>
														</div>
														<div class="col-md-3 col-sm-6">
															<div class="form-wrap">
																<label class="col-form-label">IP Address</label>
																<input type="text" class="form-control" value="192.168.0.1">
															</div>
														</div>
														<div class="col-md-3 col-sm-6">
															<div class="form-wrap">
																<label class="col-form-label">Port</label>
																<input type="text" class="form-control" value="900">
															</div>
														</div>
													</div>
												</div>
												<!-- /Epson -->

												<div class="submit-button">
													<a href="#" class="btn btn-light">Cancel</a>
													<button type="submit" class="btn btn-primary">Save Changes</button>
												</div>
											</form>

										</div>
									</div>
								</div>
								<!-- /Printers -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Printer -->
		<div class="modal custom-modal fade" id="add_printer" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Printer</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="printers">
							<div class="form-wrap">
								<label class="col-form-label">Printer Company <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Printer Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Connection Type <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">IP Address <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Port <span class="text-danger">*</span></label>
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
		<!-- /Add Currency -->

		<!-- Edit Printer -->
		<div class="modal custom-modal fade" id="edit_printer" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Printer</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="printers">
							<div class="form-wrap">
								<label class="col-form-label">Printer Company <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Hp">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Printer Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Hp printer">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Connection Type <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Network">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">IP Address <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="198.162.0.1">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Port <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="900">
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
		<!-- /Edit Printer -->

		<!-- Delete Printer -->
		<div class="modal custom-modal fade" id="delete_printer" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="printers">
							<div class="success-message text-center">
								<div class="success-popup-icon">
									<i class="ti ti-trash-x"></i>
								</div>
								<h3>Remove Printer?</h3>
								<p class="del-info">Are you sure you want to remove it.</p>
								<div class="col-lg-12 text-center modal-btn">
									<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
									<button type="submit" class="btn btn-danger">Yes, Delete it</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Printer -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>	
	<!-- Sticky Sidebar JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>