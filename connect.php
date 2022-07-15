<?php
require_once __DIR__ ."/vendor/autoload.php";
$team = (new MongoDB\Client)->footboll_championship->teams;
$game = (new MongoDB\Client)->footboll_championship->games;
?>