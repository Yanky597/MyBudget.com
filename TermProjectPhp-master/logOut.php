<?php

if ($_SESSION['LoggedIn'] === true){

    echo' <form name="logOut" method="POST"  />

    <input class="submitButtonLogout" type="submit" name="logOut" value="logOut"/>

</form>';

    if(isset($_POST['logOut'])){
        session_destroy();
        setcookie('userName', '', time()-4800);
        header("location: logOutMessage.php");
    }
}
else{
    echo '<button class="submitButtonLogout"><a style=" color:var(--contrastLight);" href="login.php">Login</a></button>' ;
}

?>
