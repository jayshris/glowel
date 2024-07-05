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
                  <h4 class="page-title">Invoices</h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('sales') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                    <!-- <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /Page Header -->

            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('invoices'); ?>">
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
                          <option value="1">Ready for Invoicing</option>
                          <option value="5">Ready for Delivery</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-7">
                      <button class="btn btn-info mt-4">Search</button>&nbsp;&nbsp;
                      <a href="./invoices" class="btn btn-warning mt-4">Reset</a>&nbsp;&nbsp; 
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

                <!--   List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="invoice-table">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Action</th>
                        <th>Order No</th>
                        <th>Order Date</th> 
                        <th>Customer Name</th>  
                        <th>Invoice No</th>
                        <th>Order Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($orders)){ ?>
                            <?php
                            $i = 1;
                            foreach ($orders as $pc) { ?>
                                <tr>
                                <td><?= $i++; ?>.</td>
                                <td>
                                    <a href="<?= base_url('invoices/create/' . $pc['id']) ?>" class="btn btn-info btn-sm <?php if($pc['invoice_no'] >1){ ?> disabled<?php }?>" title="Generate  Invoice" role="button"><i class="ti ti-brand-airtable"></i></a> 
                                </td>
                                <td><?= $pc['order_no'] ?></td>
                                <td><?= date('d M Y H:i:s', strtotime($pc['added_date'])) ?></td>
                                <td><?= ($pc['customer_name']) ? $pc['customer_name'] : '-'; ?></td>
                                <td><?= ($pc['invoice_no']) ? $pc['invoice_no'] : '-'; ?></td> 
                                <td>
                                    <?php if ($pc['status']) {
                                    echo '<span class="badge badge-pill bg-success">'.PURCHASE_STATUS_DETAILS[$pc['status']].'</span>';
                                    };
                                    ?>
                                </td> 
                                </tr>
                            <?php } ?>
                        <?php }else{ ?>
                            <tr><td colspan="7"> <center>No records found!!!</center></td></tr>
                        <?php }?>    
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
 
    <script>
    if ($('#invoice-table').length > 0) {
        $('#invoice-table').DataTable({
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