<?php
   $uri = new \CodeIgniter\HTTP\URI(current_url(true));
   $pages = $uri->getSegments();
   $page = $uri->getSegment(count($pages));
 ?>
 <?php if ($page == 'activities'||$page =='activity-calls'||$page =='activity-mail'||$page =='activity-meeting'||$page =='activity-task'||$page=='analytics'||$page=='appearance'||$page=='ban-ip-address'||$page=='bank-accounts'||$page=='blank-page'||$page=='calls'||$page=='campaign-archieve'||$page=='campaign-complete'||$page=='campaign' ||$page=='cities' ||$page=='companies'||$page=='companies-grid'
 ||$page=='company-details'||$page=='company-reports'||$page=='company-settings'||$page=='connected-apps'||$page=='contact-details'||$page=='contact-grid'||$page=='contact-messages'||$page=='contact-reports'||$page=='contacts'||$page=='countries'||$page=='currencies'||$page=='custom-fields'
||$page=='deal-reports'||$page=='deals-details'||$page=='deals'||$page=='delete-request'||$page=='email-settings'||$page=='faq'||$page=='gdpr-cookies'||$page=='industry'||$page=='invoice-settings'||$page=='language-web'||$page=='language'||$page=='lead-reports'||$page=='leads-details'||$page=='leads-kanban'||$page=='leads'||$page=='localization'||$page=='lost-reason'||$page=='manage-users'||$page=='membership-addons'||$page=='membership-transactions'||$page=='notifications'||$page=='pages'||$page=='payment-gateways'||$page=='permission'||$page=='pipeline'||$page=='preference'||$page=='prefixes'||$page=='printers'||$page=='profile'||$page=='project-details'||$page=='project-grid'||$page=='project-reports'||$page=='projects'||$page=='roles-permissions'||$page=='security'||$page=='sms-gateways'||$page=='sources'||$page=='states'||$page=='storage'||$page=='task-reports'||$page=='tasks-completed'||$page=='tasks-important'||$page=='tasks'||$page=='tax-rates'||$page=='testimonials'||$page=='tickets'||$page=='contact-stage') { ?>
<!-- Page Header -->
<div class="page-header">
							<div class="row align-items-center">
								<div class="col-4">
                                <?php if ($page != 'analytics'&& $page !='appearance'&& $page !='ban-ip-address' &&$page !='bank-accounts'&&$page !='blank-page'&&$page !='cities'&&$page !='company-details'&&$page !='company-settings'&&$page !='connected-apps'&&$page !='currencies' &&$page !='custom-fields' &&$page !='deals-details'&&$page !='email-settings'&&$page !='faq'&&$page !='gdpr-cookies'&&$page !='invoice-settings'&&$page !='language-web'&&$page !='language'&&$page !='membership-addons'&&$page !='membership-transactions'&&$page !='notifications'&&$page !='payment-gateways'&&$page !='permission'&&$page !='preference'&&$page !='preference'&&$page !='prefixes'&&$page !='printers'&&$page !='profile'&&$page !='project-details'&&$page !='roles-permissions'&&$page !='security'&&$page !='sms-gateways'&&$page !='states'&&$page !='storage'&&$page !='tax-rates'&&$page !='testimonials'&&$page!='leads-details'&&$page!='countries'&&$page!='localization') { ?>
									<h4 class="page-title"><?= $title ?><span class="count-title"><?= $li_1 ?></span></h4>
                                    <?php } ?>
                                    <?php if ($page == 'analytics'||$page == 'appearance'||$page == 'ban-ip-address'||$page == 'bank-accounts'||$page == 'blank-page'||$page == 'cities'||$page == 'company-details'||$page == 'company-settings'||$page == 'connected-apps'||$page == 'currencies'||$page == 'custom-fields' ||$page == 'deals-details'||$page == 'email-settings'||$page == 'faq'||$page == 'gdpr-cookies'||$page == 'invoice-settings'||$page == 'language-web'||$page == 'language'||$page == 'membership-addons'||$page == 'membership-transactions'||$page == 'notifications'||$page == 'payment-gateways'||$page == 'permission'||$page =='preference'||$page =='prefixes'||$page =='printers'||$page =='profile'||$page =='project-details'||$page =='roles-permissions'||$page =='security'||$page =='sms-gateways'||$page =='states'||$page =='storage'||$page =='tax-rates'||$page =='testimonials'||$page=='countries'||$page=='localization'||$page=='leads-details') { ?>
                                    <h4 class="page-title"><?= $title ?></h4>
                                    <?php } ?>
								</div>
								<div class="col-8 text-end">
									<div class="head-icons">
										<a href="<?php echo base_url();?><?= $li_2 ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh">
											<i class="ti ti-refresh-dot"></i>
										</a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
											<i class="ti ti-chevrons-up"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

<?php } ?>

  


