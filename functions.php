<?php

function generateTinyUrl() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < 9; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

function getUrl($tinyUrl) {
    $servername = "localhost";
    $username = "magento2";
    $password = "magento2";
    $databasename = "unleashed";

    $conn = new mysqli($servername, $username, $password, $databasename);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = $conn->query("SELECT * FROM urls WHERE tiny_url = '".$tinyUrl."'");

    $results = $query->fetch_all();

    foreach ($results as $result){
        return $result[1];
    }
}