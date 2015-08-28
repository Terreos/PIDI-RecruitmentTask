<?php
include('../login/session.php');
require('db_functions.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Employee list</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/menu.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/iframestyles.css">
    <body>
        <div class="jumbotron">
            <div class="container">
                <h2>Employee list</h2>
            </div>
        </div>
        <div class="container-fluid">
            <?php
            //Wyświetlanie pracowników
            display($db);
            ?>
        </div>
    </body>
</html>