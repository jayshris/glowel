
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
                    if($last == 'add'){
                      $action = 'usertype/create';
                    }else{
                      $action = 'usertype/edit';
                    }

                    $userPermissions = new UserTypePermissionModel();
                    ?>
                      <form method="post" action="<?php echo base_url().$action; ?>">
                        <div class="settings-sub-header">
                          <h6>Add User Type</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-md-6">
                            <input type="hidden" name="id" value="<?php
                                if(isset($usertype_data)){
                                  echo $usertype_data['id'];
                                }
                                ?>">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Name <span class="text-danger">*</span>
                                </label>
                                <?php
                                if($validation->getError('user_type_name'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('user_type_name').'</div>';
                                }
                                ?>
                                <input type="text" required name="user_type_name" class="form-control" value="<?php
                                if(isset($usertype_data)){
                                  echo $usertype_data['user_type_name'];
                                }
                                ?>">
                              </div>
                                <h5>Manage Permission as per user types </h5><br><br>
                              <table>
                              <tr> <td style="width:100%; "><h5>Modules List</h5></td> 
                              <td style="width:100%"><h5>Access</h5></td> </tr>
                              <?php
                                  if(isset($modules)){
                                      foreach ($modules as $key => $value) { 
                                      $pdata = [];
                                      if(isset($permissiondata)){
                                        foreach ($permissiondata as $k => $v) {
                                          $pdata[] = $v['module_id'];
                                        }
                                      }
                              ?>
                                      <tr>
                                      <td><label for="id_<?php echo $value["id"]; ?>" class="col-form-label" style=" margin: 0px 20px 0px 3px;"><?php echo ucwords($value["name"]); ?></label></td>
                                      

                                      <td><input class="form-check-input" style="border:1px  solid #381f1f" type="checkbox" name="modules[]" id="id_<?php echo $value["id"]; ?>" value="<?php echo $value["id"]; ?>" <?php if(in_array($value['id'], $pdata)){
                                            echo "checked";} ?>></td>
                                      
                                      </tr>
                                    <?php
                                      }
                                  }
                                  ?>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="<?php echo base_url();?>usertype" class="btn btn-light">Cancel</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Settings Info -->
