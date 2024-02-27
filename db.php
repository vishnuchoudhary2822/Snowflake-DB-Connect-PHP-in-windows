<?php
$host = 'your_account_name.snowflakecomputing.com';
$account = 'your_account_name';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';
$schema = 'your_schema';

try {
    $dsn = "snowflake:host=$host;account=$account;dbname=$database;schema=$schema";
    $conn = new PDO($dsn, $username, $password);
    echo "Connected to Snowflake successfully";
} catch (PDOException $e) {
    echo "Failed to connect to Snowflake: " . $e->getMessage();
}
?>
