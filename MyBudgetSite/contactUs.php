<?php include 'include/header.php';?>
 
<div class="formPageContainer">
    <h1 class="formH1">-CONTACT US-</h1>
    <form name="contactUs" method="POST" action="mail.php">

        <!-- text input fields-->
        <div class="fields"><label>NAME:</label>
            <input class="textFields" type="text" name="myName" placeholder="NAME" value="<?php echo isset($_POST['myName']) ? $name : ''; ?>">
        </div>
        <div class="fields"><label>EMAIL:</label>
            <input class="textFields" type="email" name="email" placeholder="EMAIL" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
        </div>

        <!-- text area-->
        <div class="text_area_container">
            <h1 class="formH1">-Questions & Comments-</h1>
            <textarea name="comment" cols="30" rows="10" value="<?php echo isset($_POST['comment']) ? $text : ''; ?>"></textarea>
        </div>

        <!-- submit button-->
        <div class="submit_container">
            <a href="mail.php">
                <input class="submitButton" type="submit" name='submit'>
            </a>
        </div>

    </form>
</div>


<?php include 'include/footer.php' ?>