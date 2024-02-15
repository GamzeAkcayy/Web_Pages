<?php 
include ("baglanti.php");
session_start(); 
?>
 
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>BLOG SAYFASI</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="style5.css">
</head>
<body id="anasayfa">
  <?php
  if($_SESSION['menn']){
    include("m.php");
  }
  else{
    include("m2.php");
  }
?>
<section id="iletisimalan">
   <h1 id="h3iletisim" style="color: #39B95A; font-size: 40px;">DERSLER</h1><br>
    <div class="container">
        <?php

          if ($baglan != null) {
            $sql = $baglan->prepare("SELECT * FROM tbl_dersler");
            $sql->execute();
            echo '<center><div class="container">';
            while ($makale = $sql->fetch(PDO::FETCH_ASSOC))
            {
              echo '<div class="item">';
              echo '<p style="color: white; font-size: 25px; text-align: center;">Ders Adı: '.$makale['ders_adi'];
              echo '<p style="color: white; font-size: 20px; text-align: center;">Hoca Adı: '.$makale['hoca_adi'];
              echo '<p style="color: white; font-size: 19px; text-align: center;">Konu: '.$makale['ders_konusu'];
              echo '</div>';
              echo '<br><br><hr style="width: 1250px;"><br><br>';
            }
            echo '</div></center>';
        }

?>
  
  </div>
</section>
</body>
</html>