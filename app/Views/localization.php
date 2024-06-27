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
													<a href="<?php echo base_url(); ?>localization" class="active">Localization</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>prefixes">Prefixes</a>
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
									<div class="card-body settings-form">
										<div class="settings-header">
											<h4>Localization</h4>
										</div>	
										<form action="localization">	
											<div class="settings-sub-header">
												<h6>Basic Information</h6>
												<p>Provide the basic information below</p>
											</div>			
											<div class="profile-details">			
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Language</h6>
															<p>Select Language of the website</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>English</option>
																<option>Chinese</option>
																<option>Hindi</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Language Switcher</h6>
															<p>To display in all the pages</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<div class="status-toggle">
																<input type="checkbox" id="prefer3" class="check" checked="">
																<label for="prefer3" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Timezone</h6>
															<p>Select date format to display in website</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>UTC 4:30</option>
																<option>(UTC+11:00) INR</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Date Format</h6>
															<p>Select Language of the website</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>01 Jan 2023</option>
																<option>01-Jan-2023</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Time Format</h6>
															<p>Select time format to display in website</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>English</option>
																<option>12 Hours</option>
																<option>24 Hours</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Financial Year</h6>
															<p>Select year for finance</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>2023</option>
																<option>2024</option>
																<option>2022</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Starting Month</h6>
															<p>Select starting month to display</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>January</option>
																<option>February</option>
																<option>March</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="settings-sub-header">
												<h6>Currency Settings</h6>
												<p>Provide the currency information below</p>
											</div>			
											<div class="profile-details">			
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Currency</h6>
															<p>Select currency</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>United States Of America</option>
																<option>India</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Currency Symbol</h6>
															<p>Select currency symbol</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>$</option>
																<option>€</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Currency Position</h6>
															<p>Select currency position</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>$100</option>
																<option>$400</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Decimal Seperator</h6>
															<p>Select decimal seperator</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>,</option>
																<option>,</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Thousand Seperator</h6>
															<p>Select thousand seperator</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>,</option>
																<option>.</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="settings-sub-header">
												<h6>Country Settings</h6>
												<p>Provide the country information below</p>
											</div>			
											<div class="profile-details">			
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Countries Restriction</h6>
															<p>Select restricted countries</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<select class="select">
																<option selected>Allow All Countries</option>
																<option>Deny All Countries</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="settings-sub-header">
												<h6>File Settings</h6>
												<p>Provide the files information below</p>
											</div>	
											<div class="profile-details border-0 mb-0">		
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Allowed Files</h6>
															<p>Select allowed files</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="JPG, PNG, GIF" >	
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="setting-title">
															<h6>Max File Size</h6>
															<p>Select size of the files</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-wrap">
															<input type="text" class="form-control" value="5000MB">
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