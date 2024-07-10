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
            // print_r($customer_detail);

            if (isset($customer_detail)) {

              $typeArr = explode(',', $customer_detail['party_type_id']);
            }

            // print_r($typeArr);

            // echo set_value('product_name');
            ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">


                      <form method="post" enctype="multipart/form-data" action="<?= isset($customer_detail) ? base_url('customers/edit/' . $customer_detail['id']) : base_url('customers/create') ?>">

                        <div class="settings-sub-header">
                          <h6>Add Customer</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row g-3">

                            <div class="col-md-12">
                              <label class="col-form-label">Party Types<span class="text-danger">*</span></label><br>

                              <?php foreach ($party_types as $pt) { ?>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input checkbx" type="checkbox" name="party_type[]" id="chk<?= $pt['name'] ?>" value="<?= $pt['id'] ?>" <?= !isset($customer_detail) ? 'required' : '' ?> <?= isset($customer_detail) && in_array($pt['id'], $typeArr) ? 'checked' : '' ?>>
                                  <label class="form-check-label" for="chk<?= $pt['name'] ?>"><?= $pt['name'] ?></label>
                                </div>
                              <?php } ?>
                            </div>

                            <div class="col-md-6">
                              <label class="col-form-label">Party<span class="text-danger">*</span></label>
                              <select class="form-select select2" onchange="$.getPartyDetail();" required name="party_id" id="party_id">
                                <option value="">Select Party</option>
                                <?php foreach ($parties as $party) {
                                  echo '<option value="' . $party['id'] . '" ' . (isset($customer_detail) && $customer_detail['party_id'] == $party['id'] ? 'selected' : '') . '>' . $party['party_name'] . '</option>';
                                } ?>
                              </select>
                            </div>

                            <div class="col-md-12">
                              <label class="col-form-label">Address</label>
                              <input type="text" class="form-control" id="address" disabled>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">City</label>
                              <input type="text" class="form-control" id="city" disabled>
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">State</label>
                              <select class="form-select select2" id="state_id" disabled>
                                <option value="">Select State</option>
                                <?php foreach ($state as $row) { ?>
                                  <option value="<?php echo $row["state_id"]; ?>"><?php echo ucwords($row["state_name"]); ?></option>
                                <?php } ?>
                              </select>
                            </div>

                            <div class="col-md-2">
                              <label class="col-form-label">Pin Code</label>
                              <input type="text" class="form-control" id="pin" disabled>
                            </div>

                            <div class="col-md-12">
                              <label class="col-form-label">Alternate Address</label>
                              <input type="text" class="form-control" name="address" value="<?= isset($customer_detail) ? $customer_detail['address'] : '' ?>">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">City</label>
                              <input type="text" class="form-control" name="city" value="<?= isset($customer_detail) ? $customer_detail['city'] : '' ?>">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">State</label>
                              <select class="form-select select2" name="state_id">
                                <option value="">Select State</option>
                                <?php foreach ($state as $row) { ?>
                                  <option value="<?php echo $row["state_id"]; ?>" <?= isset($customer_detail) && $customer_detail['state_id'] == $row["state_id"] ? 'selected' : '' ?>><?php echo ucwords($row["state_name"]); ?></option>
                                <?php } ?>
                              </select>
                            </div>

                            <div class="col-md-2">
                              <label class="col-form-label">Pin Code</label>
                              <input type="text" class="form-control" name="pin" value="<?= isset($customer_detail) ? $customer_detail['postcode'] : '' ?>">
                            </div>

                            <div class="col-md-3">
                              <label class="col-form-label">Phone</label>
                              <input type="text" class="form-control" name="phone" value="<?= isset($customer_detail) ? $customer_detail['phone'] : '' ?>">
                            </div>

                            <?php if (isset($customer_detail)) { ?>

                              <div class="col-12"></div>

                              <div class="col-md-2">
                                <label class="col-form-label">Status<span class="text-danger">*</span></label>
                                <select class="form-select" required name="status" aria-label="Default select example">
                                  <option value="1">Active</option>
                                  <option value="0">InActive</option>
                                </select>
                              </div>
                            <?php } ?>


                          </div>
                          <br>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="./<?= isset($customer_detail) ? $customer_detail['id'] : 'create' ?>" class="btn btn-warning">Reset</a>
                          <a href="<?php echo base_url('customers'); ?>" class="btn btn-light">Back</a>
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
    $(document).ready(function() {
      $.getPartyDetail();
    });

    $.getPartyDetail = function() {

      var party_id = $('#party_id').val();

      $.ajax({
        method: "POST",
        url: '<?php echo base_url('customers/getPartyDetail') ?>',
        data: {
          party_id: party_id
        },
        success: function(response) {

          res = JSON.parse(response);
          $('#address').val(res.business_address);
          $('#city').val(res.city);
          $("#state_id").val(res.state_id).change();
          $('#pin').val(res.postcode);
        }
      });
    }

    var checkboxes = $('.checkbx');
    checkboxes.change(function() {
      if ($('.checkbx:checked').length > 0) {
        checkboxes.removeAttr('required');
      } else {
        checkboxes.attr('required', 'required');
      }
    });
  </script>

</body>

</html>