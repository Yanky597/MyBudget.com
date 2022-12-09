<?php include 'include/header.php';

if ($_SESSION['LoggedIn'] != true) {
    header('location: login.php');
}
?>

<div class="spendingContainer">
    <div class="left_side_of_spending">
        <h1>Track Your Purchases</h1>
        <a href="addAPurchase.php"><button class="newPurchase">Add a purchase<span class="plusSign">+</span></button></a>
        <table>
            <?php
                require('config/db.php');

                $query = "SELECT * FROM `purchaseTracker` WHERE username = '$user'";

                $result = mysqli_query($link, $query);
                $row = mysqli_fetch_all($result, MYSQLI_NUM);
                if(count($row) == 0){
                    
                    echo '<tr><td>You do not have any purchases yet</td></tr>';
                }
                else{
                    for ($i = 0; $i < count($row); $i++) {
                        echo print_r($row);
                        
                    }
                }

                // frees up the data
                mysqli_free_result($result);

                //closes the link to the database?
                mysqli_close($link);

            ?>
        </table>
    </div>
    <div class="right_side_of_spending">
        <div class="charts">
            display charts
        </div>
        <div class="spendingInfo">
            display spending info
        </div>
    </div>

</div>

<?php include 'include/footer.php'?>
