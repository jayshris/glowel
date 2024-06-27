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

								<!-- Custom Fields -->
								<div class="card">
									<div class="card-body">
										<div class="settings-header">
											<h4>Language</h4>
										</div>
										<!-- Search -->
										<div class="search-section">
											<div class="row">
												<div class="col-xl-3 col-md-3 col-lg-5">
													<div class="form-wrap icon-form">
														<span class="form-icon"><i class="ti ti-search"></i></span>
														<input type="text" class="form-control" placeholder="Search Language">
													</div>							
												</div>		
												<div class="col-xl-9 col-md-9 col-lg-12">					
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
																<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#import_sample"><i class="ti ti-download"></i>Import Sample</a>
															</li>								
															<li>
																<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_translation"><i class="ti ti-square-rounded-plus"></i>Add Translation</a>
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
																		<p><i class="ti ti-grip-vertical"></i>Language</p>
																		<div class="status-toggle">
																			<input type="checkbox" id="col-name" class="check">
																			<label for="col-name" class="checktoggle"></label>
																		</div>
																	</li>
																	<li>
																		<p><i class="ti ti-grip-vertical"></i>Code</p>
																		<div class="status-toggle">
																			<input type="checkbox" id="col-phone" class="check">
																			<label for="col-phone" class="checktoggle"></label>
																		</div>
																	</li>
																	<li>
																		<p><i class="ti ti-grip-vertical"></i>RTL</p>
																		<div class="status-toggle">
																			<input type="checkbox" id="col-email" class="check">
																			<label for="col-email" class="checktoggle"></label>
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
																		<p><i class="ti ti-grip-vertical"></i>Status</p>
																		<div class="status-toggle">
																			<input type="checkbox" id="col-status" class="check">
																			<label for="col-status" class="checktoggle"></label>
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

										<!-- Contact List -->
										<div class="table-responsive custom-table">
											<table class="table" id="language-list">
												<thead class="thead-light">
													<tr>
													<th class="no-sort">
                                                    <label class="checkboxs">
                                                        <input type="checkbox"><span class="checkmarks"></span>
                                                    </label>
                                                </th>
														<th class="no-sort"></th>
														<th>Language</th>
														<th>Code</th>
														<th>RTL</th>
														<th>Total</th>
														<th>Done</th>
														<th>Progress</th>
														<th>Status</th>
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
										<!-- /Contact List -->										

									</div>
								</div>
								<!-- /Custom Fields -->

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