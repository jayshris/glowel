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
                      $action = 'driverVehicleAssign/create/'.$driver_id;
                    ?>
                      <form method="post" id="driverform" action="<?php echo base_url().$action; ?>" enctype="multipart/form-data">
                        <div class="settings-sub-header">
                          <h6>Assign A Driver To Vehicle</h6>
                        </div>
                        <div class="profile-details">
                          <div class="row">
                            <div class="col-md-6">
                              <input type="hidden" name="driver_id" id="assign_id" value="<?php
                                if(isset($driver_id)){
                                  echo $driver_id;
                                }
                                ?>">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                	Vehicle Type <span class="text-danger">*</span>
                                </label>
                                <?php
                                if($validation->getError('vehicle_type'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('vehicle_type').'</div>';
                                }
                                if(isset($vehicle_types)){
                                ?>
                                <select class="dropdown selectopt" id="vehicle_type_id" name ="vehicle_type">
                                  <option>Select</option>
                                  <?php
                                    foreach ($vehicle_types as $key => $value) {
                                  ?>
                                  <option value="<?php echo $value["id"];?>">
                                  <?php echo ucwords($value["name"]); ?></option>
                                <?php
                                    }
                                  }
                                ?>
                                </select>
                              </div>
                                </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Vehicle RC No <span class="text-danger">*</span>
                                </label>
                                <select class="dropdown selectopt" id="vehicle_id" name ="vehicle_id">
                                <option>Select Vehicle Type First</option>
                                </select>
                                <?php
                                if($validation->getError('vehicle_id'))
                                {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('vehicle_id').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            <div class="col-md-6">    
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Vehicle Location 
                                </label>
                                <input type="text" name="vehicle_location" class="form-control readonly">
                              </div>
                            </div>
                          <div class="col-md-6">      
                            <div class="form-wrap">
                                <label class="col-form-label">
                                Vehicle Fuel Status
                                </label>
                                <input type="text" name="vehicle_fuel_status" class="form-control readonly">
                              </div>
                            </div>
                          
                            <div class="col-md-6">        
                            <div class="form-wrap">
                                <label class="col-form-label">
                                Vehicle KM Reading
                                </label>
                                <input type="number" step="0.01" name="vehicle_km_reading" class="form-control readonly">
                              </div>
                            </div>
                          </div>


                          </div>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="<?php echo base_url();?>driverVehicleAssign" class="btn btn-light">Cancel</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Settings Info -->
