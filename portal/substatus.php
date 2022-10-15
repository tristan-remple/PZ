<?php

include("../nav/frame.php");

?>

<div class="infobox biginfo">
    <div class="btncase">
        <a class="sidebtn btncolor" href="signout.php">Sign Out</a>
        <a class="sidebtn btncolor" href="register.php">Register</a>
        <div class="sidebtn btncolor active">My Submissions</div>
    </div>
    <br>
    <div class="subtitle">Submission Status</div>
    <br>
    <div class="blogprebox">
        <div class="blogpre">
            <div class="previewtitle">First Submission Title</div>
            <div class="predate">Submitted 12/23/21</div><br>
            This submission has been accepted.<br>
            <a class="readmore" href="mysub.php?id=1">See Details</a>
        </div>
        <div class="blogpre">
            <div class="previewtitle">2nd Sub Title</div>
            <div class="predate">Submitted 4/9/22</div><br>
            This submission is pending approval.<br>
            <a class="readmore" href="mysub.php?id=2">See Details</a>
        </div>
    </div>
</div>