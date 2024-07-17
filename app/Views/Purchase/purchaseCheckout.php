<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>
  <style>
        @media print {
           .noprint {
              visibility: hidden;
           }
           .hide-td{
            display: none;
           }
        }
    </style>
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
                  <h4 class="page-title">Purchase Order For Checkout</h4>
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
                        <!-- <th width="15%">Remove</th> -->
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
                          <!-- <td><button class="btn btn-danger" onclick="$.delete(<?= $ap['sp_id'] ?>)"><i class="fa fa-trash"></i></button></td> -->
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>

                </div>
                <!-- /Added Product List -->

              </div>
            </div>

            <div class="submit-button">            
              <button type="button" class="btn btn-primary noprint" onclick="$.confirm()">Proceed To Checkout</button>
              <a href="<?php echo base_url('purchase/add-products/' . $order_details['id']); ?>" class="btn btn-light noprint">Back</a>
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

      $.delete = function(index) {
        if (confirm("Do you want to remove this product from order ?")) {
          window.location.replace("<?= base_url('purchase/delete-product/' . $token . '/') ?>" + index);
        }
      }
      
      $.confirm = function() {
        var isConfirm = 0;
        if(confirm("Do you want to print & send for invoice?")){
          if(confirm("Do you want to print & send for invoice?")){
              // window.print(); 
              print_data(<?= $token ?>);
              $.ajax({
                  type: "GET",
                  url: "<?= base_url('purchase/sendToInvoice/' . $token ) ?>",
                  success: function(status) {
                      // console.log(status);
                      if(status>0){
                      window.location.replace("<?= base_url('purchase') ?>");
                      }else{
                      alert('Something is wrong, please try again!!!');
                      }
                  }
              });
              isConfirm=1;
          } 
        }
        if(isConfirm==0){
          window.location.replace("<?= base_url('purchase/add-products/' . $token) ?>");
        }  
      }

      function print_data(id){
        var url = "<?php echo base_url('purchase/purchase-checkout-print/'); ?>" + id;  

        var printWindow = window.open( url, 'Print', 'left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
        printWindow.addEventListener('load', function(){
            printWindow.print();
            printWindow.close();
        }, true);
            
      }
    </script>
</body>

</html>