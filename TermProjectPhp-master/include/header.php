<?php session_start();

require('config/db.php');
$query = 'SELECT * FROM userAndPass'


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/style.css">
    <title>MyBudget.com</title>
</head>

<body>
    <div class="container">

        <header>
            <div class="login_container">
                <span>
                    <?php
                    if (isset($_COOKIE['userName'])) {
                        echo '<h4>'.strtoupper($_COOKIE["userName"])."</h4><br>";
                    } else {
                        echo "<h4>GUEST</h4>";
                    }
                    ?>
                </span>
                <span style="text-align: center;">
                    <a href="login.php">
                        <img class="login_icon" src="images/personIcon.png" alt="icon of a person for login" />
                        <?php
                            include 'logOut.php';
                        ?>
                    </a>
                </span>
            </div>
            <?php $_SESSION['LoggedIn']?>
            <?php include "menu.php" ?>
        </header>

