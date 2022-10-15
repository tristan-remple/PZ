<?php

include("../nav/frame.php");

if ((isset($_GET['id'])) && ($_GET['id'] !== '')) {
    $id = intval($_GET['id']);
} else {
    $id = 1;
}

?>
<div class="infobox biginfo">
    <div class="btncase">
        <a class="sidebtn btncolor" href="sub-change.php<?php echo "?id=", $id; ?>">Request Changes</a>
        <div class="sidebtn btncolor active">Withdraw Submission</div>
        <a class="sidebtn btncolor" href="substatus.php">My Submissions</a>
    </div>
    <br>
    <div class="subtitle">Withdraw Submission</div>
    <br>
    You can use this page to withdraw submissions that have not yet been approved and published. Submissions withdrawn will not be used for Problematique Zine or any other Ethically Zesty projects.
    <br><br>
    <form class="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
    
    <div class="radiolabel">Submission title:</div>
    <div class="small-field fieldcolor">Good Graces</div>
    <br>
    
        <div class="tinyrow">
            <input type="checkbox" class="checkbox checkcolor" name="withdraw" value="withdraw">
            <label for="withdraw">* I do not want my submission to be considered for publication in Problematique Zine.</label>
        </div>
        <br>
        
        <label for="reason">Please enter your reason for withdrawing:</label>
        <textarea class="large-field fieldcolor" id="reason" name="reason"></textarea>
        <br>
        
        <label for="password">Please re-enter your password for security:</label>
        <input type="password" class="small-field fieldcolor" id="password" name="password">
        <br>
        
        <input type="hidden" id="user_id" value="<?php ?>">
        <input type="hidden" id="sub_id" value="<?php echo $id; ?>">
        
        <input type="submit" name="submit" class="sidebtn btncolor submit">
    </form>