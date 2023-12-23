<!DOCTYPE html>
<html lang="pl">
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
        <script src="typescript/script.js"></script>
        <script src="typescript/basicRules.js" defer></script>
    </head>
    <body onload="noJsDisplay();">
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
                    <a class="noJsOption" href="characterCreation.html"><h4>Character</h4></a>
                    <a class="noJsOption" href="basicRules.html"><h4>Rules</h4></a>
                    <a class="noJsOption" href="lore.html"><h4>Lore</h4></a>
                </div>
            </noscript>
            <h1>Rules of the Game</h1>
            <ol id="rules">
                <li>
                    <h4>Character Creation:</h4>
                    <ul>
                        <li>Players create characters by selecting a race (e.g., human, elf, dwarf), a character class (e.g., wizard, fighter, rogue), and assigning attributes (e.g., strength, dexterity, intelligence).</li>
                        <li>Characters have hit points (HP), ability scores, skills, and background information.</li>
                    </ul>
                </li>
                <li>
                    <h4>Dice:</h4>
                    <ul>
                        <li>D&D uses various dice to create dynamic and interesting gameplay, including the 20-sided die (d20), 6-sided die (d6), 4-sided die (d4), 8-sided die (d8), 10-sided die (d10), and 12-sided die (d12).</li>
                    </ul>
                </li>
                <li>
                    <h4>Ability Checks:</h4>
                    <ul>
                        <li>Players make ability checks by rolling a d20 and adding modifiers based on their character's abilities and skills. The result determines the success or failure of an action.</li>
                    </ul>
                </li>
                <li>
                    <h4>Combat:</h4>
                    <ul>
                        <li>Combat is turn-based, with characters taking turns in a round.</li>
                        <li>To attack, a player rolls a d20 and adds modifiers based on their character's abilities and equipment. If the roll beats the target's armor class (AC), it's a hit.</li>
                        <li>Damage is determined by rolling dice specific to the weapon or spell used.</li>
                    </ul>
                </li>
                <li>
                    <h4>Saving Throws:</h4>
                    <ul>
                        <li>Characters may need to make saving throws to resist harmful effects like spells or traps.</li>
                    </ul>
                </li>
                <li>
                    <h4>Magic:</h4>
                    <ul>
                        <li>Spellcasters can cast spells from their spell list, consuming spell slots.</li>
                        <li>Spells have various effects, including damage, healing, and control over the environment.</li>
                    </ul>
                </li>
                <li>
                    <h4>Experience and Levels:</h4>
                    <ul>
                        <li>Characters gain experience points (XP) for overcoming challenges and defeating enemies.</li>
                        <li>Accumulating XP leads to leveling up, where characters gain new abilities and powers.</li>
                    </ul>
                </li>
                <li>
                    <h4>Money:</h4>
                    <ul>
                        <li>Money is another way of improving your character. Players get money by looting and completing quests. With this money you can buy new equipment,food or a cozy place to sleep</li>
                        <li>
                            Money is divided in to diffrent denominations and types:
                            <table>
                                <tr>
                                    <th>Coin</th>
                                    <th>Cp</th>
                                    <th>Sp</th>
                                    <th>Pp</th>
                                    <th>Ep</th>
                                    <th>Gp</th>
                                </tr>
                                <tr>
                                <th>Copper</th>
                                    <td>1</td>
                                    <td>1/10</td>
                                    <td>1/50</td>
                                    <td>1/100</td>
                                    <td>1/1000</td>
                                </tr>
                                <tr>
                                    <th>Silver</th>
                                    <td>10</td>
                                    <td>1</td>
                                    <td>1/5</td>
                                    <td>1/10</td>
                                    <td>1/100</td>
                                </tr>
                                <tr>
                                    <th>Electrum</th>
                                    <td>50</td>
                                    <td>5</td>
                                    <td>1</td>
                                    <td>1/2</td>
                                    <td>1/20</td>
                                </tr>
                                <tr>
                                    <th>Gold</th>
                                    <td>100</td>
                                    <td>10</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>1/10</td>
                                </tr>
                                <tr>
                                    <th>Platinum</th>
                                    <td>1,000</td>
                                    <td>100</td>
                                    <td>50</td>
                                    <td>10</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </li>
                <li>
                    <h4>Role-Playing:</h4>
                    <ul>
                        <li>D&D encourages players to role-play their characters, making decisions based on their character's personality, alignment, and backstory.</li>
                    </ul>
                </li>
                <li>
                    <h4>Dungeon Master (DM):</h4>
                    <ul>
                        <li>The DM creates and narrates the game world, controls non-player characters (NPCs), and sets the stage for adventures.</li>
                        <li>The DM also enforces the rules and adjudicates the outcomes of player actions.</li>
                    </ul>
                </li>
                
            </ol>
        </main>
        <footer>
            <div id="contactInfo">
                <p>Jakub Szymczyk</p>
                <p>jakubszymczyk20@gmail.com</p>
            </div>
        </footer>
    </body>

</html>