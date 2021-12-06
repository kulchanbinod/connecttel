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

    'default' => env('FINANCIAL_API', 'fmp'),

    'apis' => [
        'fmp' => [
            'url' => env('FMP_API_URL', 'https://financialmodelingprep.com/api/v3/'),
            'key' => env('FMP_API_KEY'),
        ],
    ],

];
