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
        <?php include "partial/sidePanel-main.php"; ?>
        <?php include "partial/header.php"; ?>
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