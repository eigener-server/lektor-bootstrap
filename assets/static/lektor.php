<?php
$port = '5000';
header('Location: '
    . 'https://' . $_SERVER['HTTP_HOST'] . ':' . $port);
exit;
?>

