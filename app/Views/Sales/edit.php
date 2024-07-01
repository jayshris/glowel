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

            <?= $this->include('partials/page-title') ?>

            <?php
            $validation = \Config\Services::validation();
            $order_number = $last_order ? 'SO/' . date('m/y/') .  ($last_order['id'] + 1) : 'SO/' . date('m/y/1');
            ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">
                   

                      <form method="post" enctype="multipart/form-data" action="<?php echo base_url('sales/edit/'. $order_details['id']); ?>">

                        <div class="settings-sub-header">
                          <h6>Add Sales Order</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row g-3">

                            <div class="col-md-3">
                              <label class="col-form-label">Order Number <span class="text-danger">*</span></label>
                              <input type="text" required readonly name="order_no" value="<?= $order_details['order_no'] ?>" class="form-control">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Customer Name <span class="text-danger">*</span></label>
                              <!-- <input type="text" required name="customer_name" class="form-control"> -->
                              <select class="customer_name form-control" id="customer_name" required name="customer_name" >
                                <?php if(!empty($customers)){ ?>
                                  <?php foreach($customers as $key => $c){ ?>
                                    <option value="<?php echo $c;?>"><?php echo $c;?></option>
                                  <?php }?>
                                <?php } ?>
                              </select>
                            </div>

                            <div class="col-md-2">
                              <label class="col-form-label">Order Date<span class="text-danger">*</span></label>
                              <input type="date" required name="order_date" value="<?= date('Y-m-d',strtotime($order_details['added_date'])) ?>" min="<?= date('Y-m-d') ?>" class="form-control datepicker">
                            </div>

                          </div>
                          <br>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Proceed to Add Products</button>
                          <a href="./<?= $order_details['id'];?>" class="btn btn-warning">Reset</a>
                          <a href="<?php echo base_url('sales'); ?>" class="btn btn-light">Back</a>
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
  
<input type="hidden" id="selected_customer" value="<?php echo $selected_customer; ?>"/> 

  <?= $this->include('partials/vendor-scripts')  ?>
  <script>
    $(document).ready(function() {
        $("#customer_name").select2({
        tags: true
        });
       
    }); 
    $("#customer_name").val($('#selected_customer').val()).trigger('change');

    $.getCategory = function() {

      var type_id = $('#product_type').val();
      console.log(type_id);

      $.ajax({
        method: "POST",
        url: '<?php echo base_url('products/getCategory') ?>',
        data: {
          type_id: type_id
        },
        success: function(response) {

          console.log(response);
          $('#product_category').html(response);
        }
      });

    }
  </script>

</body>

</html>