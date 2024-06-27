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
											<a href="<?php echo base_url();?>profile">
												<i class="ti ti-settings-cog"></i> General Settings
											</a>
										</li>
										<li>
											<a href="<?php echo base_url();?>company-settings">
												<i class="ti ti-world-cog"></i> Website Settings
											</a>
										</li>
										<li>
											<a href="<?php echo base_url();?>invoice-settings">
												<i class="ti ti-apps"></i> App Settings
											</a>
										</li>
										<li>
											<a href="<?php echo base_url();?>email-settings" class="active">
												<i class="ti ti-device-laptop"></i> System Settings
											</a>
										</li>
										<li>
											<a href="<?php echo base_url();?>payment-gateways">
												<i class="ti ti-moneybag"></i> Financial Settings
											</a>
										</li>
										<li>
											<a href="<?php echo base_url();?>storage">
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
													<a href="<?php echo base_url();?>email-settings" class="active">Email Settings</a>
												</li>
												<li>
													<a href="<?php echo base_url();?>sms-gateways">SMS Gateways</a>
												</li>
												<li>
													<a href="<?php echo base_url();?>gdpr-cookies">GDPR Cookies</a>
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
											<h4>Email Settings</h4>
											<a href="javascript:void(0)" class="btn-add" data-bs-toggle="modal" data-bs-target="#add_mail"><i class="ti ti-mail"></i></a>
										</div>
										<div class="row">

											<!-- Email Wrap -->
											<div class="col-md-12">

												<!-- PHP Mailer -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img">
																<img src="<?php echo base_url();?>assets/img/icons/mail-01.svg" alt="">
															</span>
															<div class="mail-info">
																<h6>PHP Mailer</h6>
																<a href="javascript:void(0);" class="connected">Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#php-mail" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#add_phpmail"><i class="ti ti-tool"></i>View Integration</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail1" class="check" checked="">
																<label for="mail1" class="checktoggle">	</label>
															</div>
														</div>
													</div>
													<div class="collapse" id="php-mail">
														<div class="mail-collapse">
															<p>PHPMailer is a third-party PHP library that provides a simple way to send emails in PHP. It offers a range of features that make it a popular alternative to PHP's built-in mail() function, such as support for HTML emails, attachments, and SMTP authentication.</p>
														</div>
													</div>
												</div>
												<!-- /PHP Mailer -->

												<!-- SMTP -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img">
																<img src="<?php echo base_url();?>assets/img/icons/mail-02.svg" alt="">
															</span>
															<div class="mail-info">
																<h6>SMTP</h6>
																<a href="javascript:void(0);" class="connected">Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#add_smtp"><i class="ti ti-tool"></i>View Integration</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail2" class="check" checked="">
																<label for="mail2" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<!-- /SMTP -->

												<!-- SendGrid -->
												<div class="mail-wrapper">
													<div class="mail-wrap">
														<div class="mail-item">
															<span class="mail-img">
																<img src="<?php echo base_url();?>assets/img/icons/mail-03.svg" alt="">
															</span>
															<div class="mail-info">
																<h6>SendGrid</h6>
																<a href="javascript:void(0);">Not Connected</a>
															</div>
														</div>
														<div class="email-action">
															<div>
																<a href="javascript:void(0);" class="info-icon"><i class="ti ti-info-circle-filled"></i></a>
																<a href="#" class="btn btn-primary"><i class="ti ti-plug-connected"></i>Connect Now</a>
															</div>
															<div class="status-toggle">
																<input type="checkbox" id="mail3" class="check" checked="">
																<label for="mail3" class="checktoggle">	</label>
															</div>
														</div>
													</div>
												</div>
												<!-- /SendGrid -->

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

		<!-- PHP Mailer -->
		<div class="modal custom-modal fade" id="add_phpmail" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">PHP Mailer</h5>
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
						<form action="<?php echo base_url();?>email-settings">
							<div class="form-wrap">
								<label class="col-form-label">From Email Address <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Email Password <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">From Email Name <span class="text-danger">*</span></label>
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
		<!-- /PHP Mailer -->

		<!-- SMTP -->
		<div class="modal custom-modal fade" id="add_smtp" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">SMTP</h5>
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
						<form action="<?php echo base_url();?>email-settings">
							<div class="form-wrap">
								<label class="col-form-label">From Email Address <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Email Password <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Email Host <span class="text-danger">*</span></label>
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
		<!-- /SMTP -->

		<!-- Test Mail -->
		<div class="modal custom-modal fade" id="add_mail" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Test Mail</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url();?>email-settings">
							<div class="form-wrap">
								<label class="col-form-label">Enter Email Address <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Test Mail -->

	</div>
	<!-- /Main Wrapper -->

<?= $this->include('partials/vendor-scripts') ?>
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>