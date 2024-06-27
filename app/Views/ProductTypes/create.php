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
            // print_r($type_detail);
            ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">

                      <?php
                      if (isset($type_detail)) {
                      ?>
                        <form method="post" action="<?php echo base_url('product-types/edit/' . $type_detail['id']); ?>">
                        <?php
                      } else {
                        ?>
                          <form method="post" action="<?php echo base_url('product-types/create'); ?>">
                          <?php
                        }
                          ?>
                          <div class="settings-sub-header">
                            <h6><?= isset($type_detail) ? 'Edit' : 'Add' ?> Product Type</h6>
                          </div>
                          <div class="profile-details">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-wrap">
                                  <label class="col-form-label">
                                    Type Name <span class="text-danger">*</span>
                                  </label>
                                  <?php
                                  if ($validation->getError('type_name')) {
                                    echo '<div class="alert alert-danger mt-2">' . $validation->getError('type_name') . '</div>';
                                  }
                                  ?>
                                  <input type="text" required name="type_name" value="<?= isset($type_detail) ? $type_detail['type_name'] : "" ?>" class="form-control">
                                </div>
                              </div>

                              <?php if (isset($type_detail)) {                            ?>
                                <div class="col-md-3">
                                  <div class="form-wrap">
                                    <label class="col-form-label">
                                      Status <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-select" name="status" aria-label="Default select example">
                                      <option value="1" <?= isset($type_detail) && $type_detail['status'] == 1 ? 'selected' : '' ?>>Active</option>
                                      <option value="0" <?= isset($type_detail) && $type_detail['status'] == 0 ? 'selected' : '' ?>>Inactive</option>
                                    </select>
                                  </div>
                                </div>
                              <?php } ?>

                            </div>
                          </div>
                          <div class="submit-button">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <?php if (!isset($type_detail)) {
                              echo '<a href="./create" class="btn btn-warning">Reset</a>';
                            } ?>
                            <a href="<?php echo base_url('product-types'); ?>" class="btn btn-light">Back</a>
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