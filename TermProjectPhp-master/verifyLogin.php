
<?php

// includes the connection page
require('config/db.php');

//$user = mysqli_real_escape_string($link, $_POST['userName']);
$user = htmlentities(strtolower($_POST['userName']));

//echo "User = ". $user. " <br>";

//$passW = mysqli_real_escape_string($link, $_POST['password']);
$passW = htmlentities($_POST['password']);

// sets up a query from the database
//$query = 'SELECT * username FROM AuthorizedUsers WHERE username = "chana123"';

$query = "SELECT username FROM AuthorizedUsers WHERE username = '$user' AND pass = '$passW'";

// the result of the query is stored in this variable
$result = mysqli_query($link, $query);

//fetch data and stores it in an associative array
//$users = mysqli_fetch_assoc($result); -> fetches a single user

/* this fetches all the users from the database */
//$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

// sets a default username
$currentUserName = "guest";

// checks amount of times user tried to log in
$loginAttempt = 0;

if($_SESSION['LoggedIn'] == false){

    if($result){
        $count = mysqli_num_rows($result);
        //echo "Count = ". $count. " <br>";
        //print_r($result);
        if($count == 1){
            $currentUserName = $user;
            setcookie('userName', $currentUserName, time() + 4800);
            session_start();
            $_SESSION['LoggedIn'] = true;
            $_SESSION['username'] = $user;
        }
    }
    else{
        $_SESSION['LoggedIn'] = false;
        $loginAttempt++;

    }
}

// frees up the data
mysqli_free_result($result);

//closes the link to the database?
mysqli_close($link);

if($_SESSION['LoggedIn'] === true){
    echo "<h1>Welcome"." ".$_COOKIE['userName']."!</h1><br>";
    header('location: info.php');
}
else{
    include 'login.php';
    echo "<h1 style='color:red; text-align:center'>Error! Invalid username or password.</h1>";
    
}

?>

