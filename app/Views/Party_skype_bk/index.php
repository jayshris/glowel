<?php

use App\Models\PartyClassificationModel;
use App\Models\PartytypeModel;
?>

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
                <div class="row">
                  <div class="col-md-9">
                    <form method="post" action="<?php echo base_url() ?>party/searchByStatus">
                      <!-- Search -->
                      <div class="search-section">
                        <div class="row">
                          <div class="col-md-2 col-sm-3">
                            <label class="col-form-label">
                              Search By Status
                            </label>
                          </div>
                          <div class="col-md-3 col-sm-3">
                            <div class="form-wrap">
                              <select class="form-control" name="status">
                                <option>Select</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3">
                            <input type="submit" value="Submit" class="btn btn-primary">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-3">
                    <a href="<?php echo base_url(); ?>party/create" class="btn btn-dark " role="button">Add New Party</a>
                  </div>
                </div>
                <?php
                $session = \Config\Services::session();
                if ($session->getFlashdata('success')) {
                  echo '
                      <div class="alert alert-success">' . $session->getFlashdata("success") . '</div>
                      ';
                }
                ?>
                <!-- Contact List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="partyTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>Party Name</th>
                        <th>Contact Person</th>
                        <th>Phone</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($party_data) {
                        foreach ($party_data as $party) {
                          $pcustomertype = new PartytypeModel();
                          $pcustomertype = $pcustomertype->where('id', $party['id'])->findAll();


                          if (!$party['approved']) {
                            $status = '<span class="badge badge-pill bg-info">Not Approved</span>';
                          } else if ($party['status'] == '0') {
                            $status = '<span class="badge badge-pill bg-danger">Inactive</span>';
                          } else {
                            $status = '<span class="badge badge-pill bg-success">Active</span>';
                          }

                          if (!$party['approved']) {
                            $bun = '<a href="party/approve/' . $party['id'] . '" class="dropdown-item btn btn-info btn-sm" role="button">Approve</a>';
                          } else if ($party['status'] == '1') {
                            $bun = '<a href="party/status/' . $party['id'] . '" class="dropdown-item btn btn-danger btn-sm" role="button">Inactive</a>';
                          } else {
                            $bun = '<a href="party/status/' . $party['id'] . '" class="dropdown-item btn btn-success btn-sm" role="button">Active</a>';
                          }
                          echo '
                                <tr>
                                    <td>
                                      <div class="btn-group dropend my-1">
                                        <button type="button" class="btn btn-sm btn-outline-danger dropdown-toggle rounded-pill" data-bs-toggle="dropdown" aria-expanded="false">
                                          <i class="fa fa-cog" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu" style="">
                                          <li><a href="' . base_url() . 'party/edit/' . $party['id'] . '"  class="dropdown-item btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i> Edit</a></li>
                                          <li><button type="button" onclick="delete_data(' . $party["id"] . ')" class="dropdown-item btn btn-secondary btn-sm"><i class="ti ti-trash"></i> Delete</button></li>
                                          <li>' . $bun . '</li>
                                        </ul>
                                      </div>

                                    </td>
                                    
                                    <td>' . $party['party_name'] . '</td>
                                    <td>' . $party['contact_person'] . '</td>
                                    <td>' . $party['primary_phone'] . '</td>
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
        window.location.href = "<?php echo base_url(); ?>/party/delete/" + id;
      }
      return false;
    }


    // datatable init
    if ($('#partyTable').length > 0) {
      $('#partyTable').DataTable({
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