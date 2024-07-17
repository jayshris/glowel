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

                <div class="search-section">
                  <div class="row">
                    <!-- <div class="col-md-5 col-sm-4">
                      <div class="form-wrap icon-form">
                        <span class="form-icon"><i class="ti ti-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search Deals">
                      </div>
                    </div> -->
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

                <div class="row">
                  <div class="col-md-9">
                    <form method="post" action="<?php echo base_url() ?>company" >
                          <!-- Search -->
                          <div class="search-section">
                            <div class="row">
                              <div class="col-md-3 col-sm-3  ">
                                  <label class="col-form-label">
                                    Search By Status:
                                  </label>
                              </div>
                              <div class="col-md-3 col-sm-3">
                                  <div class="form-wrap">
                                        <select class="form-control select" name="status">
                                        <option>Select</option>
                                          <option value="Active">Active</option>
                                          <option value="Inactive">Inactive</option>
                                        </select>
                                  </div>
                              </div>
                              <div class="col-md-2 col-sm-2">
                                <input type="submit" value="Submit" class="btn btn-primary">
                              </div>
                              <div class="col-md-3"><?php //echo __LINE__.'<pre>';print_r($Action);die;?>
                                  <!-- <a href="<?php echo base_url();?>company/create" class="btn btn-dark " role="button">Add New Company</a> -->
                                  <?php echo makeListActions($currentController, $Action, 0, 1);?>
                              </div>
                            </div>
                          </div>
                    </form>
                  </div>
                 
                </div>
                
                <div class="table-responsive custom-table">
                  <table class="table" id="company-table">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Added</th>
                        <th>Updated</th>
                        <th>Status</th>
                        <th>Added IP Address</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      if($company_data){
                        foreach($company_data as $company){
                          $token = isset($company['id']) ? $company['id'] : 0;
                          if($company['status'] == 'Inactive'){
                            $status= '<span class="badge badge-pill bg-danger">Inactive</span>';
                          }else{
                            $status ='<span class="badge badge-pill bg-success">Active</span>';
                          }
                          $created_at_str = '';
                          $updated_at_str='';
                          if(isset($company["created_at"])){
                            $created_at_str = strtotime($company["created_at"]) ;
                            $created_at_str = date('d-m-Y',$created_at_str);
                          }
                          if(isset($company["updated_at"])){
                            $updated_at_str = strtotime($company["updated_at"]);
                            $updated_at_str = date('d-m-Y',$updated_at_str);
                          }

                          if($company['status'] == 'Active'){
                            $bun = '<a href="company/status/'.$company['id'].'" class="btn btn-danger btn-sm" role="button">Inactive</a>';
                          }else{
                            $bun = '<a href="company/status/'.$company['id'].'" class="btn btn-success btn-sm" role="button">Active</a>';
                          }
                      ?>
                      <tr>
                        <td><?php echo makeListActions($currentController, $Action, $token, 2);?></td>
                        <!-- <td>
                          <?php echo $bun;?>
                          <a href="<?php echo base_url().'company/edit/'.$company['id'];?>" class="btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i></a>
                          <button type="button" onclick="delete_data('<?php echo $company['id'];?>')" class="btn btn-secondary btn-sm"> <i class="ti ti-trash"></i></>
                        </td> -->
                        <td><?php echo $company["name"];?></td>
                        <td><?php echo $created_at_str;?></td>
                        <td><?php echo $updated_at_str;?></td>
                        <td><?php echo $status;?></td>
                        <td><?php echo $company["creator_ip_address"];?></td>
                      </tr>
                      <?php } } ?>
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

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php echo $this->include('partials/vendor-scripts');?>

  <script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
  <script>
    function delete_data(id){
      if(confirm("Are you sure you want to remove it?")){
        window.location.href="<?php echo base_url(); ?>/company/delete/"+id;
      }
      return false;
    }
    // datatable init
    if ($('#company-table').length > 0) {
        $('#company-table').DataTable({
          "bFilter": false,
          "bInfo": false,
          "autoWidth": true,
          "language": {
            search: ' ',
            sLengthMenu: '_MENU_',
            searchPlaceholder: "Search",
            info: "_START_ - _END_ of _TOTAL_ items",
            "lengthMenu": "Show _MENU_ entries",
            paginate: {
              next: 'Next <i class=" fa fa-angle-right"></i> ',
              previous: '<i class="fa fa-angle-left"></i> Prev '
            },
          },
          initComplete: (settings, json) => {
            $('.dataTables_paginate').appendTo('.datatable-paginate');
            $('.dataTables_length').appendTo('.datatable-length');
          },
          "aoColumnDefs": [
              { "bSortable": false, "aTargets": [ 0,4] } 
          ]
        });
      }
  </script>
</body>
</html>