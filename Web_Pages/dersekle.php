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
    <h3 id="h3iletisim" style="color:green; font-size:25px;">DERS EKLE</h3>
    <form action="dersekle.php" method="post" autocomplete="off">
    <div id="formgroup">
      <div id="solform">
        <input type="text" name="dersadi" placeholder="Ders Adı" required class="form-control">
        <input type="text" name="hocaadi" placeholder="Hoca Adı" required class="form-control">
      </div>
      
      <textarea name="konu" id="" cols="30" placeholder="DERS KONUSU"
      rows="10" required class="form-control"></textarea>
      <input type="submit" value="DERSİ KAYDET " style="color:green; font-size: 20px;">
    </div>
    </form>
  </div>
</section>
</body>
</html>
<?php

include("baglanti.php");
if(isset($_POST["dersadi"],$_POST["hocaadi"],$_POST["konu"],))
{
  $ders_adii=$_POST["dersadi"];
  $hoca_adii=$_POST["hocaadi"];
  $konusu=$_POST["konu"];
  

  $ekle="INSERT INTO tbl_dersler(ders_adi,hoca_adi,ders_konusu)
   VALUES ('".$ders_adii."','".$hoca_adii."','".$konusu."')";

  if($baglan->query($ekle)===TRUE)
  {
    echo "<script>alert('Ders başarı ile eklenmiştir.')</script>";
  }
}
?>


