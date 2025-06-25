<?php
require_once "config.php";
include('phpqrcode/qrlib.php');

$lang = $_REQUEST['lang'];

QRcode::png(SITE_URL.'/'.$lang,false,QR_ECLEVEL_L,3);
?>
