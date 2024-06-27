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
													<a href="<?php echo base_url(); ?>payment-gateways" class="active">Payment Gateways</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>bank-accounts">Bank Accounts</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>tax-rates">Tax Rates</a>
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
											<h4>Payment Gateways</h4>
										</div>
										<div class="row">

											<!-- Email Wrap -->
											<div class="col-md-12">

												<!-- Payment -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img lg-img">
																<img src="<?php echo base_url(); ?>assets/img/icons/payment-01.svg" alt="">
															</span>
															<div class="mail-info">
																<a href="javascript:void(0);" class="connected">Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#php-mail" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#add_paypal"><i class="ti ti-tool"></i>View Integration</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail1" class="check" checked="">
																<label for="mail1" class="checktoggle">	</label>
															</div>
														</div>
													</div>
													<div class="collapse" id="php-mail">
														<div class="mail-collapse">
															<p>PayPal Holdings, Inc. is an American multinational financial technology company operating an online payments system in the majority of countries that support online money transfers, and serves as an electronic alternative to traditional paper methods such as checks and money orders. </p>
														</div>
													</div>
												</div>
												<!-- /Payment -->

												<!-- Payment -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img lg-img">
																<img src="<?php echo base_url(); ?>assets/img/icons/payment-02.svg" alt="">
															</span>
															<div class="mail-info">
																<a href="javascript:void(0);">Not Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapse1" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-primary"><i class="ti ti-plug-connected"></i>Connect Now</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail2" class="check" checked="">
																<label for="mail2" class="checktoggle">	</label>
															</div>
														</div>
													</div>
													<div class="collapse" id="collapse1">
														<div class="mail-collapse">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus magna sit amet risus dictum iaculis. Donec fermentum fermentum tincidunt. Pellentesque mauris elit, viverra non eros in, condimentum vulputate libero. Phasellus eu orci et felis maximus posuere.</p>
														</div>
													</div>
												</div>
												<!-- /Payment -->

												<!-- Payment -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img lg-img">
																<img src="<?php echo base_url(); ?>assets/img/icons/payment-03.svg" alt="">
															</span>
															<div class="mail-info">
																<a href="javascript:void(0);">Not Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapse2" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-primary"><i class="ti ti-plug-connected"></i>Connect Now</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail3" class="check" checked="">
																<label for="mail3" class="checktoggle">	</label>
															</div>
														</div>
													</div>
													<div class="collapse" id="collapse2">
														<div class="mail-collapse">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus magna sit amet risus dictum iaculis. Donec fermentum fermentum tincidunt. Pellentesque mauris elit, viverra non eros in, condimentum vulputate libero. Phasellus eu orci et felis maximus posuere.</p>
														</div>
													</div>
												</div>
												<!-- /Payment -->

												<!-- Payment -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img lg-img">
																<img src="<?php echo base_url(); ?>assets/img/icons/payment-04.svg" alt="">
															</span>
															<div class="mail-info">
																<a href="javascript:void(0);" class="connected">Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapse3" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-light"><i class="ti ti-tool"></i>View Integration</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail4" class="check">
																<label for="mail4" class="checktoggle">	</label>
															</div>
														</div>
													</div>
													<div class="collapse" id="collapse3">
														<div class="mail-collapse">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus magna sit amet risus dictum iaculis. Donec fermentum fermentum tincidunt. Pellentesque mauris elit, viverra non eros in, condimentum vulputate libero. Phasellus eu orci et felis maximus posuere.</p>
														</div>
													</div>
												</div>
												<!-- /Payment -->

												<!-- Payment -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img lg-img">
																<img src="<?php echo base_url(); ?>assets/img/icons/payment-05.svg" alt="">
															</span>
															<div class="mail-info">
																<a href="javascript:void(0);">Not Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapse4" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-primary"><i class="ti ti-plug-connected"></i>Connect Now</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail5" class="check" checked="">
																<label for="mail5" class="checktoggle">	</label>
															</div>
														</div>
													</div>
													<div class="collapse" id="collapse4">
														<div class="mail-collapse">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus magna sit amet risus dictum iaculis. Donec fermentum fermentum tincidunt. Pellentesque mauris elit, viverra non eros in, condimentum vulputate libero. Phasellus eu orci et felis maximus posuere.</p>
														</div>
													</div>
												</div>
												<!-- /Payment -->

												<!-- Payment -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img lg-img">
																<img src="<?php echo base_url(); ?>assets/img/icons/payment-06.svg" alt="">
															</span>
															<div class="mail-info">
																<a href="javascript:void(0);" class="connected">Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapse5" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-light"><i class="ti ti-tool"></i>View Integration</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail6" class="check">
																<label for="mail6" class="checktoggle">	</label>
															</div>
														</div>
													</div>
													<div class="collapse" id="collapse5">
														<div class="mail-collapse">
															<p>Lorem Holdings, Inc. is an American multinational financial technology company operating an online payments system in the majority of countries that support online money transfers, and serves as an electronic alternative to traditional paper methods such as checks and money orders. </p>
														</div>
													</div>
												</div>
												<!-- /Payment -->

												<!-- Payment -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img lg-img">
																<img src="<?php echo base_url(); ?>assets/img/icons/payment-07.svg" alt="">
															</span>
															<div class="mail-info">
																<a href="javascript:void(0);">Not Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapse6" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-primary"><i class="ti ti-plug-connected"></i>Connect Now</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail7" class="check" checked="">
																<label for="mail7" class="checktoggle">	</label>
															</div>
														</div>
													</div>
													<div class="collapse" id="collapse6">
														<div class="mail-collapse">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus magna sit amet risus dictum iaculis. Donec fermentum fermentum tincidunt. Pellentesque mauris elit, viverra non eros in, condimentum vulputate libero. Phasellus eu orci et felis maximus posuere.</p>
														</div>
													</div>
												</div>
												<!-- /Payment -->

												<!-- Payment -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img lg-img">
																<img src="<?php echo base_url(); ?>assets/img/icons/payment-08.svg" alt="">
															</span>
															<div class="mail-info">
																<a href="javascript:void(0);" class="connected">Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapse7" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-light"><i class="ti ti-tool"></i>View Integration</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail8" class="check" checked="">
																<label for="mail8" class="checktoggle">	</label>
															</div>
														</div>
													</div>
													<div class="collapse" id="collapse7">
														<div class="mail-collapse">
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dapibus magna sit amet risus dictum iaculis. Donec fermentum fermentum tincidunt. Pellentesque mauris elit, viverra non eros in, condimentum vulputate libero. Phasellus eu orci et felis maximus posuere.</p>
														</div>
													</div>
												</div>
												<!-- /Payment -->

												<!-- Payment -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img lg-img">
																<img src="<?php echo base_url(); ?>assets/img/icons/payment-09.svg" alt="">
															</span>
															<div class="mail-info">
																<a href="javascript:void(0);" class="connected">Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapse8" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-light"><i class="ti ti-tool"></i>View Integration</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail9" class="check">
																<label for="mail9" class="checktoggle">	</label>
															</div>
														</div>
													</div>
													<div class="collapse" id="collapse8">
														<div class="mail-collapse">
															<p>PayPal Holdings, Inc. is an American multinational financial technology company operating an online payments system in the majority of countries that support online money transfers, and serves as an electronic alternative to traditional paper methods such as checks and money orders. </p>
														</div>
													</div>
												</div>
												<!-- /Payment -->

												<!-- Payment -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img lg-img">
																<img src="<?php echo base_url(); ?>assets/img/icons/payment-10.svg" alt="">
															</span>
															<div class="mail-info">
																<a href="javascript:void(0);">Not Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapse9" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-primary"><i class="ti ti-plug-connected"></i>Connect Now</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail10" class="check" checked="">
																<label for="mail10" class="checktoggle"></label>
															</div>
														</div>
													</div>
													<div class="collapse" id="collapse9">
														<div class="mail-collapse">
															<p>PayPal Holdings, Inc. is an American multinational financial technology company operating an online payments system in the majority of countries that support online money transfers, and serves as an electronic alternative to traditional paper methods such as checks and money orders. </p>
														</div>
													</div>
												</div>
												<!-- /Payment -->

											</div>
											<!-- /Email Wrap -->

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

		<!-- Paypal -->
		<div class="modal custom-modal fade" id="add_paypal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Paypal</h5>
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
						<form action="payment-gateways">
							<div class="form-wrap">
								<label class="col-form-label">From Email Address <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">API Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Secret Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Status</label>
								<div class="radio-btn-items">
									<div class="radio-btn">
										<input type="radio" class="status-radio" id="pdf" name="export-type" checked="">
										<label for="pdf">Active</label>
									</div>
									<div class="radio-btn">
										<input type="radio" class="status-radio" id="share" name="export-type">
										<label for="share">Inactive</label>
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
		<!-- /Paypal -->

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