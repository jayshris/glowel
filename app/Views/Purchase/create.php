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
            $order_number = $last_order ? 'PO/' . date('m/y/') .  ($last_order['id'] + 1) : 'PO/' . date('m/y/1');
            ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">
                   

                      <form method="post" enctype="multipart/form-data" action="<?php echo base_url('purchase/create'); ?>">

                        <div class="settings-sub-header">
                          <h6>Add Purchase Order</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row g-3">

                            <div class="col-md-3">
                              <label class="col-form-label">Order Number <span class="text-danger">*</span></label>
                              <input type="text" required readonly name="order_no" value="<?= $order_number ?>" class="form-control">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Customer Name</label>
                              <!-- <input type="text" required name="customer_name" class="form-control"> -->
                              
                              <select class="customer_name form-control" id="customer_name"  name="customer_name" >
                                <option value="">Not selected value</option>
                                <!-- <option value=""></option> -->
                                <?php if(!empty($customers)){ ?>
                                  <?php foreach($customers as $key => $c){ ?>
                                    <option <?php echo ($key == 0) ? 'selelected': '' ;?> value="<?php echo $c['party_name'];?>"><?php echo $c['party_name'];?></option>
                                  <?php }?>
                                <?php } ?>
                              </select>
                              <?php
                              if ($validation->getError('customer_name')) {
                                echo '<br><label class="text-danger mt-2">' . $validation->getError('customer_name') . '</label>';
                              }
                              ?>
                            </div>

                            <div class="col-md-2">
                              <label class="col-form-label">Order Date<span class="text-danger">*</span></label>
                              <input type="date" readonly required name="order_date" value="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d') ?>" class="form-control datepicker">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Branch<span class="text-danger">*</span></label> 
                              <select class="select"  required name="branch_id" >
                                <?php if(!empty($branches)){ ?>
                                  <?php foreach($branches as $key => $c){ ?>
                                    <option <?php echo ($key == 0) ? 'selected': '' ;?> value="<?php echo $c['id'];?>"><?php echo $c['name'];?></option>
                                  <?php }?>
                                <?php } ?>
                              </select>
                              <?php
                                if($validation->getError('branch_id'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('branch_id').'</div>';
                                }
                                ?>
                            </div>
                            
                          </div>
                          <br>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Proceed to Add Products</button>
                          <a href="./create" class="btn btn-warning">Reset</a>
                          <a href="<?php echo base_url('purchase'); ?>" class="btn btn-light">Back</a>
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
  


  <?= $this->include('partials/vendor-scripts')  ?>
  <script>
    $(document).ready(function() {
      var select2 =  $("#customer_name").select2({
      tags: true
      });
     
      $(document.body).on("change","#customer_name",function(){
          var regex = new RegExp("^[a-zA-Z0-9]+$");
          if (!regex.test(this.value)) {
            console.log(this.value);
            // $("#customer_name").val('');
            // $(".select2-selection__rendered").text('');
          }
      });

     
    });
     
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