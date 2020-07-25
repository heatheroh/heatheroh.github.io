<?php

$inputA = $_REQUEST['name'];
$inputB = $_REQUEST['email'];
$inputC = $_REQUEST['message'];

$myfile = fopen("form_data.txt", "w") or die ("Unable to open file!");
fwrite($myfile, $inputA);
fclose($myfile);

?>
