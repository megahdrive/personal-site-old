<?php

require $_SERVER['DOCUMENT_ROOT'] . "/lib/lib.php";

use megahdrive\PersonalSite\PageBuilder;

$enjoyedThings = [
    "Honkai: Star Rail",
    "Programming",
    "Reading manga and light novels",
];

$pageBuilder = new PageBuilder("Landing", "Landing page of megahdrive.com");
$pageBuilder->BuildHeader();
?>
<div class="homepage-header">
    <h2>こんにちは！～</h2>
    <img class="circular-homepage-pic" src="/static/flagship.png" style="width: 100%;">
</div>

<p>I'm a backend programmer from Michigan. Here's some stuff I enjoy;</p>

<ul>
    <?php foreach ($enjoyedThings as $thing) {?>
        <li><?=$thing?></li>
    <?php }?>
</ul>

<?php
$pageBuilder->BuildFooter();
?>