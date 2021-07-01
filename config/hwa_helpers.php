<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'timezone' => 'Asia/Ho_Chi_Minh',

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

    'locale' => 'vi',

    /*
    |--------------------------------------------------------------------------
    | Page limit
    |--------------------------------------------------------------------------
    |
    | Paginate page limit
    |
    */

    'page_limit' => 10,

    /*
    |--------------------------------------------------------------------------
    | Status
    |--------------------------------------------------------------------------
    |
    | Activate status = 1
    | Deactivate status = 2
    |
    */

    'status' => [
        'activate' => 1,
        'deactivate' => 2
    ],

    /*
    |--------------------------------------------------------------------------
    | Gender user
    |--------------------------------------------------------------------------
    |
    | Male = 1
    | Female = 2
    |
    */

    'gender' => [
        'male' => 1,
        'female' => 2,
    ],

];
