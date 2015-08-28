<?php
include('../login/session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add employee</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/menu.js"></script>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/iframestyles.css">
    </head>
    <body>
        <div class="jumbotron">
            <div class="container">
                <h2>Add employee</h2>
            </div>
        </div>
        <div class="container">
            <form action="db_add.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Please enter new employee information:</legend>
                    <label for="firstname">First name:</label><input type="text" name="firstname" id="firstname"><br>
                    <label for="surname">Surname:</label><input type="text" name="surname" id="surname"><br>
                    <label for="branch">Branch:</label><select name="branch" id="branch">
                        <option value=">Management">Management</option>
                        <option value="Human resources">Human resources</option>
                        <option value="IT">IT</option>
                        <option value="Marketing">Marketing</option>
                    </select><br>
                    <label for="station">Station:</label><input type="text" name="station" id="station"><br>
                    <label for="salary">Salary:</label><input type="text" name="salary" id="salary"><br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Add employee" name="submit">
                </fieldset>
            </form>
            <?php
            //Żeby ewentualne błędy były wyświetlane pod formularzem
            require('upload.php');
            ?>
        </div>
    </body>
</html>