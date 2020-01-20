<?php
$badword = $_GET['parola'];
$testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.';
$asterischi = '***';
$nuovaFrase = str_replace($badword,$asterischi,$testo );

echo $nuovaFrase;
?>
