<?php
include('../login/session.php');
include('db_functions.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Employee Management ver. 1.0</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <div class="jumbotron">
        <div class="container">
                <h1>Employee Database</h1>
                <div id="profile" class="pull-right">
                    <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b><br>
                    <b id="logout"><a href="../login/logout.php">Log Out</a></b>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href='db_display.php' target="content">Employee list</a></li>
                        <li><a href='db_add.php' target="content">Add employee</a></li>
                    </ul>
                </div>
                <div class="col-md-10" id="display">
                    <iframe name="content" seamless>
                    </iframe>
                </div>
            </div>
        </div>
    </body>
</html>