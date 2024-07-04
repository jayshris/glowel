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
        if($session->getFlashdata('success')) {
            echo '
            <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
            ';
        }
        ?>
                  </div>
                </div>

                <!-- Contact List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="deal_list">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <!-- <th>Thumbnail Image</th> -->
                        <th>Foreman Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($foreman_data)
                        {
                            foreach($foreman_data as $foreman)
                            {
                              if($foreman['status'] == 'Inactive'){
                                $status= '<span class="badge badge-pill bg-danger">Inactive</span>';
                              }else{
                                $status ='<span class="badge badge-pill bg-success">Active</span>';
                              }
                              $created_at_str = '';
                              $updated_at_str='';
                              if(isset($foreman["created_at"])){
                                $created_at_str = strtotime($foreman["created_at"]) ;
                                $created_at_str = date('d-m-Y',$created_at_str);
                              }
                              if(isset($foreman["updated_at"])){
                                $updated_at_str = strtotime($foreman["updated_at"]);
                                $updated_at_str = date('d-m-Y',$updated_at_str);
                              }

                              if($foreman['approved'] == NULL){
                                $bun = '<a href="foreman/approve/'.$foreman['id'].'" class="btn btn-success btn-sm" role="button">Approve</a>';
                              }else{
                                $bun = '<strong>Approved</strong>';
                              }
                                echo '
                                <tr>
                                    <td>
                                    '.$bun .'

                                    <a href="'.base_url().'foreman/edit/'.$foreman['id'].'"  class="btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i></a>

                                    <button type="button"   onclick="delete_data('.$foreman["id"].')" class="btn btn-secondary btn-sm"> <i class="ti ti-trash"></i></button>
                                    </td>
                                    
                                    <td>'.$foreman["name"].'</td>
                                    <td>'.$foreman['mobile'].'</td>
                                    <td>'.$foreman['email'].'</td>
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
            window.location.href="<?php echo base_url(); ?>/foreman/delete/"+id;
        }
        return false;
    }
</script>
</body>

</html>