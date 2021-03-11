<?php

include 'functions.php';

$tinyUrl = $_POST['tinyUrl'];
$tinyUrl = $tinyUrl ? $tinyUrl : $_GET['tinyUrl'];
$url = getUrl($tinyUrl);

include 'config.php';

$conn = new mysqli($servername, $username, $password, $databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = $conn->query("SELECT * FROM urls WHERE tiny_url = '".$tinyUrl."'");

$results = $query->fetch_all();

$redirectCount = 0;

foreach ($results as $result){
    $redirectCount = (int)$result[3];
}

$redirectCount++;

$query = $conn->query("UPDATE urls SET redirects = ".$redirectCount." WHERE tiny_url = '".$tinyUrl."'");

header('Location: '.$url);
?>