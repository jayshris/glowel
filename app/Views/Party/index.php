<?php
use App\Models\PartytypeModel;
use App\Models\PartyTypePartyModel;
use App\Models\PartyClassificationModel;
?>

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
            
            <!-- Page Header -->
            <div class="page-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="page-title">Party</h4>
                </div>
                <div class="col-4 text-end">
                  <div class="head-icons">
                    <a href="<?= base_url('party') ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                    <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /Page Header -->

            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('party'); ?>">
              <div class="card main-card">
                <div class="card-body">
                  <h4>Search / Filter</h4>
                  <hr>
                  <div class="row mt-2"> 

                    <div class="col-md-2">
                      <div class="form-wrap">
                        <label class="col-form-label">Status</label>
                        <select class="form-select" name="status" aria-label="Default select example">
                          <option value="">Select Status</option>
                          <option value="0">Active</option>
                          <option value="1">Inactive</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-1">
                      <button class="btn btn-info mt-4">Search</button>&nbsp;&nbsp;      
                    </div>
                    <div class="col-md-1 ">
                      <a href="./party" class="btn btn-warning mt-4">Reset</a>&nbsp;&nbsp;
                    </div>
                    <div class="col-md-1 mrg-sub-4">
                      <?php echo makeListActions($currentController, $Action, 0, 1);?>
                    </div>

                  </div>
                </div>
              </div>
            </form>

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
                    <?php

        $session = \Config\Services::session();
        if($session->getFlashdata('success')) {
            echo '
            <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
            ';
        }
        ?>
                  </div>
                </div>

                <!-- Contact List -->
                <div class="table-responsive custom-table">
                  <table class="table" id="party-table">
                    <thead class="thead-light">
                      <tr>
                        <th>Action</th>
                        <th>Customer name</th>
                        <th>Customer type</th>
                        <th>Contact person</th>
                        <th>Phone</th>
                        <th>Total Inv.</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($party_data)
                        {
                            foreach($party_data as $party)
                            {

                              $pclass = new PartyClassificationModel();
                              // $pclass = $pclass->where('id', $party['party_classification_id'])->first();

                              
                              $pcustomertype = new PartytypeModel();
                              // $pcustomertype = $pcustomertype->where('id', $party['party_type_id'])->first();
                              $PartyTypePartyModel = new PartyTypePartyModel();
                              $pcustomertype = $PartyTypePartyModel
                              ->join('party p','p.id= party_type_party_map.party_id')
                              ->join('party_type pt','pt.id= party_type_party_map.party_type_id')
                              ->where('p.id', $party['id'])->first();
      
                              if($party['status'] == 'Inactive'){
                                $status= '<span class="badge badge-pill bg-danger">Inactive</span>';
                              }else{
                                $status ='<span class="badge badge-pill bg-success">Active</span>';
                              }

                                echo '
                                <tr>
                                    <td> '
                                    // <a href="'.base_url().'party/edit/'.$party['id'].'"  class="btn btn-info btn-sm" role="button"><i class="ti ti-pencil"></i></a>
                                     // <button type="button"   onclick="delete_data('.$party["id"].')" class="btn btn-secondary btn-sm"> <i class="ti ti-trash"></i></button>
                                     .makeListActions($currentController, $Action, $party['id'], 2).'
 
                                   
                                    </td>
                                    
                                    <td>'.$party['party_name'].'</td>
                                    <td>'.@$pcustomertype['name'].'</td>
                                    <td>'.$party['contact_person'].'</td>
                                    <td>'.$party['primary_phone'].'</td>
                                    <td>20</td>
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
            window.location.href="<?php echo base_url(); ?>/party/delete/"+id;
        }
        return false;
    }
    if ($('#party-table').length > 0) {
        $('#party-table').DataTable({
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
              { "bSortable": false, "aTargets": [0] } 
          ]
        });
      }
</script>
</body>

</html>