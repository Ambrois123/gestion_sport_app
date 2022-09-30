<?php

include_once './config/Database.php';

$database = new Database;

$conn = $database->getConnection();

print_r($conn);

