<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="Content-Security-Policy" content="default-src 'none';
  script-src 'self' www.google-analytics.com ajax.googleapis.com;
  prefetch-src 'self' fonts.googleapis.com fonts.gstatic.com;
  font-src 'self' fonts.googleapis.com fonts.gstatic.com;
  connect-src 'self';
  img-src 'self';
  style-src 'self' fonts.googleapis.com;
  base-uri 'self';
  form-action 'self'">
  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Philosopher&family=Qwitcher+Grypen&family=Shalimar&family=Tangerine:wght@700&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/pomegranate.css">
<link rel="stylesheet" type="text/css" href="css/desktop.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  
$(document).ready(function() {

$('.checkbox2').keypress(function(event) {
  if ((event.keyCode == 13) || (event.keyCode == 32)) {
    $(this).click();
  }
});

});

</script>

</head>
<body>
<div class="verti">
  
  <div class="enabler">
    <div class="sidebar">
      <div class="title">Problematique</div>
      <div class="itext">
        NSFW / 18+<br>
        Digital Fandom Zine
      </div>
      <hr>
      <div class="buttonbox">
        <a class="sidebtn sidebtncolor" href="https://problematique.fan">Staff</a>
        <a class="sidebtn sidebtncolor" href="nav/blog.php">Blog</a>
        <a class="sidebtn sidebtncolor" href="project/guide.php">Project Guide</a>
        <a class="sidebtn sidebtncolor" href="project/submit.php">Submit</a>
        <a class="sidebtn sidebtncolor" href="nav/contact.php">Contact</a>
      </div>
      <hr>
      <div class="guessbox"></div>
    </div>
    <div class="mainbox">
      <div class="userlinks">
        User Portal | <a href="portal/signin">Sign In</a> | <a href="portal/register">Register</a>
      </div>
<div class="rowbox">
      <div class="infobox">
        <div class="subtitle">Staff</div>
        <div class="zestrow">
          <img class="icon" src="img/zesty.png">
          <a class="previewtitle sidebtn btncolor" href="https://ethicallyzesty.com">Ethically Zesty</a>
        </div>
        Etiam posuere nisi eu eros rhoncus aliquet. Nullam interdum lobortis hendrerit. Proin pulvinar laoreet elementum. Praesent fringilla velit et sem gravida posuere. Sed et dapibus arcu. Morbi hendrerit mi in rutrum congue. Praesent eu est sollicitudin, vestibulum mauris vel, elementum lacus. Maecenas pretium, leo hendrerit sagittis molestie, nibh risus faucibus nisl, vel pulvinar libero lectus et nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur velit ante, gravida a felis vitae, molestie euismod libero.
      </div>
      <div class="infobox">
        <div class="subtitle">Blog</div>
        <div class="blogprebox">
          <div class="blogpre">
            <div class="previewtitle">Project Update</div>
            <div class="predate">Published 12/23/21</div><br>
            Some text goes here from the blog post.<br>
            <a class="readmore" href="nav/blog.php?id=1">Read More</a>
          </div>
          <div class="blogpre">
            <div class="previewtitle">Project Update</div>
            <div class="predate">Published 12/23/21</div><br>
            Some text goes here from the blog post.<br>
            <a class="readmore" href="nav/blog.php?id=2">Read More</a>
          </div>
          <a class="sidebtn btncolor previewtitle" href="nav/blog-archive.php">Archive</a>
          </a>
        </div>
      </div>
      <div class="infobox">
        <div class="subtitle">Project Guide</div>
        <div class="btncase">
          <a class="sidebtn btncolor min" href="project/guide.php">Creator's Guide</a>
          <a class="sidebtn btncolor min" href="project/ads.php">Ads & Fundraising</a>
          <a class="sidebtn btncolor min" href="project/faq.php">FAQ</a>
          <a class="sidebtn btncolor min" href="project/current.php">Current Set #1: Prostasia</a>
        </div>
        Curabitur mattis scelerisque ex, eget maximus lacus dignissim et. Aliquam gravida enim nibh, quis tincidunt elit interdum eget. Nulla tellus turpis, lacinia sed tincidunt ac, mollis aliquam est. Curabitur non erat tempus, faucibus sem eu, varius nunc. Ut arcu nulla, mollis eget dui a, rhoncus feugiat tellus. Ut pharetra arcu libero, at volutpat sapien cursus ac. Donec et mi dui. Aliquam erat volutpat. Maecenas laoreet, ante sed viverra malesuada, tellus augue tincidunt ex, a interdum lectus lorem id orci. Aenean a sem tempus, sagittis ante id, vulputate magna.
      </div>
      <div class="infobox">
        <div class="subtitle">Submit</div>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris gravida velit sit amet odio tristique volutpat. Aliquam rhoncus arcu non dolor cursus laoreet. Cras consequat leo lacus, eget ullamcorper nibh elementum quis. Duis rutrum metus imperdiet imperdiet luctus. Sed vulputate leo nec eros consequat porta. Proin sapien justo, vulputate vitae dolor quis, sollicitudin laoreet metus. Nam dui leo, feugiat nec dolor et, venenatis dictum mi. Mauris ipsum nisl, placerat ut blandit quis, lacinia sed leo. Praesent vel sapien varius, fringilla nisi sit amet, luctus odio. Mauris tristique dui sed eleifend rutrum. In hac habitasse platea dictumst.
        <a class="sidebtn btncolor previewtitle" href="project/submit.php">Submit</a>
      </div>
    </div>
  </div>
  </div>
  
</div>
</body>