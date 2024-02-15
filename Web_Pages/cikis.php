<?php
include("baglanti.php");
session_start();
$_SESSION['menn'] = TRUE;
Header("Location: anasayfa.php");
sleep(0.5);
?>