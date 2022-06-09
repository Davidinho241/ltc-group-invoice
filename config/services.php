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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyAr6mGgmy3diRgCQ-1Vamz2ZxuX_YDpysE',
        'auth_domain' => 'ltc-group-invoice.firebaseapp.com',
        'database_url' => 'https://ltc-group-invoice-default-rtdb.firebaseio.com',
        'project_id' => 'ltc-group-invoice',
        'storage_bucket' => 'ltc-group-invoice.appspot.com',
        'messaging_sender_id' => '873752803886',
        'app_id' => '1:873752803886:web:5477a62966a09791b5fdbf',
    ],

];
