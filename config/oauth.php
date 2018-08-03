<?php

return [
    'clientId' => env('OAUTH_CLIENT_ID'),
    'clientSecret' => env('OAUTH_CLIENT_SECRET'),
    'redirectUri' => config('app.url') . '/login',
];