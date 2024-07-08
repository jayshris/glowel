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

            <!-- Page Header -->
            <div class="page-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="page-title">Units</h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('products') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Page Header -->

            <form method="post" action="<?php echo base_url('units'); ?>">
              <div class="card main-card">
                <div class="card-body">
                  <h4>Search / Filter</h4>
                  <hr>
                  <div class="row mt-2">

                    <div class="col-md-3">
                      <label class="col-form-label">Unit</label>
                      <input type="text" class="form-control" name="unit" value="<?= set_value('unit'); ?>" />
                    </div> 

                    <div class="col-md-7">
                      <button class="btn btn-info mt-4">Search</button>&nbsp;&nbsp;
                      <a href="./units" class="btn btn-warning mt-4">Reset</a>&nbsp;&nbsp;
                      <a href="<?= base_url('units/create') ?>" class="btn btn-danger mt-4">Add New Unit</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>


            <div class="card main-card">
              <div class="card-body">

                <!-- Search -->
                <div class="">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 mb-3">
                      <?php
                      $session = \Config\Services::session();

                      if ($session->getFlashdata('success')) {
                        echo '<div class="alert alert-success">' . $session->getFlashdata("success") . '</div>';
                      }

                      if ($session->getFlashdata('danger')) {
                        echo '<div class="alert alert-danger">' . $session->getFlashdata("danger") . '</div>';
                      }
                      ?>
                    </div> 
                  </div>
                </div>
                <!-- /Search -->

                <!-- Unit List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="unit-table">
                  <thead class="thead-light">
                      <tr>
                        <th>S. No</th>
                        <th>Action</th>
                        <th>Unit Name</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($data)
                        {
                            $i = 1;
                            foreach($data as $val)
                            {
                              if($val['status'] == 0){
                                $status= '<span class="badge badge-pill bg-danger">Inactive</span>';
                              }else{
                                $status ='<span class="badge badge-pill bg-success">Active</span>';
                              } ?>
                                <tr>
                                    <td><?= $i++; ?>.</td>
                                    <td>
                                    <div class="drop-down">
                                        <a href="javascript:void(0);" class="dropdown-toggle min-h"    data-bs-toggle="dropdown"><i class="ti ti-settings"></i> </a>
                                        <div class="dropdown-menu  dropdown-menu-start">
                                            <ul>
                                                <li>
                                                    <a href="<?= base_url('units/edit/'.$val['id'])  ?>"><i class="ti ti-pencil"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('units/view/'.$val['id'])  ?>" ><i class="ti ti-eye"></i>View</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);"  onclick="delete_data('<?= $val['id'] ?>')"> <i class="ti ti-trash"></i>Delete</a>
                                                </li> 
                                            </ul>
                                        </div>
                                    </div> 
                                        
                                    </td>
                                    <td><?= $val['unit']; ?></td>
                                    <td><?= $status; ?></td>
                                </tr>
                         <?php   }
                        }else{ ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td> No data found</td>
                                    <td></td>
                                </tr>
                       <?php }
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
                <!-- /Unit List -->

              </div>
            </div>

          </div>

        </div>
      </div>
      <!-- /Page Wrapper -->


    </div>
    <!-- /Main Wrapper -->

    <!-- scripts link  -->
    <?= $this->include('partials/vendor-scripts') ?>

    <!-- page specific scripts  -->
    <script>
      function delete_data(id) {
        if (confirm("Are you sure you want to remove this unit ?")) {
          window.location.href = "<?php echo base_url('/units/delete/'); ?>" + id;
        }
        return false;
      }


      // datatable init
      if ($('#unit-table').length > 0) {
        $('#unit-table').DataTable({
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
          }
        });
      }
    </script>
</body>

</html>