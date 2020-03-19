<?php

// Details of the local server we will be using to host the database
$dbhost  = 'localhost';	// Local server hosted as 'localhost'
$dbuser  = 'root';	// Using system root user, default
$dbpass  = '';	// No password set
$dbname  = 'gamesreview';	// Name of the database

// connect to the host:
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);

// exit the script with a useful message if there was an error
if (!$connection) {

	//display error message if there is no connection
	die("Connection failed: " . $mysqli_connect_error);
}

// build a statement to create a new database
$sql = "CREATE DATABASE IF NOT EXISTS " . $dbname;

// no data returned, we just test for true(success)/false(failure)
if (mysqli_query($connection, $sql)) {

	//display a success message
	echo "Database created successfully, or already exists<br>";
}
else {

	//display an error message
	die("Error creating database: " . mysqli_error($connection));
}

$sql ="SET FOREIGN_KEY_CHECKS=0";
if (mysqli_query($connection, $sql))
{
	echo "Foreign key check set to 0<br>";
}
else
{
	die("Error creating database: " . mysqli_error($connection));
}

// connect to our database
mysqli_select_db($connection, $dbname);


///////////////////////////////////////////
////////////// USERS TABLE ////////////////
///////////////////////////////////////////


// if there's an old version of our table, then drop it
$sql = "DROP TABLE IF EXISTS users";

// no data returned, we just test for true(success)/false(failure)
if (mysqli_query($connection, $sql)) {

	echo "Dropped existing table: users<br>";
}

else {

	die("Error checking for existing table: " . mysqli_error($connection));
}

// make our table:
// notice that the username field is a PRIMARY KEY and so must be unique in each record
$sql = "CREATE TABLE users (userid SMALLINT(4) NOT NULL AUTO_INCREMENT, username VARCHAR(32) NOT NULL, password VARCHAR(32) NOT NULL, email VARCHAR(128), firstname VARCHAR(32), surname VARCHAR(32), firstLine VARCHAR(40), city VARCHAR(32), postcode VARCHAR(8), PRIMARY KEY(userid))";

// no data returned, we just test for true(success)/false(failure)
if (mysqli_query($connection, $sql)) {

	echo "Table created successfully: users<br>";
}

else {

	die("Error creating table: " . mysqli_error($connection));
}


///////////////////////////////////////////
/////////// USERS TABLE DATA //////////////
///////////////////////////////////////////

$usernames[] = 'admin'; $passwords[] = 'admin'; $emails[] = 'admin@gmail.com'; $firstnames[] = 'admin'; $lastnames[] = 'admin'; $firstLines[] = '10 newark avenue'; $cities[] = 'detroit'; $postcodes[] = 'bl9 9az';
//$usernames[] = 'jsmith'; $passwords[] = 'johnsmith'; $emails[] = 'johnsmith@gmail.com'; $firstnames[] = 'john'; $lastnames[] = 'smith'; $telephones[] = '07518326497';

// loop through the arrays above and add rows to the table
for ($i=0; $i<count($usernames); $i++) {

	// create the SQL query to be executed
	$sql = "INSERT INTO users (username, password, email, firstname, surname, firstLine, city, postcode)
			VALUES ('$usernames[$i]', '$passwords[$i]', '$emails[$i]', '$firstnames[$i]', '$lastnames[$i]', '$firstLines[$i]', '$cities[$i]', '$postcodes[$i]')";

	// run the above query '$sql' on our DB
	// no data returned, we just test for true(success)/false(failure)
	if (mysqli_query($connection, $sql)) {

		echo "row inserted<br>";
	}

	else {

		die("Error inserting row: " . mysqli_error($connection));
	}
}

///////////////////////////////////////////
////////////// REVIEWS TABLE ////////////////
///////////////////////////////////////////


// if there's an old version of our table, then drop it
$sql = "DROP TABLE IF EXISTS reviews";

// no data returned, we just test for true(success)/false(failure)
if (mysqli_query($connection, $sql)) {

	echo "Dropped existing table: reviews<br>";
}

else {

	die("Error checking for existing table: " . mysqli_error($connection));
}

// make our table:
// notice that the username field is a PRIMARY KEY and so must be unique in each record
$sql = "CREATE TABLE reviews (reviewID SMALLINT(4) NOT NULL AUTO_INCREMENT, review_name TEXT(32) NOT NULL, review_data TEXT(6000), author VARCHAR(128), imageSmall VARCHAR(128), imageLarge VARCHAR(128), PRIMARY KEY(reviewID))";

// no data returned, we just test for true(success)/false(failure)
if (mysqli_query($connection, $sql)) {

	echo "Table created successfully: reviews<br>";
}

else {

	die("Error creating table: " . mysqli_error($connection));
}


///////////////////////////////////////////
/////////// reviews TABLE DATA ////////////
///////////////////////////////////////////


$review_names[] = 'Red Dead Redemption 2'; $review_datas[] = 'Red Dead Redemption 2 does not start off how you would expect. There are no endless vistas of scraggy desert, broken up by the occasional cactus. No vultures circling overhead or decrepit ranches to explore.Instead, there’s snow. A lot of snow. The year is 1899 – 12 years before the events of Red Dead Redemption – and Dutch Van der Linde’s gang of ill-mannered misfits are trudging into the mountains after a disastrous heist in the nearby town of Blackwater. The snow is waist-high and still falling in a thick, heavy blanket. A far cry from the wide-open panoramas of the last game, you can barely see the hoof prints your horse leaves in the snow a few metres behind you. The story is just as bleak. Right from the off, you find that one of your fellow gang members hasn’t survived the journey and another – John Marston, the protagonist from the previous game – has been savaged by wolves and needs rescuing. Food is scarce and the law is always just around the corner. If the Van der Linde gang is going to survive in the barely-tamed west, then they’d better stick together. You play as Arthur Morgan, a grizzled and emotionally-stunted enforcer who has been with the Van der Linde gang since childhood. As with John Marston, Morgan’s moral universe is painted entirely in various shades of grey. “We’re bad men, but we ain’t them,” he says after a run-in with a rival gang. Morality runs through the entire game, even doing small favours for a passerby can boost Morgan’s honour rating, earning him discounts in certain stores. At other times, the moral choices are more stark: kill a trio of hostages or let them go, help an old friend out on an errand or turn away. It’s only after a few hours of gameplay, however, that Red Dead Redemption really opens up. After trekking through fictitious East Grizzlies mountain range, the Van der Linde gang sets up camp and Dutch lays out some ground rules. “It’s time for everyone to earn their keep,” Dutch tells his assembled gang members. This means contributing to the camp’s coffers, hunting animals so the camp can eat, resupplying the medicine cart when supplies run low and upgrading the camp facilities when you’ve got a bit of spare cash from a recent heist. Sound like a chore? It feels like it. Where Red Dead Redemption reveled in the freedom of the undeveloped West, its follow-up sometimes gets bogged-down in the RPG-like intricacies of keeping going in the game world. The vital-signs system is based around three ‘cores’ – health, stamina and dead-eye – which all deplete over time unless you maintain them by eating, smoking and drinking. But eat too much and you’ll get fat, and your vitals will deplete more quickly. Wear the wrong clothes for the weather and your cores will take a hit too.';
$authors[] = 'https://www.wired.co.uk/article/red-dead-redemption-2-review-rockstar'; $smallImages[] = 'images/RDR-Small.jpg'; $largeImages[] = 'images/RDR-Large.jpg';

$review_names[] = 'The legend of Zelda: breath of the wild'; $review_datas[] = "Dont go in expecting another adventure through the fantasy world of Hyrule like the many you\'ve had before, though. Instead, you\'ll find a game that is almost shockingly different, experimental, and even ridiculously difficult in places. It is quite unlike any other Zelda - and is brilliant as a result.Zelda has always had a repetition problem. The vast majority of entries in the saga have offered variations on the pattern: enter dungeon, find powerful item, defeat dungeon boss with new item, repeat eight times, go and defeat the supreme evil of Ganon. For all that Ocarina of Time, A Link to the Past, The Wind Waker, or Twilight Princess added nuanced details and individual twists on the formula, the formula itself remained. Contrast Breath of the Wild, which opens with hero Link waking from a hundred years of slumber, emerging into a version of Hyrule distinct from all before it - an open world, full of living creatures and hidden populations, traders and threats. It\'s a world where you can hunt for pigs and wolves, go fishing, hoard items to sell, forage for ingredients to cook, or simply explore the vast world to uncover its secrets. The comparison has been made before, so we\'ll make it again - forget Ocarina, this is Zelda by way of Skyrim. Much like the The Elder Scrolls series though, Nintendo\'s offering will offer each player something different, too. WIRED\'s James Temperton and I have both been playing the game, and had strikingly divergent experiences. While I was fighting my way through the innards of Divine Beast Vah Ruta – a colossal elephant mecha made of ancient stone and crystal technologies, one of four such wonders roaming Hyrule – James was getting on the Hylian property ladder, buying a house in tranquil Hateno Village. Before that, James had been battling a dragon atop Mount Lanayru, a snow-capped peak on Hyrule\'s eastern reaches, while I was gallivanting about activating watchtowers, which fill in the world\'s map. Our unique trajectories through the game are a result of the glorious openness, leaving players free to choose which, if any, quests to pursue. Yes, Zelda has quests now, tracked and updated as you progress through them, and split into three categories – Main Quest, Side Quests, and Shrine Quests. Main Quests move the story along, and there\'s far more of a narrative push to Breath of the Wild than you might find in other open world games; a target, a fixed goal, even though you\'re welcome to ignore it for as long as you like. It\'s one you learn about almost straight away, after you emerge from your sleep – Calamity Ganon, the dark force that has blighted the land. Yes, Ganon is the de facto supervillain of the Zelda series, but he\'s never been so threatening as he is here. He\'s seen in the distance from almost any high point, a towering dragon of roiling dark energy, coiled ominously around Hyrule Castle. You can charge straight towards Ganon – you know exactly where he is, out there corrupting the heart of Hyrule, almost taunting you – armed with nothing but your pants and a wooden stick. You\'ll almost certainly fail, but you can do it. Instead, you\'ll likely want to pursue Shrine Quests";
$authors[] = 'https://www.wired.co.uk/article/legend-zelda-breath-wild-nintendo-switch-review'; $smallImages[] = 'images/LegendOfZelda-Small.jpg'; $largeImages[] = 'images/LegendOfZelda-Large.jpg';

$review_names[] = 'Assassins Creed: Origins'; $review_datas[] = "I spent 30 hours finishing the main campaign, which took me through just over half of the expansive and beautiful map that recreates ancient Egypt’s varied architecture and environments. It’s filled with areas of soft sand that are swept by dynamic sandstorms, ranges of treacherous and rocky mountains, catacombs of towering ancient structures built in the names of the gods, and the decaying shacks of the common people. Refreshingly, I discovered all of these things through an organic drive to explore, rather than through the series’ traditional structure of climbing to viewpoints to have them unveiled for you. There are plenty more secrets to uncover, and the delightful sense of discovery still hasn’t left me. This is also the biggest and most connected map we’ve seen in an Assassin\'s Creed game. Even the seemingly-empty desert regions having their own treats, like the breathtaking view from the highest elevation point, with an impressive draw distance, whether you’re playing on Xbox One X or PlayStation 4. There are multiple cities, too, each with their own unique culture featuring different gods, politics, race relations, and prejudices to uncover. They’re distinct in architecture and environment, and that makes the significant time commitment one that’s consistently varied and surprising. The density of it is made more impressive by being able to explore it in its entirety without any loading screens, with the exception of some story cutscenes, and if you choose to fast travel. If you want to get around quickly, a smart in-universe transit system lets you call your mount and press a button to follow the main road, or to head to a custom marker you’ve placed on the map – all fully automated, letting you take in the scenery around you.
While the main story is delightfully mystical and elaborate on its own, Origins also has some of the strongest actual mission design I’ve encountered in the entire 10-game series – and maybe in any open-world RPG. From collecting clues to solve mysteries, to chariot racing and gladiatorial arena fighting, to chasing down leads and assassinating high-level enemies hidden in fortresses, to Black Flag-style ship-to-ship combat, I was pleasantly surprised by how each of them felt like a self-contained short, well-paced story. Another highlight is the series of hidden temples, which – without spoiling anything – tie into Assassin’s Creed’s overarching sci-fi story, among other things. They are distinct from every other tomb you’ll find in ancient Egypt, and even include some throwbacks to the fan-favorite, timing-based platforming puzzles introduced way back in Assassin’s Creed 2. I rarely felt like I was doing too much of any one thing.";
$authors[] = "https://uk.ign.com/articles/2017/10/26/assassins-creed-origins-review"; $smallImages[] = "images/AC-Small.jpg"; $largeImages[] = "images/AC-large.jpg";

$review_names[] = 'God of War'; $review_datas[] = 'Some of the best films of all time are those whose different strengths all work in concert to create a unified, engrossing whole. The Shining, The Social Network, and Jaws are all excellent examples of films made up of strong individual parts complementing each other to form a fantastic work of art. That is absolutely true of God of War – its musical score elevates story moments, which flow seamlessly into fantastic action gameplay, which facilitates exploration and puzzles that reward you with a deeper understanding of its characters and its expansive and beautiful world. God of War is a masterful composition of exceptional interlocking parts, deliberate in its design and its foreshadowing, which pays off in unexpected ways in both the gameplay and story. Set in a new, Norse mythology-inspired world and starring a familiar but thoughtfully reimagined character, God of War’s fish-out-of-Greek-water tale is a nonstop whirlwind of emotions. It’s all framed by one continuous camera shot that never cuts away or takes the focus off of the heart of it all: Kratos’ relationship with his young son, Atreus. But the story also encompasses an indelible supporting cast, a gorgeous world consistently rewarding to explore, and immensely satisfying combat.God of War works from minute one thanks to the simplicity of its plot.
God of War works from minute one thanks to the simplicity of its plot. Kratos and Atreus – who start as, at best, acquaintances – begin their journey having just gone through the loss of Kratos’ wife, whom Atreus bonded with much more than his father. The two set out to the tallest point in all the realms to carry out her final wishes. The setup is Journey-like in its visual nature – I saw the peak in the distance and knew I’d get there eventually – but as similar stories have taught me, the path is never a straight or easy one. A number of obstacles, both natural and god-made, extend the adventure to around 25 hours’ worth of terrifying threats, beginning with the first major encounter in the opening hours.
Every God of War Review If you’ve played the previous games in the series – seven of them, counting two PSP games and one mobile game – you know that Kratos lived a long life of loss, triumph, and plenty of god-killing in ancient Greece. While that history certainly informs who he is now, the character we encounter here has started a new chapter, having found love, a family, and a full bushy beard in this world of Norse mythology. But he is still a stranger to this place, and is forced to rely on the son he barely connects with to decipher its languages and guide him when the swing of an axe or the imprint of his boot on an undead foe won’t do the trick. That relationship, and how it evolves and changes over the course of the story, is one of God of War’s most captivating qualities. Here are two people with demonstrably different personalities, one of them young and still innocent, the other old and as blood-soaked as they come, both grieving over the same woman in different ways. Kratos loves his son but is cold at first. He seems disappointed in his lack of skill and stomach for combat, referring to him mostly as “Boy,” and rarely making eye or physical contact with him. (He will, of course, unflinchingly beat the life out of anyone who threatens his son, which appears to be the only way he knows how to express affection.) Kratos’ uncertainty of how to relate to a boy he’s both looking to turn into a survivor and yet afraid may turn out like him is devastating to watch.';
$authors[] = 'https://uk.ign.com/articles/2018/04/12/god-of-war-review'; $smallImages[] = 'images/GOW-Small.jpg'; $largeImages[] = 'images/GOW-Large.jpg';

$review_names[] = 'Need For Speed Heat'; $review_datas[] = 'Still burned by 2017’s Need for Speed Payback, I wasn’t sure Need for Speed Heat was going to be the salve the series needed – but this open-world street racer has some surprising pep to it. Heat is a marked return to form, owing its success to ingredients plucked from a few of the franchise’s most fondly-remembered games. It took more attempts than would’ve been ideal, but developer Ghost has finally built a racer that feels fittingly faithful to the roots of Need for Speed. Heat is hardly revolutionary, but it is fast, fun, and streets ahead of 2017’s properly disappointing Need for Speed Payback. Heat combines elements of fan-favourites like Underground and the original Most Wanted with some welcome tweaks inspired by its contemporaries. The result is deep vehicle customisation and hectic cop chases, but in a world featuring fewer hazards that’ll bring cars to a dead stop. Like in Forza Horizon, even stone walls crumble and trees splinter if you careen off course. Fewer encounters with momentum-killers helped to keep my pace high and my pulse higher. It’s a back-to-basics approach with some modern modifications, and it works. Best of all, it’s completely purged of the free-to-play style lottery-based performance upgrade system, the ill-conceived obstacles preventing access to body mods, and most of the other horrible dreck that plagued Payback. It’s all been ripped out and sent to the scrapyard. Palm City is Need for Speed Heat’s new playground, and the neon-drenched, Miami-inspired map is a great fit for the classic Need for Speed motif. The city itself is the big highlight here – the surrounding countryside is a little unmemorable – but there are a few other cool spots, including a mini Cape Canaveral-style space centre, a fun abandoned racing oval, and a big container yard begging for a shred session. It’s obviously only a sliver of the size of something as wildly ambitious as The Crew 2, and a bit lifeless on closer inspection, but it’s far denser than Payback and makes for a more interesting driving experience. The neon-drenched, Miami-inspired map is a great fit for the classic Need for Speed motif. Heat’s interesting hook is that there are basically two distinct experiences to be gleaned here, and switching between each is a manual process. Daytime Palm City is defined by regular, sanctioned street racing on marked courses for cash payouts, while night racing is all about illegal, underground racing and running from the fuzz to build up rep points. Both are needed to progress through Heat’s story, which still plays out like an off-brand Fast & Furious, but the writing’s a lot more restrained than that of the regularly cringeworthy Payback. There’s not a huge amount of story; it’s more of an occasional diversion from Heat’s regular racing events. There’s some nice fan service towards the end but ultimately it just tapers off suddenly like a mid-season TV finale and didn’t leave much of a lasting impression. It’s also worth mentioning that Heat can be played online (where other players can join your events) or completely offline, but you have to opt in to either mode from the main menu; it’s not quite as elegant as the seamless online/offline switching afforded in the likes of the Forza Horizon games. After multiple generations of open-world racers where the sun rises and sets without awaiting my instructions I initially didn’t know what to make of Heat’s unique time-of-day switching system but, after some time with it, I quite like the power it grants me to focus on what I need. If I want money for parts and cars, I’ll race during the day. Heat looks a bit plainer in daylight – overall, the environment looks better whipping by at 150 miles an hour than under intense scrutiny – but the racing is decent. I’m a big fan of the crash barriers being real, individual objects in the world, too; there’s a lot less pinballing off invincible walls here. If, on the other hand, I need rep points to qualify for more missions and more potent performance upgrades, I’ll race at night. Night is absolutely the superior visual experience, especially when it rains. The racing is also more exciting, with traffic to avoid and more aggressive cops to deal with';
$authors[] = 'https://uk.ign.com/articles/2019/11/08/need-for-speed-heat-review'; $smallImages[] = 'images/NFS-Small.jpg'; $largeImages[] = 'images/NFS-Large.jpg';

$review_names[] = 'Star wars Jedi: Fallen Order'; $review_datas[] = '';
$authors[] = 'https://uk.ign.com/articles/2017/10/26/assassins-creed-origins-review'; $smallImages[] = 'images/Starwars-Small.jpg'; $largeImages[] = 'images/Starwars-Large.jpg';


// loop through the arrays above and add rows to the table
for ($i=0; $i<count($review_names); $i++) {

	// create the SQL query to be executed
	$sql = "INSERT INTO reviews (review_name, review_data, author, imageSmall, imageLarge)
			VALUES ('$review_names[$i]', '$review_datas[$i]', '$authors[$i]', '$smallImages[$i]', '$largeImages[$i]')";

	// run the above query '$sql' on our DB
	// no data returned, we just test for true(success)/false(failure)
	if (mysqli_query($connection, $sql)) {

		echo "row inserted<br>";
	}

	else {

		die("Error inserting row: " . mysqli_error($connection));
	}
}

///////////////////////////////////////////
////////////// comments TABLE ////////////////
///////////////////////////////////////////


// if there's an old version of our table, then drop it
$sql = "DROP TABLE IF EXISTS comments";

// no data returned, we just test for true(success)/false(failure)
if (mysqli_query($connection, $sql)) {

	echo "Dropped existing table: comments<br>";
}

else {

	die("Error checking for existing table: " . mysqli_error($connection));
}

// make our table:
// notice that the username field is a PRIMARY KEY and so must be unique in each record
$sql = "CREATE TABLE comments(reviewID SMALLINT(4) NOT NULL, commentData TEXT(32), FOREIGN KEY (reviewID) REFERENCES reviews(reviewID) ON DELETE CASCADE)";

// no data returned, we just test for true(success)/false(failure)
if (mysqli_query($connection, $sql)) {

	echo "Table created successfully: comments<br>";
}

else {

	die("Error creating table: " . mysqli_error($connection));
}


///////////////////////////////////////////
////////// comments TABLE DATA ////////////
///////////////////////////////////////////

$reviewIDs[] = "1"; $commentDatas[] = "this review sucks dick";
$reviewIDs[] = "1"; $commentDatas[] = "leave me alone";

$reviewIDs[] = "2"; $commentDatas[] = "this shouldn\'t be showing in the rdr review FIX IT RN";


// loop through the arrays above and add rows to the table
for ($i=0; $i<count($reviewIDs); $i++) {

	// create the SQL query to be executed
	$sql = "INSERT INTO comments (reviewID, commentData)
			VALUES ('$reviewIDs[$i]', '$commentDatas[$i]')";

	// run the above query '$sql' on our DB
	// no data returned, we just test for true(success)/false(failure)
	if (mysqli_query($connection, $sql)) {

		echo "row inserted<br>";
	}

	else {

		die("Error inserting row: " . mysqli_error($connection));
	}
}




// the table is finished, close database connection
mysqli_close($connection);
?>
