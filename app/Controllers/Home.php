<?php

namespace App\Controllers;

class Home extends BaseController
 {
    
    public function Activities()
    {
        $data = [
                'page_title' => view( 'partials/page-title', [ 'title' => 'Activities', 'li_1' => '123', 'li_2' => 'activities' ] )
                ];
        return view( 'activities',$data );
    }

    public function Activity_Calls()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Activities', 'li_1' => '123', 'li_2' => 'activity-calls' ] )
            ];
        return view( 'activity-calls',$data );
    }

    public function Activity_Mail()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Activities', 'li_1' => '123', 'li_2' => 'activity-mail' ] )
            ];
        return view( 'activity-mail',$data );
    }

    public function Activity_Meeting()
    { $data = [
        'page_title' => view( 'partials/page-title', [ 'title' => 'Activities', 'li_1' => '123', 'li_2' => 'activity-meeting' ] )
        ];
        return view( 'activity-meeting',$data );
    }

    public function Activity_Task()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Activities', 'li_1' => '123', 'li_2' => 'activity-task' ] )
            ];
        return view( 'activity-task',$data );
    }

    public function Analytics()
    {
        
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Analytics', 'li_2' => 'analytics' ] )
            ];
        return view( 'analytics' ,$data);
    }

    public function Appearance()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings', 'li_2' => 'appearance' ] )
            ];
        return view( 'appearance',$data );
    }

    public function Audio_Call()
    {
      
        return view( 'audio-call' );
    }

    public function Ban_Ip_Address()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings', 'li_2' => 'ban-ip-address' ] )
            ];
        return view( 'ban-ip-address',$data );
    }

    public function Bank_Accounts()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings', 'li_2' => 'bank-accounts' ] )
            ];
        return view('bank-accounts',$data);
    }

    public function Blank_Page()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Blank Page', 'li_2' => 'blank-page' ] )
            ];
        return view( 'blank-page', $data );
    }

    public function Calendar()
    {
        return view( 'calendar' );
    }

    public function Call_History()
    {
        return view( 'call-history' );
    }

    public function Calls()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Calls Reason', 'li_1' => '123', 'li_2' => 'calls' ] )
            ];
        return view( 'calls', $data  );
    }

    public function Campaign_Archieve()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Campaign', 'li_1' => '123', 'li_2' => 'campaign-archieve' ] )
            ];
        return view( 'campaign-archieve',$data );
    }

    public function Campaign_Complete()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Campaign', 'li_1' => '123', 'li_2' => 'campaign-complete' ] )
            ];
        return view( 'campaign-complete',$data);
    }
    
    public function Campaign()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Campaign', 'li_1' => '123', 'li_2' => 'campaign' ] )
            ];
        return view( 'campaign',$data);
    }

    public function Chart_Apex()
    {
        
        return view( 'chart-apex');
    }

    public function Chart_C3()
    {
        return view( 'chart-c3');
    }

    public function chart_flot()
    {
        return view( 'chart-flot');
    }

    public function Chart_Morris()
    {
        return view( 'chart-morris');
    }

    public function Chart_Peity()
    {
        return view( 'chart-peity');
    }

    public function Chart_Js()
    {
        return view( 'chart-js');
    }

    public function Chat()
    {
        return view( 'chat');
    }

    public function Cities()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Cities','li_2' => 'cities' ] )
            ];
        return view( 'cities', $data);
    }

    public function Coming_Soon()
    {
        return view( 'coming-soon');
    }

    public function Companies()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Companies', 'li_1' => '123', 'li_2' => 'companies' ] )
            ];
        return view( 'companies',$data);
    }

    public function Companies_Grid()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Companies', 'li_1' => '123', 'li_2' => 'companies-grid' ] )
            ];
        return view( 'companies-grid',$data);
    }

    public function Company_Details()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Company Overview',  'li_2' => 'company-details' ] )
            ];
        return view( 'company-details',$data);
    }

    public function Company_Reports()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Company Report', 'li_1' => '123', 'li_2' => 'company-reports' ] )
            ];
        return view( 'company-reports', $data);
    }

    public function Company_Settings()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings', 'li_2' => 'company-settings' ] )
            ];
        return view( 'company-settings',$data);
    }

    public function Connected_Apps()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings', 'li_2' => 'connected-apps' ] )
            ];
        return view( 'connected-apps', $data);
    }

    public function Contact_Details()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Contacts', 'li_1' => '123','li_2' => 'contact-details' ] )
            ];
        return view( 'contact-details', $data);
    }

    public function Contact_Grid()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Contacts', 'li_1' => '123','li_2' => 'contact-grid' ] )
            ];
        return view( 'contact-grid',$data);
    }

    public function Contact_Messages()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Contact Messages', 'li_1' => '123','li_2' => 'contact-messages' ] )
            ];
        return view( 'contact-messages',$data);
    }

    public function Contact_Reports()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Contact Report', 'li_1' => '123','li_2' => 'contact-reports' ] )
            ];
        return view( 'contact-reports', $data);
    }

    public function Contacts()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Contacts', 'li_1' => '123','li_2' => 'contacts' ] )
            ];
        return view( 'contacts',  $data);
    }

    public function Contact_Stage()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Contact Stages', 'li_1' => '123','li_2' => 'contact-stage' ] )
            ];
        return view( 'contact-stage', $data );
    }

    public function Countries()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Countries','li_2' => 'countries' ] )
            ];
        return view( 'countries',$data);
    }

    public function Currencies()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings', 'li_2' => 'currencies' ] )
            ];
        return view( 'currencies',$data);
        
    }

    public function Custom_Fields()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings', 'li_2' => 'custom-fields' ] )
            ];
        return view( 'custom-fields', $data);
    }

    public function Data_Tables()
    {
        return view( 'data-tables');
    }

    public function Deal_Reports()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Deals ', 'li_1' => '123','li_2' => 'deal-reports' ] )
            ];
        return view( 'deal-reports',$data);
    }

    public function Deals_Dashboard()
    {
        return view( 'deals-dashboard' );
    }

    public function Deals_Details()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Deals Overview ','li_2' => 'deals-details' ] )
            ];
        return view( 'deals-details', $data);
    }

    public function Deals_Kanban()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Deals','li_1' => '123','li_2' => 'deals-kanban' ] )
            ];
        return view( 'deals-kanban', $data );
    }

    public function Deals()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Deals','li_1' => '123','li_2' => 'deals' ] )
            ];
        return view('deals',$data);
    }

    public function Delete_Request()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Delete Account Request','li_1' => '123','li_2' => 'delete-request' ] )
            ];
        return view('delete-request',$data);
    }

    public function Email_settings()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings','li_2' => 'email-settings' ] )
            ];
        return view('email-settings',$data);
    }

    public function Email_Verification_2()
    {
        return view('email-verification-2');
    }

    public function Email_Verification_3()
    {
        return view('email-verification-3');
    }

    public function Email_Verification()
    {
        return view('email-verification');
    }

    public function Email()
    {
        return view('email');
    }

    public function Error_404()
    {
        return view('error-404');
    }

    public function Error_500()
    {
        return view('error-500');
    }

    public function Faq()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'FAQ', 'li_2' => 'faq' ] )
            ];
        return view('faq',$data);
    }

    public function File_Manager()
    {
        return view('file-manager');
    }

    public function Forgot_Password_2()
    {
        return view('forgot-password-2');
    }

    public function Forgot_Password_3()
    {
        return view('forgot-password-3');
    }

    public function Forgot_Password()
    {
        return view('forgot-password');
    }

    public function Form_Basic_Inputs()
    {
        return view('form-basic-inputs');
    }

    public function Form_Checkbox_Radios()
    {
        return view('form-checkbox-radios');
    }

    public function Form_Elements()
    {
        return view('form-elements');
    }

    public function Form_Fileupload()
    {
        return view('form-fileupload');
    }

    public function Form_Floating_Labels()
    {
        return view('form-floating-labels');
    }

    public function Form_Grid_Gutters()
    {
        return view('form-grid-gutters');
    }

    public function Form_Horizontal()
    {
        return view('form-horizontal');
    }

    public function Form_Input_Groups()
    {
        return view('form-input-groups');
    }

    public function Form_Mask()
    {
        return view('form-mask');
    }

    public function Form_Select()
    {
        return view('form-select');
    }

    public function Form_Select2()
    {
        return view('form-select2');
    }

    public function Form_Validation()
    {
        return view('form-validation');
    }

    public function Form_Vertical()
    {
        return view('form-vertical');
    }

    public function Form_Wizard()
    {
        return view('form-wizard');
    }

    public function Gdpr_Cookies()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings', 'li_2' => 'gdpr-cookies' ] )
            ];
        return view('gdpr-cookies',$data);
    }

    public function Icon_Feather()
    {
        return view('icon-feather');
    }

    public function Icon_Flag()
    {
        return view('icon-flag');
    }

    public function Icon_Fontawesome()
    {
        return view('icon-fontawesome');
    }

    public function Icon_Ionic()
    {
        return view('icon-ionic');
    }

    public function Icon_Material()
    {
        return view('icon-material');
    }

    public function Icon_Pe7()
    {
        return view('icon-pe7');
    }

    public function Icon_Simpleline()
    {
        return view('icon-simpleline');
    }

    public function Icon_Themify()
    {
        return view('icon-themify');
    }

    public function Icon_Typicon()
    {
        return view('icon-typicon');
    }

    public function Icon_Weather()
    {
        return view('icon-weather');
    }

    public function Index()
    {
        return view('index');
    }

    public function Industry()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Industry ','li_1' => '123','li_2' => 'industry' ] )
            ];
        return view('industry',$data);
    }

    public function Invoice_settings()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings ','li_2' => 'invoice-settings' ] )
            ];
        return view('invoice-settings', $data);
    }

    public function Language_Web()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings ','li_2' => 'language-web' ] )
            ];
        return view( 'language-web', $data );
    }

    public function Language()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings ','li_2' => 'language' ] )
            ];
        return view( 'language',$data );
    }

    public function Lead_Reports()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Leads Report ','li_1' => '123','li_2' => 'lead-reports' ] )
            ];
        return view( 'lead-reports',$data );
    }

    public function Leads_Dashboard()
    {
        return view( 'leads-dashboard' );
    }

    public function Leads_Details()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Leads Overview','li_2' => 'leads-details' ] )
            ];
        return view( 'leads-details', $data );
    }

    public function Leads_Kanban()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Leads','li_1' => '123','li_2' => 'leads-kanban' ] )
            ];
        return view( 'leads-kanban', $data );
    }

    public function Leads()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Leads','li_1' => '123','li_2' => 'leads' ] )
            ];
        return view( 'leads', $data );
    }

    public function Localization()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings','li_2' => 'localization' ] )
            ];
        return view( 'localization',$data );           
    }

    public function Lock_Screen()
    {
        return view( 'lock-screen' );
    }

    public function Login_2()
    {
        return view( 'login-2' );
    }

    public function Login_3()
    {
        return view( 'login-3' );
    }

    public function Lost_Reason()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Lost Reason','li_1' => '123','li_2' => 'lost-reason' ] )
            ];
        return view( 'lost-reason', $data );
    }

    public function Manage_Users()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => ' User','li_1' => '123','li_2' => 'manage-users' ] )
            ];
        return view( 'manage-users',$data );
    }

    public function Membership_Addons()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => ' Membership Addons','li_2' => 'membership-addons' ] )
            ];
        return view( 'membership-addons',$data );
    }

    public function Membership_Plans()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => ' Membership plans','li_2' => 'membership-plans' ] )
            ];
        return view( 'membership-plans' ,$data );
    }

    public function Membership_Transactions()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Membership Transactions','li_2' => 'membership-transactions' ] )
            ];
        return view( 'membership-transactions',$data );
    }

    public function Notes()
    {
       
        return view( 'notes' );
    }

    public function Notifications()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings','li_2' => 'notifications' ] )
            ];
        return view( 'notifications', $data  );
    }

    public function Pages()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Pages','li_1' => '123','li_2' => 'pages' ] )
            ];
        return view( 'pages', $data );
    }
    
    public function Payment_Gateways()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings','li_2' => 'payment-gateways' ] )
            ];
        return view( 'payment-gateways',$data );
    }

    public function Permission()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Permission','li_2' => 'permission' ] )
            ];
        return view( 'permission', $data );
    }

    public function Pipeline()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Pipeline','li_1' => '123','li_2' => 'pipeline' ] )
            ];
        return view( 'pipeline',$data );
    }

    public function Preference()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings','li_2' => 'preference' ] )
            ];
        return view( 'preference',$data );
    }

    public function Prefixes()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings','li_2' => 'prefixes' ] )
            ];
        return view( 'prefixes',$data );     
    }

    public function Printers()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings','li_2' => 'printers' ] )
            ];
        return view( 'printers', $data );
    }

    public function Profile()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Profile','li_2' => 'profile' ] )
            ];
        return view( 'profile',$data );
    }

    public function Project_Dashboard()
    {
        return view( 'project-dashboard' );
    }

    public function Project_Details()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Project Overview','li_2' => 'project-details' ] )
            ];
        return view( 'project-details',$data );
    }

    public function Project_Grid()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Projects','li_1' => '123','li_2' => 'project-grid' ] )
            ];
        return view( 'project-grid',$data);
    }

    public function Project_Reports()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Project Report','li_1' => '123','li_2' => 'project-reports' ] )
            ];
        return view( 'project-reports', $data );
    }

    public function Projects()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Projects','li_1' => '123','li_2' => 'projects' ] )
            ];
        return view( 'projects',$data );
    }

    public function Register_2()
    {
        return view( 'register-2' );
    }

    public function Register_3()
    {
        return view( 'register-3' );
    }

    public function Register()
    {
        return view( 'register' );
    }

    public function Reset_Password_2()
    {
        return view( 'reset-password-2' );
    }

    public function Reset_Password_3()
    {
        return view( 'reset-password-3' );
    }

    public function Reset_Password()
    {
        return view( 'reset-password' );
    }

    public function Roles_Permissions()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Roles','li_2' => 'roles-permissions' ] )
            ];
        return view( 'roles-permissions', $data );
    }

    public function Security()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings','li_2' => 'security' ] )
            ];
        return view( 'security', $data );
    }

    public function Sms_Gateways()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings','li_2' => 'sms-gateways' ] )
            ];
        return view( 'sms-gateways',$data );
    }

    public function Sources()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Sources','li_1' => '123','li_2' => 'sources' ] )
            ];
        return view( 'sources',$data );
    }

    public function States()
    { 
        $data = [
        'page_title' => view( 'partials/page-title', [ 'title' => 'States','li_2' => 'states' ] )
        ];
        return view( 'states',$data );
    }

    public function Storage()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings','li_2' => 'storage' ] )
            ];
        return view( 'storage',$data );
    }

    public function Success_2()
    {
        return view( 'success-2' );
    }

    public function Success_3()
    {
        return view( 'success-3' );
    }

    public function Success()
    {
        return view( 'success' );
    }

    public function Tables_Basic()
    {
        return view( 'tables-basic' );
    }

    public function Task_Reports()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Task Reports','li_1' => '123','li_2' => 'task-reports' ])
            ];
        return view( 'task-reports', $data );
    }

    public function Tasks_Completed()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Tasks','li_1' => '123','li_2' => 'tasks-completed' ])
            ];
        return view( 'tasks-completed',$data );
    }

    public function Tasks_Important()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Tasks','li_1' => '123','li_2' => 'tasks-important' ])
            ];
        return view( 'tasks-important', $data );
    }

    public function Tasks()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Tasks','li_1' => '123','li_2' => 'tasks' ])
            ];
        return view( 'tasks',$data );
    }

    public function Tax_Rates()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Settings','li_2' => 'tax-rates' ])
            ];
        return view( 'tax-rates',$data );
    }

    public function Testimonials()
    {  $data = [
        'page_title' => view( 'partials/page-title', [ 'title' => 'Testimonials','li_2' => 'testimonials' ])
        ];
        return view( 'testimonials',$data );
    }

    public function Tickets()
    {
        $data = [
            'page_title' => view( 'partials/page-title', [ 'title' => 'Tickets','li_1' => '123','li_2' => 'tickets' ])
            ];
        return view( 'tickets',$data );
    }

    public function Todo()
    {
        return view( 'todo' );
    }
    
    public function Two_Step_verification_3()
    {
        return view( 'two-step-verification-3' );
    }

    public function Two_Step_verification_2()
    {
        return view( 'two-step-verification-2' );
    }

    public function Two_Step_verification()
    {
        return view( 'two-step-verification' );
    }

    public function Ui_Accordion()
    {
        return view( 'ui-accordion' );
    }
    
    public function Ui_Alerts()
    {
        return view( 'ui-alerts' );
    }

    public function Ui_Avatar()
    {
        return view( 'ui-avatar' );
    }

    public function Ui_Badges()
    {
        return view( 'ui-badges' );
    }

    public function Ui_Borders()
    {
        return view( 'ui-borders' );
    }

    public function Ui_Breadcrumb()
    {
        return view( 'ui-breadcrumb' );
    }

    public function Ui_Buttons_Group()
    {
        return view( 'ui-buttons-group' );
    }

    public function Ui_Buttons()
    {
        return view( 'ui-Buttons' );
    }

    public function Ui_Cards()
    {
        return view( 'ui-Cards' );
    }

    public function Ui_Carousel()
    {
        return view( 'ui-carousel' );
    }

    public function Ui_Clipboard()
    {
        return view( 'ui-clipboard' );
    }

    public function Ui_Colors()
    {
        return view( 'ui-colors' );
    }

    public function Ui_Counter()
    {
        return view( 'ui-counter' );
    }

    public function Ui_Drag_Drop()
    {
        return view( 'ui-drag-drop' );
    }

    public function Ui_Dropdowns()
    {
        return view( 'ui-dropdowns' );
    }

    public function Ui_Grid()
    {
        return view( 'ui-grid' );
    }

    public function Ui_Images()
    {
        return view( 'ui-images' );
    }

    public function Ui_Lightbox()
    {
        return view( 'ui-lightbox' );
    }

    public function Ui_Media()
    {
        return view( 'ui-media' );
    }

    public function Ui_Modals()
    {
        return view( 'ui-modals' );
    }

    public function Ui_Nav_Tabs()
    {
        return view( 'ui-nav-tabs' );
    }

    public function Ui_Offcanvas()
    {
        return view( 'ui-offcanvas' );
    }

    public function Ui_Pagination()
    {
        return view( 'ui-pagination' );
    }

    public function Ui_Placeholders()
    {
        return view( 'ui-placeholders' );
    }

    public function Ui_Popovers()
    {
        return view( 'ui-popovers' );
    }

    public function Ui_Progress()
    {
        return view( 'ui-progress' );
    }

    public function Ui_Rangeslider()
    {
        return view( 'ui-rangeslider' );
    }

    public function Ui_Rating()
    {
        return view( 'ui-rating' );
    }

    public function Ui_Ribbon()
    {
        return view( 'ui-ribbon' );
    }

    public function Ui_Scrollbar()
    {
        return view( 'ui-scrollbar' );
    }

    public function Ui_Spinner()
    {
        return view( 'ui-spinner' );
    }

    public function Ui_Stickynote()
    {
        return view( 'ui-stickynote' );
    }

    public function Ui_Sweetalerts()
    {
        return view( 'ui-sweetalerts' );
    }

    public function Ui_Text_Editor()
    {
        return view( 'ui-text-editor' );
    }

    public function Ui_Timeline()
    {
        return view( 'ui-timeline' );
    }

    public function Ui_Toasts()
    {
        return view( 'ui-toasts' );
    }

    public function Ui_Tooltips()
    {
        return view( 'ui-tooltips' );
    }

    public function Ui_Typography()
    {
        return view( 'ui-typography' );
    }

    public function Ui_Video()
    {
        return view( 'ui-video' );
    }

    public function Under_Maintenance()
    {
        return view( 'under-maintenance' );
    }

    public function Video_Call()
    {
        return view( 'video-call' );
    }
      
}
