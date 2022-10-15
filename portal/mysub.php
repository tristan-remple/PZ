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
        <a class="sidebtn btncolor" href="sub-withdraw.php<?php echo "?id=", $id; ?>">Withdraw Submission</a>
        <a class="sidebtn btncolor" href="substatus.php">My Submissions</a>
    </div>
    <br>
    <div class="subtitle">Good Graces</div>
    <br>
    <div class="blogprebox">
        <div class="blogpre">
            <div class="previewtitle">Basics</div>
            <div class="readmore faq" id="basic">Expand</div>
        </div>
        <div class="answer hidden" id="basic">
            <div class="radiolabel">Name:</div>
            <div class="small-field fieldcolor">Knife</div>
            
            <div class="radiolabel">Email:</div>
            <div class="small-field fieldcolor">knife@knifequeerart.com</div>
            
            <div class="radiolabel">Credits:</div>
            <div class="tinyrow">
                <div class="radiolabel">Credit 1:</div>
                <div class="small-field fieldcolor">knifequeerart.com</div>
            </div>
            <div class="tinyrow">
                <div class="radiolabel">Credit 2:</div>
                <div class="small-field fieldcolor">twitter.com/knifequeer</div>
            </div>
        
            <div class="radiolabel">Anonymous Submission:</div>
            <div class="small-field fieldcolor">Credited (not anonymous)</div>
            
        </div>
        <div class="blogpre">
            <div class="previewtitle">Submission Details</div>
            <div class="readmore faq" id="submission">Expand</div>
        </div>
        <div class="answer hidden" id="submission">
            <div class="radiolabel">Title:</div>
            <div class="small-field fieldcolor">Good Graces</div>
            <br>
            
            <div class="radiolabel">Theme:</div>
            <div class="small-field fieldcolor">Incest</div>
            <br>
            
            <div class="radiolabel">Content Type:</div>
            <div class="small-field fieldcolor">Fiction</div>
            <br>
            
            <div class="radiolabel">Fandom:</div>
            <div class="small-field fieldcolor">Fire Emblem: Three Houses</div>
            <br>
            
            <div class="radiolabel">Characters and Ships:</div>
            <div class="small-field fieldcolor">Lonato/Ashe</div>
            <br>
            
            <div class="radiolabel">Tags:</div>
            <div class="small-field fieldcolor">Incest, blowjob, age gap</div>
            <br>
            
            <div class="radiolabel">Additional Comments:</div>
            <div class="large-field fieldcolor">
                I wrote this such a long time ago, I don't remember what the tags should actually be.
            </div>
            <br>
        </div>
        <div class="blogpre">
            <div class="previewtitle">Files</div>
            <div class="readmore faq" id="files">Expand</div>
        </div>
        <div class="answer hidden" id="files">
            <div class="radiolabel">Files:</div>
            <div class="small-field fieldcolor">good-graces.txt</div>
            <div class="small-field fieldcolor">Good Graces.docx</div>
        </div>
        <div class="blogpre">
            <div class="previewtitle">Application</div>
            <div class="readmore faq" id="app">Expand</div>
        </div>
        <div class="answer hidden" id="app">
            <div class="radiolabel">Application Status:</div>
            <div class="small-field fieldcolor">Accepted</div>
            <br>
            
            <div class="radiolabel">Decision Date:</div>
            <div class="small-field fieldcolor">1/6/22</div>
            <br>
            
            <div class="radiolabel">Staff Notes:</div>
            <div class="large-field fieldcolor">
                We reached out to you on Discord in January to see if you're still interested in submitting this. You said yes.
            </div>
            <br>
            
            <div class="radiolabel">Change Log:</div>
            <div class="small-field fieldcolor">You updated text file with spelling corrections approved on 2/16/22.</div>
            <div class="small-field fieldcolor">Staff modified the tags on 2/22/22.</div>
            
        </div>
    </div>
    
    </form>