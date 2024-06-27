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
                      $action = 'driver/create';
                    }else{
                      $action = 'driver/edit';
                    }

                    $userPermissions = new UserTypePermissionModel();
                    ?>
                      <form method="post" action="<?php echo base_url().$action; ?>" enctype="multipart/form-data">
                        <div class="settings-sub-header">
                          <h6>Add New Driver</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-md-6">
                              <input type="hidden" name="id" value="<?php
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
                                ?>
                                <input type="text" required name="name"  class="form-control" value="<?php if(isset($driver_data)){  echo $driver_data['name'];  }else{
                                  echo set_value('name'); 
                                }
                                ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Foreman Name <span class="text-danger">*</span>
                                </label>
                                <select class="select" name="foreman_id">
                                  <option>Select</option>
                                <?php
                                if (isset($foreman)) {
                                  foreach($foreman as $row)
                                  { ?>
                                    <option value="<?php echo $row["id"] ?>" 
                                    <?php echo set_select('foreman_id', $row['id'], False);
                                    if(isset($driver_data) && $driver_data['foreman_id'] == $row["id"]){ echo 'selected';  }
                                    ?> ><?php echo $row["name"] ?></option>  
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
                                <input type="radio" id="Employee" value="Employee" name="driver_type" <?php if(isset($driver_data) && $driver_data['driver_type'] == "Employee") {echo "checked"; } ?>> 
                                <label for="Employee">Employee</label>
                                <input type="radio" id="Contractor" value="Contractor" name="driver_type" <?php if(isset($driver_data) && $driver_data['driver_type'] == "Contractor") {echo "checked"; } ?>> 
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

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Phone number<span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="mobile" class="form-control" value="<?php
                                if(isset($driver_data)){
                                  echo $driver_data['mobile'];
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
                                  Alternate number
                                </label>
                                <input type="text"  name="alternate_number" class="form-control" value="<?php
                                if(isset($driver_data)){
                                  echo $driver_data['alternate_number'];
                                }else{
                                  echo set_value('alternate_number'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('alternate_number'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('alternate_number').'</div>';
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
                                if(isset($driver_data)){
                                  echo $driver_data['adhaar_number'];
                                }else{
                                  echo set_value('adhaar_number'); 
                                }
                                ?>">
                                <input type="hidden" required name="adhaar_id" class="form-control" value="<?php
                                if(isset($aadhaar_data)){
                                  echo $aadhaar_data['id'];
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

                            
                            <div class="col-md-3">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Aadhaar Image - Front
                                </label>
                                <input type="file"  name="adhaar_image_front" class="form-control" >
                                <img src="<?php
                                if(isset($aadhaar_data)){
                                  echo $aadhaar_data['adhaar_image_front'];
                                }
                                ?>" style="width:50px; height:50px">
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
                                <img  src="<?php
                                if(isset($aadhaar_data)){
                                   echo WRITEPATH.$aadhaar_data['adhaar_image_back'];
                                } ?>" style="width:50px; height:50px">
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
                                <img src="<?php
                                if(isset($driver_data)){
                                  echo $driver_data['profile_image1'];
                                }
                                ?>" style="width:50px; height:50px">
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
                                <img src="<?php
                                if(isset($driver_data)){
                                  echo $driver_data['profile_image2'];
                                }
                                ?>" style="width:50px; height:50px">
                              </div>
                            </div>
                            
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  UPI ID<span class="text-danger">*</span>
                                </label>
                                <input type="file"  name="upi_id" class="form-control" value="<?php
                                if(isset($usertype_data)){
                                  echo $usertype_data['upi_id'];
                                }
                                ?>">
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
                                </label>
                                <select class="select" name="state">
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

                            <div class="col-md-4">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Vehicle Type:
                                </label>
                                <select class="select" name="vehicle_type">
                                  <option>Select</option>
                                  <option value="Box truck" <?php if(isset($driver_data) && $driver_data['vehicle_type'] == "Box truck"){echo "selected"; } ?>>Box truck</option>
                                  <option value="" <?php if(isset($driver_data) && $driver_data['vehicle_type'] == "Bus"){echo "selected"; } ?>>Bus</option>
                                  <option value="Dump truck" <?php if(isset($driver_data) && $driver_data['vehicle_type'] == "Dump truck"){echo "selected"; } ?>>Dump truck</option>
                                  <option value="Pickups" <?php if(isset($driver_data) && $driver_data['vehicle_type'] == "Pickups"){echo "selected"; } ?>>Pickups</option>
                                  <option value="Rigid trucks" <?php if(isset($driver_data) && $driver_data['vehicle_type'] == "Rigid trucks"){echo "selected"; } ?>>Rigid trucks</option>
                                </select>
                                <?php
                                if($validation->getError('vehicle_type')){
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('status').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                  Status:
                                </label>
                                <select class="select" name="status">
                                  <option>Select</option>
                                  <option value="Active" <?php if(isset($driver_data) && $driver_data['status'] == "Active"){echo "selected"; } ?>>Active</option>
                                  <option value="Inactive" <?php if(isset($driver_data) && $driver_data['status'] == "Inactive"){echo "selected"; } ?>>Inactive</option>
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
                          <a href="<?php echo base_url();?>usertype" class="btn btn-light">Cancel</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Settings Info -->
