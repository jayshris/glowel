<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">
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
													<a href="<?php echo base_url(); ?>preference">Preference</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>appearance">Appearance</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>language" class="active">Language</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Language Web -->
								<div class="card">
									<div class="card-body">
										<div class="settings-header">
											<h4>Language</h4>
										</div>
										<!-- Search -->
										<div class="search-section">
											<div class="row">
												<div class="col-xl-5 col-md-3 col-lg-5">
													<div class="form-wrap">
														<div class="lang-wrap">
															<div class="lang-flag">
																<a href="javascript:void(0);">
																	<img class="avatar-img" src="<?php echo base_url(); ?>assets/img/icons/flag-02.svg" alt="Flag"><span>Arabic</span>
																</a>
															</div>
															<ul class="lang-direct">
																<li>
																	<a href="javascript:void(0);" class="active">LTR</a>
																</li>
																<li>
																	<a href="javascript:void(0);">RTL</a>
																</li>
															</ul>
														</div>
													</div>							
												</div>		
												<div class="col-xl-7 col-md-9 col-lg-12">					
													<div class="export-list text-xl-end text-md-end text-lg-start">
														<ul>
															<li>
																<div class="export-dropdwon">
																	<a href="javascript:void(0);" class="dropdown-toggle"  data-bs-toggle="dropdown"><i class="ti ti-package-export"></i>Export</a>
																	<div class="dropdown-menu  dropdown-menu-end">
						    											<ul>
						    												<li>
						    													<a href="javascript:void(0);"><i class="ti ti-file-type-pdf text-danger"></i>Export as PDF</a>
						    												</li>
						    												<li>
						    													<a href="javascript:void(0);"><i class="ti ti-file-type-xls text-green"></i>Export as Excel </a>
						    												</li>
						    											</ul>
						  											</div>
																</div>
															</li>							
															<li>
																<a href="<?php echo base_url(); ?>language" class="btn btn-primary"><i class="ti ti-arrow-narrow-left"></i>Back to Translation</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!-- /Search -->

										<!-- Filter -->
										<div class="filter-section filter-flex">
											
											<div class="sortby-list">
												<ul>
													<li>
														<div class="sort-dropdown drop-down">
															<a href="javascript:void(0);" class="dropdown-toggle"  data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2"></i>Sort </a>
															<div class="dropdown-menu  dropdown-menu-start">
							    								<ul>
							    									<li>
							    										<a href="javascript:void(0);">
							    											<i class="ti ti-circle-chevron-right"></i>Ascending
							    										</a>
							    									</li>
							    									<li>
							    										<a href="javascript:void(0);">
							    											<i class="ti ti-circle-chevron-right"></i>Descending
							    										</a>
							    									</li>
							    									<li>
							    										<a href="javascript:void(0);">
							    											<i class="ti ti-circle-chevron-right"></i>Recently Viewed
							    										</a>
							    									</li>
							    									<li>
							    										<a href="javascript:void(0);">
							    											<i class="ti ti-circle-chevron-right"></i>Recently Added
							    										</a>
							    									</li>
							    								</ul>
							  								</div>
														</div>
													</li>
												</ul>
											</div>
											<div class="filter-list">
												<ul>
													<li>
														<div class="manage-dropdwon">
															<a href="javascript:void(0);" class="btn btn-purple-light"  data-bs-toggle="dropdown"  data-bs-auto-close="false"><i class="ti ti-columns-3"></i>Manage Columns</a>
															<div class="dropdown-menu  dropdown-menu-md-end">
																<h4>Want to manage datatables?</h4>
																<p>Please drag and drop your column to reorder your table and enable see option as you want.</p>
																<ul>
																	<li>
																		<p><i class="ti ti-grip-vertical"></i>Medium</p>
																		<div class="status-toggle">
																			<input type="checkbox" id="col-name" class="check">
																			<label for="col-name" class="checktoggle"></label>
																		</div>
																	</li>
																	<li>
																		<p><i class="ti ti-grip-vertical"></i>File</p>
																		<div class="status-toggle">
																			<input type="checkbox" id="col-phone" class="check">
																			<label for="col-phone" class="checktoggle"></label>
																		</div>
																	</li>
																	<li>
																		<p><i class="ti ti-grip-vertical"></i>Total</p>
																		<div class="status-toggle">
																			<input type="checkbox" id="col-tag" class="check">
																			<label for="col-tag" class="checktoggle"></label>
																		</div>
																	</li>
																	<li>
																		<p><i class="ti ti-grip-vertical"></i>Done</p>
																		<div class="status-toggle">
																			<input type="checkbox" id="col-loc" class="check">
																			<label for="col-loc" class="checktoggle"></label>
																		</div>
																	</li>
																	<li>
																		<p><i class="ti ti-grip-vertical"></i>Progress</p>
																		<div class="status-toggle">
																			<input type="checkbox" id="col-rate" class="check">
																			<label for="col-rate" class="checktoggle"></label>
																		</div>
																	</li>
																	<li>
																		<p><i class="ti ti-grip-vertical"></i>Action</p>
																		<div class="status-toggle">
																			<input type="checkbox" id="col-action" class="check">
																			<label for="col-action" class="checktoggle"></label>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Filter -->	

										<!-- Language List -->
										<div class="table-responsive custom-table">
											<table class="table" id="language-web">
												<thead class="thead-light">
													<tr>
													<th class="no-sort">
                                                    <label class="checkboxs">
                                                        <input type="checkbox"><span class="checkmarks"></span>
                                                    </label>
                                                </th>
														<th class="no-sort"></th>
														<th>Medium</th>
														<th>File</th>
														<th>Total</th>
														<th>Done</th>
														<th>Progress</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													
												</tbody>
											</table>
										</div>
										<div class="row align-items-center">
											<div class="col-md-6">
												<div class="datatable-length"></div>
											</div>
											<div class="col-md-6">
												<div class="datatable-paginate"></div>
											</div>
										</div>
										<!-- /Language List -->										

									</div>
								</div>
								<!-- /Language Web -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Translation -->
		<div class="modal custom-modal fade" id="add_translate" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-body">
						<form action="language-web">
							<div class="translate-item">
								<div class="d-flex align-items-center">
									<div class="lang-flag">
										<a href="javascript:void(0);">
											<img class="avatar-img" src="<?php echo base_url(); ?>assets/img/icons/flag-02.svg" alt="Flag"><span>Arabic</span>
										</a>
									</div>
									<div class="lang-progress">
										<p class="mb-0">Progress</p>
										<div class="d-flex align-items-center">
											<div class="progress">
												<div class="progress-bar bg-blue" role="progressbar"></div>
											</div>
											<span class="position-static ms-2">40%</span>
										</div>
									</div>
								</div>
								<a href="<?php echo base_url(); ?>language" class="btn btn-primary"><i class="ti ti-arrow-narrow-left me-2"></i>Back to Translation</a>
							</div>
							<div class="translate-wrap translate-title">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>English</h6>
									</div>
									<div class="col-md-4">
										<h6>Arabic</h6>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>Bugs</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="البق">
										</div>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>Bugs Email</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="البق البريد الإلكتروني">
										</div>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>Bug Assigned</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="البق البريد الإلكتروني">
										</div>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6> Bug Comments</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="علة تعليقات">
										</div>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>Bug Attachment</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="البقعلة مرفق">
										</div>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>Bug Updated</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="البق بمجلس تم الحفظ بنجاح">
										</div>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>Bug Reported</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="توقيت بمجلس المحذوفة بنجاح">
										</div>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>Bugs information successfully updated</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="البق بمجلس المحذوفة بنجاح">
										</div>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>Bugs information successfully Saved</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="علة التحديث">
										</div>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>Timer information successfully Deleted</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="آخر البق الجديدة التي تمت إضافتها">
										</div>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>Bugs infromation successfully Deleted</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="جميع البق">
										</div>
									</div>
								</div>
							</div>
							<div class="translate-wrap">
								<div class="row align-items-center">
									<div class="col-md-8">
										<h6>Bug Updated</h6>
									</div>
									<div class="col-md-4">
										<div class="form-wrap">
											<input type="text" class="form-control" value="البق بمجلس تم الحفظ بنجاح">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Reset</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Translation -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>
	<!-- Sticky Sidebar JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
</body>
</html>