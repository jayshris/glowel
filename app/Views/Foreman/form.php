<?php $validation = \Config\Services::validation(); 
use App\Models\UserTypePermissionModel;
use App\Models\PartyModel;
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

                    $userPermissions = new UserTypePermissionModel();
                    ?>
                      <form method="post" action="<?php echo base_url().$action; ?>" enctype="multipart/form-data">
                        
                        <div class="profile-details">
                          <div class="row">
                              <input type="hidden" name="id" id="foreman_id"  value="<?php
                                if(isset($foreman_data)){
                                  echo $foreman_data['id'];
                                }
                                ?>">
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Foreman Name <span class="text-danger">*</span>
                                </label>
                                <?php 
                                if(isset($partytpe)){ ?>
                                <select class="dropdown selectopt" name ="name" id="party_id">
                                  <option>Select</option>
                                <?php
                                  foreach ($party_map_data as $key => $value) {
                                    $party = new PartyModel();
                                    $partydata = $party->where('id',$value['party_id'])->where(['status'=> 'Active'])->first();
                                    if(isset($partydata)){
                                ?>
                                  <option value="<?php echo $partydata["id"];?>" 
                                  <?php 
                                      if(isset($foreman_data)){
                                        if($foreman_data['name'] == $partydata["id"] ){
                                          echo "selected";
                                        }
                                      }
                                  ?>
                                  ><?php echo ucwords($partydata["party_name"]); ?></option>
                                <?php
                                    }
                                  }
                                ?>
                                </select>
                                <?php 
                                  } else {?>
                                  <p style="color:blue;font-size: 12px;">(Please create a party with party type as Driver)</p>
                                 <?php  }?>
                                <?php
                                if($validation->getError('name'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('name').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            <div class="target" id="target">
                            </div>
                            
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Bank A/C No:
                                </label> 
                                <input type="text"   name="bank_account_number" class="form-control" value ="<?php
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
                                <input type="text"   name="bank_ifsc_code" class="form-control" value="<?php
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
                                <input type="file" name="adhaar_image_back" class="form-control" >
                                <?php  if(isset($aadhaar_data)){ ?>
                                
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

                            

                          </div>
                        </div>
                        <?php if($last != 'create'){ ?>
                            
                        <div>
                            <input type = "checkbox" id="approve" class="form-check-input"  name="approve" <?php if(isset($foreman_data)){
                              if($foreman_data['approved'] == 1){
                                    echo 'checked';
                              } } ?> value="1"> <label for="approve"> Approved</label> 
                        </div>
                       <?php } ?>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="<?php echo base_url();?>foreman" class="btn btn-light">Cancel</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Settings Info -->
