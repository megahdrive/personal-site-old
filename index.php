<?php

require $_SERVER['DOCUMENT_ROOT'] . "/lib/lib.php";

use megahdrive\PersonalSite\PageBuilder;

$pageBuilder = new PageBuilder("Konnichiwa!", "The landing page of megahdrive.com");
$pageBuilder->BuildHeader();
?>
<div class="homepage-header">
    <h2>こんにちは！～</h2>
    <img class="circular-homepage-pic" src="/static/flagship.png" style="width: 100%;">
</div>

<p>I'm a backend programmer from Michigan. Here's some stuff I enjoy;</p>

<ul>
    <li>Honkai: Star Rail</li>
    <li>Programming</li>
    <li><i>Politics</i> <img src="/static/terrified.webp" alt="Terrified emoji" class="emoji"></li>
</ul>
<?php
$pageBuilder->BuildFooter();
?>