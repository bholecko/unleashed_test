<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <form id="urlForm" name="urlForm" method="post" action="/save_url.php" onsubmit="return processUrlFormSubmit()">
            <div id="urlFormTitle">Short URL Generator</div>
            <input id="url" name="url" type="text" value="" />
            <input type="submit" />
        </form>
        <?php include 'nav.php' ?>
    </body>
</html>