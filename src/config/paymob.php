<?php


return [

    /*
    |--------------------------------------------------------------------------
    | PayMob Default Order Model
    |--------------------------------------------------------------------------
    |
    | This option defines the default Order model.
    |
    */

    'order' => [
        'model' => 'App\Order'
    ],

    /*
    |--------------------------------------------------------------------------
    | PayMob username and password
    |--------------------------------------------------------------------------
    |
    | This is your PayMob username and password to make auth request.
    |
    */

    'api_key' => '',
 

    /*
    |--------------------------------------------------------------------------
    | PayMob integration id and iframe id
    |--------------------------------------------------------------------------
    |
    | This is your PayMob integration id and iframe id.
    |
    */

    'integration_id' => '',
    'iframe_id' => '',
];
