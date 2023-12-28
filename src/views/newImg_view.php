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
                    <span>Title: </span>
                    <input type="text" name="title"  required/>
                </label>
                <br>
                <label>
                    <span>Author:</span>
                    <input type="text" name="author" 
                    <?php if(isset($_SESSION['username'])): ?>
                    value="<?= $_SESSION['username'] ?>"
                    <?php endif ?> 
                    required/>
                </label>
                <br>
                <label>
                    <span>Image: </span>
                    <input type="file" name="source" accept=".png,.jpg,.jpeg" required>
                    <sub>Max: 1MB</sub>
                    <?php if($_GET['error']==FILE_EXISTS_ERR): ?>
                        <p>This image already exists</p>
                    <?php elseif($_GET['error']==FILE_SIZE_ERR): ?>
                        <p>This file is too large</p>
                    <?php endif ?>
                </label>
                <br>
                <label>
                    <span>Watermark text:</span>
                    <input type="text" name="watermark"  required/>
                </label>
                <br>
                <?php if(isset($_SESSION['isLoggedIn'])): ?>
                <label>
                    <span>Visibility</span>
                    <input type="radio" id="public" name="visibility" value="public" checked>
                    <label for="public">Public</label>
                    <input type="radio" id="private" name="visibility" value="private">
                    <label for="private">Private</label>
                </label>
                <?php endif ?>
                <div>
                    <a href="/gallery?page=1" class="cancel">Cancel</a>
                    <input type="submit" value="Save"/>
                </div>
            </form>
        </main>
        <footer>
            <div id="contactInfo">
                <p>Jakub Szymczyk</p>
                <p>jakubszymczyk20@gmail.com</p>
            </div>
        </footer>
    </body>
</html>