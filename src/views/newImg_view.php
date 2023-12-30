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
                    <input type="file" name="source" required>
                    <sub>Max: 1MB</sub>
                    <?php if(isset($_SESSION['newImgErr'])): ?>
                        <?= $_SESSION['newImgErr'] ?>
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
                <br>
                <div>
                    <a href="javascript:history.back()" class="backBtn">Go back</a>
                    <input type="submit" value="Save"/>
                </div>
            </form>
        </main>
        <?php include "partial/footer.php"; ?>
    </body>
</html>