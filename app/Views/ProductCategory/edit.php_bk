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

            ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">


                      <form method="post" enctype="multipart/form-data" action="<?php echo base_url('product-categories/edit/' . $category_details['id']); ?>">

                        <div class="settings-sub-header">
                          <h6>Edit Product Category</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row g-3">

                            <div class="col-md-3">
                              <label class="col-form-label">Product Type<span class="text-danger">*</span></label>
                              <select class="form-select" required name="product_type" aria-label="Default select example">
                                <option value="">Select Type</option>
                                <?php foreach ($product_types as $p) {
                                  echo '<option value="' . $p['id'] . '" ' . ((isset($category_details) && $category_details['prod_type_id'] == $p['id']) ? 'selected' : '') . '>' . $p['type_name'] . '</option>';
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
                              <input type="text" required name="category_name" value="<?= isset($category_details) ? $category_details['cat_name'] : "" ?>" class="form-control">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Abbreviation<span class="text-danger">*</span></label>
                              <?php
                              if ($validation->getError('category_abbr')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('category_abbr') . '</span>';
                              }
                              ?>
                              <input type="text" required name="category_abbr" value="<?= isset($category_details) ? $category_details['cat_abbreviation'] : "" ?>" class="form-control">
                            </div>

                            <div class="col-md-3">
                              <div class="form-wrap">
                                <label class="col-form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                  <option value="1" <?= isset($category_details) && $category_details['status'] == 1 ? 'selected' : '' ?>>Active</option>
                                  <option value="0" <?= isset($category_details) && $category_details['status'] == 0 ? 'selected' : '' ?>>Inactive</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">
                                Category Image<span class="text-danger">*</span>
                                <br>
                                <img src="<?= base_url('public/uploads/product_categories/') . $category_details['cat_image'] ?>" style="height: 150px;">
                              </label>
                              <?php
                              if ($validation->getError('category_img')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('category_img') . '</span>';
                              }
                              ?>
                              <input type="file" name="category_img" value="" class="form-control">
                              <span class="text-info">*upload to change image</span>
                            </div>


                          </div>
                          <br>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <?php if (!isset($category_details)) {
                            echo '<a href="./create" class="btn btn-warning">Reset</a>';
                          } ?>
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