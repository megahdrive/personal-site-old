<?php
require $_SERVER['DOCUMENT_ROOT'] . "/lib/lib.php";

use megahdrive\PersonalSite\PageBuilder;

$pageBuilder = new PageBuilder("404", "Page could not be resolved");
$pageBuilder->BuildHeader();
?>
<h2>Resource <?= $_SERVER["REQUEST_URI"] ?> does not exist.</h2>
<?php
$pageBuilder->BuildFooter();
?>