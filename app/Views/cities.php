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
                                        <input type="text" class="form-control" placeholder="Search Cities">
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
                                                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_city"><i class="ti ti-square-rounded-plus"></i>Add City</a>
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
                                            <div class="dropdown-menu  dropdown-menu-xl-end">
                                                <h4>Want to manage datatables?</h4>
                                                <p>Please drag and drop your column to reorder your table and enable see option as you want.</p>
                                                <ul>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>Country Name</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-country" class="check">
                                                            <label for="col-country" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>State Name</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-state" class="check">
                                                            <label for="col-state" class="checktoggle"></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <p><i class="ti ti-grip-vertical"></i>City Name</p>
                                                        <div class="status-toggle">
                                                            <input type="checkbox" id="col-city" class="check">
                                                            <label for="col-city" class="checktoggle"></label>
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
                                                                <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Country Name</a>
                                                            </div>
                                                            <div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
                                                                <div class="filter-content-list">
                                                                    <div class="form-wrap icon-form">
                                                                        <span class="form-icon"><i class="ti ti-search"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Search Country">
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
                                                                                <h5>American Samoa</h5>
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
                                                                                <h5>Andorra</h5>
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
                                                                                <h5>Angalo</h5>
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
                                                                                <h5>Anguilla</h5>
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
                                                                                <h5>Antarctica</h5>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-set-content">
                                                            <div class="filter-set-content-head">
                                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">State Name</a>
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
                                                                                <h5>Swains Island</h5>
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
                                                                                <h5>Andorra la Vella</h5>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="filter-set-content">
                                                            <div class="filter-set-content-head">
                                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#City" aria-expanded="false" aria-controls="City">City Name</a>
                                                            </div>
                                                            <div class="filter-set-contents accordion-collapse collapse" id="City" data-bs-parent="#accordionExample">
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
                                                                                <h5>Gandzasar</h5>
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
                                                                                <h5>Escaldes-Engordany</h5>
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
                                                                <a href="<?php echo base_url();?>cities" class="btn btn-primary">Filter</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Filter -->

                        <!-- City List -->
                        <div class="table-responsive custom-table">
                            <table class="table" id="cities_list">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="no-sort">
                                            <label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
                                        </th>
                                        <th class="no-sort"></th>
                                        <th>Country Name</th>
                                        <th>State Name</th>
                                        <th>City Name</th>
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
                        <!-- /City List -->

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- /Page Wrapper -->

<!-- Add City -->
<div class="modal custom-modal fade" id="add_city" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add City</h5>
                <div class="d-flex align-items-center mod-toggle">
                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                        <i class="ti ti-x"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>cities">
                    <div class="form-wrap">
                        <label class="col-form-label">Country Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">State Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">City Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add City  -->

<!-- Edit City  -->
<div class="modal custom-modal fade" id="edit_city" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit City</h5>
                <div class="d-flex align-items-center mod-toggle">
                    <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
                        <i class="ti ti-x"></i>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url();?>cities">
                    <div class="form-wrap">
                        <label class="col-form-label">Country Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="American Samoa(+684)">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">State Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Swains Island">
                    </div>
                    <div class="form-wrap">
                        <label class="col-form-label">City Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" value="Gandzasar">
                    </div>
                    <div class="modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit City  -->

<!-- Delete City -->
<div class="modal custom-modal fade" id="delete_city" role="dialog">
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
                    <h3>Remove City?</h3>
                    <p class="del-info">Are you sure you want to remove it.</p>
                    <div class="col-lg-12 text-center modal-btn">
                        <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
                        <a href="<?php echo base_url();?>cities" class="btn btn-danger">Yes, Delete it</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete City -->

</div>
<!-- /Main Wrapper -->
<?= $this->include('partials/vendor-scripts') ?>

</body>
</html>