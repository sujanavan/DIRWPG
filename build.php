<?php
$dir_path = "/home/www/tsujan.atwebpages.com/DSSWGP/";
$website_title = "Demo Website";
$website_content = "Demo Website Content. This is a demo article space where the main page information can be drafter and designed as per requirements";

$body="<center><title>".$website_title."</title>";
$body.="<h2 align=center>".$website_title."</h2>";
$body.="<a href=.>Home</a>";

foreach(glob($dir_path."*", GLOB_ONLYDIR) as $dir_name) {
    $dir_name = str_replace($dir_path, '', $dir_name);
    $body.=" || <a href=".$dir_name.">".$dir_name."</a>";
}

$body.="<p>".$website_content."</p>";

$body.="<br><hr><br>The following example was converted into the page above when build.php was invoked:-<br><img src=example.jpg>";

$myfile = fopen("index.html", "w") or die("Unable to open file!");
fwrite($myfile, $body);
fclose($myfile);

?>
