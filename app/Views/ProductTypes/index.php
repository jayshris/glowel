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
                  <h4 class="page-title">Product Types</h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('product-types') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Page Header -->

            <div class="card main-card">
              <div class="card-body">

                <!-- Search -->
                <div class="search-section">
                  <div class="row">
                    <div class="col-md-9 col-sm-4">
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
                    <div class="col-md-3 col-sm-8">
                      <div class="export-list text-sm-end">
                        <ul>
                          <li>
                            <a href="<?= base_url('product-types/create') ?>" class="btn btn-primary"><i class="ti ti-square-rounded-plus"></i>Add Product Type</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Search -->

                <!-- Product Type List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="productTypes">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>Type Name</th>
                        <th>Added</th>
                        <th>Updated</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($product_types as $pt) { ?>
                        <tr>
                          <td><?= $i++; ?>.</td>
                          <td>
                            <a href="<?= base_url('product-types/edit/' . $pt['id']) ?>" class="btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i></a>

                            <button type="button" onclick="delete_data('<?= $pt['id'] ?>')" class="btn btn-secondary btn-sm"> <i class="ti ti-trash"></i></button>

                          </td>
                          <td><?= $pt['type_name'] ?></td>
                          <td><?= date('d M Y', strtotime($pt['added_date'])) ?></td>
                          <td><?= $pt['modified_date'] != '' ? date('d M Y', strtotime($pt['modified_date'])) : '' ?></td>
                          <td>
                            <?php if ($pt['status']) {
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
    </div>
    <!-- /Page Wrapper -->


  </div>
  <!-- /Main Wrapper -->

  <!-- scripts link  -->
  <?= $this->include('partials/vendor-scripts') ?>

  <!-- page specific scripts  -->
  <script>
    function delete_data(id) {
      if (confirm("Are you sure you want to remove this product-type?")) {
        window.location.href = "<?php echo base_url('product-types-delete/'); ?>" + id;
      }
      return false;
    }


    // datatable init
    if ($('#productTypes').length > 0) {
      $('#productTypes').DataTable({
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