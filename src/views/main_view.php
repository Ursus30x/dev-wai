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
        <?php include "partial/sidePanel-main.php"; ?>
        <?php include "partial/header.php"; ?>
        <main>
            <noscript>
                <div class="no-js-menu" id="mobileMenu">
                    <a class="noJsOption" href="/characterCreation"><h4>Character</h4></a>
                    <a class="noJsOption" href="/rules"><h4>Rules</h4></a>
                    <a class="noJsOption" href="/lore"><h4>Lore</h4></a>
                </div>
            </noscript>
            <article>
                <h1 class="new-section-header">Dungeons & Dragons</h1>
                <div class="block">
                    <section id="intro-section">
                        <h4>"Dungeons & Dragons"</h4>
                        <p>
                            D&D is a popular tabletop role-playing game that blends storytelling, strategy, and chance. 
                            In D&D, a group of players, usually 3 to 6, creates characters with unique abilities and 
                            attributes like strength, intelligence, and skills. One player takes on the role of the 
                            Dungeon Master (DM), who serves as the game's narrator and referee.
                            <br><br>
                            The game is typically set in a fantasy world filled with magic, mythical creatures, and adventures. 
                            Players take turns describing their characters' actions and decisions, and the DM responds by narrating 
                            the results. Dice, especially a 20-sided die, are used to determine the success or failure of various actions, 
                            adding an element of chance to the game.
                        </p>
                    </section>
                    <img id="dragon-article" src="img/index/dragon_article.webp" alt="Red dragon with a rider">
                </div>
                <section>
                    <h4>Game system</h4>
                    <p>
                        The characters advance through the game by earning experience points (XP) from successful encounters and quests, 
                        gaining levels that bring new abilities, spells, and improvements. Core attributes, such as Strength and Intelligence, 
                        influence a character's capabilities and are determined during character creation.Magic is a pivotal element, 
                        with certain character classes, like wizards and clerics, having the ability to cast spells. Combat is turn-based, 
                        involving a variety of weapons, spells, and tactics, with outcomes determined by dice rolls.
                        <br><br>
                        The game encourages role-playing, urging players to immerse themselves in their characters and make decisions
                        based on the fantasy world's context. Alignments, representing moral and ethical stances, add depth to characters 
                        and influence interactions.
                    </p>
                </section>
            </article>
            <h2 class="new-section-header">Gallery</h2>
            <noscript>
                <div id="gallery">
                    <a class = "gallery-img" href="img/index/gallery/beholder_gallery.jpg">
                        <img class="gallery-mini" src="img/index/miniatures/beholder_gallery_mini.webp" alt="">
                    </a>
                    <a class = "gallery-img" href="img/index/gallery/dragon_gallery.jpg">
                        <img class="gallery-mini" src="img/index/miniatures/dragon_gallery_mini.webp" alt="">
                    </a>
                    <a class = "gallery-img" href="img/index/gallery/icewindDale_gallery.jpeg">
                        <img class="gallery-mini" src="img/index/miniatures/icewindDale_gallery_mini.webp" alt="">
                    </a>
                    <a class = "gallery-img" href="img/index/gallery/saltmarsh_gallery.jpeg">
                        <img class="gallery-mini" src="img/index/miniatures/saltmarsh_gallery_mini.webp" alt="">
                    </a>
                    <a class = "gallery-img" href="img/index/gallery/Storm_gallery.jpeg">
                        <img class="gallery-mini" src="img/index/miniatures/Storm_gallery_mini.webp" alt="">
                    </a>
                    <a class = "gallery-img" href="img/index/gallery/team_gallery.jpeg">
                        <img class="gallery-mini" src="img/index/miniatures/team_gallery_mini.webp" alt="">
                    </a>
                </div>
            </noscript>
            <ul id="jsGallery" style="display: none;">
                <li>
                    <a class = "gallery-img-js" href="img/index/gallery/beholder_gallery.jpg">
                        <img class="gallery-mini-js" src="img/index/miniatures/beholder_gallery_mini.webp" alt="">
                    </a>
                </li>
                <li>
                    <a class = "gallery-img-js" href="img/index/gallery/dragon_gallery.jpg">
                        <img class="gallery-mini-js" src="img/index/miniatures/dragon_gallery_mini.webp" alt="">
                    </a>
                </li>
                <li>
                    <a class = "gallery-img-js" href="img/index/gallery/icewindDale_gallery.jpeg">
                        <img class="gallery-mini-js" src="img/index/miniatures/icewindDale_gallery_mini.webp" alt="">
                    </a>
                </li>
                <li>
                    <a class = "gallery-img-js" href="img/index/gallery/saltmarsh_gallery.jpeg">
                        <img class="gallery-mini-js" src="img/index/miniatures/saltmarsh_gallery_mini.webp" alt="">
                    </a>
                </li>
                <li>
                    <a class = "gallery-img-js" href="img/index/gallery/Storm_gallery.jpeg">
                        <img class="gallery-mini-js" src="img/index/miniatures/Storm_gallery_mini.webp" alt="">
                    </a>
                </li>
                <li>
                    <a class = "gallery-img-js" href="img/index/gallery/team_gallery.jpeg">
                        <img class="gallery-mini-js" src="img/index/miniatures/team_gallery_mini.webp" alt="">
                    </a>
                </li>
            </ul>    
        </main>
        <footer>
            <div id="contactInfo">
                <p>Jakub Szymczyk</p>
                <p>jakubszymczyk20@gmail.com</p>
            </div>
        </footer>
    </body>
</html>