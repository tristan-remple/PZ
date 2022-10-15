<?php

include("frame.php");

if ((isset($_GET['id'])) && ($_GET['id'] !== '')) {
    $id = intval($_GET['id']);
} else {
    $id = 1;
}

?>

<div class="infobox biginfo">
    <div class="subtitle">Blog Title</div>
    <br>
    <div class="predate">Published 12/23/21</div>
    <br>
    Etiam posuere nisi eu eros rhoncus aliquet. Nullam interdum lobortis hendrerit. Proin pulvinar laoreet elementum. Praesent fringilla velit et sem gravida posuere. Sed et dapibus arcu. Morbi hendrerit mi in rutrum congue. Praesent eu est sollicitudin, vestibulum mauris vel, elementum lacus. Maecenas pretium, leo hendrerit sagittis molestie, nibh risus faucibus nisl, vel pulvinar libero lectus et nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur velit ante, gravida a felis vitae, molestie euismod libero.
    <br>
    <a class="sidebtn btncolor previewtitle" href="blog-archive.php">Archive</a>
</div>