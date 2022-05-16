<?php include 'include/header.php'?>

    <div class="formPageContainer">
        <h1 class="formH1">-MY INFO-</h1>
        <form name="myInfo" method="POST" action="info.php">

            <!-- text input fields-->
            <div class="fields">NAME:
                <input class="textFields" type="text" name="myName" placeholder="name">
            </div>
            <br>
            <div class="fields">PHONE:
                <input class="textFields" name="phone" placeholder="phone">
            </div>
            <br>
            <div class="fields">EMAIL:
                <input class="textFields" name="email" placeholder="email">
            </div>

            <!--dropdown-->
            <div class="dropDown_container">
                <span>Are you financially independent?</span>
                <select name="independence" id="">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>


            <!-- radio fields-->
            <div class="radio_container">
            <h1 class="formH1">How old are you?</h1>
                <div class="radio_grid">
                    <input class="radio" type="radio" name="age" value="18-25">
                      <label for="html">18-25</label><br>
                    <input class="radio" type="radio" name="age" value="25-39">
                      <label for="html">25-39</label><br>
                    <input class="radio" type="radio" name="age" value="40_&_above">
                      <label for="html">40 & Above</label><br>
                </div>
            </div>

            <!-- checkbox-->
            <div class="checkbox_container">
            <h1 class="formH1">-Do you own a-</h1>
                <div class="inner_checkbox">
                    <input type="checkbox" name="item[]" value="House">
                    <label for="item"> House</label><br>
                    <input type="checkbox" name="item[]" value="Car">
                    <label for="item"> Car</label><br>
                    <input type="checkbox" name="item[]" value="Boat">
                    <label for="item"> Boat</label><br>
                    <input type="checkbox" name="item[]" value="Bike">
                    <label for="item"> Bike</label><br>
                </div>
            </div>

            <!-- text area-->
            <div class="text_area_container">
                <h1 class="formH1">-Tell us about you!-</h1>
                <textarea name="aboutMe" cols="30" rows="10">
                </textarea>
            </div>

            <!-- submit button-->
            <div class="submit_container">
                <a href="/info.php">
                    <input class="submitButton" type="submit" value="Submit">
                </a>
            </div>


        </form>
    </div>


<?php include 'include/footer.php'?>