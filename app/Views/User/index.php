<?php
use App\Models\OfficeModel;
use App\Models\RoleModel;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>
  <!-- Summernote CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.css">
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
                <div class="search-section">
                  <div class="row">
                    <!-- <div class="col-md-5 col-sm-4">
                      <div class="form-wrap icon-form">
                        <span class="form-icon"><i class="ti ti-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search Deals">
                      </div>
                    </div> -->
                    <div class="col-md-12 mb-3">
                      <?php echo makeListActions($currentController, $Action, 0, 1); ?>
                    </div>
                    <?php
                    $session = \Config\Services::session();
                    if ($session->getFlashdata('success')) {
                      echo '
                        <div class="alert alert-success">' . $session->getFlashdata("success") . '</div>
                        ';
                    }
                    ?>
                  </div>
                </div>
                <!-- /Search -->

                <!-- List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="userTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>User Role</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Home Branch</th>
                        <th>Status</th>
                        <th>Created at</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      if ($user_data) {
                        foreach ($user_data as $user) {
                          $token = isset($user['id']) ? $user['id'] : 0;
                          $officeModel = new OfficeModel();
                          $office  = $officeModel->where('id', $user["home_branch"])->where('status', 1)->first();
                          if (isset($office['name']) && $office['name'] != '') {
                            $office = $office['name'];
                          } else {
                            $office = '';
                          }
                          if ($user['status'] == 'Inactive') {
                            $status = '<span class="badge badge-pill bg-danger">Inactive</span>';
                          } else {
                            $status = '<span class="badge badge-pill bg-success">Active</span>';
                          }
                          $strtime = '';
                          if (isset($user["created_at"]) && $user["created_at"] != NULL) {
                            $strtime = strtotime($user["created_at"]);
                            $strtime = date('d-m-Y', $strtime);
                          }

                          $roleModel = new RoleModel();
                          $role  = $roleModel->where('id', $user["role_id"])->where('status_id', '1')->first();
                          $roleName = isset($role['role_name']) ? $role['role_name'] : '';
                      ?>
                          <tr>
                            <td><?php echo makeListActions($currentController, $Action, $token, 2); ?></td>
                            <!-- <td>                              
                                <a href="'.base_url().'user/edit/'.$user['id'].'" class="btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i></a>
                                <a href="'.base_url().'user/permission/'.$user['id'].'" class="btn btn-secondary btn-sm" role="button" title="Manage Permission of '.$user["first_name"].' '.$user["last_name"].'"><i class="ti ti-settings-cog"></i></a>

                                <button type="button" onclick="delete_data('.$user["id"].')" class="btn btn-danger btn-sm"> <i class="ti ti-trash"></i></>
                                </td>
                            <td><?php echo ucwords($user["usertype"]); ?></td> -->
                            <td><?php echo ucwords($roleName); ?></td>
                            <td><?php echo $user["first_name"] . ' ' . $user["last_name"]; ?></td>
                            <td><?php echo $user["email"]; ?></td>
                            <td><?php echo $user["mobile"]; ?></td>
                            <td><?php echo $office; ?></td>
                            <td><?php echo $status; ?></td>
                            <td><?php echo $strtime; ?></td>
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

  <script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>
  <script>
    function delete_data(id) {
      if (confirm("Are you sure you want to remove it?")) {
        window.location.href = "<?php echo base_url(); ?>/user/delete/" + id;
      }
      return false;
    }

    // datatable init
    if ($('#userTable').length > 0) {
      $('#userTable').DataTable({
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
        }
      });
    }
  </script>
</body>

</html>