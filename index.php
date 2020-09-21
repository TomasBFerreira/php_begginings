<?php
include(__DIR__ . '/f1trklstarray.php');
foreach (getTrackList() as $id => $element){
echo '<p><b>Race:</b><a href=/trackarray.php?id=' . $id . '>' . $element[0] .' </a>  <b>Track:</b>' . $element[1] . '</p>';
}
