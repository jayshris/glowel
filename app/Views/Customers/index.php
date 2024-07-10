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
                  <h4 class="page-title">Customers</h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('customers') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Page Header -->

            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('customers'); ?>">
              <div class="card main-card">
                <div class="card-body">
                  <h4>Search / Filter</h4>
                  <hr>
                  <div class="row mt-2">

                    <!-- <div class="col-md-3">
                      <label class="col-form-label">Party Type</label>
                      <select class="form-select select2" name="party_type_id">
                        <option value="">Select Party Type</option>
                        <?php foreach ($party_types as $pt) {
                          echo '<option value="' . $pt['id'] . '" ' . (set_value('party_type_id') == $pt['id'] ? 'selected' : '') . '>' . $pt['name'] . '</option>';
                        } ?>
                      </select>
                    </div> -->

                    <div class="col-md-3">
                      <label class="col-form-label">Party</label>
                      <select class="form-select select2" name="party_id">
                        <option value="">Select Party</option>
                        <?php foreach ($parties as $party) {
                          echo '<option value="' . $party['id'] . '" ' . (set_value('party_id') == $party['id'] ? 'selected' : '') . '>' . $party['party_name'] . '</option>';
                        } ?>
                      </select>
                    </div>

                    <div class="col-md-2">
                      <div class="form-wrap">
                        <label class="col-form-label">Status</label>
                        <select class="form-select" name="status" aria-label="Default select example">
                          <option value="">Select Status</option>
                          <option value="1" <?= set_value('status') == 1 ? 'selected' : '' ?>>Active</option>
                          <option value="0" <?= set_value('status') == 0 ? 'selected' : '' ?>>Inactive</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <button class="btn btn-info mt-4">Search</button>&nbsp;&nbsp;
                      <a href="./customers" class="btn btn-warning mt-4">Reset</a>&nbsp;&nbsp;
                      <a href="<?= base_url('customers/create') ?>" class="btn btn-danger mt-4">Add New Customer</a>
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

                <!-- Product Type List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="customerTable">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>Customer Name</th>
                        <th>Phone</th>
                        <th>Added</th>
                        <th>Updated</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($customers as $c) { ?>
                        <tr>
                          <td><?= $i++; ?>.</td>
                          <td>
                            <a href="<?= base_url('customers/edit/' . $c['id']) ?>" class="btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i></a>

                            <!-- <button type="button" onclick="delete_data('<?= $c['id'] ?>')" class="btn btn-secondary btn-sm"> <i class="ti ti-trash"></i></button> -->
                          </td>
                          <td><?= $c['party_name'] ?></td>
                          <td><?= $c['phone'] ?></td>
                          <td><?= date('d M Y', strtotime($c['added_date'])) ?></td>
                          <td><?= $c['modify_date'] != '' ? date('d M Y', strtotime($c['modify_date'])) : '' ?></td>
                          <td>
                            <?php if ($c['status']) {
                              echo '<span class="badge badge-pill bg-success">Active</span>';
                            } else echo '<span class="badge badge-pill bg-danger">Inactive</span>';
                            ?>
                          </td>
                        </tr>
                      <?php } ?>
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
                <!-- /Product Type List -->

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
      // function delete_data(id) {
      //   if (confirm("Are you sure you want to remove this product ?")) {
      //     window.location.href = "<?php echo base_url('warehouses-delete/'); ?>" + id;
      //   }
      //   return false;
      // }


      // datatable init
      if ($('#customerTable').length > 0) {
        $('#customerTable').DataTable({
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