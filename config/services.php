<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */
 
	'firebase' => [
    'api_key' => "AIzaSyB-X48SoH6XNvLrlMX439Ty8XXd_uYqiXo", // Only used for JS integration
    'auth_domain' => 'laravel-form-3265d.firebaseapp.com', // Only used for JS integration
    'database_url' => 'https://laravel-form-3265d-default-rtdb.firebaseio.com/',
    'storage_bucket' => 'laravel-form-3265d.appspot.com', // Only used for JS integration
],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
