<?php



$myfile = fopen("thisfile.txt","a") or die('cant open file');

$text = "Skylar Grey 2\n";

echo "We are here";

fwrite($myfile,$text);


fclose($myfile);








?>