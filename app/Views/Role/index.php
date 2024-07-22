<?php
use App\Models\OfficeModel;
?>
<!DOCTYPE html>
<html lang="en">
  <title><?php echo ((isset($page_title) && !empty($page_title)) ? $page_title.' - ' : '').PROJECT;?></title>
  <head>
    <?= $this->include('partials/title-meta') ?>
    <?= $this->include('partials/head-css') ?>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.css">
  </head>

<body>
  <div class="main-wrapper">

    <?php echo $this->include('partials/menu');?>

   <div class="page-wrapper">
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <?= $this->include('partials/page-title') ?>
            
            <div class="card main-card">
              <div class="card-body">
                <div class="search-section">
                  <div class="row">
                    <div class="col-md-11 col-sm-4">
                      <div class="role-name">
                        <h4>Role List</span></h4>
                      </div>
                    </div>
                    <div class="col-md-1 col-sm-4">
                      <?php echo makeListActions($currentController, $Action, 0, 1);?>
                    </div>
                    <?php
                    $session = \Config\Services::session();
                    if($session->getFlashdata('success'))
                    {
                        echo '
                        <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
                        ';
                    }
                    ?>                    
                  </div>
                </div>
                <!-- /Search -->

                <!-- List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="deal_list">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>Role Name</th>
                        <th>Status</th>
                        <th>Timestamp</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                        if(!empty($rows))
                        {
                          foreach($rows as $row)
                          {
                            $token = isset($row['id']) ? $row['id'] : 0;
                            if($row['status_id'] == '2'){
                              $status= '<span class="badge badge-pill bg-danger">Inactive</span>';
                            }else{
                              $status ='<span class="badge badge-pill bg-success">Active</span>';
                            }

                            $strtime='';
                            if(isset($row["modify_date"]) && $row["modify_date"] != NULL){
                              $strtime = strtotime($row["modify_date"]);
                              $strtime = date('d-M-Y',$strtime);
                            }
                            ?>                            
                              <tr>
                              <td><?php echo makeListActions($currentController, $Action, $token, 2);?></td>
                                <td><?php echo ucwords($row['role_name']);?></td>
                                <td><?php echo $status;?></td>
                                <td><?php echo $strtime;?></td>
                              </tr>
                          <?php }
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!-- List -->

                <div class="row align-items-center">
                  <div class="col-md-6">
                    <div class="datatable-length"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="datatable-paginate"></div>
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

  <script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
  <script>
    function delete_data(id)
    {
        if(confirm("Are you sure you want to remove it?"))
        {
            window.location.href="<?php echo base_url(); ?>/user/delete/"+id;
        }
        return false;
    }
  </script>
</body>
</html>