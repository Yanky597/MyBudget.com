<?php include 'include/header.php';
session_start();
?>

<?php
if ($_SESSION['LoggedIn'] != true) {
    header('location: login.php');
}

echo "<h1 class='formH1_results'>Welcome" . " " . ucfirst($_COOKIE['userName']) . "</h1>
<h2 class='formH1_results'>SET YOUR FINANCIAL GOALS</h2>";
?>

<div class="icon_goal_flex">
    <img src="./images/collegeIcon.png" alt="save for college icon">
    <img src="./images/piggyBankIcon.png" alt="save for retirement icon">
    <img src="./images/buddingGrowth.png" alt="save for retirement icon">
</div>



<?php include 'include/footer.php' ?>