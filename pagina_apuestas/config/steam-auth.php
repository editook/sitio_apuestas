<?php

return [

    /*
     * Redirect URL after login
     */
    'redirect_url' => '/steamLogin',
    /*
     * API Key (set in .env file) [http://steamcommunity.com/dev/apikey]
     */
    'api_key' => env('STEAM_API_KEY', 'FF40CA1F6261FFFA96D3936D0630930F'),
    /*
     * Is using https ?
     */
    'https' => false
];
