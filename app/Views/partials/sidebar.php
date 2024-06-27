<?php
// $uri = new \CodeIgniter\HTTP\URI(current_url(true));
// $pages = $uri->getSegments();
// $page = $uri->getSegment(3);


$router = service('router');
$controller  = class_basename($router->controllerName());
$page = $controller;
// $method = $router->methodName();
?>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="clinicdropdown">
                    <a href="<?php echo base_url(); ?>profile">
                        <img src="<?php echo base_url(); ?>public/assets/img/profiles/avatar-14.jpg" class="img-fluid" alt="Profile">
                        <div class="user-names">
                            <h5>Aubade-Tech</h5>
                            <h6>Team Lead</h6>
                            <?php
                            // var_dump($page);
                            echo 'Controller : ' . $controller;
                            // var_dump($method);
                            ?>
                        </div>
                    </a>
                </li>
            </ul>
            <ul>


                <li>
                    <h6 class="submenu-hdr">Main Menu</h6>
                    <ul>
                        <li>
                            <a href="<?php echo base_url(); ?>profile" class="<?php echo ($page == 'profile') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-layout-2"></i><span>Profile</span>
                            </a>
                        </li>

                        <!-- Pankaj product modules  -->
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'ProductType' || $page == 'ProductCategory' || $page == 'Products') ? 'active subdrop' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Product</span><span class="menu-arrow"></span></a>
                            <ul>
                                <!-- Product Types  -->
                                <li><a class="<?php echo ($page == 'ProductType') ? 'active' : ''; ?>" href="<?php echo base_url('product-types'); ?>">Product Types</a></li>

                                <!-- Product Categories  -->
                                <li><a class="<?php echo ($page == 'ProductCategory') ? 'active' : ''; ?>" href="<?php echo base_url('product-categories'); ?>">Product Categories</a></li>

                                <!-- Products -->
                                <li><a class="<?php echo ($page == 'Products') ? 'active' : ''; ?>" href="<?php echo base_url('products'); ?>">Products</a></li>
                            </ul>
                        </li>
                        <!-- Pankaj product modules  -->


                        <!-- Pankaj sales modules  -->
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'Sales') ? 'active subdrop' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Sales</span><span class="menu-arrow"></span></a>
                            <ul>
                                <!-- Sales Orders  -->
                                <li><a class="<?php echo ($page == 'Sales') ? 'active' : ''; ?>" href="<?php echo base_url('sales'); ?>">Sales Orders</a></li>
                            </ul>
                        </li>
                        <!-- Pankaj sales modules  -->



                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'Company' || $page == 'Office' || $page == 'Warehouses') ? 'active subdrop' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Setup</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'Company') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>company/create">Add Company</a></li>
                                <li><a class="<?php echo ($page == 'Company') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>company">Company Listing Screen</a></li>
                                <li><a class="<?php echo ($page == 'Office') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>office/create">Add Office</a></li>
                                <li><a class="<?php echo ($page == 'Office') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>office">Office Listing Screen</a></li>

                                <!-- Warehouses -->
                                <li><a class="<?php echo ($page == 'Warehouses') ? 'active' : ''; ?>" href="<?php echo base_url('warehouses'); ?>">Warehouses</a></li>

                                <li><a class="<?php echo ($page == 'flags/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>flags/create">Add Flag</a></li>
                                <li><a class="<?php echo ($page == 'flags') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>flags">Flags</a></li>

                                <li><a class="<?php echo ($page == 'vehiclecertificate') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>vehiclecertificate">Vehicle Certificate</a></li>
                                <li><a class="<?php echo ($page == 'vehiclecertificate/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>vehiclecertificate/create">Add Vehicle Certificate</a></li>



                                <li><a class="<?php echo ($page == 'businesstype') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>businesstype">Business Type</a></li>
                                <li><a class="<?php echo ($page == 'businesstype/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>businesstype/create">Add Business Type</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="" class="<?php echo ($page == 'user/index' || $page == 'user/create') ? 'subdrop active' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>User</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'user/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>user/create">Add User</a></li>

                                <li><a class="<?php echo ($page == 'user/index') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>user/index">User Listing</a></li>

                                <li><a class="<?php echo ($page == 'usertype/index') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>usertype/index">User Types</a></li>
                                <li><a class="<?php echo ($page == 'usertype/index') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>usertype/create">Add User Types</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'employee') ? 'subdrop active' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Employee</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'employee/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>employee/create">Add Employee</a></li>

                                <li><a class="<?php echo ($page == 'employee') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>employee">Employee Listing</a></li>
                            </ul>
                        </li>



                        <!--manas fuel module-->


                        <li class="submenu">
                            <a href="" class="<?php echo ($page == 'fueltype/index' || $page == 'fueltype/create') ? 'subdrop active' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Fuel Module</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'fueltype') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>fueltype">Fuel Type</a></li>
                                <li><a class="<?php echo ($page == 'fueltype/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>fueltype/create">Add Fuel Type</a></li>

                                <li><a class="<?php echo ($page == 'fuelpumpbrand') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>fuelpumpbrand">Fuel Pump Brand</a></li>
                                <li><a class="<?php echo ($page == 'fuelpumpbrand/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>fuelpumpbrand/create">Add Fuel Pump Brand</a></li>
                            </ul>
                        </li>


                        <!--manas fuel module-->

                        <!--manas vehicle module-->
                        <li class="submenu">
                            <a href="" class="<?php echo ($page == 'vehicletype/index' || $page == 'vehicletype/create') ? 'subdrop active' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Vehicle Module</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'vehicletype') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>vehicletype">Vehicle Type</a></li>
                                <li><a class="<?php echo ($page == 'vehicletype/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>vehicletype/create">Add Vehicle Type</a></li>

                                <li><a class="<?php echo ($page == 'vehiclet') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>vehiclet">Vehicle Model</a></li>
                                <li><a class="<?php echo ($page == 'vehiclet/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>vehiclet/create">Add Vehicle Model</a></li>
                            </ul>
                        </li>
                        <!--manas vehicle module-->


                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'Driver') ? 'active subdrop' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Driver</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'foreman/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>foreman/create">Add Foreman</a></li>
                                <li><a class="<?php echo ($page == 'foreman') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>foreman">Foreman Listing</a></li>
                                <li><a class="<?php echo ($page == 'driver/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>driver/create">Add Driver</a></li>
                                <li><a class="<?php echo ($page == 'Driver') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>driver">Driver Listing</a></li>
                            </ul>
                        </li>



                        <li class="submenu">
                            <a href="" class="<?php echo ($page == 'user/index' || $page == 'user/create') ? 'subdrop active' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Party</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'partytype') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>partytype">Party Type</a></li>
                                <li><a class="<?php echo ($page == 'partytype/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>partytype/create">Add Party Type</a></li>

                                <li><a class="<?php echo ($page == 'party') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>party">Party </a></li>
                                <li><a class="<?php echo ($page == 'party/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>party/create">Add Party </a></li>

                                <li><a class="<?php echo ($page == 'partyclassification') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>partyclassification">Party Classification</a></li>
                                <li><a class="<?php echo ($page == 'partyclassification/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>partyclassification/create">Add Party Classification </a></li>

                            </ul>
                        </li>



                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'chat' || $page == 'calendar' || $page == 'email' || $page == 'todo' || $page == 'notes' || $page == 'file-manager' || $page == 'video-call' || $page == 'audio-call' || $page == 'call-history') ? 'subdrop active' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Pricing </span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chat">Add Pricing Type</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'chat' || $page == 'calendar' || $page == 'email' || $page == 'todo' || $page == 'notes' || $page == 'file-manager' || $page == 'video-call' || $page == 'audio-call' || $page == 'call-history') ? 'subdrop active' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Booking </span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chat">Create Booking</a></li>

                                <li><a class="<?php echo ($page == 'chat') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chat">Manage Booking</a></li>

                                <li><a class="<?php echo ($page == 'chat') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chat">Approve Booking</a></li>

                                <li><a class="<?php echo ($page == 'chat') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chat">Update Booking</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'chat' || $page == 'calendar' || $page == 'email' || $page == 'todo' || $page == 'notes' || $page == 'file-manager' || $page == 'video-call' || $page == 'audio-call' || $page == 'call-history') ? 'subdrop active' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Payment </span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'chat') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chat">Fuel Payment</a></li>

                                <li><a class="<?php echo ($page == 'chat') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chat">Urea Payment</a></li>

                                <li><a class="<?php echo ($page == 'chat') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>chat">Money Payment</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'module') ? 'subdrop active' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Modules </span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'module') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>module">Module list</a></li>

                                <li><a class="<?php echo ($page == 'module/add') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>module/add">Add new module</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <h6 class="submenu-hdr">Other</h6>
                    <ul>
                        <li>
                            <a href="profile" class="<?php echo ($page == 'Profile') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-layout-2"></i><span>Move Vehicle with No Booking</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile" class="<?php echo ($page == 'Profile') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-layout-2"></i><span>Tyre Management Module</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile" class="<?php echo ($page == 'Profile') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-layout-2"></i><span>Add / Replace Driver</span>
                            </a>
                        </li>
                        <li>
                            <a href="profile" class="<?php echo ($page == 'Profile') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-layout-2"></i><span>Complete Booking</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- google Translate block  -->
                <li>
                    <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en',
                                includedLanguages: 'hi,en'
                            }, 'google_translate_element');
                        }
                    </script>
                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    <div id="google_translate_element"></div>
                </li>

                <!-- <li>
                    <h6 class="submenu-hdr">CRM Settings</h6>
                    <ul>
                        <li><a class="<?php echo ($page == 'sources') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>sources"><i class="ti ti-artboard"></i><span>Sources</span></a></li>
                        <li><a class="<?php echo ($page == 'lost-reason') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>lost-reason"><i class="ti ti-message-exclamation"></i><span>Lost
                                    Reason</span></a></li>
                        <li><a class="<?php echo ($page == 'contact-stage') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>contact-stage"><i class="ti ti-steam"></i><span>Contact
                                    Stage</span></a></li>
                        <li><a class="<?php echo ($page == 'industry') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>industry"><i class="ti ti-building-factory"></i><span>Industry</span></a></li>
                        <li><a class="<?php echo ($page == 'calls') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>calls"><i class="ti ti-phone-check"></i><span>Calls</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">User Management</h6>
                    <ul>
                        <li><a class="<?php echo ($page == 'manage-users') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>manage-users"><i class="ti ti-users"></i><span>Manage
                                    Users</span></a></li>
                        <li><a class="<?php echo ($page == 'roles-permissions' || $page == 'permission') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>roles-permissions"><i class="ti ti-navigation-cog"></i><span>Roles
                                    & Permissions</span></a></li>
                        <li><a class="<?php echo ($page == 'delete-request') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>delete-request"><i class="ti ti-flag-question"></i><span>Delete
                                    Request</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Membership</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'membership-plans' || $page == 'membership-addons' || $page == 'membership-transactions') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-file-invoice"></i><span>Membership</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'membership-plans') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>membership-plans">Membership Plans</a></li>
                                <li><a class="<?php echo ($page == 'membership-addons') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>membership-addons">Membership Addons</a></li>
                                <li><a class="<?php echo ($page == 'membership-transactions') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>membership-transactions">Transactions</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Content</h6>
                    <ul>
                        <li><a class="<?php echo ($page == 'pages') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>pages"><i class="ti ti-page-break"></i><span>Pages</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'countries' || $page == 'states' || $page == 'cities') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-map-pin-pin"></i><span>Location</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'countries') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>countries">Countries</a></li>
                                <li><a class="<?php echo ($page == 'states') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>states">States</a></li>
                                <li><a class="<?php echo ($page == 'cities') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>cities">Cities</a></li>
                            </ul>
                        </li>
                        <li><a class="<?php echo ($page == 'testimonials') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>testimonials"><i class="ti ti-quote"></i><span>Testimonials</span></a></li>
                        <li><a class="<?php echo ($page == 'faq') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>faq"><i class="ti ti-question-mark"></i><span>FAQ</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Support</h6>
                    <ul>
                        <li><a class="<?php echo ($page == 'contact-messages') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>contact-messages"><i class="ti ti-page-break"></i><span>Contact
                                    Messages</span></a></li>
                        <li><a class="<?php echo ($page == 'tickets') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>tickets"><i class="ti ti-ticket"></i><span>Tickets</span></a></li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Settings</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'profile' || $page == 'security' || $page == 'notifications' || $page == 'connected-apps') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-settings-cog"></i><span>General Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'profile') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>profile">Profile</a></li>
                                <li><a class="<?php echo ($page == 'security') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>security">Security</a></li>
                                <li><a class="<?php echo ($page == 'notifications') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>notifications">Notifications</a></li>
                                <li><a class="<?php echo ($page == 'connected-apps') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>connected-apps">Connected Apps</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'company-settings' || $page == 'localization' || $page == 'prefixes' || $page == 'preference' || $page == 'appearance' || $page == 'language' ||  $page == 'language-web') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-world-cog"></i><span>Website Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'company-settings') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>company-settings">Company Settings</a></li>
                                <li><a class="<?php echo ($page == 'localization') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>localization">Localization</a></li>
                                <li><a class="<?php echo ($page == 'prefixes') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>prefixes">Prefixes</a></li>
                                <li><a class="<?php echo ($page == 'preference') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>preference">Preference</a></li>
                                <li><a class="<?php echo ($page == 'appearance') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>appearance">Appearance</a></li>
                                <li><a class="<?php echo ($page == 'language' || $page == 'language-web') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>language">Language</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'invoice-settings' || $page == 'printers' || $page == 'custom-fields') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-apps"></i><span>App Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'invoice-settings') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>invoice-settings">Invoice Settings</a></li>
                                <li><a class="<?php echo ($page == 'printers') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>printers">Printers</a></li>
                                <li><a class="<?php echo ($page == 'custom-fields') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>custom-fields">Custom Fields</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'email-settings' || $page == 'sms-gateways' || $page == 'gdpr-cookies') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-device-laptop"></i><span>System Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'email-settings') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>email-settings">Email Settings</a></li>
                                <li><a class="<?php echo ($page == 'sms-gateways') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>sms-gateways">SMS Gateways</a></li>
                                <li><a class="<?php echo ($page == 'gdpr-cookies') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>gdpr-cookies">GDPR Cookies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'payment-gateways' || $page == 'bank-accounts' || $page == 'tax-rates' || $page == 'currencies') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-moneybag"></i><span>Financial Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'payment-gateways') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>payment-gateways">Payment Gateways</a></li>
                                <li><a class="<?php echo ($page == 'bank-accounts') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>bank-accounts">Bank Accounts</a></li>
                                <li><a class="<?php echo ($page == 'tax-rates') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>tax-rates">Tax Rates</a></li>
                                <li><a class="<?php echo ($page == 'currencies') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>currencies">Currencies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'storage' || $page == 'ban-ip-address') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-flag-cog"></i><span>Other Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'storage') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>storage">Storage</a></li>
                                <li><a class="<?php echo ($page == 'ban-ip-address') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>ban-ip-address">Ban IP Address</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h6 class="submenu-hdr">Pages</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'index' || $page == 'register' || $page == 'forgot-password' || $page == 'reset-password' || $page == 'email-verification' || $page == 'two-step-verification' || $page == 'lock-screen') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-lock-square-rounded"></i><span>Authentication</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'index') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>index">Login</a></li>
                                <li><a class="<?php echo ($page == 'register') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>register">Register</a></li>
                                <li><a class="<?php echo ($page == 'forgot-password') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>forgot-password">Forgot Password</a></li>
                                <li><a class="<?php echo ($page == 'reset-password') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>reset-password">Reset Password</a></li>
                                <li><a class="<?php echo ($page == 'email-verification') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>email-verification">Email Verification</a></li>
                                <li><a class="<?php echo ($page == 'two-step-verification') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>two-step-verification">2 Step Verification</a></li>
                                <li><a class="<?php echo ($page == 'lock-screen') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>lock-screen">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'error-404' || $page == 'error-500') ? 'subdrop active' : ''; ?>">
                                <i class="ti ti-error-404"></i><span>Error Pages</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a class="<?php echo ($page == 'error-404') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>error-404">404 Error</a></li>
                                <li><a class="<?php echo ($page == 'error-500') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>error-500">500 Error</a></li>
                            </ul>
                        </li>
                        <li><a class="<?php echo ($page == 'blank-page') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>blank-page"><i class="ti ti-apps"></i><span>Blank Page</span></a>
                        </li>
                        <li><a class="<?php echo ($page == 'coming-soon') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>coming-soon"><i class="ti ti-device-laptop"></i><span>Coming
                                    Soon</span></a></li>
                        <li><a class="<?php echo ($page == 'under-maintenance') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>under-maintenance"><i class="ti ti-moneybag"></i><span>Under
                                    Maintenance</span></a></li>
                    </ul>
                </li> -->

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->