<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <form id="infoForm" name="infoForm" method="post" action="/view.php" onsubmit="return processUrlViewerFormSubmit()">
            <div id="urlFormTitle">URL Viewer</div>
            <input id="tinyUrl" name="tinyUrl" type="text" value="" />
            <input type="submit" />
        </form>
        <?php include 'nav.php' ?>
    </body>
</html>