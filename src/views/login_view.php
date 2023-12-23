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
                <a class="option" href="/gallery"><h4>Image gallery</h4></a>
                <a class="option" href="/login"><h4>Log In</h4></a>
                <br>
                <a class="option" href="/main"><h4>Main page</h4></a>
            </nav>
        </div>
        <header>
            <div id="logo">
                <a href="/main">
                    <img class="logo-img" src="img/dnd_logo.webp" alt="d&d logo">
                </a>
            </div>
            <noscript>
                <div class="no-js-menu" id="headerMenu">
                    <a class="noJsOption" href="/characterCreation"><h4>Character</h4></a>
                    <a class="noJsOption" href="/rules"><h4>Rules</h4></a>
                    <a class="noJsOption" href="/lore"><h4>Lore</h4></a>
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
            <form method="post" enctype="multipart/form-data">
                <label>
                    <span>Login:</span>
                    <input type="text" name="username"  required/>
                </label>
                <br>
                <label>
                    <span>Password:</span>
                    <input type="password" name="password"  required/>
                </label>
        
                <div>
                    <a href="/gallery?page=1" class="cancel">Cancel</a>
                    <input type="submit" value="Log in"/>
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