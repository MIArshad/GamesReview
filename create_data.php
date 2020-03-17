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
$sql = "CREATE TABLE users (userid SMALLINT(4) NOT NULL AUTO_INCREMENT, username VARCHAR(32) NOT NULL, password VARCHAR(32) NOT NULL, email VARCHAR(128), firstname VARCHAR(32), lastname VARCHAR(32), PRIMARY KEY(userid))";

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


$usernames[] = 'jsmith'; $passwords[] = 'johnsmith'; $emails[] = 'johnsmith@gmail.com'; $firstnames[] = 'john'; $lastnames[] = 'smith'; $telephones[] = '07518326497';

// loop through the arrays above and add rows to the table
for ($i=0; $i<count($usernames); $i++) {

	// create the SQL query to be executed
    $sql = "INSERT INTO users (username, password, email, firstname, lastname)
			VALUES ('$usernames[$i]', '$passwords[$i]', '$emails[$i]', '$firstnames[$i]', '$lastnames[$i]')";

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
$sql = "CREATE TABLE reviews (reviewID SMALLINT(4) NOT NULL AUTO_INCREMENT, review_name TEXT(32) NOT NULL, review_data TEXT(32), author VARCHAR(128), PRIMARY KEY(reviewID))";

// no data returned, we just test for true(success)/false(failure)
if (mysqli_query($connection, $sql)) {

	echo "Table created successfully: reviews<br>";
}

else {

	die("Error creating table: " . mysqli_error($connection));
}


///////////////////////////////////////////
/////////// USERS TABLE DATA //////////////
///////////////////////////////////////////


$review_names[] = 'Red Dead Redemption 2'; $review_datas[] = 'Bare lorem ipsums innit blud'; $authors[] = 'santiago';
$review_names[] = 'The legend of Zelda: breath of the wild'; $review_datas[] = 'Bare lorem ipsums innit blud'; $authors[] = 'santiago';

// loop through the arrays above and add rows to the table
for ($i=0; $i<count($review_names); $i++) {

	// create the SQL query to be executed
    $sql = "INSERT INTO reviews (review_name, review_data, author)
			VALUES ('$review_names[$i]', '$review_datas[$i]', '$authors[$i]')";

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
/////////// comments TABLE DATA //////////////
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
