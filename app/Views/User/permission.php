<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>
  <!-- Feathericon CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/feather.css">


</head>

<body>

  <!-- Main Wrapper -->
  <div class="main-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content">
        <div class="row">
          <div class="col-md-12">

            <?= $this->include('partials/page-title') ?>
            <?php $validation = \Config\Services::validation(); ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <?php
                  $session = \Config\Services::session();
                  if($session->getFlashdata('success'))
                  {
                    echo '<div class="alert alert-success">'.$session->getFlashdata("success").'</div>';
                  }
                  $router = \Config\Services::router();
                ?>
                
                <?php 
                echo form_open_multipart(base_url().'user/'.$router->methodName().(($token>0) ? '/'.$token : ''), ['name'=>'actionForm', 'id'=>'actionForm']);
                //echo form_open_multipart(base_url().$router->controllerName().'/'.$router->methodName().(($token>0) ? '/'.$token : ''), ['name'=>'actionForm', 'id'=>'actionForm']);
                ?>
                  <div class="card main-card">
                    <div class="card-body">
                      <div class="search-section">
                        <div class="row">
                          <div class="col-md-5 col-sm-4">
                            <div class="role-name">
                              <h4>Set Permission to <span class="text-danger"><?php echo $userdata["first_name"].' '.$userdata["last_name"];?></span></h4>
                            </div>						
                          </div>		
                          <div class="col-md-7 col-sm-8">					
                            <div class="export-list text-sm-end">
                              <ul>
                                <li>
                                  <label class="checkboxs"><input type="checkbox" id="select-all"><span class="checkmarks"></span>Allow All Modules</label>
                                </li>						
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Roles List -->
                      <div class="table-responsive custom-table">
                        <div id="permission_list_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                          <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                          </div>
                          
                          <div class="row dt-row">
                            <div class="col-sm-12 table-responsive">
                              <table class="table dataTable no-footer" id="permission_lists" style="width: 1346px;">
                                <thead class="thead-light">
                                  <tr>
                                    <th class="no-sort">
                                      <!-- <label class="checkboxs">
                                        <input type="checkbox" id="select-all"><span class="checkmarks"></span>
                                      </label> -->
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="permission_list" rowspan="1" colspan="1" style="width: 154px;" aria-label="Modules: activate to sort column ascending">Modules</th>
                                    <th class="sorting" tabindex="0" aria-controls="permission_list" rowspan="1" colspan="1" style="width: 210px;" aria-label="Sub Modules: activate to sort column ascending">Sub Modules</th>
                                    <th class="no-sort">Create</th>
                                    <th class="no-sort">Edit</th>
                                    <th class="no-sort">Preview</th>
                                    <th class="no-sort">Delete</th>
                                    <th class="no-sort">Permission</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <?php 
                                  $assignedModules = [];
                                  if(!empty($user_modules)){
                                    foreach($user_modules as $um){
                                      $assignedModules[$um['module_id']][$um['section_id']] = $um['section_id'];
                                    }
                                  }

                                  if(!empty($user_role_modules)){
                                    foreach($user_role_modules as $r){//echo __LINE__.'<br><pre>';print_r($assignedModules);die;
                                      $parentId = isset($r['module_id']) ? $r['module_id'] : '';
                                      $parentName = isset($r['parent_name']) ? $r['parent_name'] : '';
                                      $parentSection = isset($r['sections']) ? $r['sections'] : [];
                                      $parentChecked = isset($assignedModules[$parentId]) ? 'checked' : '';
                                  ?>
                                  <tr>
                                    <td class="sorting_1">
                                      <label class="checkboxs">
                                        <input type="checkbox" name="module[<?php echo $parentId;?>]" value="<?php echo $parentId;?>" <?php echo $parentChecked;?>>
                                        <span class="checkmarks"></span>
                                      </label>
                                    </td>
                                    <td><?php echo $parentName;?></td>
                                    <td><?php echo $parentName;?></td>
                                    <td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label></td>
                                    <td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label></td>
                                    <td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label></td>
                                    <td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label></td>
                                  </tr>

                                  <?php 
                                  $sub_module = isset($r['sub_module']) ? $r['sub_module'] : [];
                                  if(!empty($sub_module)){
                                    foreach($sub_module as $s){
                                      $moduleId = isset($s['module_id']) ? $s['module_id'] : '';
                                      $moduleName = isset($s['module_name']) ? $s['module_name'] : '';
                                      $moduleSection = isset($s['sections']) ? $s['sections'] : [];
                                      $moduleChecked = isset($assignedModules[$moduleId]) ? 'checked' : '';
                                  ?>
                                  <tr>
                                    <td class="sorting_1">
                                      <label class="checkboxs">
                                        <input type="checkbox" name="module[<?php echo $moduleId;?>]" value="<?php echo $moduleId;?>" <?php echo $moduleChecked;?>>
                                        <span class="checkmarks"></span>
                                      </label>
                                    </td>
                                    <td><?php //echo $moduleName;?></td>
                                    <td><?php echo $moduleName;?></td>
                                    <?php 
                                    if(!empty($moduleSection)){ 
                                      foreach($moduleSection as $ms){
                                        $sectionChecked = (isset($assignedModules[$moduleId]) && isset($assignedModules[$moduleId][$ms])) ? 'checked' : '';
                                    ?>
                                    <td>
                                      <label class="checkboxs">
                                        <input type="checkbox" name="module[<?php echo $moduleId;?>][sections][<?php echo $ms;?>]" value="<?php echo $ms;?>" <?php echo $sectionChecked;?>>
                                        <span class="checkmarks"></span>
                                      </label>
                                    </td>
                                    <?php } } ?>
                                  </tr>
                                  <?php } } } } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="submit-button"><br>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <a href="<?php echo base_url().$currentController;?>" class="btn btn-light">Cancel</a>
                      </div>
                    </div>
                  </div>
                <?php echo form_close();?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php echo $this->include('partials/vendor-scripts') ?>

  <script src="<?php echo base_url(); ?>assets/js/profile-upload.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

  <script type="text/javascript">
    $('#permission_lists').dataTable({
      "bProcessing": true,
      "sAutoWidth": false,
      "bDestroy":true,
      "sPaginationType": "bootstrap", // full_numbers
      "iDisplayStart ": 10,
      "iDisplayLength": 10,
      "bPaginate": false, //hide pagination
      "bFilter": false, //hide Search bar
      "bInfo": false, // hide showing entries
    });

    $.getBranch = function() {
      $('#home_branch').html('<option>Select Home Branch/Office</option>');
      $('#branches').html('');

      var company_id = $('#company_id').val();
      if(company_id>0){
        $.ajax({
          method: "POST",
          url: '<?php echo base_url('user/getHomeBranch');?>',
          data: {
            company_id: company_id
          },
          success: function(resp) {
            $('#home_branch').html(resp);
          }
        });

        $.ajax({
          method: "POST",
          url: '<?php echo base_url('user/getBranches');?>',
          data: {
            company_id: company_id
          },
          success: function(resp) {
            $('#branches').html(resp);
          }
        });
      }
    }

    $.chkdBranch = function() {
      $('input:checkbox').removeAttr('checked');
      var home_branch = $('#home_branch').val();
      if(home_branch>0){
        $('#id_'+home_branch).attr('checked','checked');
      }
    }
  </script>
</body>
</html>