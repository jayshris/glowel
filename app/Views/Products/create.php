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
            // print_r($category_details);
            // print_r($product_types);

            $uoarr = [];
            foreach ($user_offices as $uo) {
              array_push($uoarr, $uo['office_id']);
            }

            // print_r($_SESSION);
            // print_r($uoarr);

            // echo set_value('product_name');
            ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">


                      <form method="post" enctype="multipart/form-data" action="<?php echo base_url('products/create'); ?>">

                        <div class="settings-sub-header">
                          <h6>Add Product</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row g-3">

                            <div class="col-md-2">
                              <label class="col-form-label">Product Type<span class="text-danger">*</span></label>
                              <select class="form-select" required name="product_type" id="product_type" aria-label="Default select example" onchange="$.getCategory();">
                                <option value="">Select Type</option>
                                <?php foreach ($product_types as $p) {
                                  echo '<option value="' . $p['id'] . '">' . $p['type_name'] . '</option>';
                                } ?>
                              </select>
                            </div>

                            <div class="col-md-2">
                              <label class="col-form-label">Product Category<span class="text-danger">*</span></label>
                              <select class="form-select" required name="product_category" id="product_category" aria-label="Default select example">
                                <option value="">Select Category</option>
                              </select>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Product Name <span class="text-danger">*</span></label>
                              <?php
                              if ($validation->getError('product_name')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('product_name') . '</span>';
                              }
                              ?>
                              <input type="text" required name="product_name" value="<?= set_value('product_name') ?>" class="form-control">
                            </div>

                            <div class="col-md-12"></div>

                            <div class="col-md-3">
                              <label class="col-form-label">Product Image 1<span class="text-danger">*</span> <span class="text-info ">(100KB|PNG,JPEG,JPG)</span></label>
                              <?php
                              if ($validation->getError('product_img_1')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('product_img_1') . '</span>';
                              }
                              ?>
                              <input type="file" required name="product_img_1" value="" class="form-control">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Product Image 2<span class="text-danger">*</span> <span class="text-info ">(100KB|PNG,JPEG,JPG)</span></label>
                              <?php
                              if ($validation->getError('product_img_2')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('product_img_2') . '</span>';
                              }
                              ?>
                              <input type="file" required name="product_img_2" value="" class="form-control">
                            </div>


                            <div class="col-md-12">
                              <label class="col-form-label">Inventory Locations<span class="text-danger">*</span> <span class="text-info "></span></label><br><br>
                              <?php
                              foreach ($offices as $o) {

                              ?>

                                <div class="form-check" <?= in_array($o['id'], $uoarr) ?: 'style="pointer-events: none;"' ?>>
                                  <input class="form-check-input" name="offices[]" type="checkbox" value="<?= $o['id'] ?>" id="check<?= $o['id'] ?>" <?= in_array($o['id'], $uoarr) ? 'required' : ''; ?>>
                                  <label class="form-check-label" for="check<?= $o['id'] ?>"><?= $o['name'] ?></label>
                                </div>


                                <table class="table table-hover table-borderless" style="width: auto;">
                                  <tbody>
                                    <tr>
                                      <th></th>
                                      <th>Rate</th>
                                      <th>Measurement Unit</th>
                                    </tr>

                                    <?php
                                    $warehouses = $WModel->where('office_id', $o['id'])->findAll();
                                    $i = 0;
                                    foreach ($warehouses as $w) {
                                    ?>
                                      <tr <?= in_array($o['id'], $uoarr) ?: 'style="pointer-events: none;"' ?>>
                                        <td>
                                          <input class="form-check-input" type="radio" name="warehouse<?= $o['id'] ?>" value="<?= $w['id'] ?>" id="warehouse_<?= $o['id'] . '_' . $w['id'] ?>" <?= in_array($o['id'], $uoarr) ? 'required' : ''; ?>>
                                          <label class="form-check-label" for="warehouse_<?= $o['id'] . '_' . $w['id'] ?>"><?= $w['name'] ?></label>
                                        </td>
                                        <td><input type="text" name="warehouse_rate<?= $o['id'] . '_' . $w['id']  ?>" value="" class="form-control"></td>
                                        <td><input type="text" name="warehouse_unit<?= $o['id'] . '_' . $w['id']  ?>" value="" class="form-control"></td>
                                      </tr>

                                    <?php
                                      $i++;
                                    }
                                    ?>
                                  </tbody>
                                </table><br><br>
                              <?php
                              }
                              ?>

                            </div>

                            <div class="col-md-6">
                              <label class="col-form-label">Summary</label>
                              <?php
                              if ($validation->getError('summary')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('summary') . '</span>';
                              }
                              ?>
                              <textarea name="summary" id="summary" class="form-control resize-none" maxlength="70"></textarea> 
                            </div>

                            <div class="col-md-6">
                              <label class="col-form-label">Description</label>
                              <?php
                              if ($validation->getError('description')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('description') . '</span>';
                              }
                              ?>
                              <textarea name="description" id="description" class="form-control resize-none" maxlength="100"></textarea> 
                            </div>

                          </div>
                          <br>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="./create" class="btn btn-warning">Reset</a>
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