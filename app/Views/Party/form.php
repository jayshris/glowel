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
                      $action = 'Party/create';
                    }else{
                      $action = 'Party/edit/'.$pc_data['id'];
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
                                    Party Type <span class="text-danger">*</span>
                                  </label>
                                  <br/>
                                  <?php foreach ($partytype as $pt) { ?>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input checkbx" type="checkbox" name="party_type_id[]" id="chk<?= $pt['name'] ?>" 
                                      value="<?= $pt['id'] ?>" 
                                      <?= !isset($pc_data) ? 'required' : '' ?> 
                                      <?= isset($selected_party_type_ids) && in_array($pt['id'], $selected_party_type_ids) ? 'checked' : '' ?>
                                      >
                                      <label class="form-check-label" for="chk<?= $pt['name'] ?>"><?= $pt['name'] ?></label>
                                    </div>
                                  <?php } ?>

                                  <!-- <select class="select" required class="js-example-basic-multiple" name="party_type_id[]" multiple="multiple">
                                    <option>Select</option>
                                    <?php
                                    if(isset($partytype)){
                                      foreach($partytype as $row)
                                      { ?> 
                                      <option value="<?php echo $row["id"];?>"  <?php 
                                      if(isset($selected_party_type_ids)){
                                        if(in_array($row['id'],$selected_party_type_ids)){
                                          echo 'selected';
                                        }  
                                      }
                                             ?>><?php echo ucwords($row["name"]); ?>
                                      </option>
                                      <?php
                                      }
                                    }
                                    ?>
                                  </select> -->
                                  <?php
                                    if($validation->getError('party_type_id'))
                                    {
                                        echo '<div class="alert alert-danger mt-2">'.$validation->getError('party_type_id').'</div>';
                                    }
                                  ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Party Name <span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="party_name" class="form-control" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['party_name'];
                                }else{
                                  echo set_value('party_name'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('party_name')) {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('party_name').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                 Owner Name 
                                </label>
                                <input type="text" name="business_owner_name" class="form-control" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['business_owner_name'];
                                }else{
                                  echo set_value('business_owner_name'); 
                                }
                                ?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Contact Person <span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="contact_person" class="form-control" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['contact_person'];
                                }else{
                                  echo set_value('contact_person'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('contact_person')) {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('contact_person').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Accounts Person  
                                </label>
                                <input type="text"   name="accounts_person" class="form-control" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['accounts_person'];
                                }else{
                                  echo set_value('accounts_person'); 
                                }
                                ?>"> 
                              </div>
                            </div>
                            
                            <div class="col-md-12">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                 Address <span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="business_address" class="form-control" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['business_address'];
                                }else{
                                  echo set_value('business_address'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('business_address')) {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('business_address').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                City  
                                </label>
                                <input type="text"   name="city" class="form-control" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['city'];
                                }else{
                                  echo set_value('city'); 
                                }
                                ?>"> 
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                  <label class="col-form-label">
                                    State 
                                  </label>
                                  <select class="select" name = "state">
                                    <option>Select</option>
                                    <?php
                                          if(isset($state)){
                                            foreach($state as $row)
                                            { ?>
                                            <option value="<?php echo $row["state_id"]; ?>" 
                                            <?php
                                            if(isset($pc_data['state_id'])){
                                              if($pc_data['state_id'] == $row['state_id']){
                                                echo 'selected';
                                              }
                                            }
                                              ?>><?php echo ucwords($row["state_name"]); ?></option>
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
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Postcode  
                                </label>
                                <input type="text"   name="postcode" class="form-control" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['postcode'];
                                }else{
                                  echo set_value('postcode'); 
                                }
                                ?>"> 
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                 Phone number <span class="text-danger">*</span>
                                </label>
                                <input type="text" required name="primary_phone" class="form-control" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['primary_phone'];
                                }else{
                                  echo set_value('primary_phone'); 
                                }
                                ?>">
                                <?php
                                if($validation->getError('primary_phone')) {
                                    echo '<div class="alert alert-danger mt-2">'.$validation->getError('primary_phone').'</div>';
                                }
                                ?>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Other Phone number 
                                </label>
                                <input type="text"   name="other_phone" class="form-control" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['other_phone'];
                                }else{
                                  echo set_value('other_phone'); 
                                }
                                ?>"> 
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Email  
                                </label>
                                <input type="text"   name="email" class="form-control" value="<?php
                                if(isset($pc_data)){
                                  echo $pc_data['email'];
                                }else{
                                  echo set_value('email'); 
                                }
                                ?>"> 
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <label class="col-form-label">
                                Business type  
                                </label>
                                <select class="select" name = "business_type_id" id="business_type_id">
                                    <option>Select</option>
                                    <?php
                                    if(isset($businesstype)){
                                      foreach($businesstype as $row)
                                      { ?>
                                          <option value="<?php echo $row["id"];?>" <?php
                                          if(isset($pc_data['business_type_id'])){
                                            if($pc_data['business_type_id'] == $row['id']){
                                              echo 'selected';
                                            }
                                          } ?>
                                        ><?php echo ucwords($row["company_structure_name"]); ?></option>
                                      <?php
                                      }
                                    }
                                    ?>
                                  </select> 
                              </div>
                            </div>
                            <div class="target row" id="target">
                            </div>
                            <?php if ($last != 'create') { ?>
                              <div>
                                <input type="checkbox" id="approve" class="form-check-input" name="approve" 
                                <?php if (isset($pc_data)) {
                                    if ($pc_data['approved'] == 1) {
                                      echo 'checked';
                                    }
                                  } ?> value="1"> <label for="approve"> Approved</label>
                              </div>
                            <?php } ?>
                            

                          </div>
                        </div>
                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="<?php echo base_url();?>party" class="btn btn-light">Cancel</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
