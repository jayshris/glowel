<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
</head>
<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
	<div class="preloader">
			<div class="preloader-blk">
				<div class="preloader__image"></div>
			</div>
		</div>
        <?= $this->include('partials/menu') ?>

?>
    	<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">
						<div class="page-header">
						<?php
						$session = \Config\Services::session();
						if($session->getFlashdata('error'))
						{
								echo '
								<div class="alert alert-danger">'.$session->getFlashdata("error").'</div>
								';
						}
						?>
							<div class="row align-items-center ">
								<div class="col-md-4">
									<h3 class="page-title">Dashboard</h3>
								</div>
								<div class="col-md-8 float-end ms-auto">
									<div class="d-flex title-head">
										<div class="daterange-picker d-flex align-items-center justify-content-center">
											<div class="form-sort me-2">
												<i class="ti ti-calendar"></i>
												<input type="text" class="form-control  date-range bookingrange">
											</div>	
											<div class="head-icons mb-0">
												<a href="<?php echo base_url(); ?>deals-dashboard" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!--change start -->  
						<div class="row">
							<div class="col-md-12">
							<div class="card">
									<div class="card-body pb-0">
										<div class="settings-header">
											<h4>Top Links</h4>
										</div>
										<div class="row">
											<!-- App -->
											<div class="col-md-6 col-sm-6"> 
												<div class="integration-grid">  
													<div class="card-header justify-content-between">
														<div class="card-title">
															SALES / OUTWARD
														</div>
													</div>
													<div class="card-body">	 
														<ul>
															<?php if($controllerPermissions['sales'] == 1){?>
															<li class="mt-2">
																<a href="<?php echo base_url(); ?>sales" class="col-md-12 btn btn-outline-primary btn-lg">
																	<span>ORDERS</span>
																</a> 
															</li>
															<?php }?>
															<?php if($controllerPermissions['salesinvoices'] == 1){?>
															<li class="mt-2">
																<a href="<?php echo base_url(); ?>sales-invoices" class="col-md-12 btn btn-outline-success btn-lg">
																	</i><span>INVOICES</span>
																</a>
															</li>
															<?php }?>
															<?php if($controllerPermissions['salesinvoicesverifivation'] == 1){?>
															<li class="mt-2">
																<a href="<?php echo base_url(); ?>sales-invoices-verifivation" class="col-md-12 btn btn-outline-info btn-lg">
																	</i><span>VERIFICATION</span>
																</a>
															</li>
															<?php }?>
														</ul>
													</div>
												</div>	
											</div>
											<!-- /App -->

											<!-- App -->
											<div class="col-md-6 col-sm-6"> 
												<div class="integration-grid">  
													<div class="card-header justify-content-between">
														<div class="card-title">
															PURCHASE / INWARD
														</div>
													</div>
													<div class="card-body">	 
														<ul>
															<?php if($controllerPermissions['purchase'] == 1){?>
															<li class="mt-2">
																<a href="<?php echo base_url(); ?>purchase" class="col-md-12 btn btn-outline-primary btn-lg">
																	<span>ORDERS</span>
																</a>
															</li>
															<?php }?>
															<?php if($controllerPermissions['PurchaseInvoices'] == 1){?>
															<li class="mt-2">
																<a href="<?php echo base_url(); ?>purchase-invoices" class="col-md-12 btn btn-outline-success btn-lg">
																	</i><span>INVOICES</span>
																</a>
															</li>
															<?php }?>
															<?php if($controllerPermissions['PurchaseInvoicesVerifivation'] == 1){?>
															<!-- <li class="task-wrap pending"> -->
															<li class="mt-2">
																<a href="<?php echo base_url(); ?>purchase-invoices-verifivation"  class="col-md-12 btn btn-outline-info btn-lg">
																	</i><span>VERIFICATION</span>
																</a>
															</li>
															<?php }?>
														</ul>
													</div>
												</div>	
											</div>
											<!-- /App -->

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--change end -->

						<!-- <div class="row">
							<div class="col-md-6 d-flex">		
								<div class="card flex-fill">
									<div class="card-body">
										<div class="statistic-header">
											<h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Deals</h4>
											<div class="dropdown statistic-dropdown">
												<div class="card-select">
													<ul>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																<i class="ti ti-calendar-check me-2"></i>Last 30 days
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 15 days
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 30 days
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="table-responsive custom-table">
											<table class="table dataTable" id="deals-project"> 
												<thead class="thead-light">
													<tr>
														<th>Deal Name</th>
														<th>Stage</th>
														<th>Deal Value</th>
														<th>Probability</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 d-flex">		
								<div class="card flex-fill">
									<div class="card-body">
										<div class="statistic-header">
											<h4><i class="ti ti-grip-vertical me-1"></i>Deals By Stage</h4>
											<div class="dropdown statistic-dropdown">
												<div class="card-select">
													<ul>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Sales Pipeline
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Marketing Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Sales Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Email
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Chats
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Operational
																</a>
															</div>
														</li>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Last 30 Days
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 30 Days
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 15 Days
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 7 Days
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div id="deals-chart"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							
							<div class="col-md-6 d-flex">		
								<div class="card flex-fill">
									<div class="card-body">
										<div class="statistic-header">
											<h4><i class="ti ti-grip-vertical me-1"></i>Leads By Stage</h4>
											<div class="dropdown statistic-dropdown">
												<div class="card-select">
													<ul>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Marketing Pipeline
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Marketing Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Sales Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Email
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Chats
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Operational
																</a>
															</div>
														</li>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Last 3 months
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 3 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 6 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 12 months
																</a>
															</div>
														</li>
													</ul>
												</div>
												
											</div>
										</div>
										<div id="last-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-md-6 d-flex">	
								<div class="card flex-fill">
									<div class="card-body ">
										<div class="statistic-header">
											<h4><i class="ti ti-grip-vertical me-1"></i>Won Deals Stage</h4>
											<div class="dropdown statistic-dropdown">
												<div class="card-select">
													<ul>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Marketing Pipeline
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Marketing Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Sales Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Email
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Chats
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Operational
																</a>
															</div>
														</li>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Last 3 months
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 3 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 6 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 12 months
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div id="won-chart"></div>
									</div>
								</div>
							</div>

							<div class="col-md-12 d-flex">		
								<div class="card w-100">
									<div class="card-body">
										<div class="statistic-header">
											<h4><i class="ti ti-grip-vertical me-1"></i>Deals by Year</h4>
											<div class="dropdown statistic-dropdown">
												<div class="card-select">
													<ul>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Sales Pipeline
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Marketing Pipeline
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Sales Pipeline
																</a>
															</div>
														</li>
														<li>
															<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
																Last 3 months
															</a>
															<div class="dropdown-menu dropdown-menu-end">
																
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 3 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 6 months
																</a>
																<a href="javascript:void(0);" class="dropdown-item">
																	Last 12 months
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div id="deals-year"></div>
									</div>
								</div>
							</div>
						</div> -->

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->
    </div>
	<!-- /Main Wrapper -->
    <?= $this->include('partials/vendor-scripts') ?>
	<!-- Apexchart JS -->
<script src="<?php echo base_url();?>assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/apexchart/chart-data.js"></script>
</body>
</html>