<?php
include(__DIR__ . '/f1trklstarray.php');
$id = $_GET['id'];
echo 'This is the ' . getTrackList()[$id][0]. '!';
