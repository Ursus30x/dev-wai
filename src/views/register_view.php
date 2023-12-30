<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dungeons&Dragons</title>
        <meta charset="UTF-8">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="stylesheet" href="css/fontStyles.css" type="text/css">
        <link rel="stylesheet" href="css/index.css" type="text/css">
        <link rel="stylesheet" href="css/lightslider.css" type="text/css">
        <script src="libs/jquery.js"></script>
        <script src="plugins/lightslider.js"></script>
        <script src="typescript/script.js"></script>
        <script src="typescript/gallery.js" defer></script>
       
    </head>
    <body onload="noJsDisplay();hideNoJsGallery();">
        <?php include "partial/sidePanel-gallery.php"; ?>
        <?php include "partial/header.php"; ?>
        <main>
            <form method="post" enctype="multipart/form-data">
                <label>
                    <span>Login:</span>
                    <input type="text" name="username"  required/>
                    <?php if(isset($_SESSION['registerUsernameErr'])): ?>
                        <?= $_SESSION['registerUsernameErr'] ?>
                    <?php endif ?>
                </label>
                <br>
                <label>
                    <span>E-mail:</span>
                    <input type="text" name="email"  required/>
                </label>
                <br>
                <label>
                    <span>Password:</span>
                    <input type="password" name="password"  required/>
                </label>
                <br>
                <label>
                    <span>Confirm password:</span>
                    <input type="password" name="confirm"  required/>
                    <?php if(isset($_SESSION['registerPasswordErr'])): ?>
                        <?= $_SESSION['registerPasswordErr'] ?>
                    <?php endif ?>
                </label>
                
                <br><br>
                <div>
                <a href="javascript:history.back()" class="backBtn">Go back</a>
                    <input type="submit" value="Register"/>
                </div>
            </form>
        </main>
        <?php include "partial/footer.php"; ?>
    </body>
</html>