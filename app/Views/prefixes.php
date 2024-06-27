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
											<a href="<?php echo base_url(); ?>company-settings" class="active">
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
											<h4>Website Settings</h4>
											<ul>
												<li>
													<a href="<?php echo base_url(); ?>company-settings">Company Settings</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>localization">Localization</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>prefixes" class="active">Prefixes</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>preference">Preference</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>appearance">Appearance</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>language">Language</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Prefixes -->
								<div class="card">
									<div class="card-body">
										<div class="settings-header">
											<h4>Prefixes</h4>
										</div>	
										<form action="prefixes">							
											<div class="row">
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Products(SKU)</label>
														<input type="text" class="form-control" value="SKU - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Supplier</label>
														<input type="text" class="form-control" value="SUP - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Purchase</label>
														<input type="text" class="form-control" value="PU - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Purchase Return</label>
														<input type="text" class="form-control" value="PR - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Sales</label>
														<input type="text" class="form-control" value="SA - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Sales Return</label>
														<input type="text" class="form-control" value="SR -  ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Customer</label>
														<input type="text" class="form-control" value="CT - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Expense</label>
														<input type="text" class="form-control" value="EX - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Stock Transfer</label>
														<input type="text" class="form-control" value="ST -  ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Stock Adjustment</label>
														<input type="text" class="form-control" value="SA -  ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Sales Order</label>
														<input type="text" class="form-control" value="SO - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Invoice</label>
														<input type="text" class="form-control" value="INV -  ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Estimation</label>
														<input type="text" class="form-control" value="EST - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Transaction</label>
														<input type="text" class="form-control" value="TRN - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Employee</label>
														<input type="text" class="form-control" value="EMP -  ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="form-wrap">
														<label class="col-form-label">Purchase Return</label>
														<input type="text" class="form-control" value="PR -  ">
													</div>
												</div>
											</div>
											<div class="submit-button">
												<a href="#" class="btn btn-light">Cancel</a>
												<button type="submit" class="btn btn-primary">Save Changes</button>
											</div>
										</form>
									</div>
								</div>
								<!-- /Prefixes -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Translation -->
		<div class="modal custom-modal fade" id="add_translation" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Translation</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="language">
							<div class="form-wrap">
								<label class="col-form-label">Language <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Code <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Status</label>
								<div class="radio-wrap">
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
							<div class="modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Translation -->

		<!-- Edit Translation -->
		<div class="modal custom-modal fade" id="edit_translation" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Translation</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="language">
							<div class="form-wrap">
								<label class="col-form-label">Language <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="English">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Code <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="en">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Status</label>
								<div class="radio-wrap">
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
							<div class="modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Translation -->

		<!-- Import Sample -->
		<div class="modal custom-modal fade" id="import_sample" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Import Sample</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="language">
							<div class="form-wrap">
								<label class="col-form-label">File <span class="text-danger">*</span></label>
								<select class="select">
									<option>Inventory</option>
									<option>Expense</option>
									<option>Product</option>
								</select>
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Language <span class="text-danger">*</span></label>
								<select class="select">
									<option>English</option>
									<option>Hindi</option>
									<option>Chinese</option>
								</select>
							</div>
							<div class="form-wrap">
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
							<div class="modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Import Sample -->

		<!-- Delete Translation -->
		<div class="modal custom-modal fade" id="delete_translation" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="language">
							<div class="success-message text-center">
								<div class="success-popup-icon">
									<i class="ti ti-trash-x"></i>
								</div>
								<h3>Remove Translation?</h3>
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
		<!-- /Delete Translation -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>	
	<!-- Sticky Sidebar JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>