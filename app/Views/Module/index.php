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


                <!-- Contact List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="deal_list">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>Module name</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($module_data)
                        {
                            foreach($module_data as $user)
                            {
                              if($user['status'] == 'Inactive'){
                                $status= '<span class="badge badge-pill bg-danger">Inactive</span>';
                              }else{
                                $status ='<span class="badge badge-pill bg-success">Active</span>';
                              }
                                echo '
                                <tr>
                                <td>
                                <a href="'.base_url().'module/edit/'.$user['id'].'" class="btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i></a>

                                <button type="button" onclick="delete_data('.$user["id"].')" class="btn btn-secondary btn-sm"> <i class="ti ti-trash"></i></>
                                </td>
                                <td>'.ucwords($user["name"]).'</td>
                                <td>'.$status.'</td>
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
            window.location.href="<?php echo base_url(); ?>/module/delete/"+id;
        }
        return false;
    }
</script>
</body>

</html>