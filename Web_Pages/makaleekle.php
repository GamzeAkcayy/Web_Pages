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
  <div class="container">
    <h3 id="h3iletisim" style="color:aliceblue;font-size: 30px;color: green;" >MAKALE EKLE</h3>
    <form action="makaleekle.php" method="post" autocomplete="off">
  
    <div id="formgroup">
      <div id="solform">
        <input type="text" name="makaleadi" placeholder="Makale Adi" required class="form-control">
        <input type="text" name="makaleyazari" placeholder="Makale Yazar" required class="form-control">
        
      </div>
      
      <textarea name="makalekonusu" id="" cols="30" placeholder="MAKALE KONUSU"
      rows="10" required class="form-control"></textarea>
      <input type="submit" value="MAKALEYİ EKLE" style="font-size:20px;color: green;animation: ;">
    </div>
    </form>
  
  </div>
</section>
</body>
</html>
<?php

include("baglanti.php");
if(isset($_POST["makaleadi"],$_POST["makaleyazari"],$_POST["makalekonusu"],))
{
  $makale_adi=$_POST["makaleadi"];
  $makale_yazari=$_POST["makaleyazari"];
  $makale_konusu=$_POST["makalekonusu"];
  

  $ekle="INSERT INTO tbl_makaleler(makale_ad,makale_yazar,makale)
   VALUES ('".$makale_adi."','".$makale_yazari."','".$makale_konusu."')";

  if($baglan->query($ekle)===TRUE)
  {
    echo "<script>alert('Makale başarı ile eklenmiştir.')</script>";
  }
}
?>