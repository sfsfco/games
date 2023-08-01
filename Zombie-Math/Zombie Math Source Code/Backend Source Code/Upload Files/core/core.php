<?php

error_reporting(0);
ini_set('display_errors', 0);

include 'config.php';

global $connection;

if ( isset( $connection ) )
    return;

$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_errno()) {        
    die(sprintf("Connect failed: %s\n", mysqli_connect_error()));
}
?>