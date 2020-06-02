<?php 


include 'phpqrcode/qrlib.php';
$path = "192.168.43.45/gorbon/files/".$_GET['link'];
QRcode::png($path);