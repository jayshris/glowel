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
												<input type="text" class="form-control" placeholder="Search Source">
											</div>							
										</div>		
										<div class="col-md-7 col-sm-8">					
											<div class="export-list text-sm-end">
												<ul>
													<li>
														<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_source"><i class="ti ti-square-rounded-plus"></i>Add New Sources</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /Search -->

								<!-- Contact List -->
								<div class="table-responsive custom-table">
									<table class="table" id="source_list">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">
													<label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</th>
												<th>Title</th>
												<th>Created at</th>
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

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Source -->
		<div class="modal custom-modal fade" id="add_source" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New Source</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="sources">
							<div class="form-wrap">
								<label class="col-form-label">Source Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Status</label>
								<div class="d-flex flex-wrap radio-wrap">
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
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Create</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add New Source -->

		<!-- Edit Source -->
		<div class="modal custom-modal fade" id="edit_source" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Source</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="sources">
							<div class="form-wrap">
								<label class="col-form-label">Source Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Phone Calls">
							</div>
							<div class="form-wrap">
								<label class="col-form-label">Status</label>
								<div class="d-flex flex-wrap radio-wrap">
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
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Source -->

		<!-- Delete Source -->
		<div class="modal custom-modal fade" id="delete_source" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="sources">
							<div class="success-message text-center">
								<div class="success-popup-icon">
									<i class="ti ti-trash-x"></i>
								</div>
								<h3>Remove Source?</h3>
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
		<!-- /Delete Source -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>

</body>
</html>