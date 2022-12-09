<?php 
//require('config.php');

// includes the connection page
require('config/db.php');

$username = mysqli_real_escape_string($link, $_GET['username']);

// sets up a query from the database
//$query = 'SELECT * username FROM AuthorizedUsers WHERE username = "chana123"';


$query = 'SELECT username FROM AuthorizedUsers WHERE username = "chana123" AND pass = "1234"';

// the result of the query is stored in this variable
$result = mysqli_query($link, $query);

//fetch data and stores it in an associative array
//$users = mysqli_fetch_assoc($result); -> fetches a single user

/* this fetches all the users from the database */
//$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

if($result){
    $count = mysqli_num_rows($result);
    echo $count;
}

//prints the result of the query 

//var_dump($users);

// frees up the data
mysqli_free_result($result);

//closes the link to the database?
mysqli_close($link);

?>
