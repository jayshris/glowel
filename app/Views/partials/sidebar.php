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
                                <!-- <li><a class="<?php echo ($page == 'ProductType') ? 'active' : ''; ?>" href="<?php echo base_url('product-types'); ?>">Product Types</a></li> -->

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
                            <a href="javascript:void(0);" class="<?php echo ($page == 'Purchase') ? 'active subdrop' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Purchase</span><span class="menu-arrow"></span></a>
                            <ul>
                                <!-- purchase Orders  -->
                                <li><a class="<?php echo ($page == 'Purchase') ? 'active' : ''; ?>" href="<?php echo base_url('purchase'); ?>">Purchase Orders</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'Invoices') ? 'active subdrop' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Invoices</span><span class="menu-arrow"></span></a>
                            <ul>
                                <!-- purchase Orders  -->
                                <li><a class="<?php echo ($page == 'Invoices') ? 'active' : ''; ?>" href="<?php echo base_url('invoices'); ?>">Invoices</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="<?php echo ($page == 'Company' || $page == 'Office' || $page == 'Warehouses' || $page == 'Units') ? 'active subdrop' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Setup</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'Company') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>company/create">Add Company</a></li>
                                <li><a class="<?php echo ($page == 'Company') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>company">Company Listing Screen</a></li>
                                <li><a class="<?php echo ($page == 'Office') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>office/create">Add Office</a></li>
                                <li><a class="<?php echo ($page == 'Office') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>office">Office Listing Screen</a></li>
                                
                                <!-- Warehouses -->
                                <li><a class="<?php echo ($page == 'Warehouses') ? 'active' : ''; ?>" href="<?php echo base_url('warehouses'); ?>">Warehouses</a></li>

                                <li><a class="<?php echo ($page == 'flags/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>flags/create">Add Flag</a></li>
                                <li><a class="<?php echo ($page == 'flags') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>flags">Flags</a></li>

                                <li><a class="<?php echo ($page == 'partytype') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>partytype">Party Type</a></li>
                                <li><a class="<?php echo ($page == 'partytype/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>partytype/create">Add Party Type</a></li>
                                
                                <li><a class="<?php echo ($page == 'businesstype') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>businesstype">Business Type</a></li>
                                <li><a class="<?php echo ($page == 'businesstype/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>businesstype/create">Add Business Type</a></li>

                                <li><a class="<?php echo ($page == 'Units') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>units">Unit Listing Screen</a></li>
                                <li><a class="<?php echo ($page == 'Units') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>units/create">Add Unit</a></li>
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

                        <li class="submenu">
                            <a href="" class="<?php echo ($page == 'user/index' || $page == 'user/create') ? 'subdrop active' : ''; ?>"><i class="ti ti-brand-airtable"></i><span>Party</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="<?php echo ($page == 'party') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>party">Party </a></li>
                                <li><a class="<?php echo ($page == 'party/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>party/create">Add Party </a></li>

                                <!-- <li><a class="<?php echo ($page == 'partyclassification') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>partyclassification">Party Classification</a></li>
                                <li><a class="<?php echo ($page == 'partyclassification/create') ? 'active' : ''; ?>" href="<?php echo base_url(); ?>partyclassification/create">Add Party Classification </a></li> -->
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
            </ul>
        </div>
    </div>
</div>