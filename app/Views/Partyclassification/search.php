<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>
  <!-- Summernote CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.css">
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
            
            <div class="card main-card">
              <div class="card-body">

                <!-- Search -->
                <form method="post" action="<?php echo base_url() ?>partyclassification/searchByStatus" >
                      <!-- Search -->
                      <div class="search-section">
                        <div class="row">
                          <div class="col-md-2 col-sm-3">
                              <label class="col-form-label">
                                Search By Status
                              </label>
                          </div>
                          <div class="col-md-3 col-sm-3">
                              <div class="form-wrap">
                                    <select class="form-control" name="status">
                                    <option>Select</option>
                                      <option value="Active">Active</option>
                                      <option value="Inactive">Inactive</option>
                                    </select>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-3">
                            <input type="submit" value="Submit" class="btn btn-primary">
                          </div>
                        </div>
                      </div>
                  </form>
                <?php

$session = \Config\Services::session();
if($session->getFlashdata('success')) {
    echo '
    <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
    ';
}
?>
                <!-- Contact List -->
                <div class="table-responsive custom-table">
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($partyclass_data)
                        {
                            foreach($partyclass_data as $party)
                            {
                              if($party['status'] == 'Inactive'){
                                $status= '<span class="badge badge-pill bg-danger">Inactive</span>';
                              }else{
                                $status ='<span class="badge badge-pill bg-success">Active</span>';
                              }

                                echo '
                                <tr>
                                    <td>
                                    <a href="'.base_url().'partyclassification/edit/'.$party['id'].'"  class="btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i></a>

                                    <button type="button"   onclick="delete_data('.$party["id"].')" class="btn btn-secondary btn-sm"> <i class="ti ti-trash"></i></button>
                                    </td>
                                    
                                    <td>'.$party['name'].'</td>
                                    <td>'.$status.'</td>
                                </tr>';
                            }
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <div class="datatable-length"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="datatable-paginate"></div>
                  </div>
                </div>
                <!-- /Contact List -->

              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
    <!-- /Page Wrapper -->


  </div>
  <!-- /Main Wrapper -->


  <?= $this->include('partials/vendor-scripts') ?>
  <!-- Summernote JS -->
  <script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
  <script>
    function delete_data(id)
    {
        if(confirm("Are you sure you want to remove it?"))
        {
            window.location.href="<?php echo base_url(); ?>/partyclassification/delete/"+id;
        }
        return false;
    }
</script>
</body>

</html>