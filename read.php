<?php
$file = fopen("bic.txt", "r") or die("Unable to open file!");
$text=fread($file,filesize("bic.txt"));
echo $text;
fclose($file);
?>