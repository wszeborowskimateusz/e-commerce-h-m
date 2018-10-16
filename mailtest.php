<?php
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <prestashop@hm.pl>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$to = 'prestashop.hm@gmail.com';
$body = 'elo';
$subject = 'test';
mail('prestashop.hm@gmail.com', 'test', 'elo', $headers);
?>
