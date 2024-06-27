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
			<div class="login-wrapper login-new">
                <div class="login-shapes">
                    <div class="login-right-shape">
                        <img src="<?php echo base_url(); ?>assets/img/authentication/shape-01.png" alt="Shape">
                    </div>
                    <div class="login-left-shape">
                        <img src="<?php echo base_url(); ?>assets/img/authentication/shape-02.png" alt="Shape"> 
                    </div> 
                </div>
                <div class="container">
                    <div class="login-content user-login">
                        <div class="login-logo">
                           <img src="<?php echo base_url(); ?>assets/img/logo.svg" class="img-fluid" alt="Logo">
                       </div>
                        <form action="deals-dashboard">
                            <div class="login-user-info login-user-inner">
                               <div class="login-heading text-center">
                                   <p class="welcome-content">Welcome back!</p>
                                   <div class="lock-screen-profile">
                                        <img src="<?php echo base_url(); ?>assets/img/profiles/avatar-14.jpg" class="img-fluid" alt="Profile">
                                        <h6>Adrian Davies</h6>
                                   </div>
                               </div>
                               <div class="form-wrap">
                                   <label class="col-form-label">Enter Password</label>
                                   <div class="pass-group">
                                       <input type="password" class="pass-input form-control">
                                       <span class="ti toggle-password ti-eye-off"></span>
                                   </div>
                               </div>
                               <div class="form-wrap mb-0">
                                   <button type="submit" class="btn btn-primary">Log In</button>
                               </div>
                           </div>
                        </form>
                    </div>
                    <div class="lock-screen-list">
                        <ul class="nav">
                            <li>
                                <a href="javascript:void(0);">Terms & Condition</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Privacy</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Help</a>
                            </li>
                            <li>
                                <div class="language-dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">English</a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">American</a>
                                        <a href="javascript:void(0);" class="dropdown-item">British</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="copyright-text">
                            <p>Copyright &copy;2024 - CRMS</p>
                        </div>
                    </div>
                </div>
            </div>
		</div>

	</div>
	<!-- /Main Wrapper -->

    <?= $this->include('partials/vendor-scripts') ?>
</body>
</html>