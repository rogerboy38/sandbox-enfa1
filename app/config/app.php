<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => FALSE,

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => 'http://localhost',

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'America/Mexico_City',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'es',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => 'base64:JcBef5IxwkNpLV+Dhsvo59NBFJWElS8tpSSlqZKjNoM=',

    'cipher' =>  AES-256-CBC,

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => array(

        'Illuminate\Foundation\Providers\ArtisanServiceProvider',
        'Illuminate\Auth\AuthServiceProvider',
        'Illuminate\Cache\CacheServiceProvider',
        'Illuminate\Session\CommandsServiceProvider',
        'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
        'Illuminate\Routing\ControllerServiceProvider',
        'Illuminate\Cookie\CookieServiceProvider',
        'Illuminate\Database\DatabaseServiceProvider',
        'Illuminate\Encryption\EncryptionServiceProvider',
        'Illuminate\Filesystem\FilesystemServiceProvider',
        'Illuminate\Hashing\HashServiceProvider',
        'Illuminate\Html\HtmlServiceProvider',
        'Illuminate\Log\LogServiceProvider',
        'Illuminate\Mail\MailServiceProvider',
        'Illuminate\Database\MigrationServiceProvider',
        'Illuminate\Pagination\PaginationServiceProvider',
        'Illuminate\Queue\QueueServiceProvider',
        'Illuminate\Redis\RedisServiceProvider',
        'Illuminate\Remote\RemoteServiceProvider',
        'Illuminate\Auth\Reminders\ReminderServiceProvider',
        'Illuminate\Database\SeedServiceProvider',
        'Illuminate\Session\SessionServiceProvider',
        'Illuminate\Translation\TranslationServiceProvider',
        'Illuminate\Validation\ValidationServiceProvider',
        'Illuminate\View\ViewServiceProvider',
        'Illuminate\Workbench\WorkbenchServiceProvider',
        'Aws\Laravel\AwsServiceProvider',
        'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
        'Way\Generators\GeneratorsServiceProvider',
        'Raahul\LarryFour\LarryFourServiceProvider',
        'Davibennun\LaravelPushNotification\LaravelPushNotificationServiceProvider',
        'Intervention\Image\ImageServiceProvider',
        'Yajra\Datatables\DatatablesServiceProvider',


    ),

    /*
    |--------------------------------------------------------------------------
    | Service Provider Manifest
    |--------------------------------------------------------------------------
    |
    | The service provider manifest is used by Laravel to lazy load service
    | providers which are not needed for each request, as well to keep a
    | list of all of the services. Here, you may set its storage spot.
    |
    */

    'manifest' => storage_path().'/meta',

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are lazy loaded so they don't hinder performance.
    |
    */

    'aliases' => array(

        'App'               => 'Illuminate\Support\Facades\App',
        'Artisan'           => 'Illuminate\Support\Facades\Artisan',
        'Auth'              => 'Illuminate\Support\Facades\Auth',
        'Blade'             => 'Illuminate\Support\Facades\Blade',
        'Cache'             => 'Illuminate\Support\Facades\Cache',
        'ClassLoader'       => 'Illuminate\Support\ClassLoader',
        'Config'            => 'Illuminate\Support\Facades\Config',
        'Controller'        => 'Illuminate\Routing\Controller',
        'Cookie'            => 'Illuminate\Support\Facades\Cookie',
        'Crypt'             => 'Illuminate\Support\Facades\Crypt',
        'DB'                => 'Illuminate\Support\Facades\DB',
        'Eloquent'          => 'Illuminate\Database\Eloquent\Model',
        'Event'             => 'Illuminate\Support\Facades\Event',
        'File'              => 'Illuminate\Support\Facades\File',
        'Form'              => 'Illuminate\Support\Facades\Form',
        'Hash'              => 'Illuminate\Support\Facades\Hash',
        'HTML'              => 'Illuminate\Support\Facades\HTML',
        'Input'             => 'Illuminate\Support\Facades\Input',
        'Lang'              => 'Illuminate\Support\Facades\Lang',
        'Log'               => 'Illuminate\Support\Facades\Log',
        'Mail'              => 'Illuminate\Support\Facades\Mail',
        'Paginator'         => 'Illuminate\Support\Facades\Paginator',
        'Password'          => 'Illuminate\Support\Facades\Password',
        'Queue'             => 'Illuminate\Support\Facades\Queue',
        'Redirect'          => 'Illuminate\Support\Facades\Redirect',
        'Redis'             => 'Illuminate\Support\Facades\Redis',
        'Request'           => 'Illuminate\Support\Facades\Request',
        'Response'          => 'Illuminate\Support\Facades\Response',
        'Route'             => 'Illuminate\Support\Facades\Route',
        'Schema'            => 'Illuminate\Support\Facades\Schema',
        'Seeder'            => 'Illuminate\Database\Seeder',
        'Session'           => 'Illuminate\Support\Facades\Session',
        'SoftDeletingTrait' => 'Illuminate\Database\Eloquent\SoftDeletingTrait',
        'SSH'               => 'Illuminate\Support\Facades\SSH',
        'Str'               => 'Illuminate\Support\Str',
        'URL'               => 'Illuminate\Support\Facades\URL',
        'Validator'         => 'Illuminate\Support\Facades\Validator',
        'View'              => 'Illuminate\Support\Facades\View',
        'Datatables'        => 'Yajra\Datatables\Facades\Datatables',
        'AWS'               => 'Aws\Laravel\AwsFacade',
        'PushNotification'  => 'Davibennun\LaravelPushNotification\Facades\PushNotification',
        'Image'             => 'Intervention\Image\Facades\Image',
    ),
    'menu_titles' => array(
        'admin_control' => '',
        'income_history' => '',
        'log_out' => '',
        'dashboard' => '',
        'map_view' => '',
        'providers' => '',
        'requests' => '',
        'customers' => '',
        'reviews' => '',
        'information' => '',
        'types' => '',
        'documents' => '',
        'settings' => '',
        'balance' => '',
        'create_request' => '',
        'promotional_codes' => '',
    ),
    'generic_keywords'=> array(
        'Provider' => '',
        'User' => '',
        'Services' => '',
        'Trip' => '',
        'Currency' => 'AUD',
        'total_trip' => '1',
        'cancelled_trip' => '1',
        'total_payment' => '5',
        'completed_trip' => '1',
        'card_payment' => '1',
        'credit_payment' => '1',
    ),
    /* DEVICE PUSH NOTIFICATION DETAILS */
    'customer_certy_url' => '',
    'customer_certy_pass' => '',
    'customer_certy_type' => '',
    'provider_certy_url' => '',
    'provider_certy_pass' => '',
    'provider_certy_type' => '',
    'gcm_browser_key' => '',
    /* DEVICE PUSH NOTIFICATION DETAILS END */
    'currency_symb' => '',

    /* Developer Company Details */
    'developer_company_name' => '',
    'developer_company_web_link' => '',
    'developer_company_email' => '',
    'developer_company_fb_link' => '',
    'developer_company_twitter_link' => '',
    /* Developer Company Details END */

    /* APP LINK DATA */
    'android_client_app_url'=>'',
    'android_provider_app_url'=>'',
    'ios_client_app_url'=>'',
    'ios_provider_app_url'=>'',
    /* APP LINK DATA END */

    'no_data_available' => '',
    'data_not_available' => '',
    'blank_fiend_val' => '',

    'website_title' => '',
    'referral_prefix' => '',
    'referral_zero_len' => ,
    'website_meta_description' => '',
    'website_meta_keywords' => '',

    's3_bucket' => '',

    'twillo_account_sid' => '',
    'twillo_auth_token' => '',
    'twillo_number' => '',

    'production' => false,

    'default_payment' => '',

    'stripe_secret_key' => '',
    'stripe_publishable_key' => '',
    'braintree_environment' => '',
    'braintree_merchant_id' => '',
    'braintree_public_key' => '',
    'braintree_private_key' => '',
    'braintree_cse' => '',

    'coinbaseAPIKey' => '',
    'coinbaseAPISecret' => '',

    'paypal_sdk_mode' => '',
    'paypal_sdk_UserName' => '',
    'paypal_sdk_Password' => '',
    'paypal_sdk_Signature' => '',
    'paypal_sdk_AppId' => '',

);
