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

            <?php //echo  $this->include('partials/page-title') ?>
            <!-- Page Header -->
            <div class="page-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="page-title">Office</h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('office') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Page Header -->

            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('office'); ?>">
              <div class="card main-card">
                <div class="card-body">
                  <h4>Search / Filter</h4>
                  <hr>
                  <div class="row mt-2"> 

                    <div class="col-md-2">
                      <div class="form-wrap">
                        <label class="col-form-label">Status</label>
                        <select class="form-select" name="status" aria-label="Default select example">
                          <option value="">Select Status</option>
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-1">
                      <button class="btn btn-info mt-4">Search</button>&nbsp;&nbsp;      
                    </div>
                    <div class="col-md-1 ">
                      <a href="./office" class="btn btn-warning mt-4">Reset</a>&nbsp;&nbsp;
                    </div>
                    <div class="col-md-1 mrg-sub-4">
                      <?php echo makeListActions($currentController, $Action, 0, 1);?>
                    </div>

                  </div>
                </div>
              </div>
            </form>


            <div class="card main-card">
              <div class="card-body">

                <!-- Search -->
                <div class="search-section">
                  <div class="row">
                    <!-- <div class="col-md-5 col-sm-4">
                      <div class="form-wrap icon-form">
                        <span class="form-icon"><i class="ti ti-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search Deals">
                      </div>
                    </div> -->
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

                <!-- Contact List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="company-table">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>Company Name</th>
                        <th>Name</th>
                        <th>Added</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($office_data)
                        {
                            foreach($office_data as $office)
                            {
                              if($office['status'] == 0){
                                $status= '<span class="badge badge-pill bg-danger">Inactive</span>';
                              }else{
                                $status ='<span class="badge badge-pill bg-success">Active</span>';
                              }
                              $strtime = strtotime($office["created_at"]);
                                echo '
                                <tr>
                                    <td>  
                                    '. makeListActions($currentController, $Action, $office['id'], 2).'
                                     </td>
                                    <td>'.$office["cname"].'</td>
                                    <td>'.$office["name"].'</td>
                                    <td>'.date('d-m-Y',$strtime).'</td>
                                    <td>'.$status.'</td>
                                </tr>';
                            }
                        }
                        ?>
                          <!-- <a title="Edit" type="button" href="'.base_url().'office/edit/'.$office['id'].'" class="btn btn-success btn-sm"><i class="ti ti-pencil"></i> </a>
                                    <a title="View" type="button" href="'.base_url().'office/view/'.$office['id'].'" class="btn btn-primary btn-sm"><i class="ti ti-arrow-right"></i> </a>
                                   <button title="Delete" type="button" onclick="delete_data('.$office["id"].')" class="btn btn-secondary btn-sm"> <i class="ti ti-trash"></i></button> -->
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
            window.location.href="<?php echo base_url(); ?>/office/delete/"+id;
        }
        return false;
    }

    
      // datatable init
      if ($('#company-table').length > 0) {
        $('#company-table').DataTable({
          "bFilter": false,
          "bInfo": false,
          "autoWidth": true,
          "language": {
            search: ' ',
            sLengthMenu: '_MENU_',
            searchPlaceholder: "Search",
            info: "_START_ - _END_ of _TOTAL_ items",
            "lengthMenu": "Show _MENU_ entries",
            paginate: {
              next: 'Next <i class=" fa fa-angle-right"></i> ',
              previous: '<i class="fa fa-angle-left"></i> Prev '
            },
          },
          initComplete: (settings, json) => {
            $('.dataTables_paginate').appendTo('.datatable-paginate');
            $('.dataTables_length').appendTo('.datatable-length');
          },
          "aoColumnDefs": [
              { "bSortable": false, "aTargets": [0,4] } 
          ]
        });
      }
</script>
</body>

</html>