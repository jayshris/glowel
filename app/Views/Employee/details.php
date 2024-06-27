<?php

use App\Models\CompanyModel;

?>

<!DOCTYPE html>

<html lang="en">

<head>

<?= $this->include('partials/title-meta') ?>

<?= $this->include('partials/head-css') ?>

<!-- Summernote CSS -->

<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.css">

<style>

.other-title{

    font-size: 16px;

    font-weight: bold;

}

.other-value{

    margin-left:50px;

    font-size: 16px;

}

.image-container12 {

    display: inline-block;

    margin: 10px;

}

.img12 {

    cursor: pointer;

    width: 100px;

    height: 100px;

    border: 2px solid #ddd;

}

    </style>

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



            </div>

        </div>



        <div class="row">

          



            <!-- Contact Sidebar -->

            <div class="col-xl-12 theiaStickySidebar">

                <div class="contact-sidebar">

                    <h4>Employee Information</h4><br>

                    <ul class="other-info">

                        <?php

                            $companyModel = new CompanyModel();

                            $company  = $companyModel->where('id', $employee_data['company_id'])->first();

                        ?>

                        <li><span class="other-title">Company Name</span><span class="other-value" style="margin-left:33px;"><?= $company['name'] ?></span></li>

                        <li><span class="other-title">Office Location</span><span class="other-value"><?= $office_data['name'] ?></span></li>

                        <li><span class="other-title">Employee Name</span><span class="other-value"><?= $employee_data['name'] ?></span></li>

                        <li><span class="other-title">Aadhaar Card No</span><span class="other-value"><?= $aadhaar_data['adhaar_number'] ?></span></li>

                        <li><span class="other-title">Mobile No</span><span class="other-value"><?= $employee_data['mobile'] ?></span></li>

                        <li><span class="other-title">Email ID</span><span class="other-value"><?=  $employee_data['email'] ?></span></li>

                        <li><span class="other-title">Bank A/C No:</span><span class="other-value"><?= $employee_data['bank_account_number'] ?></span></li>

                        <li><span class="other-title">Bank IFSC</span><span class="other-value"><?= $employee_data['bank_ifsc_code'] ?></span></li>

                        <li><span class="other-title">Image 1</span><span class="other-value" style="margin-left:40px;">

                        <div class="image-container12">

                        <?php if(!empty($employee_data['profile_image1'])){?>

                        <img  src="<?= $employee_data['profile_image1'] ?>" alt="Image 1" class="img12"><?php }?>

                        </div> </span></li>

                        <li><span class="other-title">Image 2</span><span class="other-value" style="margin-left:40px;">

                        <div class="image-container12">

                        <?php if(!empty($employee_data['profile_image2'])){?>

                        <img src="<?= $employee_data['profile_image2'] ?>" alt="Image 2" class="img12">

                        <?php }?>

                        </div></span></li>

                        <li><span class="other-title">Aadhaar Image <br>- FrontFront</span><span class="other-value" style="margin-left:40px;">

                        <div class="image-container12">

                        <?php if(!empty($aadhaar_data['adhaar_image_front'])){?>

                        <img src="<?= $aadhaar_data['adhaar_image_front'] ?>" alt="Aadhaar Image - FrontFront" class="img12">

                        <?php }?>

                        </div></span></li>

                        <li><span class="other-title">Aadhaar Image <br>- Back</span><span class="other-value" style="margin-left:40px;">

                        <div class="image-container12">

                        <?php if(!empty($aadhaar_data['adhaar_image_back'])){?>

                        <img src="<?= $aadhaar_data['adhaar_image_back'] ?>" alt="Aadhaar Image - Back" class="img12">

                        <?php }?>

                        </div></span></li>

                        <li><span class="other-title">UPI ID</span><span class="other-value" style="margin-left:40px;">

                        <div class="image-container12">

                        <?php if(!empty($employee_data['upi_id'])){?>

                        <img src="<?= $employee_data['upi_id'] ?>" alt="UPI ID" class="img12">

                        <?php }?>

                        </div></span></li>

                        <li><span class="other-title">Joining Date</span><span class="other-value"><?php

                                if(isset($employee_data)){
                                    $strtime = strtotime($employee_data['joining_date']);
                                    echo date('d-m-Y',$strtime);

                                }

                                ?></span></li>

                        <li><span class="other-title">Status</span><span class="other-value"><?php

                            if(isset($employee_data)){

                                if($employee_data['approved'] == 1){

                                    $status ='<span class="badge badge-pill bg-success">Active</span>';

                                  }else{

                                    $status= '<span class="badge badge-pill bg-danger">Inactive</span>';

                                  }

                                  echo $status;

                              }

                                ?></span></li>

                    </ul>	

                </div>

            </div>

            <!-- /Contact Sidebar -->

            <div class="submit-button">
              <a href="<?php echo base_url();?>employee" class="btn btn-light">Cancel</a>
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

<!-- Sticky Sidebar JS -->

<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>

<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>



</body>

</html>