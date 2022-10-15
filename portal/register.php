<?php

include("../nav/frame.php");

?>
<div class="infobox biginfo">
    <div class="btncase">
        <a class="sidebtn btncolor" href="signin.php">Sign In</a>
        <div class="sidebtn btncolor active">Register</div>
        <a class="sidebtn btncolor" href="substatus.php">My Submissions</a>
        <a class="sidebtn btncolor" href="signout.php">Sign Out</a>
    </div>
    <br>
    <div class="subtitle">Register</div>
    <br>
    Here, you can register for an Ethically Zesty user account. Your account allows you to check the status of your submissions and set your color preferences for the Problematique Zine website. All fields are required.
    <br><br>
    <form class="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" class="small-field fieldcolor" id="username" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" class="small-field fieldcolor" id="password" name="password">
        <br>
        <label for="email">Email:</label>
        <input type="email" class="small-field fieldcolor" id="email" name="email">
        <br>
        <input type="submit" name="submit" class="sidebtn btncolor submit">
    </form>