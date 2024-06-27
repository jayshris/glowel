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
                <?php
                    $session = \Config\Services::session();
                    if($session->getFlashdata('success'))
                    {
                        echo '
                        <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
                        ';
                    }else if($session->getFlashdata('error'))
                    {
                        echo '
                        <div class="alert alert-danger">'.$session->getFlashdata("error").'</div>
                        ';
                    }
                ?>
                <!-- Contact List -->
                <div class="table-responsive custom-table">
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>Driver Name</th>
                        <th>Vehicle Name</th>
                        <th>Assign Date</th>
                        <th>Unassign Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($assign_data)
                        {
                            foreach($assign_data as $assign)
                            {
                              $assign_date_str  = '';
                              $unassign_str    = '';
                              if(isset($assign["assign_date"])){
                                $assign_date_str = strtotime($assign["assign_date"]) ;
                                $assign_date_str = date('d-m-Y',$assign_date_str);
                              }
                              if($assign["unassign_date"] != NULL){
                                $unassign_str = strtotime($assign["unassign_date"]);
                                $unassign_str = date('d-m-Y',$unassign_str);
                              }
                              echo '
                              <tr>
                              <td>'.$assign['party_name'].'</td>
                              <td>'.$assign['owner'].'</td>
                              <td>'.$assign_date_str.'</td>
                              <td>'.$unassign_str.'</td>
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
            window.location.href="<?php echo base_url(); ?>/company/delete/"+id;
        }
        return false;
    }
</script>
</body>

</html>