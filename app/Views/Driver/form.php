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
                      $action = 'driver/create';
                    }else{
                      $action = 'driver/edit';
                    }

                    $userPermissions = new UserTypePermissionModel();
                    ?>
                      <form method="post" id="driverform" action="<?php echo base_url().$action; ?>" enctype="multipart/form-data">
                        <div class="settings-sub-header">
                          <h6>Add New Driver</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-md-6">
                              <input type="hidden" name="id" id="driver_id" value="<?php
                                if(isset($driver_data)){
                                  echo $driver_data['id'];
                                }
                                ?>">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Driver Name <span class="text-danger">*</span>
                                </label>
                                <?php
                                if($validation->getError('name'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('name').'</div>';
                                }
                                if(isset($partytpe)){
                                ?>
                                <select class="dropdown selectopt" name ="name" id="party_id">
                                  <option>Select</option>
                                  <?php
                                    foreach ($party_map_data as $key => $value) {
                                      $party = new PartyModel();
                                      $partydata = $party->where('id',$value['party_id'])->where(['status'=> 'Active'])->first();
                                      if(isset($partydata)){
                                  ?>
                                  <option value="<?php echo $partydata["id"];?>" <?php 
                                      if(isset($driver_data)){
                                        if($driver_data['name'] == $partydata["id"] ){
                                          echo "selected";
                                        }
                                      }
                                  ?>>
                                  <?php echo ucwords($partydata["party_name"]); ?></option>
                                <?php
                                    }
                                  }
                                ?>
                                </select>
                                <?php 
                                  } else {?>
                                  <p style="color:blue;font-size: 12px;">(Please create a party with party type as Driver)</p>
                                 <?php  }?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Foreman Name <span class="text-danger">*</span>
                                </label>
                                <select class="dropdown selectopt" id="forman_name" name="foreman_id">
                                  <option>Select</option>
                                <?php
                                if (isset($foreman)) {
                                  foreach($foreman as $row)
                                  { 
                                    $party = new PartyModel();
                                    $partydata = $party->where('id',$row["name"])->first();
                                    if($partydata){
                                      $name = $partydata['party_name'];
                                    }else{
                                      $name = '';
                                    }
                                    ?>
                                    <option value="<?php echo $row["id"] ?>" 
                                    <?php echo set_select('foreman_id', $row['id'], False);
                                    if(isset($driver_data) && $driver_data['foreman_id'] == $row["id"]){ echo 'selected';  }
                                    ?> ><?php echo $name ?></option>  
                                  <?php
                                  }
                                }
                                ?>
                                </select>
                                <?php
                                if($validation->getError('foreman_id'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('foreman_id').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label">
                                Driver Type <span class="text-danger">*</span>
                                </label>
                                <input type="radio" class="radio" id="Employee" value="Employee" name="driver_type" <?php if(isset($driver_data) && $driver_data['driver_type'] == "Employee") {echo "checked"; } ?>> 
                                <label for="Employee">Employee</label>
                                <input type="radio" class="radio" id="Contractor" value="Contractor" name="driver_type" <?php if(isset($driver_data) && $driver_data['driver_type'] == "Contractor") {echo "checked"; } ?> > 
                                <label for="Contractor">Contractor</label><br>
                                <?php
                                if($validation->getError('driver_type'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('driver_type').'</div>';
                                }
                                ?>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  DL No. <span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="driving_licence_number" class="form-control" value="<?php
                                if(isset($driver_data)){
                                  echo $driver_data['driving_licence_number'];
                                }else{
                                  echo set_value('driving_licence_number'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('driving_licence_number'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('driving_licence_number').'</div>';
                                }
                                ?>
                              </div>
                            </div>

                            <div class="target" id="target">
                            </div>

                            
                            <div class="col-md-3">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Aadhaar Image - Front
                                </label>
                                <input type="file"  name="adhaar_image_front" class="form-control" >
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
                                <?php
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
                              </div>
                            </div>
                            
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  UPI ID<span class="text-danger">*</span>
                                </label>
                                <input type="file"  name="upi_id" class="form-control">
                                <?php
                                if($validation->getError('upi_id'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('upi_id').'</div>';
                                }
                                ?>
                              </div>
                            </div>

                            <h5>Current Address</h5><br/><br/>
                            <div class="col-md-12">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Address<span class="text-danger">*</span>
                                </label>
                                <?php
                                if($validation->getError('address')){
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('address').'</div>';
                                }
                                ?>
                                <input type="text" required name="address" class="form-control" value="<?php
                                if(isset($driver_data)){
                                  echo $driver_data['address'];
                                }else{
                                  echo set_value('address'); 
                                }
                                ?>">
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  City:
                                </label>
                                <?php
                                if($validation->getError('city')){
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('city').'</div>';
                                }
                                ?>
                                <input type="text" required name="city" class="form-control" value="<?php
                                if(isset($driver_data)){
                                  echo $driver_data['city'];
                                }else{
                                  echo set_value('city'); 
                                }
                                ?>">
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  State<span class="text-danger">*</span>
                                </label><br>
                                <select class="dropdown selectopt" name="state">
                                  <option>Select</option>
                                <?php
                                if (isset($state)) {
                                  foreach($state as $row)
                                  { ?>
                                    <option value="<?php echo $row["state_id"] ?>" 
                                    <?php echo set_select('state', $row['state_id'], False); 
                                    if(isset($driver_data) && $driver_data['state'] == $row["state_id"]){
                                      echo "selected";
                                    }
                                    ?> ><?php echo $row["state_name"] ?></option>  
                                  <?php
                                  }
                                }
                                ?>
                                </select>
                                <?php
                                  if($validation->getError('state'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('state').'</div>';
                                  }
                                 ?>
                              </div>
                            </div>


                            <div class="col-md-4">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Zip:
                                </label>
                                <input type="text" required name="zip" class="form-control" value="<?php
                                if(isset($driver_data)){
                                  echo $driver_data['zip'];
                                }else{
                                  echo set_value('zip'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('zip')){
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('zip').'</div>';
                                }
                                ?>
                              </div>
                            </div>

                            

                            <div class="col-md-6">
                              <div class="form-wrap">
                                  <label class="col-form-label">
                                  Vehicle Type  
                                  </label><br>
                                  <?php
                                  $vehicletypesitem =[];
                                      if(isset($vehicletypes)){
                                        foreach($vehicletypes as $row => $type) {
                                          if(isset($vehicletypesdriver)){
                                            foreach ($vehicletypesdriver as $key => $value) {
                                              $vehicletypesitem[] = $value['vehicle_type_id'];
                                            }
                                          }
                                           ?>
                                          <input class="form-check-input" type="checkbox" name="vehicle_types[]" id="id_<?php echo $type["id"]; ?>" value="<?php echo $type["id"]; ?>"
                                          <?php  if(in_array($type['id'], $vehicletypesitem)){
                                            echo "checked";} 
                                          ?>><label for="id_<?php echo $type["id"]; ?>" class="col-form-label" style=" margin: 0px 20px 0px 3px;">
                                          <?php echo ucwords($type["name"]); ?></label>
                                          <?php
                                        }
                                      }
                                      if($validation->getError('vehicle_type')){
                                          echo '<div class="alert alert-danger mt-2">'.$validation->getError('vehicle_type').'</div>';
                                      }
                                      ?>
                              </div>
                            </div>
                            <?php if($last != 'create'){ ?>
                            <div>
                                <input type = "checkbox" id="approve" class="form-check-input"  name="approve" <?php if(isset($driver_data)){
                                  if($driver_data['approved'] == 1){
                                        echo 'checked';
                                  } } ?> value="1"> <label for="approve"> Approved</label> 
                            </div>
                           <?php } ?>

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
