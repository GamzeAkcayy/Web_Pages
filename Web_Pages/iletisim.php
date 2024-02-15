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
<section id="iletisim">
        <div class="container">
            <h3 id="iletisim1" style="font-size: 35px;color: green;" >HAKKIMDA</h3>
            <div class="sutun-sol-sag">
                <img src="images/ppfotisi.jpeg" 
                alt="" class="img-fluis oval">
              </div><br><br><br><br>
                <h4 class="isim" style="color:green;font-size: 25px;">GAMZE AKÇAY</h4>
                <P class="bilgi" style="font-size: 20px; color:white;">
                    Merhaba, ben Gamze.Necmettin Erbakan Üniversitesi'nde Bilgisayar Mühendisliği 3.sınıf öğrencisiyim. Niğde'de doğdum. Konya'da yaşıyorum. Kitap okumaktan hoşlanırım. Web Programlama ve Mobil Programlamayla ilgileniyorum. Neşeli ve enerjik bir insanım. Alttaki  kısımdan sosyal medya hesaplarım ile bana ulaşabilirsiniz. Ayrıca en alt kısımdaki iletişim kutusundan da bana ulaşabilirisiniz.

                </P>
                <br>
            <div class="ikon">
              <a href="https://www.instagram.com/gamzeakcay_/" target="_blank"><img src="./images/insta.png" style="width: 45px; height: 45px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://twitter.com/izzetiikraminis/" target="_blank"><img src="./images/twit.png" style="width: 45px; height: 45px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://www.linkedin.com/in/gamze-ak%C3%A7ay-137334229/" target="_blank"><img src="./images/linkedn.png" style="width: 45px; height: 45px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="mailto:gamze4251akcay@gmail.com" target="_blank"><img src="./images/gmail.png" style="width: 45px; height: 45px;"></a>
            </div>        
            
        </div>
    </section>
    <section id="iletisimalan">
      <div class="container">
        <h3 id="h3iletisim" style="color: green;font-size: 35px;">İLETİŞİM BİLGİLERİ</h3>
        <form action="iletisim.php" method="post" autocomplete="off">
      
        <div id="formgroup">
          <div id="solform">
            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
          </div>
          <div id="sagform">
            <input type="email" name="mail" placeholder="Mail Adresiniz" required class="form-control">
            <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
          </div>
          <textarea name="mesaj" id="" cols="5" placeholder="Mesaj Giriniz"
          rows="10" required class="form-control"></textarea>
          <input type="submit" value="Gönder " style="color:green; font-size:20px; text-align: center;">
        </div>
        </form>
      </div>
      </div>
    </section>
</body>
</html>
<?php

include("baglanti.php");
if(isset($_POST["isim"],$_POST["tel"],$_POST["mail"],$_POST["konu"],
$_POST["mesaj"]))
{
  $adsoyad=$_POST["isim"];
  $telefon=$_POST["tel"];
  $email=$_POST["mail"];
  $konu=$_POST["konu"];
  $mesaj=$_POST["mesaj"];

  $ekle="INSERT INTO tbl_iletisim(ad_soyad,telefon,email,konu,mesaj)
   VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

  if($baglan->query($ekle)===TRUE)
  {
    echo "<script>alert('mesajınız başarı ile gönderilmiştir.')</script>";
  }

}
?>