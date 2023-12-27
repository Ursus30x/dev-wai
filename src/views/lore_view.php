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
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="stylesheet" href="css/fontStyles.css" type="text/css">
        <link rel="stylesheet" href="css/lore.css" type="text/css">
        <script src="libs/jquery.js"></script>
        <script src="plugins/jquery-ui.min.js"></script>
        <script src="typescript/script.js"></script>
        <script src="typescript/ui.js" defer></script>
    </head>
    <body onload="noJsDisplay();noJsDisplayTabs();">
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
                <a class="option" href="/gallery?page=1"><h4>Community gallery</h4></a>
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
            <article id="faerunArticle">
                <h1>Forgotten Realms</h1>
                <a href="img/lore/Sword-Coast-Map_MedRes.jpg" id="map"  title="Click on me to view me in full size!">
                    <img id="mapImg" src="img/lore/Sword-Coast-Map_LowRes.webp" alt="faerun map">
                    <br>
                    <sup>Map of Feerûn</sup>
                </a>
                <p>also known as Faerûn, is a high-fantasy world that encompasses a vast continent filled with different regions and diverse societies. The world is teeming with magic, mythical creatures, and powerful deities that often play a central role in its events.</p>
                <br>
                <p>One of the defining features of Forgotten Realms is its complexity and diversity. You can find everything from bustling cities, dense forests, and towering mountains to deep underground dungeons and shadowy swamps. Various races, including humans, elves, dwarves, halflings, orcs, and more, inhabit these lands. The cities range from the grandiose Waterdeep to the mysterious Menzoberranzan, the city of dark elves (Drow).</p>
                <br>
                <p>The pantheon of gods in the Forgotten Realms is extensive, and each deity influences different aspects of the world, and their followers play a significant role in shaping the world's events. You can also find legendary characters and creatures, like the wise wizard Elminster, the powerful drow Drizzt Do'Urden, and many others.</p>
                <br>
                <p>The history of the Forgotten Realms is rich and intricate, with various empires and kingdoms rising and falling over the millennia. The world is often the backdrop for epic adventures, quests, and conflicts, making it a favorite setting for D&D campaigns.</p>
                <br>
                <p>Forgotten Realms has been featured in numerous novels, video games, and other media, further expanding its lore and appeal to D&D enthusiasts. For example: Baldurs Gate series.</p>
                <br>
                <p>In the end, the Forgotten Realms offer a diverse and immersive world with endless possibilities for storytelling and adventure, making it a beloved and enduring setting for Dungeons & Dragons campaigns.</p>
                




            </article>
            <div id="animation">
                <h4 id="textAnimation">Remeber that D&D has many diffrent settings!</h4>
            </div>
            <article id="racesArticle">
                <h1>Races of Dungeons & Dragons</h1>
                <div id="tabs">
                    <ul id = "tabsTop" style="display: none;">
                      <li><a href="#dwarfTab">Dwarf</a></li>
                      <li><a href="#elfTab">Elf</a></li>
                      <li><a href="#halflingTab">Halfing</a></li>
                      <li><a href="#humanTab">Human</a></li>
                      <li><a href="#dragonbornTab">Dragonborn</a></li>
                      <li><a href="#gnomeTab">Gnome</a></li>
                      <li><a href="#halfElfTab">Half-Elf</a></li>
                      <li><a href="#halfOrcTab">Half-Orc</a></li>
                      <li><a href="#tieflingTab">Tiefling</a></li>
                    </ul>
                    <div id="dwarfTab" class="raceTab">
                        <img id="dwarfImg" class="raceImg" src="img/lore/dwarf.webp" alt="dwarf">
                        <h3>Dwarfs</h3>
                        <p>
                            Kingdoms rich in ancient grandeur, halls carved into the
                            roots of mountains, the echoing of picks and hammers
                            in deep mines and blazing forges, a commitment to
                            clan and tradition, and a burning hatred of goblins and
                            orcs—these common threads unite all dwarves.
                        </p>
                        <h3>Short and stout</h3>
                        <p>
                            Bold and hardy, dwarves are known as skilled warriors, miners, and workers of stone and metal. Though they stand well under 5 feet tall, dwarves are so broad and compact that they can weigh as much as a human standing nearly two feet taller. Their courage and endurance are also easily a match for any of the larger folk.
                            Dwarven skin ranges from deep brown to a paler hue tinged with red, but the most common shades are light brown or deep tan, like certain tones of earth. Their hair, worn long but in simple styles, is usually black, gray, or brown, though paler dwarves often have red hair. Male dwarves value their beards highly and groom them carefully.
                        </p>
                        <h3>Long memeory, Long Grudges</h3>
                        <p>
                            Dwarves can live to be more than 400 years old, so the oldest living dwarves often remember a very different world. For example, some of the oldest dwarves living in Citadel Felbarr (in the world of the Forgotten Realms) can recall the day, more than three centuries ago, when orcs conquered the fortress and drove them into an exile that lasted over 250 years. This longevity grants them a perspective on the world that shorter-lived races such as humans and halflings lack.
                            Dwarves are solid and enduring like the mountains they love, weathering the passage of centuries with stoic endurance and little change. They respect the traditions of their clans, tracing their ancestry back to the founding of their most ancient strongholds in the youth of the world, and don't abandon those traditions lightly. Part of those traditions is devotion to the gods of the dwarves, who uphold the dwarven ideals of industrious labor, skill in battle, and devotion to the forge.
                            Individual dwarves are determined and loyal, true to their word and decisive in action, sometimes to the point of stubbornness. Many dwarves have a strong sense of justice, and they are slow to forget wrongs they have suffered. A wrong done to one dwarf is a wrong done to the dwarf's entire clan, so what begins as one dwarf's hunt for vengeance can become a full-blown clan feud.
                        </p>
                    </div>
                    <div id="elfTab" class="raceTab">
                        <img id="elfImg" class="raceImg" src="img/lore/elf.webp" alt="elf">
                        <h3>Elves</h3>
                        <p>Elves are a magical people of otherworldly grace, living in the world but not entirely part of it. They reside in places of ethereal beauty, amidst ancient forests or in silvery spires glittering with faerie light, where soft music drifts through the air and gentle fragrances waft on the breeze. Elves love nature and magic, art and artistry, music and poetry, and the finer things of the world.</p>
                        <h3>Slender and graceful</h3>
                        <p>With their unearthly grace and delicate features, elves appear hauntingly beautiful to humans and members of many other races. They are slightly shorter than humans on average, ranging from well under 5 feet tall to just over 6 feet. They are more slender than humans, weighing only 100 to 145 pounds. Males and females are about the same height, and males are only marginally heavier than females.</p>
                        <br>
                        <p>Elves' coloration encompasses the normal human range and also includes skin in shades of copper, bronze, and almost bluish-white, hair of green or blue, and eyes like pools of liquid gold or silver. Elves have little facial and body hair. They prefer elegant clothing in bright colors, and they enjoy simple yet lovely jewelry.</p>
                        <h3>A timeless perspective</h3>
                        <p>Elves can live well over 700 years, giving them a broad perspective on events that might trouble the shorter-lived races more deeply. They are more often amused than excited, more likely to be curious than greedy. They tend to remain aloof and unfazed by petty happenstance. When pursuing a goal, however, whether adventuring on a mission or learning a new skill or art, elves can be focused and relentless. They are slow to make friends and enemies, and even slower to forget them. They respond to petty insults with disdain and to serious insults with vengeance.</p>
                        <br>
                        <p>Like the branches of a young tree, elves are flexible in the face of danger. They trust in diplomacy and compromise to resolve differences before they escalate to violence. They have been known to retreat from intrusions into their woodland homes, confident that they can simply wait the invaders out. But when the need arises, elves reveal a stern martial side, demonstrating skill with sword, bow, and strategy.</p>
                        <h3>Hidden woodland realms</h3>
                        <p>Most elves dwell in small forest villages hidden among the trees. Elves hunt game, gather food, and grow vegetables, and their skill and magic allow them to support themselves without the need for clearing and plowing land. They are talented artisans, crafting finely worked clothes and art objects. Their contact with outsiders is usually limited, though a few elves make a good living by trading crafted items for metals (which they have no interest in mining).</p>
                        <p>Elves encountered outside their own lands are commonly traveling minstrels, artists, or sages. Human nobles compete for the services of elf instructors to teach swordplay or magic to their children.</p>
                    </div>
                    <div id="halflingTab" class="raceTab">
                        <img id="halflingImg" class="raceImg" src="img/lore/halifing.webp" alt="halfling">
                        <h3>Halflings</h3>
                        <p>The comforts of home are the goals of most halflings' lives: a place to settle in peace and quiet, far from marauding monsters and clashing armies; a blazing fire and a generous meal; fine drink and fine conversation. Though some halflings live out their days in remote agricultural communities, others form nomadic bands that travel constantly, lured by the open road and the wide horizon to discover the wonders of new lands and peoples. But even these wanderers love peace, food, hearth, and home, though home might be a wagon jostling along a dirt road or a raft floating downriver.</p>
                        <h3>Small and practical</h3>
                        <p>The diminutive halflings survive in a world full of larger creatures by avoiding notice or, barring that, avoiding offense. Standing about 3 feet tall, they appear relatively harmless and have managed to survive for centuries in the shadow of empires and on the edges of wars and political strife. They are inclined to be stout, weighing between 40 and 45 pounds.</p>
                        <br>
                        <p>Halflings' skin ranges from tan to pale with a ruddy cast, and their hair is usually brown or sandy brown and wavy. They have brown or hazel eyes. Halfling men often sport long sideburns, but beards are rare among them, and mustaches even more so. They like to wear simple, comfortable, and practical clothes, favoring bright colors.</p>
                        <p>Halfling practicality extends beyond their clothing. They're concerned with basic needs and simple pleasures and have little use for ostentation. Even the wealthiest of halflings keep their treasures locked in a cellar rather than on display for all to see. They have a knack for finding the most straightforward solution to a problem and have little patience for dithering.</p>
                        <h3>Kind and curious</h3>
                        <p>Halflings are an affable and cheerful people. They cherish the bonds of family and friendship as well as the comforts of hearth and home, harboring few dreams of gold or glory. Even adventurers among them usually venture into the world for reasons of community, friendship, wanderlust, or curiosity. They love discovering new things, even simple things, such as an exotic food or an unfamiliar style of clothing. Halflings are easily moved to pity and hate to see any living thing suffer. They are generous, happily sharing what they have even in lean times.</p>
                        <h3>Blend into the crowd</h3>
                        <p>Halflings are adept at fitting into a community of humans, dwarves, or elves, making themselves valuable and welcome. The combination of their inherent stealth and their unassuming nature helps halflings to avoid unwanted attention.</p>
                        <br>
                        <p>Halflings work readily with others, and they are loyal to their friends, whether halfling or otherwise. They can display remarkable ferocity when their friends, families, or communities are threatened</p>  
                    </div>
                    <div id="humanTab" class="raceTab">
                        <img id="humanImg" class="raceImg" src="img/lore/human.webp" alt="human">
                        <h3>Humans</h3>
                        <p>In the reckonings of most worlds, humans are the youngest of the common races, late to arrive on the world scene and short-lived in comparison to dwarves, elves, and dragons. Perhaps it is because of their shorter lives that they strive to achieve as much as they can in the years they are given. Or maybe they feel they have something to prove to the elder races, and that's why they build their mighty empires on the foundation of conquest and trade. Whatever drives them, humans are the innovators, the achievers, and the pioneers of the worlds.
                        </p>
                        <h3>A broad spectrum</h3>
                        <p>With their penchant for migration and conquest, humans are more physically diverse than other common races. There is no typical human. An individual can stand from 5 feet to a little over 6 feet tall and weigh from 125 to 250 pounds. Human skin shades range from nearly black to very pale, and hair colors from black to blond (curly, kinky, or straight); males might sport facial hair that is sparse or thick. A lot of humans have a dash of nonhuman blood, revealing hints of elf, orc, or other lineages. Humans reach adulthood in their late teens and rarely live even a single century.</p>
                        <h3>Variety in all things</h3>
                        <p>Humans are the most adaptable and ambitious people among the common races. They have widely varying tastes, morals, and customs in the many different lands where they have settled. When they settle, though, they stay: they build cities to last for the ages and great kingdoms that can persist for long centuries. An individual human might have a relatively short lifespan, but a human nation or culture preserves traditions with origins far beyond the reach of any single human's memory. They live fully in the present, making them well-suited to the adventuring life, but also plan for the future, striving to leave a lasting legacy. Individually and as a group, humans are adaptable opportunists, and they stay alert to changing political and social dynamics.</p>
                        <h3>Lasting institutions</h3>
                        <p>Where a single elf or dwarf might take on the responsibility of guarding a special location or a powerful secret, humans found sacred orders and institutions for such purposes. While dwarf clans and halfling elders pass on the ancient traditions to each new generation, human temples, governments, libraries, and codes of law fix their traditions in the bedrock of history. Humans dream of immortality, but (except for those few who seek undeath or divine ascension to escape death's clutches) they achieve it by ensuring that they will be remembered when they are gone. Although some humans can be xenophobic, in general their societies are inclusive. Human lands welcome large numbers of nonhumans compared to the proportion of humans who live in nonhuman lands.</p>      
                    </div>
                    <div id="dragonbornTab" class="raceTab">
                        <img id="dragonbornImg" class="raceImg" src="img/lore/dragonborn.webp" alt="dragonborn">
                        <h3>Dragonborns</h3>
                        <p>Born of dragons, as their name proclaims, the dragonborn walk proudly through a world that greets them with fearful incomprehension. Shaped by draconic gods or the dragons themselves, dragonborn originally hatched from dragon eggs as a unique race, combining the best attributes of dragons and humanoids. Some dragonborn are faithful servants to true dragons, others form the ranks of soldiers in great wars, and still others find themselves adrift, with no clear calling in life.</p>
                        <h3>Pround dragon kin</h3>
                        <p>Dragonborn look very much like dragons standing erect in humanoid form, though they lack wings or a tail. The first dragonborn had scales of vibrant hues matching the colors of their dragon kin, but generations of interbreeding have created a more uniform appearance. Their small, fine scales are usually brass or bronze in color, sometimes ranging to scarlet, rust, gold, or copper-green. They are tall and strongly built, often standing close to 6 feet tall and weighing 300 pounds or more. Their hands and feet are strong, talon-like claws with three fingers and a thumb on each hand. The blood of a particular type of dragon runs very strong through some dragonborn clans. These dragonborn often boast scales that more closely match those of their dragon ancestor—bright red, green, blue, or white, lustrous black, or gleaming metallic gold, silver, brass, copper, or bronze.</p>
                        <h3>Self-sufficient clans</h3>
                        <p>To any dragonborn, the clan is more important than life itself. Dragonborn owe their devotion and respect to their clan above all else, even the gods. Each dragonborn's conduct reflects on the honor of his or her clan, and bringing dishonor to the clan can result in expulsion and exile. Each dragonborn knows his or her station and duties within the clan, and honor demands maintaining the bounds of that position.</p>
                        <p>A continual drive for self-improvement reflects the self-sufficiency of the race as a whole. Dragonborn value skill and excellence in all endeavors. They hate to fail, and they push themselves to extreme efforts before they give up on something. A dragonborn holds mastery of a particular skill as a lifetime goal. Members of other races who share the same commitment find it easy to earn the respect of a dragonborn.</p>
                        <p>Though all dragonborn strive to be self-sufficient, they recognize that help is sometimes needed in difficult situations. But the best source for such help is the clan, and when a clan needs help, it turns to another dragonborn clan before seeking aid from other races or even from the gods.</p>               
                    </div>
                    <div id="gnomeTab" class="raceTab">
                        <img id="gnomeImg" class="raceImg" src="img/lore/gnome.webp" alt="gnome">
                        <h3>Gnomes</h3>
                        <p>A constant hum of busy activity pervades the warrens and neighborhoods where gnomes form their close-knit communities. Louder sounds punctuate the hum: a crunch of grinding gears here, a minor explosion there, a yelp of surprise or triumph, and especially bursts of laughter. Gnomes take delight in life, enjoying every moment of invention, exploration, investigation, creation, and play.</p>
                        <h3>Vibrant expression</h3>
                        <p>A gnome's energy and enthusiasm for living shines through every inch of his or her tiny body. Gnomes average slightly over 3 feet tall and weigh 40 to 45 pounds. Their tan or brown faces are usually adorned with broad smiles (beneath their prodigious noses), and their bright eyes shine with excitement. Their fair hair has a tendency to stick out in every direction, as if expressing the gnome's insatiable interest in everything around. A gnome's personality is writ large in his or her appearance. A male gnome's beard, in contrast to his wild hair, is kept carefully trimmed but often styled into curious forks or neat points. A gnome's clothing, though usually made in modest earth tones, is elaborately decorated with embroidery, embossing, or gleaming jewels.</p>
                        <h3>Delighted dedication</h3>
                        <p>As far as gnomes are concerned, being alive is a wonderful thing, and they squeeze every ounce of enjoyment out of their three to five centuries of life. Humans might wonder about getting bored over the course of such a long life, and elves take plenty of time to savor the beauties of the world in their long years, but gnomes seem to worry that even with all that time, they can't get in enough of the things they want to do and see.</p>
                        <br>
                        <p>Gnomes speak as if they can't get the thoughts out of their heads fast enough. Even as they offer ideas and opinions on a range of subjects, they still manage to listen carefully to others, adding the appropriate exclamations of surprise and appreciation along the way. Though gnomes love jokes of all kinds, particularly puns and pranks, they're just as dedicated to the more serious tasks they undertake.</p>
                        <p>Many gnomes are skilled engineers, alchemists, tinkers, and inventors. They're willing to make mistakes and laugh at themselves in the process of perfecting what they do, taking bold (sometimes foolhardy) risks and dreaming large.</p>
                        <h3>Bright burrows</h3>
                        <p>Gnomes make their homes in hilly, wooded lands. They live underground but get more fresh air than dwarves do, enjoying the natural, living world on the surface whenever they can. Their homes are well hidden by both clever construction and simple illusions. Welcome visitors are quickly ushered into the bright, warm burrows. Those who are not welcome are unlikely to find the burrows in the first place.</p>
                        <p>Gnomes who settle in human lands are commonly gemcutters, engineers, sages, or tinkers. Some human families retain gnome tutors, ensuring that their pupils enjoy a mix of serious learning and delighted enjoyment. A gnome might tutor several generations of a single human family over the course of his or her long life.</p>   
                    </div>
                    <div id="halfElfTab" class="raceTab">
                        <img id="halfelfImg" class="raceImg" src="img/lore/half-elf.webp" alt="half-elf">
                        <h3>Half-Elfs</h3>
                        <p>Walking in two worlds but truly belonging to neither, half-elves combine what some say are the best qualities of their elf and human parents: human curiosity, inventiveness, and ambition tempered by the refined senses, love of nature, and artistic tastes of the elves. Some half-elves live among humans, set apart by their emotional and physical differences, watching friends and loved ones age while time barely touches them. Others live with the elves, growing restless as they reach adulthood in the timeless elven realms, while their peers continue to live as children. Many half-elves, unable to fit into either society, choose lives of solitary wandering or join with other misfits and outcasts in the adventuring life.</p>
                        <h3>Of two worlds</h3>
                        <p>To humans, half-elves look like elves, and to elves, they look human. In height, they're on par with both parents, though they're neither as slender as elves nor as broad as humans. They range from under 5 feet to about 6 feet tall, and from 100 to 180 pounds, with men only slightly taller and heavier than women. Half-elf men do have facial hair, and sometimes grow beards to mask their elven ancestry. Half-elven coloration and features lie somewhere between their human and elf parents, and thus show a variety even more pronounced than that found among either race. They tend to have the eyes of their elven parents.</p>
                        <h3>Diplomats or wanderers</h3>
                        <p>Half-elves have no lands of their own, though they are welcome in human cities and somewhat less welcome in elven forests. In large cities in regions where elves and humans interact often, half-elves are sometimes numerous enough to form small communities of their own. They enjoy the company of other half-elves, the only people who truly understand what it is to live between these two worlds.</p>
                        <br>
                        <p>In most parts of the world, though, half-elves are uncommon enough that one might live for years without meeting another. Some half-elves prefer to avoid company altogether, wandering the wilds as trappers, foresters, hunters, or adventurers and visiting civilization only rarely. Like elves, they are driven by the wanderlust that comes of their longevity. Others, in contrast, throw themselves into the thick of society, putting their charisma and social skills to great use in diplomatic roles or as swindlers.</p>                </div>
                    <div id="halfOrcTab" class="raceTab">
                        <img id="halforcImg" class="raceImg" src="img/lore/halforc.webp" alt="half-orc">
                        <h3>Half-Orcs</h3>
                        <p>
                            Whether united under the leadership of a mighty
                            warlock or having fought to a standstill after years
                            of conflict, orc and human tribes sometimes form
                            alliances, joining forces into a larger horde to the terror
                            of civilized lands nearby. When these alliances are
                            sealed by marriages, half-orcs are born. Some half-orcs
                            rise to become proud chiefs of orc tribes, their human
                            blood giving them an edge over their full-blooded orc
                            rivals. Some venture into the world to prove their worth
                            among humans and other more civilized races. Many of
                            these become adventurers, achieving greatness for their
                            mighty deeds and notoriety for their barbaric customs
                            and savage fury.
                        </p>
                        <h3>Scarred and strong</h3>
                        <p>
                            Half-orcs' grayish pigmentation, sloping foreheads,
                            jutting jaws, prominent teeth, and lowering builds make
                            their orcish heritage plain for all to see. Half-orcs stand
                            between 6 and 7 feet tall and usually weigh between
                            180 and 250 pounds.
                        </p>
                        <br>
                        <p>
                            Orcs regard battle scars as tokens of pride and
                            ornamental scars as things of beauty. Other scars,
                            though, mark an orc or half-orc as a former slave or
                            a disgraced exile. Any half-orc who has lived among
                            or near orcs has scars, whether they are marks of
                            humiliation or of pride, recounting their past exploits
                            and injuries. Such a half-orc living among humans might
                            display these scars proudly or hide them in shame.
                        </p>
                        <h3>The mark of Gruumsh</h3>
                        <p>
                            The one-eyed god Gruumsh created the orcs, and even
                            those orcs who turn away from his worship can't fully
                            escape his influence. The same is true of half-orcs,
                            though their human blood moderates the impact of their
                            orcish heritage. Some half-orcs hear the whispers of
                            Gruumsh in their dreams, calling them to unleash the
                            rage that simmers within them. Others feel Gruumsh's
                            exultation when they join in melee combat—and either
                            exult along with him or shiver with fear and loathing.
                            Half-orcs are not evil by nature, but evil does lurk within
                            them, whether they embrace it or rebel against it.
                        </p>
                        <br>
                        <p>
                            Beyond the rage of Gruumsh, half-orcs feel emotion
                            powerfully. Rage doesn't just quicken their pulse, it
                            makes their bodies burn. An insult stings like acid,
                            and sadness saps their strength. But they laugh loudly
                            and heartily, and simple bodily pleasures—feasting,
                            drinking, wrestling, drumming, and wild dancing—fill
                            their hearts with joy. They tend to be short-tempered
                            and sometimes sullen, more inclined to action than
                            contemplation and to fighting than arguing. The most
                            accomplished half-orcs are those with enough self-
                            control to get by in a civilized land.
                        </p>
                        <h3>Tribes and slums</h3>
                        <p>
                            Half-orcs most often live among orcs. Of the other races,
                            humans are most likely to accept half-orcs, and half-
                            orcs almost always live in human lands when not living
                            among orc tribes. Whether proving themselves among
                            rough barbarian tribes or scrabbling to survive in the
                            slums of larger cities, half-orcs get by on their physical
                            might, their endurance, and the sheer determination
                            they inherit from their human ancestry.
                        </p>
                    </div>
                    <div id="tieflingTab" class="raceTab">
                        <img id="tieflingImg" class="raceImg" src="img/lore/tiefling.webp" alt="tiefling">
                        <h3>Tieflings</h3>
                        <p>
                            To be greeted with stares and whispers, to suffer
                            violence and insult on the street, to see mistrust and
                            fear in every eye: this is the lot of the tiefling. And to
                            twist the knife, tieflings know that this is because a
                            pact struck generations ago infused the essence of
                            Asmodeus-overlord of the Nine Hells-into their
                            bloodline. Their appearance and their nature are not
                            their fault but the result of an ancient sin, for which
                            they and their children and their children's children
                            will always be held accountable.
                        </p>
                        <h3>Infernal bloodline</h3>
                        <p>
                            Tieflings are derived fram human bloodlines, and in the
                            broadest possible sense, they stilllook humano However,
                            their infernal heritage has left a elear imprint on their
                            appearance. Tieflings have large horns that take any
                            of a variety of shapes: some have curling horns like a
                            ram, others have straight and tall horns like a gazelle's,
                            and some spiral upward like an antelopes' horns. They
                            have thick tails, four to tive feet long, which lash or coil
                            around their legs when they get upset or nervous. Their
                            canine teeth are sharply pointed, and their eyes are
                            solid colors-black, red, white, silver, or gold-with no
                            visible selera or pupil. Their skin tones cover the full
                            range of human coloration, but also inelude various
                            shades of red. Their hair, cascading down from behind
                            their horns, is usually dark, from black or brown to dark
                            red, blue, or purple.
                        </p>
                        <h3>Self-reliant and suspicious</h3>
                        <p>
                            Tieflings subsist in small minorities found mostly in
                            human cities or towns, often in the roughest quarters
                            of those places, where they grow up to be swindlers,
                            thieves, or crime lords, Sometimes they live among
                            other minority populations in enclaves where they are
                            treated with more respect.
                        </p>
                        <br>
                        <p>
                            Lacking a homeland, tieftings know that they have
                            to make their own way in the world and that they have
                            to be strong to survive, They are not quick to trust
                            anyone who claims to be a friend. but when a tiefling's
                            companions demonstrate that they trust him or her,
                            the tiefting learns to extend the same trust to them,
                            And once a tiefting gives someone loyalty, the tiefting
                            is a firm friend or ally for life.
                        </p>
                    </div>
                </div>
                <div id="sources">
                    <p>Sources:</p>
                    <ul>
                        <li><a class="sourceLink" href="https://www.dndbeyond.com/" target="_blank">www.dndbeyond.com</a></li>
                        <li>DnD 5e Players Handbook <a class="sourceLink" href="https://dnd.wizards.com/products/rpg_playershandbook" target="_blank">dnd.wizards.com/products/rpg_playershandbook</a></li>
                    </ul>
                </div>
            </article>
            <div id="goBackButtons">
                <a class="goBackButton" href="#faerunArticle">go back to Forgotten Realms</a>
                <a class="goBackButton" href="#racesArticle">go back to Races</a>    
            </div>
        </main>
        <footer>
            <div id="contactInfo">
                <p>Jakub Szymczyk</p>
                <p>jakubszymczyk20@gmail.com</p>
            </div>
        </footer>    
    </body>
</html>