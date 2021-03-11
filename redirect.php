<html>
    <head>
        <?php include 'head.php' ?>
    </head>
    <body>
        <form id="redirectForm" name="redirectForm" method="post" action="/redirectGo.php" onsubmit="return processRedirectFormSubmit()">
            <div id="redirectFormTitle">URL Redirect</div>
            <input id="tinyUrl" name="tinyUrl" type="text" value="" />
            <input type="submit" />
        </form>
        <?php include 'nav.php' ?>
    </body>
</html>