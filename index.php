<?php
include('f1trklstarray.php');
foreach ($trcklst as $id => $element){
echo '<p><b>Race:</b><a href=/trackarray.php?id=' . $id . '>' . $element[0] .' </a>  <b>Track:</b>' . $element[1] . '</p>';
}
