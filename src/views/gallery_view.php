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
        <link rel="stylesheet" href="css/gallery.css" type="text/css">
        <script src="libs/jquery.js"></script>
        <script src="typescript/script.js"></script>
       
    </head>
    <body onload="noJsDisplay();">
        <?php include "partial/sidePanel-gallery.php"; ?>
        <?php include "partial/header.php"; ?>
        <main>
            <?php if($_GET['action']=='/gallery'): ?>
                <h2>Community images</h2>
            <?php else: ?>
                <h2>Remebered images</h2>
            <?php endif ?>
            <form method="post" action="/remeber?from=<?= $_GET['action'] ?>">
                <div id="communityGallery">
                    <?php if(count($images)): ?>
                        <?php for($i=(IMGS_PER_PAGE)*((int)($_GET['page'])-1);$i<(IMGS_PER_PAGE)*((int)($_GET['page'])) && $i < count($images);$i++): 
                        $image = $images[$i]?>
                                <div class="comImg">
                                    <a href="<?= IMG_DEST . pathinfo($image['source'] ,PATHINFO_FILENAME) . "_watermark.png"?> class="comImgMini"">
                                        <img src="<?= IMG_DEST . pathinfo($image['source'] ,PATHINFO_FILENAME) . "_thumbnail.webp"?>" alt="community image">
                                    </a>
                                    <br>
                                    <div class="comImgInfo">
                                        <div class="comImgInfoLeft">
                                            <b class="comImgTitle"><?= $image['title'] ?></b>
                                            <p class="comImgAuthor"><?= $image['author'] ?></p>
                                        </div>
                                        <div class="comImgInfoRight">
                                            <input type="checkbox" name="remebered[]" value="<?= $image['_id'] ?>" 
                                            <?php if( in_array($image['_id'], $_SESSION['remebered'] ) ) :?> 
                                                checked
                                            <?php endif ?>>
                                            <?php if($image['visibility']=='private'): ?>
                                                <sup>(Private)</sup>
                                            <?php endif ?>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                        <?php endfor ?>
                    <?php else: ?>
                        <h4>No images to show</h4>
                    <?php endif ?>
                </div>
                <p id="imagesAmount">Total images: <?= count($images) ?></p>
                <div id="pageNavigation">
                    <?php if( (int)($_GET['page']) > 1): ?> 
                        <a class="pageLink" href="/gallery?page=<?= (int)($_GET['page'])-1 ?>">Previous</a>
                    <?php endif ?>
                    <p><?= ($_GET['page']) ?></p>
                    <?php if( (int)($_GET['page']) < count($images)/IMGS_PER_PAGE): ?> 
                        <a class="pageLink" href="/gallery?page=<?= (int)($_GET['page'])+1 ?>">Next</a>
                    <?php endif ?>
                </div>
                <a class="pageLink" href="/newImg?error=0" id="addNewImg">Add new image</a>
                <input type="submit" value="Remeber chosen">
            </form>
        </main>
        <?php include "partial/footer.php"; ?>
    </body>
</html>