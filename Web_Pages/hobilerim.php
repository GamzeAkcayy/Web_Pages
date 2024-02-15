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

<section id="hobiler">
    <div class="container">
            <h3>HOBİLERİM</h3>
    <div>
        <div class="card">
             <img src="images/koşu.jpg" alt="" 
             class="img-fluid">
             <h5 class="baslikcard" style="font-size: 25px;">Koşu Yapmak</h5>
             
        </div>
        <div class="card">
            <img src="images/yapboz.jpg" alt="" 
            class="img-fluid">
            <h5 class="baslikcard" style="font-size:25px;">Yapboz Yapmak</h5>
            
       </div>
       <div class="card">
        <img src="images/kitap.jpg" alt="" 
        class="img-fluid">
        <h5 class="baslikcard" style="font-size:25px;">Kitap Okumak</h5>
       
   </div>
   <div class="card">
    <img src="images/yürüyüş.jpg" alt="" 
    class="img-fluid">
    <h5 class="baslikcard" style="font-size:25px;">Yürüyüş Yapmak</h5>
    
</div>
    </div>
</section>
</body>
</html>