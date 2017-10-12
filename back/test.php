<?php
include 'class_libs/main.php';

// instiating a new object from class_libs/login using the register class
$act = new actions();

$body =  $act->getTemplate();
echo $body
?>