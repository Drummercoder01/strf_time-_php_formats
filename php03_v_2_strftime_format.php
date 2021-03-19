<?php

$_output="";

$_output.= 'strftime("%d %m %Y %H:%M:%S")<br>';
$_output.= strftime("%d %m %Y %H:%M:%S")."<br><br>";

$_output.= 'strftime("%d/%m/%Y %H:%M:%S")<br>';
$_output.= strftime("%d/%m/%Y %H:%M:%S")."<br><br>";
	
$_output.= 'strftime("%A %d %B %Y %H:%M:%S")<br>';
$_output.= strftime("%A %d %B %Y %H:%M:%S")."<br><br>";

$_output.= 'strftime("%a %d %b %Y %H:%M:%S")<br>';
$_output.= strftime("%a %d %b %Y %H:%M:%S")."<br><br>";

$_output.= 'strftime(" %I %p")<br>';
$_output.= strftime("%I %p")."<br><br>";

$_output.= 'strftime("%r")<br>';
$_output.= strftime("%r")."<br><br>";

$_output.= 'strftime("%R")<br>';
$_output.= strftime("%R")."<br><br>";

echo ($_output);
?>	
