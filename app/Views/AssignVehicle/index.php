<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>

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

            <!-- Page Header -->
            <div class="page-header noprint">
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="page-title">Currently Assigned Vehicles </h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('driver') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Page Header -->

            <?php
            // print_r($list);
            ?>

            <div class="card main-card">
              <div class="card-body">
                <table class="table table-hover text-center table-bordered mb-3">
                  <thead>
                    <tr>
                      <th>Sl.No.</th>
                      <th>Vehicle RC Number</th>
                      <th>Driver's Name</th>
                      <th>Assigned On</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($list as $l) {
                    ?>
                      <tr>
                        <td><?= $i++ ?>.</td>
                        <td><?= $l['rc_number'] ?></td>
                        <td><?= $l['name'] ?></td>
                        <td><?= date('d-m-Y', strtotime($l['assign_date'])) ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>

                <button class="btn btn-danger no-print" onclick="window.print();">Print List</button>&nbsp;
                <a href="<?php echo base_url('driver'); ?>" class="btn btn-light no-print">Back</a>
              </div>

            </div>



          </div>

        </div>
      </div>
      <!-- /Page Wrapper -->


    </div>
    <!-- /Main Wrapper -->

    <!-- scripts link  -->
    <?= $this->include('partials/vendor-scripts') ?>

    <!-- page specific scripts  -->
    <script>

    </script>
</body>

</html>