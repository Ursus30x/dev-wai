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
       
    </head>
    <body onload="noJsDisplay();">
        <?php include "partial/sidePanel-gallery.php"; ?>
        <?php include "partial/header.php"; ?>
        <main>
            <h2>Community images</h2>
            <form method="post" action="/remeber?from=gallery">
                <?php if(count($images)): ?>
                    <?php for($i=(IMGS_PER_PAGE)*((int)($_GET['page'])-1);$i<(IMGS_PER_PAGE)*((int)($_GET['page'])) && $i < count($images);$i++): 
                    $image = $images[$i]?>
                            <div class="comImg">
                                <a href="<?= IMG_DEST . pathinfo($image['source'] ,PATHINFO_FILENAME) . "_watermark.png"?>">
                                    <img src="<?= IMG_DEST . pathinfo($image['source'] ,PATHINFO_FILENAME) . "_thumbnail.png"?>" class="comImgMini" alt="community image">
                                </a>
                                <br>
                                <div class="comImgInfo">
                                    <b class="comImgTitle"><?= $image['title'] ?></b>
                                    <p class="comImgAuthor"><?= $image['author'] ?></p>
                                    <input type="checkbox" name="remebered[]" value="<?= $image['_id'] ?>" 
                                    <?php if( in_array($image['_id'], $_SESSION['remebered'] ) ) :?> 
                                        checked
                                    <?php endif ?>>
                                    <?php if($image['visibility']=='private'): ?>
                                        <p>(Private)</p>
                                    <?php endif ?>
                                </div>
                            </div>
                    <?php endfor ?>
                <?php else: ?>
                    <h4>No images posted yet</h4>
                <?php endif ?>
                <p id="imagesAmount">Total images: <?= count($images) ?></p>
                <div>
                    <?php if( (int)($_GET['page']) > 1): ?> 
                        <a href="/gallery?page=<?= (int)($_GET['page'])-1 ?>">Previous</a>
                    <?php endif ?>
                    <p><?= ($_GET['page']) ?></p>
                    <?php if( (int)($_GET['page']) < count($images)/IMGS_PER_PAGE): ?> 
                        <a href="/gallery?page=<?= (int)($_GET['page'])+1 ?>">Next</a>
                    <?php endif ?>
                </div>
                <a href="/newImg?error=0" id="addNewImg">Add new image</a>
                <input type="submit" value="Remeber chosen">
            </form>
        </main>
        <?php include "partial/footer.php"; ?>
    </body>
</html>