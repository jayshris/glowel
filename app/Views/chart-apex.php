<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
</head>
<body>

<div id="global-loader" >
            <div class="whirly-loader"> </div>
        </div>
        <!-- Main Wrapper -->
        <div class="main-wrapper">

        <?= $this->include('partials/menu') ?>

            <div class="page-wrapper cardhead">
                <div class="content ">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Charts</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Apex Simple</h5>
								</div>
								<div class="card-body">
									<div id="s-line" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
							
						<!-- Chart -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Area Chart</h5>
								</div>
								<div class="card-body">
									<div id="s-line-area" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
							
						<!-- Chart -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Column Chart</h5>
								</div>
								<div class="card-body">
									<div id="s-col" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Column Stacked Chart</h5>
								</div>
								<div class="card-body">
									<div id="s-col-stacked" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						
						<!-- Chart -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Bar Chart</h5>
								</div>
								<div class="card-body">
									<div id="s-bar" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Mixed Chart</h5>
								</div>
								<div class="card-body">
									<div id="mixed-chart" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Donut Chart</h5>
								</div>
								<div class="card-body">
									<div id="donut-chart" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Radial Chart</h5>
								</div>
								<div class="card-body">
									<div id="radial-chart" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
					</div>
				</div>	
            </div>
        </div>
        <!-- /Main Wrapper -->



<?= $this->include('partials/vendor-scripts') ?>
<!-- Mobile Input -->
<script src="<?php echo base_url();?>assets/plugins/intltelinput/js/intlTelInput.js"></script>
<!-- Swiper JS -->
<script src="<?php echo base_url();?>assets/plugins/swiper/swiper.min.js"></script>
<!-- Slimscroll JS -->
<script src="<?php echo base_url();?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- FancyBox JS -->
<script src="<?php echo base_url();?>assets/plugins/fancybox/jquery.fancybox.min.js"></script>	
<!-- Apexchart JS -->
<script src="<?php echo base_url();?>assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/apexchart/chart-data.js"></script>
	
</body>
</html>