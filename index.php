<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>test</title>
    </head>
    <body>
            <!-- ფუნქციების php-ს ჩართვა -->
            <?php
                include 'functions.php';
            ?>

            <div class="form">
                <form action="" method="POST">
                    <input type="text" name="name" class="input" placeholder="Name" required>
                    <input type="password" name="password" class="input" placeholder="Password" required>
                    <input type="password" name="repassword" class="input" placeholder="Repeat-Password" required>
                    <input type="submit" value="REGISTER" class="login">
                </form>
                
                <div class="error-message">
                    <?php
                        register();
                    ?>
                </div>
            </div>
    </body>
</html>