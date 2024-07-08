<?php 
    $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)); 
    $last = array_pop($uriSegments);
    if($last == 'create'){
        $action = 'units/create';
        $title = 'Add Unit';
    }else{
        $action = 'units/edit/'.$last;
        $title = 'Edit Unit';
    } 
?>
<div class="row">
    <div class="col-md-12"> 
    <?= $this->include('partials/page-title') ?> 
    <?php $validation = \Config\Services::validation(); ?> 
    <div class="row">
        <div class="col-xl-12 col-lg-12">
        <!-- Units Info -->
        <div class="card">
            <div class="card-body">
            <div class="settings-form"> 
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url().$action; ?>"> 
                <div class="settings-sub-header">
                    <h6><?= $title; ?></h6>
                </div>
                <div class="profile-details">
                    <div class="row g-3">
                    <div class="col-md-3">
                        <label class="col-form-label">Unit Name <span class="text-danger">*</span></label>
                        <input type="text" required name="unit" value="<?php
                                if(isset($data)){
                                  echo $data['unit'];
                                }else{
                                  echo set_value('unit'); 
                                }
                                ?>" class="form-control">
                         <?php
                        if ($validation->getError('unit')) {
                        echo '<br><span class="text-danger mt-2">' . $validation->getError('unit') . '</span>';
                        }
                        ?>        
                    </div>   
                    </div>
                    <br>
                </div>
                <div class="submit-button">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="<?php echo base_url();?>units" class="btn btn-light">Cancel</a>
                </div>
                </form> 
            </div>
            </div>
        </div>
        <!-- /Units Info -->

        </div>
    </div> 
  </div>
</div>