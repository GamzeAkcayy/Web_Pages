<?php 
include ("baglanti.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style4.css">
<link rel="stylesheet" href="style3.css">
</head>
<body>
<div>
<ul>
        <li><a href="anasayfa.php" >Anasayfa</a>
    <li><a href="#" onclick="return false">Makaleler</a>
         <ul>
        <li><a href="makaleler.php">Makaleler</a></li>
      </ul></li>

    <li><a href="#" onclick="return false">Dersler</a>
         <ul>
        <li><a href="dersler.php">Dersler</a></li>   
      </ul></li>

    <li><a href="hobilerim.php">Hobiler</a></li>
    <li><a href="iletisim.php">Hakkımda</a></li>
    <a href="login.php"><button class="button" id="loginbutonu" 
    style="top: 10px;">Giriş</button></a>
</ul>
</div>
<div style="position: absolute; top: 35%; left: 27%;">
<h2 style="color: aliceblue; text-align: center;">KULLANICI GİRİŞİ</h2>

<form action="lgn.php" method="post" autocomplete="off">
  

  <div class="container">
    <label for="uname" style="color: white;"><b>Kullanıcı Adı</b></label>
    <input type="text" placeholder="Kullanıcı Adı" name="uname" required>

    <label for="psw" style="color: white;"><b>Şifre</b></label>
    <input type="password" placeholder="Şifre" name="psw" required>
        
    <button type="submit" name="btnLgn" class="btck">Giriş</button>
    
  </div>


</form>
</div>
</body>
</html>
