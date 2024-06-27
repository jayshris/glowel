
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
                      $action = 'module/add';
                    }else{
                      $action = 'module/edit';
                    }
                    ?>
                      <form method="post" action="<?php echo base_url().$action; ?>">
                        <div class="settings-sub-header">
                          <h6>Add User Type</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-md-6">
                            <input type="hidden" name="id" value="<?php
                                if(isset($module_data)){
                                  echo $module_data['id'];
                                }
                                ?>">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Name <span class="text-danger">*</span>
                                </label>
                                <?php
                                if($validation->getError('name'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('name').'</div>';
                                }
                                ?>
                                <input type="text" required name="name" class="form-control" value="<?php
                                if(isset($module_data)){
                                  echo $module_data['name'];
                                }
                                ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="<?php echo base_url();?>module" class="btn btn-light">Cancel</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Settings Info -->
