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
        <link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="stylesheet" href="css/fontStyles.css" type="text/css">
        <link rel="stylesheet" href="css/characterCreation.css" type="text/css">
        <script src="libs/jquery.js"></script>
        <script src="plugins/jquery-ui.min.js"></script>
        <script src="typescript/script.js"></script>
        <script src="typescript/file.js" defer></script>
        <script src="typescript/characterCreator.js" defer></script>

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
            <form action="odbierz.php" method="post" enctype="multipart/form-data" onreset="updateInterface();">
                <div id="block1" class="formBlock">
                    <p>Name</p>
                    <input type="text" name="name" required>
                    <p>Race</p>
                    <select id="race" name="race">
                        <optgroup label="Dwarf">
                            <option title="+2 Consitution +1 Wisdom" id="hillDwarf" value="hillDwarf" onclick="changeDesc(this.parentNode)">Hill Dwarf</option>
                            <option title="+2 Consitution +2 Strength"  value="mountainDwarf">Mountain Dwarf</option>
                        </optgroup>
                        <optgroup label="Elf">
                            <option title="+2 Dexterity +1 Inteligence" value="highElf">High Elf</option>
                            <option title="+2 Dexterity +1 Wisdom" value="woodElf">Wood Elf</option>
                            <option title="+2 Dexterity +1 Charisma" value="darkElf">Dark Elf</option>
                        </optgroup>
                        <optgroup label="Halfling">
                            <option title="+2 Dexterity +1 Charisma" value="lightfootHalfling">Lightfoot Halfling</option>
                            <option title="+2 Dexterity +1 Consitution" value="stoutHalfling">Stout Halfling</option>
                        </optgroup>
                        <option title="Every ability score +1" value="Human">Human</option>
                        <option title="+2 Strength +1 Charisma" value="Dragonborn">Dragonborn</option>
                        <optgroup label="Gnome">
                            <option title="+2 Inteligence +1 Dexterity" value="forestGnome">Forest Gnome</option>
                            <option title="+2 Inteligence +1 Consitution" value="rockGnome">Rock Gnome</option>
                        </optgroup>
                        <option title="+2 Charisma +1 Two abilites of your choice" value="halfElf">Half-Elf</option>
                        <option title="+2 Strength +1 Consitution" value="halfOrc">Half-Orc</option>
                        <option title="+2 Charisma +1 Inteligence" value="Tiefling">Tiefling</option>
                    </select>
                    <p>Class</p>
                    <select id="class" name="class">
                        <option value="Barbarian">Barbarian</option>
                        <option value="Bard">Bard</option>
                        <option value="Cleric">Cleric</option>
                        <option value="Fighter">Fighter</option>
                        <option value="Monk">Monk</option>
                        <option value="Paladin">Paladin</option>
                        <option value="Ranger">Ranger</option>
                        <option value="Rouge">Rouge</option>
                        <option value="Sorcerer">Sorcerer</option>
                        <option value="Warlock">Warlock</option>
                        <option value="Wizard">Wizard</option>
                    </select>
                    <p>Alignment</p>
                    <select id="alignment" name="alignment">
                        <option value="lawfulGood">Lawful Good</option>
                        <option value="neutralGood">Neutral Good</option>
                        <option value="chaoticGood">Chaotic Good</option>
                        <option value="lawfulNeutral">Lawful Neutral</option>
                        <option value="neutral">Neutral</option>
                        <option value="chaoticNeutral">Chaotic Neutral</option>
                        <option value="lawfulEvil">Lawful Evil</option>
                        <option value="neutralEvil">Neutral Evil</option>
                        <option value="chaoticEvil">Chaotic Evil</option>
                    </select>
                    <p>Background</p>
                    <select id="background" name="background">
                        <option value="acolyte">Acolyte</option>
                        <option value="charlatan">Charlatan</option>
                        <option value="criminal">Criminal</option>
                        <option value="entertainer">Entertainer</option>
                        <option value="folkHero">Folk Hero</option>
                        <option value="guildArtisan">Guild Artisan</option>
                        <option value="hermit">Hermit</option>
                        <option value="noble">Noble</option>
                        <option value="outlander">Outlander</option>
                        <option value="sage">Sage</option>
                        <option value="sailor">Sailor</option>
                        <option value="soldier">Soldier</option>
                        <option value="urchin">Urchin</option>
                    </select>
                    <div id="personalityBackground">
                        <p>Sex</p>
                        <div id="sex">
                            <input id="male" type="radio" name="sex" value="male" checked>
                            <label for="male">Male</label><br>
                            <input id="female" type="radio" name="sex" value="female">
                            <label for="female">Female</label><br>
                        </div>
                        <div id="heightWeight">
                            <p>Height</p>
                            <div id="height">
                                <input type="number" name="ftHeight" min="0" required>
                                <p>ft</p>
                                <input type="number" name="inHeight" min="0" required>
                                <p>in</p>
                            </div>
                            <p>Weight</p>
                            <div id="weight">
                                <input type="number" name="weight" min="1" required>
                                <p>lb</p>
                            </div>
                        </div>
                        <div id="age">
                            <p>Age</p>
                            <input type="number" name="age" min="0" max="2000" required>
                        </div>
                    </div>
                    <div id="skinColor">
                        <p>Skin color</p>
                        <input type="color" name="skinColor">
                    </div>
                    <div id="hairColor">
                        <p>Hair color</p>
                        <input type="color" name="hairColor">
                    </div>
                    <div id="eyeColor">
                        <p>Eye color</p>
                        <input type="color" name="eyeColor">
                    </div>
                    <div id="additionalCharacter">
                        <p>(Optional) Additonal info about character</p>
                        <textarea name="additionalCharacter"></textarea>
                    </div>
                    <div id="additionalBackground">
                        <p>(Optional) Additional background for character:</p>
                        <textarea name="additionalBackground"></textarea>
                    </div>
                </div>
                <div id="block2" class="formBlock">
                    <div id="characterPicture">
                        <p>(Optional) Send a pircture/drawing of your character</p>
                        <input name="photo" type="file"  accept=".jpg,.jpeg,.png,.bmp">
                        <br><br>
                        <img class="output" src="#" width="150" height="200" alt="[Character photo]" >
                        <br>
                        <sub>150x200</sub>

                    </div>
                    <div id="desc-and-stats">
                        <p>Abilites</p>
                        <div id ="abilityScores">
                            <div id="str" class="ability">
                                <p>Str</p>
                                <input name="str" type="number" min="3" max="21" onclick="updateInterface();" required>
                                <p class="bonus">Bonus</p>
                                <p class="bonusNum bonus">0</p>
                            </div>
                            <div id="dex" class="ability">
                                <p>Dex</p>
                                <input name="dex" type="number" min="3" max="21" onclick="updateInterface();" required>
                                <p class="bonus">Bonus</p>
                                <p class="bonusNum bonus">0</p>
                            </div>
                            <div id="con" class="ability">
                                <p>Con</p>
                                <input name="con" type="number" min="3" max="21" onclick="updateInterface();" required>
                                <p class="bonus">Bonus</p>
                                <p class="bonusNum bonus">0</p>
                            </div>
                            <div id="int" class="ability">
                                <p>Int</p>
                                <input name="int" type="number" min="3" max="21" onclick="updateInterface();" required>
                                <p class="bonus">Bonus</p>
                                <p class="bonusNum bonus">0</p>
                            </div>
                            <div id="wis" class="ability">
                                <p>Wis</p>
                                <input name="wis" type="number" min="3" max="21" onclick="updateInterface();" required>
                                <p class="bonus">Bonus</p>
                                <p class="bonusNum bonus">0</p>
                            </div>
                            <div id="cha" class="ability">
                                <p>Cha</p>
                                <input name="cha" type="number" min="3" max="21" onclick="updateInterface();" required>
                                <p class="bonus">Bonus</p>
                                <p class="bonusNum bonus">0</p>
                            </div>
                        </div>
                        <button id="generateButton" style="display: none;" type="button" onclick="generateAbilites()">Generate abilites</button>
                        <div id="skills">
                            <p>Skills</p>
                            <input id="acrobatics" type="checkbox" name="acrobatics">
                            <label for="acrobatics">Acrobatics</label><br>
                            <input id="animalHandling" type="checkbox" name="animalHandling">
                            <label for="animalHandling">Animal Handling</label><br>
                            <input id="arcana" type="checkbox" name="arcana">
                            <label for="arcana">Arcana</label><br>
                            <input id="athletics" type="checkbox" name="athletics">
                            <label for="athletics">Athletics</label><br>
                            <input id="deception" type="checkbox" name="deception">
                            <label for="deception">Deception</label><br>
                            <input id="history" type="checkbox" name="history">
                            <label for="history">History</label><br>
                            <input id="insight" type="checkbox" name="insight">
                            <label for="insight">Insight</label><br>
                            <input id="intimidation" type="checkbox" name="intimidation">
                            <label for="intimidation">Intimidation</label><br>
                            <input id="investigation" type="checkbox" name="investigation">
                            <label for="investigation">Investigation</label><br>
                            <input id="medicine" type="checkbox" name="medicine">
                            <label for="medicine">Medicine</label><br>
                            <input id="nature" type="checkbox" name="nature">
                            <label for="nature">Nature</label><br>
                            <input id="perception" type="checkbox" name="perception">
                            <label for="perception">Perception</label><br>
                            <input id="persuasion" type="checkbox" name="persuasion">
                            <label for="persuasion">Persuasion</label><br>
                            <input id="religion" type="checkbox" name="religion">
                            <label for="religion">Religion</label><br>
                            <input id="shleightOfHand" type="checkbox" name="shleightOfHand">
                            <label for="shleightOfHand">Sleight of hand</label><br>
                            <input id="stealth" type="checkbox" name="stealth">
                            <label for="stealth">Stealth</label><br>
                            <input id="survival" type="checkbox" name="survival">
                            <label for="survival">Survival</label><br>
                        </div>
                    </div>
                    <input type="reset">
                    <input type="submit">  
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