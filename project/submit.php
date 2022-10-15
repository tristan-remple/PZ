<?php

include("../nav/frame.php");

?>
<div class="infobox biginfo">
    <div class="subtitle">Submission</div>
    <br>
    This is the submission form. Please read the instructions carefully. Required fields are marked with a *.
    <br><br>
    <form class="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
    <div class="blogprebox">
        <div class="blogpre">
            <div class="previewtitle">Basics</div>
            <div class="readmore faq" id="basic">Expand</div>
        </div>
        <div class="answer hidden" id="basic">
            <label for="name">Name*:</label>
            You must provide the staff with a name to address you as, even if you’re submitting anonymously. This name can be your username, a nickname you use, or your real first name (no last names necessary).
            <input type="text" class="small-field fieldcolor" id="name" name="name">
            
            <label for="email">Email*:</label>
            This is also for staff reference, in case we need to make changes or ask questions regarding your submission.
            <input type="email" class="small-field fieldcolor" id="email" name="email">
            
            <div class="radiolabel">Credits</div>
            Please provide us with two social media accounts, personal/work sites, or anything else we can use to verify that you submitted content to us, get in contact with you in the future, or include in the creator’s index. If you’d like to share more websites with the readers, purchase an ad slot - all zine advertisement proceeds are a part of the fundraiser! If you would not like these sites to be public, you may select anonymous submission below.
            <div class="tinyrow">
            <label for="credit-1">Credit 1*:</label>
            <input type="url" class="small-field fieldcolor" id="credit-1" name="credit-1">
            </div>
            
            <div class="tinyrow">
            <label for="credit-2">Credit 2:</label>
            <input type="url" class="small-field fieldcolor" id="credit-2" name="credit-2">
            </div>
        
            <div class="radiolabel" id="anon" tabindex="0">Anonymous Submission*:</div>
            If you do not want your name, sources, or anything identifying you to be published with your submission, mark “Anonymous”. Mark “Credited” if you’d like your name and URLs to be published with your submission.
            <div class="radiobox" id="radioanon">
                <label class="radiocon">Credited
                  <input type="radio" id="not_anon" name="anonymous" value="not_anon" tabindex="-1" checked="true">
                  <span class="checkdot impcol" tabindex="-1"></span>
                </label>
                <label class="radiocon">Anonymous
                  <input type="radio" id="anon" name="anonymous" value="anon" tabindex="-1">
                  <span class="checkdot impcol" tabindex="-1"></span>
                </label>
            </div>
            
        </div>
        <div class="blogpre">
            <div class="previewtitle">Verification</div>
            <div class="readmore faq" id="verify">Expand</div>
        </div>
        <div class="answer hidden" id="verify">
            <div class="tinyrow">
            <input type="checkbox" class="checkbox checkcolor" name="vrules" value="vrules"><label for="vrules">* I have read the <a href="../rules.php">rules</a> and I agree to follow them.</label>
            </div>
            <br>
            
            <div class="tinyrow">
            <input type="checkbox" class="checkbox checkcolor" name="vage" value="vage"><label for="vage">* I am a legal adult over the age of 18 years old.</label>
            </div>
            <br>
            
            <div class="tinyrow">
            <input type="checkbox" class="checkbox checkcolor" name="vown" value="vown"><label for="vown">* I am the creator and owner of the content I am submitting.</label>
            </div>
            <br>
            
            <div class="tinyrow">
            <input type="checkbox" class="checkbox checkcolor" name="vperm" value="vperm"><label for="vperm">* I am giving Problematique Zine permission to publish the content I am submitting and to use it in promotional materials, whole or edited.</label>
            </div>
            <br>
            
        </div>
        <div class="blogpre">
            <div class="previewtitle">Submission Details</div>
            <div class="readmore faq" id="submission">Expand</div>
        </div>
        <div class="answer hidden" id="submission">
            <label for="title">Title:</label>
            Not required but helpful!
            <input type="text" class="small-field fieldcolor" id="title" name="title">
            <br>
            
            <label for="theme">Please select the theme you are submitting to*:</label>
            Please choose the theme that your work best fits into, but note that we may change this during publication.
            <div class="custom-select">
                <select name="theme" id="themes">
                    <option value="0">Select:</option>
                    <option value="ageplay">Ageplay</option>
                    <option value="bdsm">BDSM</option>
                    <option value="slashfic">Slashfic</option>
                    <option value="incest">Incest</option>
                    <option value="beastiality">Beastiality</option>
                    <option value="gore">Gore</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <br>
            
            <label for="theme">Content Type*:</label>
            Note which type of submission you’re sending in, such as fanart, fanfic, comic, or a combination of any mediums.
            <div class="custom-select">
                <select name="type" id="types">
                    <option value="0">Select:</option>
                    <option value="illustration">Illustration</option>
                    <option value="comic">Comic</option>
                    <option value="fiction">Fiction</option>
                    <option value="article">Article</option>
                </select>
            </div>
            <br>
            
            <label for="fandom">Fandom*:</label>
            If you’re submitting content with all original characters, just write “Original”. Otherwise, write the full title (no abbreviations) of the work you’re referencing in your content.
            <input type="text" class="small-field fieldcolor" id="fandom" name="fandom">
            <br>
            
            <label for="character">Characters and Ships*:</label>
            Ships are not required, but a list of all involved characters is. Separate characters a ships by comma, and write ships with “Character A/Character B” format, separating each ship by comma as well. Write the proper names of each character (no nicknames, no combination ship names - example: “BakuDeku” should be written “Katsuki Bakugou/Izuku Midoriya”)
            <input type="text" class="fieldcolor small-field" id="character" value=""></input>
            <br>
            
            <label for="tags">Tags:</label>
            List as many or as few tags as you’d like, describing the events or kinks represented in the work. Note that we may add or change these during publication.
            <input type="text" class="fieldcolor small-field" id="tags" value=""></input>
            <br>
            
            <label for="comment">Additional Comments:</label>
            If you have notes about how you’d like your content to be published, including using a different name or other preferences, please let us know. For questions, it’s best to fill out our contact form to get a timely response.
            <textarea class="large-field fieldcolor" id="comment" name="comment"></textarea>
            <br>
        </div>
        <div class="blogpre">
            <div class="previewtitle">Files</div>
            <div class="readmore faq" id="files">Expand</div>
        </div>
        <div class="answer hidden" id="files">
            There is no specific size that your image submissions must be, but if you’d like it to be ‘full view’ in the zine, the dimensions are: 2960 px wide by 1860 px tall. There is no limit to how much text is in your stories or articles. Anything we need to ‘cut’ for space will be added to the DLC folder in full, with an easy reference for readers to find the rest.
            <br><br>
            <label for="link">Link to Files:</label>
            All submissions must not be publicly shared online. If you have a link to a private post or cloud drive where your files are stored, feel free to use this box. If you’re sharing a link, make sure it will not expire later on.
            <input type="url" class="fieldcolor small-field" id="link" value=""></input>
            <br>
            
            <div class="radiolabel">File Upload:</div>
            You may also upload your files to us directly.
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
        </div>
    </div>
    
    <input type="hidden" id="user_id" value="<?php ?>">
    <input type="hidden" id="project" value="problematique">
    
    <input type="submit" name="submit" class="sidebtn btncolor submit">
    
    </form>