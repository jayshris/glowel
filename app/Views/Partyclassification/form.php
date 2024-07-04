<?php $validation = \Config\Services::validation(); 
?>
                <!-- Settings Info -->
                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">
                    <?php
                    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
                    $last = array_pop($uriSegments);
                    if($last == 'create'){
                      $action = 'PartyClassification/create';
                    }else{
                      $action = 'PartyClassification/edit';
                    }
                    ?>
                    <form method="post" action="<?php echo base_url().$action; ?>" enctype="multipart/form-data">
                        <div class="profile-details">
                          <div class="row">
                              <input type="hidden" name="id" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['id'];
                                }
                                ?>">
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Classification Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="name" class="form-control" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['name'];
                                }else{
                                  echo set_value('name'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('name')) {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('name').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="<?php echo base_url();?>partyclassification" class="btn btn-light">Cancel</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Settings Info -->