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

								<!-- Membership Addons -->

								<form action="membership-addons">
									<div class="row">
										<div class="col-lg-4 col-md-6">
											<div class="form-wrap">
												<label class="col-form-label">Addon Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<h5 class="mb-3">Addon Settings</h5>
										</div>	
										<div class="col-lg-4 col-md-6">
											<div class="form-wrap">
												<label class="col-form-label">Contacts <span class="text-danger">*</span></label>
												<div class="d-flex align-items-center">
													<input type="text" class="form-control" value="0-100">
													<div class="status-toggle ms-3">
														<input id="mem-tog-1" class="check" type="checkbox">
														<label for="mem-tog-1" class="checktoggle">checkbox</label>
													</div>
												</div>
												<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="form-wrap">
												<label class="col-form-label">Compaigns <span class="text-danger">*</span></label>
												<div class="d-flex align-items-center">
													<input type="text" class="form-control" value="0-100">
													<div class="status-toggle ms-3">
														<input id="mem-tog-4" class="check" type="checkbox">
														<label for="mem-tog-4" class="checktoggle">checkbox</label>
													</div>
												</div>
												<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="form-wrap">
												<label class="col-form-label">Leads <span class="text-danger">*</span></label>
												<div class="d-flex align-items-center">
													<input type="text" class="form-control" value="0-100">
													<div class="status-toggle ms-3">
														<input id="mem-tog-2" class="check" type="checkbox">
														<label for="mem-tog-2" class="checktoggle">checkbox</label>
													</div>
												</div>
												<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="form-wrap">
												<label class="col-form-label">Tasks <span class="text-danger">*</span></label>
												<div class="d-flex align-items-center">
													<input type="text" class="form-control" value="0-100">
													<div class="status-toggle ms-3">
														<input id="mem-tog-7" class="check" type="checkbox">
														<label for="mem-tog-7" class="checktoggle">checkbox</label>
													</div>
												</div>
												<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="form-wrap">
												<label class="col-form-label">Companies <span class="text-danger">*</span></label>
												<div class="d-flex align-items-center">
													<input type="text" class="form-control" value="0-100">
													<div class="status-toggle ms-3">
														<input id="mem-tog-3" class="check" type="checkbox">
														<label for="mem-tog-3" class="checktoggle">checkbox</label>
													</div>
												</div>
												<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="form-wrap">
												<label class="col-form-label">Pipelines <span class="text-danger">*</span></label>
												<div class="d-flex align-items-center">
													<input type="text" class="form-control" value="0-100">
													<div class="status-toggle ms-3">
														<input id="mem-tog-8" class="check" type="checkbox">
														<label for="mem-tog-8" class="checktoggle">checkbox</label>
													</div>
												</div>
												<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="form-wrap">
												<label class="col-form-label">Projects <span class="text-danger">*</span></label>
												<div class="d-flex align-items-center">
													<input type="text" class="form-control" value="0-100">
													<div class="status-toggle ms-3">
														<input id="mem-tog-5" class="check" type="checkbox">
														<label for="mem-tog-5" class="checktoggle">checkbox</label>
													</div>
												</div>
												<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="form-wrap">
												<label class="col-form-label">Deals <span class="text-danger">*</span></label>
												<div class="d-flex align-items-center">
													<input type="text" class="form-control" value="0-100">
													<div class="status-toggle ms-3">
														<input id="mem-tog-6" class="check" type="checkbox">
														<label for="mem-tog-6" class="checktoggle">checkbox</label>
													</div>
												</div>
												<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
											</div>
										</div>
										<div class="col-lg-4 col-md-6">
											<div class="form-wrap">
												<label class="col-form-label">Activities <span class="text-danger">*</span></label>
												<div class="d-flex align-items-center">
													<input type="text" class="form-control" value="0-100">
													<div class="status-toggle ms-3">
														<input id="mem-tog-9" class="check" type="checkbox">
														<label for="mem-tog-9" class="checktoggle">checkbox</label>
													</div>
												</div>
												<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
											</div>
										</div>
									</div>
									<div class="submit-button text-end">
										<a href="#" class="btn btn-light sidebar-close">Cancel</a>
										<button type="submit" class="btn btn-primary">Create</button>
									</div>
								</form>
								
								<!-- /Membership Addons -->							

							</div>
						</div>			
					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>

	<!-- Summernote JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>
</body>
</html>