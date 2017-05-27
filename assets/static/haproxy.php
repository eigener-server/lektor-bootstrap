<?php
$port = '1936';
header('Location: '
    . 'https://' . $_SERVER['HTTP_HOST'] . ':' . $port);
exit;
?>
