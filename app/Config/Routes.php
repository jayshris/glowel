<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::Index');
$routes->get('activities', 'Home::Activities');
$routes->get('activity-calls', 'Home::Activity_Calls');
$routes->get('activity-mail', 'Home::Activity_Mail');
$routes->get('activity-meeting', 'Home::Activity_Meeting');
$routes->get('activity-task', 'Home::Activity_Task');
$routes->get('analytics', 'Home::Analytics');
$routes->get('appearance', 'Home::Appearance');
$routes->get('audio-call', 'Home::Audio_Call');
$routes->get('ban-ip-address', 'Home::Ban_Ip_Address');
$routes->get('bank-accounts', 'Home::Bank_Accounts');
$routes->get('blank-page', 'Home::Blank_Page');
$routes->get('calendar', 'Home::Calendar');
$routes->get('call-history', 'Home::Call_History');
$routes->get('calls', 'Home::Calls');
$routes->get('campaign-archieve', 'Home::Campaign_Archieve');
$routes->get('campaign-complete', 'Home::Campaign_Complete');
$routes->get('campaign', 'Home::Campaign');
$routes->get('chart-apex', 'Home::Chart_Apex');
$routes->get('chart-c3', 'Home::Chart_C3');
$routes->get('chart-flot', 'Home::Chart_Flot');
$routes->get('chart-js', 'Home::Chart_Js');
$routes->get('chart-morris', 'Home::Chart_Morris');
$routes->get('chart-peity', 'Home::Chart_Peity');
$routes->get('chat', 'Home::Chat');
$routes->get('cities', 'Home::Cities');
$routes->get('coming-soon', 'Home::Coming_Soon');
$routes->get('companies-grid', 'Home::Companies_Grid');
$routes->get('companies', 'Home::Companies');
$routes->get('company-details', 'Home::Company_Details');
$routes->get('company-reports', 'Home::Company_Reports');
$routes->get('company-settings', 'Home::Company_Settings');
$routes->get('connected-apps', 'Home::Connected_Apps');
$routes->get('contact-details', 'Home::Contact_Details');
$routes->get('contact-grid', 'Home::Contact_Grid');
$routes->get('contact-messages', 'Home::Contact_Messages');
$routes->get('contact-reports', 'Home::Contact_Reports');
$routes->get('contact-stage', 'Home::Contact_Stage');
$routes->get('contacts', 'Home::Contacts');
$routes->get('countries', 'Home::Countries');
$routes->get('currencies', 'Home::Currencies');
$routes->get('custom-fields', 'Home::Custom_Fields');
$routes->get('data-tables', 'Home::Data_Tables');
$routes->get('deal-reports', 'Home::Deal_Reports');
$routes->get('deals-dashboard', 'Home::Deals_Dashboard');
$routes->get('deals-details', 'Home::Deals_Details');
$routes->get('deals-kanban', 'Home::Deals_Kanban');
$routes->get('deals', 'Home::Deals');
$routes->get('delete-request', 'Home::Delete_Request');
$routes->get('email-settings', 'Home::Email_settings');
$routes->get('email-verification-2', 'Home::Email_Verification_2');
$routes->get('email-verification-3', 'Home::Email_Verification_3');
$routes->get('email-verification', 'Home::Email_Verification');
$routes->get('email', 'Home::Email');
$routes->get('error-404', 'Home::Error_404');
$routes->get('error-500', 'Home::Error_500');
$routes->get('faq', 'Home::Faq');
$routes->get('file-manager', 'Home::File_Manager');
$routes->get('forgot-password-2', 'Home::Forgot_Password_2');
$routes->get('forgot-password-3', 'Home::Forgot_Password_3');
$routes->get('forgot-password', 'Home::Forgot_Password');
$routes->get('form-basic-inputs', 'Home::Form_Basic_Inputs');
$routes->get('form-checkbox-radios', 'Home::Form_Checkbox_Radios');
$routes->get('form-elements', 'Home::Form_Elements');
$routes->get('form-fileupload', 'Home::Form_Fileupload');
$routes->get('form-floating-labels', 'Home::Form_Floating_Labels');
$routes->get('form-grid-gutters', 'Home::Form_Grid_Gutters');
$routes->get('form-horizontal', 'Home::Form_Horizontal');
$routes->get('form-input-groups', 'Home::Form_Input_Groups');
$routes->get('form-mask', 'Home::Form_Mask');
$routes->get('form-select', 'Home::Form_Select');
$routes->get('form-select2', 'Home::Form_Select2');
$routes->get('form-validation', 'Home::Form_Validation');
$routes->get('form-vertical', 'Home::Form_Vertical');
$routes->get('form-wizard', 'Home::Form_Wizard');
$routes->get('gdpr-cookies', 'Home::Gdpr_Cookies');
$routes->get('icon-feather', 'Home::Icon_Feather');
$routes->get('icon-flag', 'Home::Icon_Flag');
$routes->get('icon-fontawesome', 'Home::Icon_Fontawesome');
$routes->get('icon-ionic', 'Home::Icon_Ionic');
$routes->get('icon-material', 'Home::Icon_Material');
$routes->get('icon-pe7', 'Home::Icon_Pe7');
$routes->get('icon-simpleline', 'Home::Icon_Simpleline');
$routes->get('icon-themify', 'Home::Icon_Themify');
$routes->get('icon-typicon', 'Home::Icon_Typicon');
$routes->get('icon-weather', 'Home::Icon_Weather');
$routes->get('index', 'Home::Index');
$routes->get('industry', 'Home::Industry');
$routes->get('invoice-settings', 'Home::Invoice_settings');
$routes->get('language-web', 'Home::Language_Web');
$routes->get('language', 'Home::Language');
$routes->get('lead-reports', 'Home::Lead_Reports');
$routes->get('leads-dashboard', 'Home::Leads_Dashboard');
$routes->get('leads-details', 'Home::Leads_Details');
$routes->get('leads-kanban', 'Home::Leads_Kanban');
$routes->get('leads', 'Home::Leads');
$routes->get('localization', 'Home::Localization');
$routes->get('lock-screen', 'Home::Lock_Screen');
$routes->get('login-2', 'Home::Login_2');
$routes->get('login-3', 'Home::Login_3');
$routes->get('lost-reason', 'Home::Lost_Reason');
$routes->get('manage-users', 'Home::Manage_Users');
$routes->get('membership-addons', 'Home::Membership_Addons');
$routes->get('membership-plans', 'Home::Membership_Plans');
$routes->get('membership-transactions', 'Home::Membership_Transactions');
$routes->get('notes', 'Home::Notes');
$routes->get('notifications', 'Home::Notifications');
$routes->get('pages', 'Home::Pages');
$routes->get('payment-gateways', 'Home::Payment_Gateways');
$routes->get('permission', 'Home::Permission');
$routes->get('pipeline', 'Home::Pipeline');
$routes->get('preference', 'Home::Preference');
$routes->get('prefixes', 'Home::Prefixes');
$routes->get('printers', 'Home::Printers');
$routes->get('project-dashboard', 'Home::Project_Dashboard');
$routes->get('project-details', 'Home::Project_Details');
$routes->get('project-grid', 'Home::Project_Grid');
$routes->get('project-reports', 'Home::Project_Reports');
$routes->get('projects', 'Home::Projects');
$routes->get('register-2', 'Home::Register_2');
$routes->get('register-3', 'Home::Register_3');
$routes->get('register', 'Home::Register');
$routes->get('reset-password-2', 'Home::Reset_Password_2');
$routes->get('reset-password-3', 'Home::Reset_Password_3');
$routes->get('reset-password', 'Home::Reset_Password');
$routes->get('roles-permissions', 'Home::Roles_Permissions');
$routes->get('security', 'Home::Security');
$routes->get('sms-gateways', 'Home::Sms_Gateways');
$routes->get('sources', 'Home::Sources');
$routes->get('states', 'Home::States');
$routes->get('storage', 'Home::Storage');
$routes->get('success-2', 'Home::success_2');
$routes->get('success-3', 'Home::success_3');
$routes->get('success', 'Home::success');
$routes->get('tables-basic', 'Home::Tables_Basic');
$routes->get('task-reports', 'Home::Task_Reports');
$routes->get('tasks-completed', 'Home::Tasks_Completed');
$routes->get('tasks-important', 'Home::Tasks_Important');
$routes->get('tasks', 'Home::Tasks');
$routes->get('tax-rates', 'Home::Tax_Rates');
$routes->get('testimonials', 'Home::Testimonials');
$routes->get('tickets', 'Home::Tickets');
$routes->get('todo', 'Home::Todo');
$routes->get('two-step-verification-3', 'Home::Two_Step_verification_3');
$routes->get('two-step-verification-2', 'Home::Two_Step_verification_2');
$routes->get('two-step-verification', 'Home::Two_Step_verification');
$routes->get('ui-accordion', 'Home::Ui_Accordion');
$routes->get('ui-alerts', 'Home::Ui_Alerts');
$routes->get('ui-avatar', 'Home::Ui_Avatar');
$routes->get('ui-badges', 'Home::Ui_Badges');
$routes->get('ui-borders', 'Home::Ui_Borders');
$routes->get('ui-breadcrumb', 'Home::Ui_Breadcrumb');
$routes->get('ui-buttons-group', 'Home::Ui_Buttons_Group');
$routes->get('ui-buttons', 'Home::Ui_Buttons');
$routes->get('ui-cards', 'Home::Ui_Cards');
$routes->get('ui-carousel', 'Home::Ui_Carousel');
$routes->get('ui-clipboard', 'Home::Ui_Clipboard');
$routes->get('ui-colors', 'Home::Ui_Colors');
$routes->get('ui-counter', 'Home::Ui_Counter');
$routes->get('ui-drag-drop', 'Home::Ui_Drag_Drop');
$routes->get('ui-dropdowns', 'Home::Ui_Dropdowns');
$routes->get('ui-grid', 'Home::Ui_Grid');
$routes->get('ui-images', 'Home::Ui_Images');
$routes->get('ui-lightbox', 'Home::Ui_Lightbox');
$routes->get('ui-media', 'Home::Ui_Media');
$routes->get('ui-modals', 'Home::Ui_Modals');
$routes->get('ui-nav-tabs', 'Home::Ui_Nav_Tabs');
$routes->get('ui-offcanvas', 'Home::Ui_Offcanvas');
$routes->get('ui-pagination', 'Home::Ui_Pagination');
$routes->get('ui-placeholders', 'Home::Ui_Placeholders');
$routes->get('ui-popovers', 'Home::Ui_Popovers');
$routes->get('ui-progress', 'Home::Ui_Progress');
$routes->get('ui-rangeslider', 'Home::Ui_Rangeslider');
$routes->get('ui-rating', 'Home::Ui_Rating');
$routes->get('ui-ribbon', 'Home::Ui_Ribbon');
$routes->get('ui-scrollbar', 'Home::Ui_Scrollbar');
$routes->get('ui-spinner', 'Home::Ui_Spinner');
$routes->get('ui-stickynote', 'Home::Ui_Stickynote');
$routes->get('ui-sweetalerts', 'Home::Ui_Sweetalerts');
$routes->get('ui-text-editor', 'Home::Ui_Text_Editor');
$routes->get('ui-timeline', 'Home::Ui_Timeline');
$routes->get('ui-toasts', 'Home::Ui_Toasts');
$routes->get('ui-tooltips', 'Home::Ui_Tooltips');
$routes->get('ui-typography', 'Home::Ui_Typography');
$routes->get('ui-video', 'Home::Ui_Video');
$routes->get('under-maintenance', 'Home::Under_Maintenance');
$routes->get('video-call', 'Home::Video_Call');

$routes->get('journals', 'Blog::index');
$routes->get('profile', 'Profile::index');
$routes->get('profile/index', 'Profile::index');
$routes->get('profile/update', 'Profile::update');

$routes->get('company', 'Company::index');
$routes->get('company/create', 'Company::create');
$routes->post('company/save', 'Company::add_validation');
$routes->get('office', 'Office::index');
$routes->get('office/create', 'Office::create');

// pankaj routes from 05 june 24
// Product Types
$routes->get('product-types', 'ProductType::index');
$routes->match(['get', 'post'], 'product-types/create', 'ProductType::create');
$routes->match(['get', 'post'], 'product-types/edit/(:num)', 'ProductType::edit/$1');
$routes->get('product-types-delete/(:num)', 'ProductType::delete/$1');

// Product Categories
$routes->match(['get', 'post'], 'product-categories', 'ProductCategory::index');
$routes->match(['get', 'post'], 'product-categories/create', 'ProductCategory::create');
$routes->match(['get', 'post'], 'product-categories/edit/(:num)', 'ProductCategory::edit/$1');
$routes->get('product-categories-delete/(:num)', 'ProductCategory::delete/$1');

// Products
$routes->match(['get', 'post'], 'products', 'Products::index');
$routes->match(['get', 'post'], 'products/create', 'Products::create');
$routes->match(['get', 'post'], 'products/edit/(:num)', 'Products::edit/$1');
$routes->get('products-delete/(:num)', 'Products::delete/$1');
$routes->post('products/getCategory', 'Products::getCategory');

// Warehouses
$routes->match(['get', 'post'], 'warehouses', 'Warehouses::index');
$routes->match(['get', 'post'], 'warehouses/create', 'Warehouses::create');
$routes->match(['get', 'post'], 'warehouses/edit/(:num)', 'Warehouses::edit/$1');
$routes->get('warehouses-delete/(:num)', 'Warehouses::delete/$1');
$routes->post('warehouses/getOffice', 'Warehouses::getOffice');

// Sales
$routes->match(['get', 'post'], 'sales', 'Sales::index');
$routes->match(['get', 'post'], 'sales/create', 'Sales::create');
$routes->match(['get', 'post'], 'sales/add-products/(:num)', 'Sales::addProducts/$1');
$routes->post('sales/getProducts', 'Sales::getProducts');
$routes->get('sales/delete-product/(:num)/(:num)', 'Sales::deleteProd/$1/$2');

$routes->match(['get', 'post'], 'sales/edit/(:num)', 'Sales::edit/$1');

$routes->get('sales/getOrderProducts/(:num)', 'Sales::getOrderProducts/$1');
$routes->get('sales/sendToInvoice/(:num)', 'Sales::sendToInvoice/$1');
$routes->match(['get', 'post'], 'sales/sales-checkout/(:num)', 'Sales::salesCheckout/$1');
$routes->get('sales/deleteSaleOrder/(:num)', 'Sales::deleteSaleOrder/$1');

//purchase
$routes->match(['get', 'post'], 'purchase', 'Purchase::index');
$routes->match(['get', 'post'], 'purchase/create', 'Purchase::create');
$routes->match(['get', 'post'], 'purchase/edit/(:num)', 'Purchase::edit/$1');
$routes->match(['get', 'post'], 'purchase/add-products/(:num)', 'Purchase::addProducts/$1');
$routes->post('purchase/getProducts', 'Purchase::getProducts');
$routes->get('purchase/delete-product/(:num)/(:num)', 'Purchase::deleteProd/$1/$2'); 
$routes->get('purchase/getOrderProducts/(:num)', 'Purchase::getOrderProducts/$1');
$routes->get('purchase/sendToInvoice/(:num)', 'Purchase::sendToInvoice/$1');
$routes->match(['get', 'post'], 'purchase/purchase-checkout/(:num)', 'Purchase::purchaseCheckout/$1');
$routes->get('purchase/deletePurchaseOrder/(:num)', 'Purchase::deletePurchaseOrder/$1');
$routes->post('purchase/showWebCam', 'Purchase::showWebCam');

//Invoice listing
$routes->match(['get', 'post'], 'invoices', 'Invoices::index');
$routes->match(['get', 'post'], 'invoices/create/(:num)', 'Invoices::create/$1');

// auto routes must be set false... for security
$routes->setAutoRoute(true);
