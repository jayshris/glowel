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
            <?= $this->include('partials/page-title') ?> 
            <?php $validation = \Config\Services::validation();
             $order_number = $last_order ? 'I/' . date('m/y/') .  ($last_order['id'] + 1) : 'I/' . date('m/y/1');
            ?> 
            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">  
                      <form method="post" enctype="multipart/form-data" id="invoices_form" action="<?php echo base_url('purchase-invoices/save/'.$sale_order_id.''); ?>">
                        <div class="settings-sub-header">
                          <h6>
                             <?php echo (isset($invoice_details['id']) && ($invoice_details['id']>0)) ? 'Edit Invoice': 'Generate Invoice';?>
                             </h6>
                        </div>
                        <div class="profile-details">
                          <div class="row g-3"> 
                            <div class="col-md-6">
                              <label class="col-form-label">Customer Name<span class="text-danger">*</span></label> 
                              <input type="hidden" name="invoice_no" id="invoice_no" value="<?= $order_number ?>" class="form-control">
                              <input type="hidden" name="id" id="purchase_invoice_id" value="<?= isset($invoice_details['id']) ? $invoice_details['id'] : '';?>" class="form-control">
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
                              <textarea name="delivery_address" required id="delivery_address" class="form-control resize-none" maxlength="100">
                                <?= isset($invoice_details['delivery_address']) ? $invoice_details['delivery_address'] : '';?>
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
                              <label class="col-form-label">Original Invoice Doc<span class="text-danger">*</span></label><br>
                              <?php if(isset($invoice_details['invoice_doc']) && !empty($invoice_details['invoice_doc'])) { ?>
                              <img src="<?= base_url('public/uploads/PurchaseInvoices/') . $invoice_details['invoice_doc'] ?>" style="height: 150px;">
                              <?php } ?> 
                              <input type="file"  name="invoice_doc" <?= isset($invoice_details['invoice_doc']) ? '' :'required ';?> class="form-control">
                              <?php
                              if ($validation->getError('invoice_doc')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('invoice_doc') . '</span>';
                              }
                              ?>
                            </div>

                            <div class="col-md-6">
                              <label class="col-form-label">Tally Invoice Doc<span class="text-danger">*</span> </label><br>
                              <?php if(isset($invoice_details['tally_invoice_doc']) && !empty($invoice_details['tally_invoice_doc'])) { ?>
                              <img src="<?= base_url('public/uploads/PurchaseInvoices/') . $invoice_details['tally_invoice_doc'] ?>" style="height: 150px;">
                              <?php } ?>
                              <input type="file"  name="tally_invoice_doc" <?= isset($invoice_details['tally_invoice_doc']) ? '' : 'required';?>  class="form-control">
                              <?php
                              if ($validation->getError('tally_invoice_doc')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('tally_invoice_doc') . '</span>';
                              }
                              ?>
                            </div>

                            <div class="col-md-6">
                              <label class="col-form-label">Original Packing List Doc</label><br>
                              <?php if(isset($invoice_details['packing_list_doc']) && !empty($invoice_details['packing_list_doc'])) { ?>
                              <img src="<?= base_url('public/uploads/PurchaseInvoices/') . $invoice_details['packing_list_doc'] ?>" style="height: 150px;">
                              <?php } ?>
                              <input type="file"  name="packing_list_doc" class="form-control">
                              <?php
                              if ($validation->getError('packing_list_doc')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('packing_list_doc') . '</span>';
                              }
                              ?>
                            </div> 

                            <div class="col-md-6">
                              <label class="col-form-label">Tally Packing List Doc</label><br>
                              <?php if(isset($invoice_details['tally_packing_list_doc']) && !empty($invoice_details['tally_packing_list_doc'])) { ?>
                              <img src="<?= base_url('public/uploads/PurchaseInvoices/') . $invoice_details['tally_packing_list_doc'] ?>" style="height: 150px;">
                              <?php } ?>
                              <input type="file"  name="tally_packing_list_doc" class="form-control">
                              <?php
                              if ($validation->getError('tally_packing_list_doc')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('tally_packing_list_doc') . '</span>';
                              }
                              ?>
                            </div> 

                            <div class="col-md-6">
                              <label class="col-form-label">Other Doc 1</label><br>
                              <?php if(isset($invoice_details['other_doc']) && !empty($invoice_details['other_doc'])) { ?>
                              <img src="<?= base_url('public/uploads/PurchaseInvoices/') . $invoice_details['other_doc'] ?>" style="height: 150px;">
                              <?php } ?>
                              <input type="file" name="other_doc"  class="form-control">
                              <?php
                              if ($validation->getError('other_doc')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('other_doc') . '</span>';
                              }
                              ?>
                            </div>

                            <div class="col-md-6">
                              <label class="col-form-label">Other Doc 2</label><br>
                              <?php if(isset($invoice_details['other_doc_2']) && !empty($invoice_details['other_doc_2'])) { ?>
                              <img src="<?= base_url('public/uploads/PurchaseInvoices/') . $invoice_details['other_doc_2'] ?>" style="height: 150px;">
                              <?php } ?>
                              <input type="file" name="other_doc_2"  class="form-control">
                              <?php
                              if ($validation->getError('other_doc_2')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('other_doc_2') . '</span>';
                              }
                              ?>
                            </div>

                          </div>
                          <br>
                        </div>
                        <div class="submit-button">
                          <input type="hidden" name="for_verification" id="for_verification" value=""/>
                         <button type="submit" id="submit" class="btn btn-primary">Save</button>
                          <button type="submit" id="submit" onclick="confirmcForm()" class="btn btn-success">Save & Final</button>
                          <a href="<?php echo base_url('/purchase-invoices'); ?>" class="btn btn-light">Back</a>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
                <!-- /Settings Info -->

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
        if($('#purchase_invoice_id').val() > 0){
          $("#customer_name").val($('#selected_customer').val()).trigger('change');
        }else{
          $("#customer_name").val($("#customer_name option:first").val()).trigger('change'); 
        }
        // $("#invoices_form").validate({
        //     rules: {
        //         customer_name: "required",
        //         delivery_address: "required",
        //         // invoice_doc:"required",
        //         // packing_list_doc:"required",
        //         // e_way_bill_doc:"required"
        //     },
        //     messages: {
        //         customer_name: "Please enter customer name",
        //         delivery_address: "Please enter delivery address "
    
        //     },
        // submitHandler : function(form) {
        //         $(this).submit();
        //         alert('submit');
        // }
        // });
    });   
    function getCustomerAddr(){ 
        var customer_name = $('#customer_name option:selected').attr('pid'); 
        // alert(customer_name);
        if(!customer_name){
            return false;
        }
        $.ajax({
            method: "POST",
            url: '<?php echo base_url('PurchaseInvoices/getPartyAddress') ?>',
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
              $.ajax({
                  type: "GET",
                  url: "<?= base_url('PurchaseInvoices/changeStatus/' . $sale_order_id ) ?>",
                  success: function(status) {
                      // console.log(status);
                      if(status>0){
                      window.location.replace("<?= base_url('purchase-invoices') ?>");
                      }else{
                      alert('Something is wrong, please try again!!!');
                      }
                  }
              });
          } 
      }

   </script>                              
</body>

</html>