<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>
  <style>.error{color: red;}</style>
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
                  <h4 class="page-title">
                  <?php echo (isset($invoice_details['id']) && ($invoice_details['id']>0)) ? 'Edit Invoice': 'Generate Invoice';?>
                  </h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('sales-invoices-verifivation') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Page Header -->
 
            <?php
            $session = \Config\Services::session();

            if ($session->getFlashdata('success')) {
              echo '<div class="alert alert-success">' . $session->getFlashdata("success") . '</div>';
            }

            if ($session->getFlashdata('danger')) {
              echo '<div class="alert alert-danger">' . $session->getFlashdata("danger") . '</div>';
            }
            ?> 

            <?= $this->include('partials/page-title') ?> 
            <?php $validation = \Config\Services::validation();
             $order_number = $last_order ? 'I/' . date('m/y/') .  ($last_order['id'] + 1) : 'I/' . date('m/y/1');
            ?> 
            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <h4>Invoice Details</h4>
                    <hr>
                    <div class="settings-form">  
                      <form method="post" enctype="multipart/form-data" id="invoices_form" action="<?php echo base_url('sales-invoices-verifivation/edit/'.$sales_order_id.''); ?>">
                      <input type="hidden" name="for_verification" id="for_verification" value=""/>
                        <div class="row g-3"> 
                            <div class="col-md-6">
                              <label class="col-form-label">Customer Name<span class="text-danger">*</span></label> 
                              <input type="hidden" name="invoice_no" id="invoice_no" value="<?= $order_number ?>" class="form-control">
                              <input type="hidden" name="id" id="sales_invoice_id" value="<?= isset($invoice_details['id']) ? $invoice_details['id'] : '';?>" class="form-control">
                              <div> 
                              <input type="hidden" id="selected_customer" value="<?php echo isset($selected_customer) ? $selected_customer :''; ?>"/> 

                              <select class="customer_name form-control" required id="customer_name" name="customer_name" onchange="getCustomerAddr()">
                                <?php if(!empty($customers)){ ?>
                                  <?php foreach($customers as $key => $c){ ?>
                                    <option value="<?php echo $c;?>" pid="<?= $key;?>"><?php echo $c;?></option>
                                  <?php }?>
                                <?php } ?>
                              </select>
                              </div>
                              <?php
                                if($validation->getError('customer_name'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('customer_name').'</div>';
                                }
                                ?>
                            </div>   
                            <div class="col-md-6">
                              <label class="col-form-label">Delivery Address<span class="text-danger">*</span></label> 
                              <textarea name="delivery_address" required id="delivery_address" class="form-control resize-none" maxlength="100"><?= isset($invoice_details['delivery_address']) ? $invoice_details['delivery_address'] : '';?>
                              </textarea> 
                              <?php
                                if($validation->getError('delivery_address'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('delivery_address').'</div>';
                                }
                                ?>
                            </div>

                            <div class="col-md-12"></div> 

                            <div class="col-md-6">
                              <label class="col-form-label">Invoice Doc<span class="text-danger">*</span></label><br>
                              <?php if(isset($invoice_details['invoice_doc']) && !empty($invoice_details['invoice_doc'])) { ?>
                              <img src="<?= base_url('public/uploads/SalesInvoices/') . $invoice_details['invoice_doc'] ?>" style="height: 150px;">
                              <?php } ?>
                              <input type="file"  name="invoice_doc" <?= isset($invoice_details['invoice_doc']) ? '' :'required ';?> class="form-control">
                              <?php
                              if ($validation->getError('invoice_doc')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('invoice_doc') . '</span>';
                              }
                              ?>
                            </div>

                            <div class="col-md-6">
                              <label class="col-form-label">Packing List Doc</label><br>
                              <?php if(isset($invoice_details['packing_list_doc']) && !empty($invoice_details['packing_list_doc'])) { ?>
                              <img src="<?= base_url('public/uploads/SalesInvoices/') . $invoice_details['packing_list_doc'] ?>" style="height: 150px;">
                              <?php } ?>
                              <input type="file"  name="packing_list_doc"  class="form-control">
                              <?php
                              if ($validation->getError('packing_list_doc')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('packing_list_doc') . '</span>';
                              }
                              ?>
                            </div>

                            <div class="col-md-6">
                              <label class="col-form-label">E-Way Bill Doc </label><br>
                              <?php if(isset($invoice_details['e_way_bill_doc']) && !empty($invoice_details['e_way_bill_doc'])) { ?>
                              <img src="<?= base_url('public/uploads/SalesInvoices/') . $invoice_details['e_way_bill_doc'] ?>" style="height: 150px;">
                              <?php } ?>
                              <input type="file"  name="e_way_bill_doc"  class="form-control">
                              <?php
                              if ($validation->getError('e_way_bill_doc')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('e_way_bill_doc') . '</span>';
                              }
                              ?>
                            </div>

                            <div class="col-md-6">
                              <label class="col-form-label">Other Doc</label><br>
                              <?php if(isset($invoice_details['other_doc']) && !empty($invoice_details['other_doc'])) { ?>
                              <img src="<?= base_url('public/uploads/SalesInvoices/') . $invoice_details['other_doc'] ?>" style="height: 150px;">
                              <?php } ?>
                              <input type="file" name="other_doc"  class="form-control">
                              <?php
                              if ($validation->getError('other_doc')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('other_doc') . '</span>';
                              }
                              ?>
                            </div>

                          </div>  
                      </form>

                    </div>
                  </div>
                </div>
                <!-- /Settings Info -->

              </div>
            </div>

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

            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('sales/add-products/' . $token); ?>">
              <input type="hidden" name="sales_invoice_verification_form" value="1"/>  
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
                      <a href="<?php echo base_url('/sales-invoices-verifivation'); ?>" class="btn btn-warning mt-4">Reset</a>&nbsp;&nbsp;
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
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /Added Product List -->
              </div>
            </div>

            <div class="card main-card"> 
              <div class="card-body">
                <button type="submit" id="submit" class="btn btn-primary">Save</button>
                <button type="submit" id="submit" onclick="confirmcForm()" class="btn btn-success">Save & Final</button>
                <a href="<?php echo base_url('/sales-invoices-verifivation'); ?>" class="btn btn-light">Back</a>
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
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

  <script>
    $(document).ready(function() {
        $("#customer_name").select2({
        tags: true
        });   
        if($('#sales_invoice_id').val() > 0){
          $("#customer_name").val($('#selected_customer').val()).trigger('change');
        }else{
          $("#customer_name").val($("#customer_name option:first").val()).trigger('change'); 
        } 
    });   
    function getCustomerAddr(){ 
        var customer_name = $('#customer_name option:selected').attr('pid'); 
        // alert(customer_name);
        if(!customer_name){
            return false;
        }
        $.ajax({
            method: "POST",
            url: '<?php echo base_url('SalesInvoices/getPartyAddress') ?>',
            data: {
                id: customer_name
            },
            success: function(response) {   
                $('#delivery_address').val(response);
            }
        });

    }
    function confirmcForm() {  
          if(confirm("Do you want to save?")){ 
            $('#for_verification').val(1);
            $('#invoices_form').submit();
          }else{   
            window.location.replace("<?= base_url('sales-invoices-verifivation') ?>");
          } 
      }
    $("#submit").click(function(){
      $('#invoices_form').submit();
    });  
   </script>   
   
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
          $('#card_' + index).css('background-color', '#ffd2cb');

        } else {
          $('#qty_' + index).val('');
          $('#qty_' + index).attr('readonly', 'readonly');
          $('#card_' + index).css('background-color', '#efefef');
        }
      }

      $.confirm = function() {
        $.ajax({
          type: "GET",
          url: "<?= base_url('sales/getOrderProducts/' . $token ) ?>",
          success: function(status) {
            if(status>0){
                if (confirm("Do you want to proceed?")) {
                  window.location.replace("<?= base_url('sales/sales-checkout/'. $token) ?>");   
                }
              }else{
              alert('Please select category and add products.');
            }
          }
        });
      }
    </script>
</body>

</html>