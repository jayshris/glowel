<?php $validation = \Config\Services::validation();

use App\Models\UserTypePermissionModel;
?>
<!-- Settings Info -->
<div class="card">
  <div class="card-body">
    <div class="settings-form">
      <?php
      $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
      $last = array_pop($uriSegments);
      if ($last == 'create') {
        $action = 'businesstype/create';
      } else {
        $action = 'businesstype/edit';
      }
      $userPermissions = new UserTypePermissionModel();
      ?>
      <form method="post" action="<?php echo base_url() . $action; ?>" enctype="multipart/form-data">
        <div class="profile-details">
          <div class="row">
            <input type="hidden" name="id" value="<?php
                                                  if (isset($business_data)) {
                                                    echo $business_data['id'];
                                                  }
                                                  ?>">
            <div class="col-md-6">
              <div class="form-wrap">
                <label class="col-form-label">
                  Business Structure Type <span class="text-danger">*</span>
                </label>
                <input type="text" required name="company_structure_name" class="form-control" pattern="[A-Za-z0-9 ]+" title="Only letters, numbers, and spaces are allowed." value="<?php
                                                                                                                                                                                      if (isset($business_data)) {
                                                                                                                                                                                        echo $business_data['company_structure_name'];
                                                                                                                                                                                      } else {
                                                                                                                                                                                        echo set_value('company_structure_name');
                                                                                                                                                                                      }
                                                                                                                                                                                      ?>">
                <?php
                if ($validation->getError('company_structure_name')) {
                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('company_structure_name') . '</div>';
                }
                ?>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-wrap">

                <table class="table table-borderless" style="width: 40%;">
                  <thead>
                    <tr>
                      <td>Flags</td>
                      <td>Mandatory</td>
                      <td>Non Mandatory</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (isset($flags)) {
                      foreach ($flags as $row) {
                        // print_r($row);

                        if (isset($business_data)) {
                          $bFlag = $BusinessFlagModel->where(['flags_id' => $row['id'], 'business_type_id' => $business_data['id']])->first();
                        }
                    ?><tr>
                          <td>
                            <input class="form-check-input" type="checkbox" name="flags[]" id="flag_<?php echo $row["id"]; ?>" value="<?php echo $row["id"]; ?>" <?= (isset($bFlag) && $bFlag['flags_id'] == $row['id']) ? 'checked' : ''; ?> style="height: 20px; width: 20px;" onclick="$.flags();"><label for="flag_<?php echo $row["id"]; ?>" class="col-form-label">&nbsp;<?php echo ucwords($row["title"]); ?></label>
                          </td>
                          <td>
                            <input class="form-check-input" type="radio" name="radio_<?php echo $row["id"]; ?>" id="flag_<?php echo $row["id"]; ?>_radio1" value="1" <?= (isset($bFlag) && $bFlag['mandatory'] == 1) ? 'checked' : ''; ?> style="height: 20px; width: 20px;">
                          </td>
                          <td>
                            <input class="form-check-input" type="radio" name="radio_<?php echo $row["id"]; ?>" id="flag_<?php echo $row["id"]; ?>_radio2" value="0" <?= (isset($bFlag) && $bFlag['mandatory'] == 0) ? 'checked' : ''; ?> style="height: 20px; width: 20px;">
                          </td>
                        </tr>
                    <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>

                <?php
                if ($validation->getError('flags')) {
                  echo '<div class="alert alert-danger mt-2">' . $validation->getError('flags') . '</div>';
                }
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="submit-button">
          <button type="submit" class="btn btn-primary">Save Changes</button>
          <a href="<?php echo base_url(); ?>businesstype" class="btn btn-light">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /Settings Info -->