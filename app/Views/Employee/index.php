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
                        <input type="text" class="form-control" placeholder="Search Deals">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <?php
                      $session = \Config\Services::session();
                      if ($session->getFlashdata('success')) {
                        echo '
                            <div class="alert alert-success">' . $session->getFlashdata("success") . '</div>
                            ';
                      }
                      ?>
                    </div>
                  </div>
                </div>
                <!-- /Search -->


                <!-- Contact List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="employeeTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>Employee Name</th>
                        <th>Added</th>
                        <th>Updated</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($employee_data) {
                        foreach ($employee_data as $employee) {
                          if (!$employee['approved']) {
                            $status = '<span class="badge badge-pill bg-info">Not Approved</span>';
                          } else if ($employee['status'] == '0') {
                            $status = '<span class="badge badge-pill bg-danger">Inactive</span>';
                          } else {
                            $status = '<span class="badge badge-pill bg-success">Active</span>';
                          }

                          if (!$employee['approved']) {
                            $bun = '<a href="employee/approve/' . $employee['id'] . '" class="dropdown-item btn btn-info btn-sm" role="button">Approve</a>';
                          } else if ($employee['status'] == '1') {
                            $bun = '<a href="employee/status/' . $employee['id'] . '" class="dropdown-item btn btn-danger btn-sm" role="button">Inactive</a>';
                          } else {
                            $bun = '<a href="employee/status/' . $employee['id'] . '" class="dropdown-item btn btn-success btn-sm" role="button">Active</a>';
                          }

                          echo '
                                <tr>
                                    <td>
                                      <div class="btn-group dropend my-1">
                                        <button type="button" class="btn btn-sm btn-outline-danger dropdown-toggle rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                          <i class="fa fa-cog" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu" style="">
                                          <li><a href="' . base_url() . 'employee/edit/' . $employee['id'] . '"  class="dropdown-item btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i> Edit</a></li>
                                          <li><button type="button" onclick="delete_data(' . $employee['id'] . ')" class="dropdown-item btn btn-secondary btn-sm"><i class="ti ti-trash"></i> Delete</button></li>
                                          <li>' . $bun . '</li>
                                        </ul>
                                      </div>
                                    </td>
                                    <td>' . $employee["name"] . '</td>
                                    <td>' . (isset($employee['created_at']) ? date('d-m-Y', strtotime($employee["created_at"])) : '') . '</td>
                                    <td>' . (isset($employee['updated_at']) ? date('d-m-Y', strtotime($employee["updated_at"])) : '') . '</td>
                                    <td>' . $status . '</td>
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
  <script>
    function delete_data(id) {
      if (confirm("Are you sure you want to remove it?")) {
        window.location.href = "<?php echo base_url(); ?>/employee/delete/" + id;
      }
      return false;
    }

    // datatable init
    if ($('#employeeTable').length > 0) {
      $('#employeeTable').DataTable({
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