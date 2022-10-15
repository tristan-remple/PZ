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
        <div class="sidebtn btncolor active">Request Changes</div>
        <a class="sidebtn btncolor" href="sub-withdraw.php<?php echo "?id=", $id; ?>">Withdraw Submission</a>
        <a class="sidebtn btncolor" href="substatus.php">My Submissions</a>
    </div>
    <br>
    <div class="subtitle">Request Changes</div>
    <br>
    You can use this page to request changes to pieces that you have submitted. All changes must be approved by staff. Changes to submissions that have already been published may not be accepted. If you wish to change more than one aspect of your submission, you may submit this form more than once. All fields are required.
    <br><br>
    <form class="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
    
    <div class="radiolabel">Submission title:</div>
    <div class="small-field fieldcolor">Good Graces</div>
    <br>
    
        <label for="q_type">Please select which category you are changing:</label>
        <div class="custom-select">
            <select name="q_type" id="q_types">
                <option value="0">Select:</option>
                <option value="general">Basics</option>
                <option value="volunteer">Details</option>
                <option value="error">Files</option>
            </select>
        </div>
        <br>
        
        <label for="field">Enter the title of the field you wish to change:</label>
        <input type="text" class="small-field fieldcolor" id="field" name="field">
        <br>
        
        <label for="content">Enter what you wish to change it to:</label>
        <input type="content" class="small-field fieldcolor" id="content" name="content">
        <br>
        
        <div class="radiolabel">File Upload:</div>
            <label class="dragzone" for="files"
                onclick="isClick();"
                ondragenter="isDrag();"
                ondragleave="notDrag();"
                ondragend="notDrag();"
                ondragover="dragging(event);"
                ondrop="isDrop(event);">
                <div id="droptext">
                    Drag and drop your files here. You may upload up to six (6) files.
                </div>
                <div class="hidden">
                    <input type="file" id="files" value="">
                </div>
            </label>
            <br>
        
        <label for="question">Enter additional questions or comments here:</label>
        <textarea class="large-field fieldcolor" id="question" name="question"></textarea>
        <br>
        
        <label for="password">Please re-enter your password for security:</label>
        <input type="password" class="small-field fieldcolor" id="password" name="password">
        <br>
        
        <input type="hidden" id="user_id" value="<?php ?>">
        <input type="hidden" id="sub_id" value="<?php echo $id; ?>">
        
        <input type="submit" name="submit" class="sidebtn btncolor submit">
    </form>