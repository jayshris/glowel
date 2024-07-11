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
        .txt-align-center{
            text-align: center;
        }
        .headp{
            padding-top: 50px;
        }
        .print-img{
          width: 100px;
            /* position: absolute; */
            /* right: 168px; */
            
            /* z-index: 1;
            top: -21px; */
        }
        .print-card .background-unset{
            background-color: unset !important;
        }
        .print-card{
            margin-bottom: 20px;
        }
    </style>
</head> 

<body>

  <!-- Main Wrapper -->
  <div class="main-wrapper">

    <?php //echo $this->include('partials/menu'); ?>

    <!-- Page Wrapper -->
    <div style="margin:3%">
      <div class="content">

        <div class="row">
          <div class="col-md-12">
            
            <!-- <div class="print-card">
              <div class="row">
                  <div class="col-sm-8" > aaa 
                  </div>
                  <div class="col-sm-4">
                    cccc
                  </div>
              </div>
            </div> -->

            <!-- Page Header -->
            <div class="page-header">
              <div class="row txt-align-center">
                <div class="col-sm-8 col-md-8 headp" >
                    <h1 class="page-title">INDENT FORM - INVENTORY OUTWARD</h1>
                </div>
                <div class="col-sm-4 col-md-4">
                    <img src="<?= base_url('public/assets/img/print_invoice_logo.png') ?>" class="print-img" />
                </div>
              </div>
            </div>
            <!-- /Page Header -->

            <div class="print-card">
              <div class="card-body background-unset">
                <h4>Indent Details</h4>
                <hr>
                <table class="table table-borderless table-striped">
                  <tr>
                    <th width="15%">Indent Number</th>
                    <td><?= $order_details['order_no'] ?></td>
                  </tr>
                  <tr>
                    <th width="15%">Party Name</th>
                    <td><?= $order_details['customer_name'] ?></td>
                  </tr>
                  <tr>
                    <th width="15%">Address</th>
                    <td><?= $order_details['business_address'] ?></td>
                  </tr>
                  <tr>
                    <th width="15%">Contact Number</th>
                    <td><?= $order_details['primary_phone'] ?></td>
                  </tr>
                  <tr>
                    <th width="15%">Indent Date</th>
                    <td><?= date('d-m-Y H:i:s', strtotime($order_details['added_date'])) ?></td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="print-card">
              <div class="card-body background-unset">
                <h4>Added Products</h4>
                <hr>
                <!-- Added Product List -->
                <div class="table-responsive custom-table" style="max-height: 500px;">

                  <table class="table table-borderless table-hover" id="AddedProducts">
                    <thead>
                      <tr>
                        <th width="10%">#</th>
                        <th width="15%">Image</th>
                        <th width="20%">Product Name</th> 
                        <th width="15%">Quantity</th> 
                        <th width="15%">Unit</th> 
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;$total_quantity = 0;
                      foreach ($added_products as $ap) { $total_quantity += $ap['quantity']; ?>
                        <tr>
                          <td><?= $i++ ?>.</td>
                          <td><a href="<?= base_url('public/uploads/products/') . $ap['product_image_1'] ?>" target="_blank"><img src="<?= base_url('public/uploads/products/') . $ap['product_image_1'] ?>" style="height: 60px;"></a> </td>
                          <td><?= $ap['product_name'] ?></td> 
                          <td><?= $ap['quantity'] ?></td>
                          <td><?= $ap['unit'] ?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <?php 
                        foreach ($total_quantity_per_units as $k => $val) { ?>
                      <tr>
                        <th></th>
                        <th><?php if($k == 0) { ?><b>Total Quantity:</b> <?php } ?></th>
                        <th><b><?= $val['product_name']?>:</b></th> 
                        <td colspan="2"><b><?= $val['sop_quantity'].' quantity for '.$val['unit'].' unit' ?></b></td> 
                      </tr>
                      <?php } ?>
                    </tfoot>
                  </table>

                </div>
                <!-- /Added Product List -->

              </div>
            </div>
 
            <div class="print-card">
              <div class="card-body background-unset">
                <div class="status-toggle"> 
                    <input class="form-check-input" type="checkbox" name="terms" id="terms" value="terms">
                    <label for="terms" class="col-form-label" style=" margin: 0px 20px 0px 3px;"> 
                    Terms & conditions
                    </label>
                </div>
              </div>
            </div>

            <div class="print-card">
              <div class="card-body row">
                  <div class="col-md-8" >  
                  </div>
                  <div class="col-md-4">
                    <?php if(!empty($emp_details['digital_sign'])) { ?>
                      <img src="<?= base_url('public/assets/img/'.$emp_details['digital_sign']) ?>"  />
                    <?php }?>
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
 
</body>

</html>