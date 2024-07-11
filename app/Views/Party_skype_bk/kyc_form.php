<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('partials/title-meta') ?>
    <?= $this->include('partials/head-css') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>


    <div class="container">
        <div class="content">

            <div class="row">
                <div class="col-xl-12 col-lg-12 mt-3">
                    <div class="settings-sub-header text-center">
                        <h2>Party KYC Form</h2>
                    </div>
                    <?php $validation = \Config\Services::validation(); ?>
                    <!-- Settings Info -->
                    <form method="post" action="<?php echo base_url('party/kyc') ?>" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-body">

                                <div class="row g-3">


                                    <div class="col-md-6">
                                        <label class="col-form-label"> Party Name <span class="text-danger">*</span> </label>
                                        <input type="text" required name="party_name" class="form-control" value="<?= set_value('party_name') ?>">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="col-form-label"> Contact Person </label>
                                        <input type="text" name="contact_person" class="form-control" value="<?php echo set_value('contact_person') ?>">
                                    </div>

                                    <div class="col-md-12">
                                        <label class="col-form-label">Party Types<span class="text-danger">*</span></label><br>
                                        <?php foreach ($partytype as $pt) { ?>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input checkbx" type="checkbox" name="party_type[]" id="chk<?= $pt['name'] ?>" value="<?= $pt['id'] ?>">
                                                <label class="form-check-label" for="chk<?= $pt['name'] ?>"><?= $pt['name'] ?></label>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="col-form-label"> Business Name / Alias </label>
                                        <input type="text" name="alias" class="form-control" value="<?php echo set_value('alias') ?>">
                                    </div>

                                    <div class="col-md-12">
                                        <label class="col-form-label"> Business Address </label>
                                        <input type="text" name="business_address" class="form-control" value="<?php echo set_value('business_address'); ?>">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="col-form-label"> City <span class="text-danger">*</span> </label>
                                        <input type="text" required name="city" class="form-control" value="<?php echo set_value('business_city'); ?>">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="col-form-label"> State <span class="text-danger">*</span> </label>
                                        <select class="dropdown selectopt" name="business_state">
                                            <option>Select</option>
                                            <?php
                                            if (isset($state)) {
                                                foreach ($state as $row) { ?>
                                                    <option value="<?php echo $row["state_id"]; ?>" <?= set_value('business_state') == $row['state_id'] ? 'selected' : '' ?>><?php echo ucwords($row["state_name"]); ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>

                                    </div>
                                    <div class="col-md-3">
                                        <label class="col-form-label"> Postcode <span class="text-danger">*</span> </label>
                                        <input type="number" required name="postcode" class="form-control" value="<?php echo set_value('postcode') ?>">

                                    </div>
                                    <div class="col-md-3">
                                        <label class="col-form-label"> Primary Phone number <span class="text-danger">*</span> </label>
                                        <input type="number" required name="primary_phone" class="form-control" value="<?php echo set_value('primary_phone') ?>">

                                    </div>

                                    <div class="col-md-6">
                                        <label class="col-form-label"> Email </label>
                                        <input type="text" name="email" class="form-control" value="<?php echo set_value('email') ?>">

                                    </div>

                                    <div class="col-md-6">
                                        <label class="col-form-label"> Business Type <span class="text-danger">*</span> </label>
                                        <select class="dropdown selectopt" name="business_type_id" id="business_type_id">
                                            <option>Select</option>
                                            <?php
                                            if (isset($businesstype)) {
                                                foreach ($businesstype as $row) { ?>
                                                    <option value="<?php echo $row["id"]; ?>" <?php
                                                                                                if (isset($pc_data['business_type_id'])) {
                                                                                                    if ($pc_data['business_type_id'] == $row['id']) {
                                                                                                        echo 'selected';
                                                                                                    }
                                                                                                } ?>><?php echo ucwords($row["company_structure_name"]); ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <!-- for doc populate  -->
                                    <div class="target row mt-3" id="target"> </div>

                                    <div class="col-md-6">
                                        <label class="col-form-label">Office Name</label>
                                        <input type="text" class="form-control" name="office_name" value="<?= isset($branch_detail) ? $branch_detail['office_name'] : '' ?>">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="col-form-label">GST Number</label>
                                        <input type="text" class="form-control" name="gst" value="<?= isset($branch_detail) ? $branch_detail['gst'] : '' ?>">
                                    </div>

                                    <div class="col-md-4 count">
                                        <label class="col-form-label">Contact Person Name<span class="text-danger">*</span></label>
                                        <input type="text" required class="form-control" name="contact_person[]">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="col-form-label">Designation<span class="text-danger">*</span></label>
                                        <input type="text" required class="form-control" name="contact_designation[]">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="col-form-label">Phone No.<span class="text-danger">*</span></label>
                                        <input type="text" required class="form-control" name="contact_phone[]">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="col-form-label">Email<span class="text-danger">*</span></label>
                                        <input type="text" required class="form-control" name="contact_email[]">
                                    </div>
                                    <div class="col-md-1 fill"><button type="button" class="btn btn-info" style="margin-top: 26px;" onclick="$.addMore();"><i class="fa fa-plus" aria-hidden="true"></i></button></div>

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
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 text-center">
                            <button type="submit" id="submit-btn" class="btn btn-danger">Submit</button>&nbsp;&nbsp;
                            <a href="./kyc" class="btn btn-warning">Reset</a>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <?= $this->include('partials/vendor-scripts') ?>

    <script>
        jQuery(document).ready(function($) {

            $("#business_type_id").on('change', function() {
                $("#target").empty();
                var level = $(this).val();
                if (level) {
                    $.ajax({
                        type: 'POST',
                        url: 'get_flags_fields',
                        data: {
                            business_type: '' + level + ''
                        },
                        success: function(htmlresponse) {
                            $('#target').append(htmlresponse);
                        }
                    });
                }
            });


            $.validate = function(flag_id) {

                $('#span_' + flag_id).html('');
                $('#submit-btn').removeAttr('disabled');

                var numbr = $('#num_' + flag_id).val();

                $.ajax({
                    method: 'POST',
                    url: 'validate_doc',
                    data: {
                        flag_id: flag_id,
                        number: numbr
                    },
                    success: function(response) {
                        if (response == '1') {
                            $('#span_' + flag_id).html(' document number already exists !!');
                            $('#submit-btn').attr('disabled', 'disabled');
                        }
                    }
                });

            }

            $.addMore = function() {
                var count = $('.count').length;

                $.ajax({
                    url: "<?= base_url('customer-branch/addPerson/') ?>" + (count + 1),
                    type: "GET",
                    data: {
                        count: count
                    },
                    success: function(data) {
                        $('.fill').after(data);
                    }
                })
            }

            $.delete = function(index) {
                $('.del' + index).remove();
            }

        });

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