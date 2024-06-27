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
                  <h4 class="page-title">Sales Order - Add Products</h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('sales') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
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

                <div class="col-md-12 col-sm-12 mt-3">
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



            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('sales/add-products/' . $token); ?>">
              <div class="card main-card">
                <div class="card-body">
                  <h4>Search Products</h4>
                  <hr>
                  <div class="row mt-2">

                    <div class="col-md-2">
                      <div class="form-wrap">
                        <label class="col-form-label">Category</label>
                        <select class="form-select" id="category_id" aria-label="Default select example" onchange="$.getProducts();">
                          <option value="">Select Category</option>
                          <?php
                          foreach ($categories as $c) {
                            echo "<option value='" . $c['id'] . "'>" . $c['cat_name'] . "</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-7">
                      <a href="./<?= $token ?>" class="btn btn-warning mt-4">Reset</a>&nbsp;&nbsp;
                    </div>

                  </div>

                  <!-- Product List -->
                  <div class="table-responsive populate" style="max-height: 500px;">

                  </div>
                  <!-- /Product List -->




                </div>
              </div>
            </form>



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
                        <th width="15%">Rate</th>
                        <th width="15%">Order Quantity</th>
                        <th width="15%">Remove</th>
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
                          <td><?= $ap['rate'] ?></td>
                          <td><?= $ap['quantity'] ?></td>
                          <td><button class="btn btn-danger" onclick="$.delete(<?= $ap['sp_id'] ?>)"><i class="fa fa-trash"></i></button></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>

                </div>
                <!-- /Added Product List -->

              </div>
            </div>


            <button type="submit" class="btn btn-primary mt-4">Proceed To Checkout</button>


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
      $.getProducts = function() {
        var category_id = $('#category_id').val();
        console.log(category_id);

        if (category_id > 0) {
          $.ajax({
            type: "POST",
            url: "<?= base_url('sales/getProducts') ?>",
            data: {
              category_id: category_id
            },
            success: function(data) {
              $('.populate').html('');
              $('.populate').append(data);
            }
          })
        } else alert('please choose a category');

      }

      $.toggle = function(index) {

        if ($('#product_' + index).is(':checked')) {
          $('#qty_' + index).removeAttr('readonly');
          // $('#qty_' + index).css('background-color', '#fde0e0');
          $('#card_' + index).css('background-color', '#ffd2cb');

        } else {
          $('#qty_' + index).val('');
          $('#qty_' + index).attr('readonly', 'readonly');
          // $('#qty_' + index).css('background-color', '#ffffff');
          $('#card_' + index).css('background-color', '#efefef');
        }
      }

      $.delete = function(index) {
        if (confirm("Do you want to remove this product from order ?")) {
          window.location.replace("<?= base_url('sales/delete-product/' . $token . '/') ?>" + index);
        }
      }
    </script>
</body>

</html>