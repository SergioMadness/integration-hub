<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Driver
    |--------------------------------------------------------------------------
    |
    | The Laravel queue API supports a variety of back-ends via an unified
    | API, giving you convenient access to each back-end using the same
    | syntax for each one. Here you may set the default queue driver.
    |
    | Supported: "null", "sync", "database", "beanstalkd",
    |            "sqs", "iron", "redis"
    |
    */

    'default' => env('QUEUE_DRIVER', 'redis'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table'  => 'jobs',
            'queue'  => 'default',
            'expire' => 60,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host'   => 'localhost',
            'queue'  => 'default',
            'ttr'    => 60,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key'    => 'your-public-key',
            'secret' => 'your-secret-key',
            'queue'  => 'your-queue-url',
            'region' => 'us-east-1',
        ],

        'iron' => [
            'driver'  => 'iron',
            'host'    => 'mq-aws-us-east-1.iron.io',
            'token'   => 'your-token',
            'project' => 'your-project-id',
            'queue'   => 'your-queue-name',
            'encrypt' => true,
        ],

        'redis' => [
            'driver'     => 'redis',
            'connection' => 'default',
            'queue'      => 'buffer',
//            'expire'     => 60,
        ],

        'rabbitmq' => [
            'driver'             => 'rabbitmq',
            'host'               => env('RABBITMQ_HOST', '127.0.0.1'),
            'port'               => env('RABBITMQ_PORT', '5672'),
            'login'              => env('RABBITMQ_LOGIN', 'guest'),
            'password'           => env('RABBITMQ_PASSWORD', 'guest'),
            'vhost'              => env('RABBITMQ_VHOST', '/'),
            'queue'              => env('RABBITMQ_QUEUE', 'queue_name'),
            '',
            'exchange_declare'   => true,
            'queue_declare_bind' => true,
            'queue_params'       => [
                'passive'     => false,
                'durable'     => true,
                'exclusive'   => false,
                'auto_delete' => false,
            ],
            'exchange_params'    => [
                'name'        => null,
                'type'        => 'direct',
                'passive'     => false,
                'durable'     => true,
                'auto_delete' => false,
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
        'database' => 'mysql', 'table' => 'failed_jobs',
    ],

];
