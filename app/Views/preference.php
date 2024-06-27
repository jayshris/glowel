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
													<a href="<?php echo base_url(); ?>prefixes">Prefixes</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>preference" class="active">Preference</a>
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
											<h4>Preference</h4>
										</div>	
										<form action="preference">							
											<div class="row">
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-01.svg" alt="">
															<h6>Contact</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer1" class="check" checked="">
																<label for="prefer1" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-02.svg" alt="">
															<h6>Deals</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer2" class="check" checked="">
																<label for="prefer2" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-03.svg" alt="">
															<h6>Leads</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer3" class="check" checked="">
																<label for="prefer3" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-04.svg" alt="">
															<h6>Pipelines</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer4" class="check" checked="">
																<label for="prefer4" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-05.svg" alt="">
															<h6>Campaign</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer5" class="check" checked="">
																<label for="prefer5" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-06.svg" alt="">
															<h6>Projects</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer6" class="check" checked="">
																<label for="prefer6" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-07.svg" alt="">
															<h6>Tasks</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer7" class="check" checked="">
																<label for="prefer7" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-08.svg" alt="">
															<h6>Acivities</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer9" class="check" checked="">
																<label for="prefer9" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-09.svg" alt="">
															<h6>Company</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer10" class="check" checked="">
																<label for="prefer10" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-10.svg" alt="">
															<h6>Analytics</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer11" class="check" checked="">
																<label for="prefer11" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-11.svg" alt="">
															<h6>Clients</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer12" class="check" checked="">
																<label for="prefer12" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="storage-wrap prefer-wrap">
														<div class="storage-icon">
															<img src="<?php echo base_url(); ?>assets/img/icons/preference-12.svg" alt="">
															<h6>Customers</h6>
														</div>
														<div class="setting-gateway">
															<div class="status-toggle">
																<input type="checkbox" id="prefer13" class="check" checked="">
																<label for="prefer13" class="checktoggle">	</label>
															</div>
														</div>
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

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>	
	<!-- Sticky Sidebar JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
</body>
</html>