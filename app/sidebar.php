<?php
   $uri = new \CodeIgniter\HTTP\URI(current_url(true));
   $pages = $uri->getSegments();
   $page = $uri->getSegment(count($pages));
 ?>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="clinicdropdown">
                    <a href="<?php echo base_url(); ?>profile">
                        <img src="<?php echo base_url(); ?>assets/img/profiles/avatar-14.jpg" class="img-fluid" alt="Profile">
                        <div class="user-names">
                            <h5>Aubade-Tech</h5>
                            <h6>Team Lead</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <h6 class="submenu-hdr">Main Menu</h6>
                    <ul>
                        <li>
                            <a href="<?php echo base_url(); ?>profile"
                                class="<?php echo ($page == 'Profile') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-layout-2"></i><span>Profile</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'chat'|| $page =='calendar'|| $page == 'email'|| $page == 'todo'|| $page == 'notes'|| $page == 'file-manager'|| $page =='video-call'|| $page =='audio-call'|| $page =='call-history') ? 'subdrop active' : '' ;?>"><i
                                    class="ti ti-brand-airtable"></i><span>Company</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>company/create">Add Company</a></li>
                                        
                                <li><a class="<?php echo ($page == 'calendar') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>company">Company Listing Screen</a></li>
                                <li><a class="<?php echo ($page == 'calendar') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>office/create">Add Office</a></li>
                                <li><a class="<?php echo ($page == 'email') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>office">Office Listing Screen</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <ul>
                        
                    <li class="submenu">
                            <a href=""
                                class="<?php echo ($page == 'user/index'|| $page =='user/create') ? 'subdrop active' : '' ;?>"><i
                                    class="ti ti-brand-airtable"></i><span>User</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'user/create') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>user/create">Add User</a></li>
                                        
                                <li><a class="<?php echo ($page == 'user/index') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>user/index">User Listing</a></li>
                                
                                <li><a class="<?php echo ($page == 'usertype/index') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>usertype/index">User Types</a></li>
                                <li><a class="<?php echo ($page == 'usertype/index') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>usertype/create">Add User Types</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                
                <li>
                    <ul>
                        
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'employee') ? 'subdrop active' : '' ;?>"><i class="ti ti-brand-airtable"></i><span>Employee</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'employee/create') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>employee/create">Add Employee</a></li>
                                        
                                <li><a class="<?php echo ($page == 'employee') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>employee">Employee Listing</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <ul>
                        
                    <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'driver') ? 'subdrop active' : '' ;?>"><i
                                    class="ti ti-brand-airtable"></i><span>Driver</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'foreman/create') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>foreman/create">Add Foreman</a></li>
                                <li><a class="<?php echo ($page == 'foreman') ? 'active' : '' ;?>"  href="<?php echo base_url(); ?>foreman">Foreman Listing</a></li>
                                <li><a class="<?php echo ($page == 'driver/create') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>user/create">Add Driver</a></li>
                                <li><a class="<?php echo ($page == 'driver') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>driver">Driver Listing</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <ul>
                        
                    <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='vehicle') ? 'subdrop active' : '' ;?>"><i
                                    class="ti ti-brand-airtable"></i><span>Vehicle</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'vehiclecertificate') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>vehiclecertificate">Vehicle Certificate</a></li>
                                <li><a class="<?php echo ($page == 'vehiclecertificate/create') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>vehiclecertificate/create">Add Vehicle Certificate</a></li>
                                        <!--      
                                <li><a class="<?php echo ($page == 'calendar') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>calendar">Vehicle Model</a></li>
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Add Vehicle</a></li>
                                <li><a class="<?php echo ($page == 'calendar') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>calendar">Vehicle Listing</a></li> -->
                                
                            </ul>
                        </li>
                    </ul>
                </li>
        
                <li>
                    <ul>
                        
                    <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='vehicle') ? 'subdrop active' : '' ;?>"><i
                                    class="ti ti-brand-airtable"></i><span>Party Type</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'partytype') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>partytype">Party Type</a></li>
                                <li><a class="<?php echo ($page == 'partytype/create') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>partytype/create">Add Party Type</a></li>
                                        <!--      
                                <li><a class="<?php echo ($page == 'calendar') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>calendar">Vehicle Model</a></li>
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Add Vehicle</a></li>
                                <li><a class="<?php echo ($page == 'calendar') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>calendar">Vehicle Listing</a></li> -->
                                
                            </ul>
                        </li>
                    </ul>
                </li>

                

                <li>
                    <ul>
                        
                    <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'chat'|| $page =='calendar'|| $page == 'email'|| $page == 'todo'|| $page == 'notes'|| $page == 'file-manager'|| $page =='video-call'|| $page =='audio-call'|| $page =='call-history') ? 'subdrop active' : '' ;?>"><i
                                    class="ti ti-brand-airtable"></i><span>Customer</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Customer Type</a></li>
                                        
                                <li><a class="<?php echo ($page == 'calendar') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>calendar">Customer Type Listing</a></li>
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Customer Classification</a></li>
                                <li><a class="<?php echo ($page == 'calendar') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>calendar">Add Customer</a></li>
                                <li><a class="<?php echo ($page == 'calendar') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>calendar"> Customer Listing</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <ul>
                        
                    <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'chat'|| $page =='calendar'|| $page == 'email'|| $page == 'todo'|| $page == 'notes'|| $page == 'file-manager'|| $page =='video-call'|| $page =='audio-call'|| $page =='call-history') ? 'subdrop active' : '' ;?>"><i
                                    class="ti ti-brand-airtable"></i><span>Pricing </span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Add Pricing Type</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <ul>
                        
                    <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'chat'|| $page =='calendar'|| $page == 'email'|| $page == 'todo'|| $page == 'notes'|| $page == 'file-manager'|| $page =='video-call'|| $page =='audio-call'|| $page =='call-history') ? 'subdrop active' : '' ;?>"><i
                                    class="ti ti-brand-airtable"></i><span>Booking </span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Create Booking</a></li>
                                        
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Manage Booking</a></li>
                                        
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Approve Booking</a></li>
                                        
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Update Booking</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <ul>
                        
                    <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'chat'|| $page =='calendar'|| $page == 'email'|| $page == 'todo'|| $page == 'notes'|| $page == 'file-manager'|| $page =='video-call'|| $page =='audio-call'|| $page =='call-history') ? 'subdrop active' : '' ;?>"><i
                                    class="ti ti-brand-airtable"></i><span>Payment </span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Fuel Payment</a></li>
                                        
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Urea Payment</a></li>
                                        
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>chat">Money Payment</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <ul>
                        
                    <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'module') ? 'subdrop active' : '' ;?>"><i class="ti ti-brand-airtable"></i><span>Modules </span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'module') ? 'active' : '' ;?>"  href="<?php echo base_url(); ?>module">Module list</a></li>
                                        
                                <li><a class="<?php echo ($page == 'module/add') ? 'active' : '' ;?>"  href="<?php echo base_url(); ?>module/add">Add new module</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <h6 class="submenu-hdr">Other</h6>
                    <ul>
                        <li>
                            <a href="profile"
                                class="<?php echo ($page == 'Profile') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-layout-2"></i><span>Move Vehicle with No Booking</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile"
                                class="<?php echo ($page == 'Profile') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-layout-2"></i><span>Tyre Management Module</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile"
                                class="<?php echo ($page == 'Profile') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-layout-2"></i><span>Add / Replace Driver</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile"
                                class="<?php echo ($page == 'Profile') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-layout-2"></i><span>Complete Booking</span>
                            </a>
                        </li>
                    </ul>
                </li>
                    
                </li>
                <!-- <li>
                    <h6 class="submenu-hdr">CRM Settings</h6>
                    <ul>
                        <li><a class="<?php echo ($page == 'sources') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>sources"><i
                                    class="ti ti-artboard"></i><span>Sources</span></a></li>
                        <li><a class="<?php echo ($page == 'lost-reason') ? 'active' : '' ;?>"
                                href="<?php echo base_url(); ?>lost-reason"><i class="ti ti-message-exclamation"></i><span>Lost
                                    Reason</span></a></li>
                        <li><a class="<?php echo ($page == 'contact-stage') ? 'active' : '' ;?>"
                                href="<?php echo base_url(); ?>contact-stage"><i class="ti ti-steam"></i><span>Contact
                                    Stage</span></a></li>
                        <li><a class="<?php echo ($page == 'industry') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>industry"><i
                                    class="ti ti-building-factory"></i><span>Industry</span></a></li>
                        <li><a class="<?php echo ($page == 'calls') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>calls"><i
                                    class="ti ti-phone-check"></i><span>Calls</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">User Management</h6>
                    <ul>
                        <li><a class="<?php echo ($page == 'manage-users') ? 'active' : '' ;?>"
                                href="<?php echo base_url(); ?>manage-users"><i class="ti ti-users"></i><span>Manage
                                    Users</span></a></li>
                        <li><a class="<?php echo ($page == 'roles-permissions' || $page == 'permission') ? 'active' : '' ;?>"
                                href="<?php echo base_url(); ?>roles-permissions"><i class="ti ti-navigation-cog"></i><span>Roles
                                    & Permissions</span></a></li>
                        <li><a class="<?php echo ($page == 'delete-request') ? 'active' : '' ;?>"
                                href="<?php echo base_url(); ?>delete-request"><i class="ti ti-flag-question"></i><span>Delete
                                    Request</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Membership</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'membership-plans'|| $page == 'membership-addons'|| $page == 'membership-transactions') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-file-invoice"></i><span>Membership</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'membership-plans') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>membership-plans">Membership Plans</a></li>
                                <li><a class="<?php echo ($page == 'membership-addons') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>membership-addons">Membership Addons</a></li>
                                <li><a class="<?php echo ($page == 'membership-transactions') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>membership-transactions">Transactions</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Content</h6>
                    <ul>
                        <li><a class="<?php echo ($page == 'pages') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>pages"><i
                                    class="ti ti-page-break"></i><span>Pages</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'countries'|| $page == 'states'|| $page == 'cities') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-map-pin-pin"></i><span>Location</span><span class="menu-arrow"></span>
                            </a>
                        <ul>
                                <li><a class="<?php echo ($page == 'countries') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>countries">Countries</a></li>
                                <li><a class="<?php echo ($page == 'states') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>states">States</a></li>
                                <li><a class="<?php echo ($page == 'cities') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>cities">Cities</a></li>
                            </ul>
                        </li>
                        <li><a class="<?php echo ($page == 'testimonials') ? 'active' : '' ;?>"
                                href="<?php echo base_url(); ?>testimonials"><i
                                    class="ti ti-quote"></i><span>Testimonials</span></a></li>
                        <li><a class="<?php echo ($page == 'faq') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>faq"><i
                                    class="ti ti-question-mark"></i><span>FAQ</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Support</h6>
                    <ul>
                        <li><a class="<?php echo ($page == 'contact-messages') ? 'active' : '' ;?>"
                                href="<?php echo base_url(); ?>contact-messages"><i class="ti ti-page-break"></i><span>Contact
                                    Messages</span></a></li>
                        <li><a class="<?php echo ($page == 'tickets') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>tickets"><i
                                    class="ti ti-ticket"></i><span>Tickets</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Settings</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'profile'|| $page == 'security'|| $page == 'notifications'|| $page == 'connected-apps') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-settings-cog"></i><span>General Settings</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'profile') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>profile">Profile</a></li>
                                <li><a class="<?php echo ($page == 'security') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>security">Security</a></li>
                                <li><a class="<?php echo ($page == 'notifications') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>notifications">Notifications</a></li>
                                <li><a class="<?php echo ($page == 'connected-apps') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>connected-apps">Connected Apps</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'company-settings'|| $page == 'localization'|| $page == 'prefixes'|| $page == 'preference'|| $page == 'appearance'|| $page == 'language' ||  $page == 'language-web') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-world-cog"></i><span>Website Settings</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'company-settings') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>company-settings">Company Settings</a></li>
                                <li><a class="<?php echo ($page == 'localization') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>localization">Localization</a></li>
                                <li><a class="<?php echo ($page == 'prefixes') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>prefixes">Prefixes</a></li>
                                <li><a class="<?php echo ($page == 'preference') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>preference">Preference</a></li>
                                <li><a class="<?php echo ($page == 'appearance') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>appearance">Appearance</a></li>
                                <li><a class="<?php echo ($page == 'language' || $page == 'language-web') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>language">Language</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'invoice-settings'|| $page == 'printers'|| $page == 'custom-fields') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-apps"></i><span>App Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'invoice-settings') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>invoice-settings">Invoice Settings</a></li>
                                <li><a class="<?php echo ($page == 'printers') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>printers">Printers</a></li>
                                <li><a class="<?php echo ($page == 'custom-fields') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>custom-fields">Custom Fields</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'email-settings'|| $page == 'sms-gateways'|| $page == 'gdpr-cookies') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-device-laptop"></i><span>System Settings</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'email-settings') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>email-settings">Email Settings</a></li>
                                <li><a class="<?php echo ($page == 'sms-gateways') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>sms-gateways">SMS Gateways</a></li>
                                <li><a class="<?php echo ($page == 'gdpr-cookies') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>gdpr-cookies">GDPR Cookies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'payment-gateways'|| $page == 'bank-accounts'|| $page == 'tax-rates'|| $page == 'currencies') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-moneybag"></i><span>Financial Settings</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'payment-gateways') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>payment-gateways">Payment Gateways</a></li>
                                <li><a class="<?php echo ($page == 'bank-accounts') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>bank-accounts">Bank Accounts</a></li>
                                <li><a class="<?php echo ($page == 'tax-rates') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>tax-rates">Tax Rates</a></li>
                                <li><a class="<?php echo ($page == 'currencies') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>currencies">Currencies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'storage'|| $page == 'ban-ip-address') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-flag-cog"></i><span>Other Settings</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'storage') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>storage">Storage</a></li>
                                <li><a class="<?php echo ($page == 'ban-ip-address') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>ban-ip-address">Ban IP Address</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Pages</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'index'|| $page == 'register'|| $page == 'forgot-password'|| $page == 'reset-password'|| $page == 'email-verification'|| $page == 'two-step-verification'|| $page == 'lock-screen') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-lock-square-rounded"></i><span>Authentication</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'index') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>index">Login</a></li>
                                <li><a class="<?php echo ($page == 'register') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>register">Register</a></li>
                                <li><a class="<?php echo ($page == 'forgot-password') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>forgot-password">Forgot Password</a></li>
                                <li><a class="<?php echo ($page == 'reset-password') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>reset-password">Reset Password</a></li>
                                <li><a class="<?php echo ($page == 'email-verification') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>email-verification">Email Verification</a></li>
                                <li><a class="<?php echo ($page == 'two-step-verification') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>two-step-verification">2 Step Verification</a></li>
                                <li><a class="<?php echo ($page == 'lock-screen') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>lock-screen">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page == 'error-404'|| $page == 'error-500') ? 'subdrop active' : '' ;?>">
                                <i class="ti ti-error-404"></i><span>Error Pages</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'error-404') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>error-404">404 Error</a></li>
                                <li><a class="<?php echo ($page == 'error-500') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>error-500">500 Error</a></li>
                            </ul>
                        </li>
                        <li><a class="<?php echo ($page == 'blank-page') ? 'active' : '' ;?>"
                                href="<?php echo base_url(); ?>blank-page"><i class="ti ti-apps"></i><span>Blank Page</span></a>
                        </li>
                        <li><a class="<?php echo ($page == 'coming-soon') ? 'active' : '' ;?>"
                                href="<?php echo base_url(); ?>coming-soon"><i class="ti ti-device-laptop"></i><span>Coming
                                    Soon</span></a></li>
                        <li><a class="<?php echo ($page == 'under-maintenance') ? 'active' : '' ;?>"
                                href="<?php echo base_url(); ?>under-maintenance"><i class="ti ti-moneybag"></i><span>Under
                                    Maintenance</span></a></li>
                    </ul>
                </li> -->
                
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
