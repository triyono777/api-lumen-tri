'pgsql' => [
      'driver' => 'pgsql',
        'host' => env('DB_HOST', 'ec2-18-204-101-137.compute-1.amazonaws.com'),
        'port' => env('DB_PORT', '5432'),
        'database' => env('DB_DATABASE', 'd3sgvb90lfcb89'),
        'username' => env('DB_USERNAME', 'mzgamtrndacazl'),
        'password' => env('DB_PASSWORD', '0e29e307c3093dc79acfabd9f41e9ae20e8e34352d5d51e95475d9bc172aee81'),
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
    ]
