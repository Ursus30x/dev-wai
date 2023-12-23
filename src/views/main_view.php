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
        <div id="panel-bg" onclick="panelTransform();"></div>
        <div id="side-panel">
            <svg id="closeButton" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 47" onclick="panelTransform();">
                <defs>
                    <style>.b{fill:#fff;}</style>
                </defs>
                <g>
                    <rect class="b" x="19" y="-4.23" width="9.01" height="55.46" transform="translate(-9.73 23.5) rotate(-45)"/>
                    <path class="b" d="M7.08,1.41L45.59,39.92l-5.66,5.66L1.41,7.08,7.08,1.41m0-1.41L0,7.08,39.92,47l7.08-7.08L7.08,0h0Z"/>
                </g>
                <g>
                    <rect class="b" x="-4.28" y="19.05" width="55.57" height="8.9" transform="translate(-9.73 23.5) rotate(-45)"/>
                    <path class="b" d="M40,1.41l5.59,5.59L7,45.59l-5.59-5.59L40,1.41M40,0L0,40l7,7L47,7,40,0h0Z"/>
                </g>
            </svg>
            <nav>
                <a class="option" href="/main"><h4>Main page</h4></a>
                <a class="option" href="/characterCreation"><h4>Character creator</h4></a>
                <a class="option" href="/rules"><h4>Basic rules</h4></a>
                <a class="option" href="/lore"><h4>Lore of the game</h4></a>
                <br>
                <a class="option" href="/gallery"><h4>Community gallery</h4></a>
            </nav>
        </div>
        <header>
            <div id="logo">
                <a href="index.html">
                    <img class="logo-img" src="img/dnd_logo.webp" alt="d&d logo">
                </a>
            </div>
            <noscript>
                <div class="no-js-menu" id="headerMenu">
                    <a class="noJsOption" href="characterCreation.html"><h4>Character</h4></a>
                    <a class="noJsOption" href="basicRules.html"><h4>Rules</h4></a>
                    <a class="noJsOption" href="lore.html"><h4>Lore</h4></a>
                </div>
            </noscript>
            <svg id="hamburger" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;display: none;" xml:space="preserve" onclick="panelTransform();">
                <style type="text/css">
                    .st0{fill:#FFFFFF;stroke:#FFF6F6;stroke-width:22;stroke-miterlimit:10;}
                    .st1{fill:#FFFFFF;stroke:#000000;stroke-width:22;stroke-miterlimit:10;}
                    .st2{fill:none;stroke:#FFF6F6;stroke-width:22;stroke-miterlimit:10;}
                </style>
                <line class="st0" x1="13.7" y1="55.9" x2="183.6" y2="55.9"/>
                <path class="st0" d="M13.7,94.6c2.7,0,5.5,0,8.2,0c53.9,0,107.8,0,161.7,0"/>
                <path class="st1" d="M186.1,97.3"/>
                <path class="st0" d="M14.7,99.7"/>
                <path class="st1" d="M186.1,111.8"/>
                <path class="st0" d="M14.7,114.2"/>
                <path class="st1" d="M186.3,114"/>
                <path class="st0" d="M14.9,116.3"/>
                <path class="st1" d="M186,110.4"/>
                <path class="st0" d="M14.6,112.8"/>
                <path class="st1" d="M186.1,112.9"/>
                <path class="st0" d="M14.7,115.2"/>
                <path class="st1" d="M185.7,111.2"/>
                <path class="st0" d="M14.3,113.5"/>
                <path class="st1" d="M184.9,111.8"/>
                <path class="st0" d="M13.5,114.2"/>
                <path class="st1" d="M183.8,119.1"/>
                <path class="st0" d="M12.4,121.4"/>
                <line class="st2" x1="13.7" y1="133.4" x2="183.6" y2="133.4"/>
            </svg>
        </header>
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