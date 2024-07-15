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
            <div class="page-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="page-title">Stock Report Products</h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('stock-report-products') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Page Header -->

            <form method="post"  action="<?php echo base_url('stock-report-products'); ?>">
              <div class="card main-card">
                <div class="card-body">
                  <h4>Search / Filter</h4>
                  <hr>
                  <div class="row mt-2">

                    <div class="col-md-4">
                      <div class="form-wrap">
                        <label class="col-form-label">Category Name</label>
                        <select class="form-select" name="product_category" required aria-label="Default select example">
                          <option value="">Select</option> 
                          <?php foreach($product_categories as $v){ ?>
                            <option value="<?= $v['id'] ?>" <?php if(isset($_POST['product_category']) && ($_POST['product_category'] == $v['id'])) { ?> selected  <?php } ?>><?= $v['cat_name']?></option>
                          <?php } ?> 
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                              <label class="col-form-label">From Date<span class="text-danger">*</span></label>
                              <input type="date" required name="from_date" id="from" value="<?= date('Y-m-d') ?>" class="form-control datepicker">
                    </div>

                    <div class="col-md-4">
                              <label class="col-form-label">To Date<span class="text-danger">*</span></label>
                              <input type="date" required name="to_date" id="to" value="<?= date('Y-m-d') ?>" class="form-control datepicker">
                    </div>

                    <div class="col-md-7">
                      <button class="btn btn-info mt-4">Search</button>&nbsp;&nbsp;
                      <a href="./stock-report-products" class="btn btn-warning mt-4">Reset</a>&nbsp;&nbsp; 
                    </div>
                  </div>
                </div>
              </div>
            </form>


            <div class="card main-card">
              <div class="card-body">

                <!-- Search -->
                <div class="">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 mb-3">
                      <?php
                      $session = \Config\Services::session();

                      if ($session->getFlashdata('success')) {
                        echo '<div class="alert alert-success">' . $session->getFlashdata("success") . '</div>';
                      }

                      if ($session->getFlashdata('danger')) {
                        echo '<div class="alert alert-danger">' . $session->getFlashdata("danger") . '</div>';
                      }
                      ?>
                    </div> 

                    <div class="table-responsive custom-table">
                      <table class="table" id="report-table">
                        <thead class="thead-light">
                          <tr>
                            <th>Sr. No</th>
                            <th>Product Name</th> 
                            <th>Opening Balance Quantity</th> 
                            <th>Closing Balance Quantity</th> 
                          </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($data)){ ?>
                                <?php
                                $i = 1;
                                foreach ($data as $val) { ?>
                                    <tr>
                                      <td><?= $i++ ?>.</td>  
                                      <td><?= ($val['product_name']) ? $val['product_name'] : '-'; ?></td>  
                                      <td><?= ($val['openqty']) ? $val['openqty'] : '-'; ?></td>
                                      <td><?= ($val['closeqty']) ? $val['closeqty'] : '-'; ?></td>  
                                    </tr>
                                <?php } ?>
                            <?php }else{ ?>
                                <tr>  
                                  <td></td><td></td><td> <center>No records found!!!</center></td><td></td> 
                                </tr>
                            <?php }?>    
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
      <!-- /Page Wrapper -->


    </div>
    <!-- /Main Wrapper -->

    <!-- scripts link  -->
    <?= $this->include('partials/vendor-scripts') ?>

    <script> 
    if ($('#report-table').length > 0) {
        $('#report-table').DataTable({
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
    $('#from').on('change', function() { 
      $('#to').attr('min',(this.value));
      if(new Date(this.value) > new Date($('#to').val())){
        $('#to').val(this.value);
      }
      
    });
    $('#to').on('change', function() { 
      $('#from').attr('max',(this.value)); 
      if(new Date(this.value) < new Date($('#from').val())){
        $('#from').val(this.value);
      }
    });
    </script>
  
</body>

</html>