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
                  </div>
                </div>
                <!-- /Search -->


                <!-- Contact List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="deal_list">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>Brand Name</th>
                        <th>Abbreviation</th>
                        <th>Fuel Type</th>
                        <th>Added</th>
                        <th>Updated</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($fuelpumpbrand_data)
                        {
                            foreach($fuelpumpbrand_data as $fuelpumpbrand)
                            {
                              if($fuelpumpbrand['status'] == 0){
                                $status= '<span class="badge badge-pill bg-danger">Inactive</span>';
                              }else{
                                $status ='<span class="badge badge-pill bg-success">Active</span>';
                              }
                              $strtime = strtotime($fuelpumpbrand["created_at"]);
                              $strtime1 = strtotime($fuelpumpbrand["updated_at"]);
                                echo '
                                <tr>
                                    <td>
                                    <a title="Edit" type="button" href="'.base_url().'fuelpumpbrand/edit/'.$fuelpumpbrand['id'].'" class="btn btn-success btn-sm"><i class="ti ti-pencil"></i> </a>
                                    
                                    <button title="Delete" type="button" onclick="delete_data('.$fuelpumpbrand["id"].')" class="btn btn-secondary btn-sm"> <i class="ti ti-trash"></i></button>
                                    </td>
                                    <td>'.ucwords($fuelpumpbrand["brand_name"]).'</td>
                                    <td>'.ucwords($fuelpumpbrand["abbreviation"]).'</td>
                                    <td>'.ucwords(strtolower($fuelpumpbrand["fuel_type_names"]), '\',. ').'</td>
                                    <td>'.date('d-m-Y',$strtime).'</td>
                                    <td>'.date('d-m-Y',$strtime1).'</td>
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
            window.location.href="<?php echo base_url(); ?>/fuelpumpbrand/delete/"+id;
        }
        return false;
    }
</script>
</body>

</html>