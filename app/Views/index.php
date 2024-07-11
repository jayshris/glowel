<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
</head>
<body class="account-page">
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<div class="account-content">
			<div class="login-wrapper">
                <div class="login-content">
                    <form class="needs-validation" novalidate action="<?php echo base_url('/login/authenticate'); ?>">
                        <div class="login-user-info">
                            <div class="login-logo">
                               <img src="<?php echo base_url();?>public/assets/img/logo.svg" class="img-fluid" alt="Logo">
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
                           <?php if(session()->getFlashdata('error')):?>
                              <div class="alert alert-danger">
                                  <?= session()->getFlashdata('error') ?>
                              </div>
                          <?php endif;?>
                           <div class="login-heading">
                               <h4>Sign In</h4>
                               <p>Access the CRMS panel using your email and passcode.</p>
                           </div>
                           <div class="form-wrap">
                               <label class="col-form-label">Email Address</label>
                               <div class="form-wrap-icon">
                                   <input type="email" class="form-control" id="useremail" required value="" name="email">
                                   <i class="ti ti-mail"></i>
                               </div>
                           </div>
                           <div class="form-wrap">
                               <label class="col-form-label">Password</label>
                               <div class="pass-group">
                                   <input type="password" class="pass-input form-control" id="password" required value="" name="password">
                                   <span class="ti toggle-password ti-eye-off"></span>
                               </div>
                           </div>
                           <div class="form-wrap form-wrap-checkbox">
                               
                               <!-- <div class="text-end">
                                   <a href="<?php echo base_url();?>forgot-password" class="forgot-link">Forgot Password?</a>
                               </div> -->
                           </div>
                           <div class="form-wrap">
                               <button type="submit" class="btn btn-primary">Sign In</button>
                           </div>
                           
                           <!-- <div class="text-end">
                               <a href="<?php echo base_url('/register');?>" class="forgot-link">Register?</a>
                           </div> -->
                           
                       </div>
                    </form>
                </div>
            </div>
		</div>

	</div>
	<!-- /Main Wrapper -->



<?= $this->include('partials/vendor-scripts') ?>
		<!-- validation init -->
		<script src="<?php echo base_url();?>public/assets/js/validation.init.js"></script>

</body>
</html>