<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>

</head>
<body class="account-page">
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<div class="account-content">
			<div class="login-wrapper ">
                <div class="login-content">
                    <form method="post" action="<?php echo base_url('/register/register'); ?>" class="needs-validation" novalidate >
                        <div class="login-user-info">
                            <div class="login-logo">
                               <img src="<?php echo base_url(); ?>assets/img/logo.svg" class="img-fluid" alt="Logo">
                           </div>
                           <div class="login-heading">
                               <h4>Register</h4>
                               <p>Create new CRMS account</p>
                           </div>
                           
                           <div class="form-wrap">
                               <label class="col-form-label">Email Address</label>
                               <div class="form-wrap-icon">
                                   <input type="email" class="form-control" id="useremail" name="email" required>
                                   <i class="ti ti-mail"></i>
                                    <?php if(isset($validation)):?>
                                        <small class="text-danger"><?= $validation->getError('email') ?></small>
                                    <?php endif;?>
                               </div>
                           </div>
                           <div class="form-wrap">
                               <label class="col-form-label">Password</label>
                               <div class="pass-group">
                                   <input type="password" class="pass-input form-control" id="password" required name="password">
                                   <span class="ti toggle-password ti-eye-off"></span>
                               </div>
                               <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
                            <?php endif;?>
                           </div>
                           <div class="form-wrap">
                               <label class="col-form-label">Confirm Password</label>
                               <div class="pass-group">
                                   <input type="password" class="pass-inputs form-control" id="userpassword" required name="confirm_password">
                                   <span class="ti toggle-passwords ti-eye-off"></span>
                               </div>
                               <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
                            <?php endif;?>
                           </div>
                           
                           
                           <div class="form-wrap">
                               <button type="submit" class="btn btn-primary">Sign Up</button>
                           </div>
                           <div class="login-form">
                               <h6>Already have an account?<a href="<?php echo base_url(); ?>" class="hover-a"> Sign In Instead</a></h6>
                           </div>
                       </div>
                    </form>
                </div>
            </div>
		</div>

	</div>
	<!-- /Main Wrapper -->
    <?= $this->include('partials/vendor-scripts') ?>
		<!-- validation init -->
		<script src="<?php echo base_url();?>/assets/js/validation.init.js"></script>

</body>
</html>