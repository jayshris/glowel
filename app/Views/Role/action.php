<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo ((isset($page_title) && !empty($page_title)) ? $page_title.' - ' : '').PROJECT;?></title>
    <?php echo $this->include('partials/title-meta') ?>
    <?php echo $this->include('partials/head-css') ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/feather.css">
  </head>

<body>
  <div class="main-wrapper">
    <?php echo $this->include('partials/menu');?>

    <div class="page-wrapper">
      <div class="content">
        <div class="row">
          <div class="col-md-12">

            <?php echo $this->include('partials/page-title');?>
            <?php $validation = \Config\Services::validation(); ?>

            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <?php
                $session = \Config\Services::session();
                if($session->getFlashdata('success'))
                {
                    echo '
                    <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
                    ';
                }
                ?>

                <div class="card">
                  <div class="card-body">
                    <div class="settings-form">
                      <?php echo form_open_multipart(base_url().$currentController.'/'.$currentMethod.((isset($token) && $token>0) ? '/'.$token : ''), ['name'=>'actionForm', 'id'=>'actionForm']);?>
                        <div class="settings-sub-header">
                          <h6><?php echo (isset($page_title) && !empty($page_title)) ? $page_title : '';?></h6>
                        </div>
                        
                        <div class="profile-details">
                          <div class="row">
                            <!-- <div class="col-md-6">
                              <div class="form-wrap">
                                  <label class="col-form-label">
                                    Role Name <span class="text-danger">*</span>
                                  </label>
                                  <?php
                                  if($validation->getError('role_name'))
                                  {
                                      echo '<div class="alert alert-danger mt-2">'.$validation->getError('role_name').'</div>';
                                  }
                                  ?>
                                  <input type="text" required name="role_name" class="form-control"  value="<?php if(isset($row)){ echo $row['role_name']; } ?>">
                              </div>
                            </div> -->

                            <div class="col-md-6">
                              <div class="form-wrap">
                                <?php 
                                $label = 'Role Name';
                                echo '<label class="col-form-label">'.$label.' <span class="text-danger">*</span></label>';
                                echo form_input(['name'=>'role_name','id'=>'role_name','value'=>set_value('role_name', (isset($row['role_name']) ? $row['role_name'] : '')),'class'=>'form-control '.(($validation->getError('role_name')) ? 'is-invalid' : ''),'placeholder'=>$label,'autocomplete'=>'off']);
                                echo ($validation->getError('role_name')) ? '<div class="invalid-feedback">'.$validation->getError('role_name').'</div>' : '';
                                ?>
                              </div>
                            </div>

                            <?php if($token>0) { ?>
                            <div class="col-md-6">
                              <div class="form-wrap">
                                <?php 
                                $label = 'Company Status';
                                echo '<label class="col-form-label">'.$label.' <span class="text-danger">*</span></label>';
                                echo form_dropdown('form[status_id]', $statusList, set_value('form[status_id]', (isset($detail->status_id) ? $detail->status_id : '')),'id="status_id" required="required" class="form-control select2 '.((form_error('form[name]')) ? 'is-invalid' : '').'"');
                                echo (form_error('form[name]')) ? '<div class="invalid-feedback">'.form_error('form[name]').'</div>' : '';
                                ?>
                              </div>
                            </div>
                            <?php } ?>
                            
                          </div>
                        </div>

                        <div class="submit-button">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                          <a href="<?php echo base_url().$currentController;?>" class="btn btn-light">Cancel</a>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?= $this->include('partials/vendor-scripts') ?>

  <script src="<?php echo base_url(); ?>assets/js/profile-upload.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

  <script type="text/javascript">
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