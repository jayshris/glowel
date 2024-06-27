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
            ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">


                      <form method="post" action="<?php echo base_url('driver/assign-vehicle/' . $token); ?>">

                        <div class="settings-sub-header">
                          <h6>Assign Vehicle To Driver</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row mb-3 g-3">
                            <div class="col-md-3">
                              <label class="col-form-label">Driver Name <span class="text-danger">*</span></label>
                              <input type="text" value="<?= $driver_detail['name'] ?>" class="form-control" readonly>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Vehicle<span class="text-danger">*</span></label>
                              <select class="form-control select2" name="vehicle_id">
                                <option value="">Select Vehicle</option>
                                <?php
                                foreach ($vehicles as $v) {
                                ?>
                                  <option value="<?= $v["id"]; ?>"> <?php echo ucwords($v["rc_number"]); ?></option>
                                <?php
                                }
                                ?>
                              </select>
                            </div>

                            <div class="col-md-12"></div>

                            <div class="col-md-3">
                              <label class="col-form-label">Vehicle Location <span class="text-danger">*</span></label>
                              <input type="text" name="location" class="form-control">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Vehicle Fuel Status<span class="text-danger">*</span></label>
                              <input type="text" name="fuel" class="form-control">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Vehicle KM Reading<span class="text-danger">*</span></label>
                              <input type="text" name="km" class="form-control">
                            </div>


                          </div>
                        </div>
                        <div class="submit-button mt-3">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <?php if (!isset($type_detail)) {
                            echo '<a href="./' . $token . '" class="btn btn-warning">Reset</a>';
                          } ?>
                          <a href="<?php echo base_url('driver'); ?>" class="btn btn-light">Back</a>
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