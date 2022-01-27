<?php


return [

    /*
    |--------------------------------------------------------------------------
    | Messenger Default User Model
    |--------------------------------------------------------------------------
    |
    | This option defines the default User model.
    |
    */

    'user' => [
        'model' => 'App\Models\User'
    ],

    /*
    |--------------------------------------------------------------------------
    | Messenger Pusher Keys
    |--------------------------------------------------------------------------
    |
    | This option defines pusher keys.
    |
    */

    'pusher' => [
        'app_id'     => '',
        'app_key'    => '8vdJzqlNPmwnzKYGkORirOg4CObFfNX1jQMdYprOBWc',
        'app_secret' => '',
        'options' => [
            'cluster'   => '',
            'encrypted' => true
        ]
    ],
];
