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
                   

                      <form method="post" enctype="multipart/form-data" action="<?php echo base_url('purchase/edit/'. $order_details['id']); ?>">

                        <div class="settings-sub-header">
                          <h6>Edit Purchase Order</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row g-3">

                            <div class="col-md-3">
                              <label class="col-form-label">Order Number <span class="text-danger">*</span></label>
                              <input type="text" required readonly name="order_no" value="<?= $order_details['order_no'] ?>" class="form-control">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Customer Name</label>
                              <!-- <input type="text" required name="customer_name" class="form-control"> -->
                              <select class="customer_name form-control" id="customer_name" name="customer_name" >
                              <option value="">Not selected value</option>
                                <?php if(!empty($customers)){ ?>
                                  <?php foreach($customers as $key => $c){ ?>
                                    <option value="<?php echo $c;?>"><?php echo $c;?></option>
                                  <?php }?>
                                <?php } ?>
                              </select>
                              <?php
                              if ($validation->getError('customer_name')) {
                                echo '<br><label class="text-danger mt-2">' . $validation->getError('customer_name') . '</label>';
                              }
                              ?>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Order Date<span class="text-danger">*</span></label>
                              <input type="date" required name="order_date" value="<?= date('Y-m-d',strtotime($order_details['added_date'])) ?>" readonly class="form-control datepicker">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Branch<span class="text-danger">*</span></label> 
                              <select class="select"  required name="branch_id"  <?= $order_details['branch_id']?>>
                                <?php if(!empty($branches)){ ?>
                                  <?php foreach($branches as  $c){ ?>
                                    <option <?php echo ($c['id'] == $order_details['branch_id']) ? 'selected': '' ;?> value="<?php echo $c['id'];?>"><?php echo $c['name'];?></option>
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
                                
                            <div class="col-md-3">  
                              <label class="col-form-label">Image 1 <span class="text-info ">(JPEG,JPG,PDF)</span></label>
                              <br>
                              <div style="display: none;" id="camera_img_1"> 
                                <div id="take_snap_camera_img_1"> 
                                    <div class="col-md-8">
                                        <input type="hidden" name="image_1" id="input_camera_img_1" class="image-tag">
                                        <div id="results_camera_img_1"></div>
                                    </div> 
                                    <button type="button" class="btn btn-light " onclick="show_camera('img_1')">Show camera</button>
                                    <br>
                                    <a  class="text-info" onclick="upload_btn('upload_img_1','camera_img_1')">*upload with folder</a>
                                </div> 
                              </div>
                              <div id="upload_img_1">
                                <?php if($order_details['image_1']){ ?>
                                <img src="<?= base_url('public/uploads/purchase/') . $order_details['image_1'] ?>" style="height: 150px;">
                                <?php } 
                                if ($validation->getError('img_1')) {
                                  echo '<br><span class="text-danger mt-2">' . $validation->getError('img_1') . '</span>';
                                }
                                ?>
                                <input type="file"  name="img_1" value=""  id="input_upload_img_1"  class="form-control">
                                <a class="text-info"  onclick="upload_btn('camera_img_1','upload_img_1')">*upload with camera</a>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Image 2 <span class="text-info ">(JPEG,JPG,PDF)</span></label>
                              <br>
                              <div style="display: none;" id="camera_img_2"> 
                                <div id="take_snap_camera_img_2"> 
                                    <div class="col-md-8">
                                        <input type="hidden" name="image_2" id="input_camera_img_2" class="image-tag">
                                        <div id="results_camera_img_2"></div>
                                    </div> 
                                    <button type="button" class="btn btn-light " onclick="show_camera('img_2')">Show camera</button>
                                    <br>
                                    <a  class="text-info" onclick="upload_btn('upload_img_2','camera_img_2')">*upload with folder</a>
                                </div> 
                              </div>
                              <div id="upload_img_2">
                                <?php if($order_details['image_2']){ ?>
                                <img src="<?= base_url('public/uploads/purchase/') . $order_details['image_2'] ?>" style="height: 150px;">
                                <?php } 
                                if ($validation->getError('img_2')) {
                                  echo '<br><span class="text-danger mt-2">' . $validation->getError('img_2') . '</span>';
                                }
                                ?>
                                <input type="file"  name="img_2" value=""  id="input_upload_img_2"  class="form-control">
                                <a class="text-info"  onclick="upload_btn('camera_img_2','upload_img_2')">*upload with camera</a>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Image 3 <span class="text-info ">(JPEG,JPG,PDF)</span></label>
                              <br>
                              <div style="display: none;" id="camera_img_3"> 
                                <div id="take_snap_camera_img_3"> 
                                    <div class="col-md-8">
                                        <input type="hidden" name="image_3" id="input_camera_img_3" class="form-control">
                                        <div id="results_camera_img_3"></div>
                                    </div> 
                                    <button type="button" class="btn btn-light " onclick="show_camera('img_3')">Show camera</button>
                                    <br>
                                    <a  class="text-info" onclick="upload_btn('upload_img_3','camera_img_3')">*upload with folder</a>
                                </div> 
                              </div>
                              <div id="upload_img_3">
                                <?php if($order_details['image_3']){ ?>
                                <img src="<?= base_url('public/uploads/purchase/') . $order_details['image_3'] ?>" style="height: 150px;">
                                <?php } 
                                if ($validation->getError('img_3')) {
                                  echo '<br><span class="text-danger mt-2">' . $validation->getError('img_3') . '</span>';
                                }
                                ?>
                                <input type="file"  name="img_3" value="" id="input_upload_img_3"  class="form-control">
                                <a class="text-info" onclick="upload_btn('camera_img_3','upload_img_3')">*upload with camera</a>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Image 4 <span class="text-info ">(JPEG,JPG,PDF)</span></label>
                              <br> 
                              <div style="display: none;" id="camera_img_4"> 
                                <div id="take_snap_camera_img_4"> 
                                    <div class="col-md-8">
                                        <input type="hidden" name="image_4" id="input_camera_img_4" class="image-tag">
                                        <div id="results_camera_img_4"></div>
                                    </div> 
                                    <button type="button" class="btn btn-light " onclick="show_camera('img_4')">Show camera</button>
                                    <br>
                                    <a  class="text-info" onclick="upload_btn('upload_img_4','camera_img_4')">*upload with folder</a>
                                </div> 
                              </div>
                              <div id="upload_img_4">
                                <?php if($order_details['image_4']){ ?>
                                <img src="<?= base_url('public/uploads/purchase/') . $order_details['image_4'] ?>" style="height: 150px;">
                                <?php } 
                                if ($validation->getError('img_4')) {
                                    echo '<br><span class="text-danger mt-2">' . $validation->getError('img_4') . '</span>';
                                }
                                ?>
                                <input type="file"  name="img_4" id="input_upload_img_4" class="form-control">
                                <a class="text-info"  onclick="upload_btn('camera_img_4','upload_img_4')">*upload with camera</a>
                              </div> 
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
                      <div class="modal fade" id="open-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Capture Image</h5>
                              <button type="button" class="close"  data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" id="showdata">
                              ...
                            </div>
                            <hr>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal" id="cam_modal_close_btn">Close</button>
                              <button type="button" class="btn btn-primary" onclick="saveCamImg()">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
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
<!-- Modal -->

  <?= $this->include('partials/vendor-scripts')  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <!-- Configure a few settings and attach camera -->
    <script language="JavaScript"> 
    function upload_btn(show,hide){ 
        $("#input_"+hide).val('');
        $("#results_"+hide).html(''); 
        $("#"+show).css('display','block');
        $("#"+hide).css('display','none'); 

       
    } 
    function show_camera(img_no){ 
          $.ajax({
            type: "POST",
            url: "<?= base_url('purchase/showWebCam') ?>",
            data: {
              img_no: img_no 
            },
            success: function(info) {  
              $("#showdata").html(info);
              $('#cam_img').val(img_no);
              $("#open-modal").modal("show"); 
            }
          }); 
    }
    </script>
  <script>
    $(document).ready(function() {
        $("#customer_name").select2({
        tags: true
        }); 
    }); 
    $("#customer_name").val($('#selected_customer').val()).trigger('change');

    $(document.body).on("change","#customer_name",function(){
        var regex = new RegExp("^[a-zA-Z0-9]+$");
        if (!regex.test(this.value)) {
        console.log(this.value);
        // $("#customer_name").val('');
        // $(".select2-selection__rendered").text('');
        }
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