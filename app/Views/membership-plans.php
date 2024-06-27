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

						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col-8">
									<h4 class="page-title">Membership Plans</h4>
								</div>
								<div class="col-4 text-end">
									<div class="head-icons">
										<a href="<?php echo base_url(); ?>membership-plans" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<div class="card main-card">
							<div class="card-body pb-0">

								<!-- Search -->
								<div class="search-section mb-0 border-0">
									<div class="row">
										<div class="col-md-5 col-sm-4">
											<div class="form-wrap icon-form">
												<span class="form-icon"><i class="ti ti-search"></i></span>
												<input type="text" class="form-control" placeholder="Search Membership">
											</div>							
										</div>		
										<div class="col-md-7 col-sm-8">					
											<div class="export-list text-sm-end">
												<ul>
													<li>
														<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add Membership</a>
													</li>						
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /Search -->							

							</div>
						</div>
						<div class="membership-plans">
							<div class="plan-selected">
								<h4>Monthly</h4>
								<div class="status-toggle">
									<input id="two_factor" class="check" type="checkbox">
									<label for="two_factor" class="checktoggle">checkbox</label>
								</div>
								<h4>Annually</h4>
							</div>
							<div class="row justify-content-center">
								<div class="col-lg-4 col-md-6">
									<div class="membership-plan-grid">
										<div class="plan-price-head">
											<span class="plan-type">Basic</span>
											<h4>$50 <span>/ month</span></h4>
										</div>
										<div class="Plan-body">
											<div class="plans-features">
												<ul>
													<li><span><i class="ti ti-check"></i></span>10 Contacts</li>
													<li><span><i class="ti ti-check"></i></span>10 Leads</li>
													<li><span><i class="ti ti-check"></i></span>20 Companies</li>
													<li><span><i class="ti ti-check"></i></span>50 Compaigns</li>
													<li><span><i class="ti ti-check"></i></span>100 Projects</li>
													<li><span class="bg-danger"><i class="ti ti-x"></i></span>Deals</li>
													<li><span class="bg-danger"><i class="ti ti-x"></i></span>Tasks</li>
													<li><span class="bg-danger"><i class="ti ti-x"></i></span>Pipelines</li>
												</ul>
											</div>
											<div class="plan-btn text-center">
												<a href="" class="btn btn-primary">Choose</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="membership-plan-grid active">
										<div class="plan-price-head">
											<span class="plan-type">Business</span>
											<h4>$200 <span>/ month</span></h4>
										</div>
										<div class="Plan-body">
											<div class="plans-features">
												<ul>
													<li><span><i class="ti ti-check"></i></span>20 Contacts</li>
													<li><span><i class="ti ti-check"></i></span>20 Leads</li>
													<li><span><i class="ti ti-check"></i></span>50 Companies</li>
													<li><span><i class="ti ti-check"></i></span>Unlimited Compaigns</li>
													<li><span><i class="ti ti-check"></i></span>Unlimited Projects</li>
													<li><span class="bg-danger"><i class="ti ti-x"></i></span>Deals</li>
													<li><span class="bg-danger"><i class="ti ti-x"></i></span>Tasks</li>
													<li><span class="bg-danger"><i class="ti ti-x"></i></span>Pipelines</li>
												</ul>
											</div>
											<div class="plan-btn text-center">
												<a href="" class="btn btn-primary">Choose</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="membership-plan-grid">
										<div class="plan-price-head">
											<span class="plan-type">Enterprise</span>
											<h4>$400 <span>/ month</span></h4>
										</div>
										<div class="Plan-body">
											<div class="plans-features">
												<ul>
													<li><span><i class="ti ti-check"></i></span>Unlimited Contacts</li>
													<li><span><i class="ti ti-check"></i></span>Unlimited Leads</li>
													<li><span><i class="ti ti-check"></i></span>Unlimited Companies</li>
													<li><span><i class="ti ti-check"></i></span>Unlimited Compaigns</li>
													<li><span><i class="ti ti-check"></i></span>Unlimited Projects</li>
													<li><span><i class="ti ti-check"></i></span>Deals</li>
													<li><span><i class="ti ti-check"></i></span>Tasks</li>
													<li><span><i class="ti ti-check"></i></span>Pipelines</li>
												</ul>
											</div>
											<div class="plan-btn text-center">
												<a href="" class="btn btn-primary">Choose</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>					
					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Plan -->
		<div class="toggle-popup">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Add New Plan</h4>
					<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<div class="pro-create">
						<form action="membership-plans">							
							<div class="accordion-lists" id="list-accord">

								<!-- Basic Info -->
								<div class="manage-user-modal">
									<div class="manage-user-modals">
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<label class="col-form-label"> Plan Name <span class="text-danger">*</span></label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-wrap">
													<label class="col-form-label">Plan Type <span class="text-danger">*</span></label>
													<select class="select">
														<option>Choose</option>
														<option>Basic</option>
														<option>Business</option>
														<option>Enterprise</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-wrap">
													<div class="d-flex justify-content-between align-items-center">
														<label class="col-form-label">Plan Price <span class="text-danger">*</span></label>
														<span class="text-danger"><i class="ti ti-info-circle me-2"></i>Set 0 for free</span>
													</div>
													<select class="select">
														<option>Choose</option>
														<option>$50</option>
														<option>$200</option>
														<option>$400</option>
													</select>
												</div>
											</div>		
											<div class="col-md-12">
												<h5 class="mb-3">Plan Settings</h5>
											</div>								
											<div class="col-md-6">
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
											<div class="col-md-6">
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
											<div class="col-md-6">
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
											<div class="col-md-6">
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
											<div class="col-md-6">
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
											<div class="col-md-6">
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
											<div class="col-md-6">
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
											<div class="col-md-6">
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
										</div>
									</div>
								</div>
								<!-- /Basic Info -->

							</div>
							<div class="submit-button text-end">
								<a href="#" class="btn btn-light sidebar-close">Cancel</a>
								<button type="submit" class="btn btn-primary">Create</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Plan -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>

	<!-- Summernote JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>
</body>
</html>