<?php

include 'functions.php';

include 'config.php';

$url = $_POST["url"];

$conn = new mysqli($servername, $username, $password, $databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tinyUrl = generateTinyUrl();

$query = $conn->query("INSERT INTO urls (url, tiny_url) VALUES ('".$url."', '".$tinyUrl."')");

$conn->close();

header('Location: /view.php?tinyUrl='.$tinyUrl);
