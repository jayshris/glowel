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
                  <h4 class="page-title">Purchase Order</h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('purchase') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Page Header -->

            <div class="card main-card">
              <div class="card-body">
                <h4>Order Details</h4>
                <hr>
                <table class="table table-borderless table-striped">
                  <tr>
                    <th width="15%">Order Number</th>
                    <td><?= $order_details['order_no'] ?></td>
                  </tr>
                  <tr>
                    <th width="15%">Customer</th>
                    <td><?= $order_details['customer_name'] ?></td>

                  </tr>
                  <tr>
                    <th width="15%">Order Date</th>
                    <td><?= date('d-m-Y', strtotime($order_details['added_date'])) ?></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="card main-card">
              <div class="card-body">
                <h4>Added Products</h4>
                <hr>
                <!-- Added Product List -->
                <div class="table-responsive custom-table" style="max-height: 500px;">

                  <table class="table table-borderless table-hover" id="AddedProducts">
                    <thead>
                      <tr>
                        <th width="10%">#</th>
                        <th width="15%">Thumbnail</th>
                        <th width="20%">Product Name</th>
                        <th width="15%" class="hide-td">Rate</th>
                        <th width="15%">Order Quantity</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      foreach ($added_products as $ap) { ?>
                        <tr>
                          <td><?= $i++ ?>.</td>
                          <td><a href="<?= base_url('public/uploads/products/') . $ap['product_image_1'] ?>" target="_blank"><img src="<?= base_url('public/uploads/products/') . $ap['product_image_1'] ?>" style="height: 60px;"></a> </td>
                          <td><?= $ap['product_name'] ?></td>
                          <td class="hide-td"><?= $ap['rate'] ?></td>
                          <td><?= $ap['quantity'] ?></td> 
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>

                </div>
                <!-- /Added Product List -->

              </div>
            </div>

            <div class="submit-button">             
              <a href="<?php echo base_url('purchase/index'); ?>" class="btn btn-light noprint">Back</a>
            </div>
          </div>

        </div>
      </div>
      <!-- /Page Wrapper --> 

    </div>
    <!-- /Main Wrapper -->

    <!-- scripts link  -->
    <?= $this->include('partials/vendor-scripts') ?> 
</body>

</html>