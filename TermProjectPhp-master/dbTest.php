<?php 
//require('config.php');

// includes the connection page
require('config/db.php');

$username = mysqli_real_escape_string($link, $_GET['username']);

$query = 'SELECT username FROM AuthorizedUsers WHERE username = "chana123" AND pass = "1234"';

// the result of the query is stored in this variable
$result = mysqli_query($link, $query);

if($result){
    $count = mysqli_num_rows($result);
    echo $count;
}

// frees up the data
mysqli_free_result($result);

//closes the link to the database?
mysqli_close($link);

?>
