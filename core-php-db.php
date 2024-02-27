<?php
$host = 'your_account_name.snowflakecomputing.com';
$account = 'your_account_name';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database_name';
$schema = 'your_schema_name';
$warehouse = 'your_warehouse_name';
$role = 'your_role_name';

try {
    $dsn = "snowflake:host=$host;account=$account;dbname=$database;schema=$schema";
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("USE WAREHOUSE $warehouse");
    $conn->exec("USE ROLE $role");
    echo "Connected to Snowflake successfully";
} catch (PDOException $e) {
    echo "Failed to connect to Snowflake: " . $e->getMessage();
}

?>
