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

								<!-- Search -->
								<div class="search-section">
									<div class="row">
										<div class="col-md-5 col-sm-4">
											<div class="form-wrap icon-form">
												<span class="form-icon"><i class="ti ti-search"></i></span>
												<input type="text" class="form-control" placeholder="Search Pipeline">
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
										</ul>
									</div>
									<div class="filter-list">
										<ul>
											<li>
												<div class="manage-dropdwon">
													<a href="javascript:void(0);" class="btn btn-purple-light"  data-bs-toggle="dropdown"  data-bs-auto-close="false"><i class="ti ti-columns-3"></i>Manage Columns</a>
													<div class="dropdown-menu  dropdown-menu-xl-end">
														<h4>Want to manage datatables?</h4>
														<p>Please drag and drop your column to reorder your table and enable see option as you want.</p>
														<ul>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Pipeline Name</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-name" class="check">
																	<label for="col-name" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Deal Value</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-phone" class="check">
																	<label for="col-phone" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>No of Deals</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-email" class="check">
																	<label for="col-email" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Stages</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-tag" class="check">
																	<label for="col-tag" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Created Date</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-day" class="check">
																	<label for="col-day" class="checktoggle"></label>
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
											<li>
												<div class="form-sorts dropdown">
													<a href="javascript:void(0);" data-bs-toggle="dropdown"  data-bs-auto-close="false"><i class="ti ti-filter-share"></i>Filter</a>
													<div class="filter-dropdown-menu dropdown-menu  dropdown-menu-xl-end">
														<div class="filter-set-view">
															<div class="filter-set-head">
																<h4><i class="ti ti-filter-share"></i>Filter</h4>
																<a href="#" data-bs-toggle="modal" data-bs-target="#save_view">Save View</a>
															</div>
															<div class="header-set">
																<select class="select">
																	<option>Select a View</option>
																	<option>Contact View List</option>
																	<option>Contact Location View</option>
																</select>
																<div class="radio-btn-items">
																	<div class="radio-btn">
																		<input type="radio" class="status-radio" id="pdf" name="export-type" checked="">
																		<label for="pdf">Just For Me</label>
																	</div>
																	<div class="radio-btn">
																		<input type="radio" class="status-radio" id="share" name="export-type">
																		<label for="share">Share Filter with Everyone </label>
																	</div>
																</div>
															</div>
															<div class="accordion" id="accordionExample">
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Pipeline Name</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
																		<div class="filter-content-list">
																			<div class="form-wrap icon-form">
																				<span class="form-icon"><i class="ti ti-search"></i></span>
																				<input type="text" class="form-control" placeholder="Search Pipeline">
																			</div>
																			<ul>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox" checked>
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>Sales</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>Marketing</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>Calls</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>Email</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>Chats</h5>
																					</div>
																				</li>
																				
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Stages</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
																		<div class="filter-content-list">
																			<div class="form-wrap icon-form">
																				<span class="form-icon"><i class="ti ti-search"></i></span>
																				<input type="text" class="form-control" placeholder="Search Stages">
																			</div>
																			<ul>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox" checked>
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>Win</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>In Pipeline</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>Conversation</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>Schedule Service</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>Lost</h5>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Status</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse" id="Status" data-bs-parent="#accordionExample">
																		<div class="filter-content-list">
																			<ul>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox" checked>
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>Active</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>Inactive</h5>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Created Date</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
																		<div class="filter-content-list">
																			<ul>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox" checked>
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>17 Nov 2023</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>23 Nov 2023</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>14 Dec 2023</h5>
																					</div>
																				</li>
																				<li>
																					<div class="filter-checks">
																						<label class="checkboxs">
																							<input type="checkbox">
																							<span class="checkmarks"></span>
																						</label>
																					</div>
																					<div class="collapse-inside-text">
																						<h5>09 Dec 2023</h5>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>													
															<div class="filter-reset-btns">
																<div class="row">
																	<div class="col-6">
																		<a href="#" class="btn btn-light">Reset</a>
																	</div>
																	<div class="col-6">
																		<a href="<?php echo base_url(); ?>pipeline" class="btn btn-primary">Filter</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add Pipeline</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Filter -->

								<!-- Pipeline List -->
								<div class="table-responsive custom-table">
									<table class="table" id="pipeline-list">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">
													<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</th>
												<th>Pipeline Name</th>
												<th>Total Deal Value</th>
												<th>No of Deals</th>
												<th>Stages</th>
												<th>Created Date</th>
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
								<!-- /Pipeline List -->

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Pipeline -->
		<div class="toggle-popup">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Add New Pipeline</h4>
					<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<form action="pipeline" class="toggle-height">
						<div class="pro-create">
							<div class="form-wrap">
								<label class="col-form-label">Pipeline Name <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
							<div class="form-wrap">
								<div class="pipe-title d-flex align-items-center justify-content-between">
									<h5 class="form-title">Pipeline Stages</h5>
									<a href="#" class="add-stage" data-bs-toggle="modal" data-bs-target="#add_stage"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<div class="pipeline-listing">
									<div class="pipeline-item">
										<p><i class="ti ti-grip-vertical"></i> Inpipeline</p>
										<div class="action-pipeline">
											<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
										</div>
									</div>
									<div class="pipeline-item">
										<p><i class="ti ti-grip-vertical"></i> Follow Up</p>
										<div class="action-pipeline">
											<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
										</div>
									</div>
									<div class="pipeline-item">
										<p><i class="ti ti-grip-vertical"></i> Schedule Service</p>
										<div class="action-pipeline">
											<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="form-wrap">
								<h5 class="form-title">Access</h5>
								<div class="d-flex flex-wrap access-item nav">
									<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#all">
										<input type="radio" class="status-radio" id="all" name="status" checked="">
										<label for="all">All</label>
									</div>
									<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#select-person">
										<input type="radio" class="status-radio" id="select" name="status">
										<label for="select">Select Person</label>
									</div>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade" id="select-person">
										<div class="access-wrapper">
											<div class="access-view">
												<div class="access-img">
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-21.jpg" alt="Image">Vaughan
												</div>
												<a href="#">Remove</a>
											</div>
											<div class="access-view">
												<div class="access-img">
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-01.jpg" alt="Image">Jessica
												</div>
												<a href="#">Remove</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="submit-button text-end">
							<a href="#" class="btn btn-light sidebar-close">Cancel</a>
							<button type="submit" class="btn btn-primary">Create</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add New Pipeline -->

		<!-- Edit Pipeline -->
		<div class="toggle-popup1">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Edit Pipeline</h4>
					<a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<form action="pipeline" class="toggle-height">
						<div class="pro-create">
							<div class="form-wrap">
								<label class="col-form-label">Pipeline Name <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="Inpipeline">
							</div>
							<div class="form-wrap">
								<div class="pipe-title d-flex align-items-center justify-content-between">
									<h5 class="form-title">Pipeline Stages</h5>
									<a href="#" class="add-stage" data-bs-toggle="modal" data-bs-target="#add_stage"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<div class="pipeline-listing">
									<div class="pipeline-item">
										<p><i class="ti ti-grip-vertical"></i> Inpipeline</p>
										<div class="action-pipeline">
											<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
										</div>
									</div>
									<div class="pipeline-item">
										<p><i class="ti ti-grip-vertical"></i> Follow Up</p>
										<div class="action-pipeline">
											<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
										</div>
									</div>
									<div class="pipeline-item">
										<p><i class="ti ti-grip-vertical"></i> Schedule Service</p>
										<div class="action-pipeline">
											<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
										</div>
									</div>
								</div>
							</div>
							<div class="form-wrap">
								<h5 class="form-title">Access</h5>
								<div class="d-flex flex-wrap access-item nav">
									<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#edit_all">
										<input type="radio" class="status-radio" id="all1" name="status" checked="">
										<label for="all1">All</label>
									</div>
									<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#edit-person">
										<input type="radio" class="status-radio" id="select1" name="status">
										<label for="select1">Select Person</label>
									</div>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade" id="edit-person">
										<div class="access-wrapper">
											<div class="access-view">
												<div class="access-img">
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-21.jpg" alt="Image">Vaughan
												</div>
												<a href="#">Remove</a>
											</div>
											<div class="access-view">
												<div class="access-img">
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-01.jpg" alt="Image">Jessica
												</div>
												<a href="#">Remove</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="submit-button text-end">
							<a href="#" class="btn btn-light sidebar-close1">Cancel</a>
							<button type="submit" class="btn btn-primary">Create</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Pipeline -->

		<!-- Delete Stage -->
		<div class="modal custom-modal fade" id="delete_stage" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon">
								<i class="ti ti-trash-x"></i>
							</div>
							<h3>Remove Stage?</h3>
							<p class="del-info">Are you sure you want to remove it.</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url(); ?>pipeline" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Stage -->

		<!-- Delete Pipeline -->
		<div class="modal custom-modal fade" id="delete_pipeline" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon">
								<i class="ti ti-trash-x"></i>
							</div>
							<h3>Remove Pipeline?</h3>
							<p class="del-info">Are you sure you want to remove pipeline you selected.</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url(); ?>pipeline" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Pipeline -->

		<!-- Create Deal -->
		<div class="modal custom-modal fade" id="create_pipeline" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon bg-light-blue">
								<i class="ti ti-medal"></i>
							</div>
							<h3>Pipeline Created Successfully!!!</h3>
							<p>View the details of pipeline, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url(); ?>pipeline" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Deal -->

		<!-- Add New View -->
		<div class="modal custom-modal fade" id="save_view" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New View</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="deals">
							<div class="form-wrap">
								<label class="col-form-label">View Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-danger">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add New View -->

		<!-- Add New Stage -->
		<div class="modal custom-modal fade" id="add_stage" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New Stage</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="pipeline">
							<div class="form-wrap">
								<label class="col-form-label">Stage Name *</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-danger">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add New Stage -->

		<!-- Edit Stage -->
		<div class="modal custom-modal fade" id="edit_stage" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Stage</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="pipeline">
							<div class="form-wrap">
								<label class="col-form-label">Stage Name *</label>
								<input type="text" class="form-control" value="Inpipeline">
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-danger">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Stage -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>

	<!-- Summernote JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>

</body>
</html>