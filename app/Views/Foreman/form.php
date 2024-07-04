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
                    if($last == 'create'){
                      $action = 'foreman/create';
                    }else{
                      $action = 'foreman/edit';
                    }

                    //print_r($validation->getError()); die;


                    $userPermissions = new UserTypePermissionModel();
                    ?>
                      <form method="post" action="<?php echo base_url().$action; ?>" enctype="multipart/form-data">
                        <div class="settings-sub-header">
                          <h6>Add New Foreman</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row">
                              <input type="hidden" name="id" value="<?php
                                if(isset($foreman_data)){
                                  echo $foreman_data['id'];
                                }
                                ?>">
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Foreman Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="name" class="form-control" value="<?php
                                if(isset($foreman_data)){
                                  echo $foreman_data['name'];
                                }else{
                                  echo set_value('name'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('name'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('name').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Email 
                                </label>
                                <input type="email" required name="email" class="form-control" value="<?php if(isset($foreman_data)){
                                  echo $foreman_data['email']; }else{ echo set_value('email'); 
                                } ?>">
                                <?php
                                if($validation->getError('email'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('email').'</div>';
                                }
                                ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Phone number<span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="mobile" class="form-control" value="<?php
                                if(isset($foreman_data)){
                                  echo $foreman_data['mobile'];
                                }else{
                                  echo set_value('mobile'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('mobile'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('mobile').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                              
                            
                            
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Aadhaar number<span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="adhaar_number" class="form-control" value="<?php
                                if(isset($foreman_data)){
                                  echo $foreman_data['adhaar_number'];
                                }else{
                                  echo set_value('adhaar_number'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('adhaar_number'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('adhaar_number').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Bank A/C No:
                                </label> 
                                <input type="text" required name="bank_account_number" class="form-control" value ="<?php
                                if(isset($foreman_data)){
                                  echo $foreman_data['bank_account_number'];
                                }else{
                                  echo set_value('bank_account_number'); 
                                }
                                ?>"> 
                                <?php
                                if($validation->getError('bank_account_number'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('bank_account_number').'</div>';
                                }
                                ?>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Bank IFSC: 
                                </label>
                                <input type="text" required name="bank_ifsc_code" class="form-control" value="<?php
                                if(isset($foreman_data)){
                                  echo $foreman_data['bank_ifsc_code'];
                                }else{
                                  echo set_value('bank_ifsc_code'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('bank_ifsc_code'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('bank_ifsc_code').'</div>';
                                }
                                ?>
                              </div>
                            </div>

                            
                            <div class="col-md-3">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Aadhaar Image - Front
                                </label>
                                <input type="file"  name="adhaar_image_front" class="form-control" >
                                <?php  if(isset($aadhaar_data)){ ?> <img src="<?php echo base_url().$aadhaar_data['adhaar_image_front']; ?>" style="width:50px; height:50px"> <?php }
                                ?>
                                <?php
                                if($validation->getError('adhaar_image_front'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('adhaar_image_front').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Aadhaar Image - Back
                                </label>
                                <input type="file"  name="adhaar_image_back" class="form-control" >
                                <?php  if(isset($aadhaar_data)){ ?>
                                <img  src="<?php
                                if(isset($aadhaar_data)){
                                   echo WRITEPATH.$aadhaar_data['adhaar_image_back'];
                                } ?>" style="width:50px; height:50px">
                                <?php } ?>
                                <?php
                                if($validation->getError('adhaar_image_back'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('adhaar_image_back').'</div>';
                                }
                                ?>
                              </div>
                            </div>


                            
                            <div class="col-md-3">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Image 1
                                </label>
                                <input type="file"  name="profile_image1" class="form-control" >
                                <?php  if(isset($foreman_data)){ ?>
                                <img src="<?php
                                if(isset($foreman_data)){
                                  echo $foreman_data['profile_image1'];
                                } ?>" style="width:50px; height:50px"> 
                                <?php }
                                if($validation->getError('profile_image1'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('profile_image1').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            
                            <div class="col-md-3">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Image 2
                                </label>
                                <?php
                                if($validation->getError('profile_image2'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('profile_image2').'</div>';
                                }
                                ?>
                                <input type="file"  name="profile_image2" class="form-control"  >
                                <?php  if(isset($foreman_data)){ ?>
                                <img src="<?php
                                if(isset($foreman_data)){
                                  echo $foreman_data['profile_image2'];
                                }
                                ?>" style="width:50px; height:50px">
                                <?php } ?>
                              </div>
                            </div>
                            
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  UPI ID  
                                </label>
                                <input type="file"  name="upi_id" class="form-control">
                                <?php
                                if($validation->getError('upi_id')) {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('upi_id').'</div>';
                                } ?>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Status:
                                </label>
                                <select class="select" name="status">
                                  <option>Select</option>
                                  <option value="Active" <?php if(isset($foreman_data) && $foreman_data['status'] == "Active"){echo "selected"; } ?>>Active</option>
                                  <option value="Inactive" <?php if(isset($foreman_data) && $foreman_data['status'] == "Inactive"){echo "selected"; } ?>>Inactive</option>
                                </select>
                                <?php
                                if($validation->getError('status')){
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('status').'</div>';
                                }
                                ?>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="<?php echo base_url();?>driver" class="btn btn-light">Cancel</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Settings Info -->
