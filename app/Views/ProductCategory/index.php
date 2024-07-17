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
                  <h4 class="page-title">Product Categories</h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('product-categories') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Page Header -->

            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('product-categories'); ?>">
              <div class="card main-card">
                <div class="card-body">
                  <h4>Search / Filter</h4>
                  <hr>
                  <div class="row mt-2">

                    <!-- <div class="col-md-3">
                      <label class="col-form-label">Product Type</label>
                      <select class="form-select" name="product_type" aria-label="Default select example">
                        <option value="">Select Type</option>
                        <?php 
                        // foreach ($product_types as $p) {
                        //   echo '<option value="' . $p['id'] . '" ' . (set_value('product_type') == $p['id'] ? 'selected' : '') . '>' . $p['type_name'] . '</option>';
                        // } 
                        ?>
                      </select>
                    </div> -->

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

                    <!-- <div class="col-md-7">
                      <button class="btn btn-info mt-4">Search</button>&nbsp;&nbsp;
                      <a href="./product-categories" class="btn btn-warning mt-4">Reset</a>&nbsp;&nbsp;
                      <a href="<?= base_url('product-categories/create') ?>" class="btn btn-danger mt-4"><i class="ti ti-square-rounded-plus"></i>Add New Category</a>
                    </div> -->

                    <div class="col-md-1">
                      <button class="btn btn-info mt-4">Search</button>&nbsp;&nbsp;      
                    </div>
                    <div class="col-md-1 ">
                      <a href="./product-categories" class="btn btn-warning mt-4">Reset</a>&nbsp;&nbsp;
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
                    <div class="col-md-12 col-sm-12">
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
                    <!-- <div class="col-md-3 col-sm-8">
                      <div class="export-list text-sm-end">
                        <ul>
                          <li>
                            <a href="<?= base_url('product-categories/create') ?>" class="btn btn-primary"><i class="ti ti-square-rounded-plus"></i>Add New Category</a>
                          </li>
                        </ul>
                      </div>
                    </div> -->
                  </div>
                </div>
                <!-- /Search -->

                <!-- Product Type List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="ProductCategory">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>Thumbnail</th>
                        <th>Category Name</th>
                        <th>Abbreviation</th>
                        <!-- <th>Type Name</th> -->
                        <th>Added</th>
                        <th>Updated</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($product_categories as $pc) { ?>
                        <tr>
                          <td><?= $i++; ?>.</td>
                          <td>
                          <?php echo makeListActions($currentController, $Action, $pc['id'], 2);?>
                            <!-- <a href="<?= base_url('product-categories/edit/' . $pc['id']) ?>" class="btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i></a>
                            <button type="button" onclick="delete_data('<?= $pc['id'] ?>')" class="btn btn-secondary btn-sm"> <i class="ti ti-trash"></i></button> -->
                          </td>
                          <td><a href="<?= base_url('public/uploads/product_categories/') . $pc['cat_image'] ?>" target="_blank"><img src="<?= base_url('public/uploads/product_categories/') . $pc['cat_image'] ?>" style="height: 60px;"></a> </td>
                          <td><?= $pc['cat_name'] ?></td>
                          <td><?= $pc['cat_abbreviation'] ?></td>
                          <!-- <td><?php //echo $pc['type_name'] ?></td> -->
                          <td><?= date('d M Y', strtotime($pc['added_date'])) ?></td>
                          <td><?= $pc['modify_date'] != '' ? date('d M Y', strtotime($pc['modify_date'])) : '' ?></td>
                          <td>
                            <?php if ($pc['status']) {
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
      if (confirm("Are you sure you want to remove this product category ?")) {
        window.location.href = "<?php echo base_url('product-categories-delete/'); ?>" + id;
      }
      return false;
    }


    // datatable init
    if ($('#ProductCategory').length > 0) {
      $('#ProductCategory').DataTable({
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
          } 
        },
        initComplete: (settings, json) => {
          $('.dataTables_paginate').appendTo('.datatable-paginate');
          $('.dataTables_length').appendTo('.datatable-length');
        },
          "aoColumnDefs": [
              { "bSortable": false, "aTargets": [ 1,2,7 ] } 
          ]
      });
    }
  </script>
</body>

</html>