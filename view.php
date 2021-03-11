<?php
include 'functions.php';

$tinyUrl = $_POST['tinyUrl'];
$tinyUrl = $tinyUrl ? $tinyUrl : $_GET['tinyUrl'];
$url = getUrl($tinyUrl);
?>
<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <div id="viewContainer">
            <?php if ($url): ?>
            <div>URL: <a href="<?php echo $url ?>" target="_blank"><?php echo $url ?></a></div>
            <div>URL Key: <?php echo $tinyUrl ?></div>
            <?php else: ?>
            No URL found for the given key.
            <?php endif; ?>
        </div>
        <?php include 'nav.php' ?>
    </body>
</html>