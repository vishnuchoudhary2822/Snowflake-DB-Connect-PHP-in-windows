'snowflake' => [
    'driver' => 'snowflake',
    'host' => env('SNOWFLAKE_HOST'),
    'account' => env('SNOWFLAKE_ACCOUNT'),
    'username' => env('SNOWFLAKE_USERNAME'),
    'password' => env('SNOWFLAKE_PASSWORD'),
    'database' => env('SNOWFLAKE_DATABASE'),
    'schema' => env('SNOWFLAKE_SCHEMA'),
    'warehouse' => env('SNOWFLAKE_WAREHOUSE', 'your_warehouse_name'),
    'options' => [
        'database' => env('SNOWFLAKE_DATABASE'),
        'schema' => env('SNOWFLAKE_SCHEMA'),
        'warehouse' => env('SNOWFLAKE_WAREHOUSE', 'your_warehouse_name'),
    ],
],
