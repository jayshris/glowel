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
												<input type="text" class="form-control" placeholder="Search Project">
											</div>							
										</div>	
										<div class="col-md-7 col-sm-8">					
											<div class="export-list text-sm-end">
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
														<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add New Project</a>
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
											<li>
												<div class="form-wrap icon-form">
													<span class="form-icon"><i class="ti ti-calendar"></i></span>
													<input type="text" class="form-control bookingrange" placeholder="">
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
																<p><i class="ti ti-grip-vertical"></i>Name</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-name" class="check">
																	<label for="col-name" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Client</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-phone" class="check">
																	<label for="col-phone" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Priority</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-email" class="check">
																	<label for="col-email" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Start Date</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-tag" class="check">
																	<label for="col-tag" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Due Date</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-loc" class="check">
																	<label for="col-loc" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Type</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-rate" class="check">
																	<label for="col-rate" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Pipeline Stage</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-owner" class="check">
																	<label for="col-owner" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Status</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-contact" class="check" checked="">
																	<label for="col-contact" class="checktoggle"></label>
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
																		<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Project Name</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
																		<div class="filter-content-list">
																			<div class="form-wrap icon-form">
																				<span class="form-icon"><i class="ti ti-search"></i></span>
																				<input type="text" class="form-control" placeholder="Search Name">
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
																						<h5>Truelysell</h5>
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
																						<h5>Dreamschat</h5>
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
																						<h5>Servbook</h5>
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
																						<h5>Doccure</h5>
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
																						<h5>Dreamsports</h5>
																					</div>
																				</li>
																				
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseclient" aria-expanded="false" aria-controls="collapseclient">Client Name</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse" id="collapseclient" data-bs-parent="#accordionExample">
																		<div class="filter-content-list">
																			<div class="form-wrap icon-form">
																				<span class="form-icon"><i class="ti ti-search"></i></span>
																				<input type="text" class="form-control" placeholder="Search Client">
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
																						<h5>NovaWave LLC</h5>
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
																						<h5>BlueSky Industries</h5>
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
																						<h5>SilverHawk</h5>
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
																						<h5>SummitPeak</h5>
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
																						<h5>CoastalStar Co.</h5>
																					</div>
																				</li>
																				
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Type</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
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
																						<h5>Web App</h5>
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
																						<h5>Meeting</h5>
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
																						<h5>Mobile App</h5>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Start Date </a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse" id="Status" data-bs-parent="#accordionExample">
																		<div class="filter-content-list">
																			<div class="form-wrap icon-form">
																				<span class="form-icon"><i class="ti ti-search"></i></span>
																				<input type="text" class="form-control" placeholder="Search Date">
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
																						<h5>25 Sep 2023</h5>
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
																						<h5>29 Sep 2023</h5>
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
																						<h5>05 Oct 2023</h5>
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
																						<h5>14 Oct 2023</h5>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">End Date</a>
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
																						<h5>19 Oct 2023</h5>
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
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsestage" aria-expanded="false" aria-controls="collapsestage">Pipeline Stage</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse" id="collapsestage" data-bs-parent="#accordionExample">
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
																						<h5>Plan</h5>
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
																						<h5>Develop</h5>
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
																						<h5>Completed</h5>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsestatus" aria-expanded="false" aria-controls="collapsestatus">Status</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse" id="collapsestatus" data-bs-parent="#accordionExample">
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
															</div>													
															<div class="filter-reset-btns">
																<div class="row">
																	<div class="col-6">
																		<a href="#" class="btn btn-light">Reset</a>
																	</div>
																	<div class="col-6">
																		<a href="<?php echo base_url(); ?>projects" class="btn btn-primary">Filter</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="view-icons">
													<a href="<?php echo base_url(); ?>projects" class="active"><i class="ti ti-list-tree"></i></a>
													<a href="<?php echo base_url(); ?>project-grid"><i class="ti ti-grid-dots"></i></a>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Filter -->

								<!-- Projects List -->
								<div class="table-responsive custom-table">
									<table class="table" id="project-list">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">
													<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</th>
												<th></th>
												<th>Name</th>
												<th>Client</th>
												<th>Priority</th>
												<th>Start Date</th>
												<th>End Date</th>
												<th>Type</th>
												<th>Pipeline Stage</th>
												<th>Status</th>
												<th class="text-end">Action</th>
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
								<!-- /Projects List -->

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Project -->
		<div class="toggle-popup">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Add New Project</h4>
					<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<div class="toggle-height">
						<div class="pro-create">
							<div class="row">
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Project ID<span class="text-danger"> *</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Project Type <span class="text-danger">*</span></label>
										<select class="select2">
											<option>Choose</option>
											<option>Mobile App</option>
											<option>Meeting</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Client <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select</option>
											<option>NovaWave LLC</option>
											<option>SilverHawk</option>
											<option>HarborView</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Category <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select</option>
											<option>HarborView</option>
											<option>LLC</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Project Timing <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select</option>
											<option>Hourly</option>
											<option>Minutes</option>
										</select>
									</div>
								</div>	
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Price <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>	
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Amount <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>	
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Total <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>	
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
										<select class="multiple-img" multiple="multiple">
											<option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
											<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
											<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
											<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
											<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Team Leader  <span class="text-danger">*</span></label>
										<select class="multiple-img" multiple="multiple">
											<option data-image="assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
											<option data-image="assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
											<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
											<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
											<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
											<input type="text" class="form-control datetimepicker" value="29-02-2020">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
											<input type="text" class="form-control datetimepicker" value="29-02-2020">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Priority</label>
										<select class="select">
											<option>Select</option>
											<option>High</option>
											<option>Low</option>
											<option>Medium</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea class="form-control" rows="4"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="submit-button text-end">
							<a href="#" class="btn btn-light sidebar-close">Cancel</a>
							<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_project">Create</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add New Project -->

		<!-- Edit Project -->
		<div class="toggle-popup1">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Edit Project</h4>
					<a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<form class="toggle-height">
						<div class="pro-create">
							<div class="row">
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Project ID<span class="text-danger"> *</span></label>
										<input class="form-control" type="text" value="12">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Project Type <span class="text-danger">*</span></label>
										<select class="select2">
											<option>Choose</option>
											<option>Mobile App</option>
											<option selected>Meeting</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Client <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select</option>
											<option selected>NovaWave LLC</option>
											<option>SilverHawk</option>
											<option>HarborView</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Category <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select</option>
											<option selected>HarborView</option>
											<option>LLC</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Project Timing <span class="text-danger">*</span></label>
										<select class="select">
											<option>Select</option>
											<option selected>Hourly</option>
											<option>Minutes</option>
										</select>
									</div>
								</div>	
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Price <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>	
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Amount <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>	
								<div class="col-lg-3 col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Total <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>	
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
										<select class="multiple-img" multiple="multiple">
											<option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
											<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
											<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
											<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
											<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Team Leader  <span class="text-danger">*</span></label>
										<select class="multiple-img" multiple="multiple">
											<option data-image="assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
											<option data-image="assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
											<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
											<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
											<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
											<input type="text" class="form-control datetimepicker" value="29-02-2020">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
											<input type="text" class="form-control datetimepicker" value="29-02-2020">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Priority</label>
										<select class="select">
											<option>Select</option>
											<option selected>High</option>
											<option>Low</option>
											<option>Medium</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option selected>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea class="form-control" rows="4"></textarea>
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
		<!-- /Edit Project -->

		<!-- Delete Project -->
		<div class="modal custom-modal fade" id="delete_project" role="dialog">
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
							<h3>Remove Project?</h3>
							<p class="del-info">Are you sure you want to remove project you selected.</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url(); ?>projects" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Project -->

		<!-- Create Project -->
		<div class="modal custom-modal fade" id="create_project" role="dialog">
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
								<i class="ti ti-atom-2"></i>
							</div>
							<h3>Project Created Successfully!!!</h3>
							<p>View the details of project, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url(); ?>project-details" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Project -->

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
						<form action="projects">
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

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>

	<!-- Summernote JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>

</body>
</html>