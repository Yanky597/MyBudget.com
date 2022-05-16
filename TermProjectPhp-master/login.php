<?php include 'include/header.php'?>

<?php if($_SESSION['LoggedIn'] === true){
    header('location: info.php');
    }
 ?>


<div class="login_form_container">
        <h1 style="color: var(--contrastLight);">-LOGIN-</h1>
        <form name="myInfo" method="POST" action="verifyLogin.php">

            <!-- text input fields-->

            <div class="fields">NAME:
                <input class="textFields" type="text" name="userName" placeholder="name">
            </div>
            <br>
            <div class="fields">PASSWORD:
                <input class="textFields" type="password" name="password" placeholder="password">
            </div>           
            <!-- submit button-->
            <div class="submit_container">
                <a href="/verifyLogin.php">
                    <input class="submitButton" type="submit" value="Submit">
                </a>
            </div>

        <form>
</div>


<?php include 'include/footer.php'?>

