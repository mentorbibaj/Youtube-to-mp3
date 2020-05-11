<?php


$q = $_GET['q'];
$h = $_GET['h'];

$time = md5(date('ymdhis'));

exec("youtube-dl --extract-audio --audio-format mp3 --output mp3/\"$time.%(ext)s\" ".$q);

$filepath = "https://".$_SERVER['SERVER_NAME']."/ngr/mp3/".$time.".mp3"; 

//redirect back
header('Location: '.$h.'/?r='.$filepath);