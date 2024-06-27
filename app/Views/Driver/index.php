<?php

use App\Models\ForemanModel;
use App\Models\PartyModel;

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
                    <div class="col-md-5 col-sm-4">
                      <div class="form-wrap icon-form">
                        <span class="form-icon"><i class="ti ti-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search Deals">
                      </div>
                    </div>

                    <div class="col-md-7 text-sm-end">
                      <a href="<?= base_url('driver/assigned-list') ?>" class="btn btn-primary">Assigned List</a>
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

                <!-- Contact List -->
                <div class="table-responsive custom-table">
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>Driver Name</th>
                        <th>DL No.</th>
                        <th>Foreman Name</th>
                        <th>Contact No.</th>
                        <th>Trip Status</th>
                        <th>Current Trip</th>
                        <th>No. of Trips</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($driver_data) {
                        foreach ($driver_data as $driver) {

                          if (!$driver['assigned']) {
                            $assign_link = '<a href="' . base_url() . 'driver/assign-vehicle/' . $driver['id'] . '" class="btn btn-info btn-sm" role="button"><i class="fa fa-bus" data-bs-toggle="tooltip" aria-label="fa fa-bus" data-bs-original-title="Assign Vehicle To Driver"></i></a>';
                          } else
                            $assign_link = '<a href="' . base_url() . 'driver/unassign-vehicle/' . $driver['id'] . '" class="btn btn-success btn-sm" role="button"><i class="fa fa-bus" data-bs-toggle="tooltip" aria-label="fa fa-bus" data-bs-original-title="Unassign Vehicle From Driver"></i></a>';


                          if ($driver['status'] == 'Inactive') {
                            $status = '<span class="badge badge-pill bg-danger">Inactive</span>';
                          } else {
                            $status = '<span class="badge badge-pill bg-success">Active</span>';
                          }


                          $foremanModel = new ForemanModel();
                          $foremanModel = $foremanModel->where('id', $driver['foreman_id'])->first();

                          $created_at_str = '';
                          $updated_at_str = '';
                          if (isset($driver["created_at"])) {
                            $created_at_str = strtotime($driver["created_at"]);
                            $created_at_str = date('d-m-Y', $created_at_str);
                          }
                          if (isset($driver["updated_at"])) {
                            $updated_at_str = strtotime($driver["updated_at"]);
                            $updated_at_str = date('d-m-Y', $updated_at_str);
                          }

                          $party = new PartyModel();
                          $partydata = $party->where('id', $driver["name"])->first();
                          if ($partydata) {
                            $name = $partydata['party_name'];
                          } else {
                            $name = '';
                          }
                          if (isset($foremanModel["name"])) {
                            $foremandata = $party->where('id', $foremanModel["name"])->first();
                            if ($foremandata) {
                              $fname = $foremandata['party_name'];
                            } else {
                              $fname = '';
                            }
                          }
                          echo '
                                <tr>
                                    <td>
                                    <a href="' . base_url() . 'driver/edit/' . $driver['id'] . '" class="btn btn-warning btn-sm" role="button"><i class="ti ti-pencil"></i></a>
                                    <a href="' . base_url() . 'driver/view/' . $driver['id'] . '" class="btn btn-info btn-sm" role="button"><i class="ti ti-arrow-right"></i></a>
                                    
                                    ' . $assign_link . '

                                    <button type="button" onclick="delete_data(' . $driver["id"] . ')" class="btn btn-danger btn-sm"> <i class="ti ti-trash"></i></>
                                    </td>
                                    <td>' . $driver['name'] . '</td>
                                    <td>' . $driver['driving_licence_number'] . '</td>
                                    <td>' . @$fname . '</td>
                                    <td>' . $driver['mobile'] . '</td>
                                    <td>In Process</td>
                                    <td>Mumbai to Goa</td>
                                    <td>20</td>
                                    <td>' . $status . '</td>
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
  <script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>
  <script>
    function delete_data(id) {
      if (confirm("Are you sure you want to remove it?")) {
        window.location.href = "<?php echo base_url(); ?>/driver/delete/" + id;
      }
      return false;
    }
  </script>
</body>

</html>