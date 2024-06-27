<?php
use App\Models\OfficeModel;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>
  <!-- Summernote CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.css">
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
                        <input type="text" class="form-control" placeholder="Search Deals">
                      </div>
                    </div>
                    <?php

        $session = \Config\Services::session();

        if($session->getFlashdata('success'))
        {
            echo '
            <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
            ';
        }

        ?>
                    <!-- <div class="col-md-7 col-sm-8">
                      <div class="export-list text-sm-end">
                        <ul>
                          <li>
                            <div class="export-dropdwon">
                              <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i
                                  class="ti ti-package-export"></i>Export</a>
                              <div class="dropdown-menu  dropdown-menu-end">
                                <ul>
                                  <li>
                                    <a href="javascript:void(0);"><i class="ti ti-file-type-pdf text-danger"></i>Export
                                      as PDF</a>
                                  </li>
                                  <li>
                                    <a href="javascript:void(0);"><i class="ti ti-file-type-xls text-green"></i>Export
                                      as Excel </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li>
                            <a href="javascript:void(0);" class="btn btn-primary add-popup"><i
                                class="ti ti-square-rounded-plus"></i>Add Company</a>
                          </li>
                        </ul>
                      </div>
                    </div> -->
                  </div>
                </div>
                <!-- /Search -->

                <!-- Filter 
                <div class="filter-section filter-flex">
                  <div class="sortby-list">
                    <ul>
                      <li>
                        <div class="sort-dropdown drop-down">
                          <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i
                              class="ti ti-sort-ascending-2"></i>Sort </a>
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
                          <a href="javascript:void(0);" class="btn btn-purple-light" data-bs-toggle="dropdown"
                            data-bs-auto-close="false"><i class="ti ti-columns-3"></i>Manage Columns</a>
                          <div class="dropdown-menu  dropdown-menu-xl-end">
                            <h4>Want to manage datatables?</h4>
                            <p>Please drag and drop your column to reorder your table and enable see option as you want.
                            </p>
                            <ul>
                              <li>
                                <p><i class="ti ti-grip-vertical"></i>Action</p>
                                <div class="status-toggle">
                                  <input type="checkbox" id="col-action" class="check">
                                  <label for="col-action" class="checktoggle"></label>
                                </div>
                              </li>
                              <li>
                                <p><i class="ti ti-grip-vertical"></i>Name</p>
                                <div class="status-toggle">
                                  <input type="checkbox" id="col-name" class="check">
                                  <label for="col-name" class="checktoggle"></label>
                                </div>
                              </li>
                              <li>
                                <p><i class="ti ti-grip-vertical"></i>Added</p>
                                <div class="status-toggle">
                                  <input type="checkbox" id="col-loc" class="check">
                                  <label for="col-loc" class="checktoggle"></label>
                                </div>
                              </li>
                              <li>
                                <p><i class="ti ti-grip-vertical"></i>Updated</p>
                                <div class="status-toggle">
                                  <input type="checkbox" id="col-loc" class="check">
                                  <label for="col-loc" class="checktoggle"></label>
                                </div>
                              </li>

                              <li>
                                <p><i class="ti ti-grip-vertical"></i>Status</p>
                                <div class="status-toggle">
                                  <input type="checkbox" id="col-status" class="check">
                                  <label for="col-status" class="checktoggle"></label>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="form-sorts dropdown">
                          <a href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="false"><i
                              class="ti ti-filter-share"></i>Filter</a>
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
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                      aria-expanded="true" aria-controls="collapseTwo">Deals Name</a>
                                  </div>
                                  <div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo"
                                    data-bs-parent="#accordionExample">
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
                                    <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner"
                                      aria-expanded="false" aria-controls="owner">Owner</a>
                                  </div>
                                  <div class="filter-set-contents accordion-collapse collapse" id="owner"
                                    data-bs-parent="#accordionExample">
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
                                <div class="filter-set-content">
                                  <div class="filter-set-content-head">
                                    <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status"
                                      aria-expanded="false" aria-controls="Status">Status</a>
                                  </div>
                                  <div class="filter-set-contents accordion-collapse collapse" id="Status"
                                    data-bs-parent="#accordionExample">
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
                                            <h5>Won</h5>
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
                                            <h5>Open</h5>
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
                                    <a href="#" class="collapsed" data-bs-toggle="collapse"
                                      data-bs-target="#collapseOne" aria-expanded="false"
                                      aria-controls="collapseOne">Rating</a>
                                  </div>
                                  <div class="filter-set-contents accordion-collapse collapse" id="collapseOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="filter-content-list">
                                      <ul>
                                        <li>
                                          <div class="filter-checks">
                                            <label class="checkboxs">
                                              <input type="checkbox" checked>
                                              <span class="checkmarks"></span>
                                            </label>
                                          </div>
                                          <div class="rating">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <span>5.0</span>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="filter-checks">
                                            <label class="checkboxs">
                                              <input type="checkbox">
                                              <span class="checkmarks"></span>
                                            </label>
                                          </div>
                                          <div class="rating">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star"></i>
                                            <span>4.0</span>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="filter-checks">
                                            <label class="checkboxs">
                                              <input type="checkbox">
                                              <span class="checkmarks"></span>
                                            </label>
                                          </div>
                                          <div class="rating">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>3.0</span>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="filter-checks">
                                            <label class="checkboxs">
                                              <input type="checkbox">
                                              <span class="checkmarks"></span>
                                            </label>
                                          </div>
                                          <div class="rating">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>2.0</span>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="filter-checks">
                                            <label class="checkboxs">
                                              <input type="checkbox">
                                              <span class="checkmarks"></span>
                                            </label>
                                          </div>
                                          <div class="rating">
                                            <i class="fa fa-star filled"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>1.0</span>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="filter-set-content">
                                  <div class="filter-set-content-head">
                                    <a href="#" class="collapsed" data-bs-toggle="collapse"
                                      data-bs-target="#collapseThree" aria-expanded="false"
                                      aria-controls="collapseThree">Tags</a>
                                  </div>
                                  <div class="filter-set-contents accordion-collapse collapse" id="collapseThree"
                                    data-bs-parent="#accordionExample">
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
                                            <h5>Promotion</h5>
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
                                            <h5>Rated</h5>
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
                                            <h5>Rejected</h5>
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
                                            <h5>Collab</h5>
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
                                    <a href="<?php echo base_url();?>deals" class="btn btn-primary">Filter</a>
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
                 /Filter -->

                <!-- Contact List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="deal_list">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>User Type</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Home Branch</th>
                        <th>Status</th>
                        <th>Created at</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($user_data)
                        {
                            foreach($user_data as $user)
                            {
                              
                            $officeModel = new OfficeModel();
                            $office  = $officeModel->where('id', $user["home_branch"])->where('status',1)->first();
                            if(isset($office['name']) && $office['name']!='' ){
                              $office = $office['name'];
                            }else{
                              $office='';
                            }
                              if($user['status'] == 'Inactive'){
                                $status= '<span class="badge badge-pill bg-danger">Inactive</span>';
                              }else{
                                $status ='<span class="badge badge-pill bg-success">Active</span>';
                              }
                              $strtime='';
                              if(isset($user["created_at"]) && $user["created_at"] != NULL){
                                $strtime = strtotime($user["created_at"]);
                                $strtime = date('d-m-Y',$strtime);
                              }
                                echo '
                                <tr>
                                <td>
                                
                                <a href="'.base_url().'user/edit/'.$user['id'].'" class="btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i></a>

                                <button type="button" onclick="delete_data('.$user["id"].')" class="btn btn-secondary btn-sm"> <i class="ti ti-trash"></i></>
                                </td>
                                <td>'.ucwords($user["usertype"]).'</td>
                                    <td>'.$user["first_name"].$user["last_name"].'</td>
                                    <td>'.$user["email"].'</td>
                                    <td>'.$user["mobile"].'</td>
                                    <td>'.$office.'</td>
                                    <td>'.$status.'</td>
                                    <td>'.$strtime.'</td>
                                </tr>';
                            }
                        }
                        ?>
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


  </div>
  <!-- /Main Wrapper -->


  <?= $this->include('partials/vendor-scripts') ?>
  <!-- Summernote JS -->
  <script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
  <script>
    function delete_data(id)
    {
        if(confirm("Are you sure you want to remove it?"))
        {
            window.location.href="<?php echo base_url(); ?>/user/delete/"+id;
        }
        return false;
    }
</script>
</body>

</html>