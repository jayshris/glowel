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
			<div class="login-wrapper">
                <div class="login-content">
                    <form action="login-2">
                        <div class="login-user-info">
                            <div class="login-logo success-login-logo">
                               <img src="<?php echo base_url(); ?>assets/img/logo.svg" class="img-fluid" alt="Logo">
                           </div>
                           <div class="login-heading text-center">
                           		<i class="ti ti-circle-check-filled"></i>
                               	<h4>Success</h4>
                               	<p class="verfy-mail-content mb-0">Your Passwrod Reset Successfully!</p>
                           </div>
                           <div class="form-wrap">
                                <a href="<?php echo base_url(); ?>login-2" class="btn btn-primary">Back to Login</a>
                            </div>
                           <div class="login-social-link">
                               <div class="copyright-text">
                                   <p>Copyright &copy;2024 - CRMS</p>
                               </div>
                           </div>
                       </div>
                    </form>
                </div>
                <div class="login-img">
                    <img src="<?php echo base_url(); ?>assets/img/authentication/success-img.png" class="img-fluid" alt="Login">
                </div>
            </div>
		</div>

	</div>
	<!-- /Main Wrapper -->
	<?= $this->include('partials/vendor-scripts') ?>

</body>
</html>