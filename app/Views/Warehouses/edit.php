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
            // print_r($warehouse_details);
            // print_r($product_types);

            ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">


                      <form method="post" enctype="multipart/form-data" action="<?php echo base_url('warehouses/edit/' . $warehouse_details['id']); ?>">

                        <div class="settings-sub-header">
                          <h6>Edit Warehouse </h6>
                        </div>

                        <div class="profile-details">
                          <div class="row g-3">

                            <div class="col-md-2">
                              <label class="col-form-label">Company<span class="text-danger">*</span></label>
                              <select class="form-select" required name="company_id" id="company_id" aria-label="Default select example" onchange="$.getOffice();">
                                <option value="">Select Company</option>
                                <?php foreach ($companies as $c) {
                                  echo '<option value="' . $c['id'] . ' " ' . ((isset($warehouse_details) && $warehouse_details['company_id'] == $c['id']) ? 'selected' : '') . '>' . $c['name'] . '</option>';
                                } ?>
                              </select>
                            </div>

                            <div class="col-md-2">
                              <label class="col-form-label">Office<span class="text-danger">*</span></label>
                              <select class="form-select" required name="office_id" id="office_id" aria-label="Default select example">
                                <option value="">Select Office</option>
                                <?php foreach ($offices as $o) {
                                  echo '<option value="' . $o['id'] . '"' . ((isset($warehouse_details) && $warehouse_details['office_id'] == $o['id']) ? 'selected' : '') . '>' . $o['name'] . '</option>';
                                } ?>
                              </select>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Warehouse Name <span class="text-danger">*</span></label>
                              <?php
                              if ($validation->getError('warehouse_name')) {
                                echo '<br><span class="text-danger mt-2">' . $validation->getError('warehouse_name') . '</span>';
                              }
                              ?>
                              <input type="text" required name="warehouse_name" value="<?= isset($warehouse_details) ? $warehouse_details['name'] : "" ?>" class="form-control">
                            </div>

                            <div class="col-md-2">
                              <div class="form-wrap">
                                <label class="col-form-label">Status <span class="text-danger">*</span></label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                  <option value="1" <?= isset($warehouse_details) && $warehouse_details['status'] == 1 ? 'selected' : '' ?>>Active</option>
                                  <option value="0" <?= isset($warehouse_details) && $warehouse_details['status'] == 0 ? 'selected' : '' ?>>Inactive</option>
                                </select>
                              </div>
                            </div>

                          </div>
                          <br>
                        </div>


                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <?php if (!isset($warehouse_details)) {
                            echo '<a href="./create" class="btn btn-warning">Reset</a>';
                          } ?>
                          <a href="<?php echo base_url('warehouses'); ?>" class="btn btn-light">Back</a>
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
    $.getOffice = function() {

      var company_id = $('#company_id').val();
      console.log(company_id);

      $.ajax({
        method: "POST",
        url: '<?php echo base_url('warehouses/getOffice') ?>',
        data: {
          company_id: company_id
        },
        success: function(response) {

          console.log(response);
          $('#office_id').html(response);
        }
      });

    }
  </script>

</body>

</html>