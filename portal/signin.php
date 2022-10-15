<?php

include("../nav/frame.php");

?>
<div class="infobox biginfo">
    <div class="btncase">
        <div class="sidebtn btncolor active">Sign In</div>
        <a class="sidebtn btncolor" href="register.php">Register</a>
        <a class="sidebtn btncolor" href="substatus.php">My Submissions</a>
        <a class="sidebtn btncolor" href="signout.php">Sign Out</a>
    </div>
    <br>
    <div class="subtitle">Sign In</div>
    <br>
    Here, you can sign in to your Ethically Zesty user account. Your account allows you to check the status of your submissions and set your color preferences for the Problematique Zine website. All fields are required.
    <br><br>
    <form class="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" class="small-field fieldcolor" id="username" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" class="small-field fieldcolor" id="password" name="password">
        <br>
        <input type="submit" name="submit" class="sidebtn btncolor submit">
    </form>