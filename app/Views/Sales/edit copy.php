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

            <?php $validation = \Config\Services::validation();
            // print_r($product_details);
            // print_r($product_types);

            // var_dump($user_offices);
            $uoarr = [];
            foreach ($user_offices as $uo) {
              array_push($uoarr, $uo['office_id']);
            }

            ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">


                      <form method="post" enctype="multipart/form-data" action="<?php echo base_url('products/edit/' . $product_details['id']); ?>">

                        <div class="settings-sub-header">
                          <h6>Edit Product </h6>
                        </div>

                        <div class="profile-details">
                          <div class="row g-3">

                            <div class="col-md-2">
                              <label class="col-form-label">Product Type<span class="text-danger">*</span></label>
                              <select class="form-select" required name="product_type" id="product_type" aria-label="Default select example" onchange="$.getCategory();">
                                <option value="">Select Type</option>
                                <?php foreach ($product_types as $p) {
                                  echo '<option value="' . $p['id'] . ' " ' . ((isset($product_details) && $product_details['type_id'] == $p['id']) ? 'selected' : '') . '>' . $p['type_name'] . '</option>';
                                } ?>
                              </select>
                            </div>

                            <div class="col-md-2">
                              <label class="col-form-label">Product Category<span class="text-danger">*</span></label>
                              <select class="form-select" required name="product_category" id="product_category" aria-label="Default select example">
                                <option value="">Select Category</option>
                                <?php foreach ($product_categories as $pc) {
                                  echo '<option value="' . $pc['id'] . '"' . ((isset($product_details) && $product_details['category_id'] == $pc['id']) ? 'selected' : '') . '>' . $pc['cat_name'] . '</option>';
                                } ?>
                              </select>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Product Name <span class="text-danger">*</span></label>
                              <?php
                              if ($validation->getError('product_name')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('product_name') . '</span>';
                              }
                              ?>
                              <input type="text" required name="product_name" value="<?= isset($product_details) ? $product_details['product_name'] : "" ?>" class="form-control">
                            </div>

                            <div class="col-md-12"></div>

                            <div class="col-md-3">
                              <label class="col-form-label">Small Image<span class="text-danger">*</span> <span class="text-info ">(100KB|PNG,JPEG,JPG)</span></label>
                              <br>
                              <img src="<?= base_url('public/uploads/products/') . $product_details['product_image_1'] ?>" style="height: 150px;">
                              <?php
                              if ($validation->getError('product_img_1')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('product_img_1') . '</span>';
                              }
                              ?>
                              <input type="file" name="product_img_1" value="" class="form-control">
                              <span class="text-info">*upload to change image</span>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Large Image<span class="text-danger">*</span> <span class="text-info ">(300KB|PNG,JPEG,JPG)</span></label>
                              <br>
                              <img src="<?= base_url('public/uploads/products/') . $product_details['product_image_2'] ?>" style="height: 150px;">
                              <?php
                              if ($validation->getError('product_img_2')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('product_img_2') . '</span>';
                              }
                              ?>
                              <input type="file" name="product_img_2" value="" class="form-control">
                              <span class="text-info">*upload to change image</span>
                            </div>


                            <div class="col-md-12">
                              <label class="col-form-label">Inventory Locations<span class="text-danger">*</span> <span class="text-info "></span></label>
                              <?php
                              foreach ($offices as $o) {

                              ?>
                                <div class="form-check" <?= in_array($o['id'], $uoarr) ?: 'style="pointer-events: none;"' ?>>
                                  <input class="form-check-input" name="offices[]" type="checkbox" value="<?= $o['id'] ?>" id="check<?= $o['id'] ?>" checked>
                                  <label class="form-check-label" for="check<?= $o['id'] ?>"><?= $o['name'] ?></label>
                                </div>
                                <?php

                                $warehouses = $WModel->where('office_id', $o['id'])->findAll();
                                $i = 0;
                                foreach ($warehouses as $w) {

                                  // fetch values
                                  $warehouse_link =  $PWLModel->where('product_id', $product_details['id'])->where('warehouse_id', $w['id'])->first();
                                  // print_r($warehouse_link);

                                ?>
                                  <div class="form-check" style="margin-left: 30px;">

                                    <div class="row mb-3" <?= in_array($o['id'], $uoarr) ?: 'style="pointer-events: none;"' ?>>
                                      <div class="col-auto">
                                        <input class="form-check-input" type="radio" name="warehouse<?= $o['id'] ?>" value="<?= $w['id'] ?>" id="warehouse_<?= $o['id'] . '_' . $w['id'] ?>" <?= $warehouse_link && $warehouse_link['warehouse_id'] == $w['id'] ? 'checked' : ''  ?>>
                                        <label class="form-check-label" for="warehouse_<?= $o['id'] . '_' . $w['id'] ?>"><?= $w['name'] ?></label>
                                      </div>
                                      <div class="col-auto text-end">Rate : </div>
                                      <div class="col-auto"><input type="text" name="warehouse_rate<?= $o['id'] . '_' . $w['id']  ?>" value="<?= $warehouse_link ? $warehouse_link['rate'] : '' ?>" class="form-controls"></div>
                                      <div class="col-auto text-end">Unit : </div>
                                      <div class="col-auto"><input type="text" name="warehouse_unit<?= $o['id'] . '_' . $w['id']  ?>" value="<?= $warehouse_link ? $warehouse_link['unit'] : '' ?>" class="form-controls"></div>
                                    </div>

                                  </div>
                              <?php
                                  $i++;
                                }
                              }
                              ?>
                            </div>

                            <div class="col-md-2">
                              <div class="form-wrap">
                                <label class="col-form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                  <option value="1" <?= isset($product_details) && $product_details['status'] == 1 ? 'selected' : '' ?>>Active</option>
                                  <option value="0" <?= isset($product_details) && $product_details['status'] == 0 ? 'selected' : '' ?>>Inactive</option>
                                </select>
                              </div>
                            </div>

                          </div>
                          <br>
                        </div>


                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <?php if (!isset($product_details)) {
                            echo '<a href="./create" class="btn btn-warning">Reset</a>';
                          } ?>
                          <a href="<?php echo base_url('products'); ?>" class="btn btn-light">Back</a>
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

  <script>
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