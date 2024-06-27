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
				

						<!-- Filter -->
						<div class="filter-section filter-flex">
							<div class="sortby-list">
								<ul>
									<li>
										<div class="form-sorts dropdown">
											<a href="javascript:void(0);" data-bs-toggle="dropdown"  data-bs-auto-close="false"><i class="ti ti-filter-share"></i>Filter</a>
											<div class="filter-dropdown-menu dropdown-menu dropdown-menu-start">
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
										<div class="form-wrap icon-form">
											<span class="form-icon"><i class="ti ti-search"></i></span>
											<input type="text" class="form-control" placeholder="Search Leads">
										</div>	
									</li>
								</ul>
							</div>
							<div class="filter-list">
								<ul>
									<li>
										<div class="view-icons">
											<a href="<?php echo base_url(); ?>leads"><i class="ti ti-list-tree"></i></a>
											<a href="<?php echo base_url(); ?>leads-kanban" class="active"><i class="ti ti-grid-dots"></i></a>
										</div>
									</li>																	
									<li>
										<a href="javascript:void(0);" class="btn btn-primary add-popup"><i class="ti ti-square-rounded-plus"></i>Add Leads</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /Filter -->

						<!-- Leads Kanban -->
						<div class="kanban-wrapper leads-kanban-wrapper">
							<div class="kanban-list-items">
								<div class="kanban-list-head">
									<div class="d-flex justify-content-between align-items-center">
										<div class="kanban-title-head dot-warning">
											<h5>Contacted</h5>
											<span>45 Leads - $15,44,540</span>
										</div>
										<div class="kanban-action-btns d-flex align-items-center">
											<a href="javascript:void(0);" class="plus-btn add-popup"><i class="ti ti-plus"></i></a>
											<div class="dropdown table-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item edit-popup" href="#"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deal"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<ul class="kanban-drag-wrap">
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-warning"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>SM</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Schumm</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$03,50,000
													</li>
													<li>
														<i class="ti ti-mail"></i>
														darleeo@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 12445-47878
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														Newyork, United States
													</li>
												</ul>
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-09.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="javascript:void(0);"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="javascript:void(0);"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="javascript:void(0);"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-success"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>CS</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Collins</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$02,10,000
													</li>
													<li>
														<i class="ti ti-mail"></i>
														robertson@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 13987-90231
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														Austin, United States
													</li>
												</ul>
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-01.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-danger"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>KI</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Konopelski</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$02,18,000
													</li>
													<li>
														<i class="ti ti-mail"></i>
														sharon@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 17932-04278
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														Atlanta, United States
													</li>
												</ul>
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-02.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="kanban-list-items">
								<div class="kanban-list-head">
									<div class="d-flex justify-content-between align-items-center">
										<div class="kanban-title-head dot-purple">
											<h5>Not Contacted</h5>
											<span>45 Leads - $15,44,540</span>
										</div>
										<div class="kanban-action-btns d-flex align-items-center">
											<a href="javascript:void(0);" class="plus-btn add-popup"><i class="ti ti-plus"></i></a>
											<div class="dropdown table-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item edit-popup" href="#"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deal"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<ul class="kanban-drag-wrap">
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-purple"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>AS</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Adams</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$02,45,000
													</li>
													<li>
														<i class="ti ti-mail"></i>
														vaughan12@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 17392-27846
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														London, United Kingdom
													</li>
												</ul>
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-03.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-warning"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>WK</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Wizosk</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$01,17,000
													</li>
													<li>
														<i class="ti ti-mail"></i>
														caroltho3@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 78982-09163
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														Bristol, United Kingdom
													</li>
												</ul>
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-04.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-success"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>HR</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Heller</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$02,12,000
													</li>
													<li>
														<i class="ti ti-mail"></i>
														dawnmercha@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 27691-89246
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														San Francisco, United States
													</li>
												</ul>
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-05.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="kanban-list-items">
								<div class="kanban-list-head">
									<div class="d-flex justify-content-between align-items-center">
										<div class="kanban-title-head dot-success">
											<h5>Closed</h5>
											<span>45 Leads - $15,44,540</span>
										</div>
										<div class="kanban-action-btns d-flex align-items-center">
											<a href="javascript:void(0);" class="plus-btn add-popup"><i class="ti ti-plus"></i></a>
											<div class="dropdown table-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item edit-popup" href="#"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deal"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<ul class="kanban-drag-wrap">
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-success"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>GI</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Gutkowsi</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$01,84,043
													</li>
													<li>
														<i class="ti ti-mail"></i>
														rachel@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 17839-93617
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														Dallas, United States
													</li>
												</ul>
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-06.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-danger"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>WR</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Walter</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$09,35,189
													</li>
													<li>
														<i class="ti ti-mail"></i>
														jonelle@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 16739-47193
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														Leicester, United Kingdom
													</li>
												</ul>
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-07.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-purple"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>HN</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Hansen</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$04,27,940
													</li>
													<li>
														<i class="ti ti-mail"></i>
														jonathan@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 18390-37153
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														Norwich, United Kingdom
													</li>
												</ul>
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-08.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="kanban-list-items">
								<div class="kanban-list-head">
									<div class="d-flex justify-content-between align-items-center">
										<div class="kanban-title-head dot-danger">
											<h5>Lost</h5>
											<span>15 Leads - $14,89,543</span>
										</div>
										<div class="kanban-action-btns d-flex align-items-center">
											<a href="javascript:void(0);" class="plus-btn add-popup"><i class="ti ti-plus"></i></a>
											<div class="dropdown table-action">
												<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item edit-popup" href="#"><i class="fa-solid fa-pencil text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_deal"><i class="fa-regular fa-trash-can text-danger"></i> Delete</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<ul class="kanban-drag-wrap">
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-danger"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>SE</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Steve</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$04,17,593
													</li>
													<li>
														<i class="ti ti-mail"></i>
														sidney@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 11739-38135
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														Manchester, United Kingdom
													</li>
												</ul>
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-09.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-success"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>LE</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Leuschke</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$08,81,389
													</li>
													<li>
														<i class="ti ti-mail"></i>
														brook@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 19302-91043
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														Chicago, United States
													</li>
												</ul>		
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-10.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<div class="kanban-card">
											<div class="kanban-card-head">
												<span class="bar-design bg-warning"></span>
												<div class="kanban-card-title">
													<a href="<?php echo base_url(); ?>leads-details"><span>AY</span></a>
													<h6><a href="<?php echo base_url(); ?>leads-details">Anthony</a></h6>
												</div>
											</div>
											<div class="kanban-card-body">
												<ul>
													<li>
														<i class="ti ti-report-money"></i>
														$09,27,193
													</li>
													<li>
														<i class="ti ti-mail"></i>
														mickey@example.com
													</li>
													<li>
														<i class="ti ti-phone"></i>
														+1 17280-92016
													</li>
													<li>
														<i class="ti ti-map-pin-pin"></i>
														Derby, United Kingdom
													</li>
												</ul>
											</div>
											<div class="kanban-card-footer d-flex align-items-center justify-content-between">
												<span><img src="<?php echo base_url(); ?>assets/img/icons/company-icon-01.svg" alt=""></span>
												<ul class="icons-social">
													<li><a href="#"><i class="ti ti-phone-check"></i></a></li>
													<li><a href="#"><i class="ti ti-message-circle-2"></i></a></li>
													<li><a href="#"><i class="ti ti-color-swatch"></i></a></li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- /Leads Kanban -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Contact -->
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
												<label class="col-form-label">&nbsp; <span class="text-danger">*</span></label>
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
									<div class="radio-wrap">
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
											</div>
										</div>
										<div class="col-md-4 d-flex align-items-center">
											<div class="form-wrap w-100">
												<label class="col-form-label">&nbsp; <span class="text-danger">*</span></label>
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
									<div class="radio-wrap">
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

		<!-- Delete Contact -->
		<div class="modal custom-modal fade" id="delete_leads" role="dialog">
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
								<a href="<?php echo base_url(); ?>leads-kanban" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Contact -->

		<!-- Create Contact -->
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
		<!-- /Create Contact -->

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
						<form action="leads-kanban">
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
						<form action="leads-kanban">	
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
														<select class="multiple-img" multiple="multiple">
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
	<!-- Drag Card -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>

</body>
</html>