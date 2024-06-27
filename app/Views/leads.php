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


						<div class="card main-card">
							<div class="card-body">

								<!-- Search -->
								<div class="search-section">
									<div class="row">
										<div class="col-md-5 col-sm-4">
											<div class="form-wrap icon-form">
												<span class="form-icon"><i class="ti ti-search"></i></span>
												<input type="text" class="form-control" placeholder="Search Leads">
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
														<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add Leads</a>
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
																<p><i class="ti ti-grip-vertical"></i>Lead Name</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-name" class="check">
																	<label for="col-name" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Phone</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-phone" class="check">
																	<label for="col-phone" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Email</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-email" class="check">
																	<label for="col-email" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Company Name</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-tag" class="check">
																	<label for="col-tag" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Lead Status</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-loc" class="check">
																	<label for="col-loc" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Created</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-rate" class="check">
																	<label for="col-rate" class="checktoggle"></label>
																</div>
															</li>
															<li>
																<p><i class="ti ti-grip-vertical"></i>Lead Owner</p>
																<div class="status-toggle">
																	<input type="checkbox" id="col-owner" class="check">
																	<label for="col-owner" class="checktoggle"></label>
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
																		<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Lead Name</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
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
																						<h5>Collins</h5>
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
																						<h5>Konopelski</h5>
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
																						<h5>Adams</h5>
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
																						<h5>Schumm</h5>
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
																						<h5>Wisozk</h5>
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
																						<h5>Heller</h5>
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
																						<h5>Gutkowski</h5>
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
																						<h5>Walter</h5>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#company" aria-expanded="false" aria-controls="company">Company Name</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse" id="company" data-bs-parent="#accordionExample">
																		<div class="filter-content-list">
																			<div class="form-wrap icon-form">
																				<span class="form-icon"><i class="ti ti-search"></i></span>
																				<input type="text" class="form-control" placeholder="Search Company">
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
																						<h5>RiverStone Ventur</h5>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Lead Status</a>
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
																						<h5>Closed</h5>
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
																						<h5>Not Contacted</h5>
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
																						<h5>Contacted</h5>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#date" aria-expanded="false" aria-controls="date">Created Date</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse" id="date" data-bs-parent="#accordionExample">
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
																						<h5>25 Sep 2023, 01:22 pm</h5>
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
																						<h5>29 Sep 2023, 04:15 pm</h5>
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
																						<h5>04 Oct 2023, 10:18 am</h5>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="filter-set-content">
																	<div class="filter-set-content-head">
																		<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Lead Owner</a>
																	</div>
																	<div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
																		<div class="filter-content-list">
																			<div class="form-wrap icon-form">
																				<span class="form-icon"><i class="ti ti-search"></i></span>
																				<input type="text" class="form-control" placeholder="Search Owner">
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
																						<h5>Hendry</h5>
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
																						<h5>Guillory</h5>
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
																						<h5>Jami</h5>
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
																						<h5>Theresa</h5>
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
																						<h5>Espinosa</h5>
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
																		<a href="<?php echo base_url(); ?>leads" class="btn btn-primary">Filter</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="view-icons">
													<a href="<?php echo base_url(); ?>leads" class="active"><i class="ti ti-list-tree"></i></a>
													<a href="<?php echo base_url(); ?>leads-kanban"><i class="ti ti-grid-dots"></i></a>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Filter -->

								<!-- Contact List -->
								<div class="table-responsive custom-table">
									<table class="table" id="leads_list">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">
													<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</th>
												<th class="no-sort"></th>
												<th>Lead Name</th>
												<th>Company Name</th>
												<th>Phone</th>
												<th>Email</th>
												<th>Lead Status</th>
												<th>Created Date</th>
												<th>Lead Owner</th>
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
								<!-- /Contact List -->

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Lead -->
		<div class="toggle-popup">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Add New Lead</h4>
					<a href="#" class="sidebar-close toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<div class="pro-create">
						<form action="#">							
							<div class="row">
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Lead Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-wrap">
										<div class="radio-wrap">
											<label class="col-form-label">Lead Type</label>
											<div class="d-flex flex-wrap">
												<div class="radio-btn">
													<input type="radio" class="status-radio" id="person" name="leave" checked="">
													<label for="person">Person</label>
												</div>
												<div class="radio-btn">
													<input type="radio" class="status-radio" id="org" name="leave">
													<label for="org">Organization</label>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="col-md-12">
									<div class="form-wrap">
										<div class="d-flex justify-content-between align-items-center">
											<label class="col-form-label">Company <span class="text-danger">*</span></label>
											<a href="#" class="add-new add-new-company add-popups"><i class="ti ti-square-rounded-plus me-2"></i>Add New</a>
										</div>
										<select class="select">
											<option>Choose</option>
											<option>NovaWave LLC</option>
											<option>SilverHawk</option>
											<option>SummitPeak</option>
											<option>RiverStone Ventur</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Value <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Currency <span class="text-danger">*</span></label>
										<select class="select">
											<option>Choose</option>
											<option>$</option>
											<option>€</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8">
											<div class="form-wrap">
												<label class="col-form-label">Phone <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-4 d-flex align-items-center">
											<div class="form-wrap w-100">
												<select class="select">
													<option>Choose</option>
													<option>Work</option>
													<option>Home</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Source <span class="text-danger">*</span></label>
										<select class="select2">
											<option>Choose</option>
											<option>Phone Calls</option>
											<option>Social Media</option>
											<option>Referral Sites</option>
											<option>Web Analytics</option>
											<option>Previous Purchases</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Industry <span class="text-danger">*</span></label>
										<select class="select">
											<option>Choose</option>
											<option>Retail Industry</option>
											<option>Banking</option>
											<option>Hotels</option>
											<option>Financial Services</option>
											<option>Insurance</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Owner</label>
										<select class="multiple-img">
											<option data-image="assets/img/profiles/avatar-14.jpg" selected>Jerald</option>
											<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
											<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
											<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
											<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Tags </label>
										<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Rated" >	
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea class="form-control" rows="5"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="radio-wrap form-wrap">
										<label class="col-form-label">Visibility</label>
										<div class="d-flex flex-wrap">
											<div class="radio-btn">
												<input type="radio" class="status-radio" id="public1" name="visible">
												<label for="public1">Public</label>
											</div>
											<div class="radio-btn">
												<input type="radio" class="status-radio" id="private1" name="visible">
												<label for="private1">Private</label>
											</div>
											<div class="radio-btn" data-bs-toggle="modal" data-bs-target="#access_view">
												<input type="radio" class="status-radio" id="people1" name="visible">
												<label for="people1">Select People</label>
											</div>
										</div>
									</div>
									<div class="radio-wrap form-wrap">
										<label class="col-form-label">Status</label>
										<div class="d-flex flex-wrap">
											<div class="radio-btn">
												<input type="radio" class="status-radio" id="active1" name="status" checked="">
												<label for="active1">Active</label>
											</div>
											<div class="radio-btn">
												<input type="radio" class="status-radio" id="inactive1" name="status">
												<label for="inactive1">Inactive</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="submit-button text-end">
								<a href="#" class="btn btn-light sidebar-close">Cancel</a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#create_contact" class="btn btn-primary">Create</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Lead -->

		<!-- Edit Lead -->
		<div class="toggle-popup1">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Edit Lead</h4>
					<a href="#" class="sidebar-close1 toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<div class="pro-create">
						<form action="#">							
							<div class="row">
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Lead Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="Collins">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-wrap">
										<div class="radio-wrap">
											<label class="col-form-label">Lead Type</label>
											<div class="d-flex flex-wrap">
												<div class="radio-btn">
													<input type="radio" class="status-radio" id="person-2" name="leave" checked="">
													<label for="person-2">Person</label>
												</div>
												<div class="radio-btn">
													<input type="radio" class="status-radio" id="org-2" name="leave">
													<label for="org-2">Organization</label>
												</div>
											</div>
										</div>
									</div>									
								</div>
								<div class="col-md-12">
									<div class="form-wrap">
										<div class="d-flex justify-content-between align-items-center">
											<label class="col-form-label">Company <span class="text-danger">*</span></label>
											<a href="#" class="add-new add-new-company add-popups"><i class="ti ti-square-rounded-plus me-2"></i>Add New</a>
										</div>
										<select class="select">
											<option>NovaWave LLC</option>
											<option>SilverHawk</option>
											<option>SummitPeak</option>
											<option>RiverStone Ventur</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Value <span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="10">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Currency <span class="text-danger">*</span></label>
										<select class="select">
											<option>$</option>
											<option>€</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-8">
											<div class="form-wrap">
												<label class="col-form-label">Phone <span class="text-danger">*</span></label>
												<input type="text" class="form-control" value="+1 875455453">
												<a href="#" class="add-new add-new-phone"><i class="ti ti-square-rounded-plus me-2"></i>Add New</a>
											</div>
										</div>
										<div class="col-md-4 d-flex align-items-center">
											<div class="form-wrap w-100">
												<select class="select">
													<option>Work</option>
													<option>Home</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Source <span class="text-danger">*</span></label>
										<select class="select2">
											<option>Phone Calls</option>
											<option>Social Media</option>
											<option>Referral Sites</option>
											<option>Web Analytics</option>
											<option>Previous Purchases</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Industry <span class="text-danger">*</span></label>
										<select class="select">
											<option>Banking</option>
											<option>Hotels</option>
											<option>Financial Services</option>
											<option>Insurance</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Owner</label>
										<select class="multiple-img">
											<option data-image="assets/img/profiles/avatar-14.jpg" selected>Jerald</option>
											<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
											<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
											<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
											<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-wrap">
										<label class="col-form-label">Tags </label>
										<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Rated" >	
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-wrap">
										<label class="col-form-label">Description <span class="text-danger">*</span></label>
										<textarea class="form-control" rows="5"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="radio-wrap form-wrap">
										<label class="col-form-label">Visibility</label>
										<div class="d-flex flex-wrap">
											<div class="radio-btn">
												<input type="radio" class="status-radio" id="public-2" name="visible">
												<label for="public-2">Public</label>
											</div>
											<div class="radio-btn">
												<input type="radio" class="status-radio" id="private-2" name="visible">
												<label for="private-2">Private</label>
											</div>
											<div class="radio-btn" data-bs-toggle="modal" data-bs-target="#access_view">
												<input type="radio" class="status-radio" id="people-2" name="visible">
												<label for="people-2">Select People</label>
											</div>
										</div>
									</div>
									<div class="radio-wrap form-wrap">
										<label class="col-form-label">Status</label>
										<div class="d-flex flex-wrap">
											<div class="radio-btn">
												<input type="radio" class="status-radio" id="active-2" name="status" checked="">
												<label for="active-2">Active</label>
											</div>
											<div class="radio-btn">
												<input type="radio" class="status-radio" id="inactive-2" name="status">
												<label for="inactive-2">Inactive</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="submit-button text-end">
								<a href="#" class="btn btn-light sidebar-close1">Cancel</a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#create_contact" class="btn btn-primary">Create</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Lead -->

		<!-- Delete Lead -->
		<div class="modal custom-modal fade" id="delete_contact" role="dialog">
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
							<h3>Remove Leads?</h3>
							<p class="del-info">Are you sure you want to remove 
								lead you selected.</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url(); ?>leads" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Lead -->

		<!-- Create Lead -->
		<div class="modal custom-modal fade" id="create_contact" role="dialog">
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
								<i class="ti ti-building"></i>
							</div>
							<h3>Leads Created Successfully!!!</h3>
							<p>View the details of Lead, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url(); ?>leads-details" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Lead -->

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
						<form action="leads">
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

		<!-- Access -->
		<div class="modal custom-modal fade" id="access_view" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Access For</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="leads">	
							<div class="form-wrap icon-form">
								<span class="form-icon"><i class="ti ti-search"></i></span>
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<div class="access-wrap">
								<ul>					
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-19.jpg" alt="">
												<a href="#">Darlee Robertson</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="">
												<a href="#">Sharon Roy</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-21.jpg" alt="">
												<a href="#">Vaughan</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-01.jpg" alt="">
												<a href="#">Jessica</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-16.jpg" alt="">
												<a href="#">Carol Thomas</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-22.jpg" alt="">
												<a href="#">Dawn Mercha</a>
											</span>
										</label>
									</li>
								</ul>
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Confirm</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Access -->

		<!-- Add Company -->
		<div class="toggle-popup2">
			<div class="sidebar-layout">
				<div class="sidebar-header">
					<h4>Add New Company</h4>
					<a href="#" class="sidebar-close2 toggle-btn"><i class="ti ti-x"></i></a>
				</div>
				<div class="toggle-body">
					<div class="pro-create">
						<form action="leads">							
							<div class="accordion-lists" id="list-accord">

								<!-- Basic Info -->
								<div class="user-accordion-item">
									<a href="#" class="accordion-wrap" data-bs-toggle="collapse" data-bs-target="#basic"><span><i class="ti ti-user-plus"></i></span>Basic Info</a>
									<div class="accordion-collapse collapse show" id="basic" data-bs-parent="#list-accord">
										<div class="content-collapse">
											<div class="row">
												<div class="col-md-12">
													<div class="form-wrap">
														<div class="profile-upload">
															<div class="profile-upload-img">
																<span><i class="ti ti-photo"></i></span>
																<img src="<?php echo base_url(); ?>assets/img/icons/company-icon-03.svg" alt="img"  class="preview1">
		    													<button type="button" class="profile-remove">
		    														<i class="ti ti-x"></i>
		    													</button>
															</div>
															<div class="profile-upload-content">
																<label class="profile-upload-btn">
																	<i class="ti ti-file-broken"></i> Upload File 
																	<input type="file" class="input-img">
																</label>
																<p>JPG, GIF or PNG. Max size of 800K</p>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-wrap">
														<label class="col-form-label">Company Name</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-wrap">
														<div class="d-flex justify-content-between align-items-center">
															<label class="col-form-label">Email <span class="text-danger">*</span></label>
															<div class="status-toggle small-toggle-btn d-flex align-items-center">
																<span class="me-2 label-text">Email Opt Out</span>
																<input type="checkbox" id="user" class="check" checked="">
																<label for="user" class="checktoggle"></label>
															</div>
														</div>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Phone 1 <span class="text-danger">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Phone 2</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Fax <span class="text-danger">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Website <span class="text-danger">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Ratings  </label>
														<div class="icon-form-end">
															<span class="form-icon"><i class="ti ti-star"></i></span>
															<input type="text" class="form-control" placeholder="4.2">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Owner</label>
														<select class="multiple-img">
															<option data-image="assets/img/profiles/avatar-18.jpg" selected>Jerald</option>
															<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
															<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
															<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
															<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Tags </label>
														<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Collab" >	
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<div class="d-flex align-items-center justify-content-between">
															<label class="col-form-label">Deals</label>
														</div>
														<select class="select2">
															<option>Choose</option>
															<option>Collins</option>
															<option>Konopelski</option>
															<option>Adams</option>
															<option>Schumm</option>
															<option>Wisozk</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Source <span class="text-danger">*</span></label>
														<select class="select2">
															<option>Choose</option>
															<option>Phone Calls</option>
															<option>Social Media</option>
															<option>Referral Sites</option>
															<option>Web Analytics</option>
															<option>Previous Purchases</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Industry <span class="text-danger">*</span></label>
														<select class="select">
															<option>Choose</option>
															<option>Retail Industry</option>
															<option>Banking</option>
															<option>Hotels</option>
															<option>Financial Services</option>
															<option>Insurance</option>
														</select>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-wrap">
														<label class="col-form-label">Contact <span class="text-danger">*</span></label>
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
														<label class="col-form-label">Currency <span class="text-danger">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Language <span class="text-danger">*</span></label>
														<select class="select">
															<option>Choose</option>
															<option>English</option>
															<option>Arabic</option>
															<option>Chinese</option>
															<option>Hindi</option>
														</select>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-wrap mb-0">
														<label class="col-form-label">Description <span class="text-danger">*</span></label>
														<textarea class="form-control" rows="5"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Basic Info -->

								<!-- Address Info -->
								<div class="user-accordion-item">
									<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#address"><span><i class="ti ti-map-pin-cog"></i></span>Address Info</a>
									<div class="accordion-collapse collapse" id="address" data-bs-parent="#list-accord">
										<div class="content-collapse">
											<div class="row">
												<div class="col-md-12">
													<div class="form-wrap">
														<label class="col-form-label">Street Address </label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">City </label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">State / Province </label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap mb-wrap">
														<label class="col-form-label">Country</label>
														<select class="select">
															<option>Choose</option>
															<option>India</option>
															<option>USA</option>
															<option>France</option>
															<option>UK</option>
															<option>UAE</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap mb-wrap">
														<label class="col-form-label">Zipcode </label>
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
								<!-- /Address Info -->		

								<!-- Social Profile -->
								<div class="user-accordion-item">
									<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#social"><span><i class="ti ti-social"></i></span>Social Profile</a>
									<div class="accordion-collapse collapse" id="social" data-bs-parent="#list-accord">
										<div class="content-collapse">
											<div class="row">
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Facebook</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Skype </label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Linkedin </label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap">
														<label class="col-form-label">Twitter</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap mb-wrap">
														<label class="col-form-label">Whatsapp</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-wrap mb-wrap">
														<label class="col-form-label">Instagram</label>
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Social Profile -->

								<!-- Access -->
								<div class="user-accordion-item">
									<a href="#" class="accordion-wrap collapsed" data-bs-toggle="collapse" data-bs-target="#access"><span><i class="ti ti-accessible"></i></span>Access</a>
									<div class="accordion-collapse collapse" id="access" data-bs-parent="#list-accord">
										<div class="content-collapse">
											<div class="row">
												<div class="col-md-12">
													<div class="radio-wrap form-wrap">
														<label class="col-form-label">Visibility</label>
														<div class="d-flex flex-wrap">
															<div class="radio-btn">
																<input type="radio" class="status-radio" id="public" name="visible">
																<label for="public">Public</label>
															</div>
															<div class="radio-btn">
																<input type="radio" class="status-radio" id="private" name="visible">
																<label for="private">Private</label>
															</div>
															<div class="radio-btn" data-bs-toggle="modal" data-bs-target="#access_view">
																<input type="radio" class="status-radio" id="people" name="visible">
																<label for="people">Select People</label>
															</div>
														</div>
													</div>
													<div class="radio-wrap">
														<label class="col-form-label">Status</label>
														<div class="d-flex flex-wrap">
															<div class="radio-btn">
																<input type="radio" class="status-radio" id="active" name="status" checked="">
																<label for="active">Active</label>
															</div>
															<div class="radio-btn">
																<input type="radio" class="status-radio" id="inactive" name="status">
																<label for="inactive">Inactive</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Access -->

							</div>

							<div class="submit-button text-end">
								<a href="#" class="btn btn-light sidebar-close2">Cancel</a>
								<button type="submit" class="btn btn-primary">Create</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Company -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>

</body>
</html>