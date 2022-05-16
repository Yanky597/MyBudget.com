<?php include 'include/header.php'?>

<?php
if ($_SESSION['LoggedIn'] != true) {
    header('location: login.php');
}
else{
    echo "<h1 class='welcome'>Welcome"." ".ucfirst($_COOKIE['userName'])."!</h1><br>";
}

?>


<div class="form_submission_results">
    <h1 class="formH1_results">-YOUR PROFILE-</h1>

    <table>
        <tr>
            <td>NAME:</td>
            <td>
                <?php echo $_POST['myName']; ?>
            </td>
        </tr>
        <tr>
            <td>PHONE:</td>
            <td>
                <?php echo $_POST['phone']; ?>
            </td>
        </tr>
        <tr>
            <td>EMAIL:</td>
            <td>
                <?php echo $_POST['email']; ?>
            </td>
        </tr>
        <tr>
            <td>Are you financially independent?</td>
            <td>
                <?php echo $_POST['independence']; ?>
            </td>
        </tr>
        <tr>
            <td>How old are you?</td>
            <td>
                <?php echo $_POST['age']; ?>
            </td>
        </tr>
        <tr>
            <td>Do you own a...</td>
            <td>
                <?php
                //prints the array of multiple options
                if (!empty($_POST['item'])) {
                    foreach ($_POST['item'] as $check) {
                        echo $check . " ";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Comments:</td>
            <td>
                <?php echo $_POST['aboutMe']; ?>
            </td>
        </tr>
    </table>

    <div class="back_to_form_container">
    <a href="./form.php">
        <div>
            <button class="submitButton_resultPage">EDIT</button>
        </div>
    </a>
    </div>            
</div>

<?php include 'include/footer.php'?>