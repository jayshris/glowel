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

            // echo set_value('category_name');
            ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">


                      <form method="post" enctype="multipart/form-data" action="<?php echo base_url('product-categories/create'); ?>">

                        <div class="settings-sub-header">
                          <h6>Add Product Category</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row g-3">

                            <div class="col-md-3">
                              <label class="col-form-label">Product Type<span class="text-danger">*</span></label>
                              <select class="form-select" required name="product_type" aria-label="Default select example">
                                <option value="">Select Type</option>
                                <?php foreach ($product_types as $p) {
                                  echo '<option value="' . $p['id'] . '" ' . (set_value('product_type') == $p['id'] ? 'selected' : '') . '>' . $p['type_name'] . '</option>';
                                } ?>
                              </select>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Category Name <span class="text-danger">*</span></label>
                              <?php
                              if ($validation->getError('category_name')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('category_name') . '</span>';
                              }
                              ?>
                              <input type="text" required name="category_name" value="<?= set_value('category_name') ?>" class="form-control">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Abbreviation<span class="text-danger">*</span></label>
                              <?php
                              if ($validation->getError('category_abbr')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('category_abbr') . '</span>';
                              }
                              ?>
                              <input type="text" required name="category_abbr" value="<?= set_value('category_abbr') ?>" class="form-control">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Category Image<span class="text-danger">*</span> <span class="text-info ">(100KB|PNG,JPEG,JPG)</span></label>
                              <?php
                              if ($validation->getError('category_img')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('category_img') . '</span>';
                              }
                              ?>
                              <input type="file" required name="category_img" value="" class="form-control">
                            </div>

                          </div>
                          <br>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="./create" class="btn btn-warning">Reset</a>
                          <a href="<?php echo base_url('product-categories'); ?>" class="btn btn-light">Back</a>
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


</body>

</html>