<?php

include("../nav/frame.php");

?>
<div class="infobox biginfo">
    <div class="subtitle">Contact Us</div>
    <br>
    Etiam posuere nisi eu eros rhoncus aliquet. Nullam interdum lobortis hendrerit. Proin pulvinar laoreet elementum. Praesent fringilla velit et sem gravida posuere. Sed et dapibus arcu. All fields are required.
    <br><br>
    <form class="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <label for="q_type">Please select the nature of your inquiry:</label>
        <div class="custom-select">
            <select name="q_type" id="q_types">
                <option value="0">Select:</option>
                <option value="general">General Questions</option>
                <option value="volunteer">Volunteering</option>
                <option value="error">Report an Error/Glitch</option>
                <option value="stolen">Report Stolen Content</option>
                <option value="abuse">Report Abuse</option>
            </select>
        </div>
        <br>
        <label for="subject">Subject:</label>
        <input type="text" class="small-field fieldcolor" id="subject" name="subject">
        <br>
        <label for="email">Email:</label>
        <input type="email" class="small-field fieldcolor" id="email" name="email">
        <br>
        <label for="question">Enter your question or comment here:</label>
        <textarea class="large-field fieldcolor" id="question" name="question"></textarea>
        <br>
        <input type="submit" name="submit" class="sidebtn btncolor submit">
    </form>