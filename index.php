<!DOCTYPE html>
<html>
    <head>
        <title>Employee Management ver. 1.0 - login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <?php
        include('login/login.php'); // Includes Login Script

        if(isset($_SESSION['login_user'])){
        header("location: db/db_manager.php");
        }
        ?>       
        
        <div class="container">
            <div class="jumbotron">
                <h2>Employee Database</h2>
                <div id="login">
                    <form action="" method="post">
                        <label>UserName :</label>
                        <input id="name" name="username" placeholder="root" type="text">
                        <label>Password :</label>
                        <input id="password" name="password" placeholder="1234" type="password">
                        <input name="submit" type="submit" value=" Login ">
                        <br>
                        <span><?php echo $error; ?></span>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
