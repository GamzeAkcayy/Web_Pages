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
    <link rel="stylesheet" href="style7.css">
    
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
  <h1 id="h3iletisim" style="color: #39B95A; font-size: 40px;">MAKALELER</h1>
    
    <div class="container">
        <?php

          if ($baglan != null) {
              $sql = $baglan->prepare("SELECT * FROM tbl_makaleler");
              $sql->execute();
              echo '<center><div class="container">';
              while ($makale = $sql->fetch(PDO::FETCH_ASSOC))
              {
                echo '<div class="item">';
                echo '<a href="makaledetay.php?stdID='.$makale['makale_id'].'" style="text-decoration-line: none; color: white; onclick=';
                echo '"><p style="color: white; font-size:30px; text-align: center;">  '.$makale['makale_ad'];
                echo '</a></div>';
                echo '<p style="color: white; position: absolute; left: 400px; font-size: 19px">Yazar: '.$makale['makale_yazar'];
                echo '<p style="color: white; position: absolute; right: 400px; font-size: 19px">Tarih: '.$makale['makale_tarih'].'</p>';
                echo '<br><br><hr style="width: 1250px;"><br><br>';
              }
              echo '</div></div></center>';
          }

?>
    </div>
  </section>
  
</body>
</html>
