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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => env('961483014238105'),
        'client_secret' => env('1006b521803245bbef01b5e6e85ccb50'),
        'redirect' => 'http://localhost:8000/facebook/callback',
    ],
    
    'google' => [
        'client_id' => env('
        99563182413-rtgkr191e95g27519tpdlufbi40tgkr8.apps.googleusercontent.com
        '),
        'client_secret' => env('
        eI1GQulJQ6AE8ZPbyr7uKSAy
        '),
        'redirect' => 'http://localhost:8000/google/callback',
    ],

];
